<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use \Mailjet\Client;
use \Mailjet\Resources;
use App\Models\CampModel;
use App\Helpers\list_contact;
use App\Helpers\sanitizer;

class CampaignController extends Controller
{
   // Define Mailjet client as a private property.
   private $mj;
   protected $camp;

   public function __construct()
   {
       // Initialize Mailjet client only once in the constructor.
       $this->mj = new Client(getenv('MAILJET_API_KEY'), getenv('MAILJET_API_SECRET'), true, ['version' => 'v3.1']);
       $this->camp = new CampModel();
       helper(['list_contact','sanitizer']);

   }
  
    public function sendEmail()
    {
    
         // Set global defaults
        $globalDefaults = [
            'From' => [
                'Email' => "crm@itmonkinc.com",
                'Name' => "Itmonk"
            ],
            'Subject' => "1234",
            'TextPart' => "This is a send mail function",
            'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
            'CustomID' => "AppGettingStartedTest"
        ];

        // Prepare email body.
        $body = [
            'Globals' => $globalDefaults,
            'Messages' => []
        ];

        // Add messages for each recipient
        foreach ($recipientEmails as $recipientEmail) {
            $body['Messages'][] = [
                'To' => [
                    [
                        'Email' => $recipientEmail,
                        'Name' => "Itmonk"
                    ]
                ],
            ];
        }
        // Send the email.
        $response = $this->mj->post(Resources::$Email, ['body' => $body]);

        // Check if the email was sent successfully.
        if ($response->success()) {
            // Convert the response data to JSON format.
            $jsonData = json_encode($response->getData(), JSON_PRETTY_PRINT);
        
            // Display the JSON-encoded response data.
            print_r($response);
            echo $jsonData;
        } else {
            // Handle API error
            echo json_encode(['error' => "Failed to fetch messages. Error: " . $response->getReasonPhrase()]);
        }
    }

    public function SaveCampaignDraft()
    {
        // Get the post data from AJAX request
        $subject = sanitize($this->request->getPost('subject'));
        $from_mail = sanitize($this->request->getPost('from_mail'));
        $from_name = sanitize($this->request->getPost('from_name'));
        $from_company_name = sanitize($this->request->getPost('from_company_name'));
        $from_company_campaign_name = sanitize($this->request->getPost('from_company_campaign_name'));
        $content = $this->request->getPost('content');
        
        $List_ids = $this->request->getPost('List_ids');
        $data = json_decode($List_ids, true);

            // Validate email format using regex pattern
            if (!filter_var($from_mail, FILTER_VALIDATE_EMAIL)) {
                // Return error response if email format is invalid
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Invalid email format for from_mail.',
                ]);
            }else if ($subject =='' || $from_name =='' || $from_company_campaign_name ==''){
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Required fields cannot be empty.',
                ]);
            }else if (empty($data['lists_array'])){
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Select at least one list.',
                ]);
            }else{
                $user_id = session()->get('user_id');
                // Prepare the data array
                $data = [
                    'user_id' => $user_id,
                    'subject' => $subject,
                    'from_mail' => $from_mail,
                    'from_name' => $from_name,
                    'from_company_name' => $from_company_name,
                    'from_company_campaign_name' => $from_company_campaign_name,
                    'content' => json_encode($content),
                    'selected_lists' => $List_ids,
                ];
                $result = $this->camp->saveCampaign($data);
                if($result){
                    // $lastInsertId = $this->camp->insertID();
                    $this->sendBulkEmail($subject, $from_name,$from_company_campaign_name, $content, $List_ids);
                   // return $this->response->setJSON($result);
                }
                
               
                
            }
     
    }


    public function sendBulkEmail($subject, $from_name, $from_company_campaign_name, $content, $List_ids)
    {
        $recipients = GetContactEmailByListArray($List_ids);
        $user_id = session()->get('user_id');
        // Sample recipients (you can fetch from a database or any other source)
        if (empty($recipients)) {
            // Handle the case where no recipients are found
            return json_encode(['status' => 'error', 'message' => 'No recipients found.']);
        }
    
        $globalDefaults = [
            'From' => [
                'Email' => getenv('MAILJET_SEND_MAIL'),
                'Name' => $from_name
            ],
            'Subject' => $subject,
            'TextPart' => $content,
            'HTMLPart' => $content,
            'CustomID' => 'user_id_'.$user_id,
            'CustomCampaign' => $from_company_campaign_name.'_'.$user_id,
        ];
        
        // Prepare email body.
        $body = [
            'Globals' => $globalDefaults,
            'Messages' => []
        ];
        
        // Add messages for each recipient
        foreach ($recipients as $recipientEmail) {
            
            $body['Messages'][] = [
                'To' => [
                    [
                        'Email' => $recipientEmail['email']
                    ]
                ]
            ];
        }
        
    
        try {
            // Send the bulk email using Mailjet API
            $response = $this->mj->post(Resources::$Email, ['body' => $body]);
    
           // print_r($body['Messages']);
          // print_r($response);
            if ($response->success()) {
                // Access the response data directly from the array
                $responseData = $response->getData();
   
                // Check if the 'Messages' array is not empty
                if (!empty($responseData['Messages'])) {  
                    
                    $firstMessage = $responseData['Messages'][0];
                    $status = $firstMessage['Status']; 
                   // print_r($firstMessage);
                    echo json_encode(['status' => $status, 'message' => 'Emails from Lists added to Queued, will be delivered shortly.']);
                }else{
                    echo json_encode(['status' => 0, 'message' => 'Somthing went wrong!']);
                }
    
            } else {
                // Handle API error
                echo  json_encode(['status' => 0, 'message' => "Failed to fetch messages. Error: " . $response->getReasonPhrase()]);
            }
        } catch (\Exception $e) {
            // Log the exception (consider using logging libraries like Monolog)
            log_message('error', 'Error in sendBulkEmail: ' . $e->getMessage());
            echo json_encode(['status' => 'error', 'message' => 'An unexpected error occurred.']);
        }
    }
    


    public function getCampaignByCustomID()
    {
        $mj = new Client(getenv('MAILJET_API_KEY'), getenv('MAILJET_API_SECRET'), true, ['version' => 'v3']);
        $user_id = session()->get('user_id');
        // $camp_id = '7657336774';
        // $camp_name = 'Name_of_the_campaign_1';
        $filters = [
            'CustomID' => 'user_id_'.$user_id,
        ];

        try {
           
            // Use the request method with GET HTTP verb and pass filters as parameters
            $response = $mj->get(Resources::$Campaign, ['filters' => $filters]);
            // Use the request method with GET HTTP verb and pass filters as parameters
          //  $response = $mj->get(Resources::$CampaignDetail, ['filters' => $filters]);

    
            // Check if the request was successful
            if ($response->success()) {
                // Output the data received from Mailjet
               
                return $response->getData();

            } else {
                // Output the error details if the request was not successful
                echo 'Error: ' . $response->getReasonPhrase();
            }
        } catch (\Exception $e) {
            // Output any exceptions that occur during the API request
            echo 'Exception: ' . $e->getMessage();
        }
    }
    

    public function getMessageByCustomID($campaign_id)
    {
        $mj = new Client(getenv('MAILJET_API_KEY'), getenv('MAILJET_API_SECRET'), true, ['version' => 'v3']);
        $user_id = session()->get('user_id');
        $filters = [
            'CustomID' => 'user_id_'.$user_id,
            'CampaignID' => $campaign_id,
        ];

        try {
       
            // Use the request method with GET HTTP verb and pass filters as parameters
            $response = $mj->get(Resources::$Message, ['filters' => $filters]);

    
            // Check if the request was successful
            if ($response->success()) {
                // Output the data received from Mailjet
                return $response->getData();
            } else {
                // Output the error details if the request was not successful
                echo 'Error: ' . $response->getReasonPhrase();
            }
        } catch (\Exception $e) {
            // Output any exceptions that occur during the API request
            echo 'Exception: ' . $e->getMessage();
        }
    }
    


    public function testing()
    {
        $mj = new Client(getenv('MAILJET_API_KEY'), getenv('MAILJET_API_SECRET'), true, ['version' => 'v3']);
        $user_id = session()->get('user_id');
        $filters = [
            'CustomID' => 'user_id_'.$user_id,
             'id'=> '288230398128154365'
        ];

        try {
       
      
            //$response = $mj->get(Resources::$Message, ['filters' => $filters]);
            //$response = $mj->get(Resources::$Campaign, ['filters' => $filters]);
           // $response = $mj->get(Resources::$Campaignoverview, ['filters' => $filters]);
            //$response = $mj->get(Resources::$Messageinformation,['filters' => $filters]);
            $response = $mj->get(Resources::$Messagehistory, ['filters' => $filters]);
            // Check if the request was successful
            if ($response->success()) {
                // Output the data received from Mailjet
              

              echo "<pre>";
                print_r($response->getData());
                echo "</pre>";

            } else {
                // Output the error details if the request was not successful
                echo 'Error: ' . $response->getReasonPhrase();
            }
        } catch (\Exception $e) {
            // Output any exceptions that occur during the API request
            echo 'Exception: ' . $e->getMessage();
        }
    }


    public function index(): string
    {
        $data['campaigns'] = $this->getCampaignByCustomID();
        $data['title'] =  'Status';
        return view('pages/status',$data);
    }

    public function status_details($campaign_id)
    {
        $campaign_id = sanitize($campaign_id);

        if(empty($campaign_id)){
            return error('Error','/status');
        }
      
       $data['messages'] = $this->getMessageByCustomID($campaign_id);
       $data['title'] = 'Campaign Details';
       return view('pages/status_details',$data);
    }



}

