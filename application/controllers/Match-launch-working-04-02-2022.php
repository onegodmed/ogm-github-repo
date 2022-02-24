<?php
//we need to start session in order to access it through CI

Class Match extends CI_Controller {
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
    if($this->session->userdata('matgname') == ''){
        redirect('');
    }
require_once 'astro-api/src/VedicRishiClient.php';


$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";
 
       $matname = $this->session->userdata('matname');
       
 $matbdate = $this->session->userdata('matbdate');


 $matbmonth = $this->session->userdata('matbmonth');
 $matbyear= $this->session->userdata('matbyear');

 $matbhh =$this->session->userdata('matbhh');

 $matbmm =$this->session->userdata('matbmm');

$matbss =$this->session->userdata('matbss');
$matbbirth =$this->session->userdata('matbbirth');

 $matgname =$this->session->userdata('matgname');

 $matgdate =$this->session->userdata('matgdate');
 $matgmonth =$this->session->userdata('matgmonth');
 $matgyear =$this->session->userdata('matgyear');

 $matghh =$this->session->userdata('matghh');
 $matgmm =$this->session->userdata('matgmm');

$matgss =$this->session->userdata('matgss');
 $matgbirth =$this->session->userdata('matgbirth');

$matgphone =$this->session->userdata('matgphone');
$matgemail =$this->session->userdata('matgemail');

$vedicRishi = new VedicRishiClient($userId, $apiKey);
$boylatlong = $vedicRishi->getGeoDetails($matbbirth, 1);
$data['boylatlong'] = json_decode($boylatlong, 1);
$girllatlong = $vedicRishi->getGeoDetails($matgbirth, 1);
$data['girllatlong'] = json_decode($girllatlong, 1);

$data2 = array(
                'm_name' => $matname,
                'm_dob' => $matbyear.$matbmonth.$matbdate,
                'm_place' => $matbbirth,
                'f_name' => $matgname,
                'f_dob' => $matgyear.$matgmonth.$matgdate,
                'f_place' => $matgbirth,
                'mobile' => $matgphone,
                'email' => $matgemail,
                'created' => date("Y-m-d H:i:s")
            );

            $answer = $this->admin->_insertRow('tbl_match', $data2);

$data1 = array(
'date' => $matbdate,
'month' => $matbmonth,
'year' => $matbyear,
'hour' => $matbhh,
'minute' => $matbmm,
'latitude' => $data['boylatlong']['geonames'][0]['latitude'],
'longitude' => $data['boylatlong']['geonames'][0]['longitude'],
'timezone' => 5.5,
'name' => $matname
);
$data2 = array(
'date' => $matgdate,
'month' => $matgmonth,
'year' => $matgyear,
'hour' => $matghh,
'minute' => $matgmm,
'latitude' => $data['girllatlong']['geonames'][0]['latitude'],
'longitude' => $data['girllatlong']['geonames'][0]['longitude'],
'timezone' => 5.5,
'name' =>$matgname
);

$boybirthchat = $vedicRishi->getChartById($data1['date'], $data1['month'], $data1['year'], $data1['hour'], $data1['minute'], $data1['latitude'], $data1['longitude'], $data1['timezone'], "#333333", "#333333", "#333333", 'D1');
$data['boybirthchat'] = json_decode($boybirthchat, 1);

$girlbirthchat = $vedicRishi->getChartById($data2['date'], $data2['month'], $data2['year'], $data2['hour'], $data2['minute'], $data2['latitude'], $data2['longitude'], $data2['timezone'], "#333333", "#333333", "#333333", 'D1');
$data['girlbirthchat'] = json_decode($girlbirthchat, 1);

$boynamvchat = $vedicRishi->getChartById($data1['date'], $data1['month'], $data1['year'], $data1['hour'], $data1['minute'], $data1['latitude'], $data1['longitude'], $data1['timezone'], "#333333", "#333333", "#333333", 'D9');
$data['boynamvchat'] = json_decode($boynamvchat, 1);

$girlnamvchat = $vedicRishi->getChartById($data2['date'], $data2['month'], $data2['year'], $data2['hour'], $data2['minute'], $data2['latitude'], $data2['longitude'], $data2['timezone'], "#333333", "#333333", "#333333", 'D9');
$data['girlnamvchat'] = json_decode($girlnamvchat, 1);

$boymoonchat = $vedicRishi->getChartById($data1['date'], $data1['month'], $data1['year'], $data1['hour'], $data1['minute'], $data1['latitude'], $data1['longitude'], $data1['timezone'], "#333333", "#333333", "#333333", 'MOON');
$data['boymoonchat'] = json_decode($boymoonchat, 1);

$girlmoonchat = $vedicRishi->getChartById($data2['date'], $data2['month'], $data2['year'], $data2['hour'], $data2['minute'], $data2['latitude'], $data2['longitude'], $data2['timezone'], "#333333", "#333333", "#333333", 'MOON');
$data['girlmoonchat'] = json_decode($girlmoonchat, 1);

$matchBirthDetails = $vedicRishi->matchBirthDetails($data1, $data2);
$data['matchBirthDetails'] = json_decode($matchBirthDetails, 1);


$getMatchMakingPercentage = $vedicRishi->getMatchMakingPercentage($data1, $data2);
$data['getMatchMakingPercentage'] = json_decode($getMatchMakingPercentage, 1);

$matchHoroscope = $vedicRishi->matchHoroscope($data1, $data2);
$data['matchHoroscope'] = json_decode($matchHoroscope, 1);
$getpPartnerReport = $vedicRishi->getpPartnerReport($data1, $data2);
$data['getpPartnerReport'] = json_decode($getpPartnerReport, 1);

$getMatchSimpleReport = $vedicRishi->getMatchSimpleReport($data1, $data2);
$data['getMatchSimpleReport'] = json_decode($getMatchSimpleReport, 1);

$matchPlanetDetails = $vedicRishi->matchPlanetDetails($data1, $data2);
$data['matchPlanetDetails'] = json_decode($matchPlanetDetails, 1);
$matchAstroDetails = $vedicRishi->matchAstroDetails($data1, $data2);
$data['matchAstroDetails'] = json_decode($matchAstroDetails, 1);

$matchAshtakootPoints = $vedicRishi->matchAshtakootPoints($data1, $data2);
$data['matchAshtakootPoints'] = json_decode($matchAshtakootPoints, 1);

$matchAstroDetails = $vedicRishi->matchAstroDetails($data1, $data2);
$data['matchAstroDetails'] = json_decode($matchAstroDetails, 1);
$getMatchMakingReport = $vedicRishi->getMatchMakingReport($data1, $data2);
$data['getMatchMakingReport'] = json_decode($getMatchMakingReport, 1);

$getMatchManglikReport = $vedicRishi->getMatchManglikReport($data1, $data2);
$data['getMatchManglikReport'] = json_decode($getMatchManglikReport, 1);
$matchObstructions = $vedicRishi->matchObstructions($data1, $data2);
$data['matchObstructions'] = json_decode($matchObstructions, 1);
$getMatchSimpleReport = $vedicRishi->getMatchSimpleReport($data1, $data2);
$data['getMatchSimpleReport'] = json_decode($getMatchSimpleReport, 1);

//EXTRA APIS


$data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');
$data['title'] = "kundali matching - Online Kundali Matching for Marriage - Onegodmed";
        $data['meta_tags'] = "Get Free Match Making";
        $data['meta_keywords'] = "Get Free Match Making";
        $data['meta_description'] = "Find the right partner to secure a happy life with the Free Online kundali Match making service for Marriage. Check Best kundali matching matching by name and date of birth.";

$data['resultSet'] = $this->front->get_header_price_details();


$this->load->view('front/header', $data);

$this->load->view('front/match-making', $data);

$this->load->view('front/footer',$data);

}

public function details() {
     $name = $this->input->post('bname');
   
     $bdate = $this->input->post('bdate');
      $bmonth = $this->input->post('bmonth');
       $byear = $this->input->post('byear');
        $bhh= $this->input->post('bhh');
         $bmm = $this->input->post('bmm');
         
         $bss= $this->input->post('bss');
         $bbirth = $this->input->post('bbirth');
         $gname = $this->input->post('gname');
         $gdate = $this->input->post('gdate');
         
         $gmonth = $this->input->post('gmonth');
         $gyear = $this->input->post('gyear');
         
 $ghh = $this->input->post('ghh');
         $gmm = $this->input->post('gmm');
         $gss = $this->input->post('gss');
         
         $gbirth = $this->input->post('gbirth');
         $gphone= $this->input->post('gphone');
         $gemail = $this->input->post('gemail');
         
$array = array(

        'matname'         => $name,
        'matbdate' =>      $bdate,
        'matbmonth' =>      $bmonth,
        'matbyear'         => $byear,
        'matbhh'         => $bhh,
        'matbmm'         => $bmm ,
        'matbss'         => $bss,
        'matbbirth'         => $bbirth,
        'matgname'         => $gname ,
        'matgdate'         => $gdate,
        'matgmonth'         => $gmonth,
        'matgyear'         => $gyear,
        'matghh'         => $ghh,
        'matgmm' =>      $gmm,
        'matgss' =>      $gss,
        'matgbirth'         => $gbirth,
        'matgphone'         => $gphone,
        'matgemail'         => $gemail 
        
       
        
);

$this->session->set_userdata($array);
          echo json_encode(array('status'=>'success'));
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
                        "timezone"           => @$ipdat->geoplugin_timezone,
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

public function matchform() {

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

        $data['title'] = "kundali matching - Online Kundali Matching for Marriage - Onegodmed";
        $data['meta_tags'] = "Get Free Match Making";
        $data['meta_keywords'] = "Get Free Match Making";
        $data['meta_description'] = "Find the right partner to secure a happy life with the Free Online kundali Match making service for Marriage. Check Best kundali matching matching by name and date of birth.";

        $data['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/matchform', $data);

        $this->load->view('front/footer', $data);
    }
    
}