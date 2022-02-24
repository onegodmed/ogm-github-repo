<?php
//we need to start session in order to access it through CI

Class Numerology extends CI_Controller {
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
$data['title'] = "Numerology Name Calculator";
$data['meta_tags'] = "What Mystical Character Are You As Revealed By YOUR Numbers?";
$data['meta_keywords'] = "numerology name calculator";
$data['meta_description'] = "Talk to the best numerologist in India to find your magical number at Onegodmed. Consult with professional numerologist to know your lucky number.";
$data['resultSet'] = $this->front->get_header_price_details();
$data['countrydata'] = $this->front->getcountry('Country_codes');
$this->load->view('front/header', $data);

$this->load->view('front/numerology', $data);

$this->load->view('front/footer',$data);

}
public function details() {
    $dateofbirth = $this->input->post('dateofbirth');
$dateArray = date_parse_from_format('d-m-Y', $dateofbirth);
$date = $dateArray['day'];
$month = $dateArray['month'];
$year = $dateArray['year'];
$name = $this->input->post('name');
$array = array(

        'date'         => $date,
        'month' =>      $month,
        'year' =>      $year,
        'custname' =>      $name
       
        
);
          $this->session->set_userdata($array);
          echo json_encode(array('status'=>'success'));
}
public function numerodetails() {
    

    if($this->session->userdata('custname') == ""){
        // redirect('numerology');
    }

    require_once 'astro-api/src/VedicRishiClient.php';

    if($this->session->userdata('user_ip') == ""){
    
            $user_ip = $this->getUserIP();
            // alert("USER IP" . $user_ip);
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
    
        $userId = "606049";
        $apiKey = "fe41fc85921b43dd75e4202569b41bb0";
        $vedicRishi = new VedicRishiClient($userId, $apiKey);

        // date_default_timezone_set($this->session->userdata('timezone')); 
        date_default_timezone_set('Asia/Kolkata');
        // date_default_timezone_set($Ipdata['timezone']); 

        $date = $this->session->userdata('date');
        $month = $this->session->userdata('month');
        $year = $this->session->userdata('year');
        $name = $this->session->userdata('custname');
    
        $numerology = $vedicRishi->getNumeroReport($date, $month, $year, $name);
        $data['numerology'] = json_decode($numerology, 1);

        $dailynumerology = $vedicRishi->getNumeroDaily($date, $month, $year, $name);
        $data['dailynumerology'] = json_decode($dailynumerology, 1);

        $tablenumerology = $vedicRishi->getNumeroTable($date, $month, $year, $name);
        $data['tablenumerology'] = json_decode($tablenumerology, 1);

        $getNumeroFavTime = $vedicRishi->getNumeroFavTime($date, $month, $year, $name);
        $data['getNumeroFavTime'] = json_decode($getNumeroFavTime, 1);

        $getNumeroPlaceVastu = $vedicRishi->getNumeroPlaceVastu($date, $month, $year, $name);
        $data['getNumeroPlaceVastu'] = json_decode($getNumeroPlaceVastu, 1);

        $getNumeroFastsReport = $vedicRishi->getNumeroFastsReport($date, $month, $year, $name);
        $data['getNumeroFastsReport'] = json_decode($getNumeroFastsReport, 1);

        $getNumeroFavLord = $vedicRishi->getNumeroFavLord($date, $month, $year, $name);
        $data['getNumeroFavLord'] = json_decode($getNumeroFavLord, 1);

        $getNumeroFavMantra = $vedicRishi->getNumeroFavMantra($date, $month, $year, $name);
        $data['getNumeroFavMantra'] = json_decode($getNumeroFavMantra, 1);                                                                                                                
    
        $data['categories'] = $this->front->get('categories');

        $data['super_categories'] = $this->front->get('super_categories');

        $data['astrologer'] = $this->front->get('author');
        $data['title'] = "Numerology Calculator | Business Numerology | Children Numerology";
        $data['meta_tags'] = "What Mystical Character Are You As Revealed By YOUR Numbers?";
        $data['meta_keywords'] = "numerology name calculator";
        $data['meta_description'] = "Discover the Patterns in Your Birth Date and Name. GET A FREE NUMEROLOGY REPORT. Free service provided by onegodmed.com.";
        $data['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
    

        $this->load->view('front/header', $data);

        $this->load->view('front/numero-details', $data);

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
}