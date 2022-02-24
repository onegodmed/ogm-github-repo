<?php 

   class Login extends CI_Controller { 



    public function __construct() {

        //Add parent controller contructor

        parent::__construct();
     
        $this->load->helper('cookie');

        $this->load->model('admin_model', 'admin');
        $this->load->model('front_model', 'front');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');        

         

    }

	

      public function index() { 
          if($this->session->userdata('user_ip') == ""){
            $user_ip = $this->getUserIP();
            $Ipdata = $this->ip_info($user_ip, "Location");
             $array = array(
            'user_ip' => $user_ip,
            'timezone' => $Ipdata['timezone'],
            'latitude' => $Ipdata['latitude'],
            'longitude' => $Ipdata['longitude'],
            'country'  => $Ipdata['country'],
            'countryCode'  => $Ipdata['countryCode'],
            'city' => $Ipdata['city']
        );
        $this->session->set_userdata($array);
        } 
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        if($this->session->userdata('id') ==''){
            $this->load->view('front/login', $data);
} else{
    redirect('');
}
     
      }
      
      public function vendorlogin(){
          if($this->session->userdata('user_ip') == ""){
            $user_ip = $this->getUserIP();
            $Ipdata = $this->ip_info($user_ip, "Location");
             $array = array(
            'user_ip' => $user_ip,
            'timezone' => $Ipdata['timezone'],
            'latitude' => $Ipdata['latitude'],
            'longitude' => $Ipdata['longitude'],
            'country'  => $Ipdata['country'],
            'countryCode'  => $Ipdata['countryCode'],
            'city' => $Ipdata['city']
        );
        $this->session->set_userdata($array);
        } 
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        if($this->session->userdata('id') ==''){
            $this->load->view('user/vendor_login', $data);
} else{
    redirect('partner/');
}
    }



      public function login_code() { 



  

             $username = $this->input->post('username');

             $password = $this->input->post('password');

             

          $data =  array(

            'email' =>  $username,

            'password' => $password, 

 );

      $result = $this->admin->login($username,$password);

          

        if($result){

            $array = array(

        'id'         => $result[0]->id,

        'username'  => $result[0]->email,

        'address'   => $result[0]->address.' '.$result[0]->city,

        'mobile'     => $result[0]->mobile,

        'name'     => $result[0]->name,

        'image'     => $result[0]->image,
        
        'wallet_balence'     => $result[0]->wallet_balence,

        'user_type'     => $result[0]->user_type,

        'logged_in' => TRUE

);



       

          $this->session->set_userdata($array);

           // $this->session->userdata('username');

          if($this->session->userdata('user_type')=='Astrologer'){

            redirect('admin/my_booking');

          }elseif ($this->session->userdata('user_type')=='User') {

            redirect('user/booking');

          }

          redirect('User');

  

        }else{

            redirect('login');

        }



      }

      public function updateNo() { 
            $mobile = $this->input->post('mobile');
            $ctry_code = $this->input->post('ctry_code');
            $otp = $this->input->post('otp');
            $newMob = str_replace("+","",$ctry_code).$mobile;
        $authKey = "310447AWWz8TOQJ462137d9eP1"; // "310447AzgZJhF4u7zr5e0758c9P1";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://control.msg91.com/api/verifyRequestOTP.php?authkey=$authKey&mobile=$newMob&otp=$otp",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

       $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $arr = json_decode($response,1);
       if ($arr['type']=="error") {
echo json_encode(array("status"=>0,"message"=>"Incorrect OTP"));
        } else {
           
                $data = array(
                    'mobile' => $mobile,
                    'country_code' => $ctry_code, 
                );
                $answer = $this->admin->updateMob($data,$this->session->userdata('id'));
        }
        if($answer){
            echo json_encode(array("status"=>1,"message"=>"successfull"));
        }

      }

            public function front_login_code() { 

             $mobile = $this->input->post('mobile');
            $ctry_code = $this->input->post('ctry_code');
            $username = $this->input->post('username');
            $useremail = $this->input->post('useremail');
             $otp = $this->input->post('otp');
             $newMob = str_replace("+","",$ctry_code).$mobile;
        $authKey = "310447AWWz8TOQJ462137d9eP1"; // "310447AzgZJhF4u7zr5e0758c9P1";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://control.msg91.com/api/verifyRequestOTP.php?authkey=$authKey&mobile=$newMob&otp=$otp",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

       $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $arr = json_decode($response,1);
       if ($arr['type']=="error") {
echo json_encode(array("status"=>0,"message"=>"Incorrect OTP"));
        } else {
			date_default_timezone_set('Asia/Kolkata');
            if($username!=''){
                $data = array(
                    'mobile' => $mobile,
                    'country_code' => $ctry_code, 
                    'name' => $username,
                    'email' => $useremail,
                    'user_type' => 'User',
                    'status' => "Online",
                    'date' => date('Y-m-d H:i:s'),
                    'image' => "no-image.png",
                    'wallet_balence' => 0
                );
                $answer = $this->admin->_insertRow('author', $data);
            }

            $result = $this->admin->login($mobile, $ctry_code);
             if($result){

            $array = array(

        'id'         => $result[0]->id,

        'username'  => $result[0]->email,

        'mobile'     => $result[0]->mobile,

        'name'     => $result[0]->name,

        'user_type'     => $result[0]->user_type,

        'image'     => $result[0]->image,
        
        'wallet_balence'     => $result[0]->wallet_balence,

        'logged_in' => TRUE

);



          

          $this->session->set_userdata($array);
 

            
          if($this->input->post('remember_me')  == 'yes'){
            $this->input->set_cookie(array('name'=>'username', 'value'=>$this->input->post('username')));    
        $this->input->set_cookie(array('name'=>'password', 'value'=>$this->input->post('password')));

          }else{
            delete_cookie('username');
            delete_cookie('password');
          }

         echo json_encode(array("status"=>1,"message"=>"successfull","username"=>$username));



       



      }else{
             echo json_encode(array("status"=>0,"message"=>"failed"));

      }

        }
             

          $data =  array(
            'mobile' => $mobile 

 );
    }

public function frontlogin() { 

             $mobile = $this->input->post('mobile');
            $ctry_code = $this->input->post('ctry_code');
 
  $result = $this->admin->login($mobile, $ctry_code);  

          $data =  array(
            'mobile' => $mobile 

 );


          

        if($result){
         echo json_encode(array("status"=>1,"message"=>"successfull"));

      }else{
             echo json_encode(array("status"=>0,"message"=>"failed"));

      }

    }
    
      public function vendor_login_code() { 

             $mobile = $this->input->post('mobile');
            $ctry_code = $this->input->post('ctry_code');
             $otp = $this->input->post('otp');
             $newMob = str_replace("+","",$ctry_code).$mobile;
        $authKey = "310447AWWz8TOQJ462137d9eP1"; // "310447AzgZJhF4u7zr5e0758c9P1";"310447AzgZJhF4u7zr5e0758c9P1";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://control.msg91.com/api/verifyRequestOTP.php?authkey=$authKey&mobile=$newMob&otp=$otp",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

       $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $arr = json_decode($response,1);
       if ($arr['type']=="error") {
echo json_encode(array("status"=>0,"message"=>"Incorrect OTP"));
        } else {

            $result = $this->admin->login($mobile, $ctry_code);
             if($result){

            $array = array(

        'id'         => $result[0]->id,

        'username'  => $result[0]->email,

        'mobile'     => $result[0]->mobile,

        'name'     => $result[0]->name,

        'user_type'     => $result[0]->user_type,

        'image'     => $result[0]->image,
        
        'wallet_balence'     => $result[0]->wallet_balence,

        'logged_in' => TRUE

);

          $this->session->set_userdata($array);


         echo json_encode(array("status"=>1,"message"=>"successfull"));

      }else{
             echo json_encode(array("status"=>0,"message"=>"failed"));

      }

        }
             
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
    
    public function vendor_login_chat($id) { 

             $mobile = base64_decode($id);

            $result = $this->admin->chatlogin($mobile);
             if($result){

            $array = array(

        'id'         => $result[0]->id,

        'username'  => $result[0]->email,

        'mobile'     => $result[0]->mobile,

        'name'     => $result[0]->name,

        'user_type'     => $result[0]->user_type,

        'image'     => $result[0]->image,
        
        'wallet_balence'     => $result[0]->wallet_balence,

        'logged_in' => TRUE

);

          $this->session->set_userdata($array);


        redirect('partner/chat_booking/');

      }else{
             redirect('');

      }

        }

   } 

?>