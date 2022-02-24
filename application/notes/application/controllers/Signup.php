<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Home
 *
 * @author SSV
 */
Class Signup extends MY_Controller {

    public function __construct() {
        //Add parent controller contructor
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Admin_model', 'admin');
       

      /*  $without_login_method = array('index', 'admin_login');
        if (in_array($this->router->method, $without_login_method)) {
            return true;
        } else {
            if ($this->session->userdata('userid') != '' && $this->session->userdata('user_type') == 'admin')
                return true;
            else {
                $this->session->set_flashdata('error', 'You are not authenticated for accessing this page, Please login.');
                redirect(base_url());
            }
        }*/
    }
		
	

    public function index() {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['first_name'] =  ucfirst(strtolower($this->input->post('first_name')));
          $save_data['last_name'] =  ucfirst(strtolower($this->input->post('last_name')));
          $save_data['mobile'] =  ucfirst(strtolower($this->input->post('mobile')));
          $save_data['email'] =  ucfirst(strtolower($this->input->post('email')));
          $save_data['password'] =  (md5($this->input->post('password')));
          $result = $this->db->insert("user_master",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("signup/index"));
          }          
                    
              
        }
        $this->load->view('front/header');
        $this->load->view('signup');
        $this->load->view('front/footer');
    }

    public function login() {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));       
        $hasAuth = $this->admin->getData('user_master','*',array('email'=>$email,'password'=>$password));

        if (!empty($hasAuth)) {
            $hasAuth = $hasAuth[0];
            if ($password == $hasAuth->password) {
                $this->session->set_userdata(array(
                    'user_id' => $hasAuth->id,
                    'email' => $hasAuth->email,     
                    'first_name' => $hasAuth->first_name,                    
                    'loggedin' => TRUE
                ));
                redirect(base_url());
            } else {
                $this->session->set_flashdata('error', 'invalid username or password');
                redirect(base_url());
            }
        } else {

            $this->session->set_flashdata('error', 'invalid username or password');
            redirect(base_url());
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());

    }
}
     ?>