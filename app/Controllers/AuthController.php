<?php

namespace App\Controllers;
use App\Models\Auth_model;
use App\Models\User_model;

class AuthController extends BaseController
{
    protected $authModel;
    protected $user_model;

    public function __construct()
    {
        // Load the Auth_model using the service container
        $this->authModel = new Auth_model(session());
        $this->user_model = new User_model();
   
    }

    public function login()
    {

        if ($this->session->get('is_logged_in')) {
            return redirect()->to(base_url('/dashboard'));
		}
        
        $data['title'] =  'Login';
        return view('pages/auth/login',$data);
    }


    // Validating a user
	public function validateLogin()
	{
		if ($this->session->get('is_logged_in')) {
            return redirect()->to(base_url('/dashboard'));
		}
        // Get email and password from the request
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

		$validity = $this->authModel->validate_Login($email, $password);


		if ($validity) {
			$userdata = $this->user_model->get_user_by_id($this->session->get('user_id'));
            $this->session->setFlashdata('flash_message', 'welcome'. ", " . $userdata['name']);
			 if ($this->session->get('user_role') == "customer") {
                return redirect()->to(base_url('/dashboard'));
			 }
             if ($this->session->get('user_role') == "admin") {
                return redirect()->to(base_url('/admin'));
			 }
          
		} else {
			
            error('Invalid username or password.');
            return redirect()->to(base_url('/login'));
		}
        
	}

    public function register()
    {

        $data['title'] =  'Register';
        return view('pages/auth/register',$data);
    }


    public function forget()
    {

        $data['title'] =  'Forget';
        return view('pages/auth/forget',$data);
    }


    public function recover()
    {

        $data['title'] =  'Change Password';
        return view('pages/auth/recover',$data);
    }

    public function logout()
    {
        // Destroy the user's session
        $this->session->destroy();

        // Redirect to the login page or any other desired page
        return redirect()->to(base_url('/login'));
    }


  
}
