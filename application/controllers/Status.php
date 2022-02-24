<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model('front_model', 'front');

        $this->load->model('Admin_model', 'admin');
    }

    // public function index() {
    //      if ($this->session->userdata('countryCode') == 'IN') {
    //         date_default_timezone_set('Asia/Kolkata');
    //          if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
    //         $razorpay_payment_id = $this->input->post('razorpay_payment_id');
    //         $merchant_order_id = $this->input->post('merchant_order_id');
    //         $currency_code = 'INR';
    //         $amount = $this->input->post('merchant_total');
    //         $success = false;
    //         $error = '';
    //         $txnid = $merchant_order_id;
    //         try {                
    //             $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
    //             //execute post
    //             $result = curl_exec($ch);
    //             $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //             if ($result === false) {
    //                 $success = false;
    //                 $error = 'Curl error: '.curl_error($ch);
    //             } else {
    //                 $response_array = json_decode($result, true);
    //               // echo "<pre>";print_r($response_array);exit;
    //                     //Check success response
    //                     $where1 = array('txn_id' => $txnid);
    //     $trans_id['balance'] = $this->admin->get_details('payment', $where1);
    //     if (@$trans_id['balance'][0]->payment_status == 'success') {
    //         redirect('wallet');
    //     }
    //                     if ($http_status === 200 and isset($response_array['error']) === false) {
    //                         $success = true;
    //                     } else {
    //                         $success = false;
    //                         if (!empty($response_array['error']['code'])) {
    //                             $error = $response_array['error']['code'].':'.$response_array['error']['description'];
    //                         } else {
    //                             $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
    //                         }
    //                     }
    //             }
    //             //close connection
    //             curl_close($ch);
    //         } catch (Exception $e) {
    //             $success = false;
    //             $error = 'OPENCART_ERROR:Request to Razorpay Failed';
    //         }
    //         if ($success === true) {
    //             $amount = substr($amount, 0, -2);
    //             $whrinv = array('nation' => "Domestic", 'payment_status' => 'success');
    //     $arrinvoice = $this->front->invoice($whrinv);
    //     $data['amount'] = $amount;
    //     $data['txnid'] = $txnid;
    //     $data['status'] = "success";
    //     $data['pay_type'] = "wallet";
    //     $data1 = array(
    //         'payment_status' => "success"
    //     );
    //     $where = array('txn_id' => $txnid);
    //     $payment = $this->admin->_updateRowWhere('payment', $data1, $where);
    //     $where = array('txn_id' => $txnid);
    //     $pay['balance'] = $this->admin->get_details('payment', $where);
    //     $talk_amt = $pay['balance'][0]->amt_bfr_dsc;
    //     $resu['categories'] = $this->front->get('categories');
    //     $resu['super_categories'] = $this->front->get('super_categories');
    //     $resu['astrologer'] = $this->front->get('author');
    //             if(!empty($this->session->userdata('ci_subscription_keys'))) {
    //                 $this->session->unset_userdata('ci_subscription_keys');
    //              }
    //             if (!@$order_info['order_status_id']) {
    //                  $where = array('id' => $this->session->userdata('id'));
    //         $wallet_balence['balence'] = $this->admin->get_details('author', $where);
    //         $update_wallet = $wallet_balence['balence'][0]->wallet_balence + $talk_amt;
    //         $ndata = array(
    //         'current_bal' => $update_wallet
    //         );
    //         $nwhere = array('txn_id' => $txnid);
    //         $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //         $data1 = array(
    //             'wallet_balence' => $update_wallet,
    //         );
    //         $where = array('id' => $this->session->userdata('id'));
    //         $register = $this->admin->_updateRowWhere('author', $data1, $where);
    //          $ndata = array(
    //         'current_bal' => $update_wallet,
    //         'inv_no'    => $arrinvoice[0]->inv_no + 1,
    //         );
    //         $nwhere = array('txn_id' => $txnid);
    //         $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //         $this->sendInvoice($txnid);
    //       // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
    //         $data ['resultSet'] = $this->front->get_header_price_details();
    //         $data['countrydata'] = $this->front->getcountry('Country_codes');
    //         $this->load->view('front/header', $data);
    //         $this->load->view('pay_u/success', $data);
    //         $this->load->view('front/footer', $resu);
    //             } else {
    //                  $where = array('id' => $this->session->userdata('id'));
    //         $wallet_balence['balence'] = $this->admin->get_details('author', $where);
    //         $update_wallet = $wallet_balence['balence'][0]->wallet_balence + $talk_amt;
    //         $ndata = array(
    //         'current_bal' => $update_wallet
    //         );
    //         $nwhere = array('txn_id' => $txnid);
    //         $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //         $data1 = array(
    //             'wallet_balence' => $update_wallet,
    //         );
    //         $where = array('id' => $this->session->userdata('id'));
    //         $register = $this->admin->_updateRowWhere('author', $data1, $where);
    //         $ndata = array(
    //         'current_bal' => $update_wallet,
    //         'inv_no'    => $arrinvoice[0]->inv_no + 1,
    //         );
    //         $nwhere = array('txn_id' => $txnid);
    //         $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //         $this->sendInvoice($txnid);
    //       // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
    //         $data ['resultSet'] = $this->front->get_header_price_details();
    //         $data['countrydata'] = $this->front->getcountry('Country_codes');
    //         $this->load->view('front/header', $data);
    //         $this->load->view('pay_u/success', $data);
    //         $this->load->view('front/footer', $resu);
    //             }

    //         } else {
    //             $data['amount'] = $amount;
    //     $data['txnid'] = $txnid;
    //     $data['status'] = "failed";
    //     $data['pay_type'] = "wallet";
    //      $resu['categories'] = $this->front->get('categories');
    //     $resu['super_categories'] = $this->front->get('super_categories');
    //     $resu['astrologer'] = $this->front->get('author');
    //             $where = array('id' => $this->session->userdata('id'));
    //         $wallet_balence['balence'] = $this->admin->get_details('author', $where);
    //         $update_wallet = $wallet_balence['balence'][0]->wallet_balence;
    //          $ndata = array(
    //         'current_bal' => $update_wallet
    //     );
    //     $nwhere = array('txn_id' => $txnid);
    //     $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //       // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
    //         $data ['resultSet'] = $this->front->get_header_price_details();
    //         $data['countrydata'] = $this->front->getcountry('Country_codes');
    //         $this->load->view('front/header', $data);
    //         $this->load->view('pay_u/failure', $data);
    //         $this->load->view('front/footer', $resu);
    //         }
    //     } else {
    //         redirect('wallet');
    //     }
    //     } else{
    //          date_default_timezone_set('Asia/Kolkata');
    //     $status = $this->input->get('st');
    //     if (empty($status)) {
    //         redirect('');
    //     }
    //     $where1 = array('txn_id' => $this->input->get('tx'));
    //     $trans_id['balance'] = $this->admin->get_details('payment', $where1);
    //     if (@$trans_id['balance'][0]->payment_status == 'success') {
    //         redirect('wallet');
    //     }
        
    //         $item_number = $this->input->get('item_number');  
    //         $txn_id = $this->input->get('tx'); 
    //         $amount = $this->input->get('amt');
    //         $currency_code = $this->input->get('cc'); 
    //         if($status == "Completed"){
    //             $status = 'success';
    //         }
    //     $data['amount'] = $amount;
    //     $data['txnid'] = $txn_id;
    //     $data['status'] = $status;
    //     $data['pay_type'] = "wallet";
    //     $data1 = array(
    //         'txn_id' => $txn_id,
    //         'payment_status' => $status
    //     );
    //     $where = array('txn_id' => $this->input->get('item_number'));
    //     $payment = $this->admin->_updateRowWhere('payment', $data1, $where);
    //     $where = array('txn_id' => $txn_id);
    //     $pay['balance'] = $this->admin->get_details('payment', $where);
    //     $talk_amt = $pay['balance'][0]->amt_bfr_dsc;
    //     $resu['categories'] = $this->front->get('categories');
    //     $resu['super_categories'] = $this->front->get('super_categories');
    //     $resu['astrologer'] = $this->front->get('author');
    //     $book_date = date('Y-m-d H:i:s');
    //     $booking_no = 'OGM/2019/VA-0000' . $this->session->userdata('id');
    //     $wotgst = '';
    //     $totgst = '';
    //     $sup_name = "Calling Pack";
    //     if ($status == 'success') {
    //         $where = array('id' => $this->session->userdata('id'));
    //         $wallet_balence['balence'] = $this->admin->get_details('author', $where);
    //         $update_wallet = $wallet_balence['balence'][0]->wallet_balence + $talk_amt;
    //         $ndata = array(
    //         'current_bal' => $update_wallet
    //     );
    //     $nwhere = array('txn_id' => $txnid);
    //     $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //         $data1 = array(
    //             'wallet_balence' => $update_wallet,
    //         );
    //         $where = array('id' => $this->session->userdata('id'));
    //       // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
    //         $register = $this->admin->_updateRowWhere('author', $data1, $where);
    //         $data ['resultSet'] = $this->front->get_header_price_details();
    //         $data['countrydata'] = $this->front->getcountry('Country_codes');
    //         $this->load->view('front/header', $data);
    //         $this->load->view('pay_u/success', $data);
    //         $this->load->view('front/footer', $resu);
    //     } else {
    //           $where = array('id' => $this->session->userdata('id'));
    //         $wallet_balence['balence'] = $this->admin->get_details('author', $where);
    //         $update_wallet = $wallet_balence['balence'][0]->wallet_balence;
    //          $ndata = array(
    //         'current_bal' => $update_wallet
    //     );
    //     $nwhere = array('txn_id' => $txnid);
    //     $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
    //       // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
    //         $data ['resultSet'] = $this->front->get_header_price_details();
    //         $data['countrydata'] = $this->front->getcountry('Country_codes');
    //         $this->load->view('front/header', $data);
    //         $this->load->view('pay_u/failure', $data);
    //         $this->load->view('front/footer', $resu);
    //     }
    //     }
        
    // }
  public function index() {
        $user_ip = $this->getUserIP();
        $Ipdata = $this->ip_info($user_ip, "Location");
        if ($Ipdata['countryCode'] == 'IN') {
            date_default_timezone_set('Asia/Kolkata');
        $status = $this->input->post('status');
        if (empty($status)) {
            redirect('');
        }
        $where1 = array('txn_id' => $this->input->post('txnid'));
        $trans_id['balance'] = $this->admin->get_details('payment', $where1);
        if (@$trans_id['balance'][0]->payment_status == 'success') {
            redirect('wallet');
        }
        $cust_id = @$trans_id['balance'][0]->customer_id;
        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $disc_amount = $this->input->post('disc_amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "HDSFHVQUOv"; //  Your salt
        $add = $this->input->post('additionalCharges');
        if (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        $data['hash'] = hash("sha512", $retHashSeq);
        $data['amount'] = $amount;
        $data['currency'] = "INR";
        $data['txnid'] = $txnid;
        $data['posted_hash'] = $posted_hash;
        $data['status'] = $status;
        $data['firstname'] = $firstname;
        $data['productinfo'] = $productinfo;
        $data['email'] = $email;
        $data['pay_type'] = "wallet";
        $whrinv = array('nation' => "Domestic", 'payment_status' => 'success');
        $arrinvoice = $this->front->invoice($whrinv);
        $data1 = array(
            'payment_status' => $status
        );
        $where = array('txn_id' => $txnid);
        $payment = $this->admin->_updateRowWhere('payment', $data1, $where);
        $where = array('txn_id' => $txnid);
        $pay['balance'] = $this->admin->get_details('payment', $where);
        $talk_amt = $pay['balance'][0]->amt_bfr_dsc;
        $resu['categories'] = $this->front->get('categories');
        $resu['super_categories'] = $this->front->get('super_categories');
        $resu['astrologer'] = $this->front->get('author');
        $book_date = date('Y-m-d H:i:s');
        $booking_no = 'OGM/2019/VA-0000' . $cust_id;
        $wotgst = $amount - (($amount * 15.25) / 100);
        $totgst = $amount - $wotgst;
        $sup_name = "Calling Pack";
        if ($status == 'success') {
            $where = array('id' => $cust_id);
            $wallet_balence['balence'] = $this->admin->get_details('author', $where);
            $update_wallet = $wallet_balence['balence'][0]->wallet_balence + $talk_amt;
            $ndata = array(
            'current_bal' => $update_wallet,
            'inv_no'    => $arrinvoice[0]->inv_no + 1,
            );
            $nwhere = array('txn_id' => $txnid);
            $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
            $data1 = array(
                'wallet_balence' => $update_wallet,
            );
            $where = array('id' => $cust_id);
            $register = $this->admin->_updateRowWhere('author', $data1, $where);
            $this->sendInvoice($txnid);
            //$this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
            $register = $this->admin->_updateRowWhere('author', $data1, $where);
            $data ['resultSet'] = $this->front->get_header_price_details();
            $data['countrydata'] = $this->front->getcountry('Country_codes');
            $this->load->view('front/header', $data);
            $this->load->view('pay_u/success', $data);
            $this->load->view('front/footer', $resu);
        } else {
            $where = array('id' => $cust_id);
            $wallet_balence['balence'] = $this->admin->get_details('author', $where);
            $update_wallet = $wallet_balence['balence'][0]->wallet_balence;
             $ndata = array(
            'current_bal' => $update_wallet
        );
        $nwhere = array('txn_id' => $txnid);
        $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
         //   $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
            $data ['resultSet'] = $this->front->get_header_price_details();
            $data['countrydata'] = $this->front->getcountry('Country_codes');
            $this->load->view('front/header', $data);
            $this->load->view('pay_u/failure', $data);
            $this->load->view('front/footer', $resu);
        }
        }else{
             date_default_timezone_set('Asia/Kolkata');
        $status = $this->input->get('st');
        if (empty($status)) {
            redirect('');
        }
        $where1 = array('txn_id' => $this->input->get('tx'));
        $trans_id['balance'] = $this->admin->get_details('payment', $where1);
        if (@$trans_id['balance'][0]->payment_status == 'success') {
            redirect('wallet');
        }
        
            $item_number = $this->input->get('item_number');  
            $txn_id = $this->input->get('tx'); 
            $amount = $this->input->get('amt');
            $currency_code = $this->input->get('cc'); 
            if($status == "Completed"){
                $status = 'success';
            }
        $data['amount'] = $amount;
        $data['currency'] = "USD";
        $data['txnid'] = $txn_id;
        $data['status'] = $status;
        $data['pay_type'] = "wallet";
        $data1 = array(
            'txn_id' => $txn_id,
            'payment_status' => $status
        );
        $where = array('txn_id' => $this->input->get('item_number'));
        $payment = $this->admin->_updateRowWhere('payment', $data1, $where);
        $where = array('txn_id' => $txn_id);
        $pay['balance'] = $this->admin->get_details('payment', $where);
        $talk_amt = $pay['balance'][0]->amt_bfr_dsc;
        $cust_id = $pay['balance'][0]->customer_id;
        $resu['categories'] = $this->front->get('categories');
        $resu['super_categories'] = $this->front->get('super_categories');
        $resu['astrologer'] = $this->front->get('author');
        $book_date = date('Y-m-d H:i:s');
        $booking_no = 'OGM/2019/VA-0000' . $cust_id;
        $wotgst = '';
        $totgst = '';
        $sup_name = "Calling Pack";
        if ($status == 'success') {
            $where = array('id' => $cust_id);
            $wallet_balence['balence'] = $this->admin->get_details('author', $where);
            $update_wallet = $wallet_balence['balence'][0]->wallet_balence + $talk_amt;
            $ndata = array(
            'current_bal' => $update_wallet
        );
        $nwhere = array('txn_id' => $txnid);
        $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
            $data1 = array(
                'wallet_balence' => $update_wallet,
            );
            $where = array('id' => $cust_id);
          // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
            $register = $this->admin->_updateRowWhere('author', $data1, $where);
            $data ['resultSet'] = $this->front->get_header_price_details();
            $data['countrydata'] = $this->front->getcountry('Country_codes');
            $this->load->view('front/header', $data);
            $this->load->view('pay_u/success', $data);
            $this->load->view('front/footer', $resu);
        } else {
          // $this->admin->emailus($this->session->userdata('name'), $this->session->userdata('mobile'), $this->session->userdata('username'), $booking_no, $book_date, "Wallet Recharge", $amount, $sup_name, $wotgst, $totgst, $disc_amount);
            $where = array('id' => $cust_id);
            $wallet_balence['balence'] = $this->admin->get_details('author', $where);
            $update_wallet = $wallet_balence['balence'][0]->wallet_balence;
             $ndata = array(
            'current_bal' => $update_wallet
        );
        $nwhere = array('txn_id' => $txnid);
        $npayment = $this->admin->_updateRowWhere('payment', $ndata, $nwhere);
            $data ['resultSet'] = $this->front->get_header_price_details();
            $data['countrydata'] = $this->front->getcountry('Country_codes');
            $this->load->view('front/header', $data);
            $this->load->view('pay_u/failure', $data);
            $this->load->view('front/footer', $resu);
        }
        }
        
    }
    private function get_curl_handle($payment_id, $amount)  {
        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id = "rzp_live_pCyVuk4BLZGBkJ";
        $key_secret = "B3n4xYbas9KCaRxi9zbfNKJM";
        $fields_string = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
       // curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__).'/ca-bundle.crt');
        return $ch;
    }   
    
    public function pay_with_bank() {
        date_default_timezone_set('Asia/Kolkata');

        $status = $this->input->post('status');

        if (empty($status)) {

            redirect('');
        }

        $firstname = $this->input->post('firstname');

        $amount = $this->input->post('amount');

        $txnid = $this->input->post('txnid');

        $posted_hash = $this->input->post('hash');

        $key = $this->input->post('key');

        $productinfo = $this->input->post('productinfo');

        $email = $this->input->post('email');

        $salt = "HDSFHVQUOv"; //  Your salt

        $add = $this->input->post('additionalCharges');

        if (isset($add)) {

            $additionalCharges = $this->input->post('additionalCharges');

            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {



            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }

        $data['hash'] = hash("sha512", $retHashSeq);

        $data['amount'] = $amount;

        $data['txnid'] = $txnid;

        $data['date'] = date('Y-m-d H:i:s');

        $data['posted_hash'] = $posted_hash;

        $data['status'] = $status;

        $data['firstname'] = $firstname;

        $data['productinfo'] = $productinfo;

        $data['email'] = $email;

        $data['pay_type'] = "Pay With Bank";

        $data['astro'] = $this->session->userdata('pay_session_astrologer_id');



        $data1 = array(
            'txn_id' => $txnid,
            'customer_id' => $this->session->userdata('id'),
            'amount' => $amount,
            'payment_status' => $status,
            'date' => date('Y-m-d H:i:s'),
        );
        $res['categories'] = $this->front->get('categories');

        $res['super_categories'] = $this->front->get('super_categories');

        $res['astrologer'] = $this->front->get('author');

        $payment = $this->admin->_insertRow('payment', $data1);

        if ($status == 'success') {

            $this->load->view('front/header');

            $this->load->view('pay_u/success', $data);

            $this->load->view('front/footer', $res);

            //  --------------    save all data in db  -------------------//


            $data1 = array(
                'sevice_name' => $this->session->userdata('pay_session_sevice_name'),
                'call_duration' => $this->session->userdata('pay_session_call_duration'),
                'astrologer_id' => $this->session->userdata('pay_session_astrologer_id'),
                'super_cat_id' => 76,
                'category_id' => $this->session->userdata('pay_session_category_id'),
                'service_price' => $this->session->userdata('pay_session_service_price'),
                'vendor_price' => $this->session->userdata('pay_session_vendor_price'),
                'customer_id' => $this->session->userdata('id'),
                'current_balance' => $this->session->userdata('pay_session_wallet_balence'),
                'payment_mode' => 'Bank',
                'call_type' => $this->session->userdata('pay_session_call_type'),
                'booking_no' => $this->session->userdata('pay_session_booking_no'),
                'is_Active' => "Accept",
                'date' => date('Y-m-d H:i:s'),
                'start_chatTime'=> date("Y-m-d H:i:s"),
            );

            $answer = $this->admin->_insertRow('order_history', $data1);

            $order_id = $this->db->insert_id();

            $where_astrologer = array('id' => $this->session->userdata('pay_session_astrologer_id'));

            $wallet_balence = $this->admin->get_details('author', $where_astrologer);



            $astrologer_wallet = $wallet_balence[0]->wallet_balence;

            $update_astrologer_wallet = $wallet_balence[0]->wallet_balence + $this->session->userdata('pay_session_vendor_price');





            $data3 = array(
                'wallet_balence' => $update_astrologer_wallet,
            );

            $where_astrologer1 = array('id' => $this->session->userdata('pay_session_astrologer_id'));

            $wallet = $this->admin->_updateRowWhere('author', $data3, $where_astrologer1);



            $data5 = array(
                'amount' => $this->session->userdata('pay_session_vendor_price'),
                'payment_type' => "Cradit",
                'customer_id' => $this->session->userdata('pay_session_astrologer_id'),
                'date' => date("Y-m-d"),
                'order_id' => $order_id,
            );

            $wallet_history = $this->admin->_insertRow('wallet_history', $data5);





            //----------------------------   get admin number    -------------------------------------//

            $where_admin = array('user_type' => 'admin');

            $admin = $this->admin->get_details('author', $where_admin);

//----------------------------   get admin number    -------------------------------------//
//--------------------  sms  Api-----------------------------//



            $number1 = $this->session->userdata('mobile');

            $number2 = $wallet_balence[0]->mobile;

            $number3 = $admin[0]->mobile;

            $msg = "Dear " . $this->session->userdata('name') . " Your booking ID is " . $this->session->userdata('pay_session_booking_no') . ". Please click on START CALL to receive an instant call on your registered Mobile Number.";

            $this->test_sms($msg, $number1, $number2, $number3);

            //----------------sms api    --------------------------------
            //  --------------    save all data in db  -------------------//                
        } else {

            $this->load->view('front/header');

            $this->load->view('pay_u/failure', $data);

            $this->load->view('front/footer', $res);
        }
    }

    public function pay_with_bank1() {

        $status = $this->input->post('status');

        if (empty($status)) {

            redirect('Welcome');
        }



        $firstname = $this->input->post('firstname');

        $amount = $this->input->post('amount');

        $txnid = $this->input->post('txnid');

        $posted_hash = $this->input->post('hash');

        $key = $this->input->post('key');

        $productinfo = $this->input->post('productinfo');

        $email = $this->input->post('email');

        $salt = "HDSFHVQUOv"; //  Your salt

        $add = $this->input->post('additionalCharges');



        if (isset($txnid)) {

            $additionalCharges = $this->input->post('additionalCharges');

            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {



            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }

        $data['hash'] = hash("sha512", $retHashSeq);

        $data['amount'] = $amount;

        $data['txnid'] = $txnid;

        $data['posted_hash'] = $posted_hash;

        $data['status'] = $status;

        $data['firstname'] = $firstname;

        $data['productinfo'] = $productinfo;

        $data['email'] = $email;

        $data['pay_type'] = "Pay With Bank";

        $data['base_url'] = $this->session->userdata('session_back_url');


        $data1 = array(
            'txn_id' => $txnid,
            'customer_id' => $this->session->userdata('id'),
            'amount' => $amount,
            'payment_status' => $status,
            'date' => date('Y-m-d'),
        );

        $payment = $this->admin->_insertRow('payment', $data1);

        if ($status == 'success') {

            $this->load->view('pay_u/success', $data);
              
        } else {


            $data1 = array(
                'sevice_name' => $this->session->userdata('session_sevice_name'),
                'category_id' => $this->session->userdata('session_category_id'),
                'super_cat_id' => $this->session->userdata('session_super_cat_id'),
                'booking_no' => $this->session->userdata('session_booking_no'),
                'service_price' => $this->session->userdata('session_service_price'),
                'customer_id' => $this->session->userdata('session_customer_id'),
                'current_balance' => $this->session->userdata('session_current_balance'),
                'coupon_code' => $this->session->userdata('coupon_code'),
                'coupon_discount' => $this->session->userdata('coupon_discount'),
                'payment_mode' => 'Bank',
                'date' => date("Y-m-d"),
                'is_Active' => 'Accept',
                'start_chatTime'=> date("Y-m-d H:i:s"),
            );

            $answer = $this->admin->_insertRow('order_history', $data1);

            $last_order_id = $this->db->insert_id();

            if ($last_order_id) {

                $data2 = array(
                    'amount' => $this->session->userdata('session_service_price'),
                    'order_id' => $last_order_id,
                    'payment_type' => "Debit",
                    'payment_mode' => "Bank",
                    'customer_id' => $this->session->userdata('id'),
                    'date' => date("Y-m-d"),
                );

                $answer = $this->admin->_insertRow('wallet_history', $data2);

                $invoice = 'OGM/2019/VA-0000' . $last_order_id;

                $where_astrologer = array('id' => $this->session->userdata('session_super_cat_id'));

                $service = $this->admin->get_details('super_categories', $where_astrologer);

                $service_name = $service[0]->super_category;
                $service_description = $service[0]->short_description;
                if ($this->session->userdata('service_type') == 'Horoscope') {
                    $srvice_type = "Horoscope";
                } else {
                    $srvice_type = "Online Pooja";
                }

                $this->admin->emailus($service_name, $service_description, $invoice, $this->session->userdata('session_package_price'), $this->session->userdata('session_gst_price'), $this->session->userdata('session_service_price'), $srvice_type, $this->session->userdata('coupon_code'), $this->session->userdata('coupon_discount'));
            }

            $where_admin = array('user_type' => 'admin');

            $admin = $this->admin->get_details('author', $where_admin);

            $number1 = $this->session->userdata('mobile');

            $number2 = $admin[0]->mobile;

            $msg = "Dear " . $this->session->userdata('name') . " your Booking has been Received successfully. Your booking ID is " . $this->session->userdata('session_booking_no') . ". Stay tuned, will be confirmed back your booking shortly.";

            $this->test_sms($msg, $number1, $number2);

            //----------------sms api    --------------------------------

            if ($this->session->userdata('session_service_type') == 'kundali') {
//-------------------------- insert kundali ---------------------
                // $data['service_id'] = $this->input->post('category_id'); 

                $data4 = array(
                    'customer_id' => $this->session->userdata('session_customer_id'),
                    'fname' => $this->session->userdata('session_submit_kundali_fname'),
                    'lname' => $this->session->userdata('session_submit_kundali_lname'),
                    'mobile' => $this->session->userdata('session_submit_kundali_mobile'),
                    'current_location' => $this->session->userdata('session_submit_kundali_current_location'),
                    'birth_detail' => $this->session->userdata('session_submit_kundali_birth_detail'),
                    'birth_country' => $this->session->userdata('session_submit_kundali_birth_country'),
                    'birth_state' => $this->session->userdata('session_submit_kundali_birth_state'),
                    'birth_city' => $this->session->userdata('session_submit_kundali_birth_city'),
                    'dob' => $this->session->userdata('session_submit_kundali_dob'),
                    'super_cat_id' => $this->session->userdata('session_submit_kundali_super_cat_id'),
                    'booking_no' => $this->session->userdata('session_submit_kundali_booking_no'),
                    'birth_time' => $this->session->userdata('session_submit_kundali_birth_time'),
                    'gender' => $this->session->userdata('session_submit_kundali_gender'),
                    'status' => "Pandding",
                    'order_id' => $last_order_id,
                    'date' => date('Y-m-d'),
                    'service_id' => $this->session->userdata('session_submit_kundali_service_id'),
                    'service_name' => $this->session->userdata('session_submit_kundali_service_name'),
                    'service_price' => $this->session->userdata('session_submit_kundali_service_price'),
                );

                $kundali = $this->admin->_insertRow('kundali', $data4);
            }
            $this->load->view('pay_u/failure', $data);
        }
    }

    public function test_sms($msg = '', $number1 = '', $number2 = '', $number3 = '') {

        $msg1 = urlencode($msg);

        if ($number2 == '') {

            $ch = curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts=' . $number1 . '&senderid=GODMED&msg=' . $msg1);
        } elseif ($number3 == '' AND $number2 != '') {

            $ch = curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts=' . $number1 . ',' . $number2 . '&senderid=GODMED&msg=' . $msg1);
        } else {

            $ch = curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts=' . $number1 . ',' . $number2 . ',' . $number3 . '&senderid=GODMED&msg=' . $msg1);
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 2);

        $data1 = curl_exec($ch);

        return $data1;
    }
    
        public function sendInvoice($id = '') {
        if ($id) {
            $this->load->helper('email_helper');
            $where = array('txn_id' => $id);
            $chekInfo = $this->admin->get_details('payment', $where);
            $where1 = array('id' => $chekInfo[0]->customer_id);
            $chekInfo1 = $this->admin->get_details('author', $where1);
            $data['case'] = 'invoice';
            $data['invoice_date'] = $chekInfo[0]->date;
            $inv = "OGM";
            if($chekInfo[0]->nation == "Domestic"){
                $inv = "OGM".$chekInfo[0]->inv_no;
                $currency = "Rs.";  
                $currency_code = "RUPEES"; 
            } elseif($chekInfo[0]->nation == "International"){
                $inv = "OGMW".$chekInfo[0]->inv_no;
                $currency = "USD $";
                $currency_code = "USD DOLLAR"; 
            }
            $data['invoice_no'] = $inv;
            $data['currency'] = $currency;
            $data['currency_code'] = $currency_code;
            $data['pack_name'] = $chekInfo[0]->pack_name;
            $data['amt_bfr_dsc'] = $chekInfo[0]->amt_bfr_dsc;
            $data['disc_price'] = $chekInfo[0]->disc_price;
            $data['amt_after_dsc'] = $chekInfo[0]->amt_after_dsc;
            $data['gst'] = $chekInfo[0]->gst;
            $data['amount'] = $chekInfo[0]->amount;
            $data['name'] = $chekInfo1[0]->name;
            $data['mobile'] = $chekInfo1[0]->mobile;
            $data['call_price_word'] = $this->numberTowords($data['amount']);
            $emailConfig['subject'] = 'Payment Invoice - '. LOGO_NAME;
            $emailConfig['to_email'] = $chekInfo1[0]->email;
            sendEmail($data, $emailConfig);
        }
    }
    
    function numberTowords($num)
{ 
$ones = array(
0 =>"ZERO",
1 => "ONE",
2 => "TWO",
3 => "THREE",
4 => "FOUR",
5 => "FIVE",
6 => "SIX",
7 => "SEVEN",
8 => "EIGHT",
9 => "NINE",
10 => "TEN",
11 => "ELEVEN",
12 => "TWELVE",
13 => "THIRTEEN",
14 => "FOURTEEN",
15 => "FIFTEEN",
16 => "SIXTEEN",
17 => "SEVENTEEN",
18 => "EIGHTEEN",
19 => "NINETEEN"
);
$tens = array( 
0 => "ZERO",
1 => "TEN",
2 => "TWENTY",
3 => "THIRTY", 
4 => "FORTY", 
5 => "FIFTY", 
6 => "SIXTY", 
7 => "SEVENTY", 
8 => "EIGHTY", 
9 => "NINETY" 
); 
$hundreds = array( 
"HUNDRED", 
"THOUSAND", 
"MILLION", 
"BILLION", 
"TRILLION", 
"QUARDRILLION" 
); /*limit t quadrillion */
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr,1); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){
	
while(substr($i,0,1)=="0")
		$i=substr($i,1,5);
if($i < 20){ 
/* echo "getting:".$i; */
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
}
} 
if($decnum > 0){
$rettxt .= " and ";
if($decnum < 20){
$rettxt .= $ones[$decnum];
}elseif($decnum < 100){
$rettxt .= $tens[substr($decnum,0,1)];
$rettxt .= " ".$ones[substr($decnum,1,1)];
}
}
return $rettxt;
} 
function getUserIP() {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
        $output = NULL;
        if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
            $ip = $_SERVER["REMOTE_ADDR"];
            if ($deep_detect) {
                if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
        }
        $purpose = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
        $support = array("country", "countrycode", "state", "region", "city", "location", "address");
        $continents = array(
            "AF" => "Africa",
            "AN" => "Antarctica",
            "AS" => "Asia",
            "EU" => "Europe",
            "OC" => "Australia (Oceania)",
            "NA" => "North America",
            "SA" => "South America"
        );
        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case "location":
                        $output = array(
                            "latitude" => @$ipdat->geoplugin_latitude,
                            "longitude" => @$ipdat->geoplugin_longitude,
                            "city" => @$ipdat->geoplugin_city,
                            "country" => @$ipdat->geoplugin_countryName,
                            "timezone" => @$ipdat->geoplugin_timezone,
                            "countryCode" => @$ipdat->geoplugin_countryCode
                        );
                        break;
                    case "address":
                        $address = array($ipdat->geoplugin_countryName);
                        if (@strlen($ipdat->geoplugin_regionName) >= 1)
                            $address[] = $ipdat->geoplugin_regionName;
                        if (@strlen($ipdat->geoplugin_city) >= 1)
                            $address[] = $ipdat->geoplugin_city;
                        $output = implode(", ", array_reverse($address));
                        break;
                    case "city":
                        $output = @$ipdat->geoplugin_city;
                        break;
                    case "state":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "region":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "country":
                        $output = @$ipdat->geoplugin_countryName;
                        break;
                    case "countrycode":
                        $output = @$ipdat->geoplugin_countryCode;
                        break;
                }
            }
        }
        return $output;
    }

}
