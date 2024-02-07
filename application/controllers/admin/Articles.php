<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function index()
	{
        
        
		$this->load->view('admin/Articles/list');
	}
    public function create()
	{
        $this->load->model('Category_model');
        $categories = $this->Category_model->getCategories();
        $data['categories'] = $categories;
		$this->load->view('admin/Articles/create',$data);
	}
    public function edit()
	{
		
	}
    public function delete()
	{
		
	}
}
