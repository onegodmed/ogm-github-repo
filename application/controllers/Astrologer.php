<?php

//we need to start session in order to access it through CI

Class Astrologer extends CI_Controller {

  public function __construct() {
        //Add parent controller contructor
        parent::__construct();
        $this->load->model('front_model', 'front');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
        $this->load->library('cart');

        }


  
// Show login page
public function add_package() {
$data['categories'] = $this->front->get('categories');
$data['super_categories'] = $this->front->get('super_categories');	
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('astrologer/add_package',$data);
$this->load->view('user/form_footer');
}

public function add_package_code() {
$data = array(
       'package_name'    => $this->input->post('package_name'),
       'package_Description'           => $this->input->post('package_Description'),
       'package_amount'       => $this->input->post('package_amount'),
       'astrologer_id'       => $this->input->post('astrologer_id'),
       'date'              =>date('Y-m-d'),       
    );
   $category = $this->admin->_insertRow('package', $data);
     if ($category) {
            $this->session->set_flashdata('error', 'created successfully');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong');
        }
        redirect('user/super_category_list/'.$this->input->post('menu_id'));  
     
}




}


?>