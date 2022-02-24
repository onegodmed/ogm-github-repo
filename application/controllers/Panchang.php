<?php
//we need to start session in order to access it through CI

Class Panchang extends CI_Controller {
  public function __construct() {

        //Add parent controller contructor

        parent::__construct();

        $this->load->model('front_model', 'front');

        $this->load->model('Admin_model', 'admin');

        $this->load->library('form_validation');

        $this->load->library('cart');
        }

// Show login page
public function index() {


require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");

$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l');
$date = date('d');

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];

$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
@$panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['panchang'] = json_decode($panchang, 1);


    }
    else{
$day = date('l');
$date = $this->session->userdata('day');

 $month = $this->session->userdata('month');

$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

@$panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['panchang'] = json_decode($panchang, 1);

$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/panchang', $data);
$this->load->view('front/footer',$data);

}


public function panchangprevdata() {
    require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l')-1;
$date = date('d')-1;

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
@$panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['panchang'] = json_decode($panchang, 1);


    }
    else{

$day = date('l');
$date = $this->session->userdata('day')-1;

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

@$panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['panchang'] = json_decode($panchang, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}
$data['title'] = "Free Panchang, DailyPanchang at onegodmed.com";
$data['meta_tags'] = "Free Panchang, DailyPanchang at onegodmed.com";
$data['meta_keywords'] = "Free Panchang, DailyPanchang at onegodmed.com";
$data['meta_description'] = "Onegodmed.com provide 'Free Daily Panchang' provides you with the Panchanga information of a particular day. According to Vedic astrology.";
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/panchang', $data);
$this->load->view('front/footer',$data);

}

public function panchangnextdata() {
    require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l')+1;
$date = date('d')+1;

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
$panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['panchang'] = json_decode($panchang, 1);


    }
    else{

$day = date('l');
$date = $this->session->userdata('day')+1;

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

$panchang = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['panchang'] = json_decode($panchang, 1);


$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/panchang', $data);
$this->load->view('front/footer',$data);

}


public function hora() {

    
require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l');
$date = date('d');

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
$hora= $vedicRishi->getHoraMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['hora'] = json_decode($hora, 1);
}
else{
$day = date('l');
$date = $this->session->userdata('day');

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');

$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

$hora= $vedicRishi->getHoraMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['hora'] = json_decode($hora, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/hora',$data);
$this->load->view('front/footer',$data);

}

public function horaprevdata() {
    require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l');
$date = date('d')-1;

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
$hora= $vedicRishi->getHoraMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['hora'] = json_decode($hora, 1);
}
else{
$day = date('l');
$date = $this->session->userdata('day')-1;

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

$hora= $vedicRishi->getHoraMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['hora'] = json_decode($hora, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/hora', $data);
$this->load->view('front/footer',$data);

}
public function horanextdata() {
     require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l');
$date = date('d')+1;

$month = date('m')+1;
$year = date('Y')+1;
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
$hora= $vedicRishi->getHoraMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['hora'] = json_decode($hora, 1);
}
else{
$day = date('l');
$date = $this->session->userdata('day')+1;

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

$hora= $vedicRishi->getHoraMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['hora'] = json_decode($hora, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}

$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/hora', $data);
$this->load->view('front/footer',$data);

}


public function chaughadiya() {
    
require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l');
$date = date('d');

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;

$chaughadiya= $vedicRishi->getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['chaughadiya'] = json_decode($chaughadiya, 1);
}
else{
$day = date('l');
$date = $this->session->userdata('day');

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);

$chaughadiya= $vedicRishi->getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['chaughadiya'] = json_decode($chaughadiya, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;
}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/chaughadiya',$data);
$this->load->view('front/footer',$data);
}

public function previousdata() {
    
    
require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l')-1;
$date = date('d')-1;

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;

$chaughadiya= $vedicRishi->getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['chaughadiya'] = json_decode($chaughadiya, 1);


    }
    else{

$day = date('l');
$date = $this->session->userdata('day')-1;

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);


$chaughadiya= $vedicRishi->getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['chaughadiya'] = json_decode($chaughadiya, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;

}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/chaughadiya', $data);
$this->load->view('front/footer',$data);


}

public function nextdata() {
    require_once 'astro-api/src/VedicRishiClient.php';

$user_ip = $this->getUserIP();
$Ipdata = $this->ip_info($user_ip, "Location");
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);
date_default_timezone_set($Ipdata['timezone']);
if($this->session->userdata('place') == ""){
       $day = date('l')+1;
$date = date('d')+1;

$month = date('m');
$year = date('Y');
$hour =date('H');
$minute =date('i');
$latitude =$Ipdata['latitude'];
$longitude = $Ipdata['longitude'];
$timezone = 5.30;
$location = $Ipdata['city'].', '.$Ipdata['country'];
$language = "en";
$language=$vedicRishi->setLanguage($language);
$data['language'] = json_decode($language, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;

$chaughadiya= $vedicRishi->getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['chaughadiya'] = json_decode($chaughadiya, 1);


    }
    else{

$day = date('l');
$date = $this->session->userdata('day')+1;

$month = $this->session->userdata('month');
$year = $this->session->userdata('year');
$location= $this->session->userdata('place');
$language= $this->session->userdata('language');
$hour =date('H');
$minute =date('i');
$getGeoDetails = $vedicRishi->getGeoDetails($location, 1);
$data['getGeoDetails'] = json_decode($getGeoDetails, 1);
$latitude =$data['getGeoDetails']['geonames'][0]['latitude'];
$longitude = $data['getGeoDetails']['geonames'][0]['longitude'];
$timezone = 5.30;
$city = $Ipdata['city'].', '.$Ipdata['country'];
$setLanguage=$vedicRishi->setLanguage($language);
$data['setLanguage'] = json_decode($setLanguage, 1);


$chaughadiya= $vedicRishi->getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['chaughadiya'] = json_decode($chaughadiya, 1);
$data['d']=$date;
$data['m']=$month;
$data['y']=$year;
$data['day']=$day;
$data['location']=$location;
$data['language']=$language;

}
$data ['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);
$this->load->view('front/chaughadiya', $data);
$this->load->view('front/footer',$data);

}


function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
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
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
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
                        "latitude"           => @$ipdat->geoplugin_latitude,
                        "longitude"          => @$ipdat->geoplugin_longitude,
                        "city"           => @$ipdat->geoplugin_city,
                        "country"           => @$ipdat->geoplugin_countryName,
                        "timezone"           => @$ipdat->geoplugin_timezone
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

public function getdetails() {
       $dmy = $this->input->post('dmy');



        //$date = str_replace("/", "-", $date);
      $date = explode('-', $dmy);

    
    $year = $date[0];
 $month  = $date[1];
 $day  = $date[2];

   
      $place = $this->input->post('place');
       $language = $this->input->post('language');
       
       
         
$array = array(

       
        'day'         => $day,
        'month' =>      $month,
        'year' =>      $year,
        'place'         => $place,
        'language'         => $language
        
        
       
        
);

$this->session->set_userdata($array);
          echo json_encode(array('status'=>'success'));
}




public function details() {
    $data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');
$data['title'] = "Panchang -  Panchangam,  Hindu Panchang Calendar 2019 for worldwide";
$data['meta_tags'] = "panchang, online panchang, hindu calendar, panchangam";
$data['meta_keywords'] = "panchang, online panchang, hindu calendar, panchangam";
$data['meta_description'] = "Panchang - A part of the Hindu Vedic astrology, Panchang helps in identifying auspicious and prominent hours of times to perform beneficial deeds";

$this->load->view('front/header', $data);

$this->load->view('front/panchang-details', $data);

$this->load->view('front/footer',$data);
}

}