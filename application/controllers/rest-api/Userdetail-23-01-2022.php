<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Userdetail extends REST_Controller {

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
        $this->load->model('admin_model', 'admin');
        $this->load->model('front_model', 'front');
        $this->email->set_mailtype("html");
    }

    // TO DO
    // FCM - Firebase notifications
 
    public function sendbackup_post(){  // working API. Dont change

        // $postdata = file_get_contents("php://input");
        // $userData = json_decode($postdata);
        // $tokens = $userData->mobile_token;
        // // Vinay Device ID: fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w
        // // $tokens = 'edapMVPqR1ugPaxgPXA0e2:APA91bE3588F6RN3QnxIB88IQB8fjcQm_QaOiOIZhhavjB_jHyfWC-9VTD0126EjoHIDX0kQL6ap6XHR0DuwYzEYER9L-FiG1_VZBnlDvODAEj-8Bj7OoEGYUB2eXP5zw7gpkBWQGesL'; // Anmol device reg firebase ID
        // // $SERVER_API_KEY = "AAAARNT7nDo:APA91bGYa-mJvZwFH38pl9dUVB3fsx3sDrwKZn2XovWYQ4yNkQaWLiu8u-2IJSFfc0HncSc9409WAX3v0tY4JdzFF-ZqRT95SKhF6cuYrorW0psSneVkAXKHO7yWV_wuh5qPPvNs2olQ"; // Web API key
        
        // // Test working for Token and Key
        // $SERVER_API_KEY = 'AAAAg_0w5HY:APA91bFuUvwU9rurfjO1fZgTF6-Pi7PVKo8C92nblWxPPzTXsrTJE7BE1CVG1Bh5tfr8bb6j2DJYQfSnI3NG8xpLxdN_D887yIJrzj5rlDVMtFjy4eIaFQ6Fh-T5UrmpzuuoE0Rkchxx';
        // // $tokens = 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w';
        // // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w',
        // // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w',
        // // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w',
        // // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w']; // Anmol device reg firebase ID
        // // 'ph-CcZbQZCryKIoLXFSKI:APA91bHU3VCNR228uvmnqqsWEf7lsdhJPi4pxfSBdyiC3OPD-7243i8_JVNfdROVSRruk-er71jO0CX0WLWnMRs1s8lyQOEIRcMMtvNQmV6_EvKkArwol8vY6sHzx6XuJ7PDTlAzbvoC

        // // FCM API Url
        // $url = 'https://fcm.googleapis.com/fcm/send';

        // // Put your Server Response Key here
        // $apiKey = $SERVER_API_KEY;
       
        // // Compile headers in one variable
        // $headers = array (
        // 'Authorization:key=' . $apiKey,
        // 'Content-Type:application/json'
        // );

        // // Add notification content to a variable for easy reference
        // $notifData = [
        // 'title' => "New chat request received ..",
        // 'body' => "Customer is waiting for chat with you...!!!!",
        // // 'click_action' => "android.intent.action.MAIN"
        // ];

        // // Create the api body
        // $apiBody = [
        // // 'notification' => $notifData,
        // 'data' => $notifData,
        // // "time_to_live" => "600", // Optional
        // 'to' => $tokens, // Replace 'mytargettopic' with your intended notification audience
        // ];

        
        // // Initialize curl with the prepared headers and body
        // $ch = curl_init();
        // curl_setopt ($ch, CURLOPT_URL, $url );
        // curl_setopt ($ch, CURLOPT_POST, true );
        // curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
        // curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));

        
        // // Execute call and save result
        // $result = curl_exec ( $ch );
        // // print_r($result);
        
        // // Close curl after call
        // curl_close ( $ch );

        //  $resultData['status'] = true;
        //  $resultData['data'] = $result;
        //  $resultData['message'] = "Request notification sent.";
        //  $httpCode = 203; 

        // return $this->response($this->json($resultData), $httpCode);

        // // return $result;

        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $tokens = $userData->mobile_token;
        // Vinay Device ID: fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w
        // $tokens = 'edapMVPqR1ugPaxgPXA0e2:APA91bE3588F6RN3QnxIB88IQB8fjcQm_QaOiOIZhhavjB_jHyfWC-9VTD0126EjoHIDX0kQL6ap6XHR0DuwYzEYER9L-FiG1_VZBnlDvODAEj-8Bj7OoEGYUB2eXP5zw7gpkBWQGesL'; // Anmol device reg firebase ID
        // $SERVER_API_KEY = "AAAARNT7nDo:APA91bGYa-mJvZwFH38pl9dUVB3fsx3sDrwKZn2XovWYQ4yNkQaWLiu8u-2IJSFfc0HncSc9409WAX3v0tY4JdzFF-ZqRT95SKhF6cuYrorW0psSneVkAXKHO7yWV_wuh5qPPvNs2olQ"; // Web API key
        
        // Test working for Token and Key
        $SERVER_API_KEY = 'AAAAg_0w5HY:APA91bFuUvwU9rurfjO1fZgTF6-Pi7PVKo8C92nblWxPPzTXsrTJE7BE1CVG1Bh5tfr8bb6j2DJYQfSnI3NG8xpLxdN_D887yIJrzj5rlDVMtFjy4eIaFQ6Fh-T5UrmpzuuoE0Rkchxx';
        // $tokens = 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w';
        // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w',
        // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w',
        // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w',
        // 'fOiw40DFT3q_r6HYMc3V5I:APA91bGSgxBgBtAk3kh6gM2WJWyo5cUtyW37XYfnTbWKvqCRuPbKciAvP0-JRcuFNn_R2ZphAQAFzH3oSCgHtog77Sd5pW_n7X8nf9wNdJgYoGlcdG1oKSKqLyww7WhWqY4vNk48Tz-w']; // Anmol device reg firebase ID
        // 'ph-CcZbQZCryKIoLXFSKI:APA91bHU3VCNR228uvmnqqsWEf7lsdhJPi4pxfSBdyiC3OPD-7243i8_JVNfdROVSRruk-er71jO0CX0WLWnMRs1s8lyQOEIRcMMtvNQmV6_EvKkArwol8vY6sHzx6XuJ7PDTlAzbvoC

        // FCM API Url
        $url = 'https://fcm.googleapis.com/fcm/send';

        // Put your Server Response Key here
        $apiKey = $SERVER_API_KEY;
       
        // Compile headers in one variable
        $headers = array (
        'Authorization:key=' . $apiKey,
        'Content-Type:application/json'
        );

        // Add notification content to a variable for easy reference
        $notifData = [
        'title' => "Naya Message",
        'body' => "Amount INR has been credited in your wallet against booking number...!!!!",
        // 'click_action' => "android.intent.action.MAIN"
        ];

        // Create the api body
        $apiBody = [
        'notification' => $notifData,
        'data' => $notifData,
        // "time_to_live" => "600", // Optional
        'to' => $tokens, // Replace 'mytargettopic' with your intended notification audience
        ];

        
        // Initialize curl with the prepared headers and body
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url );
        curl_setopt ($ch, CURLOPT_POST, true );
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));

        
        // Execute call and save result
        $result = curl_exec ( $ch );
        // print_r($result);
        
        // Close curl after call
        curl_close ( $ch );

         $resultData['status'] = true;
         $resultData['data'] = $result;
         $resultData['message'] = "Request notification sent.";
         $httpCode = 203; 

        return $this->response($this->json($resultData), $httpCode);

        // return $result;



    }

    public function send_post(){

     
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid; // get_details($table, $where)
        // echo "User ID: " . $uid;
        $where = array('id' => $uid);
        $data = $this->admin->get_details('author', $where);
        if (count($data) > 0) {
            $resultData['status'] = true;
            $resultData['data'] = $data;
            $resultData['message'] = "Successful";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }
        // print_r($data);
        // echo "TEST" . $data[0]->devicetoken;
        
        // Test working for Token and Key
        $SERVER_API_KEY = 'AAAAg_0w5HY:APA91bFuUvwU9rurfjO1fZgTF6-Pi7PVKo8C92nblWxPPzTXsrTJE7BE1CVG1Bh5tfr8bb6j2DJYQfSnI3NG8xpLxdN_D887yIJrzj5rlDVMtFjy4eIaFQ6Fh-T5UrmpzuuoE0Rkchxx';
        
        // FCM API Url
        $url = 'https://fcm.googleapis.com/fcm/send';

        // Put your Server Response Key here
        $apiKey = $SERVER_API_KEY;
       
        // Compile headers in one variable
        $headers = array (
        'Authorization:key=' . $apiKey,
        'Content-Type:application/json'
        );

        // Add notification content to a variable for easy reference
        $notifData = [
        'title' => "Naya Message",
        'body' => "Amount INR has been credited in your wallet against booking number...!!!!",
        // 'click_action' => "android.intent.action.MAIN"
        ];

        // Create the api body
        $apiBody = [
        'notification' => $notifData,
        'data' => $notifData,
        // "time_to_live" => "600", // Optional
        'to' => $data[0]->devicetoken, // Replace 'mytargettopic' with your intended notification audience
        ];

        
        // Initialize curl with the prepared headers and body
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url );
        curl_setopt ($ch, CURLOPT_POST, true );
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));

        
        // Execute call and save result
        $result = curl_exec ( $ch );
        // print_r($result);
        
        // Close curl after call
        curl_close ( $ch );

         $resultData['status'] = true;
         $resultData['data'] = $result;
         $resultData['message'] = "Chat Request notification .. !!!.";
         $httpCode = 203; 

        return $this->response($this->json($resultData), $httpCode);

        // return $result;



    }

    // TO DO
    // FCM - Firebase notifications
 
    public function credit_post(){

        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid; // get_details($table, $where)
        
        $where = array('id' => $uid);
        $data = $this->admin->get_details('author', $where);
        if (count($data) > 0) {
            $resultData['status'] = true;
            $resultData['data'] = $data;
            $resultData['message'] = "Successful";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }
        
        // Test working for Token and Key
        $SERVER_API_KEY = 'AAAAg_0w5HY:APA91bFuUvwU9rurfjO1fZgTF6-Pi7PVKo8C92nblWxPPzTXsrTJE7BE1CVG1Bh5tfr8bb6j2DJYQfSnI3NG8xpLxdN_D887yIJrzj5rlDVMtFjy4eIaFQ6Fh-T5UrmpzuuoE0Rkchxx';
        
        // FCM API Url
        $url = 'https://fcm.googleapis.com/fcm/send';

        // Put your Server Response Key here
        $apiKey = $SERVER_API_KEY;
       
        // Compile headers in one variable
        $headers = array (
        'Authorization:key=' . $apiKey,
        'Content-Type:application/json'
        );

        // Add notification content to a variable for easy reference
        $notifData = [
        'title' => "Amount credited..",
        'body' => "Amount INR has been credited in your wallet against booking number...!!!!",
        // 'click_action' => "android.intent.action.MAIN"
        ];

        // Create the api body
        $apiBody = [
        'notification' => $notifData,
        'data' => $notifData,
        // "time_to_live" => "600", // Optional
        'to' => $data[0]->devicetoken, // Replace 'mytargettopic' with your intended notification audience
        ];

        
        // Initialize curl with the prepared headers and body
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url );
        curl_setopt ($ch, CURLOPT_POST, true );
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));

        
        // Execute call and save result
        $result = curl_exec ( $ch );
        // print_r($result);
        
        // Close curl after call
        curl_close ( $ch );

         $resultData['status'] = true;
         $resultData['data'] = $result;
         $resultData['message'] = "Request notification sent.";
         $httpCode = 203; 

        return $this->response($this->json($resultData), $httpCode);

        // return $result;
    }


    // Mobile token / Firebase device ID - store in DB 
    public function updatetoken_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        
        $devicetoken = $userData->devicetoken;
        $uid = $userData->userid;

        $data = array(
            'devicetoken' => $devicetoken
        );    

        $result = $this->common_model->updateData("id", $uid, $data, 'author');
        if ($result == true) {
            $resultData['status'] = true;
            $resultData['message'] = "Your token has been updated.";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Your token is not update, please retype";
            $httpCode = 402;
        }
        return $this->response($this->json($resultData), $httpCode);
 
    }


      // TO DO end 

    public function login_post() {

        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $mobile = $userData->mobile;
        $password = $userData->password;
        $mobile_token = $userData->mobile_token;
        $data = array(
            'mobile_token' => $mobile_token
        );
        $status = $this->common_model->updateData("mobile_token", $mobile_token, $data, 'author');
        $result1 = $this->common_model->getAll(array("mobile" => $mobile), '', 'author');
        if($result1[0]['user_type']=="Astrologer"){
        $result = $this->common_model->getAll(array("mobile" => $mobile, "password" => $password, "user_type" => "Astrologer"), '', 'author');
        if (count($result) > 0) {
            if ($result[0]['status'] =="Inactive") {
                $emailA = $result[0]['id'];
                $resultData['status'] = false;
                $resultData['userid'] = "null";
                $resultData['message'] = "Admin review your account. Please wait for approval";
                $httpCode = 201;
            } else {
                $resultData['status'] = true;
                $resultData['userid'] = $result[0]['id'];
                $resultData['call_status'] = $result[0]['status'];
				$resultData['chat_status'] = $result[0]['chat_status'];
                $resultData['message'] = "Success: Signed in successfully.";
                $httpCode = 200;
            }
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Invalid Login: The phone no or password you entered is not valid.";
            $httpCode = 203;
        }
        }else{
           $resultData['status'] = false;
            $resultData['message'] = "Invalid Login: This mobile no is not registered as a vendor.";
            $httpCode = 203; 
        }

        return $this->response($this->json($resultData), $httpCode);
    }

    public function forgetPassword_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $data = array(
            'username' => $userData->name,
            'surname' => $userData->lname,
            'gender' => $userData->gender
        );
        $result = $this->common_model->updateData("user_id", $uid, $data, 'user');
        if (count($result) > 0) {
            $resultData['status'] = true;
            $resultData['message'] = "Your profile has been updated.";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Your profile is not update, please retype";
            $httpCode = 402;
        }
        return $this->response($this->json($resultData), $httpCode);
    }

    public function changePassword_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        if ($uid) {
            $oldPassword = $userData->oldpswd;
            $newPassword = $userData->npswd;
            $confirmPassword = $userData->cpwsd;

            if ($newPassword != $confirmPassword) {
                $resultData['status'] = false;
                $resultData['message'] = "Your new password and confirmation password do not match, please retype.";
                $httpCode = 201;
            }else{

            $result = $this->common_model->getAll(array("id" => $uid, "password" => $oldPassword), '', 'author');

            if (count($result) > 0) {
                $data['password'] = $newPassword;
                $this->common_model->updateData("id", $uid, $data, "author");
                $resultData['status'] = true;
                $resultData['message'] = "Your password has been updated.";
                $httpCode = 200;
            } else {
                $resultData['status'] = false;
                $resultData['message'] = "Your current password do not match, please retype";
                $httpCode = 202;
            }}
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Sorry, You are not loggedin.";
            $httpCode = 401;
        }
        return $this->response($this->json($resultData), $httpCode);
    }

    public function viewprofile_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $result = $this->common_model->viewprofile($uid);
        if (count($result) > 0) {
            $result[0]['image']="https://www.onegodmed.com/admin-assets/assets/images/users/".$result[0]['image'];
            $result[0]['url']="https://www.onegodmed.com/astrologer/".$result[0]['astro_slug']."/";
            $resultData['status'] = true;
            // $resultData['message'] = "Successful";
            $resultData['message'] = $result[0];
            // $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No data found.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));
    }

    public function updateAddress_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $data = array(
            'address1' => $userData->address1,
            'address2' => $userData->address2,
            'city' => $userData->city,
            'zip' => $userData->zip,
            'state' => $userData->state,
            'country' => $userData->country
        );
        $result = $this->common_model->updateData("user_id", $uid, $data, 'user');
        if (count($result) > 0) {
            $resultData['status'] = true;
            $resultData['userid'] = $uid;
            $resultData['message'] = "Success: Address has been updated";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['userid'] = $uid;
            $resultData['message'] = "Error: Address not updated.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function viewdashboard_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        if($uid!=''){
        $where_vendor_booking = array('astrologer_id' => $uid);
        $data['booking'] = $this->common_model->get_counts('order_history',$where_vendor_booking);

        $where_vendor_earning = array('customer_id' => $uid);
        $data['my_earning'] = $this->common_model->get_counts('wallet_history', $where_vendor_earning);
        $today_earning = 0; 
        foreach ($data['my_earning'] as $row) {
            if(@$row->date == date('Y-m-d')){
            $today_earning += $row->amount;
            } 
        }
        $where_vendor_services = array('astrologer_id' => $uid);
        $data['vendor_services'] = $this->common_model->get_counts('services', $where_vendor_services);
        $where_live_chat = array('astrologer_id' => $uid, 'is_Active' => 'Running', 'call_type' => 'Chat');
        $data['live_chat'] = $this->common_model->get_counts('order_history', $where_live_chat);
        if (count($data) > 0) {
            $resultData['status'] = true;
            $resultData['message'] = "total counts";
            $resultData['booking'] = $data['booking'][0]['total'];
            $resultData['my_earning'] = $today_earning;
            $resultData['vendor_services'] = $data['vendor_services'][0]['total'];
            $resultData['live_chat'] = $data['live_chat'][0]['total'];
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }
        }else{
           $resultData['status'] = false;
            $resultData['message'] = "Please enter Details.";
            $httpCode = 201; 
        }
        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function viewservices_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $where = array('astrologer_id' => $uid);
        $data = $this->admin->get_details('services', $where);
        if (count($data) > 0) {
            $resultData['status'] = true;
            $resultData['data'] = $data;
            $resultData['message'] = "Successful";
            // $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));
    }
    
    public function viewbooking_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $where = array('order_history.astrologer_id' => $uid,'order_history.bookStatus' => '1');
        $data = $this->admin->order($where);
        if (count($data) > 0) {
            $resultData['status'] = true;
            // $resultData['message'] = $data;
            $resultData['message'] = "Successful";
            $resultData['data'] = $data;
            
            // $httpCode = 200;
     
        } else {
            $resultData['status'] = true;
            $resultData['message'] = "No data found.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));
    }
    
    public function myearning_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $where = array('wallet_history.customer_id' => $uid,'order_history.is_Active' => 'Complete');
        $data = $this->admin->astrototalEarn($where);
        $ts = strtotime(date("Y-m-d"));
        $start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
        $last_Week = date('Y-m-d', $start);
        $current_month=date('m');
        $current_year=date('Y');
        if($current_month==1){
        // $lastmonth=12;
        $lastmonth=1;
        }else{
        $lastmonth=$current_month;
        }
        $last_week_earning  = 0;
        $last_Month_earning = 0;
        $inter_last_week_earning  = 0;
        $inter_last_Month_earning = 0;
        $today_earning = 0; 
        $total_earning= 0;
        $inter_Today_earning = 0; 
        $inter_total_earning= 0;
        $total_realase = 0;
        $inter_total_realase = 0;
        foreach ($data as $row) {
             if($row->payment_type == "Cradit" ){
                 if(date("Y-m-d", strtotime($row->date)) == date('Y-m-d') && $row->callNation == 'Domestic'){
              $today_earning += $row->amount;
              } else if(date("Y-m-d", strtotime($row->date)) == date('Y-m-d') && $row->callNation == 'International'){
                $inter_Today_earning += $row->amount;  
              }
             if($row->callNation == 'Domestic' && $row->payment_type == "Cradit")
             $total_earning += $row->amount;
             else if($row->callNation == 'International' && $row->payment_type == "Cradit")
             $inter_total_earning += $row->amount;
             } else if($row->payment_type == "Debit" ){
                 if($row->callNation == 'Domestic')
             $total_realase += $row->amount;
             else if($row->callNation == 'International')
             $inter_total_realase += $row->amount;
             }
            //  if(date("m", strtotime($row->date)) <= date('m') && date("Y", strtotime($row->date)) >= $current_year && date("m", strtotime($row->date)) >= $lastmonth && $row->callNation == 'Domestic'){
             if(date("m", strtotime($row->date)) == date('m') && date("Y", strtotime($row->date)) == $current_year && $row->callNation == 'Domestic'){
            $last_Month_earning += $row->amount; 
    }else if(date("m", strtotime($row->date)) <= date('m') && date("Y", strtotime($row->date)) >= $current_year && date("m", strtotime($row->date)) >= $lastmonth && $row->callNation == 'International'){
     $inter_last_Month_earning += $row->amount;   
    }
            }
        $remain_bal = $total_earning - @$total_realase;
        $remain_bal_in = $inter_total_earning - @$inter_total_realase;
        if ($uid) {
            $resultData['status'] = true;
            $resultData['message'] = "Successful!!!";
            
            
            $resultData['today_dm'] = number_format((float)$today_earning, 2, '.', '');
            $resultData['month_dm'] = number_format((float)$last_Month_earning, 2, '.', '');
            $resultData['total_dm'] = number_format((float)$total_earning, 2, '.', '');
            $resultData['realase_dm'] = number_format((float)$total_realase, 2, '.', '');
            $resultData['remain_dm'] = number_format((float)$remain_bal, 2, '.', '');
            $resultData['today_in'] = number_format((float)$inter_Today_earning, 2, '.', '');
            $resultData['month_in'] = number_format((float)$inter_last_Month_earning, 2, '.', '');
            $resultData['total_in'] = number_format((float)$inter_total_earning, 2, '.', '');
            $resultData['realase_in'] = number_format((float)$inter_total_realase, 2, '.', '');
            $resultData['remain_in'] = number_format((float)$remain_bal_in, 2, '.', '');
            // $httpCode = 200;

            // $resultData['data'] = $data;
            

        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));
    }
    
     public function chatbooking_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $where = array('order_history.astrologer_id' => $uid,'order_history.call_type' => 'Chat', 'order_history.is_Active' => 'Running');
        $running_booking = $this->admin->order($where);
        $where = array('order_history.astrologer_id' => $uid,'order_history.call_type' => 'Chat', 'order_history.is_Active' => 'Accept');
        $accept_booking = $this->admin->order($where);
        if (count($running_booking)>0 || count($accept_booking)>0) {
            $resultData['status'] = true;
            $resultData['message'] = "chat booking";
            $resultData['running_booking']=$running_booking;
            $resultData['accept_booking']=$accept_booking;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Currenlty No booking for chat";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }

    public function chatbookingStatus_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $id = $userData->orderid;
        $where = array('order_history.id' => $id,'order_history.call_type' => 'Chat');
        $running_booking = $this->admin->order($where);
        $where = array('order_history.id' => $id,'order_history.call_type' => 'Chat');
        $accept_booking = $this->admin->order($where);
        if (count($running_booking)>0 || count($accept_booking)>0) {
            $resultData['status'] = true;
            $resultData['chatStatus'] = $accept_booking[0]->is_Active;
            $resultData['message']="Successfull";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Currenlty No booking for chat";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }


    public function rating_post(){
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $astroId = $userData->astroId;
        $review1 = array('astrologer_id' => $astroId);
        $review2 = array('status' => 'Accept');
        $data["review"] = $this->front->checkall_review('Reviews', $review1, $review2);

        if (count($data)>0) {
            $resultData['status'] = true;
            $resultData['message'] = "Rating and Review";
            $resultData['data']=$data["review"];
            // $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No rating and reviw found";
            // $httpCode = 201;
        }
        return $this->response($this->json($resultData));

    }
    
    public function updateChatStatus_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $oid = $userData->orderid;
        $data = array(
        'is_Active'  => "Accept",
        'date' => date("Y-m-d H:i:s"),
        'booking_no' => 'OGM' . date('dmyhis')
        );
        $where = array('id' => $oid);
        $status = $this->admin->_updateRowWhere('order_history',$data,$where);
        if ($status) {
            $resultData['status'] = true;
            $resultData['message'] = "chat accepted";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Order id wrong.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function chatMsgSend_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        $arData = array(
                    'from' => $userData->from_id,
                    'to' => $userData->to_id,
                    'message' => $userData->msgText,
                    'time' => date('H:i:s'),
                    'sender_read' => 'Yes',
                    'receiver_read' => 'No',
                    'order_id' => $userData->order_id
                    );
        $chatans = $this->admin->_insertRow('tbl_chat', $arData);
        $chatans_id = $this->db->insert_id();
        if($userData->user_type=="Astrologer"){
            $where2 = array('id' => $userData->order_id);
                  $data['order_chat'] = $this->admin->get_details("order_history", $where2); 
                  if($data['order_chat'][0]->start_chatTime == ""){
                      $data1 = array(
                          'start_chatTime' => date('Y-m-d H:i:s')
                          );
                          $where = array('id' => $userData->order_id);
$status = $this->admin->_updateRowWhere('order_history',$data1,$where);
                  }
        }
        if ($chatans_id) {
            $resultData['status'] = true;
            $resultData['message'] = "chat msessage inserted";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Something went wrong.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function chatMsgStatus_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        $msg_id=$userData->msgId;
        $data = array(
        'receiver_read'  => "Yes",
        );
        $where = array('id' => $msg_id);
        $status = $this->admin->_updateRowWhere('tbl_chat',$data,$where);
        if ($status) {
            $resultData['status'] = true;
            $resultData['message'] = "message read";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Something went wrong.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function chat_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        $orderid=$userData->orderid;
        $where = array('order_id' => $orderid);
        $data['chat'] = $this->admin->get_details("tbl_chat", $where);
        if(!$data['chat']){
            $resultData['status'] = false;
            $resultData['message'] = "data not found.";
            $httpCode = 201;
        }
        $where1 = array('id' => @$data['chat'][0]->to);
        $data['user'] = $this->admin->get_details("author", $where1);
        if ($data) {
            $resultData['status'] = true;
            $resultData['message'] = "message";
            $resultData['chat'] = $data['chat'];
            $resultData['cust_name'] = $data['user'][0]->name;
            $resultData['cust_id'] = $data['user'][0]->id;
            $resultData['cust_img'] = "https://www.onegodmed.com/admin-assets/assets/images/users/".$data['user'][0]->image;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Something went wrong.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function chatDisplay_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        $where = array('order_id' => $userData->order_id, 'to' => $userData->cust_id, 'receiver_read'=> 'No');
        $data['chat'] = $this->admin->get_details_user("tbl_chat", $where);
        if ($data) {
            $resultData['status'] = true;
            $resultData['message'] = "message";
            $resultData['chat_msg'] = $data['chat'][0]->message;
            $resultData['msgId'] = $data['chat'][0]->id;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Something went wrong.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
     public function serviceStatus_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->service_type == 'Call'){
            $data = array(
            'status' => $userData->status,
        );
        } else{
            $data = array(
            'chat_status' => $userData->status,
        );
        }

        $where = array('id' => $userData->userid);

        $status = $this->admin->_updateRowWhere('author', $data, $where);
        if ($status) {
            $resultData['status'] = true;
            $resultData['message'] = $userData->service_type." Status Updated";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Something went wrong.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function bookingSearch_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->userid >0){
        $searchPrm = $userData->search;
        $where = array('order_history.astrologer_id' => $userData->userid,'order_history.bookStatus' => '1');
        $where1 = array('author.name LIKE' => '%'.$searchPrm.'%','order_history.booking_no LIKE' => '%'.$searchPrm.'%');
        $data = $this->admin->ordersearch($where,$where1);
        if (count($data)>0) {
            $resultData['status'] = true;
            $resultData['message'] = $data;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No Data Found.";
            $httpCode = 201;
        }}else{
            $resultData['status'] = false;
            $resultData['message'] = "Astrologer id required";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    

    public function myearningfilter_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $start_date=date('Y-m-d',strtotime($userData->start_date));
        $end_date=date('Y-m-d',strtotime($userData->end_date));
        $where = array('wallet_history.customer_id' => $uid,'order_history.is_Active' => 'Complete','wallet_history.date >=' => $start_date,'wallet_history.date <=' => $end_date);
        $data = $this->admin->astrototalEarn($where);
        $total_earning= 0; 
        $inter_total_earning= 0;
        $total_realase = 0;
        $inter_total_realase = 0;
        foreach ($data as $row) {
             if($row->payment_type == "Cradit" ){
                 if($row->callNation == 'Domestic'){
              $total_earning += $row->amount;
              } else if($row->callNation == 'International'){
                $inter_total_earning += $row->amount;  
              }
             } else if($row->payment_type == "Debit" ){
                 if($row->callNation == 'Domestic')
             $total_realase += $row->amount;
             else if($row->callNation == 'International')
             $inter_total_realase += $row->amount;
             }
            }
        $remain_bal = $total_earning - @$total_realase;
        $remain_bal_in = $inter_total_earning - @$inter_total_realase;
        if ($uid) {
            $resultData['status'] = true;
            $resultData['message'] = "Earning";
            $resultData['total_dm'] = number_format((float)$total_earning, 2, '.', '');
            $resultData['realase_dm'] = number_format((float)$total_realase, 2, '.', '');
            $resultData['remain_dm'] = number_format((float)$remain_bal, 2, '.', '');
            $resultData['total_in'] = number_format((float)$inter_total_earning, 2, '.', '');
            $resultData['realase_in'] = number_format((float)$inter_total_realase, 2, '.', '');
            $resultData['remain_in'] = number_format((float)$remain_bal_in, 2, '.', '');
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    
    public function bookingfilter_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $start_date=date('Y-m-d',strtotime($userData->start_date));
        $end_date=date('Y-m-d',strtotime($userData->end_date));
        $where = array('order_history.astrologer_id' => $uid,'order_history.bookStatus' => '1','order_history.date >=' => $start_date,'order_history.date <=' => $end_date);
        $data = $this->admin->order($where);
        if (count($data) > 0) {
            $resultData['status'] = true;
            $resultData['data'] = $data;
            $resultData['message'] = "Successful.";
            // $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No Data Found.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));
    }
    public function weeklyav_post(){
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->userid >0){
            $check = $this->common_model->checkAvb($userData->userid);
            if (count($check)>0) {
                $resultData['status'] = true;
                $resultData['data'] = $check;
                $resultData['message'] = "Successfull.";
                $httpCode = 200;
            } else {
                $resultData['status'] = true;
                $resultData['data'] = $check;
                $resultData['message'] = "No data";
                $httpCode = 200;
            }
        }else{
            $resultData['status'] = false;
            $resultData['message'] = "Astrologer id required";
            $httpCode = 201;
        }
        
        return $this->response($this->json($resultData), $httpCode);
   }   

    public function scheduleNextOnlineAvailaibility_post(){
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->userid >0){
        $review1 = array('id' => $userData->userid);
            $review2 = array(
                'status' => $userData->status,
                'chat_status' => $userData->chat_status,
                'next_avail_chat' => $userData->next_avail_chat,
                'next_avail_call' => $userData->next_avail_call
            );
            $data["review"] = $this->common_model->scheduleNextAv('author', $review1, $review2);
        if ($data["review"]) {
            $resultData['status'] = true;
            $resultData['message'] = "Successfull.";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "error";
            $httpCode = 201;
        }}else{
            $resultData['status'] = false;
            $resultData['message'] = "Astrologer id required";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    public function avStatic_post(){
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->userid >0){
        $review1 = array('id' => $userData->userid);
            
            $data["review"] = $this->db->select('*')->from('availabilitystatic')->get()->result();
        if ($data["review"]) {
            $resultData['status'] = true;
            $resultData['data'] = $data["review"];
            $resultData['message'] = "Successfull.";
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "error";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
}
    public function weeklyAvUpdate_post(){
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->userid >0){
        $review1 = array('id' => $userData->userid);
            $formArray = array(
                'Sun'=>$userData->Sun,
                'Mon'=>$userData->Mon,
                'Tue'=>$userData->Tue,
                'Wed'=>$userData->Wed,
                'Thu'=>$userData->Thu,
                'Fri'=>$userData->Fri,
                'Sat'=>$userData->Sat
            );
            $check = $this->admin->checkAvb($userData->userid);
            if(empty($check)){
                $this->admin->insertweektime($formArray);
            }else{
                $this->admin->updateweektime($formArray,$userData->userid);
            }
        
            $resultData['status'] = true;
            $resultData['message'] = "Successfull.";
            $httpCode = 200;
        
        return $this->response($this->json($resultData), $httpCode);
    }
}
    
public function myRating_post() {
    $postdata = file_get_contents("php://input");
    $userData = json_decode($postdata);
    date_default_timezone_set('Asia/Kolkata');
    if($userData->userid >0){
    $review1 = array('astrologer_id' => $userData->userid);
        $review2 = array('status' => 'Accept');
        $data["review"] = $this->common_model->checkall_review('Reviews', $review1, $review2);
    if ($data["review"]) {
        $resultData['status'] = true;
        $resultData['data'] = $data["review"];
        $resultData['message'] = "Successfull.";
        $httpCode = 200;
    } else {
        $resultData['status'] = false;
        $resultData['message'] = "No Review.";
        $httpCode = 201;
    }}else{
        $resultData['status'] = false;
        $resultData['message'] = "Astrologer id required";
        $httpCode = 201;
    }

    return $this->response($this->json($resultData), $httpCode);
}
public function myRatingReply_post() {
    $postdata = file_get_contents("php://input");
    $userData = json_decode($postdata);
    date_default_timezone_set('Asia/Kolkata');
    if($userData->userid >0){
    // $data['astrologer_id'] = $userData->userid;
    $data['review_id'] = $userData->review_id;
    $data['reply'] = $userData->reply;
    // print_r($data);die;
    $data["review"] = $this->common_model->insertReply($data);
    // print_r($data["review"] );die;

    if ($data["review"]) {
        $resultData['status'] = true;
        $resultData['message'] = "Comment Added Successfully";
        $httpCode = 200;
    } else {
        $resultData['status'] = false;
        $resultData['message'] = "No Review.";
        $httpCode = 201;
    }}else{
        $resultData['status'] = false;
        $resultData['message'] = "Astrologer id required";
        $httpCode = 201;
    }

    return $this->response($this->json($resultData), $httpCode);
}
    
    public function updateStartChatTime_post() {

    $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        $oid = $userData->orderid;
        $data = array(
            'start_chatTime' => date("Y-m-d H:i:s"),
        );
        $result = $this->common_model->updateData("id", $oid, $data, 'order_history');
        
        // return $this->response($this->json($resultData), $httpCode);

        if ($result == true) {
            $resultData['status'] = true;
            $resultData['data'] = $data;
            $resultData['message'] = "Successful.";
            
            // $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No data found.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));

    }

     public function myStatus_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        date_default_timezone_set('Asia/Kolkata');
        if($userData->userid >0){
        $uid = $userData->userid;
        $profile = $this->common_model->viewprofiledata($uid);
        $where_vendor_rating = array('user_id' => $uid);
        $rating = $this->common_model->avg_rating('rating',$where_vendor_rating);
        $where_vendor_call = array('astrologer_id' => $uid,'call_type' => 'Audio','is_Active' => 'Complete');
        $call = $this->common_model->last_service('order_history',$where_vendor_call);
        $where_vendor_chat = array('astrologer_id' => $uid,'call_type' => 'Chat','is_Active' => 'Complete');
        $chat = $this->common_model->last_service('order_history',$where_vendor_chat);
        $data['name'] =$profile[0]['name'];
        $data['image'] ="https://www.onegodmed.com/admin-assets/assets/images/users/".$profile[0]['image'];
        $data['chat_status'] =$profile[0]['chat_status'];
        $data['call_status'] =$profile[0]['status'];
        $data['rating'] =round($rating[0]['rating']);
        
        if(isset($call[0]['date'])){
            $data['last_call'] =$call[0]['date'];
        }
            // $data['last_call'] =$call[0]['date'];
        if(isset($chat[0]['date'])){
            $data['last_chat'] =$chat[0]['date'];
        }
        // $data['last_chat'] =$chat[0]['date'];
        
        if ($data) {
            $resultData['status'] = true;
            $resultData['data'] = $data;
            $resultData['message'] = "Successful";
            
            // $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No data found.";
            // $httpCode = 201;
        }

        return $this->response($this->json($resultData));
    }
}
    
    private function json($data) {
        if (is_array($data)) {
            return @$data;
        }
    }

}
