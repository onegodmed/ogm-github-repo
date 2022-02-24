<?php
//we need to start session in order to access it through CI

Class Kundali extends CI_Controller {
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
	if($this->session->userdata('kunname') == ""){
        redirect('');
    }

require_once 'astro-api/src/VedicRishiClient.php';


$userId = "606049";
$apiKey = "fe41fc85921b43dd75e4202569b41bb0";

$date = $this->session->userdata('kundate');


$month = $this->session->userdata('kunmonth');
$year = $this->session->userdata('kunyear');
$hour =$this->session->userdata('kunhr');

$minute =$this->session->userdata('kunmm');
$second =$this->session->userdata('kunss');
$place =$this->session->userdata('kunbirthplace');

$phone =$this->session->userdata('kunphone');
$email =$this->session->userdata('kunemail');

//echo $hour;
//echo $minute;
$cdate =$this->session->userdata('cdate');
//echo $cdate;
$cmonth =$this->session->userdata('cmonth');
$cyear =$this->session->userdata('cyear');
$gender =$this->session->userdata('kungender');
//echo $cmonth;
//echo $cyear;


$latitude =26.4947;
$longitude = 77.9940;
$timezone = 5.30;
$name = $this->session->userdata('kunname');
$vedicRishi = new VedicRishiClient($userId, $apiKey);
$datak = array(
                'name' => $name,
                'dob' => $year.$month.$date,
                'birth_place' => $place,
                'time' => $hour.$minute.$second,
                'gender' => $gender,
                'mobile' => $phone,
                'email' => $email,
                'created' => date("Y-m-d H:i:s")
            );

            $answer = $this->admin->_insertRow('tbl_freekundali', $datak);
            
$getCurrentVimDasha= $vedicRishi->getCurrentVimDasha($cdate, $cmonth, $cyear, $hour, $minute, $latitude, $longitude, $timezone);
$data['getCurrentVimDasha'] = json_decode($getCurrentVimDasha, 1);

$getGeneralRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'sun');

$data['getGeneralRashiReport'] = json_decode($getGeneralRashiReport, 1);


$getGeneralmoonRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'moon');
$data['getGeneralmoonRashiReport'] = json_decode($getGeneralmoonRashiReport, 1);

$getGeneralmarsRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'mars');

$data['getGeneralmarsRashiReport'] = json_decode($getGeneralmarsRashiReport, 1);

$getGeneralmercuryRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'mercury');
$data['getGeneralmercuryRashiReport'] = json_decode($getGeneralmercuryRashiReport, 1);

$getGeneraljupiterRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'jupiter');
$data['getGeneraljupiterRashiReport'] = json_decode($getGeneraljupiterRashiReport, 1);
$getGeneralvenusRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'venus');
$data['getGeneralvenusRashiReport'] = json_decode($getGeneralvenusRashiReport, 1);
$getGeneralsaturnRashiReport= $vedicRishi->getGeneralRashiReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone,'saturn');
$data['getGeneralsaturnRashiReport'] = json_decode($getGeneralsaturnRashiReport, 1);
$getBasicPanchang= $vedicRishi->getBasicPanchang($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getBasicPanchang'] = json_decode($getBasicPanchang, 1);

$getRudrakshaSuggestion= $vedicRishi->getRudrakshaSuggestion($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getRudrakshaSuggestion'] = json_decode($getRudrakshaSuggestion, 1);
$getBasicGemSuggestion= $vedicRishi->getBasicGemSuggestion($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getBasicGemSuggestion'] = json_decode($getBasicGemSuggestion, 1);

$getAshtakvargasunDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'sun');
$data['getAshtakvargasunDetails'] = json_decode($getAshtakvargasunDetails, 1);

$getAshtakvargamoonDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'moon');
$data['getAshtakvargamoonDetails'] = json_decode($getAshtakvargamoonDetails, 1);

$getAshtakvargamarsDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'mars');
$data['getAshtakvargamarsDetails'] = json_decode($getAshtakvargamarsDetails, 1);
$getAshtakvargamercuryDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'mercury');
$data['getAshtakvargamercuryDetails'] = json_decode($getAshtakvargamercuryDetails, 1);
$getAshtakvargajupiterDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'jupiter');
$data['getAshtakvargajupiterDetails'] = json_decode($getAshtakvargajupiterDetails, 1);
$getAshtakvargavenusDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'venus');
$data['getAshtakvargavenusDetails'] = json_decode($getAshtakvargavenusDetails, 1);
$getAshtakvargasaturnDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'saturn');
$data['getAshtakvargasaturnDetails'] = json_decode($getAshtakvargasaturnDetails, 1);
$getAshtakvargaascendantDetails= $vedicRishi->getAshtakvargaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, 'ascendant');
$data['getAshtakvargaascendantDetails'] = json_decode($getAshtakvargaascendantDetails, 1);

$getNumeroTable= $vedicRishi->getNumeroTable($date, $month, $year, $name);
$data['getNumeroTable'] = json_decode($getNumeroTable, 1);
$getNumeroReport= $vedicRishi->getNumeroReport($date, $month, $year, $name);
$data['getNumeroReport'] = json_decode($getNumeroReport, 1);

$getAscendantReport= $vedicRishi->getAscendantReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getAscendantReport'] = json_decode($getAscendantReport, 1);

$getbiorhythmdetails= $vedicRishi->getbiorhythmdetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getbiorhythmdetails'] = json_decode($getbiorhythmdetails, 1);

$getAstroDetails = $vedicRishi->getAstroDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getAstroDetails'] = json_decode($getAstroDetails, 1);

$getPitriDoshaReport = $vedicRishi->getPitriDoshaReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getPitriDoshaReport'] = json_decode($getPitriDoshaReport, 1);

$getMajorYoginiDasha = $vedicRishi->getMajorYoginiDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getMajorYoginiDasha'] = json_decode($getMajorYoginiDasha, 1);

$getMajorCharDasha = $vedicRishi->getMajorCharDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getMajorCharDasha'] = json_decode($getMajorCharDasha, 1);

$getSarvashtakDetails = $vedicRishi->getSarvashtakDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getSarvashtakDetails'] = json_decode($getSarvashtakDetails, 1);

$getDailyNakshatraPrediction = $vedicRishi->getDailyNakshatraPrediction($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getDailyNakshatraPrediction'] = json_decode($getDailyNakshatraPrediction, 1);

$getpreviousNakshatraPrediction = $vedicRishi->getpreviousNakshatraPrediction($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getpreviousNakshatraPrediction'] = json_decode($getpreviousNakshatraPrediction, 1);

$getnextNakshatraPrediction = $vedicRishi->getnextNakshatraPrediction($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getnextNakshatraPrediction'] = json_decode($getnextNakshatraPrediction, 1);



$getMajorCharDasha= $vedicRishi->getMajorCharDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getMajorCharDasha'] = json_decode($getMajorCharDasha, 1);

$getPlanetsDetails= $vedicRishi->getPlanetsDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getPlanetsDetails'] = json_decode($getPlanetsDetails, 1);



$getChartByBirth = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D1');
$data['getChartByBirth'] = json_decode($getChartByBirth, 1);

$getChartBySun  = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'SUN');
$data['getChartBySun'] = json_decode($getChartBySun, 1);

$getChartByMoon   = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'MOON');
$data['getChartByMoon'] = json_decode($getChartByMoon, 1);

$getChartByHora = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D2');
$data['getChartByHora'] = json_decode($getChartByHora, 1);

$getChartByDreshkan = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D3');
$data['getChartByDreshkan'] = json_decode($getChartByDreshkan, 1);

$getChartByChathurthamasha  = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D4');
$data['getChartByChathurthamasha'] = json_decode($getChartByChathurthamasha, 1);

$getChartByPanchmansha   = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D5');
$data['getChartByPanchmansha'] = json_decode($getChartByPanchmansha, 1);

$getChartBySaptamansha   = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D7');
$data['getChartBySaptamansha'] = json_decode($getChartBySaptamansha, 1);

$getChartByAshtamansha   = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D8');
$data['getChartByAshtamansha'] = json_decode($getChartByAshtamansha, 1);

$getChartByNavamansha    = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D9');
$data['getChartByNavamansha'] = json_decode($getChartByNavamansha, 1);

$getChartByDashamansha     = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D10');
$data['getChartByDashamansha'] = json_decode($getChartByDashamansha, 1);

$getChartByDwadashamsha  = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D12');
$data['getChartByDwadashamsha'] = json_decode($getChartByDwadashamsha, 1);

$getChartByShodashamsha = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D16');
$data['getChartByShodashamsha'] = json_decode($getChartByShodashamsha, 1);
$getChartByVishamansha  = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D20');
$data['getChartByVishamansha'] = json_decode($getChartByVishamansha, 1);
$getChartByChaturvimshamsha   = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D24');
$data['getChartByChaturvimshamsha'] = json_decode($getChartByChaturvimshamsha, 1);
$getChartByBhamsha    = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D27');
$data['getChartByBhamsha'] = json_decode($getChartByBhamsha, 1);
$getChartByTrishamansha     = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D30');
$data['getChartByTrishamansha'] = json_decode($getChartByTrishamansha, 1);

$getChartByKhavedamsha     = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D40');
$data['getChartByKhavedamsha'] = json_decode($getChartByKhavedamsha, 1);

$getChartByAkshvedansha      = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D45');
$data['getChartByAkshvedansha'] = json_decode($getChartByAkshvedansha, 1);
$getChartByShashtymsha       = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D60');
$data['getChartByShashtymsha'] = json_decode($getChartByShashtymsha, 1);
$getChartByShashtymsha       = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'D60');
$data['getChartByShashtymsha'] = json_decode($getChartByShashtymsha, 1);
$getChartByChalit        = $vedicRishi->getChartById($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone, "#333333", "#333333", "#333333", 'chalit');
$data['getChartByChalit'] = json_decode($getChartByChalit, 1);

$getNumeroFavTime= $vedicRishi->getNumeroFavTime($date, $month, $year, $name);
$data['getNumeroFavTime'] = json_decode($getNumeroFavTime, 1);

$getNumeroFavLord= $vedicRishi->getNumeroFavLord($date, $month, $year, $name);
$data['getNumeroFavLord'] = json_decode($getNumeroFavLord, 1);
$getNumeroPlaceVastu= $vedicRishi->getNumeroPlaceVastu($date, $month, $year, $name);
$data['getNumeroPlaceVastu'] = json_decode($getNumeroPlaceVastu, 1);

$getNumeroFastsReport= $vedicRishi->getNumeroFastsReport($date, $month, $year, $name);
$data['getNumeroFastsReport'] = json_decode($getNumeroFastsReport, 1);

$getPlanetsChart= $vedicRishi->getPlanetsChart($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getPlanetsChart'] = json_decode($getPlanetsChart, 1);

$getBhavMadhya= $vedicRishi->getBhavMadhya($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getBhavMadhya'] = json_decode($getBhavMadhya, 1);

$getSadhesatiLifeDetails = $vedicRishi->getSadhesatiLifeDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getSadhesatiLifeDetails'] = json_decode($getSadhesatiLifeDetails, 1);

$getSadhesatiCurrentStatus = $vedicRishi->getSadhesatiCurrentStatus($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getSadhesatiCurrentStatus'] = json_decode($getSadhesatiCurrentStatus, 1);

$getSadhesatiRemedies = $vedicRishi->getSadhesatiRemedies($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getSadhesatiRemedies'] = json_decode($getSadhesatiRemedies, 1);

$getPujaSuggestion = $vedicRishi->getPujaSuggestion($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getPujaSuggestion'] = json_decode($getPujaSuggestion, 1);

$getRudrakshaSuggestion = $vedicRishi->getRudrakshaSuggestion($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getRudrakshaSuggestion '] = json_decode($getRudrakshaSuggestion, 1);

$getPitriDoshaReport= $vedicRishi->getPitriDoshaReport($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getPitriDoshaReport '] = json_decode($getPitriDoshaReport, 1);
$getManglikDetails= $vedicRishi->getManglikDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getManglikDetails'] = json_decode($getManglikDetails, 1);

$getKalsarpaDetails= $vedicRishi->getKalsarpaDetails($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getKalsarpaDetails'] = json_decode($getKalsarpaDetails, 1);

$getCurrentCharDasha= $vedicRishi->getCurrentCharDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getCurrentCharDasha'] = json_decode($getCurrentCharDasha, 1);

$getCurrentYoginiDasha= $vedicRishi->getCurrentYoginiDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getCurrentYoginiDasha'] = json_decode($getCurrentYoginiDasha, 1);
$getCurrentVimDasha= $vedicRishi->getCurrentVimDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getCurrentVimDasha'] = json_decode($getCurrentVimDasha, 1);
$getMajorVimDasha= $vedicRishi->getMajorVimDasha($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
$data['getMajorVimDasha'] = json_decode($getMajorVimDasha, 1);

//EXTRA APIS


$data['categories'] = $this->front->get('categories');

$data['super_categories'] = $this->front->get('super_categories');

$data['astrologer'] = $this->front->get('author');
$data['title'] = "Free kundali - Create Online Kundali by Birth Date and Time";
$data['meta_tags'] = "Free Kundli and Horoscope Predictions With Astro Remedies";
$data['meta_keywords'] = "Free Kundli and Horoscope Predictions With Astro Remedies";
$data['meta_description'] = "Free kundali Birth chart Janam Kundali, Janam Patri Online is one of the most significant aspects of Vedic astrology predictions.";
$data['resultSet'] = $this->front->get_header_price_details();


$this->load->view('front/header', $data);

$this->load->view('front/kundli-dash', $data);

$this->load->view('front/footer',$data);

}



public function calender() {
$date = $this->input->post('date');
	echo $date;
	$date = explode('/', $date);
	echo $day = $date[0];
echo $month   = $date[1];
echo $year  = $date[2];

$array = array(

        'cdate'         => $day,
        'cmonth' =>      $month,
        'cyear' =>      $year,
        
       
        
);

$this->session->set_userdata($array);
          echo json_encode(array('status'=>'success'));




}
public function details() {
	
    $name = $this->input->post('name');
     $gender = $this->input->post('gender');
      $date = $this->input->post('date');
       $month = $this->input->post('month');
        $year= $this->input->post('year');
         $hh = $this->input->post('hh');
         
         $mm = $this->input->post('mm');
         $ss = $this->input->post('ss');
         $birthplace = $this->input->post('birthplace');
         $phone = $this->input->post('phone');
         $email = $this->input->post('email');
         

$array = array(

        'kunname'         => $name,
        'kungender' =>      $gender,
        'kundate' =>      $date,
        'kunmonth'         => $month,
        'kunyear'         => $year,
        'kunhr'         => $hh ,
        'kunmm'         => $mm,
        'kunss'         => $ss,
        'kunbirthplace'         => $birthplace ,
        'kunphone'         => $phone,
        'kunemail'         => $email
        
       
        
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

public function kundaliform() {

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

        $data['title'] = "Free kundali - Create Online Kundali by Birth Date and Time";
$data['meta_tags'] = "Free Kundli and Horoscope Predictions With Astro Remedies";
$data['meta_keywords'] = "Free Kundli and Horoscope Predictions With Astro Remedies";
$data['meta_description'] = "Free kundali Birth chart Janam Kundali, Janam Patri Online is one of the most significant aspects of Vedic astrology predictions.";
        $data['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/kundliform', $data);

        $this->load->view('front/footer', $data);
    }


}