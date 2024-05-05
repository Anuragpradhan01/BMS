<?php

namespace App\Controllers;
use App\Models\List_model;
use App\Models\Contact_model;
use CodeIgniter\Pager\Pager;

class ContactController extends BaseController
{
    protected $list_model;
    protected $contact_model;

    public function __construct()
    {  
        $this->list_model = new List_model();
        $this->contact_model = new Contact_model();
   
    }

    public function index(): string
    {
        
 
        $data['lists'] = $this->list_model->getListbyuserid();
        $data['title'] =  'Contact';
        return view('pages/contact',$data);
    }



    public function create()
    {
        $list_id = sanitize($this->request->getPost('list_id'));
        $contacts = sanitize($this->request->getPost('contacts'));
        

        if (!empty($list_id) && !empty($contacts)) {

            $count = $this->contact_model->createContacts($list_id,$contacts);

            if($count > 0) {
               return success($count.' Contacts Uploaded Successfully', '/upload-contact'); 
            }else {
                // For debugging: Log or display a message if creation fails
                log_message('error', 'Failed to Upload contact list.');
                return error('Failed to create Contacts or contacts already existed in the list.', '/upload-contact'); 
            }
       
        }else{
            return error('Required fields cannot be empty!'); 
        }
 
    }


    public function findcontact()
    {
        $keyword = sanitize($this->request->getGet('keyword'));
        if($keyword){
            $perPage = 10;
            $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;

            // Retrieve paginated lists and total count
            $result = $this->contact_model->getPaginatedContacts($keyword, $perPage, $currentPage);
            
            // Extract records and totalRows from the result
            $data['contacts'] = $result['records'];
            
            // Total rows for pagination
            $totalRows = $result['totalRows'];
            $data['totalrows'] =  $totalRows;
            // Load pagination library
            $pager = \Config\Services::pager();
            $pager->makeLinks($currentPage, $perPage, $totalRows);
            
            $data['pager'] = $pager;
            $data['title'] = 'Find Contacts'; 
            return view('pages/edit_contact', $data);
        }else{

            $data['title'] = 'Find Contacts'; 
            return view('pages/edit_contact', $data);
        }
           
    }

    public function deletecontacts($c_id) {

        $c_id = sanitize($c_id);
        // Check if the list ID is provided
        if (!$c_id) {
            // Redirect or show an error message if no list ID is provided
            return error('Cannot find the contact ID', '/find-contact');
        }
    
        // Load your list_model and call a method to delete the list
        $deleted = $this->contact_model->deleteContactById($c_id);
    
        if ($deleted) {
            // Redirect with success message upon successful deletion
            return success('Contact deleted successfully.', '/find-contact');

        } else {
            // Redirect with error message if deletion fails
            return error('Failed to delete Contact.', '/find-contact');
            
        }
    }


    public function fetch_modal_data() {
        $CId = sanitize($this->request->getPost('c_id'));
        $ContactDetails = get_contact_by_id($CId); //helper
        if ($ContactDetails) {
            $response = [
                'success' => true,
                'data' => $ContactDetails 
            ];
        } else {
            $response = ['success' => false];
        }
    
        return $this->response->setJSON($response);
     }


     public function updateContact() {
        $c_id = sanitize($this->request->getPost('contact-value'));
        $email = sanitize($this->request->getPost('email'));
    
        // Validate email format
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            
            // Assuming sanitize function is valid and you're getting the sanitized values
            if (!empty($c_id)) {
                $validate = $this->contact_model->updateContactdata($c_id, $email);
    
                if ($validate) {
                    return success('Contact Update Successfully', '/find-contact'); 
                } else {
                    // For debugging: Log or display a message if updating fails
                    return error('Failed to update Contact.', '/find-contact'); 
                }
            } else {
                return error('Contact ID cannot be empty!');
            }
    
        } else {
            return error('Invalid email format or email cannot be empty!'); 
        }
    }

     
    public function contactus()
    {

        $data['title'] =  'Contact Us';
        return view('pages/contactus',$data);
    }
  
  
}
