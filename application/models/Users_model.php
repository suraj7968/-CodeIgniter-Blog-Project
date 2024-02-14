<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
    public function create($formArray)
    {
        $this->db->insert('users',$formArray);
    }
    public function fetchuser($id)
    {
        $this->db->where('uid',$id);
        $userinfo = $this->db->get('users')->result_array();
        return $userinfo;

    }
    public function login($username, $password) {
        // Query to check if the username and password match
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
    
        // Check if a record exists with the provided username and password
        if ($query->num_rows() == 1) {
            // Record found, return the user data
            return $query->row_array();
        } else {
            // No record found, return false
            return false;
        }
    }

}