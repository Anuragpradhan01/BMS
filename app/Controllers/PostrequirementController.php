<?php

namespace App\Controllers;
use App\Models\List_model;
class PostrequirementController extends BaseController
{
    protected $list_model;


    public function __construct()
    {  
        $this->list_model = new List_model();
   
    }

    public function index(): string
    {
        $data['lists'] = $this->list_model->getListbyuseridwithType(1);
        $data['title'] =  'composer';
        return view('pages/post_req',$data);
    }

  
}
