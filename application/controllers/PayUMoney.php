<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayUMoney extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
            
        $this->load->model('User_model');

    }
    //==========================================================

	public function payment()
	{
		$this->load->library('payumoney');

		$key 			= $this->payumoney->get_key();
		$action_url 	= $this->payumoney->get_action_url();
		$transaction_id = $this->payumoney->get_transaction_id();
		$hash 			= '';

		if( count($_POST) > 0 ){
			
			$firstname	= $this->input->post('firstname');
			$email		= $this->input->post('email');
			$phone		= $this->input->post('phone');
			$amount		= $this->input->post('amount');

			$key	= $this->input->post('key');
			$txnid	= $this->input->post('txnid');
			$surl	= $this->input->post('surl');
			$furl	= $this->input->post('furl');
			
			$productinfo = $this->input->post('productinfo');

			$hash 	= $this->payumoney->get_hash($_POST);

			$this->session->set_flashdata('firstname', $firstname);
			$this->session->set_flashdata('email', $email);
			$this->session->set_flashdata('phone', $phone);
			$this->session->set_flashdata('amount', $amount);
			$this->session->set_flashdata('key', $key);
			$this->session->set_flashdata('txnid', $txnid);
			$this->session->set_flashdata('surl', $surl);
			$this->session->set_flashdata('furl', $furl);
			$this->session->set_flashdata('productinfo', $productinfo);
			$this->session->set_flashdata('hash', $hash);
			$this->session->set_flashdata('action_url', $action_url);

			redirect("home/send_payment");
		}

		$data['key'] = $key;
		$data['action_url'] = $action_url;
		$data['transaction_id'] = $transaction_id;
		$data['hash'] = $hash;

		$this->load->view('front/includes/header', $data);
		$this->load->view('front/PayUMoney/payment', $data);
		$this->load->view('front/includes/footer', $data);

	}
	//==========================================================

	public function send_payment()
	{

		$this->load->library('payumoney');
		
		$firstname 	= $this->session->flashdata('firstname');
		$email 		= $this->session->flashdata('email');
		$phone 		= $this->session->flashdata('phone');
		$amount 	= $this->session->flashdata('amount');
		$key 		= $this->session->flashdata('key');
		$txnid 		= $this->session->flashdata('txnid');
		$surl 		= $this->session->flashdata('surl');
		$furl 		= $this->session->flashdata('furl');
		$productinfo = $this->session->flashdata('productinfo');
		$hash 		= $this->session->flashdata('hash');
		$action_url 	= $this->session->flashdata('action_url');

		$data['firstname'] = $firstname;
		$data['email'] = $email;
		$data['phone'] = $phone;
		$data['amount'] = $amount;
		$data['key'] = $key;
		$data['txnid'] = $txnid;
		$data['surl'] = $surl;
		$data['furl'] = $furl;
		$data['productinfo'] = $productinfo;
		$data['hash'] = $hash;
		$data['action_url'] = $action_url;
		
		$this->load->view('front/home/send_payment', $data);
	}
	//==========================================================

	public function payment_success()
	{
		$this->load->library('payumoney');
		
		print_r($_POST);
		die;

	}
	//==========================================================

	public function payment_failed()
	{
		$this->load->library('payumoney');
		
		print_r($_POST);
		die;

	}
	//==========================================================


}
