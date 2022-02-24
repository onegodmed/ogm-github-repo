<?php


defined('BASEPATH') or exit('no direct script allowed');

Class Api extends CI_Controller {



    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model', 'admin');  

    }


public function index() {
 echo "yes";
}

public function register() {
     $number = $this->input->post('number');
     $otp = date('his');
     $msg = urlencode('Your One TIme Login Password Is '.$otp);
      $ch=curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts='.$number.'&senderid=GODMED&msg='.$msg);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_POSTFIELDS,"");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
 $data1 = curl_exec($ch);
 // return $data1;

     $where = array('user_number' => $number);
     $user_number = $this->admin->get_details('register', $where);
     if($user_number){
            echo json_encode(array("status"=>1,"message"=>"message sent Successfully","otp" => $otp));
     }else{
      
  $data = array(
            'user_number' => $number,
            'date'        => date('Y-m-d'),
        );
       
        $register = $this->admin->_insertRow('register', $data);
              if ($register) {
              echo json_encode(array("status"=>1,"msg"=>"message sent Successfully","otp"=> $otp));
              exit();
              }else{
              echo json_encode(array("status"=>0,"msg"=>"Not A Valid Number"));
              exit();
              }
            }
}


}



?>