<?php
namespace App\Models;

use CodeIgniter\Model;

class Contact_model extends Model
{
    protected $table = 'contacts';

    public function __construct()
    {
        parent::__construct();
    }
  
    public function createContacts($list_id, $contacts)
    {
        $user_id = session()->get('user_id');
        $successCount = 0;  // Counter for successfully inserted rows
        // Split the comma-separated contacts into an array
        $contactArray = explode(',', $contacts);
        
        // Trim whitespace from each contact and filter out any empty values
        $contactArray = array_filter(array_map('trim', $contactArray));

        // Loop through each contact and insert it into the database
        foreach ($contactArray as $contact) {

                    // Validate the email address format using filter_var()
                if (filter_var($contact, FILTER_VALIDATE_EMAIL)) { 

                    // Check if the email already exists for the given user_id and list_id
                    $existingContact = $this->db->table('contacts')
                                        ->where('user_id', $user_id)
                                        ->where('list_id', $list_id)
                                        ->where('email', $contact)
                                        ->get()
                                        ->getRow();

                    // If the email does not exist, proceed with the insertion
                    if (!$existingContact) {                  
                            // Prepare data to be inserted
                            $data = [
                                'list_id' => $list_id,
                                'user_id' => $user_id,
                                'email' => $contact,
                                'created_at' => date('Y-m-d H:i:s')
                            ];
                            
                            $result = $this->db->table('contacts')->insert($data);
                        
                            // Check if the insertion was successful
                            if ($result) {
                                // Increment the counter for successfully inserted rows
                                $successCount++;
                            }
                    } 
                }

        }

        // Return a boolean value or any other indication of success
        return $successCount; 
    }


    public function getPaginatedContacts($keyword = "", $perPage = 10, $currentPage = 1)
    {
        $user_id = session()->get('user_id');
        if ($user_id) {
            // Calculate offset based on current page and per page limit
            $offset = ($currentPage - 1) * $perPage;
    
            // Apply keyword filter if provided
            if ($keyword) {
                $this->where('user_id', $user_id);
                $this->like('email', $keyword);
            }
    
            // Fetch paginated records
            $records = $this->findAll($perPage, $offset);
            // Count total records based on user_id and keyword filter
            $this->resetQuery(); // Reset previous query conditions
           
            if ($keyword) {
                $this->where('user_id', $user_id);
                $this->like('email', $keyword);
            }
            $totalRows = $this->countAllResults();
    
            return [
                'records' => $records,
                'totalRows' => $totalRows
            ];
        }
        return [
            'records' => [],
            'totalRows' => 0
        ];
    }


    public function deleteContactById($c_id) {
        $user_id = session()->get('user_id');
        // Use CodeIgniter's delete method or your preferred method to delete the list
        $this->where('c_id', $c_id)->where('user_id', $user_id)->delete();
        
        // Check if the list was deleted
        if ($this->db->affectedRows() > 0) {
            return true;
        }
        return false;
    }

    public function updateContactdata($c_id, $email)
    {
        $user_id = session()->get('user_id');

        // Prepare the data to be updated or inserted
        $data = [ 
            'email'            => $email,
            'last_update_at'  => date('Y-m-d H:i:s')
        ];

        $result =  $this->db->table('contacts')->where('c_id', $c_id)->where('user_id', $user_id)->update($data);
            
        // Check if the update was successful
        if ($result) {
            return true;
        }
        
    
        return false; 
    }


   
}