<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function index($page=1)
	{
		$this->load->model('Article_model');
		$this->load->library('pagination');
		$config['base_url'] = base_url('admin/articles/index');
		$config['total_rows'] = $this->Article_model->getArticlesCount();
		$config['per_page'] = 7;
		$config['use_page_numbers'] = true;

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = "<li class='page-item'>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='disabled page-item'><li class='active page-item'> <a class='page-link' href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li class='page-item'>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li class='page-item'>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li class='page-item'>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li class='page-item'>";
		$config['last_tag_close'] = "</li>";
		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);
		$pagination_links = $this->pagination->create_links();

		

		// $queryString = $this->input->get('q');
		// $params['queryString'] = $queryString;
		$param['offset'] = $config['per_page'];
		$param['limit'] = ($page*$config['per_page'])-$config['per_page'];

		$articles = $this->Article_model->getArticle($param);
		$data['articles'] = $articles;
		$data['pagination_links'] = $pagination_links;
		// $data['queryString'] = $queryString;
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
					redirect(base_url('admin/articles/index'));

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
    public function delete($id)
{
    $this->load->model('Article_model');
    $articles = $this->Article_model->getArticles($id);
    if (empty($articles)) {
        $this->session->set_flashdata('error', 'Article Not Found');
        redirect(base_url('admin/Articles/index'));
    }

    // Print image filename for debugging
    print_r($articles[0]['image']);

    // Remove exit statement

    // Delete associated images if they exist
    if (file_exists('./public/uploads/articles/' . $articles[0]['image'])) {
        unlink('./public/uploads/articles/' . $articles[0]['image']);
    }
    if (file_exists('./public/uploads/articles/thumb_front/' . $articles[0]['image'])) {
        unlink('./public/uploads/articles/thumb_front/' . $articles[0]['image']);
    }
    if (file_exists('./public/uploads/articles/thumb_admin/' . $articles[0]['image'])) {
        unlink('./public/uploads/articles/thumb_admin/' . $articles[0]['image']);
    }

    // Delete the article from the database
    $this->Article_model->deleteArticle($id);

    $this->session->set_flashdata('success', 'Article deleted successfully');
    redirect(base_url('admin/articles/index'));
}

}
