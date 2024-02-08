<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function index()
	{
		$this->load->model('Article_model');
		$queryString = $this->input->get('q');
		$params['queryString'] = $queryString;
		$articles = $this->Article_model->getArticle($params);
		$data['articles'] = $articles;
		$data['queryString'] = $queryString;
		$this->load->view('admin/Articles/list',$data);
	}
    public function create()
	{
        $this->load->model('Category_model');
        $categories = $this->Category_model->getCategories();
        $data['categories'] = $categories;
        $this->load->model('Article_model');
        $this->load->helper('common_helper');
		$config['upload_path'] = './public/uploads/articles/';
		$config['allowed_types'] = 'gif|png|jpg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('category_id','Category','trim|required');
		$this->form_validation->set_rules('title','Title','trim|required|min_length[20]');
		//$this->form_validation->set_rules('description','Description','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback" >','<p/>');

		if ($this->form_validation->run() == TRUE) {
			if (!empty($_FILES['image']['name'])) {
				if ($this->upload->do_upload('image')) {

					$data = $this->upload->data();

					resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_front/'.$data['file_name'],1120,800);
					resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_admin/'.$data['file_name'],300,250);

					$formArray['image'] = $data['file_name'];
					$formArray['category'] = $this->input->post('category_id');
					$formArray['title'] = $this->input->post('title');
					$description = $this->input->post('description');
					$description = strip_tags($description);
					$formArray['description'] = $description;
					// $formArray['description'] = $this->input->post('description');
					$formArray['author'] = $this->input->post('author');
					$formArray['status'] = $this->input->post('status');
					$formArray['created_at'] = date('Y-m-d H:i:s');
					$this->Article_model->addArticle($formArray);
					$this->session->set_flashdata('success','Articles Added Successfuly');
					redirect(base_url('admin/Articles/index'));
				}
				else
				{
					$error = $this->upload->display_errors("<p class='invalid-feedback'>","</p>");
                    $data['imageError'] = $error;
					$this->load->view('admin/Articles/create',$data);
				}
				
			}
			else
			{
					
					$formArray['category'] = $this->input->post('category_id');
					$formArray['title'] = $this->input->post('title');
					$formArray['description'] = $this->input->post('description');
					$formArray['author'] = $this->input->post('author');
					$formArray['status'] = $this->input->post('status');
					$formArray['created_at'] = date('Y-m-d H:i:s');
					$this->Article_model->addArticle($formArray);
					$this->session->set_flashdata('success','Articles Added Successfuly');
					redirect(base_url('admin/Articles/index'));

			}
		} else
		{
			$this->load->view('admin/Articles/create',$data);
		}
		
	}
    public function edit($id)
	{
		
		$this->load->model('Category_model');
		$this->load->model('Article_model');
		//$this->load->helper('form');
        $this->load->library('form_validation');

		$this->load->helper('common_helper');
		$config['upload_path'] = './public/uploads/articles/';
		$config['allowed_types'] = 'gif|png|jpg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);

        $categories = $this->Category_model->getCategories();
        $data['categories'] = $categories;

		$articles = $this->Article_model->getArticles($id);
		$data['articles'] = $articles;
		// echo "<pre>";
		// print_r($data['articles']);
		// echo "</pre>";

		$this->form_validation->set_rules('category_id','Category','trim|required');
		$this->form_validation->set_rules('title','Title','trim|required|min_length[20]');
		$this->form_validation->set_rules('description','Description','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

		if ($this->form_validation->run() == TRUE) {
			if (!empty($_FILES['image']['name'])) {
				if ($this->upload->do_upload('image')) {

					$data = $this->upload->data();
					resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_front/'.$data['file_name'],1120,800);
					resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_admin/'.$data['file_name'],300,250);


					$formArray['image'] = $data['file_name'];
					$formArray['category'] = $this->input->post('category_id');
					$formArray['title'] = $this->input->post('title');
					$description = $this->input->post('description');
					$description = strip_tags($description);
					$formArray['description'] = $description;
					// $formArray['description'] = $this->input->post('description');
					$formArray['author'] = $this->input->post('author');
					$formArray['status'] = $this->input->post('status');
					$formArray['updated_at'] = date('Y-m-d H:i:s');
					$this->Article_model->updateArticle($id,$formArray);

					if (file_exists('./public/uploads/articles/'.$articles[0]['image'])) {
                        unlink('./public/uploads/articles/'.$articles[0]['image']);
                    }
                    if (file_exists('./public/uploads/articles/thumb_front/'.$articles[0]['image'])) {
                        unlink('./public/uploads/articles/thumb_front/'.$articles[0]['image']);
                    }
					if (file_exists('./public/uploads/articles/thumb_admin/'.$articles[0]['image'])) {
                        unlink('./public/uploads/articles/thumb_admin/'.$articles[0]['image']);
                    }

					$this->session->set_flashdata('success','Articles Updeted Successfuly');
					redirect(base_url('admin/Articles/index'));

				}
				else
				{

				}

			}
			else
			{
				$formArray['category'] = $this->input->post('category_id');
				$formArray['title'] = $this->input->post('title');
				$formArray['description'] = $this->input->post('description');
				$formArray['author'] = $this->input->post('author');
				$formArray['status'] = $this->input->post('status');
				$formArray['updated_at'] = date('Y-m-d H:i:s');
				$this->Article_model->updateArticle($id,$formArray);
				$this->session->set_flashdata('success','Articles Updeted Successfuly');
				redirect(base_url('admin/Articles/index'));

			}

		}
		else
		{
			$this->load->view('admin/Articles/edit',$data);
		}
		
		
	}
    public function delete()
	{
		
	}
}
