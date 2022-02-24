<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller {

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
        $this->email->set_mailtype("html");
    }

    public function login_post() {
        
       date_default_timezone_set('Asia/Kolkata');
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $ctry_code = $userData->ctry_code;
        $mobile = $userData->mobile;
        $name = $userData->name;
        $result1 = $this->common_model->getAll(array("mobile" => $mobile), '', 'author');
        if(count($result1) <= 0){
            $data = array(
                'mobile' => $mobile,
                'country_code' => $ctry_code, 
                'name' => $name,
                // 'email' => $email,
                'user_type' => 'User',
                // 'status' => "Online",
                'date' => date('Y-m-d H:i:s'),
                'image' => "no-image.png",
                // 'wallet_balence' => $promodisc
            );
            $answer = $this->admin->_insertRow('author', $data);
        }
        $result = $this->common_model->getAll(array("mobile" => $mobile, "user_type" => "User"), '', 'author');
        if (count($result) > 0) {
            if ($result[0]['status'] =="Inactive") {
                $emailA = $result[0]['id'];
                $resultData['status'] = false;
                $resultData['userid'] = "null";
                $resultData['message'] = "Admin review your account. Please wait for approval";
                $httpCode = 201;
            } else {
                //OTP sent
                $newMob = str_replace("+","",$ctry_code).$mobile;
                $senderId = "GODMED";
                $rndno = rand(100000, 999999);
                $message = urlencode("Dear Customer, your Required OTP to login with us is $rndno.");
                $route = "route=4";
                $authKey = "310447AzgZJhF4u7zr5e0758c9P1";
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?otp_length=6&authkey=$authKey&message=$message&sender=$senderId&mobile=$newMob&otp=$rndno&otp_expiry=3",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "",
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);
                $arr = json_decode($response,1);
                if ($arr['type']=="error") {
                    echo json_encode(array("status"=>0,"message"=>"Incorrect OTP"));
                } else {
                    $resultData['status'] = true;
                    $resultData['userid'] = $result[0]['id'];
                    $resultData['OTP'] = $rndno;
                    $resultData['message'] = "Success: OTP Sent successfully.";
                    $httpCode = 200;
                }
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
            $resultData['message'] = $result[0];
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
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
            $resultData['message'] = $data;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
    }
    
    public function viewbooking_post() {
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $uid = $userData->userid;
        $where = array('order_history.astrologer_id' => $uid,'order_history.bookStatus' => '1');
        $data = $this->admin->order($where);
        if (count($data) > 0) {
            $resultData['status'] = true;
            $resultData['message'] = $data;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
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
        $lastmonth=12;
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
             if(date("m", strtotime($row->date)) <= date('m') && date("Y", strtotime($row->date)) >= $current_year && date("m", strtotime($row->date)) >= $lastmonth && $row->callNation == 'Domestic'){
      $last_Month_earning += $row->amount; 
    }else if(date("m", strtotime($row->date)) <= date('m') && date("Y", strtotime($row->date)) >= $current_year && date("m", strtotime($row->date)) >= $lastmonth && $row->callNation == 'International'){
     $inter_last_Month_earning += $row->amount;   
    }
            }
        $remain_bal = $total_earning - @$total_realase;
        $remain_bal_in = $inter_total_earning - @$inter_total_realase;
        if ($uid) {
            $resultData['status'] = true;
            $resultData['message'] = "Earning";
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
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "Wrong User Details.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
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
            $resultData['message'] = $data;
            $httpCode = 200;
        } else {
            $resultData['status'] = false;
            $resultData['message'] = "No Data Found.";
            $httpCode = 201;
        }

        return $this->response($this->json($resultData), $httpCode);
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
            $resultData['message'] = $data["review"];
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
        $data['last_call'] =$call[0]['date'];
        $data['last_chat'] =$chat[0]['date'];
        if ($data) {
            $resultData['status'] = true;
            $resultData['message'] = $data;
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
    
    private function json($data) {
        if (is_array($data)) {
            return @$data;
        }
    }

}
