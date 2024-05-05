<?php
namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = 'users';
    protected $session;

    public function __construct($session)
    {
        parent::__construct();

        // Assign the session service instance to the property
        $this->session = $session;
    }
  
    
    /**
     * CHECKS LOGIN CREDENTIALS. IF USER IS FOUND RETURN TRUE OTHERWISE RETURN FALSE
     */
    public function validate_Login($email, $password)
    {      
        // Sanitize email (you can use your own sanitization method if needed)
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Ensure both email and password are provided
        if (empty($email) || empty($password)) {
            return false;
        }

        $user = $this->db->table('users')
            ->where('email', $email)
            ->where('password', sha1($password))
            ->where('status', 1)
            ->get()
            ->getRow();

        if ($user) {
            $this->session->set('is_logged_in', true);
            $this->session->set('user_role_id', $user->role_id);
            $this->session->set('user_role', get_user_role('user_role', $user->id));

            // Handle different roles
            switch ($user->role_id) {
                case 1:
                    $this->session->set('admin_login', true);
                    break;
                case 2:
                    $this->session->set('customer_login', true);
                    break;
            }
           
            $this->session->set('user_id', $user->id);

            return true;
        }

        return false;
    }
}
