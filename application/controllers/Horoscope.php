<?php
//we need to start session in order to access it through CI

Class Horoscope extends CI_Controller {
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
    $this->load->view('front/header');

$this->load->view('front/free-report');

$this->load->view('front/footer');
}

public function panchang() {
    
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);
 require_once 'astro-api/src/VedicRishiClient.php';


$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";

$date = 6;
$month = 2;
$year = 2020;
$hour =14;
$minute =3;
$latitude =28.6764;
$longitude = 77.2074;
$timezone = 5.30;
$vedicRishi = new VedicRishiClient($userId, $apiKey);
echo $yesterdaysPrediction = $vedicRishi->getAdvancedPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
exit();
$data['horodata'] = json_decode($todaysPrediction, 1);
$data['yesterdayhorodata'] = json_decode($yesterdaysPrediction, 1);
$data['tomorrowhorodata'] = json_decode($tomorrowsPrediction, 1);

$data['title'] = ucfirst($data['horodata']['sun_sign'])." Daily horoscope";
$data['meta_tags'] = ucfirst($data['horodata']['sun_sign'])." Daily horoscope";
$data['meta_keywords'] = ucfirst($data['horodata']['sun_sign'])." Daily horoscope";
$data['meta_description'] = ucfirst($data['horodata']['sun_sign'])." Daily horoscope";

$this->load->view('front/header', $data);

$this->load->view('horoscope/horoscope-data', $data);

$this->load->view('front/footer',$data);

}


}