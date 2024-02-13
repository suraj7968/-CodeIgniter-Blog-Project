<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageusers extends CI_Controller {
	public function register()
	{
    $this->load->library('form_validation');
    $this->load->helper('form'); // Load form helper here
    $this->load->model('Users_model');
    $config['upload_path'] = './public/uploads/users/';
    $config['allowed_types'] = 'gif|png|jpg';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload',$config);

    $this->form_validation->set_error_delimiters('<p style="color: red;">','</p>');
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');

    if ($this->form_validation->run() == TRUE) {
        if (!empty($_FILES['userimage']['name'])) {
        if ($this->upload->do_upload('userimage')) {

        $data = $this->upload->data();
        $formArray['userimage'] = $data['file_name'];
        $formArray['name'] = $this->input->post('name');
        $formArray['username'] = $this->input->post('username');
        $formArray['email'] = $this->input->post('email');
        $formArray['password'] = $this->input->post('password');
        $formArray['gender'] = $this->input->post('gender');
        $this->Users_model->create($formArray);
        // Set session data
        $userData = array(
        'user' => 'yes',
        'userimage' => $formArray['userimage'],
        'name' => $formArray['name'],
        'email' => $formArray['email']
        // Add more data to be stored in session if needed
        );
        $this->session->set_userdata($userData);
        redirect(base_url('users/UserDashboard/index'));
        }
        else
        {
            $error = $this->upload->display_errors("<p style='color: red;'>","</p>");
            $data['imageError'] = $error;
            $this->load->view('front/loginRegister', $data); // Pass $data to the view
            return; // Stop further execution
        }
    }
        
    }
		$this->load->view('front/loginRegister');
	}

    public function login(){

        $this->load->library('form_validation');
        $this->load->helper('form'); // Load form helper here
        $this->load->model('Users_model');
        
        $this->form_validation->set_error_delimiters('<p style="color: red;">','</p>');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Users_model->login($username, $password);
            if ($user) {
                $userData = array(
                'user' => 'yes',
                'userimage' => $user['userimage'],
                'userid' => $user['uid'],
                'name' => $user['name'],
                'email' => $user['email']
                // Add more data to be stored in session if needed
                );
                $this->session->set_userdata($userData);
                redirect(base_url('users/UserDashboard/index'));
            }
            else
            {
                echo 'failed';
            }
        }

        $this->load->view('front/login');
    }
    
}
