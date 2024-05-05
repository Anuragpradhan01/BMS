<?php

namespace App\Controllers;
use App\Models\List_model;
use CodeIgniter\Pager\Pager;

class ListController extends BaseController
{
    protected $list_model;

    public function __construct()
    {  
        $this->list_model = new List_model();
   
    }

    public function index()
    {
        // Fetch categories from the list_category table
        $data['categories'] = $this->list_model->getListCategories(); // Fetch all records from the list_category table
        $data['title'] =  'Create List';
        return view('pages/create_list',$data);
    }

    public function create()
    {
        $list_categoryid = sanitize($this->request->getPost('content_type'));
        $list_name = sanitize($this->request->getPost('list_name'));
        $list_desc = sanitize($this->request->getPost('list_desc'));

        if (!empty($list_categoryid) && !empty($list_categoryid) && !empty($list_desc) ) {

            $validate = $this->list_model->createList($list_categoryid,$list_name,$list_desc);

            if($validate) {
               return success('List Created Successfully', '/list'); 
               // return redirect()->to(base_url('/list')); //this work
            }else {
                // For debugging: Log or display a message if creation fails
                log_message('error', 'Failed to create list or list already existed!');
               return error('Failed to create list or list already existed!', '/list'); 
            }
       
        }else{
            return error('Required fields cannot be empty!'); 
        }
 
    }


    public function edit()
    {
        $keyword = sanitize($this->request->getGet('keyword'));
        
        $perPage = 10;
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;

        // Retrieve paginated lists and total count
        $result = $this->list_model->getPaginatedLists($keyword, $perPage, $currentPage);
        
        // Extract records and totalRows from the result
        $data['lists'] = $result['records'];
        
        // Total rows for pagination
        $totalRows = $result['totalRows'];
        
        // Load pagination library
        $pager = \Config\Services::pager();
        $pager->makeLinks($currentPage, $perPage, $totalRows);
        
        $data['pager'] = $pager;
        $data['title'] = 'Edit List';
        
        return view('pages/edit_list', $data);
    }

    public function deleteList($list_id) {

        $list_id = sanitize($list_id);
        // Check if the list ID is provided
        if (!$list_id) {
            // Redirect or show an error message if no list ID is provided
            return error('Cannot find the List', '/list/find');
        }
    
        // Load your list_model and call a method to delete the list
        $deleted = $this->list_model->deleteListById($list_id);
    
        if ($deleted) {
            // Redirect with success message upon successful deletion
            return success('List deleted successfully.', '/list/find');

        } else {
            // Redirect with error message if deletion fails
            return error('Failed to delete list.', '/list/find');
            
        }
    }


 public function fetch_modal_data() {
    $listId = sanitize($this->request->getPost('list_id'));
    $listDetails = get_list_by_id($listId); //helper
    if ($listDetails) {
        $response = [
            'success' => true,
            'data' => $listDetails,
            'contact_count' => get_contacts_by_list_id($listId) ?? '0'
        ];
    } else {
        $response = ['success' => false];
    }

    return $this->response->setJSON($response);
 }
 
 public function updateList() {
    $list_id = sanitize($this->request->getPost('list-value'));
    $name = sanitize($this->request->getPost('list-title'));
    $desc = sanitize($this->request->getPost('list-desc'));

    if (!empty($list_id) && !empty($name) && !empty($desc) ) {

        $validate = $this->list_model->updateListdata($list_id, $name, $desc);

        if($validate) {
           return success('List Update Successfully', '/list/find'); 
           // return redirect()->to(base_url('/list')); //this work
        }else {
            // For debugging: Log or display a message if creation fails
            log_message('error', 'Failed to create list or list already existed!');
           return error('Failed to update list.', '/list/find'); 
        }
   
    }else{
        return error('Required fields cannot be empty!'); 
    }
}
  
}
