<?php

Class Admin_model extends CI_Model {

    Public function __construct() {
        parent::__construct();
    }

    public function login($mobile, $ctry_code) {
        // echo $username;
        // echo $password;
        $this->db->select('*');
        $this->db->from('author');
        $this->db->where('mobile', $mobile);
        $this->db->where('country_code', $ctry_code);
        $this->db->where('status!=', 'Inactive');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function chatlogin($mobile) {
        // echo $username;
        // echo $password;
        $this->db->select('*');
        $this->db->from('author');
        $this->db->where('id', $mobile);
        $this->db->where('user_type', 'Astrologer');
        $this->db->where('status!=', 'Inactive');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    
	public function adminlogin($username,$password) { 
            $this->db->select('*');
            $this->db->from('author');
            $this->db->where('email',$username);
            $this->db->where('password',$password);
            $this->db->where('status!=','Inactive');
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result();
    } 

    public function _insertRow($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function _deleteRowWhere($table, $where) {
        return $this->db->delete($table, $where);
    }
    
    public function _updateRowWhere($table, $data, $where) {
        $this->db->where($where);
        if ($this->db->update($table, $data)) {
            return $where;
        } else {
            return false;
        }
    }
    public function updateMob($data,$id) {
        $this->db->where('id',$id);
        $this->db->update('author', $data);
            return true;
        
    }
    public function getQueueData($id) {
        $this->db->select('*');
        $this->db->from('booking_queue');
        $this->db->where('astro_id',$id);
        return $query = $this->db->get()->result();
        
        
    }
    public function getAstroNum($id) {
        $this->db->select('call_userId');
        $this->db->from('author');
        $this->db->where('id',$id);
        return $query = $this->db->get()->result();
        
    }
    public function getCustNum($id) {
        $this->db->select('mobile');
        $this->db->from('author');
        $this->db->where('id',$id);
        return $query = $this->db->get()->result();
        
    }
    public function getqueueBookingDetail($astroId, $custId) {
        $this->db->select('order_history.call_duration,order_history.id');
        $this->db->from('order_history');
        $this->db->where('customer_id',$custId);
        $this->db->where('astrologer_id',$astroId);
        // $this->db->where('call_type','Audio');
        $this->db->where('is_Active','InQueue');
        return $query = $this->db->get()->result();
        
        
    }
    public function updateQueueData($data,$id) {
        $this->db->where('astro_id',$id);
        $this->db->update('booking_queue', $data);
            return true;
        
    }
    public function deleteQueue($id) {
        $this->db->where('astro_id',$id);
        $this->db->delete('booking_queue');
            return true;
        
    }

    public function get($table) {
        $this->db->select('*');
        $this->db->from($table);
        // $this->db->order_by($order, $order_type);
        return $query = $this->db->get()->result();
    }
    
     public function getPack($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'ASC');
        return $query = $this->db->get()->result();
    }
    
    public function gethorodate($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'DESC');
        return $query = $this->db->get()->result();
    }

    public function get_details($table, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_details_user($table, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
         $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
     public function get_details_order($table, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by("status", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }
    
         public function get_details_order_random($table, $where, $having=null) {
        $this->db->select('author.*, SUBSTRING_INDEX(author.experience, " ", 1) AS years, notifyme.user_id ');
        $this->db->from($table);
        $this->db->join('notifyme', 'notifyme.astro_id = author.id','LEFT');
        $this->db->where($where);
		if($having)
		{			
		 $this->db->having($having);
        } 
        $this->db->order_by("status", "asc");
         $this->db->order_by('rand()');
        $query = $this->db->get();
        // echo $this->db->last_query();die;
        return $query->result();
    }

    public function get_details_follow($table, $where) {

        $this->db->select('author.*, notifyme.user_id ');
        $this->db->from($table);
        $this->db->join('notifyme', 'notifyme.astro_id = author.id','LEFT');
        $this->db->join('follow','author.id=follow.astro_id');
        $this->db->where('follow.astro_id=author.id');
        $this->db->where('follow.user_id',$this->session->userdata('id'));
        $this->db->order_by("status", "asc");
         $this->db->order_by('rand()');
         $this->db->group_by('author.id');
         $query = $this->db->get();
        //echo $this->db->last_query();
		if($query)
		{
        return $query->result();
		}else
		{
			return false;
		}
    }
    public function get_folloing($userid){
        $this->db->select('follow.*,author.*,author.id as aid');
        $this->db->from('follow');
        $this->db->join('author','follow.astro_id=author.id');
        $this->db->where('follow.user_id',$userid);
        $this->db->group_by('follow.id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }

    public function get_chat_order_random($table, $where) {
        $this->db->select('author.*, notifyme.user_id ');
        $this->db->from($table);
        $this->db->join('notifyme', 'notifyme.astro_id = author.id','LEFT');
        $this->db->where($where);
        $this->db->order_by("chat_status", "asc");
         $this->db->order_by('rand()');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }
    public function get_details_filter($table, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_where_details($table, $where, $where1) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where($where1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_student($where) {
        $this->db->select('tmp_student.*, course.course');
        $this->db->from('tmp_student');
        $this->db->join('course', 'course.id = tmp_student.course');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_mamber() {
        $this->db->select('author.*, branch.branch');
        $this->db->from('author');
        $this->db->join('branch', 'branch.id = author.branch_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_expanse() {
        $this->db->select('expanse.*,author.name,branch.branch');
        $this->db->from('expanse');
        $this->db->join('author', 'author.id=expanse.member_id', 'Left');
        $this->db->join('branch', 'branch.id=expanse.branch_id', 'Left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_category() {
        $this->db->select('categories.*, super_categories.super_category');
        $this->db->from('categories');
        $this->db->join('super_categories', 'super_categories.id = categories.super_cat_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_booking($where) {
        $this->db->select('order_history.*, author.*');
        $this->db->from('order_history');
        $this->db->join('author', 'author.id = order_history.customer_id');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function service_cat_subcat($where) {
        $this->db->select('services.*,menu.name,super_categories.super_category');
        $this->db->from('services');
        $this->db->join('menu', 'menu.id = services.super_cat_id');
        $this->db->join('super_categories', 'super_categories.id = services.category_id');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function kundali_cat() {
        $this->db->select('kundali.*,super_categories.super_category');
        $this->db->from('kundali');
        $this->db->join('super_categories', 'super_categories.id = kundali.super_cat_id');
        // $this->db->join('author', 'author.id = kundali.customer_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function order($where = "") {
        $this->db->select('order_history.*,super_categories.super_category,super_categories.menu_id,author.name,author.address,author.mobile');
        $this->db->from('order_history');
        $this->db->join('super_categories', 'super_categories.id = order_history.super_cat_id');
        $this->db->join('author', 'author.id = order_history.customer_id');
        $this->db->order_by("id", "desc");
        if ($where != "") {
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function orderChat($where){
        $this->db->select('order_history.*,super_categories.super_category,super_categories.menu_id,author.name,author.address,author.mobile');
        $this->db->from('order_history');
        $this->db->join('super_categories', 'super_categories.id = order_history.super_cat_id');
        $this->db->join('author', 'author.id = order_history.customer_id');
        $this->db->order_by("id", "desc");
        $this->db->where($where);
        $this->db->or_where('order_history.is_Active', 'Running');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function ordersearch($where = "",$where1) {
        $this->db->select('order_history.*,super_categories.super_category,super_categories.menu_id,author.name,author.address,author.mobile');
        $this->db->from('order_history');
        $this->db->join('super_categories', 'super_categories.id = order_history.super_cat_id');
        $this->db->join('author', 'author.id = order_history.customer_id');
        $this->db->order_by("id", "desc");
        if ($where != "") {
            $this->db->or_where($where1);
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
      public function getCallData($where = "") {
        $this->db->select('*');
        $this->db->from('tbl_calltype');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    
     public function astrototalEarn($where) {
        $this->db->select('wallet_history.*,order_history.callNation');
        $this->db->from('wallet_history');
        $this->db->join('order_history', 'wallet_history.order_id = order_history.id');
        $this->db->order_by("id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function astrowalletHistory($where) {
        $this->db->select('wallet_history.*,order_history.callNation, order_history.sevice_name, order_history.booking_no,order_history.date,order_history.call_type,order_history.call_duration,order_history.vendor_price, author.name');
        $this->db->from('wallet_history');
        $this->db->join('order_history', 'wallet_history.order_id = order_history.id','Left');
        $this->db->join('author', 'author.id = order_history.customer_id','Left');
        $this->db->order_by("id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function custwalletHistory($where) {
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->order_by("id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
       //echo $this->db->last_query();
        return $query->result();
    }
    
     public function custcallHistory($where) {
        $this->db->select('wallet_history.*,order_history.callNation, order_history.sevice_name, order_history.booking_no,order_history.date,order_history.call_type,order_history.call_duration, author.name');
        $this->db->from('wallet_history');
        $this->db->join('order_history', 'wallet_history.order_id = order_history.id');
        $this->db->join('author', 'author.id = order_history.astrologer_id');
        $this->db->order_by("id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_profile($where) {
        $this->db->select('author.*,countries.name as user_country,cities.name as user_city,states.name as user_state');
        $this->db->from('author');
        $this->db->join('countries', 'countries.id = author.country', "left");
        $this->db->join('cities', 'cities.id = author.city', "left");
        $this->db->join('states', 'states.id = author.state', "left");
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_reviews() {
        $this->db->select('Reviews.*,author.name as astrologer_name,rating.rating');
        $this->db->from('Reviews');
        $this->db->join('rating', 'rating.reviewId = Reviews.id');
        $this->db->join('author', 'author.id = Reviews.astrologer_id', "left");
        $this->db->order_by('Reviews.id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function emailus($name, $mobile, $email, $booking_no, $book_date, $call_type, $call_price, $sup_name, $wotgst, $totgst, $discount) {

        $date = date('d M Y');

        $time = date('h:i:s');

        $this->load->library('email'); // load the library

        $config = array();

        $config['protocol'] = 'smtp';

        $config['smtp_host'] = 'mail.onegodmed.com';

        $config['smtp_user'] = 'no-reply@onegodmed.com';

        $config['smtp_pass'] = '0v,Y]RgH8meureply';

        $config['smtp_port'] = 465;

        $config['mailtype'] = 'html';




      $call_price_word = $this->numberTowords($call_price);
      
        $from_email = "no-reply@onegodmed.com";

        $to_email = $email; //$this->input->post('email');
        //Load email library

        $this->load->library('email', $config);

        $this->email->from($from_email, 'Onegodmed');

        $this->email->set_mailtype("html");

        $this->email->to($to_email);

        $this->email->subject('Payment Invoice - Onegodmed');

        $this->email->message('<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>One God Med</title>
</head>
<body style="background-color: #ccccccab; margin: 0; padding: 0;">
	<div style="width: 600px; height: auto; margin:0 auto;">
	<!--Header-->
		<div style="padding: 5px 0 ;">
			<img src="https://www.onegodmed.com/front-assets/images/header/logo.png" style="width: 277px ; float: left;" alt="" >	
			<span style="font-size: 41px; text-transform: uppercase; font-weight: bold; float:right; padding: 0px 10px; color: #333; margin: 0;">INVOICE</span>
     		<div style="width: 100%; border-bottom: 1px solid #ff871f; float: left; ">
		</div>

<!--Name-->
		<div style="margin:20px 0; float: left; width: 600px;">
			<div style="width: 250px; float: left;">
				<span style="font-size:26px;">'.$name.'</span><br>
				<span style="font-size: 13px; line-height: 22px;"> <strong>Phone:</strong>'.$mobile.'</span>
			</div>

			<div style="width: 350px; float: right;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr style="line-height: 30px;">
                            <td width="41%"><strong>Invoice Number</strong></td>
                            <td width="5%"><strong>:</strong></td>
                            <td width="54%">'.$booking_no.'</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td><strong>Invoice Date</strong></td>
                            <td><strong>:</strong></td>
                            <td>'.$book_date.'</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td><strong>Service Type</strong></td>
                            <td><strong>:</strong></td>
                            <td>'.$call_type.' Call</td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>

<!--Table-->
<table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
            <tbody>
                <tr style="background: #333; color: #fff;  ">
                    <td width="50%">Description</td>
                    <td width="20%">Amount (Rs.)</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">'.$sup_name.'</td>
                    <td style="border-bottom:1px solid #aaa;">Rs. '.round($wotgst).'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount</td>
                    <td style="border-bottom:1px solid #aaa;">Rs. '.$discount.'</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Taxable Amount</td>
                    <td style="border-bottom:1px solid #aaa;">Rs. '.round($wotgst).'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
                    <td style="border-bottom:1px solid #aaa;">Rs. '.round($totgst).'</td>
                </tr>
                <tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
                    <td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
                    <td style="">Rs. '.$call_price.'</td>
                </tr>
            </tbody>
        </table>

 <!--Table 2-->
 <div style="background-color: #fff; margin: 15px 0;">
            <table width="100%" border="0" style=" padding: 10px; line-height: 35px;" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td width="27%" valign="top">Amount in Words </td>
                        <td width="3%" valign="top">:</td>
                        <td width="70%">'.strtoupper($call_price_word).' RUPEES ONLY</td>
                    </tr>
                    <tr>
                        <td>GST No </td>
                        <td>:</td>
                        <td>09AAHCG6487H1Z2</td>
                    </tr>
                    <tr>
                        <td>PAN</td>
                        <td>:</td>
                        <td>AABCN1019J</td>
                    </tr>
                </tbody>
            </table>
        </div>       		
<!--Footer-->
 <div style="background: #333; color: #fff; padding: 10px; display: block; float: left;">       
 	<div style="width:290px; float: left;">
 		<h2 style="margin: 0; padding: 0; margin-bottom: 15px; color: #ff871f; font-size: 18px; font-weight: normal;">Corporate Office</h2>
 		<span style="font-size: 14px;">1701/57, Express Trade Tower 2, Sector 132,<br> Noida, UP, India 201305
 			<br><br>
E-mail:- support@onegodmod.com
<br><br>
Tel:- +91 9169-305-305
</span>
 	</div>

<div style="width:290px; float: right;">
 		<h2 style="margin: 0; padding: 0; color: #ff871f; font-size: 18px; font-weight: normal;">Terms & Conditions:</h2>
 		<ul style="font-size: 14px;">
                    <li>All Payments should be made in favour of Godmed Technologies Private Limited - Noida</li>
                    <li>All payment should be in advance and it will be non-refundable</li>
                    <li>Onegodmed is a product of Godmed Technologies Private Limited</li>
                </ul>
 	</div>
<h6 style="font-size: 12px; float: left; width: 100%; font-weight: normal; display: block; margin: 10px 0; text-align: center;">This is computer generated invoice and does not require signature and stamp</h6>
</div>

</div>
</body>
</html>');



        //Send mail

        if ($this->email->send()) {

            return TRUE;
        } else {

            return FALSE;

            //Check whether user upload picture
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
//-------------------------------------------------//
function get_users_wallet_history($id){
    $this->db->select('*');
    $this->db->from('wallet_history');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
}
 public function payHst() {
        $this->db->select('payment.*,author.name,author.mobile');
        $this->db->from('payment');
        $this->db->join('author', 'author.id = payment.customer_id');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
     public function custCunHistory($where) {
        $this->db->select('order_history.*, author.name');
        $this->db->from('order_history');
        $this->db->join('author', 'author.id = order_history.astrologer_id');
        $this->db->order_by("id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function insertweektime($formArray) {    
         $this->db->insert('weekly_availability',$formArray);
    }
    public function updateweektime($formArray,$id) {
        
        $this->db->where('astro_id',$id);
        $this->db->update('weekly_availability',$formArray);
    }
    public function gettimetable(){
        $this->db->select('*');
        $this->db->from('availabilitystatic');
        return $this->db->get()->result();
        
    }
    
    public function checkAvb($id){
        $this->db->select('Sun, Mon, Tue, Wed, Thu, Fri, Sat');
        $this->db->from('weekly_availability');
        $this->db->where('astro_id',$id);
        return $this->db->get()->result_Array();
        
    }
    public function get_timetable(){
        $this->db->select('*');
        $this->db->from('availabilitystatic');
        return $this->db->get()->result();
        
    }
    public function deluser($id){
        $this->db->where('id',$id);
        $this->db->delete('author');
    }
    public function getauthordel($id){
        $this->db->select('*');
        $this->db->from('author');
        $this->db->where('id',$id);
        return $this->db->get()->result();
    }
    public function insertdeleteeddata($data){
        $this->db->insert('deleted_author',$data);
    }
//------------------------------------------------//
}

?>