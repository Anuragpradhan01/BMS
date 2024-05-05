<?php

namespace App\Models;

use CodeIgniter\Model;

class CampModel extends Model
{
    protected $table = 'Campaigns'; // Replace with your actual table name
    protected $allowedFields = ['user_id','subject', 'from_mail', 'from_name','from_company_name','from_company_campaign_name','content', 'selected_lists', 'status'];

    public function saveCampaign($data)
    {
        try {
            // Attempt to insert the data into the database
            if ($this->insert($data)) {
                // If insertion is successful, return true or a success message
                return ['status' => 'success', 'message' => 'Message saved as Draft.'];
            } else {
                // If insertion fails for some reason (e.g., validation), return an error message
                return ['status' => 'error', 'message' => 'Failed to save Message.'];
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during insertion
            // Return an error message with details from the exception
            return ['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()];
        }
    }

}

?>