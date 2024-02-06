<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/category/list');
	}
    public function create()
    {

        $config['upload_path']          = './public/uploads/category/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 10240;
        // $config['max_height']           = 7680;
        $config['encrypt_name']           = TRUE;


        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->load->model('Category_model');

        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
        $this->form_validation->set_rules('name','Name','trim|required');
        if ($this->form_validation->run() == TRUE) {
            
            if (!empty($_FILES['image']['name'])) {

                if ($this->upload->do_upload('image')) {
                    
                }else{
                    $error = $this->upload->display_errors();
                    $data['errorImageUpload'] = $error;
                    $this->load->view('admin/category/create',$data);
                }
            }
            else
            {
                $formArray['name'] = $this->input->post('name');
                $formArray['status'] = $this->input->post('status');
                $formArray['created_at'] = date('Y-m-d H:i:s');
                $this->Category_model->create($formArray);
                $this->session->set_flashdata('success','Category Added Successfuly');
                redirect(base_url('admin/Category/index'));
            }
            
        }else {

            $this->load->view('admin/category/create');
        }
        
    }
    public function edit()
    {

    }
    public function delete()
    {
        
    }
}
