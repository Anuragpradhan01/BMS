<?php

namespace App\Controllers;
//use App\Models\HomeModel;

class PolicyController extends BaseController
{
  

    public function usage_policy(): string
    {
        $data['title'] =  'Usage policy';
        return view('pages/usage_policy',$data);
    }

    public function refund_policy(): string
    {
        $data['title'] =  'Refund policy';
        return view('pages/refund_policy',$data);
    }

    public function privacy_policy(): string
    {
        $data['title'] =  'Privacy policy';
        return view('pages/privacy_policy',$data);
    }
  
}
