<?php

namespace App\Controllers;
use App\Models\User_model;

class AccountController extends BaseController
{
    protected $user_model;

    public function __construct()
    {  
        $this->user_model = new User_model();
   
    }

    public function index(): string
    {
        // Get the current user's user_id from the session
        $userId = session()->get('user_id');

        $data['details'] = $this->user_model->getUserWithDetails($userId);

        $data['title'] =  'Account';
        return view('pages/account',$data);
    }

  
}
