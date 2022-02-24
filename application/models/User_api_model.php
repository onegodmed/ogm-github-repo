<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User_api_model extends CI_Model{ 
     
    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
     
    /* 
     * Fetch records from the database 
     * @param array filter data based on the passed parameters 
     */ 
    function banner(){
        $this->db->select("author.id,author.name,CONCAT('https://www.onegodmed.com/admin-assets/assets/images/users/', author.image) as image,author.status,avg(rating.rating) as rating");
        $this->db->from('author');
        $this->db->join('rating', 'rating.user_id = author.id','left');
        $this->db->where('author.user_type', 'Astrologer');
        $this->db->where('author.status', 'Live');
        $this->db->group_by('user_id');
        $this->db->order_by('rand()');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }
    function astro(){
        $this->db->select("author.id,author.name,CONCAT('https://www.onegodmed.com/admin-assets/assets/images/users/', author.image) as image,author.status,author.langknown,author.experience,services.chat_price,avg(rating.rating) as rating");
        $this->db->from('author');
        $this->db->join('services', 'services.astrologer_id = author.id','inner');
        $this->db->join('rating', 'rating.user_id = author.id','left');
        $this->db->where('author.user_type', 'Astrologer');
        $this->db->group_by('rating.user_id');
        $this->db->order_by('rand()');
        // $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();
    }
    function liveAstro(){
        $this->db->select("author.id,author.name,CONCAT('https://www.onegodmed.com/admin-assets/assets/images/users/', author.image) as image,author.status");
        $this->db->from('author');
        $this->db->where('author.user_type', 'Astrologer');
        $this->db->where('author.status', 'Live');
        $this->db->order_by('rand()');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
    function getPackage(){
        $this->db->select("*");
        $this->db->from('package');
        $query = $this->db->get();
        return $query->result();
    }
    function walletbalance($id){
        $this->db->select("wallet_balence");
        $this->db->from('author');
        $this->db->where('author.id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    function verifyCoupon($couponeCode, $currentDate){
        $this->db->select("*");
        $this->db->from('coupon');
        $this->db->where('coupan_code',$couponeCode);
        // $this->db->where('expiry_date','>=',$currentDate);
        $query = $this->db->get();
        
        return $query->result();
    }
} 