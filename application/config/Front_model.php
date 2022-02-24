<?php 

   Class Front_model extends CI_Model {

	

      Public function __construct() { 

         parent::__construct(); 

      } 

		

		 Public function login($username,$password) { 

             // echo $username;

             // echo $password;

            $this->db->select('*');

            $this->db->from('author');

            $this->db->where('email',$username);

            $this->db->where('password',$password);

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



     public function get($table) {



        $this->db->select('*');

        $this->db->from($table);

        $this->db->order_by("date", "desc");

        // $this->db->order_by($order, $order_type);

        return $query = $this->db->get()->result();

    }


    
    public function getcountry($table) {
        $this->db->select('*');

        $this->db->from($table);

        return $query = $this->db->get()->result();

    }

    
     public function get_details($table, $where) {

        $this->db->select('*');

        $this->db->from($table); 

        $this->db->where($where);

        $this->db->order_by("date", "desc");

        $query = $this->db->get();

        return $query->result();

    }

    // public function get_details1($id) {

    //     $this->db->select('*,author.*');
    //     $this->db->from('follow');
    //     $this->db->join('author','follow.astro_id = author.id');
    //     $this->db->where('follow.user_id',$id);
    //     $this->db->order_by("date", "desc");

    //     $query = $this->db->get();

    //     return $query->result();

    // }




     public function get_where_details($table, $where,$where1) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);

        $query = $this->db->get();

        return $query->result();

    }



    public function check_service($table, $where,$where1,$where2) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);

        $this->db->where($where2);

        $query = $this->db->get();

        return $query->result();

    }
    
   
    
    public function check_review($table, $where,$where1) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);
        
        $this->db->order_by('date', 'DESC');

        $query = $this->db->get();

        return $query->result();

    }
    
        public function checkall_review($table, $where,$where1) {

        $this->db->select('Reviews.*, rating.*');

        $this->db->from($table);

        $this->db->join('rating', 'rating.reviewId = Reviews.id');

        $this->db->where($where);

        $this->db->where($where1);
        
        $this->db->order_by('Reviews.id', 'DESC');
        $this->db->limit('4');

        $query = $this->db->get();

        return $query->result();

    }

public function get_astrologer($id) {

        $this->db->select('services.*, author.*');

        $this->db->from('services');

        $this->db->join('author', 'author.id = services.astrologer_id');

        $this->db->where('services.category_id',$id);

        $this->db->where('author.user_type','Astrologer');

        $query = $this->db->get();

        return $query->result();



    }



    public function get_services($id,$cat_id) {



        $this->db->select('services.*, super_categories.*');



        $this->db->from('services');



        $this->db->join('super_categories', 'super_categories.id = services.category_id');



        $this->db->where('services.category_id', $cat_id);



        $this->db->where('services.astrologer_id', $id);



        $query = $this->db->get();



        return $query->result();



    }
    
     public function get_servicesbyid($id) {
        $this->db->select('services.*, super_categories.*');
        $this->db->from('services');
        $this->db->join('super_categories', 'super_categories.id = services.category_id');
        $this->db->where('services.astrologer_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_serviceswithoutid() {
        $this->db->select('services.*, super_categories.*');
        $this->db->from('services');
        $this->db->join('super_categories', 'super_categories.id = services.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function checkNotify($astroId){
        $this->db->select('*');
        $this->db->from('notifyme');
        $this->db->where('astro_id', $astroId);
        $query = $this->db->get();
        return $query->result();
    }
    public function insertNotify($data){
        $this->db->insert('notifyme', $data);
    }
    public function getUserData($userId){
        $this->db->select('*');
        $this->db->from('author');
        $this->db->where('id', $userId);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateNotify($data){
        $this->db->where('astro_id', $data['astro_id']);
        $this->db->update('notifyme', $data);
    }
    public function dltAfterNotify($astroId){
        $this->db->where('astro_id',$astroId)->delete('notifyme');
    }

    

    public function activate($id){

$this->db->query("UPDATE popup SET isActive = 1 

                  WHERE id =?", array($id));

}



public function check_service1($table, $where,$where1,$where2,$where3) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);

        $this->db->where($where2);

        $this->db->where($where3);

        $query = $this->db->get();

        return $query->result();

    }
    
    public function check_service3($table, $where1,$where2,$where3) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where1);

        $this->db->where($where2);

        $this->db->where($where3);
        
         $this->db->order_by('id', 'DESC');
        
        $query = $this->db->get();

        return $query->result();

    }
    
    public function check_service4($table, $where1) {

        $this->db->select('order_history.*, ifnull(booking_queue.queue,0) as queue, booking_queue.user_id');

        $this->db->join('booking_queue', 'booking_queue.astro_id = order_history.astrologer_id','left');

        $this->db->from($table);

        $this->db->where($where1);

        $query = $this->db->get();

        return $query->result();

    }

    public function getWaitingTime(){
        $this->db->select('sum(service_price)/actual_price as totalTime, astrologer_id');
        $cond = "is_Active = 'Accept' OR is_Active = 'In Queue'";
        $this->db->from('order_history');
        $this->db->where($cond);
        $this->db->group_by('astrologer_id');

        $query = $this->db->get();

        return $query->result();
    }

    public function checkQueue($astroId){

        $this->db->select('booking_queue.queue, user_id');
        
        $this->db->from('booking_queue');
        $this->db->where('astro_id',$astroId);
        // $this->db->where('status','Online');

        $query = $this->db->get()->row();

        return $query;
    }

    public function updateQueue($astroId, $data){

        
        // $this->db->from('booking_queue');
        $this->db->where('astro_id',$astroId);
        $this->db->update('booking_queue', $data);
    }
    public function insertQueue($data){

        
        // $this->db->from('booking_queue');
        $this->db->insert('booking_queue', $data);
    }
    


    public function getAstroId(){

        $this->db->select('author.id, booking_queue.queue');
        $this->db->join('booking_queue', 'booking_queue.astro_id = author.id','left');
        $this->db->from('author');
        $this->db->where('user_type','Astrologer');
        // $this->db->where('status','Online');

        $query = $this->db->get();

        return $query->result();
    }

 public function check_service2($table, $where,$where1) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);

        $query = $this->db->get();

        return $query->result();

    }

    public function get_menu_id($cat_id) {

        $this->db->select('super_categories.menu_id ,categories.*');

        $this->db->from('super_categories');

        $this->db->join('categories', 'categories.super_cat_id = super_categories.id', 'left');

        $this->db->where($cat_id);

        $query = $this->db->get();

        return $query->result();



    }

    public function get_astrologer_for_pooja($id,$country,$state,$city) {

        $this->db->select('services.*, author.*');

        $this->db->from('services');

        $this->db->join('author', 'author.id = services.astrologer_id');

        $this->db->where('services.category_id',$id);

        $this->db->where('author.user_type','Astrologer');
          if($country != ''){
        $this->db->where('author.country',$country);
    }
       if($state != ''){
        $this->db->where('author.state',$state);
    }
    if($city  != ''){
        $this->db->where('author.city',$city);
    }

        $query = $this->db->get();

        return $query->result();



    }


    public function submit_rating($user_id,$service_id, $rating) {

        $this->db->select('services.*, author.*');

        $this->db->from('services');

        $this->db->join('author', 'author.id = services.astrologer_id');

        $this->db->where('services.category_id',$id);

        $this->db->where('author.user_type','Astrologer');

        $query = $this->db->get();

        return $query->result();



    }

    
    function checkAstro($searchPeople) {
       $sql = "select * from  author where user_type= 'Astrologer' AND name like '%$searchPeople%'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
   public function getSearch($cityname) {
        $qry = "SELECT id, name FROM cities WHERE state_id BETWEEN 1 AND 41 and name LIKE '%$cityname%'";
        $query = $this->db->query($qry);
        $arrData = $query->result_array();
        return $json = json_encode($arrData);
    }
    
    public function record_count() {
       return $this->db->count_all("blog");
   }

public function fetch_blog($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("blog");
        return $query->result();
   }
   
  
//---------------------------//
function get_header_price_details(){
$wal_bal = $this->session->userdata('id');   
    $this->db->select('*');
    $this->db->from('author');
    $this->db->where('id',$wal_bal);
      $query = $this->db->get();
      return $query->result();
}

public function invoice($where) { 
            $this->db->select('*');
            $this->db->from('payment');
            $this->db->where($where);
            $this->db->order_by("id", "desc");
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result();

      } 

      public function getids($customer_id,$astroid){
        $this->db->select('customer_id,astrologer_id');
        $this->db->from('order_history');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('astrologer_id',$astroid);
        return $this->db->get()->result();
      }

      public function getweekly($id){
        $this->db->select('*');
        $this->db->from('weekly_availability');
        $this->db->where('astro_id',$id);
        return $this->db->get()->row();
      }
      public function gettime($id){
        $this->db->select('*');
        $this->db->from('weekly_availability');
        $this->db->where('astro_id',$id);
        return $this->db->get()->row();
      }

      public function checkweekly($id){
        $this->db->select("IFNULL(Sun,'NA') as Sun, IFNULL(Mon,'NA') as Mon, IFNULL(Tue,'NA') as Tue, IFNULL(Wed,'NA') as Wed, IFNULL(Thu,'NA') as Thu, IFNULL(Fri,'NA') as Fri, IFNULL(Sat,'NA') as Sat");

        $this->db->from('weekly_availability');
        $this->db->where('astro_id',$id);
        return $this->db->get()->result_Array();        
    }
    public function gettimetableweekly(){
        $this->db->select('*');
        $this->db->from('availabilitystatic');
        return $this->db->get()->result();
        
    }

    public function getdataloadmore($lastid,$astroid){
        $this->db->select('*');
        $this->db->from('Reviews');
        $this->db->join('rating','rating.reviewId = Reviews.id');
        $this->db->where('Reviews.id <',$lastid);
        $this->db->where('Reviews.astrologer_id',$astroid);        
        $this->db->limit('6');
        $query = $this->db->get();
        return $query->result();
    
    }
    public function insertfollow($formArray){
        $this->db->insert('follow',$formArray);
    }
    public function deletefollow($user_id,$astro_id)
   {
       $this->db->where('user_id',$user_id);
        $this->db->where('astro_id',$astro_id); 
        $this->db->delete('follow');
    }
    public function follow_exists($user_id,$astro_id)
   {
    $this->db->where('user_id',$user_id);
    $this->db->where('astro_id',$astro_id);
    $query = $this->db->get('follow');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}


//Add function for model to insert data for recharge packages.
  public function insertPackages($data) {

        $this->db->insert('package_recharge', $data);

        return $this->db->insert_id();

    }

   
   //get rows By purchase packges to check

public function pack_exists($user_id,$pack)
   {
    $this->db->where('customer_id',$user_id);
    $this->db->where('package_name',$pack);
    $query = $this->db->get('package_recharge');
    // $result = $query->result();
    if ($query !== FALSE && $query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }

 }

//get data to display for Alert just need tocheck these values

 public function getDetailsByPack($user_id,$pack){
     $this->db->where('customer_id',$user_id);
      $this->db->where('package_name',$pack);
      $this->db->limit(1);
       $this->db->order_by('id','DESC');
      return $this->db->get('package_recharge')->result_Array();
 }

//Update wallet for new recharge as per Users get

 public function updateRechargeWallet($data) {

        $this->db->where('id',$this->session->userdata('id'));

        if ($this->db->update('author', $data)) {

            return true;

        } else {

            return false;

        }

    }






    
   } 
?>