<?php
//we need to start session in order to access it through CI

Class Horoscopes extends CI_Controller {
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

$data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');

$where = array('year' => date('Y'));

if(date('W') == 01){
    $weekno = 53;
} else{
    $weekno = date('W');
}

$where1 = array('year' => date('Y'));

 $where2 = array('year' => date('Y'));

$data['horodata'] = $this->admin->get_details('yearly_horoscope', $where);
$data['weeklyhorodata'] = $this->admin->get_details('yearly_horoscope', $where1);
$data['monthlyhorodata'] = $this->admin->get_details('yearly_horoscope', $where2);


$data['title'] = "Free Horscope | Today's Horscope | Daily Astrology Horscope";
$data['meta_tags'] = "horoscope by date of birth, horoscope prediction by date of birth, horoscope making";
$data['meta_keywords'] = "horoscope today,today's horoscope,todays horoscope,today horoscope,free daily horoscope,astrology horoscope,
horoscopes today,horoscope for today,daily astrology,horoscope daily,daily horoscope today,today horoscope";
$data['meta_description'] = "Horoscope - Free Daily Horoscopes predictions for all Zodiac Signs available at Onegodmed.com. Call us on +91 9169-305-305 for consultation with the professional & best astrologers in India.";
$data['resultSet'] = $this->front->get_header_price_details();
$this->load->view('front/header', $data);

$this->load->view('horoscope/index', $data);

$this->load->view('front/footer',$data);

}

public function dailyhoroscope() {
    
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);
 require_once 'astro-api/src/VedicRishiClient.php';


$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";

$data = array(
    'timezone' => 5.5
);
$vedicRishi = new VedicRishiClient($userId, $apiKey);
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);

$todaysPrediction = $vedicRishi->getTodaysPrediction($rashi, $data['timezone']);
$tomorrowsPrediction = $vedicRishi->getTomorrowsPrediction($rashi, $data['timezone']);
$yesterdaysPrediction = $vedicRishi->getYesterdaysPrediction($rashi, $data['timezone']);

$data['horodata'] = json_decode($todaysPrediction, 1);
$data['yesterdayhorodata'] = json_decode($yesterdaysPrediction, 1);
$data['tomorrowhorodata'] = json_decode($tomorrowsPrediction, 1);

$data['title'] = ucfirst(@$data['horodata']['sun_sign'])." Daily horoscope";
$data['meta_tags'] = ucfirst(@$data['horodata']['sun_sign'])." Daily horoscope";
$data['meta_keywords'] = ucfirst(@$data['horodata']['sun_sign'])." Daily horoscope";
$data['meta_description'] = ucfirst(@$data['horodata']['sun_sign'])." Daily horoscope";
$data['resultSet'] = $this->front->get_header_price_details();
$this->load->view('front/header', $data);

$this->load->view('horoscope/horoscope-data', $data);

$this->load->view('front/footer',$data);

}

public function weeklyhoroscope() {
    
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);
$tblname = "";
if(date('W') == 01){
    $weekno = 53;
} else{
    $weekno = date('W');
}
        if($horotype == "daily"){
            $tblname = "daily_horoscope";
        } else if($horotype == "weekly"){
            $tblname = "weekly_horoscope";
            $where = array('weekNo' => $weekno, 'year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        } else if($horotype == "monthly"){
            $tblname = "monthly_horoscope";
        } else if($horotype == "yearly"){
            $tblname = "yearly_horoscope";
        }
$data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');

$data['horodata'] = $this->admin->get_details($tblname, $where);

$where1 = array('date' => date('Y-m-d'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);

$data['todayhorodata'] = $this->admin->get_details('daily_horoscope', $where1);

$data['title'] = $data['horodata'][0]->title;
$data['meta_tags'] = $data['horodata'][0]->meta_tags;
$data['meta_keywords'] = $data['horodata'][0]->meta_keywords;
$data['meta_description'] = $data['horodata'][0]->meta_description;
$data['resultSet'] = $this->front->get_header_price_details();
$this->load->view('front/header', $data);

$this->load->view('horoscope/weekly-horoscope', $data);

$this->load->view('front/footer',$data);

}

public function monthlyhoroscope() {
 require_once 'astro-api/src/VedicRishiClient.php';
$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
$vedicRishi = new VedicRishiClient($userId, $apiKey);

$data = array(
    'timezone' => 5.5
);   
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);

$monthlyPrediction = $vedicRishi->getMonthlyPrediction($rashi, $data['timezone']);
$data['horodata'] = json_decode($monthlyPrediction, 1);

$data['title'] = ucfirst($data['horodata']['sun_sign'])." Monthly horoscope";
$data['meta_tags'] = ucfirst($data['horodata']['sun_sign'])." Monthly horoscope";
$data['meta_keywords'] = ucfirst($data['horodata']['sun_sign'])." Monthly horoscope";
$data['meta_description'] = ucfirst($data['horodata']['sun_sign'])." Monthly horoscope";
$data['resultSet'] = $this->front->get_header_price_details();
$this->load->view('front/header', $data);

$this->load->view('horoscope/monthly-horoscope', $data);

$this->load->view('front/footer',$data);

}

public function yearlyhoroscope() {
    
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);
$tblname = "";
        if($horotype == "daily"){
            $tblname = "daily_horoscope";
        } else if($horotype == "weekly"){
            $tblname = "weekly_horoscope";
        } else if($horotype == "monthly"){
            $tblname = "monthly_horoscope";
        } else if($horotype == "yearly"){
            $tblname = "yearly_horoscope";
             $where = array('year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        }
$data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');

$data['horodata'] = $this->admin->get_details($tblname, $where);

$where1 = array('date' => date('Y-m-d'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);

$data['todayhorodata'] = $this->admin->get_details('daily_horoscope', $where1);

$where2 = array('weekNo' => date('W'), 'year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);

$data['weeklyhorodata'] = $this->admin->get_details('weekly_horoscope', $where2);

$where3 = array('monthNo' => date('m'), 'year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);

$data['monthlyhorodata'] = $this->admin->get_details('monthly_horoscope', $where3);

 $where4 = array('year' => date("Y",strtotime("+1 year")), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);

$data['nextyeardata'] = $this->admin->get_details($tblname, $where4);

$data['title'] = @$data['horodata'][0]->title;
$data['meta_tags'] = @$data['horodata'][0]->meta_tags;
$data['meta_keywords'] = @$data['horodata'][0]->meta_keywords;
$data['meta_description'] = @$data['horodata'][0]->meta_description;
$data['resultSet'] = $this->front->get_header_price_details();
$this->load->view('front/header', $data);

$this->load->view('horoscope/yearly-horoscope', $data);

$this->load->view('front/footer',$data);

}

public function catdatahoroscope() {
    
$rashitype = $this->uri->segment(2);
$horotype =$this->uri->segment(3);
$rashi = $this->uri->segment(4);
$subdata = $this->uri->segment(5);
$tblname = "";
        if($horotype == "daily"){
           $tblname = "daily_horoscope";
            $where = array('date' => date('Y-m-d'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        } else if($horotype == "weekly"){
            $tblname = "weekly_horoscope";
            $where = array('weekNo' => date('W'), 'year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        } else if($horotype == "monthly"){
            $tblname = "monthly_horoscope";
            $where = array('monthNo' => date('m'), 'year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        } else if($horotype == "yearly"){
            $tblname = "yearly_horoscope";
            $where = array('year' => date('Y'), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        } else if($horotype == "yearly2020"){
            $tblname = "yearly_horoscope";
            $where = array('year' => date("Y",strtotime("+1 year")), 'rashi_name' => $rashi, 'rashi_type' => $rashitype);
        }
$data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');

$data['horodata'] = $this->admin->get_details($tblname, $where);

$data['title'] = $data['horodata'][0]->title;
$data['meta_tags'] = $data['horodata'][0]->meta_tags;
$data['meta_keywords'] = $data['horodata'][0]->meta_keywords;
$data['meta_description'] = $data['horodata'][0]->meta_description;
$data['resultSet'] = $this->front->get_header_price_details();
$this->load->view('front/header', $data);

$this->load->view('horoscope/horoscope-sub', $data);

$this->load->view('front/footer',$data);

}

}