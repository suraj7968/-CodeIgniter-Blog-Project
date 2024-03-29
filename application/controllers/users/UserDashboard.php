<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('users/userDashboard');
	}
	public function account()
	{
		$this->load->model('Users_model');
		$userid = $this->session->userdata('userid');
		$userinfo = $this->Users_model->fetchuser($userid);
		$data['userinfo'] = $userinfo;
		$this->load->view('users/accountSetting',$data);
	}
	
    public function logout()
	{
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('userimage');
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
		redirect(base_url('users/Manageusers/login'));
	}
    
}
