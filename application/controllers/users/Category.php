<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function list()
	{
		$this->load->model('Category_model');
        $queryString = $this->input->get('q');
        $params['queryString'] = $queryString;
        $categories = $this->Category_model->getCategories($params);
        $data['categories'] = $categories;
        $data['queryString'] = $queryString;
		$this->load->view('users/category/list',$data);
	}
    public function create()
	{
		$this->load->library('form_validation');
		$this->load->model('Category_model');
        $this->load->helper('common_helper');

		$config['upload_path']          = './public/uploads/category/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']           = TRUE;
		$this->load->library('upload', $config);

		$this->form_validation->set_error_delimiters('<p style="color: red;">','</p>');
		$this->form_validation->set_rules('name','Name','trim|required');
		if ($this->form_validation->run() == TRUE) {
			if (!empty($_FILES['image']['name'])) {
				if ($this->upload->do_upload('image')) {
					$data = $this->upload->data();

                    resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'],300,270);
					$formArray['image'] = $data['file_name'];
                    $formArray['name'] = $this->input->post('name');
                    $formArray['status'] = $this->input->post('status');
                    $formArray['created_at'] = date('Y-m-d H:i:s');
					$this->Category_model->create($formArray);
					$this->session->set_flashdata('success', 'Category Added Successfully', 1); // Flashdata will persist for 60 seconds
					redirect(base_url('users/Category/list'));
				}
				else
				{
					$error = $this->upload->display_errors("<p style='color: red;'>","</p>");
                    $data['errorImageUpload'] = $error;
					$this->load->view('users/category/create',$data);
				}
			}
			else
			{
				$this->session->set_flashdata('error','Category Added failed');
			}

		}

		$this->load->view('users/category/create');
	}
}
