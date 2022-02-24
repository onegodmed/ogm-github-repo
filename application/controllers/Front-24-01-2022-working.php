<?php

//we need to start session in order to access it through CI

Class Front extends CI_Controller {

    public function __construct() {

        //Add parent controller contructor

        parent::__construct();

        $this->load->model('front_model', 'front');

        $this->load->model('Admin_model', 'admin');

        $this->load->library('form_validation');

        $this->load->library('cart');
        if($this->session->userdata('user_type') =='Astrologer'){
redirect('partner/');
}
    }

// Show login page

    public function index() {

        require_once 'astro-api/src/VedicRishiClient.php';
        
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
            'countryCode'  => 'IN',
            'city' => $Ipdata['city']
        );
        $this->session->set_userdata($array);
        } 
       
        
        $userId = "606049";
        $apiKey = "fe41fc85921b43dd75e4202569b41bb0";
        $vedicRishi = new VedicRishiClient($userId, $apiKey);
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d');
        $month = date('m');
        $year = date('Y');
        $hour = date('H');
        $minute = date('i');
        $latitude = $this->session->userdata('latitude');
        $longitude = $this->session->userdata('longitude');
        $timezone = 5.30;
        $city = $this->session->userdata('city') . ', ' . $this->session->userdata('country');
        $panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
        $data['panchang'] = json_decode($panchang, 1);

        $data['city'] = $city;

        $data['categories'] = $this->front->get('categories');
    
        $data['super_categories'] = $this->front->get('super_categories');

        $data['astrologer'] = $this->front->get('author');

        $data['title'] = "Best online astrologers, Free astrology prediction by date of birth - Onegodmed";
        $data['meta_tags'] = "Best astrologers in India, free online astrology predictions";
        $data['meta_keywords'] = "astrology, astrology horoscope, astrology chart, astrology reading,indian astrology, free astrology, live astrology, online astrology";
        $data['meta_description'] = "Online Astrology consultation - Onegodmed is leading astrology prediction platform. Get instant solutions of your problems and take informed decisions.";
        $data['meta_ogtitle'] = "Best online astrologers, Free astrology prediction by date of birth - Onegodmed";
        $data['meta_ogdescription'] = "Online Astrology consultation - Onegodmed is leading astrology prediction platform. Get instant solutions of your problems and take informed decisions.";
        $data['meta_ogkeywords'] = "astrology, astrology horoscope, astrology chart, astrology reading,indian astrology, free astrology, live astrology, online astrology,";
        $data['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        
        $this->load->view('front/header', $data);

        $this->load->view('front/index', $data);

        $this->load->view('front/footer', $data);
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

    public function life_issues() {

        $where = array('menu_id' => 1);

        $data['super_categories'] = $this->admin->get_details('super_categories', $where);

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/life_issues', $data);

        $this->load->view('front/footer', $data);
    }

    public function courses() {

        $where = array('menu_id' => 2);

        $data['super_categories'] = $this->admin->get_details('super_categories', $where);

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/courses', $data);

        $this->load->view('front/footer', $data);
    }

    public function solutions() {

        $where = array('menu_id' => 3);

        $data['super_categories'] = $this->admin->get_details('super_categories', $where);

        $data['astrologer'] = $this->front->get('author');

        $data['title'] = "Free Vedic Astrology, Accurate Life Prediction By Date Of Birth Free";
        $data['meta_tags'] = "free vedic astrology predictions life, accurate life prediction by date of birth free, free vedic astrology";
        $data['meta_keywords'] = "free vedic astrology predictions life, accurate life prediction by date of birth free, free vedic astrology";
        $data['meta_description'] = "Onegodmed is the best platform for consultation with the professional astrologers regarding free Vedic astrology predictions life. Call +91 9169-305-305 now.";
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/solutions', $data);

        $this->load->view('front/footer', $data);
    }

    public function pooja() {

        $where = array('menu_id' => 4);

        $data['super_categories'] = $this->admin->get_details('super_categories', $where);
        $data ['resultSet'] = $this->front->get_header_price_details();

        $data['astrologer'] = $this->front->get('author');

        $data['categories'] = $this->front->get('categories');
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/pooja', $data);

        $this->load->view('front/footer', $data);
    }

    public function kundali() {

        $where = array('menu_id' => 5);

        $data['super_categories'] = $this->admin->get_details('super_categories', $where);

        $data['astrologer'] = $this->front->get('author');

        $data['categories'] = $this->front->get('categories');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/kundali', $data);

        $this->load->view('front/footer', $data);
    }

    public function get_kundali($id = "") {
        $sub_cat = str_replace('-', ' ', $id);
        $where = array('categories.category' => $sub_cat);
        $data['menu_id'] = $this->front->get_menu_id($where);
        if ($id == "") {

            redirect('');
        }

        $where1 = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->admin->get_details('author', $where1);

        $where3 = array('category' => $sub_cat);

        $data['categories'] = $this->admin->get_details('categories', $where3);
        $data['title'] = $data['categories'][0]->title;
        $data['meta_tags'] = $data['categories'][0]->meta_tags;
        $data['meta_keywords'] = $data['categories'][0]->meta_keywords;
        $data['meta_description'] = $data['categories'][0]->meta_description;

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/buy_kundali', $data);

        $this->load->view('front/footer', $data);
    }

    public function kundali_information($id) {

        $where1 = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->admin->get_details('author', $where1);

        $where = array('slug_category' => $id);

        $data['categories'] = $this->admin->get_details('categories', $where);

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/kundali_information', $data);

        $this->load->view('front/footer', $data);
    }

    public function submit_kundali() {



//------------------------- get super category -------------------------



        $where2 = array('id' => $this->input->post('category_id'));

        $categories = $this->admin->get_details('categories', $where2);

        $super_cat_id = $categories[0]->super_cat_id;

//------------------------- booking no   -------------------------------



        $booking_no = 'one-g-' . date('dmyhis');



//---------------------------- order -----------------------------------



        if ($this->input->post('service_price')) {

            $remaining_balance = $this->input->post('wallet_balence') - $this->input->post('service_price');
            date_default_timezone_set('Asia/Kolkata');
            $data = array(
                'sevice_name' => $this->input->post('sevice_name'),
                'category_id' => $this->input->post('category_id'),
                'super_cat_id' => $super_cat_id,
                'booking_no' => $booking_no,
                'service_price' => $this->input->post('service_price'),
                'customer_id' => $this->session->userdata('id'),
                'current_balance' => $this->input->post('wallet_balence'),
                'coupon_code' => $this->input->post('coupon_code'),
                'coupon_discount' => $this->input->post('coupon_discount'),
                'payment_mode' => 'Wallet',
                'date' => date("Y-m-d H:i:s"),
                'is_Active' => 'Accept',
            );

            $answer = $this->admin->_insertRow('order_history', $data);

            $last_order_id = $this->db->insert_id();
        }

        $remaining_balance = $this->input->post('wallet_balence') - $this->input->post('service_price');

        if ($answer) {

            $data = array(
                'wallet_balence' => $remaining_balance,
            );

            $where = array('id' => $this->session->userdata('id'));

            $wallet = $this->admin->_updateRowWhere('author', $data, $where);
        }

        if ($wallet) {

            $data = array(
                'amount' => $this->input->post('service_price'),
                'payment_type' => "Debit",
                'customer_id' => $this->session->userdata('id'),
                'date' => date("Y-m-d"),
            );

            $answer = $this->admin->_insertRow('wallet_history', $data);

//--------------------------------- email code  -----------------------------------------------//
            $invoice = 'OGM/2019/VA-0000' . $last_order_id;

            $where_astrologer = array('id' => $super_cat_id);

            $service = $this->admin->get_details('super_categories', $where_astrologer);

            $service_name = $service[0]->super_category;
            $service_description = $service[0]->short_description;
            if ($this->input->post('service_type') == 'Horoscope') {
                $srvice_type = "Horoscope";
            } else {
                $srvice_type = "Online Pooja";
            }

            $this->admin->emailus($service_name, $service_description, $invoice, $this->input->post('package_price'), $this->input->post('gst_price'), $this->input->post('service_price'), $srvice_type, $this->input->post('coupon_discount'), $this->input->post('coupon_code'));






//---------------------------------end email code -----------------------------------------------// 
        }

        //--------------------------------- mobile api -----------------------------------------------//
        //----------------------------   get admin number    -------------------------------------//

        $where_admin = array('user_type' => 'admin');

        $admin = $this->admin->get_details('author', $where_admin);

//----------------------------end   get admin number    -------------------------------------//
//--------------------  sms  Api-----------------------------//
        $number1 = $this->session->userdata('mobile');
        $number2 = $admin[0]->mobile;
        $msg = "Dear " . $this->session->userdata('name') . " your Booking has been Received successfully. Your booking ID is " . $booking_no . ". Stay tuned, will be confirmed back your booking shortly.";
        $this->test_sms($msg, $number1, $number2);

        //---------------------------------end mobile api -----------------------------------------------//
        if ($this->input->post('service_type') == 'kundali') {
//-------------------------- insert kundali ---------------------
            // $data['service_id'] = $this->input->post('category_id'); 
            $where_city = array('id' => $this->input->post('birth_city'));

            $city1 = $this->admin->get_details('cities', $where_city);

            if ($city1) {
                $city = $city1[0]->name;
            } else {
                $city = "";
            }


            $where_states = array('id' => $this->input->post('birth_state'));

            $states1 = $this->admin->get_details('states', $where_states);

            if ($states1) {
                $states = $states1[0]->name;
            } else {
                $states = "";
            }

            $where_countries = array('id' => $this->input->post('birth_country'));

            $countries1 = $this->admin->get_details('countries', $where_countries);
            if ($countries1) {
                $countries = $countries1[0]->name;
            } else {
                $countries = "";
            }
            $data = array(
                'customer_id' => $this->session->userdata('id'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'mobile' => $this->input->post('mobile'),
                'current_location' => $this->input->post('current_location'),
                'birth_detail' => $this->input->post('birth_detail'),
                'birth_country' => $countries,
                'birth_state' => $states,
                'birth_city' => $city,
                'dob' => $this->input->post('dob'),
                'super_cat_id' => $super_cat_id,
                'booking_no' => $booking_no,
                'birth_time' => $this->input->post('birth_time'),
                'gender' => $this->input->post('gender'),
                'status' => "Pandding",
                'order_id' => $last_order_id,
                'date' => date('Y-m-d'),
                'service_id' => $this->input->post('category_id'),
                'service_name' => $this->input->post('sevice_name'),
                'service_price' => $this->input->post('service_price'),
            );

            $kundali = $this->admin->_insertRow('kundali', $data);
        }




        if ($answer) {

            $this->session->set_flashdata('success', 'Your Booking is successfully booked. You will get Booking Confirmation very soon. Thanks for your Booking..');
        } else {

            $this->session->set_flashdata('error', 'somthing want wrong');
        }
        redirect('');
    }

    public function articles() {

        $data['astrologer'] = $this->front->get('author');

        $data['blog'] = $this->front->get('blog');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['title'] = "Blog | Astrology";
        $data['meta_tags'] = "Blog | Astrology";
        $data['meta_keywords'] = "Blog | Astrology";
        $data['meta_description'] = "Blog | Astrolog";
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/artical', $data);

        $this->load->view('front/footer', $data);
    }

    public function specialist($id1 = "") {

        if ($id1 == "") {

            redirect('');
        }
        $cat_name = str_replace('-', ' ', $id1);
        $where_cat = array('super_category' => $cat_name);
        $cat = $this->admin->get_details('super_categories', $where_cat);

        $id = $cat[0]->id;

        if ($this->input->post('id')) {
            $country = $this->input->post('country');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $data['mamber'] = $this->front->get_astrologer_for_pooja($id, $country, $state, $city);
        } else {
            $data['mamber'] = $this->front->get_astrologer($id);
        }

        $data['astrologer'] = $this->front->get('author');

        $where = array('super_categories.id' => $id);

        $data['service'] = $this->front->get_menu_id($where);

        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/team', $data);

        $this->load->view('front/footer', $data);
    }

    public function faq() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/faq');

        $this->load->view('front/footer', $data);
    }

    public function horoscope() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/horoscope');

        $this->load->view('front/footer', $data);
    }

    public function singup() {
       date_default_timezone_set('Asia/Kolkata');
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $otp = $this->input->post('otp');
        $ctry_code = $this->input->post('ctry_code');
        $promodisc = $this->input->post('promodisc');
        $newMob = str_replace("+","",$ctry_code).$mobile;
        $where = array('mobile' => $mobile);
        $check = $this->front->get_details('author', $where);
        if ($check) {
            echo json_encode(array("status" => 0, "message" => "failed"));
        } else {
            $data = array(
                'mobile' => $mobile,
                'country_code' => $ctry_code, 
                'name' => $name,
                'email' => $email,
                'user_type' => 'User',
                'status' => "Online",
                'date' => date('Y-m-d H:i:s'),
                'image' => "no-image.png",
                'wallet_balence' => $promodisc
            );
            $authKey = "310447AzgZJhF4u7zr5e0758c9P1";
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
            $arr = json_decode($response, 1);
            if ($arr['type'] == "error") {
                echo json_encode(array("status" => 0, "message" => "Incorrect Otp"));
            } else {

                $answer = $this->admin->_insertRow('author', $data);
                if ($answer) {
                    $result = $this->admin->login($mobile, $ctry_code);
                    if ($result) {

                        $array = array(
                            'id' => $result[0]->id,
                            'username' => $result[0]->email,
                            'mobile' => $result[0]->mobile,
                            'name' => $result[0]->name,
                            'user_type' => $result[0]->user_type,
                            'image' => $result[0]->image,
                            'wallet_balence' => $result[0]->wallet_balence,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($array);
                    }
                    $number1 = $this->input->post('mobile');

                    $msg = "Dear " . $name . " , welcome to onegodmed ! your spiritual partner. You are successfully registered, please login and Talk to India's best Astrologers.";
                    $number2 = "9169305305";
                    $msg1 = "Dear Admin, New User successfully signed up. Customer Number " . $number1 . " and Customer Name " . $name . "";
                    $this->test_sms($msg, $number1);
                    $this->test_sms($msg1, $number2);
                    $this->session->set_flashdata('success', 'Register Successfully, Now talk to our best astrologer');

                    echo json_encode(array("status" => 1, "message" => "successfull"));
                } else {

                    echo json_encode(array("status" => 0, "message" => "Something went wrong. Please try again."));
                }
            }
        }
    }

    public function signup() {

        $mobile = $this->input->post('mobile');
        $ctry_code = $this->input->post('ctry_code');
        $where = array('mobile' => $mobile, 'country_code' => $ctry_code);

        $check = $this->front->get_details('author', $where);


        if ($check) {
            echo json_encode(array("status" => 0, "message" => "failed"));
        } else {

            echo json_encode(array("status" => 1, "message" => "successfull"));
        }
    }

    public function logout() {

        $this->session->unset_userdata('id');

        $this->session->sess_destroy();

        redirect(base_url());
    }

    public function member() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/member');

        $this->load->view('front/footer', $data);
    }

    public function astrologer($astro_slug = "") {
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
        if ($astro_slug == "") {
            redirect('');
        }
        if ($this->session->userdata('id')) {
            $exiest_rating = $this->admin->get('rating');
            if ($exiest_rating) {
                $data['is_rating'] = 1;
            } else {
                $data['is_rating'] = 0;
            }
        }
        $where = array('astro_slug' => $astro_slug);

            $data['mamber'] = $this->front->get_details('author', $where);
           

            if ($data['mamber']) {
                $id=$data['mamber'][0]->id;
            } else {

                redirect('');
            }
            
        $checkid = array('astro_slug' => $astro_slug, 'user_type!=' => 'Astrologer');

        $check = $this->front->get_details('author', $checkid);
        if ($check) {
            redirect('');
        } else {
            $data['rating1'] = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $id . "'")->result();
            $data['rating4'] = $this->db->query("SELECT SUM(rating) as rating FROM rating WHERE `user_id` ='" . $id . "'")->result();
            $data['rating2'] = $this->db->query("SELECT COUNT(rating) as rating FROM rating WHERE `user_id` ='" . $id . "'")->result();
            $data['rating3'] = $this->db->query("SELECT rating FROM rating WHERE `user_id` ='" . $id . "'")->result();
            $data['userId']  = $this->db->query("SELECT `user_id` FROM notifyme WHERE `astro_id` ='" . $id . "'")->result();
            $arrRatingVal = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);
            $countRating = 0;
            foreach ($data['rating3'] as $value) {
                if (@$arrRatingVal[$value->rating] > 0)
                    $arrRatingVal[$value->rating] = $arrRatingVal[$value->rating] + 1;
                else
                    $arrRatingVal[$value->rating] = 1;
                $countRating++;
            }
            foreach ($arrRatingVal as $key => $value) {
                @$perRating = round((($value / $countRating) * 100), 2);
                $arrRatingVal[$key . "_rat"] = $perRating;
            }
            $data['rating'] = round($data['rating1'][0]->rating);
            $data['avgrating'] = round($data['rating1'][0]->rating, 2);
            $data['totalrating'] = $data['rating2'][0]->rating;
            $data['totalstarrating'] = $data['rating4'][0]->rating;
            if(!empty($data['userId'])){
                $data['userId'] = $data['userId'][0]->user_id;
            }else{
                $data['userId'] = '';
            }
            $data['arrtotalrating'] = $arrRatingVal;


            $review1 = array('astrologer_id' => $id);
            $review2 = array('status' => 'Accept');
            $data["review"] = $this->front->checkall_review('Reviews', $review1, $review2);
            

            $array = array(
                'astrologer_session_id' => $id,
            );

            $this->session->set_userdata($array);
            $check_service = array('is_Active' => 'Accept');
           // $check_service2 = array('astrologer_id' => $id);

            $data["check_services"] = $this->front->check_service4('order_history', $check_service);
            $data['availability'] = $this->front->getweekly($id);
            $data['timeavailability'] =$this->front->gettime($id);
           

          $check = $this->front->checkweekly($id);
          //print_r($check); die;
          $data['check'] = $check;
          $data['timetable'] = $this->front->gettimetableweekly();

// $check_service1 = array('customer_id' => $this->session->userdata('id'));
// 
// $check_service3 = array('is_Active!='=>'Complete');
// $data["check_services"] = $this->front->check_service3('order_history', $check_service1,$check_service2,$check_service3);



            $where1 = array('id' => $this->session->userdata('id'));

            $data['wallet_balence'] = $this->front->get_details('author', $where1);

            $data['services'] = $this->front->get_servicesbyid($id);

            $data['astrologer'] = $this->front->get('author');
            $data['title'] = $data['mamber'][0]->name;
            $data ['resultSet'] = $this->front->get_header_price_details();
            $data['countrydata'] = $this->front->getcountry('Country_codes');
            $this->load->view('front/header', $data);

            $this->load->view('front/astrologer', $data);

            $this->load->view('front/footer', $data);
        }
    }
public function loadmore(){
        
    $lastid = $this->input->post('lastid');
    $astroid=$this->input->post('astroid');

    $result  = $this->front->getdataloadmore($lastid,$astroid);

$maxkey=max(array_keys($result));

$count=count($result);
$last_id = $result[$maxkey]->id;

$html='';
foreach ($result as $row) {
 
  $html.='<li>
                     <div class="ast_blog_comment">
                        <div class="ast_comment_image">
                           <p><button class="button profile_pic">'. strtoupper(substr($row->name, 0, 1)).'</button></p>
                        </div>
                        <div class="ast_comment_text">
                           <h5 class="ast_bloger_name">'. mb_substr($row->name,0,1,"UTF-8").' xxxx</h5>
                           <div class="star-rating">';

                              
                                 if ($row->rating > 0) {
                                    for ($i = 0; $i < 5; $i++) {
                                       if ($i < $row->rating) {
                                             $tmp_class = 'fa fa-star';
                                       } else {
                                             $tmp_class = 'fa fa-star-o';
                                       }
                                       
                              $html.='<span class=" '. $tmp_class.' " data-rating=" '. $i .'"></span>';
                               }
                                 } else {
                                    
                              $html.='<span class="fa fa-star-o" data-rating="1"></span>
                              <span class="fa fa-star-o" data-rating="2"></span>
                              <span class="fa fa-star-o" data-rating="3"></span>
                              <span class="fa fa-star-o" data-rating="4"></span>
                              <span class="fa fa-star-o" data-rating="5"></span>';
                               } 
                           $html.='</div>
                           <span class="ast_blog_date">'. date('M d, Y', strtotime($row->date)).'
                           </span>
                           <p class="ast_blog_post">'. $row->reviews.'</p>
                        </div>
                     </div>
                  </li>';  
}

$data = array('html'=>$html,'last_id'=>$last_id,'count'=>$count);
//json_encode($data);
echo json_encode($data);
    }

    public function follow(){
        $user_id = $this->input->post('user_id');
        $astro_id = $this->input->post('astro_id');
        $formArray['user_id'] = $user_id;
        $formArray['astro_id'] = $astro_id;
        $formArray['status']   = '1';
       $data =  $this->front->follow_exists($user_id,$astro_id);

if(($data==FALSE)) {

        $data = $this->front->insertfollow($formArray);

    } else {
        $this->front->deletefollow($user_id,$astro_id); 
    }
}

    public function add_member_code() {

        $email = $this->input->post('email');

        $where = array('email' => $email);

        $check = $this->front->get_details('author', $where);

        if ($check) {

            $this->session->set_flashdata('error', 'Email is already register');

            redirect('front/member');
        }

        $mobile = $this->input->post('mobile');

        $where1 = array('mobile' => $mobile);

        $check1 = $this->front->get_details('author', $where1);

        if ($check1) {

            $this->session->set_flashdata('error', 'Mobile Number is already register');

            redirect('front/member');
        }
        $delimiter = '-';
        $astro_slug = $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $this->input->post('name')))))), $delimiter));
        $whereName = array('name' => ucwords($this->input->post('name')), 'user_type' => 'Astrologer');

        $checkName = $this->front->get_details('author', $whereName);

        if ($checkName) {
            $totCount = count($checkName);
            $asrtoSlug = $astro_slug.'-'.$totCount;
        } else{
            $asrtoSlug = $astro_slug;
        }

        $config['upload_path'] = 'admin-assets/assets/images/users/';

        $config['allowed_types'] = 'jpg|png|jpeg';



        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {

            $images = ("csm_person-placeholder-male_5602d73d5e.png");
        } else {

            $data = $this->upload->data();

            $images = $data["file_name"];
        }
        $langknown = implode(', ', $_POST['langknown']);

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $email,
            'astro_slug' => $asrtoSlug,
            'mobile' => $this->input->post('mobile'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'description' => $this->input->post('about_us'),
            'experience' => $this->input->post('experience'),
            'expertise' => $this->input->post('mamber'),
            'user_type' => $this->input->post('expertise'),
            'langknown' => $langknown,
            'image' => $images,
            'status' => 'Inactive',
            'chat_status' => 'Inactive',
            'date' => date('Y-m-d H:i:s')
        );



        $recruitment = $this->front->_insertRow('author', $data);



        if ($recruitment) {
            $number1 = $this->input->post('mobile');
            $number2 = "9169305305";
            $msg = "Dear " . $this->input->post('name') . " Thank you so much for showing your interest in being an Expert with us. We have received your credentials and our team members will get connect with you shortly.";

            $this->test_sms($msg, $number1, $number2);

            $this->session->set_flashdata('success', 'Register Successfully');
        } else {
            
        }



        redirect('front/member');
    }

    public function add_to_cart($proid) {

        $where = array('id' => $proid);

        $product = $this->admin->get_details('super_categories', $where);

        $data = array(
            'id' => $product[0]->id,
            'qty' => 1,
            'price' => 100,
            'name' => $product[0]->super_category,
            'image' => $product[0]->image,
        );

        $this->cart->insert($data);

        redirect('front/cart');
    }

    public function notifyMe(){
        $data['astro_id'] = $this->input->post('astroId');
        $data['user_id'] = $this->input->post('userId');
        $valName = $this->input->post('valName');
        $check = $this->front->checkNotify($this->input->post('astroId'));
        
        $astroNum = $this->front->getUserData($this->input->post('astroId'));

       
        // print_r($check[0]->user_id);die;
        if($valName=='Notified'){
            $user_id = explode(',',$check[0]->user_id);
            if (($key = array_search($data['user_id'], $user_id)) !== false) {
                unset($user_id[$key]);
            }
            if(count($user_id)==0){
                $where = array('id' => $check[0]->id);
                $this->db->delete('notifyme', $where);
            }else{
                $data['user_id'] = implode(',',$user_id);
                $this->front->updateNotify($data);
            }
            echo 2;
        }else{
            if(!empty($check)){
                $data['user_id'] = $check[0]->user_id.','.$this->input->post('userId');
                $this->front->updateNotify($data);
            }else{
                $this->front->insertNotify($data);
            }
            echo 1;
        }
        
    }
    public function updateitemQty() {

        $update = 0;



        $rowid = $this->input->get('rowid');

        $qty = $this->input->get('qty');



        if (!empty($rowid) && !empty($qty)) {

            $data = array(
                'rowid' => $rowid,
                'qty' => $qty,
            );

            $update = $this->cart->update($data);
        }



        echo $update ? 'ok:' : 'err';
    }

    /* public function removeitem($rowid) { 

      $remove = $this->cart->remove($rowid)

      redirect('front/cart');

      } */

    public function cart() {

        $data = array();

        $data['cartitems'] = $this->cart->contents();

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/cart', $data);

        $this->load->view('front/footer', $data);
    }

    public function checkout() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/checkout');

        $this->load->view('front/footer', $data);
    }

    public function service($id1 = '') {

        if ($id1 == '') {

            redirect('');
        }

        $id = str_replace('-', ' ', $id1);

        $where = array('super_category' => $id);
        $data['super_category'] = $this->admin->get_details('super_categories', $where);
        $data['title'] = $data['super_category'][0]->title;
        $data['meta_tags'] = $data['super_category'][0]->meta_tags;
        $data['meta_keywords'] = $data['super_category'][0]->meta_keywords;
        $data['meta_description'] = $data['super_category'][0]->meta_description;
        if ($data['super_category']) {

            // $data['super_category'] = $this->admin->get('super_categories');

            $data['astrologer'] = $this->front->get_astrologer($id);
            $data ['resultSet'] = $this->front->get_header_price_details();
            $data['countrydata'] = $this->front->getcountry('Country_codes');
            $this->load->view('front/header', $data);

            $this->load->view('front/service');

            $this->load->view('front/footer', $data);
        } else {

            redirect('');
        }
    }

    public function wallet($id = "") {
        if ($this->session->userdata('id') == '') {

            redirect('');
        }

        if (isset($_SERVER["HTTP_REFERER"])) {

            $array = array(
                'back_url' => $_SERVER["HTTP_REFERER"],
            );
        } else {

            $array = array(
                'back_url' => base_url(''),
            );
        }

        $this->session->set_userdata($array);

        if ($this->input->post('amount')) {

            $data['amount'] = $this->input->post('amount');
        } else {

            $data['amount'] = "";
        }

        $where = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->admin->get_details('author', $where);

        $data['package'] = $this->admin->getPack('package');

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);
        if ($this->session->userdata('countryCode') == 'IN') {
            $this->load->view('front/wallet', $data);
        } else {
            $this->load->view('front/walletusd', $data);
        }
        $this->load->view('front/footer', $data);
    }

    public function book_call() {

        if (isset($_SERVER["HTTP_REFERER"])) {
            $back_url = $_SERVER["HTTP_REFERER"];
        } else {
            $back_url = base_url('');
        }
        date_default_timezone_set('Asia/Kolkata');
        if($this->input->post('call_type') == "Chat"){
            $booking_no = "";
        } else{
            $booking_no = 'OGM' . date('dmyhis');
        }
        $callTotTime = $this->input->post('call_duration') - 1;
        $book_date = date('Y-m-d H:i:s');
        $datetime = date("Y-m-d H:i:s");
        $timestamp = strtotime($datetime);
        $time = $timestamp - 30;
        $datetime = date("Y-m-d H:i:s", $time);
        $whereOrder = array('customer_id' => $this->session->userdata('id'), 'astrologer_id' => $this->input->post('astrologer_id'), 'date >=' => $datetime, 'date <=' => date('Y-m-d H:i:s'));
        $orderData = $this->admin->get_details('order_history', $whereOrder);
        if(count($orderData) > 0){
             echo json_encode(array("status" => 0, "message" => "failed"));
        }else{
             if($this->input->post('call_type') == "" || $callTotTime == "-1"){
           redirect('talk-to-astrologers/');
        }else{
          $data = array(
            'sevice_name' => 'Vedic Astrology',
            'call_duration' => $this->input->post('call_duration') - 1,
            'astrologer_id' => $this->input->post('astrologer_id'),
            'super_cat_id' => '76',
            'service_price' => $this->input->post('call_price'),
            'vendor_price' => $this->input->post('vendor_price'),
            'customer_id' => $this->session->userdata('id'),
            'call_type' => $this->input->post('call_type'),
            'payment_mode' => 'Wallet',
            'booking_no' => $booking_no,
            'is_Active' => "Running",
            'date' => $book_date,
            'callRequestId' => 0,
            'bookStatus' => '0',
            'actual_price' => $this->input->post('actualprice'),
            'callNation' => $this->input->post('callNation')
        );

        $answer = $this->admin->_insertRow('order_history', $data);

        $order_id = $this->db->insert_id();
$callerID = "";
        if ($answer) {
            if($this->input->post('call_type') == "Audio"){
            if($this->input->post('callNation') == 'Domestic'){
           $cust_num = $this->input->post('custNum');
 $call_time = $this->input->post('call_time');
 $astro_num = $this->input->post('username');

     $data='{

  "sourcetype": "0",

  "customivr": true,

  "credittype": "2",

  "filetype": "2",

"ukey": "1BDG5zrFc3og0wDWT89AFBlPB", 

"serviceno": "4474225",

  "ivrtemplateid": "485",

  "agentretryatmpt": 0,

  "retryduration": 5,

  "custretryatmpt": 0,

  "custcli": "4474225",

  "isrefno": true,

  "maxtalktime":'.$call_time.',

  "msisdnlist": [

    {

      "phoneno": '.$cust_num.',

      "agentno": '.$astro_num.'

 

    }

  ]

}';
    $url = 'http://125.16.147.180/C2CAPI/webresources/Click2CallPost';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $arrdata = json_decode($result,1);
    if($arrdata['refno'][0][$cust_num] != ""){
    $data2 = array(
                'callRequestId' => $arrdata['refno'][0][$cust_num],
                 'is_Active' => "Accept",
                 'callCount' => "1"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
            $callerID = $arrdata['refno'][0][$cust_num];
        } else if($this->input->post('callNation') == 'International'){
              $astro_num = $this->input->post('custNum');
 $call_time = $this->input->post('call_time');
 $agent_otp = $this->input->post('agent_otp');

    $data='key='.$agent_otp.'&number='.$astro_num.'&mapping-expiry-time=80&max-call-duration='.$call_time;
    
    $url = 'https://telephonycloud.co.in/api/v1/mask';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "9999328224:admin");
    $result = curl_exec($ch);
    curl_close($ch);
    if($result == "OK"){
    $data2 = array(
                'callRequestId' => $agent_otp
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'callRequestId' => $agent_otp,
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
    
    $callerID = $agent_otp;
        }$where_admin = array('user_type' => 'admin');

            $admin = $this->admin->get_details('author', $where_admin);
            $where_astro = array('user_type' => 'Astrologer', 'id' => $this->input->post('astrologer_id'));
            $astro = $this->admin->get_details('author', $where_astro);

            $number1 = $this->session->userdata('mobile');

            $number2 = $astro[0]->mobile;

            $number3 = $admin[0]->mobile;

            $msg = "Dear " . $this->session->userdata('name') . ", You receive an instant call on your registered Mobile Number.";
            $msg1 = "Dear " . $astro[0]->name . ", You have received a booking from Onegodmed. Customer call type is  " . $this->input->post('call_type') . " call.";
            $msg2 = "Dear Admin, " . $this->session->userdata('name') . " book a call with " . $astro[0]->name . " for " . $this->input->post('call_type') . " call";
            $chatmsg = 'call';
            }elseif($this->input->post('call_type') == "Chat"){
                $chatmsg = "Name: ".$this->input->post('chat_cust_name')." Gender: ".$this->input->post('chat_cust_gender')." DOB: ".$this->input->post('chat_cust_dob')." Birth Place: ".$this->input->post('chat_cust_place')." Birth Time: ".$this->input->post('chat_cust_time');
                $arData = array(
                    'from' => $this->input->post('astrologer_id'),
                    'to' => $this->session->userdata('id'),
                    'message' => $chatmsg,
                    'time' => date('H:i:s'),
                    'sender_read' => 'Yes',
                    'receiver_read' => 'No',
                    'order_id' => $order_id
                    );
                    
                $chatans = $this->admin->_insertRow('tbl_chat', $arData);
                $chatans_id = $this->db->insert_id();
                
                $callerID= base64_encode($order_id);
                $where_admin = array('user_type' => 'admin');

            $admin = $this->admin->get_details('author', $where_admin);
            $where_astro = array('user_type' => 'Astrologer', 'id' => $this->input->post('astrologer_id'));
            $astro = $this->admin->get_details('author', $where_astro);

            $number1 = $this->session->userdata('mobile');

            $number2 = $astro[0]->mobile;

            $number3 = $admin[0]->mobile;
            $encrypt_order_id = base64_encode($this->input->post('astrologer_id'));
            $msg = "Dear " . $this->session->userdata('name') . ", You received an instant message on chat box.";
            $msg1 = "Dear " . $astro[0]->name . ", Here is the New Chat booking link ".base_url()."partner-chat/".$encrypt_order_id. '/'." link to open chat box. Total Mins ".$this->input->post('call_duration');
            $msg2 = "Dear Admin, " . $this->session->userdata('name') . " book a chat with " . $astro[0]->name . " for " . $this->input->post('call_type') . ".";

            }
            $this->test_sms($msg, $number1);
            $this->test_sms($msg1, $number2);
            $this->test_sms($msg2, $number3);
            
            echo json_encode(array("status" => 1, "message" => "successfull", "chatmsg" => $chatmsg, "callId" => $callerID));
        } else {

            echo json_encode(array("status" => 0, "message" => "failed"));
        }  
        }   
        }
        
        
    }
    public function deque(){
        $order_id = $this->input->post('orderId');
        $astro = $this->db->select('astrologer_id')->from('order_history')->where('id',$order_id)->get()->row();
        // print_r($order_id);die;
        $astrologer_id = $astro->astrologer_id;
        $data['is_Active'] = 'DeQueue';
        $this->db->where('id',$order_id)->update('order_history',$data);
        $getQueueData = $this->admin->getQueueData($astrologer_id);
            $updatedQueueVal = $getQueueData[0]->queue - 1;
            $qdataArr = array(
                'queue' => $updatedQueueVal
            );

            if($qdataArr['queue']>=1){
                $updateQueue = $this->admin->updateQueueData($qdataArr, $astrologer_id);
            }else{
                $deleteQueue = $this->admin->deleteQueue($astrologer_id);
            }
            echo 1;
    }
    // book call in queue

    public function book_call_in_queue() {

        if (isset($_SERVER["HTTP_REFERER"])) {
            $back_url = $_SERVER["HTTP_REFERER"];
        } else {
            $back_url = base_url('');
        }
        date_default_timezone_set('Asia/Kolkata');
        if($this->input->post('call_type') == "Chat"){
            $booking_no = "";
        } else{
            $booking_no = 'OGM' . date('dmyhis');
        }
        $data['astro_id'] = $this->input->post('astrologer_id');
        $data['user_id'] = $this->session->userdata('id');
        $checkAgain = $this->front->checkQueue($this->input->post('astrologer_id'));
        if(!empty($checkAgain)){
            if($checkAgain->queue == 2){
            }else{
                $data['queue'] = 2;
                $data['user_id'] = $checkAgain->user_id.','.$this->session->userdata('id');
                $updateQueue =  $this->front->updateQueue($this->input->post('astrologer_id'), $data);
            }
        }else{
            $data['queue'] = 1;
            $insertQueue =  $this->front->insertQueue($data);
        }
        $callTotTime = $this->input->post('call_duration') - 1;
        $book_date = date('Y-m-d H:i:s');
        $datetime = date("Y-m-d H:i:s");
        $timestamp = strtotime($datetime);
        $time = $timestamp - 30;
        $datetime = date("Y-m-d H:i:s", $time);
        $whereOrder = array('customer_id' => $this->session->userdata('id'), 'astrologer_id' => $this->input->post('astrologer_id'), 'date >=' => $datetime, 'date <=' => date('Y-m-d H:i:s'));
        $orderData = $this->admin->get_details('order_history', $whereOrder);
        if(count($orderData) > 0){
             echo json_encode(array("status" => 0, "message" => "failsssed"));
        }else{
             if($this->input->post('call_type') == "" || $callTotTime == "-1"){
           redirect('talk-to-astrologers/');
        }else{
          $data = array(
            'sevice_name' => 'Vedic Astrology',
            'call_duration' => $this->input->post('call_duration') - 1,
            'astrologer_id' => $this->input->post('astrologer_id'),
            'super_cat_id' => '76',
            'service_price' => $this->input->post('call_price'),
            'vendor_price' => $this->input->post('vendor_price'),
            'customer_id' => $this->session->userdata('id'),
            'call_type' => $this->input->post('call_type'),
            'payment_mode' => 'Wallet',
            'booking_no' => $booking_no,
            'is_Active' => "InQueue",
            'date' => $book_date,
            'callRequestId' => 0,
            'bookStatus' => '0',
            'actual_price' => $this->input->post('actualprice'),
            'callNation' => $this->input->post('callNation')
        );

        $answer = $this->admin->_insertRow('order_history', $data);

        $order_id = $this->db->insert_id();
$callerID = "";
        if ($answer) {
            if($this->input->post('call_type') == "Audio"){
            if($this->input->post('callNation') == 'Domestic'){
           $cust_num = $this->input->post('custNum');
 $call_time = $this->input->post('call_time');
 $astro_num = $this->input->post('username');

     $data='{

  "sourcetype": "0",

  "customivr": true,

  "credittype": "2",

  "filetype": "2",

"ukey": "1BDG5zrFc3og0wDWT89AFBlPB", 

"serviceno": "4474225",

  "ivrtemplateid": "485",

  "agentretryatmpt": 0,

  "retryduration": 5,

  "custretryatmpt": 0,

  "custcli": "4474225",

  "isrefno": true,

  "maxtalktime":'.$call_time.',

  "msisdnlist": [

    {

      "phoneno": '.$cust_num.',

      "agentno": '.$astro_num.'

 

    }

  ]

}';
    // $url = 'http://125.16.147.180/C2CAPI/webresources/Click2CallPost';
    // $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $result = curl_exec($ch);
    // curl_close($ch);
    // $arrdata = json_decode($result,1);
    // if($arrdata['refno'][0][$cust_num] != ""){
    // $data2 = array(
    //             'callRequestId' => $arrdata['refno'][0][$cust_num],
    //              'is_Active' => "Accept",
    //              'callCount' => "1"
    //         );

    //         $where = array('id' => $order_id);

    //         $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    // } else{
    //     $data2 = array(
    //             'responseCall' => $result,
    //             'is_Active' => "Cancel"
    //         );

    //         $where = array('id' => $order_id);

    //         $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    // }
            // $callerID = $arrdata['refno'][0][$cust_num];
        } else if($this->input->post('callNation') == 'International'){
              $astro_num = $this->input->post('custNum');
 $call_time = $this->input->post('call_time');
 $agent_otp = $this->input->post('agent_otp');

    $data='key='.$agent_otp.'&number='.$astro_num.'&mapping-expiry-time=80&max-call-duration='.$call_time;
    
    $url = 'https://telephonycloud.co.in/api/v1/mask';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "9999328224:admin");
    $result = curl_exec($ch);
    curl_close($ch);
    if($result == "OK"){
    $data2 = array(
                'callRequestId' => $agent_otp
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'callRequestId' => $agent_otp,
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
    
    $callerID = $agent_otp;
        }$where_admin = array('user_type' => 'admin');

            $admin = $this->admin->get_details('author', $where_admin);
            $where_astro = array('user_type' => 'Astrologer', 'id' => $this->input->post('astrologer_id'));
            $astro = $this->admin->get_details('author', $where_astro);

            $number1 = $this->session->userdata('mobile');

            $number2 = $astro[0]->mobile;

            $number3 = $admin[0]->mobile;

            $msg = "Dear " . $this->session->userdata('name') . ", You receive an instant call on your registered Mobile Number.";
            $msg1 = "Dear " . $astro[0]->name . ", You have received a booking from Onegodmed. Customer call type is  " . $this->input->post('call_type') . " call.";
            $msg2 = "Dear Admin, " . $this->session->userdata('name') . " book a call with " . $astro[0]->name . " for " . $this->input->post('call_type') . " call";

            }elseif($this->input->post('call_type') == "Chat"){
                $chatmsg = "Name: ".$this->input->post('chat_cust_name')."<br>Gender: ".$this->input->post('chat_cust_gender')."<br>DOB: ".$this->input->post('chat_cust_dob')."<br>Birth Place: ".$this->input->post('chat_cust_place')."<br>Birth Time: ".$this->input->post('chat_cust_time');
                $arData = array(
                    'from' => $this->input->post('astrologer_id'),
                    'to' => $this->session->userdata('id'),
                    'message' => $chatmsg,
                    'time' => date('H:i:s'),
                    'sender_read' => 'Yes',
                    'receiver_read' => 'No',
                    'order_id' => $order_id
                    );
                    
                $chatans = $this->admin->_insertRow('tbl_chat', $arData);
                $chatans_id = $this->db->insert_id();
                
                $callerID= base64_encode($order_id);
                $where_admin = array('user_type' => 'admin');

            $admin = $this->admin->get_details('author', $where_admin);
            $where_astro = array('user_type' => 'Astrologer', 'id' => $this->input->post('astrologer_id'));
            $astro = $this->admin->get_details('author', $where_astro);

            $number1 = $this->session->userdata('mobile');

            $number2 = $astro[0]->mobile;

            $number3 = $admin[0]->mobile;
            $encrypt_order_id = base64_encode($this->input->post('astrologer_id'));
            $msg = "Dear " . $this->session->userdata('name') . ", You received an instant message on chat box.";
            $msg1 = "Dear " . $astro[0]->name . ", Here is the New Chat booking link ".base_url()."partner-chat/".$encrypt_order_id. '/'." link to open chat box. Total Mins ".$this->input->post('call_duration');
            $msg2 = "Dear Admin, " . $this->session->userdata('name') . " book a chat with " . $astro[0]->name . " for " . $this->input->post('call_type') . ".";

            }
            $this->test_sms($msg, $number1);
            $this->test_sms($msg1, $number2);
            $this->test_sms($msg2, $number3);

            echo json_encode(array("status" => 1, "message" => "successfull", "callId" => $callerID,"order_id" => $order_id));
        } else {

            echo json_encode(array("status" => 0, "message" => "failed"));
        }  
        }   
        }
        
        
    }


    public function startcall($astro_id = NULL) {
        if ($astro_id == NULL) {
            $astro = $this->input->post('astrologer_id');
        } else {
            $astro = $astro_id;
        }
        $check_service1 = array('customer_id' => $this->session->userdata('id'));

        $check_service2 = array('astrologer_id' => $astro);

        $check_service3 = array('is_Active!=' => 'Complete');

        $res["check_services"] = $this->front->check_service3('order_history', $check_service1, $check_service2, $check_service3);

        $where = array('id' => $this->input->post('astrologer_id'));

        $res['member'] = $this->front->get_details('author', $where);

        $res['astrologer'] = $this->front->get('author');

        $res['package'] = $this->front->get('package');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/startcall', $res);

        $this->load->view('front/footer', $res);
    }

    public function package() {

        $data['astrologer'] = $this->front->get('author');

        $data['package'] = $this->front->get('package');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/package', $data);

        $this->load->view('front/footer', $data);
    }

    // public function pay() {
    //     date_default_timezone_set('Asia/Kolkata');
    //     $amount = $this->input->post('pack_amt');
    //     $gst = $this->input->post('pack_gst');
    //     $wogamount = round($amount - $gst);
    //     $amt_bfr_dsc = $this->input->post('pack_amt_dsc');
    //     $disc_price = $this->input->post('pack_disc');
    //     $amt_after_dsc = $this->input->post('pack_after_disc');
    //     $coupon_code = $this->input->post('pack_coupon');
    //     $coupon_disc= $this->input->post('pack_coupon_disc');
    //     $product_info = $this->input->post('pack_name');
    //     $customer_name = $this->input->post('cust_name');
    //     $customer_emial = $this->input->post('cust_email');
    //     $customer_mobile = $this->input->post('cust_mobile');
    //     $customer_id = $this->input->post('cust_id');
    //     $customer_address = '';
    //     //payumoney details
    //     $MERCHANT_KEY = "gWX8Dxj9"; //change  merchant with yours
    //     $SALT = "HDSFHVQUOv";  //change salt with yours 
    //     $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    //     //optional udf values 
    //     $udf1 = '';
    //     $udf2 = '';
    //     $udf3 = '';
    //     $udf4 = '';
    //     $udf5 = '';
    //     $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
    //     $hash = strtolower(hash('sha512', $hashstring));
    //     $success = base_url() . 'status';
    //     $fail = base_url() . 'status';
    //     $cancel = base_url() . 'status';
    //     $data1 = array(
    //         'txn_id' => $txnid,
    //         'customer_id' => $this->session->userdata('id'),
    //         'amount' => $amount,
    //         'amt_bfr_dsc' => $amt_bfr_dsc,
    //         'payment_status' => "Pending",
    //         'date' => date('Y-m-d H:i:s'),
    //         'disc_price' => $disc_price,
    //         'gst' => $gst,
    //         'coupon_code' => $coupon_code,
    //         'coupon_disc' => $coupon_disc,
    //         'amt_after_dsc' => $amt_after_dsc,
    //         'pack_name' => $product_info
    //     );
    //     $payment = $this->admin->_insertRow('payment', $data1);
    //     $data = array(
    //         'mkey' => $MERCHANT_KEY,
    //         'tid' => $txnid,
    //         'hash' => $hash,
    //         'wogamount' => $wogamount,
    //         'gst' => $gst,
    //         'amount' => $amount,
    //         'name' => $customer_name,
    //         'productinfo' => $product_info,
    //         'mailid' => $customer_emial,
    //         'phoneno' => $customer_mobile,
    //         'address' => $customer_address,
    //         'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
    //         'sucess' => $success,
    //         'failure' => $fail,
    //         'cancel' => $cancel
    //     );
    //     echo json_encode(array("status" => 1, "message" => $data));
    // }

    //   public function pay() {
    //     date_default_timezone_set('Asia/Kolkata');
    //     $amount = $this->input->post('pack_amt');
    //     $amount = substr($amount, 0, -2);
    //     $gst = $this->input->post('pack_gst');
    //     $wogamount = round($amount - $gst);
    //     $amt_bfr_dsc = $this->input->post('pack_amt_dsc');
    //     $disc_price = $this->input->post('pack_disc');
    //     $amt_after_dsc = $this->input->post('pack_after_disc');
    //     $coupon_code = $this->input->post('pack_coupon');
    //     $coupon_disc= $this->input->post('pack_coupon_disc');
    //     $product_info = $this->input->post('pack_name');
    //     $customer_name = $this->input->post('cust_name');
    //     $customer_emial = $this->input->post('cust_email');
    //     $customer_mobile = $this->input->post('cust_mobile');
    //     $customer_id = $this->input->post('cust_id');
    //     $customer_address = '';
    //     $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    //     $success = base_url() . 'status';
    //     $fail = base_url() . 'status';
    //     $cancel = base_url() . 'status';
    //     $data1 = array(
    //         'txn_id' => $txnid,
    //         'customer_id' => $this->session->userdata('id'),
    //         'amount' => $amount,
    //         'amt_bfr_dsc' => $amt_bfr_dsc,
    //         'payment_status' => "Pending",
    //         'date' => date('Y-m-d H:i:s'),
    //         'disc_price' => $disc_price,
    //         'gst' => $gst,
    //         'coupon_code' => $coupon_code,
    //         'coupon_disc' => $coupon_disc,
    //         'amt_after_dsc' => $amt_after_dsc,
    //         'pack_name' => $product_info,
    //         'nation' => "Domestic"
    //     );
    //     $payment = $this->admin->_insertRow('payment', $data1);
    //     $data = array(
    //         'ORDER_ID' => $txnid,
    //         'CUST_ID' => $customer_id,
    //         'INDUSTRY_TYPE_ID' => "RETIAL",
    //         'CHANNEL_ID' => "WEB",
    //         'TXN_AMOUNT' => $amount,
    //         'CALLBACK_URL' => $success,
    //         'MSISDN' => $customer_mobile,
    //         'EMAIL' => $customer_emial,
    //         'VERIFIED_BY' => "MSISDN",
    //         'IS_USER_VERIFIED' => "YES"
    //     );
    //     echo json_encode(array("status" => 1, "message" => $data));
    // }

  public function pay() {
        date_default_timezone_set('Asia/Kolkata');
        $amount = $this->input->post('pack_amt');
        $gst = $this->input->post('pack_gst');
        $wogamount = round($amount - $gst);
        $amt_bfr_dsc = $this->input->post('pack_amt_dsc');
        $disc_price = $this->input->post('pack_disc');
        $amt_after_dsc = $this->input->post('pack_after_disc');
        $coupon_code = $this->input->post('pack_coupon');
        $coupon_disc= $this->input->post('pack_coupon_disc');
        $product_info = $this->input->post('pack_name');
        $customer_name = $this->input->post('cust_name');
        $customer_emial = $this->input->post('cust_email');
        $customer_mobile = $this->input->post('cust_mobile');
        $customer_id = $this->input->post('cust_id');
        $customer_address = '';
        //payumoney details
        $MERCHANT_KEY = "gWX8Dxj9"; //change  merchant with yours
        $SALT = "HDSFHVQUOv";  //change salt with yours 
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';
        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
        $hash = strtolower(hash('sha512', $hashstring));
        $success = base_url() . 'status';
        $fail = base_url() . 'status';
        $cancel = base_url() . 'status';
        $data1 = array(
            'txn_id' => $txnid,
            'customer_id' => $this->session->userdata('id'),
            'amount' => $amount,
            'amt_bfr_dsc' => $amt_bfr_dsc,
            'payment_status' => "Pending",
            'date' => date('Y-m-d H:i:s'),
            'disc_price' => $disc_price,
            'gst' => $gst,
            'coupon_code' => $coupon_code,
            'coupon_disc' => $coupon_disc,
            'amt_after_dsc' => $amt_after_dsc,
            'pack_name' => $product_info,
            'nation' => "Domestic"
        );
        $payment = $this->admin->_insertRow('payment', $data1);
        $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'wogamount' => $wogamount,
            'gst' => $gst,
            'amount' => $amount,
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel
        );
        echo json_encode(array("status" => 1, "message" => $data));
    }
    function paypal() {
        date_default_timezone_set('Asia/Kolkata');
        $amount = $this->input->post('pack_amt');
        $gst = $this->input->post('pack_gst');
        $amt_bfr_dsc = $this->input->post('pack_amt_dsc');
        $disc_price = $this->input->post('pack_disc');
        $amt_after_dsc = $this->input->post('pack_after_disc');
        $coupon_code = $this->input->post('pack_coupon');
        $coupon_disc= $this->input->post('pack_coupon_disc');
        $product_info = $this->input->post('pack_name');
        $customer_name = $this->input->post('cust_name');
        $customer_emial = $this->input->post('cust_email');
        $customer_mobile = $this->input->post('cust_mobile');
        $customer_id = $this->input->post('cust_id');
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        $success = base_url() . 'status';
        $fail = base_url() . 'status';
        $cancel = base_url() . 'status';
        $where = array('nation' => "International");
        $data['invoice'] = $this->front->invoice($where);
        $data1 = array(
            'txn_id' => $txnid,
            'customer_id' => $this->session->userdata('id'),
            'amount' => $amount,
            'amt_bfr_dsc' => $amt_bfr_dsc,
            'payment_status' => "Pending",
            'date' => date('Y-m-d H:i:s'),
            'disc_price' => $disc_price,
            'gst' => $gst,
            'coupon_code' => $coupon_code,
            'coupon_disc' => $coupon_disc,
            'amt_after_dsc' => $amt_after_dsc,
            'pack_name' => $product_info,
            'inv_no'    => $data['invoice'][0]->inv_no + 1,
            'nation' => "International"
        );
        $payment = $this->admin->_insertRow('payment', $data1);
        $data = array(
            'tid' => $txnid,
            'amount' => $amount,
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'action' => "https://www.paypal.com/cgi-bin/webscr", 
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel
        );
        echo json_encode(array("status" => 1, "message" => $data));
    }

    public function blog1($id) {

        $where = array('slug_url' => $id);
        $data['blog'] = $this->admin->get_details('blog', $where);
        $data['title'] = $data['blog'][0]->title;
        $data['meta_tags'] = $data['blog'][0]->meta_tag;
        $data['meta_keywords'] = $data['blog'][0]->meta_keyword;
        $data['meta_description'] = $data['blog'][0]->meta_description;
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/blog', $data);

        $this->load->view('front/footer');
    }

    public function blog2() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/blog2');

        $this->load->view('front/footer', $data);
    }

    public function blog3() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/blog3');

        $this->load->view('front/footer', $data);
    }

    public function blog4() {

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/blog4');

        $this->load->view('front/footer');
    }

    public function pay_with_bank() {

        if (isset($_SERVER["HTTP_REFERER"])) {



            $back_url = $_SERVER["HTTP_REFERER"];
        } else {



            $back_url = base_url('');
        }

        $booking_no = 'OGM' . date('dmyhis');

        $array = array(
            'pay_session_sevice_name' => $this->input->post('service_name'),
            'pay_session_call_duration' => $this->input->post('call_duration') . '' . $this->input->post('price_unit'),
            'pay_session_astrologer_id' => $this->input->post('astrologer_id'),
            'pay_session_super_cat_id' => $this->input->post('super_cat_id'),
            'pay_session_category_id' => $this->input->post('cat_id'),
            'pay_session_service_price' => $this->input->post('call_price'),
            'pay_session_vendor_price' => $this->input->post('vendor_price'),
            'pay_session_call_type' => $this->input->post('call_type'),
            'pay_session_booking_no' => $booking_no,
            'pay_session_wallet_balence' => $this->input->post('wallet_balence'),
            'pay_session_back_url' => $back_url
        );





        $this->session->set_userdata($array);



        $amount = $this->input->post('call_price');

        $product_info = '';

        $customer_name = $this->session->userdata('name');

        $customer_emial = $this->session->userdata('username');

        $customer_mobile = $this->session->userdata('mobile');

        $customer_address = '';

        $customer_id = $this->session->userdata('customer_id');

        $astrologer_id = $this->input->post('astrologer_id');



        //payumoney details





        $MERCHANT_KEY = "gWX8Dxj9"; //change  merchant with yours

        $SALT = "HDSFHVQUOv";  //change salt with yours 



        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

        //optional udf values 

        $udf1 = '';

        $udf2 = '';

        $udf3 = '';

        $udf4 = '';

        $udf5 = '';



        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;

        $hash = strtolower(hash('sha512', $hashstring));



        $success = base_url() . 'Status/pay_with_bank';

        $fail = base_url() . 'Status/pay_with_bank';

        $cancel = base_url() . 'Status/pay_with_bank';





        $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel
        );


        $data['categories'] = $this->front->get('categories');

        $data['super_categories'] = $this->front->get('super_categories');

        $data['astrologer'] = $this->front->get('author');
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('pay_u/confirmation', $data);

        $this->load->view('front/footer', $data);
    }

    public function test_sms($msg = '', $number1 = '', $number2 = '', $number3 = '') {

        if ($number2 == '') {
            $phone = $number1;
        } elseif ($number3 == '' AND $number2 != '') {
           $phone = $number1 . ',' . $number2;
        } else {
            $phone = $number1 . ',' . $number2. ',' . $number3;
        }
        $authKey = "310447AzgZJhF4u7zr5e0758c9P1";
        $msg = urlencode($msg);
        /* init the resource */
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.msg91.com/api/v2/sendsms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{ \"sender\": \"GODMED\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"$msg\", \"to\": [ \"$phone\"] } ] }",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => array(
                "authkey: $authKey",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function ajax_get_state() {
        $where = array('country_id' => $this->input->post('country_id'));
        $state = $this->admin->get_details('states', $where);
        if ($state) {
            echo json_encode(array("status" => 1, "message" => "successfull", "state" => $state));
        } else {
            echo json_encode(array("status" => 0, "message" => "failed"));
        }
    }

    public function ajax_get_city() {
        $where = array('state_id' => $this->input->post('state_id'));
        $city = $this->admin->get_details('cities', $where);
        if ($city) {
            echo json_encode(array("status" => 1, "message" => "successfull", "city" => $city));
        } else {
            echo json_encode(array("status" => 0, "message" => "failed"));
        }
    }

    public function ajax_otp() {
        $mobile = $this->input->post('mobile');
        $ctry_code = $this->input->post('ctry_code');
        $newMob = str_replace("+","",$ctry_code).$mobile;
        $senderId = "GODMED";
        $rndno = rand(100000, 999999);
        $message = urlencode("Dear Customer, your Required OTP to Signup with us is $rndno.");
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
        echo json_encode(array("status" => 1, "message" => "successfull"));
    }

    public function ajaxlogin_otp() {
        $mobile = $this->input->post('mobile');
        $ctry_code = $this->input->post('ctry_code');
        $newMob = str_replace("+","",$ctry_code).$mobile;
        $senderId = "GODMED";
        $rndno = rand(1000, 9999);
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
        echo json_encode(array("status" => 1, "message" => "successfull", "rndno" => $rndno));
    }

    public function ajax_resend_otp() {
        $mobile = $this->input->post('mobile');
        $ctry_code = $this->input->post('ctry_code');
        $newMob = str_replace("+","",$ctry_code).$mobile;
        $senderId = "GODMED";
        $authKey = "310447AzgZJhF4u7zr5e0758c9P1";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://control.msg91.com/api/retryotp.php?authkey=$authKey&mobile=$newMob&retrytype=text",
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
        echo json_encode(array("status" => 1, "message" => "successfull"));
    }

    public function reset_password() {
        $where = array('mobile' => $this->input->post('mobile'));
        $check_number = $this->admin->get_details('author', $where);
        if ($check_number) {
            $otp_password = date('his');
            $data = array(
                'password' => $otp_password,
            );

            $where = array('mobile' => $this->input->post('mobile'));

            $wallet = $this->admin->_updateRowWhere('author', $data, $where);
            $mobile = $this->input->post('mobile');
            $otp = date('his');
            $msg = 'Your Login Password Is ' . $otp_password;
            $this->test_sms($msg, $mobile);
            $this->session->set_flashdata('success', 'We have sent your password on your registered mobile no.
Now you can Login and enjoy your Journey!');
            redirect('');
        } else {
            $this->session->set_flashdata('error', 'Your Mobile Number Is Not Register');
            redirect('');
        }
    }

    public function submit_reviews() {


        $data = array(
            'name' => $this->session->userdata('name'),
            
            'reviews' => $this->input->post('reviews'),
            'astrologer_id' => $this->input->post('astrologer_id'),
            'service_id' => '',
            'coustomer_id' => $this->session->userdata('id'),
            'image' => $this->session->userdata('image'),
            'status' => 'Pandding',
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
        );


        $review = $this->front->_insertRow('Reviews', $data);

        $data1 = array(
            'rating' => $this->input->post('rating'),
            'user_id' => $this->input->post('astrologer_id'),
            'reviewId' => $review
        );

        $rating = $this->front->_insertRow('rating', $data1);

        if ($review) {

            $mesg = '<div id="flashmsg" class="alert alert-success" role="alert"><span>Review Added Successfully.</span></div>';
                $this->session->set_flashdata('message', $mesg);
                redirect($_SERVER['HTTP_REFERER']);
        } else {
            
        }
        if ($this->input->post('service_id') != 'None') {
            redirect('astrologer/' . $this->input->post('astrologer_id') . '/');
        } else {
            redirect('astrologer/' . $this->input->post('astrologer_id'));
        }
    }

    public function coming_soon() {
        $this->load->view('coming_soon');
    }

    public function invoice() {
        $this->load->view('invoice');
    }

    public function newsletter() {
        $this->load->library('email'); // load the library
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'sales@onegodmed.com';
        $config['smtp_user'] = 'newubertek';
        $config['smtp_pass'] = 'vijay##vijay##';
        $config['smtp_port'] = 25;
        $config['mailtype'] = 'html';


        $from_email = "sales@onegodmed.com";
        $to_email = "info@onegodmed.com"; //$this->input->post('email');
        //Load email library
        $this->load->library('email', $config);
        $this->email->from($from_email, 'confirmation');
        $this->email->set_mailtype("html");
        $this->email->to($to_email);
        $this->email->subject('confirm email');
        $this->email->message("Email :" . $this->input->post('email'));

        //Send mail
        if ($this->email->send()) {
            $this->session->set_flashdata('success', 'Sumited Successfully');
        } else {
            $this->session->set_flashdata('error', 'Please check your email & reset your password');
            //Check whether user upload picture
        }
        redirect('');
    }

    public function terms_and_condition() {
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);
        $this->load->view('front/terms_and_condition');
        $this->load->view('front/footer');
    }

    public function privacy_policy() {
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);
        $this->load->view('front/privacy_policy');
        $this->load->view('front/footer');
    }

    public function refund_policy() {
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);
        $this->load->view('front/refund_policy');
        $this->load->view('front/footer');
    }

    public function ajax_get_coupon() {
        $where = array('coupan_code' => $this->input->post('coupon'));
        $coupon = $this->admin->get_details('coupon', $where);
        if ($coupon) {
            echo json_encode(array("status" => 1, "message" => "successfull", "coupon" => $coupon));
        } else {
            echo json_encode(array("status" => 0, "message" => "failed"));
        }
    }

    public function ajax_submit_rating() {
        $rating = $this->input->post('rating');
        $service_id = $this->input->post('service_id');
        $user_id = $this->input->post('user_id');
        $where = array('service_id' => $service_id);
        $where1 = array('user_id' => $user_id);
        $exiest_rating = $this->admin->get_where_details('rating', $where, $where1);
        if ($exiest_rating) {
            $data = array(
                'rating' => $this->input->post('rating'),
                'service_id' => $this->input->post('service_id'),
                'user_id' => $this->input->post('user_id'),
            );

            $rating = $this->admin->_insertRow('rating', $data);
        }
        exit();
    }

    public function search_result() {

        $this->db->select('*');
        $this->db->from('super_categories');
        $this->db->like('super_category', $this->input->post('search'));
        $this->db->limit(1);
        $result = $this->db->get()->result();
        if ($result) {
            if ($result[0]->menu_id == 5) {
                redirect('front/get_kundali/' . $result[0]->id);
            } else {
                redirect('front/service/' . $result[0]->id);
            }
        } else {
            $this->db->select('categories.*,categories.id as cat_id,super_categories.*');
            $this->db->from('categories');
            $this->db->join('super_categories', 'super_categories.id = categories.super_cat_id');
            $this->db->like('categories.category', $this->input->post('search'));
            $this->db->limit(1);
            $result1 = $this->db->get()->result();
            if ($result1) {
                redirect('front/get_kundali/' . $result1[0]->cat_id);
            } else {
                $this->session->set_flashdata('error', 'Sorry Result Not Found');
                redirect($_SERVER["HTTP_REFERER"]);
            }
        }
// if($coupon){
//       echo json_encode(array("status"=>1,"message"=>"successfull","coupon"=>$coupon));
//  }else{
//     echo json_encode(array("status"=>0,"message"=>"failed"));
//  }
    }

// ------------------------------     pay With Bank in sub category section   ------------------------
    public function pay_with_bank_sub_cat() {

        if (isset($_SERVER["HTTP_REFERER"])) {



            $back_url = $_SERVER["HTTP_REFERER"];
        } else {



            $back_url = base_url('');
        }

        $where2 = array('id' => $this->input->post('category_id'));

        $categories = $this->admin->get_details('categories', $where2);

        $super_cat_id = $categories[0]->super_cat_id;

        $booking_no = 'OGM' . date('dmyhis');

        $array = array(
            'session_sevice_name' => $this->input->post('sevice_name'),
            'session_category_id' => $this->input->post('category_id'),
            'session_super_cat_id' => $super_cat_id,
            'session_booking_no' => $booking_no,
            'session_service_price' => $this->input->post('service_price'),
            'session_customer_id' => $this->session->userdata('id'),
            'session_current_balance' => $this->input->post('wallet_balence'),
            'session_coupon_code' => $this->input->post('coupon_code'),
            'session_coupon_discount' => $this->input->post('coupon_discount'),
            'session_payment_mode' => 'Wallet',
            'session_gst_price' => $this->input->post('gst_price'),
            'session_package_price' => $this->input->post('package_price'),
            'session_service_type' => $this->input->post('service_type'),
            'session_back_url' => $back_url,
            'session_date' => date("Y-m-d"),
            'session_is_Active' => 'Accept',
        );





        $this->session->set_userdata($array);


        $array1 = array(
            'session_submit_kundali_customer_id' => $this->session->userdata('id'),
            'session_submit_kundali_fname' => $this->input->post('fname'),
            'session_submit_kundali_lname' => $this->input->post('lname'),
            'session_submit_kundali_mobile' => $this->input->post('mobile'),
            'session_submit_kundali_current_location' => $this->input->post('current_location'),
            'session_submit_kundali_birth_detail' => $this->input->post('birth_detail'),
            'session_submit_kundali_birth_country' => $this->input->post('birth_country'),
            'session_submit_kundali_birth_state' => $this->input->post('birth_state'),
            'session_submit_kundali_birth_city' => $this->input->post('birth_city'),
            'session_submit_kundali_dob' => $this->input->post('dob'),
            'session_submit_kundali_super_cat_id' => $super_cat_id,
            'session_submit_kundali_booking_no' => $booking_no,
            'session_submit_kundali_birth_time' => $this->input->post('birth_time'),
            'session_submit_kundali_gender' => $this->input->post('gender'),
            'session_submit_kundali_status' => "Pandding",
            'session_submit_kundali_date' => date('Y-m-d'),
            'session_submit_kundali_service_id' => $this->input->post('category_id'),
            'session_submit_kundali_service_name' => $this->input->post('sevice_name'),
            'session_submit_kundali_service_price' => $this->input->post('service_price'),
        );





        $this->session->set_userdata($array1);



        $amount = $this->input->post('service_price');

        $product_info = '';

        $customer_name = $this->session->userdata('name');

        $customer_emial = $this->session->userdata('username');

        $customer_mobile = $this->session->userdata('mobile');

        $customer_address = '';

        $customer_id = $this->session->userdata('customer_id');

        $astrologer_id = '';



        //payumoney details





        $MERCHANT_KEY = "gWX8Dxj9"; //change  merchant with yours

        $SALT = "HDSFHVQUOv";  //change salt with yours 



        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

        //optional udf values 

        $udf1 = '';

        $udf2 = '';

        $udf3 = '';

        $udf4 = '';

        $udf5 = '';



        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;

        $hash = strtolower(hash('sha512', $hashstring));



        $success = base_url() . 'Status/pay_with_bank1';

        $fail = base_url() . 'Status/pay_with_bank1';

        $cancel = base_url() . 'Status/pay_with_bank1';





        $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel
        );

        $this->load->view('pay_u/confirmation', $data);
    }

    public function consult_now() {

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

        $data['categories'] = $this->front->get('categories');

        $data['super_categories'] = $this->front->get('super_categories');

        $data['astrologer'] = $this->front->get('author');

       $data['promotion'] = $this->front->get('tbl_promotion');
        $where = array('user_type' => 'Astrologer', 'status!=' => 'Inactive');

        $data['astro'] = $this->admin->get_details_order_random('author', $where);

        $check_service = array('is_Active' => 'Accept');
        $data['services'] = $this->front->get_serviceswithoutid();
        
        $data["check_services"] = $this->front->check_service4('order_history', $check_service);

        // print_r($data["check_services"] );die;

        
        
        $data['waitTime'] = $this->front->getWaitingTime();


 
        $where1 = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->front->get_details('author', $where1);

        $data['title'] = "Talk to Astrologer on Phone | Astrology Prediction – Onegodmed";
        $data['meta_tags'] = "Talk to Astrologer on Phone & Astrology Predection – Onegodmed";
        $data['meta_keywords'] = "astrologer, astrologers, talk to astrologer, best astrologers, online astrologers, famous astrologer, astrologers in India, best astrologers in India, vedic astrologers, top astrologers in India, astrologer talk";
        $data['meta_description'] = "Talk to Astrologer - Consult with the online best astrologer in India, for instant astrology solutions to your problems - horoscope, planet, kundli, love, career, business and family issues by online live astrology phone call consultation.";
        $data['meta_ogtitle'] = "Talk to Astrologer on Phone | Astrology Prediction – Onegodmed";
        $data['meta_ogdescription'] = "Talk to Astrologer - Consult with the online best astrologer in India, for instant astrology solutions to your problems - horoscope, planet, kundli, love, career, business and family issues by online live astrology phone call consultation.";
        $data['meta_ogkeywords'] = "astrologer, astrologers, talk to astrologer, best astrologers, online astrologers, famous astrologer, astrologers in India, best astrologers in India, vedic astrologers, top astrologers in India, astrologer talk";
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        // $astroId = $this->front->getAstroId();
        // print_r($data["check_services"]);die;
        $this->load->view('front/header', $data);

        $this->load->view('front/consultnow', $data);

        $this->load->view('front/footer', $data);
    }

    public function myfollower(){
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

        $data['categories'] = $this->front->get('categories');

        $data['super_categories'] = $this->front->get('super_categories');

        $data['astrologer'] = $this->front->get('author');

       $data['promotion'] = $this->front->get('tbl_promotion');
        $where = array('user_type' => 'Astrologer', 'status!=' => 'Inactive');

        $data['astro'] = $this->admin->get_details_follow('author', $where);

        $check_service = array('is_Active' => 'Accept');
        $data['services'] = $this->front->get_serviceswithoutid();
        
        $data["check_services"] = $this->front->check_service4('order_history', $check_service);

        // print_r($data["check_services"] );die;

        
        
        $data['waitTime'] = $this->front->getWaitingTime();


 
        $where1 = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->front->get_details('author', $where1);

        $data['title'] = "Talk to Astrologer on Phone | Astrology Prediction – Onegodmed";
        $data['meta_tags'] = "Talk to Astrologer on Phone & Astrology Predection – Onegodmed";
        $data['meta_keywords'] = "astrologer, astrologers, talk to astrologer, best astrologers, online astrologers, famous astrologer, astrologers in India, best astrologers in India, vedic astrologers, top astrologers in India, astrologer talk";
        $data['meta_description'] = "Talk to Astrologer - Consult with the online best astrologer in India, for instant astrology solutions to your problems - horoscope, planet, kundli, love, career, business and family issues by online live astrology phone call consultation.";
        $data['meta_ogtitle'] = "Talk to Astrologer on Phone | Astrology Prediction – Onegodmed";
        $data['meta_ogdescription'] = "Talk to Astrologer - Consult with the online best astrologer in India, for instant astrology solutions to your problems - horoscope, planet, kundli, love, career, business and family issues by online live astrology phone call consultation.";
        $data['meta_ogkeywords'] = "astrologer, astrologers, talk to astrologer, best astrologers, online astrologers, famous astrologer, astrologers in India, best astrologers in India, vedic astrologers, top astrologers in India, astrologer talk";
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');

        $this->load->view('front/header',$data);

        $this->load->view('front/my-follower',$data);

        $this->load->view('front/footer',$data);
    }
    public function myfollowerastroventfilter(){
        $astrolanguage = @$this->input->post('astroLang');
        $astroexp = @$this->input->post('astroexp');
        $astroRating = @$this->input->post('astroRating');
        $astroprice = @$this->input->post('astroprice');
        $astroExpertise = @$this->input->post('astroExpertise');
        $searchName = @$this->input->post('searchName');

        $data['astrologer'] = $this->front->get('author');

        $where = array('user_type' => 'Astrologer', 'status!=' => 'Inactive');
        $where2 = "";
        $where3 = "";
        $whereCommon = "";
        if ($astrolanguage != "") {
            $arrAstrolanguage = explode(",", $astrolanguage);
            foreach ($arrAstrolanguage as $value) {
                $where2 .= ($where2 == "") ? " langknown like '%$value%'" : " or langknown like '%$value%'";
            }
            $where2 = "langknown != '' and (" . $where2 . ") and user_type = 'Astrologer' and status != 'Inactive'";
        }
        if ($astroexp != "") {
            $arrAstroexp = explode(",", $astroexp);
            foreach ($arrAstroexp as $value) {
                if ($value > 20)
                    $where3 .= ($where3 == "") ? " CAST(`experience` AS UNSIGNED) >= '$value'" : " or CAST(`experience` AS UNSIGNED) >= '$value'";
                else
                    $where3 .= ($where3 == "") ? " CAST(`experience` AS UNSIGNED) <= '$value'" : " or CAST(`experience` AS UNSIGNED) <= '$value'";
            }
            $where3 = "experience != '' and (" . $where3 . ") and user_type = 'Astrologer' and status != 'Inactive'";
        }
        if ($where2 != "")
            $whereCommon .= ($whereCommon == "") ? $where2 : " and " . $where2;
        if ($where3 != "")
            $whereCommon .= ($whereCommon == "") ? $where3 : " and " . $where3;
        if ($whereCommon == "")            
            $data['astro'] = $this->admin->get_details_follow('author', $where);
        else
            $data['astro'] = $this->admin->get_details_follow('author', $whereCommon);
        //print_r($data['astro']);
        if ($astroRating != "") {
            $arrAstroRating = explode(",", $astroRating);
            $arrAstroData = array();
            //$data['astro'] = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value1) {
                $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $value1->id . "'")->result();
                $rating = (int) $rating1[0]->rating;
                $addData = 0;
                //print_r($arrAstroRating);
                foreach ($arrAstroRating as $value) {
                    if ($value > 0) {
                        if ($value <= $rating)
                            $addData = 1;
                    } else {
                        $addData = 1;
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value1;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        $data['services'] = $this->front->get_serviceswithoutid();
        if ($astroprice != "") {
            $arrAstroPrice = explode(",", $astroprice);
            $arrAstroData = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value) {
                $addData = 0;
                foreach ($arrAstroPrice as $value1) {
                    foreach ($data['services'] as $value2) {
                        if ($value2->astrologer_id == $value->id) {
                            $final_price = $value2->price;
                            if ($value1 > 0) {
                                if ($value1 == 20) {
                                    if ($value1 >= $final_price)
                                        $addData = 1;
                                }
                                if ($value1 == 21) {
                                    if ($final_price >= 21 && $final_price <= 50)
                                        $addData = 1;
                                }
                                if ($value1 == 50) {
                                    if ($final_price >= 50)
                                        $addData = 1;
                                }
                            } else {
                                $addData = 1;
                            }
                        }
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        if ($astroExpertise != "") {
            $arrAstroExpertise = explode(",", $astroExpertise);
            $arrAstroData = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value) {
                $addData = 0;
                foreach ($arrAstroExpertise as $value1) {
                    foreach ($data['services'] as $value2) {
                        if ($value2->astrologer_id == $value->id) {
                            $final_service = $value2->service_name;

                            if ($value1 != "") {
                                if ($final_service == $value1) {
                                    $addData = 1;
                                }

                                if (strpos($value->expertise, $value1) !== false) {
                                    $addData = 1;
                                }
                            } else {
                                $addData = 1;
                            }
                        }
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        if ($searchName != "") {
            $i = 0;
            //echo "<pre/>";
            //print_r($data['astro']);
            $newarrAstroData = array();
            //$astroDetails = $this->front->checkAstro($searchName);
            foreach ($data['astro'] as $value) {
                //echo $value->name."<br/>";
                if (strpos(strtolower($value->name), strtolower($searchName)) !== false) {
                    $newarrAstroData[$i] = $value;
                }
                $i++;
            }
            $data['astro'] = @$newarrAstroData;
        }
        $check_service = array('is_Active' => 'Accept');

        $data["check_services"] = $this->front->check_service4('order_history', $check_service);
        
        $wherein = array('is_Active' => 'Accept', 'is_Active' => 'In Queue');
        $getTime = $this->front->getWaitingTime($wherein);
        // print_r($getTime);die;

        $where1 = array('id' => $this->session->userdata('id'));

        $astroId = $this->front->getAstroId();
        // print_r($astroId);die;

        $data['wallet_balence'] = $this->front->get_details('author',$where1);

        $this->load->view('front/my-follower-astrofilter', $data);
    }
    

    public function addQueue() {
        $data['astro_id'] = @$this->input->post('astroId');
        $data['user_id'] = $this->session->userdata('id');
        $checkAgain = $this->front->checkQueue($this->input->post('astroId'));
        if(!empty($checkAgain)){
            if($checkAgain->queue == 2){
                echo 0;
            }else{
                $data['queue'] = 2;
                $data['user_id'] = $checkAgain->user_id.','.$this->session->userdata('id');
                $updateQueue =  $this->front->updateQueue($this->input->post('astroId'), $data);
            }
        }else{
            $data['queue'] = 1;
            $insertQueue =  $this->front->insertQueue($data);
        }
        echo 1;
        
    }

    public function astroVendorFilter() {
        
        $astrolanguage = @$this->input->post('astroLang');
        $astroexp = @$this->input->post('astroexp');
        $astroRating = @$this->input->post('astroRating');
        $astroprice = @$this->input->post('astroprice');
        $astroExpertise = @$this->input->post('astroExpertise');
        $searchName = @$this->input->post('searchName');

        $data['astrologer'] = $this->front->get('author');

        $where = array('user_type' => 'Astrologer', 'status!=' => 'Inactive');
        $where2 = "";
        $where3 = "";
		$havewhere = "";
        $whereCommon = "";
        if ($astrolanguage != "") {
            $arrAstrolanguage = explode(",", $astrolanguage);
            foreach ($arrAstrolanguage as $value) {
                $where2 .= ($where2 == "") ? " langknown like '%$value%'" : " or langknown like '%$value%'";
            }
            $where2 = "langknown != '' and (" . $where2 . ") and user_type = 'Astrologer' and status != 'Inactive'";
        }
        if ($astroexp != "") {
            $arrAstroexp = explode(",", $astroexp);
			
			for($m=0; $m<count($arrAstroexp); $m=$m+2)
			{
				$fex=$arrAstroexp[$m];
				if($fex==0)
				{
					$fex=1;
				}
				$tex=$arrAstroexp[$m+1];
				if($havewhere == "")
				{
				 $havewhere .= " (years BETWEEN  $fex AND $tex) ";
				}else{
				 $havewhere .= " OR (years BETWEEN  $fex AND $tex) ";
				}
				
			}
            /*foreach ($arrAstroexp as $value) {
                // if ($value > 20)
                    $where3 .= ($where3 == "") ? " CAST(`experience` AS UNSIGNED) >= '$value'" : " or CAST(`experience` AS UNSIGNED) <= '$value'";
                // else
                    // $where3 .= ($where3 == "") ? " CAST(`experience` AS UNSIGNED) <= '$value'" : " or CAST(`experience` AS UNSIGNED) <= '$value'";
            } */
            $where3 = "experience != '' and user_type = 'Astrologer' and status != 'Inactive'";
        }
        if ($where2 != "")
            $whereCommon .= ($whereCommon == "") ? $where2 : " and " . $where2;
        if ($where3 != "")
            $whereCommon .= ($whereCommon == "") ? $where3 : " and " . $where3;
        if ($whereCommon == "")
            $data['astro'] = $this->admin->get_details_order_random('author', $where);
        else
            $data['astro'] = $this->admin->get_details_order_random('author', $whereCommon, $havewhere);
        // print_r($whereCommon);
        if ($astroRating != "") {
            $arrAstroRating = explode(",", $astroRating);
            $arrAstroData = array();
            //$data['astro'] = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value1) {
                $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $value1->id . "'")->result();
                $rating = $rating1[0]->rating;
                $addData = 0;
                //print_r($arrAstroRating);
				for($j=0; $j<count($arrAstroRating); $j=$j+2)
					{
						if($rating <= $arrAstroRating[$j] and $rating >= $arrAstroRating[$j+1])
						{
							 $addData = 1;
						}
					}
               
                if ($addData) {
                    $arrAstroData[$i] = $value1;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        $data['services'] = $this->front->get_serviceswithoutid();
        if ($astroprice > 0) { 
            $astroprice = "0,".$astroprice;
            $arrAstroPrice = explode(",", $astroprice);
            $arrAstroData = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value) {
                $addData = 0;            
					
                    foreach ($data['services'] as $value2) {
                        if ($value2->astrologer_id == $value->id) {
                            $final_price = $value2->price;
                            
							if($final_price <= $arrAstroPrice[1])
							   $addData = 1;
							
                        }
                    }
               
				
                if ($addData) {
                    $arrAstroData[$i] = $value;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        if ($astroExpertise != "") {
            $arrAstroExpertise = explode(",", $astroExpertise);
            $arrAstroData = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value) {
                $addData = 0;
                foreach ($arrAstroExpertise as $value1) {
                    foreach ($data['services'] as $value2) {
                        if ($value2->astrologer_id == $value->id) {
                            $final_service = $value2->service_name;

                            if ($value1 != "") {
                                if ($final_service == $value1) {
                                    $addData = 1;
                                }

                                if ((strpos($value->expertise, $value1) !== false) OR strpos($value->description, $value1) ) {
                                    $addData = 1;
                                }
                            } else {
                                $addData = 1;
                            }
                        }
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        if ($searchName != "") {
            $i = 0;
            //echo "<pre/>";
            //print_r($data['astro']);
            $newarrAstroData = array();
            //$astroDetails = $this->front->checkAstro($searchName);
            foreach ($data['astro'] as $value) {
                //echo $value->name."<br/>";
                if (strpos(strtolower($value->name), strtolower($searchName)) !== false) {
                    $newarrAstroData[$i] = $value;
                }
                $i++;
            }
            $data['astro'] = @$newarrAstroData;
        }
        $check_service = array('is_Active' => 'Accept');

        $data["check_services"] = $this->front->check_service4('order_history', $check_service);
        
        $wherein = array('is_Active' => 'Accept', 'is_Active' => 'In Queue');
        $getTime = $this->front->getWaitingTime($wherein);
        // print_r($getTime);die;

        $where1 = array('id' => $this->session->userdata('id'));

        $astroId = $this->front->getAstroId();
        // print_r($astroId);die;

        $data['wallet_balence'] = $this->front->get_details('author', $where1);
        // echo"<pre>";
        // print_r($data['astro']);die;
        $this->load->view('front/astroVendorFilter', $data);
    }

    public function citydata() {
        $cityname = $_POST['cityname'];
        echo $this->front->getSearch($cityname);
    }

    public function queue(){
           // update in booking queue
           $getQueueData = $this->admin->getQueueData(125);
           if(count($getQueueData)>0){
           $updatedQueueVal = $getQueueData[0]->queue - 1;
           $UserId = explode(',', $getQueueData[0]->user_id);

           $getqueueBookingDetail = $this->admin->getqueueBookingDetail(125,$UserId[0]);
           $getAstroNum = $this->admin->getAstroNum(125);
           $getCustNum = $this->admin->getCustNum($UserId[0]);

           print_r($UserId );

           $cust_num = $getCustNum[0]->mobile;
            $call_time = $getqueueBookingDetail[0]->call_duration;
            $order_id = $getqueueBookingDetail[0]->id;
            $astro_num = $getAstroNum[0]->call_userId;
            $data='{
            "sourcetype": "0",
            "customivr": true,
            "credittype": "2",
            "filetype": "2",
            "ukey": "1BDG5zrFc3og0wDWT89AFBlPB", 
            "serviceno": "4474225",
            "ivrtemplateid": "485",
            "agentretryatmpt": 0,
            "retryduration": 5,
            "custretryatmpt": 0,
            "custcli": "4474225",
            "isrefno": true,
            "maxtalktime":'.$call_time.',
            "msisdnlist": [
                {
                    "phoneno": '.$cust_num.',
                    "agentno": '.$astro_num.'
                }
            ]
            }';
    $url = 'http://125.16.147.180/C2CAPI/webresources/Click2CallPost';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $arrdata = json_decode($result,1);
    if($arrdata['refno'][0][$cust_num] != ""){
    $data2 = array(
                'callRequestId' => $arrdata['refno'][0][$cust_num],
                 'is_Active' => "Accept",
                 'callCount' => "1"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
            $callerID = $arrdata['refno'][0][$cust_num];


           unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, 125);
           }else{
               $deleteQueue = $this->admin->deleteQueue(125);
           }
    }
}
    public function newCallApiStatus(){
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata,1);
        $number = $userData['customernumber'];
        $agent = $userData['Agentnumber'];
        $xnid = $userData['refno'];
        $event = $userData['CallStatusCustomer'];
        if($userData['CallStatusCustomer']!=1 && $userData['CallStatusCustomer']!='End'){
            $myfile = fopen(FCPATH."/new-call-api/audiocalldata/" . $xnid . ".txt", "w")or die("Unable to open file!");
                fwrite($myfile, $postdata);
                fclose($myfile);
                $path = FCPATH."/new-call-api/audiocalldata/" . $xnid . ".txt";
        $postdata = file_get_contents($path);
        $userData = json_decode($postdata, 1);
        $where1 = array('status' => $event, 'callid' => $xnid);
        $arrData = $this->front->get_details('tbl_calltype', $where1);
        $data3 = array(
                    'is_Active' => 'Accept'
                );
                $where = array('callRequestId' => $xnid);
                $wallet = $this->admin->_updateRowWhere('order_history', $data3, $where);
        if ($arrData[0]->id <= 0) {
            if($userData['CallStatusCustomer']=='Dialing' && $userData['CallStatusAgent']=="Talk"){
                $event = "AgentRing";
            }else if($userData['CallStatusCustomer']=='' && $userData['CallStatusAgent']=="Talk"){
                $event = "AgentUp";
            }else if($userData['CallStatusCustomer']=='Ring' && $userData['CallStatusAgent']=="Talk"){
                $event = "CustomerRing";
            }else if($userData['CallStatusCustomer']=='Talk' && $userData['CallStatusAgent']=="Talk"){
                $event = "CustomerUp";
            }else if($userData['CallStatusCustomer']=="End"){
                $event = "CustomerHangup";
            }else if($userData['CallStatusAgent']=="End"){
                $event = "AgentHangup";
            }else if($userData['CallStatusCustomer']==0){
                $event = "missed";
                $data3 = array(
                    'is_Active' => 'Cancel'
                );
                $where = array('callRequestId' => $xnid);
                $this->admin->_updateRowWhere('order_history', $data3, $where);
                 // update in booking queue
            // $getQueueData = $this->admin->getQueueData($arrData[0]->astrologer_id);
            // $updatedQueueVal = $getQueueData[0]->queue - 1;
            // $qdataArr = array(
            //     'queue' => $updatedQueueVal
            // );

            // if($qdataArr['queue']>=1){
            //     $updateQueue = $this->admin->updateQueueData($qdataArr, $arrData[0]->astrologer_id);
            // }else{
            //     $deleteQueue = $this->admin->deleteQueue($arrData[0]->astrologer_id);
            // }

             // update in booking queue
           $getQueueData = $this->admin->getQueueData($arrData[0]->astrologer_id);
           if(count($getQueueData)>0){
           $updatedQueueVal = $getQueueData[0]->queue - 1;
           $UserId = explode(',', $getQueueData[0]->user_id);

           $getqueueBookingDetail = $this->admin->getqueueBookingDetail($arrData[0]->astrologer_id,$UserId[0]);
           $getAstroNum = $this->admin->getAstroNum($arrData[0]->astrologer_id);
           $getCustNum = $this->admin->getCustNum($UserId[0]);

           print_r($UserId );

           $cust_num = $getCustNum[0]->mobile;
            $call_time = $getqueueBookingDetail[0]->call_duration;
            $order_id = $getqueueBookingDetail[0]->id;
            $astro_num = $getAstroNum[0]->call_userId;
            $data='{
            "sourcetype": "0",
            "customivr": true,
            "credittype": "2",
            "filetype": "2",
            "ukey": "1BDG5zrFc3og0wDWT89AFBlPB", 
            "serviceno": "4474225",
            "ivrtemplateid": "485",
            "agentretryatmpt": 0,
            "retryduration": 5,
            "custretryatmpt": 0,
            "custcli": "4474225",
            "isrefno": true,
            "maxtalktime":'.$call_time.',
            "msisdnlist": [
                {
                    "phoneno": '.$cust_num.',
                    "agentno": '.$astro_num.'
                }
            ]
            }';
    $url = 'http://125.16.147.180/C2CAPI/webresources/Click2CallPost';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $arrdata = json_decode($result,1);
    if($arrdata['refno'][0][$cust_num] != ""){
    $data2 = array(
                'callRequestId' => $arrdata['refno'][0][$cust_num],
                 'is_Active' => "Accept",
                 'callCount' => "1"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
            $callerID = $arrdata['refno'][0][$cust_num];


           unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, $arrData[0]->astrologer_id);
           }else{
               $deleteQueue = $this->admin->deleteQueue($arrData[0]->astrologer_id);
           }
    }
                
            }else if($userData['CallStatusCustomer']==1){
                $event = "answered";
            }
            date_default_timezone_set('Asia/Kolkata');
            $data2 = array(
                'date' => date("Y-m-d H:i:s"),
                'status' => $event,
                'callid' => $xnid,
                'callHistory' => $postdata
            );

            $calltype = $this->admin->_insertRow('tbl_calltype', $data2);
        }
        }else{
          $myfile = fopen(FCPATH."/new-call-api/audiocalldata/" . $xnid . ".txt", "w")or die("Unable to open file!");
        fwrite($myfile, $postdata);
        fclose($myfile);
        $path = FCPATH."/new-call-api/audiocalldata/" . $xnid . ".txt";
        $postdata = file_get_contents($path);
        $userData = json_decode($postdata, 1);
        if ($userData['refno'] != '') {
            $callDuration = $userData['phonenotalktime'];
             if($userData['CallStatusCustomer']==0){
                $eventtype = "missed";
            }else if($userData['CallStatusCustomer']==1){
                $eventtype = "answered";
            }if($userData['CallStatusCustomer']=='End'){
                $eventtype = "CustomerHangup";
            }
            if ($eventtype == "answered") {
                $where1 = array('callRequestId' => $xnid);
                $arrData = $this->front->get_details('order_history', $where1);                
                $actual_price = $arrData[0]->actual_price;
                $where3 = array('id' => $arrData[0]->astrologer_id);
                $where2 = array('id' => $arrData[0]->customer_id);
                $walletData = $this->front->get_details('author', $where2);
                $walletAstroData = $this->front->get_details('author', $where3);
                $actualPriceInSec = $actual_price / 60;
                $vendor_price = $arrData[0]->vendor_price;
                $vendor_priceInSec = $vendor_price / 60;
                $aMins = intval($callDuration / 60);
                $aSecs = str_pad(($callDuration % 60), 2, '0', STR_PAD_LEFT);
                $fMins = $aMins;
                $fMins = ($aSecs >0) ? $fMins+1 : $fMins;
                $vFmins = ($aMins>5) ? $aMins -1 : $aMins;
                $dMins = ($fMins > 5) ? $fMins-1 : $fMins;
                $callPriceSec = round(($dMins * $actual_price), 2);
                $vFsecs = ($aMins * 60) + $aSecs;
                if($vFsecs>300 && $vFsecs<360){
                   $vFsecs = $vFsecs-$aSecs;
                } else if ($vFsecs>360){
                   $vFsecs=($aSecs>0) ? $vFsecs-$aSecs : $vFsecs-60;
                } else{
                   $vFsecs=$vFsecs;
                }
                $totVendorPrice = round(($vFsecs * $vendor_priceInSec), 2);               
                $hour = gmdate("H", $callDuration);
                $min = gmdate("i", $callDuration);
                $sec = gmdate("s", $callDuration);
                $timeSpend = "";
                if ($hour > 0)
                    $timeSpend .= $hour . " hour";
                if ($min > 0)
                    $timeSpend .= $min . " Min";
                if ($sec > 0)
                    $timeSpend .= $sec . " Sec";
                $call_status1 = "Complete";
                $bookStatus = '1';
                $wallet_balance = $walletData[0]->wallet_balence;
                $wallet_balance = $walletData[0]->wallet_balence;
                $current_bal = $wallet_balance - $callPriceSec;
                $atroWallet_bal = $walletAstroData[0]->wallet_balence;
                $astrocurrent_bal = $atroWallet_bal + $totVendorPrice;
                 $data_cust = array(
                        'wallet_balence' => $current_bal,
                    );
                    $where_cust = array('id' => $walletData[0]->id);
                    $cust_wallet = $this->admin->_updateRowWhere('author', $data_cust, $where_cust);
                    $data_astro = array(
                        'wallet_balence' => $astrocurrent_bal,
                    );
                    $where_astro = array('id' => $walletAstroData[0]->id);
                    $astro_wallet = $this->admin->_updateRowWhere('author', $data_astro, $where_astro);
                    if ($cust_wallet && $astro_wallet) {
                        $data1 = array(
                            'amount' => $callPriceSec,
                            'payment_type' => "Debit",
                            'customer_id' => $walletData[0]->id,
                            'date' => date("Y-m-d"),
                            'order_id' => $arrData[0]->id,
                            'current_belence' => $current_bal
                        );

                        $customer_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
                        $data2 = array(
                            'amount' => $totVendorPrice,
                            'payment_type' => "Cradit",
                            'customer_id' => $walletAstroData[0]->id,
                            'date' => date("Y-m-d"),
                            'order_id' => $arrData[0]->id,
                            'astro_current_bal' => $astrocurrent_bal
                        );
                        $astrologer_wallet_history = $this->admin->_insertRow('wallet_history', $data2);
                        $msg = "Dear " . $walletData[0]->name . ", Your last booking from Onegodmed. Your Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is debited by Rs. " . $callPriceSec;
                        $msg1 = "Dear " . $walletAstroData[0]->name . ", Your last booking from Onegodmed. Customer Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is credited by Rs. " . $totVendorPrice;
                        $this->test_sms($msg, $walletData[0]->mobile);
                        $this->test_sms($msg1, $walletAstroData[0]->mobile);
                    }
                $data = array(
                    'bookStatus' => $bookStatus,
                    'call_duration' => $timeSpend,
                    'is_Active' => $call_status1,
                    'service_price' => $callPriceSec,
                    'current_balance' => $current_bal,
                    'vendor_service_price' => $totVendorPrice
                );

                $where = array('callRequestId' => $xnid);
                $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
                 // update in booking queue
           $getQueueData = $this->admin->getQueueData($arrData[0]->astrologer_id);
           if(count($getQueueData)>0){
           $updatedQueueVal = $getQueueData[0]->queue - 1;
           $UserId = explode(',', $getQueueData[0]->user_id);

           $getqueueBookingDetail = $this->admin->getqueueBookingDetail($arrData[0]->astrologer_id,$UserId[0]);
           $getAstroNum = $this->admin->getAstroNum($arrData[0]->astrologer_id);
           $getCustNum = $this->admin->getCustNum($UserId[0]);

           print_r($UserId );

           $cust_num = $getCustNum[0]->mobile;
            $call_time = $getqueueBookingDetail[0]->call_duration;
            $order_id = $getqueueBookingDetail[0]->id;
            $astro_num = $getAstroNum[0]->call_userId;
            $data='{
            "sourcetype": "0",
            "customivr": true,
            "credittype": "2",
            "filetype": "2",
            "ukey": "1BDG5zrFc3og0wDWT89AFBlPB", 
            "serviceno": "4474225",
            "ivrtemplateid": "485",
            "agentretryatmpt": 0,
            "retryduration": 5,
            "custretryatmpt": 0,
            "custcli": "4474225",
            "isrefno": true,
            "maxtalktime":'.$call_time.',
            "msisdnlist": [
                {
                    "phoneno": '.$cust_num.',
                    "agentno": '.$astro_num.'
                }
            ]
            }';
    $url = 'http://125.16.147.180/C2CAPI/webresources/Click2CallPost';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $arrdata = json_decode($result,1);
    if($arrdata['refno'][0][$cust_num] != ""){
    $data2 = array(
                'callRequestId' => $arrdata['refno'][0][$cust_num],
                 'is_Active' => "Accept",
                 'callCount' => "1"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
            $callerID = $arrdata['refno'][0][$cust_num];


           unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, $arrData[0]->astrologer_id);
           }else{
               $deleteQueue = $this->admin->deleteQueue($arrData[0]->astrologer_id);
           }
    }
                
            } else if ($eventtype == "CustomerHangup"){
               $data2 = array(
                'date' => date("Y-m-d H:i:s"),
                'status' => $eventtype,
                'callid' => $xnid,
                'callHistory' => $postdata
            );
            $calltype = $this->admin->_insertRow('tbl_calltype', $data2);
            }else if ($eventtype == "missed"){
               $data = array(
                    'is_Active' => 'Cancel'
                );

            $where = array('callRequestId' => $xnid);
             

            $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
             // update in booking queue
           $getQueueData = $this->admin->getQueueData($arrData[0]->astrologer_id);
           if(count($getQueueData)>0){
           $updatedQueueVal = $getQueueData[0]->queue - 1;
           $UserId = explode(',', $getQueueData[0]->user_id);

           $getqueueBookingDetail = $this->admin->getqueueBookingDetail($arrData[0]->astrologer_id,$UserId[0]);
           $getAstroNum = $this->admin->getAstroNum($arrData[0]->astrologer_id);
           $getCustNum = $this->admin->getCustNum($UserId[0]);

           print_r($UserId );

           $cust_num = $getCustNum[0]->mobile;
            $call_time = $getqueueBookingDetail[0]->call_duration;
            $order_id = $getqueueBookingDetail[0]->id;
            $astro_num = $getAstroNum[0]->call_userId;
            $data='{
            "sourcetype": "0",
            "customivr": true,
            "credittype": "2",
            "filetype": "2",
            "ukey": "1BDG5zrFc3og0wDWT89AFBlPB", 
            "serviceno": "4474225",
            "ivrtemplateid": "485",
            "agentretryatmpt": 0,
            "retryduration": 5,
            "custretryatmpt": 0,
            "custcli": "4474225",
            "isrefno": true,
            "maxtalktime":'.$call_time.',
            "msisdnlist": [
                {
                    "phoneno": '.$cust_num.',
                    "agentno": '.$astro_num.'
                }
            ]
            }';
    $url = 'http://125.16.147.180/C2CAPI/webresources/Click2CallPost';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $arrdata = json_decode($result,1);
    if($arrdata['refno'][0][$cust_num] != ""){
    $data2 = array(
                'callRequestId' => $arrdata['refno'][0][$cust_num],
                 'is_Active' => "Accept",
                 'callCount' => "1"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
            $callerID = $arrdata['refno'][0][$cust_num];


           unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, $arrData[0]->astrologer_id);
           }else{
               $deleteQueue = $this->admin->deleteQueue($arrData[0]->astrologer_id);
           }
    }
            }
        } else {
           if($userData['CallStatusCustomer']==0){
                $eventtype = "missed";
            }else if($userData['CallStatusCustomer']==1){
                $eventtype = "answered";
            }
        }
        $where1 = array('status' => $eventtype, 'callid' => $xnid);
        $arrData = $this->front->get_details('tbl_calltype', $where1);
        if ($arrData[0]->id <= 0) {
            date_default_timezone_set('Asia/Kolkata');
            $data2 = array(
                'date' => date("Y-m-d H:i:s"),
                'status' => $eventtype,
                'callid' => $xnid,
                'callHistory' => $postdata
            );

            $calltype = $this->admin->_insertRow('tbl_calltype', $data2);
        }  
        }
    }
    public function updatesparkcallstatus(){  
        $postdata = file_get_contents("php://input");
        $userData = json_decode($postdata,1);
        $ivr = json_decode(@$userData['data'], 1);
        $pinNum = @$ivr['ivr'][0]['value'];
        if(@$userData <= 0){
             $userData = json_decode($userData,1);
             $ivr = json_decode(@$userData['data'], 1);
             $pinNum = @$ivr['ivr'][0]['value'];
        }
        $data = @$userData['data'];
        $number = @$userData['number'];
        $agent = @$userData['agent'];
        $svc = @$userData['svc'];
        $xnid = @$userData['xnid'];
        $time = @$userData['time'];
        $type = @$userData['type'];
        $event = @$userData['event'];
        $latestfile = array(
            'data' => $data,
            'number' => $number,
            'agent' => $agent,
            'svc' => $svc,
            'xnid' => $xnid,
            'time' => $time,
            'type' => $type,
            'event' => $event
        );
        if(is_numeric($data) && $data != ''){
            $myfile = fopen(FCPATH."/sparktg/audiocalldata/" . $data . ".txt", "w")or die("Unable to open file!");
                fwrite($myfile, json_encode($latestfile));
                fclose($myfile);
                $path = FCPATH."/sparktg/audiocalldata/" . $data . ".txt";
        $postdata = file_get_contents($path);
        $userData = json_decode($postdata, 1);
         $call_req_id = $data;
        $where1 = array('status' => $event, 'callid' => $call_req_id);
        $arrData = $this->front->get_details('tbl_calltype', $where1);
        $data3 = array(
                    'is_Active' => 'Accept'
                );
                $where = array('callRequestId' => $call_req_id);
                $wallet = $this->admin->_updateRowWhere('order_history', $data3, $where);
        if ($arrData[0]->id <= 0) {
            date_default_timezone_set('Asia/Kolkata');
            $data2 = array(
                'date' => date("Y-m-d H:i:s"),
                'status' => $event,
                'callid' => $call_req_id,
                'callHistory' => $postdata
            );

            $calltype = $this->admin->_insertRow('tbl_calltype', $data2);
        }
            } else if(@$pinNum !=''){
                $myfile = fopen(FCPATH."/sparktg/audiocalldata/" . $pinNum . ".txt", "w")or die("Unable to open file!");
                fwrite($myfile, json_encode($latestfile));
                fclose($myfile);
                $path = FCPATH."/sparktg/audiocalldata/" . $pinNum . ".txt";
                $postdata = file_get_contents($path);
                $userData = json_decode($postdata, 1);
        if ($userData['data'] != '') {
            $callData = json_decode($userData['data'], 1);
            $callDuration = $callData['cdr']['call-duration'];
            $callId = $callData['cdr']['callid'];
            $eventtype = $callData['cdr']['disposition'];
            $call_request_id = $pinNum;
            $customer_mobile = $callData['cdr']['customer-number'];
            $astrologer_mobile = $callData['cdr']['agent-number'];
            $call_status = $eventtype;
            if ($eventtype == "answered") {
                $where1 = array('callRequestId' => $call_request_id);
                $arrData = $this->front->get_details('order_history', $where1);                
                $actual_price = $arrData[0]->actual_price;
                $where3 = array('id' => $arrData[0]->astrologer_id);
                $where2 = array('id' => $arrData[0]->customer_id);
                $walletData = $this->front->get_details('author', $where2);
                $walletAstroData = $this->front->get_details('author', $where3);
                $actualPriceInSec = $actual_price / 60;
                $vendor_price = $arrData[0]->vendor_price;
                $vendor_priceInSec = $vendor_price / 60;
                $aMins = intval($callDuration / 60);
                $aSecs = str_pad(($callDuration % 60), 2, '0', STR_PAD_LEFT);
                $fMins = $aMins;
                $fMins = ($aSecs >0) ? $fMins+1 : $fMins;
                $vFmins = ($aMins>5) ? $aMins -1 : $aMins;
                $dMins = ($fMins > 5) ? $fMins-1 : $fMins;
                $callPriceSec = round(($dMins * $actual_price), 2);
                $vFsecs = ($aMins * 60) + $aSecs;
                if($vFsecs>300 && $vFsecs<360){
                   $vFsecs = $vFsecs-$aSecs;
                } else if ($vFsecs>360){
                   $vFsecs=($aSecs>0) ? $vFsecs-$aSecs : $vFsecs-60;
                } else{
                   $vFsecs=$vFsecs;
                }
                $totVendorPrice = round(($vFsecs * $vendor_priceInSec), 2);               
                $hour = gmdate("H", $callDuration);
                $min = gmdate("i", $callDuration);
                $sec = gmdate("s", $callDuration);
                $timeSpend = "";
                if ($hour > 0)
                    $timeSpend .= $hour . " hour ";
                if ($min > 0)
                    $timeSpend .= $min . " Min ";
                if ($sec > 0)
                    $timeSpend .= $sec . " Sec";
                $call_status1 = "Complete";
                $bookStatus = '1';
                $wallet_balance = $walletData[0]->wallet_balence;
                $current_bal = $wallet_balance - $callPriceSec;
                $atroWallet_bal = $walletAstroData[0]->astro_dollar_bal;
                $astrocurrent_bal = $atroWallet_bal + $totVendorPrice;
                $data_cust = array(
                        'wallet_balence' => $current_bal,
                    );
                    $where_cust = array('id' => $walletData[0]->id);
                    $cust_wallet = $this->admin->_updateRowWhere('author', $data_cust, $where_cust);
                    $data_astro = array(
                        'astro_dollar_bal' => $astrocurrent_bal,
                    );
                    $where_astro = array('id' => $walletAstroData[0]->id);
                    $astro_wallet = $this->admin->_updateRowWhere('author', $data_astro, $where_astro);
                    if ($cust_wallet && $astro_wallet) {
                        $data1 = array(
                            'amount' => $callPriceSec,
                            'payment_type' => "Debit",
                            'customer_id' => $walletData[0]->id,
                            'date' => date("Y-m-d"),
                            'order_id' => $arrData[0]->id,
                            'current_belence' => $current_bal
                        );

                        $customer_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
                        $data2 = array(
                            'amount' => $totVendorPrice,
                            'payment_type' => "Cradit",
                            'customer_id' => $walletAstroData[0]->id,
                            'date' => date("Y-m-d"),
                            'order_id' => $arrData[0]->id,
                            'astro_current_bal' => $astrocurrent_bal
                        );
                        $astrologer_wallet_history = $this->admin->_insertRow('wallet_history', $data2);
                        $number1 = $customer_mobile;
                        $number2 = $walletAstroData[0]->mobile;
                        $msg = "Dear " . $walletData[0]->name . ", Your last booking from Onegodmed. Your Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is debited by USD $ " . $callPriceSec;
                        $msg1 = "Dear " . $walletAstroData[0]->name . ", Your last booking from Onegodmed. Customer Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is credited by USD $ " . $totVendorPrice;
                        $this->test_sms($msg, $number1);
                        $this->test_sms($msg1, $number2);
                    }
                $data = array(
                    'bookStatus' => $bookStatus,
                    'call_duration' => $timeSpend,
                    'is_Active' => $call_status1,
                    'service_price' => $callPriceSec,
                    'current_balance' => $current_bal,
                    'vendor_service_price' => $totVendorPrice
                );
                $where = array('callRequestId' => $call_request_id);
                $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
            } else {
                $data = array(
                    'is_Active' => 'Cancel'
                );
                $where = array('callRequestId' => $call_request_id);
                $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
            }
        } else {
            $call_status = $userData['event'];
        }
        $call_req_id = $pinNum;
        $where1 = array('status' => $call_status, 'callid' => $call_req_id);
        $arrData = $this->front->get_details('tbl_calltype', $where1);
        if (@$arrData[0]->id <= 0) {
            date_default_timezone_set('Asia/Kolkata');
            $data2 = array(
                'date' => date("Y-m-d H:i:s"),
                'status' => $call_status,
                'callid' => $call_req_id,
                'callHistory' => $postdata
            );

            $calltype = $this->admin->_insertRow('tbl_calltype', $data2);
        }
        
            } else{
          $myfile = fopen(FCPATH."/sparktg/audiocalldata/" . $xnid . ".txt", "w")or die("Unable to open file!");
        fwrite($myfile, json_encode($latestfile));
        fclose($myfile);
        $path = FCPATH."/sparktg/audiocalldata/" . $xnid . ".txt";
        $postdata = file_get_contents($path);
        $userData = json_decode($postdata, 1);
        $userData = json_decode($postdata, 1);
        if ($userData['data'] != '') {
            $callData = json_decode($userData['data'], 1);
            $callDuration = $callData['cdr']['call-duration'];
            $callId = $callData['cdr']['callid'];
            $eventtype = $callData['cdr']['disposition'];
            $call_request_id = $xnid;
            $customer_mobile = $callData['cdr']['customer-number'];
            $astrologer_mobile = $callData['cdr']['agent-number'];
            $call_status = $eventtype;
            if ($eventtype == "answered") {
                $where1 = array('callRequestId' => $call_request_id);
                $arrData = $this->front->get_details('order_history', $where1);                
                $actual_price = $arrData[0]->actual_price;
                $where3 = array('id' => $arrData[0]->astrologer_id);
                $where2 = array('id' => $arrData[0]->customer_id);
                $walletData = $this->front->get_details('author', $where2);
                $walletAstroData = $this->front->get_details('author', $where3);
                $actualPriceInSec = $actual_price / 60;
                $vendor_price = $arrData[0]->vendor_price;
                $vendor_priceInSec = $vendor_price / 60;
                $aMins = intval($callDuration / 60);
                $aSecs = str_pad(($callDuration % 60), 2, '0', STR_PAD_LEFT);
                $fMins = $aMins;
                $fMins = ($aSecs >0) ? $fMins+1 : $fMins;
                $vFmins = ($aMins>5) ? $aMins -1 : $aMins;
                $dMins = ($fMins > 5) ? $fMins-1 : $fMins;
                $callPriceSec = round(($dMins * $actual_price), 2);
                $vFsecs = ($aMins * 60) + $aSecs;
                if($vFsecs>300 && $vFsecs<360){
                   $vFsecs = $vFsecs-$aSecs;
                } else if ($vFsecs>360){
                   $vFsecs=($aSecs>0) ? $vFsecs-$aSecs : $vFsecs-60;
                } else{
                   $vFsecs=$vFsecs;
                }
                $totVendorPrice = round(($vFsecs * $vendor_priceInSec), 2);               
                $hour = gmdate("H", $callDuration);
                $min = gmdate("i", $callDuration);
                $sec = gmdate("s", $callDuration);
                $timeSpend = "";
                if ($hour > 0)
                    $timeSpend .= $hour . " hour";
                if ($min > 0)
                    $timeSpend .= $min . " Min";
                if ($sec > 0)
                    $timeSpend .= $sec . " Sec";
                $call_status1 = "Complete";
                $bookStatus = '1';
                $wallet_balance = $walletData[0]->wallet_balence;
                $wallet_balance = $walletData[0]->wallet_balence;
                $current_bal = $wallet_balance - $callPriceSec;
                $atroWallet_bal = $walletAstroData[0]->wallet_balence;
                $astrocurrent_bal = $atroWallet_bal + $totVendorPrice;
                 $data_cust = array(
                        'wallet_balence' => $current_bal,
                    );
                    $where_cust = array('id' => $walletData[0]->id);
                    $cust_wallet = $this->admin->_updateRowWhere('author', $data_cust, $where_cust);
                    $data_astro = array(
                        'wallet_balence' => $astrocurrent_bal,
                    );
                    $where_astro = array('id' => $walletAstroData[0]->id);
                    $astro_wallet = $this->admin->_updateRowWhere('author', $data_astro, $where_astro);
                    if ($cust_wallet && $astro_wallet) {
                        $data1 = array(
                            'amount' => $callPriceSec,
                            'payment_type' => "Debit",
                            'customer_id' => $walletData[0]->id,
                            'date' => date("Y-m-d"),
                            'order_id' => $arrData[0]->id,
                            'current_belence' => $current_bal
                        );

                        $customer_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
                        $data2 = array(
                            'amount' => $totVendorPrice,
                            'payment_type' => "Cradit",
                            'customer_id' => $walletAstroData[0]->id,
                            'date' => date("Y-m-d"),
                            'order_id' => $arrData[0]->id,
                            'astro_current_bal' => $astrocurrent_bal
                        );
                        $astrologer_wallet_history = $this->admin->_insertRow('wallet_history', $data2);
                        $number1 = $customer_mobile;
                        $number2 = $walletAstroData[0]->mobile;
                        $msg = "Dear " . $walletData[0]->name . ", Your last booking from Onegodmed. Your Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is debited by Rs. " . $callPriceSec;
                        $msg1 = "Dear " . $walletAstroData[0]->name . ", Your last booking from Onegodmed. Customer Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is credited by Rs. " . $totVendorPrice;
                        $this->test_sms($msg, $number1);
                        $this->test_sms($msg1, $number2);
                    }
                $data = array(
                    'bookStatus' => $bookStatus,
                    'call_duration' => $timeSpend,
                    'is_Active' => $call_status1,
                    'service_price' => $callPriceSec,
                    'current_balance' => $current_bal,
                    'vendor_service_price' => $totVendorPrice
                );
                $where = array('callRequestId' => $call_request_id);
                $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
            } else {
                $where1 = array('callRequestId' => $call_request_id);
                $arrData = $this->front->get_details('order_history', $where1);                
                $callCount = $arrData[0]->callCount;
                $where3 = array('id' => $arrData[0]->astrologer_id);
                $where2 = array('id' => $arrData[0]->customer_id);
                $walletData = $this->front->get_details('author', $where2);
                $walletAstroData = $this->front->get_details('author', $where3);
                if($callCount == "1"){
                    $cust_num = $walletData[0]->mobile;
 $call_time = ($arrData[0]->call_duration + 1) * 60;
 $username = $walletAstroData[0]->call_userId;
 $password = $walletAstroData[0]->call_password;
sleep(15);
    $data='number='.$cust_num.'&max-call-duration='.$call_time;
    
    $url = 'https://telephonycloud.co.in/api/v1/calls';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    $result = curl_exec($ch);
    curl_close($ch);
    $arrdata = json_decode($result,1);
    if($arrdata['id'] != ""){
    $data2 = array(
                'callRequestId' => $arrdata['id'],
                 'is_Active' => "Accept",
                 'callCount' => "2"
            );

            $where = array('id' => $arrData[0]->id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    } else{
        $data2 = array(
                'responseCall' => $result,
                'is_Active' => "Cancel"
            );

            $where = array('id' => $order_id);

            $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
    }
                } else{
                    $data = array(
                    'is_Active' => 'Cancel'
                );
                $where = array('callRequestId' => $call_request_id);
                $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
                }
                
            }
        } else {
            $call_status = $userData['event'];
        }
        $call_req_id = $userData['xnid'];
        $where1 = array('status' => $call_status, 'callid' => $call_req_id);
        $arrData = $this->front->get_details('tbl_calltype', $where1);
        if ($arrData[0]->id <= 0) {
            date_default_timezone_set('Asia/Kolkata');
            $data2 = array(
                'date' => date("Y-m-d H:i:s"),
                'status' => $call_status,
                'callid' => $call_req_id,
                'callHistory' => $postdata
            );

            $calltype = $this->admin->_insertRow('tbl_calltype', $data2);
        }  
        }
        
    }

    public function updatecallstatus() {
        return;
        $call_request_id = $this->input->post('request_id');
        $path = base_url()."sparktg/audiocalldata/" . $call_request_id . ".txt";
        $postdata = file_get_contents($path);
        $userData = json_decode($postdata, 1);
        $callData = json_decode($userData['data'], 1);
        $callDuration = $callData['cdr']['call-duration'];
        $callId = $callData['cdr']['callid'];
        $eventtype = $callData['cdr']['disposition'];
        if ($eventtype == "answered") {
            $where1 = array('callRequestId' => $call_request_id, 'customer_id' => $this->session->userdata('id'));
            $arrData = $this->front->get_details('order_history', $where1);
            $actual_price = $arrData[0]->actual_price;
            $actualPriceInSec = $actual_price / 60;
            $callPriceSec = round(($callDuration * $actualPriceInSec), 2);
            $vendor_price = $arrData[0]->vendor_price;
            $vendor_priceInSec = $vendor_price /60;
            $totVendorPrice =  round(($vendor_priceInSec * $callDuration), 2);
            $hour = gmdate("H", $callDuration);
            $min = gmdate("i", $callDuration);
            $sec = gmdate("s", $callDuration);
            $timeSpend = "";
            if($hour > 0)
                $timeSpend .= $hour." hour";
            if($min > 0)
                $timeSpend .= $min." Min";
            if($sec > 0)
                $timeSpend .= $sec." Sec";
            $call_status = "Complete";
            $bookStatus = '1';
            $where2 = array('id' => $this->session->userdata('id'));
            $walletData = $this->front->get_details('author', $where2);
            $wallet_balance = $walletData[0]->wallet_balence;
            $wallet_balance = $walletData[0]->wallet_balence;
            $current_bal = $wallet_balance - $callPriceSec;
            $where3 = array('id' => $arrData[0]->astrologer_id);
            $walletAstroData = $this->front->get_details('author', $where3);
            $atroWallet_bal = $walletAstroData[0]->wallet_balence;
            $astrocurrent_bal = $atroWallet_bal + $totVendorPrice;
            $data = array(
                'bookStatus' => $bookStatus,
                'call_duration' => $timeSpend,
                'is_Active' => $call_status,
                'service_price' => $callPriceSec,
                'current_balance' => $current_bal
            );
            $where = array('callRequestId' => $call_request_id);
            $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
            
           
            if($wallet) {
                $data_cust = array(
                    'wallet_balence' => $current_bal,
                );
                $where_cust = array('id' => $this->session->userdata('id'));
                $cust_wallet = $this->admin->_updateRowWhere('author', $data_cust, $where_cust);
                $data_astro = array(
                    'wallet_balence' => $astrocurrent_bal,
                );
                $where_astro = array('id' => $arrData[0]->astrologer_id);
                $astro_wallet = $this->admin->_updateRowWhere('author', $data_astro, $where_astro);
                if($cust_wallet && $astro_wallet){
                    $data1 = array(
                        'amount' => $callPriceSec,
                        'payment_type' => "Debit",
                        'customer_id' => $this->session->userdata('id'),
                        'date' => date("Y-m-d"),
                        'order_id' => $arrData[0]->id,
                    );

                    $customer_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
                    $data2 = array(
                        'amount' => $totVendorPrice,
                        'payment_type' => "Cradit",
                        'customer_id' => $arrData[0]->astrologer_id,
                        'date' => date("Y-m-d"),
                        'order_id' => $arrData[0]->id,
                    );

                    $astrologer_wallet_history = $this->admin->_insertRow('wallet_history', $data2);

                    $number1 = $this->session->userdata('mobile');

                    $number2 = $walletAstroData[0]->mobile;
                    
                    $msg = "Dear " . $this->session->userdata('name') . ", Your last booking from Onegodmed. Your Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is debited by Rs. ".$callPriceSec;
                    $msg1 = "Dear " . $walletAstroData[0]->name . ", Your last booking from Onegodmed. Customer Booking ID is " . $arrData[0]->booking_no . " for " . $arrData[0]->call_type . " call. Call duration is " . $timeSpend . " . Your Onegodmed wallet is credited by Rs. ".$totVendorPrice;
                    $this->test_sms($msg, $number1);
                    $this->test_sms($msg1, $number2);
                }
            } else{
                
            }
        } else{
            $data = array(
                'is_Active' => 'Cancel'
            );
            $where = array('callRequestId' => $call_request_id);
            $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
            
        }
    }
    public function chat_consult_now() {

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

        $data['categories'] = $this->front->get('categories');

        $data['super_categories'] = $this->front->get('super_categories');

        $data['astrologer'] = $this->front->get('author');
        $data['promotion'] = $this->front->get('tbl_promotion');
        $where = array('user_type' => 'Astrologer', 'chat_status!=' => 'Inactive');

        $data['astro'] = $this->admin->get_chat_order_random('author', $where);

        $check_service = array('is_Active' => 'Accept');
        $data['services'] = $this->front->get_serviceswithoutid();

        $data["check_services"] = $this->front->check_service4('order_history', $check_service);

        $where1 = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->front->get_details('author', $where1);

        $data['title'] = "Chat with Astrologer on Phone & Get Best Online Astrology Predection – Onegodmed";
        $data['meta_tags'] = "Chat with Astrologer on Phone & Get Best Online Astrology Predection – Onegodmed";
        $data['meta_keywords'] = "Astrology, Astrology today, Astrology in Hindi, Astrology in Tamil, Astrologer, Astrologer today, Astrologer Tamil, Horoscope, Horoscope today, Horoscope daily, Horoscope 2020, Kundli Bhagya, Kundli, Kundli match, Zodiac Signs, match making horoscope, matchmaking marriage, Jyotish, Chat with Astrologer";
        $data['meta_description'] = "Chat with Astrologers Online & Take Better Decision in your life. Get Upto 50% Off. Get Instant consultation for Love, Marriage, Career, Finance, etc";
        $data['meta_ogtitle'] = "Chat with Astrologer on Phone & Get Best Online Astrology Predection – Onegodmed";
        $data['meta_ogdescription'] = "Chat with Astrologers Online & Take Better Decision in your life. Get Upto 50% Off. Get Instant consultation for Love, Marriage, Career, Finance, etc";
        $data['meta_ogkeywords'] = "Astrology, Astrology today, Astrology in Hindi, Astrology in Tamil, Astrologer, Astrologer today, Astrologer Tamil, Horoscope, Horoscope today, Horoscope daily, Horoscope 2020, Kundli Bhagya, Kundli, Kundli match, Zodiac Signs, match making horoscope, matchmaking marriage, Jyotish, Chat with Astrologer";
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/chatconsultnow', $data);

        $this->load->view('front/footer', $data);
    }
    
     public function chatastroVendorFilter() {
        
        $astrolanguage = @$this->input->post('astroLang');
        $astroexp = @$this->input->post('astroexp');
        $astroRating = @$this->input->post('astroRating');
        $astroprice = @$this->input->post('astroprice');
        $astroExpertise = @$this->input->post('astroExpertise');
        $searchName = @$this->input->post('searchName');

        $data['astrologer'] = $this->front->get('author');

        $where = array('user_type' => 'Astrologer', 'chat_status!=' => 'Inactive');
        $where2 = "";
        $where3 = "";
        $whereCommon = "";
        if ($astrolanguage != "") {
            $arrAstrolanguage = explode(",", $astrolanguage);
            foreach ($arrAstrolanguage as $value) {
                $where2 .= ($where2 == "") ? " langknown like '%$value%'" : " or langknown like '%$value%'";
            }
            $where2 = "langknown != '' and (" . $where2 . ") and user_type = 'Astrologer' and chat_status != 'Inactive'";
        }
        if ($astroexp != "") {
            $arrAstroexp = explode(",", $astroexp);
            foreach ($arrAstroexp as $value) {
                if ($value > 20)
                    $where3 .= ($where3 == "") ? " CAST(`experience` AS UNSIGNED) >= '$value'" : " or CAST(`experience` AS UNSIGNED) >= '$value'";
                else
                    $where3 .= ($where3 == "") ? " CAST(`experience` AS UNSIGNED) <= '$value'" : " or CAST(`experience` AS UNSIGNED) <= '$value'";
            }
            $where3 = "experience != '' and (" . $where3 . ") and user_type = 'Astrologer' and chat_status != 'Inactive'";
        }
        if ($where2 != "")
            $whereCommon .= ($whereCommon == "") ? $where2 : " and " . $where2;
        if ($where3 != "")
            $whereCommon .= ($whereCommon == "") ? $where3 : " and " . $where3;
        if ($whereCommon == "")
            $data['astro'] = $this->admin->get_chat_order_random('author', $where);
        else
            $data['astro'] = $this->admin->get_chat_order_random('author', $whereCommon);
        //print_r($data['astro']);
        if ($astroRating != "") {
            $arrAstroRating = explode(",", $astroRating);
            $arrAstroData = array();
            //$data['astro'] = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value1) {
                $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $value1->id . "'")->result();
                $rating = (int) $rating1[0]->rating;
                $addData = 0;
                //print_r($arrAstroRating);
                foreach ($arrAstroRating as $value) {
                    if ($value > 0) {
                        if ($value <= $rating)
                            $addData = 1;
                    } else {
                        $addData = 1;
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value1;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        $data['services'] = $this->front->get_serviceswithoutid();
        if ($astroprice != "") {
            $arrAstroPrice = explode(",", $astroprice);
            $arrAstroData = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value) {
                $addData = 0;
                foreach ($arrAstroPrice as $value1) {
                    foreach ($data['services'] as $value2) {
                        if ($value2->astrologer_id == $value->id) {
                            $final_price = $value2->price;
                            if ($value1 > 0) {
                                if ($value1 == 20) {
                                    if ($value1 >= $final_price)
                                        $addData = 1;
                                }
                                if ($value1 == 21) {
                                    if ($final_price >= 21 && $final_price <= 50)
                                        $addData = 1;
                                }
                                if ($value1 == 50) {
                                    if ($final_price >= 50)
                                        $addData = 1;
                                }
                            } else {
                                $addData = 1;
                            }
                        }
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        if ($astroExpertise != "") {
            $arrAstroExpertise = explode(",", $astroExpertise);
            $arrAstroData = array();
            $i = 0;
            foreach ($data['astro'] as $key => $value) {
                $addData = 0;
                foreach ($arrAstroExpertise as $value1) {
                    foreach ($data['services'] as $value2) {
                        if ($value2->astrologer_id == $value->id) {
                            $final_service = $value2->service_name;

                            if ($value1 != "") {
                                if ($final_service == $value1) {
                                    $addData = 1;
                                }

                                if (strpos($value->expertise, $value1) !== false) {
                                    $addData = 1;
                                }
                            } else {
                                $addData = 1;
                            }
                        }
                    }
                }
                if ($addData) {
                    $arrAstroData[$i] = $value;
                    $i++;
                }
            }
            $data['astro'] = $arrAstroData;
        }
        if ($searchName != "") {
            $i = 0;
            //echo "<pre/>";
            //print_r($data['astro']);
            $newarrAstroData = array();
            //$astroDetails = $this->front->checkAstro($searchName);
            foreach ($data['astro'] as $value) {
                //echo $value->name."<br/>";
                if (strpos(strtolower($value->name), strtolower($searchName)) !== false) {
                    $newarrAstroData[$i] = $value;
                }
                $i++;
            }
            $data['astro'] = @$newarrAstroData;
        }
        $check_service = array('is_Active' => 'Accept');

        $data["check_services"] = $this->front->check_service4('order_history', $check_service);

        $where1 = array('id' => $this->session->userdata('id'));

        $data['wallet_balence'] = $this->front->get_details('author', $where1);

        $this->load->view('front/chatastroVendorFilter', $data);
    }
    
     public function test_call_sms($msg = '', $number1 = '', $min='') {
        $newMob = "91".$number1;
        $senderId = "GODMED";
        $rndno = "00".$min;
        $message = urlencode($msg.' '. $rndno);
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
        return $response;
    }
    
    public function page_not_found() {
    $this->load->view('admin/404');
}


//Add function for Ajax to manage Packages recharges and manage it.

public function  packageRecharge(){


if($_POST){

//Check customer and pack for first time

$pCheck = $this->front->pack_exists($this->session->userdata('id'));
$ac=0;

if($pCheck){

if($_POST['pack_amt'] == '200'){
   $ac = 0;
   }else if($_POST['pack_amt'] == '500'){
   $ac = ($_POST['pack_amt'] * 5)/100;
   }



}else{


if($_POST['pack_amt'] == '200'){
   $ac = ($_POST['pack_amt'] * 100)/100;
   }else if($_POST['pack_amt'] == '500'){
   $ac = ($_POST['pack_amt'] *  40)/100;
   }


}


//1000 And 1500
if($_POST['pack_amt'] == '1000'){
   $ac = ($_POST['pack_amt'] * 10)/100;
   }else if($_POST['pack_amt'] == '1500'){
   $ac = ($_POST['pack_amt'] *  10)/100;
   }

if($_POST['pack_amt'] >= '2000'){
   $ac = ($_POST['pack_amt'] * 20)/100;
   }



if($ac){
  $tac =  $_POST['pack_amt'] + $ac;
}else{

  $tac = $_POST['pack_amt'];

}

//Totalamount 
$gst =   ($_POST['pack_amt'] * 18)/100;


$totalAmt = $_POST['pack_amt'] + $gst;


//Array for customer details With packages

$arrP =  array('package_name'=>$_POST['pack_name'],
	            'pack_amt'=>$_POST['pack_amt'],
	            'gst_amt'=>$gst,
	            'ac_update'=>$tac,
	            'cash_back'=>$ac,
	            'total_amount'=>$totalAmt,
	            'customer_id'=>$this->session->userdata('id'),
	            'created_at'=>date('Y-m-d')

);	


$this->front->insertPackages($arrP);


//forAlert data...

$data = $this->front->getDetailsByPack($this->session->userdata('id'),$_POST['pack_name']);


//Update wallet as per current reacharge 
//$arrWallet = array('wallet_balence'=>$tac);
//$this->front->updateRechargeWallet($arrWallet);

echo json_encode($data);

}else{

  return false;


}




}







}
?>