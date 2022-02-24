<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Wallet extends REST_Controller {

    public function __construct($config = 'rest') {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->model('common_model');
        $this->load->model('user_api_model','api');
        $this->load->model('admin_model', 'admin');
        $this->email->set_mailtype("html");
    }

    public function package_post() {
        
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $id = $userData->user_id;
        $data['pckg'] =  $this->api->getPackage();
        $walletbalance = $this->api->walletbalance($id);
        $data['walletbalance'] = $walletbalance[0]->wallet_balence;
        if($data){
            
            $this->response([
                'status' => TRUE,
                'data' => $data,
                'message' => 'Data found successfully.'
            ], REST_Controller::HTTP_OK);

        }else{
            // Set the response and exit
            //NOT_FOUND (404) being the HTTP response code
            $this->response([
                'status' => FALSE,
                'message' => 'No Data found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function couponCode_Post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $couponeCode = $userData->couponCode;
        $packageAmount = $userData->packageAmount;
        $currentDate = date("Y-m-d");
        $checkCouponCode = $this->api->verifyCoupon($couponeCode, $currentDate);
        if($checkCouponCode){
            $data['discountPrice'] =  $packageAmount - (($packageAmount * $checkCouponCode[0]->discount_parcent)/100 );
            $data['couponName'] =   $checkCouponCode[0]->name;
            $this->response([
                'status' => TRUE,
                'data' => $data,
                'message' => 'Data found successfully.'
            ], REST_Controller::HTTP_OK);

        }else{
            // Set the response and exit
            //NOT_FOUND (404) being the HTTP response code
            $this->response([
                'status' => FALSE,
                'message' => 'No Data found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function liveAstro_get() {
        // Returns  Astro's data
        $astro =  $this->api->liveAstro();
        if($astro){
            
            $this->response([
                'status' => TRUE,
                'data' => $astro,
                'message' => 'Data found successfully.'
            ], REST_Controller::HTTP_OK);

        }else{
            // Set the response and exit
            //NOT_FOUND (404) being the HTTP response code
            $this->response([
                'status' => FALSE,
                'message' => 'No Data found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}