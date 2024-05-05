<?php
namespace App\Models;

use CodeIgniter\Model;

class List_model extends Model
{
    protected $table = 'lists';
    protected $allowedFields = [
        'lc_id', // Replace with your actual field names
        'user_id',
        'name',
        'list_desc',
        'create_at',
        'last_update_at'
    ];



    public function __construct()
    {
        parent::__construct();
    }
  
    public function getListCategories()
    {
        $query = $this->db->table('list_category')->get();
        return $query->getResultArray();
    }

    public function createList($list_categoryid, $list_name, $list_desc)
    {
        $user_id = session()->get('user_id');
        $data = [
            'lc_id'           => $list_categoryid,
            'user_id'         => $user_id,
            'name'            => $list_name,
            'list_desc'       => $list_desc,
            'create_at'      => date('Y-m-d H:i:s')
        ];


        // Check if the record already exists
        $existingRecord = $this->where('lc_id', $list_categoryid)
        ->where('name', $list_name)
        ->where('user_id', $user_id)
        ->first();

        // If the record exists, return false or handle the scenario as needed
        if (!$existingRecord) {
            if( $user_id ){
                $result = $this->insert($data);
                    if($result){
                        return true;
                    }
            }
        }

        return false; 
    }

    public function getPaginatedLists($keyword = "", $perPage = 10, $currentPage = 1)
    {
        $user_id = session()->get('user_id');
        if ($user_id) {
            // Calculate offset based on current page and per page limit
            $offset = ($currentPage - 1) * $perPage;
    
            // Apply user_id condition
            $this->where('user_id', $user_id);
    
            // Apply keyword filter if provided
            if ($keyword) {
                $this->like('name', $keyword);
            }
    
            // Fetch paginated records
            $records = $this->findAll($perPage, $offset);
    
            // Count total records based on user_id and keyword filter
            $this->resetQuery(); // Reset previous query conditions
            $this->where('user_id', $user_id);
            if ($keyword) {
                $this->like('name', $keyword);
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

    public function getListbyuserid(){
        $user_id = session()->get('user_id');
        if ($user_id) {
            $this->where('user_id', $user_id);  // Filter by user_id
            return $records = $this->findAll();  // Fetch records
        }
        return [];
    }

    public function getListbyuseridwithType($list_categoryID){
        $user_id = session()->get('user_id');
        if ($user_id) {
            $this->where('user_id', $user_id);
            $this->where('lc_id', $list_categoryID);  //
            return $records = $this->findAll();  // Fetch records
        }
        return [];
    }

    public function deleteListById($list_id) {
        $user_id = session()->get('user_id');
        // Use CodeIgniter's delete method or your preferred method to delete the list
        $this->where('list_id', $list_id)->where('user_id', $user_id)->delete();
        
        // Check if the list was deleted
        if ($this->db->affectedRows() > 0) {
            return true;
        }
        return false;
    }

    public function updateListdata($list_id, $list_name, $list_desc)
    {
        $user_id = session()->get('user_id');

        // Prepare the data to be updated or inserted
        $data = [ 
            'name'            => $list_name,
            'list_desc'       => $list_desc,
            'last_update_at'  => date('Y-m-d H:i:s')
        ];

        $result =  $this->db->table('lists')->where('list_id', $list_id)->where('user_id', $user_id)->update($data);
            
        // Check if the update was successful
        if ($result) {
            return true;
        }
        
    
        return false; 
    }

   
    
}
