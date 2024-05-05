<?php
namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'users';
 

    public function __construct()
    {
        parent::__construct();
    }
  
     // GET USER BY ID
     public function get_user_by_id($id)
     {
         return $this->db->table($this->table)
             ->where('id', $id)
             ->get()
             ->getRowArray();
     }
     
     public function getUserWithDetails($userId)
     {
         // Select columns from both tables
         $this->select('users.*, user_details.SubscriptionPlan, user_details.LastPaidOn, user_details.ExpirationDate, user_details.CompanyName, user_details.Web, user_details.WorkEmail');
 
         // Join the tables based on user_id
         $this->join('user_details', 'users.id = user_details.user_id', 'left');
 
         // Where clause to filter by session user_id
         $this->where('users.id', $userId);
 
         // Execute the query and return results
         return $this->first();  // Assuming you want to fetch a single record based on user_id
     }
}
