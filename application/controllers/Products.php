<?php

//we need to start session in order to access it through CI

Class Products extends CI_Controller {

  public function __construct() {
        //Add parent controller contructor
        parent::__construct();
        $this->load->model('Product_model', 'product');
        
        $this->load->library('cart');
             
        }

public function index() {	
$this->load->view('front/header');
$this->load->view('front/index');
$this->load->view('front/footer');
}

public function add_to_cart($product_id) {
            
$data = array(
               'id'    => $product->name,
               'qty'   => 1,
               'price' => $product->price,
               'name' =>  $product->name,
               'image' => $product->image
);	
$this->load->view('front/header');
$this->load->view('front/index');
$this->load->view('front/footer');
}







    }

