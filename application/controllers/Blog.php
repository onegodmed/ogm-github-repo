<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

public function __construct() {
        parent::__construct();
        
        $this->load->library('form_validation');
		$this->load->model('admin_model', 'admin');
		$this->load->model('front_model', 'front');
		$this->load->library('ajax_pagination'); 
        $this->load->model('post');
        $this->perPage = 10;
    }
 public function index($slug="")
    {
	   if($slug == ""){
	       $data = array(); 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->post->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('blog/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'limit' => $this->perPage 
        ); 
        $data['posts'] = $this->post->getRows($conditions);
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
		} else{
	   $where = array('slug_url' => $slug);
        $data['blog'] = $this->admin->get_details('blog', $where);
        if(count($data['blog']) > 0){
            $data['title'] = $data['blog'][0]->title;
        $data['meta_tags'] = $data['blog'][0]->meta_tag;
        $data['meta_keywords'] = $data['blog'][0]->meta_keyword;
        $data['meta_description'] = $data['blog'][0]->meta_description;
        $data ['resultSet'] = $this->front->get_header_price_details();
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $data['astrologer'] = $this->front->get('author');
        $this->load->view('front/header', $data);

        $this->load->view('front/blog', $data);

        $this->load->view('front/footer');
        } else{
            redirect('blog/');
        }
        
		}
    }
    
    function ajaxPaginationData(){ 
        // Define offset 
        $page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->post->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('blog/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'start' => $offset, 
            'limit' => $this->perPage 
        ); 
        $data['posts'] = $this->post->getRows($conditions); 
         
        // Load the data list view 
        $this->load->view('posts/ajax-data', $data, false); 
    } 


}
?>