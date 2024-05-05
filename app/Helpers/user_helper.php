<?php

if (!function_exists('get_user_role')) {
    function get_user_role($type = "", $user_id = '')
    {
        // Load necessary CodeIgniter 4 classes
        $db = \Config\Database::connect();
        
        // Query to get the user's role ID
        $role_id = $db->table('users')
                      ->select('role_id')
                      ->where('id', $user_id)
                      ->get()
                      ->getRowObject()
                      ->role_id;

        // Query to get the user's role type
        $user_role = $db->table('role')
                        ->select('type')
                        ->where('id', $role_id)
                        ->get()
                        ->getRowObject()
                        ->type;

        if ($type == "user_role") {
            return $user_role;
        } else {
            return $role_id;
        }
    }
}


if (!function_exists('get_account_status')) {
    /**
     * Get account status based on the status value.
     *
     * @param int $status Account status value (1 for active, 0 for expired).
     * @return string HTML representation of the account status description with CSS classes.
     */
    function get_account_status(int $status): string
    {
        if ($status == 1) {
            return '<span class="text-success">Active</span>'; // Display "Active" in green color
        } else {
            return '<span class="text-danger">Expired</span>'; // Display "Expired" in red color
        }
    }
}


if (!function_exists('get_subscription_plan_status')) {
    /**
     * Get subscription plan status based on the plan code.
     *
     * @param int $planCode Subscription plan code (1 for free, 2 for monthly, 3 for yearly).
     * @return string Descriptive text for the subscription plan status.
     */
    function get_subscription_plan_status(int $planCode): string
    {
        switch ($planCode) {
            case 1:
                return '<span class="text-info">Free Plan</span>'; // Display "Free Plan" in blue color
                break;
            case 2:
                return '<span class="text-warning">Monthly Plan</span>'; // Display "Monthly Plan" in yellow color
                break;
            case 3:
                return '<span class="text-primary">Yearly Plan</span>'; // Display "Yearly Plan" in primary color
                break;
            default:
                return '<span class="text-secondary">Unknown Plan</span>'; // Display "Unknown Plan" in gray color if plan code is not recognized
                break;
        }
    }
}