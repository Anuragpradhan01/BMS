<?php

namespace App\Controllers;
//use App\Models\HomeModel;

class HotlistController extends BaseController
{
  

    public function index(): string
    {

        $data['title'] =  'composer';
        return view('pages/hotlist',$data);
    }

  
}
