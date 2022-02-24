<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Homepage extends REST_Controller {

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

    public function banner_get() {
        // Returns max 3 live Astro's data
        $banner =  $this->api->banner();
        if($banner){
            
            $this->response([
                'status' => TRUE,
                'data' => $banner,
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
    public function homeAstrologers_get() {
        // Returns  Astro's data
        $astro =  $this->api->astro();
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