<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
 public function __construct() {
        //Add parent controller contructor
        parent::__construct();
        $this->load->model('admin_model', 'admin'); 
    }


	public function index()
	{
		if($this->form_validation->run('admin_login')){
			   $username  = $this->input->post('email');
		$password  = $this->input->post('password');
		$is_active = 'Active';
      $result = $this->admin->login($username,$password,$is_active);
          
        if($result){
            $array = array(
        'id'         => $result[0]->id,
        'username'   => $result[0]->email,
        'mobile'     => $result[0]->mobile,
        'name'       => $result[0]->name,
        'user_type'  => $result[0]->user_type,
        'branch_id'  => $result[0]->branch_id,
        'logged_in'  => TRUE
);
          $this->session->set_userdata($array);
           // echo $this->session->userdata('id');
          redirect('admin');
          
	}else{
		 $this->session->set_flashdata('error','Invailed Email Or Password');
		 redirect('login');
	}
		}else{
			$this->load->view('login/admin_login');
		}
		
	}



}
?>