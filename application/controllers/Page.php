<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function about()
	{
		$this->load->view('front/about');
	}
    public function services()
	{
		$this->load->view('front/services');
	}
	public function blog($page=1)
	{
		$this->load->model('Article_model');
		$this->load->library('pagination');
		$config['base_url'] = base_url('page/blog');
		$config['total_rows'] = $this->Article_model->getArticlesCount();
		$config['per_page'] = 5;
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

		$articles = $this->Article_model->getArticleBlog($param);
		$data['articles'] = $articles;
		$data['pagination_links'] = $pagination_links;
		// $data['queryString'] = $queryString;
		$this->load->view('front/blog',$data);
	}
	public function categories()
	{
		$this->load->model('Category_model');
        $queryString = $this->input->get('q');
        $params['queryString'] = $queryString;
        $categories = $this->Category_model->getCategories($params);
        $data['categories'] = $categories;
        $data['queryString'] = $queryString;
		$this->load->view('front/categories',$data);
	}
	public function detail($id)
	{
		$this->load->model('Article_model');
		$articles = $this->Article_model->getArticlesDetail($id);
		$data['articles'] = $articles;
		$this->load->view('front/detail',$data);
	}
}
