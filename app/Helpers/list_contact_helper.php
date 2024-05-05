<?php

//Build the funtion to call inside the view
if (!function_exists('get_list_by_id')) {
    function get_list_by_id($list_id)
    {
        $db = \Config\Database::connect();
         // Fetch the list based on the list_id
         $user_id = session()->get('user_id');
         $query = $db->table('lists')->where('list_id', $list_id)->where('user_id', $user_id)->get();

         // Check if any result exists
         if ($query->getNumRows() > 0) {
             // Return the result as an array
             return $query->getRowArray();
         }
 
         // Return null if no result found
         return null;     
    }
}

if (!function_exists('get_contact_by_id')) {
    function get_contact_by_id($c_id)
    {
        $db = \Config\Database::connect();
         // Fetch the list based on the list_id
         $user_id = session()->get('user_id');
         $query = $db->table('contacts')->where('c_id', $c_id)->where('user_id', $user_id)->get();

         // Check if any result exists
         if ($query->getNumRows() > 0) {
             // Return the result as an array
             return $query->getRowArray();
         }
 
         // Return null if no result found
         return null;     
    }
}

if (!function_exists('get_contacts_by_list_id')) {
    function get_contacts_by_list_id($list_id)
    {
        $db = \Config\Database::connect();
        $user_id = session()->get('user_id');
        
        // Fetch the count of contacts based on list_id and user_id
        $count = $db->table('contacts')
                    ->where('list_id', $list_id)
                    ->where('user_id', $user_id)
                    ->countAllResults();

        // Check if any count exists
        if ($count > 0) {
            // Return the count
            return $count;
        }

        // Return null if no count found
        return 0;     
    }
}

if (!function_exists('GetContactEmailByListArray')) {
    function GetContactEmailByListArray($list_array)
    {
        $db = \Config\Database::connect();
        $user_id = session()->get('user_id');
        
        // Decode the JSON array to get the list_ids
        $data = json_decode($list_array, true);

        if (!isset($data['lists_array']) || empty($data['lists_array'])) {
            return error('List IDs array cannot be empty.'); 
        }
        $listIds = $data['lists_array'];
        // Create a query builder instance for 'contacts' table
        $builder = $db->table('contacts');

        // Select the 'email' column from the 'contacts' table
        $builder->select('contacts.email');
        
        // Join with the 'lists' table based on 'list_id'
        $builder->join('lists', 'lists.list_id = contacts.list_id');
        
        // Where clause to filter by the given list_ids
        $builder->whereIn('contacts.list_id', $listIds);
        
        // Filter by user_id from session
        $builder->where('contacts.user_id', $user_id);
        
        // Get the query result
        $query = $builder->get();
         
         // Return the result as an array of emails
         return $query->getResultArray();
    }

    
}