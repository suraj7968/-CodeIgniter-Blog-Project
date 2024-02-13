<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function list()
	{
		$this->load->view('users/category/list');
	}
    public function create()
	{
		$this->load->view('users/category/create');
	}
}
