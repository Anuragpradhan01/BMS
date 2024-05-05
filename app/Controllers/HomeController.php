<?php

namespace App\Controllers;
use App\Models\HomeModel;

class HomeController extends BaseController
{
  

    public function index()
    {
        $data['title'] =  'Company Name';
        return view('pages/lumia/index',$data);
    }

    public function dashboard()
    {
     
        $data['title'] =  'Dashboard';
        return view('pages/index',$data);
    }

  
}
