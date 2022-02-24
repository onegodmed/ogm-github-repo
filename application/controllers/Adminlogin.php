<?php
Class Adminlogin extends CI_Controller {
public function __construct() {
//Add parent controller contructor
parent::__construct();
$this->load->model('admin_model', 'admin');
$this->load->library('form_validation'); 
}

 public function index() { 

      	$this->load->view('admin/login');
}

 public function login_code() { 
             $username = $this->input->post('username');

             $password = $this->input->post('password');
             $utype=$this->input->post('utype');
             

          $data =  array(

            'email' =>  $username,

            'password' => $password, 

 );

      $result = $this->admin->adminlogin($username,$password);

          

        if($result){

            $array = array(

        'id'         => $result[0]->id,

        'username'  => $result[0]->email,

        'address'   => $result[0]->address.' '.$result[0]->city,

        'mobile'     => $result[0]->mobile,

        'name'     => $result[0]->name,

        'image'     => $result[0]->image,

        'user_type'     => $result[0]->user_type,

        'logged_in' => TRUE

);



       

          $this->session->set_userdata($array);

           // $this->session->userdata('username');

          if($this->session->userdata('user_type')=='admin'){

            redirect('admin/');

          } else{
              redirect('partner/');
          }

          redirect('admin/');

  

        }else if($utype=='vendor'){
        
            redirect('partner-login/');
        }else{

            redirect('adminlogin');

        }



      }
      
      
      
}
?>
