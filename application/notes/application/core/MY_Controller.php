<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{ 
   //set the class variable.
    public $template  = array();
    public $data      = array();

    public function __construct() {    
      parent::__construct();    
      $this->load->library('session');

    }
   
   
    public function admin(){
       $this->template['sidebar']   = $this->load->view('admins/layout/sidebar', $this->data, true);
       $this->template['navigationbar']   = $this->load->view('admins/layout/navigation', $this->data, true);
       $this->template['middle']        = $this->load->view('admins/'.$this->middle, $this->data, true);
       $this->template['footer']        = $this->load->view('admins/layout/footer', $this->data, true);
       $this->load->view('admins/layout/index', $this->template);
    }
   
    public function frontend(){
	   
       $this->template['header']        = $this->load->view('frontend/layout/header', $this->data, true);  
       $this->template['middle']        = $this->load->view('frontend/'.$this->middle, $this->data, true);
       $this->template['footer']        = $this->load->view('frontend/layout/footer', $this->data, true);
       $this->load->view('frontend/layout/index', $this->template);
	 
    }

    public function developerEndAng(){
     
      $this->template['header']        = $this->load->view('developer/layout/headerAng');  
       $this->template['middle']        = $this->load->view('developer/'.$this->middle);
       $this->template['footer']        = $this->load->view('developer/layout/footerAng');
       return  $this->template;
      // $this->load->view('developer/index', $this->template);
   
    }

	
	  public function developerEnd($header='developer/layout/header',$footer='developer/layout/footer'){
    
      if($header!=null)
           $this->template['header']        = $this->load->view($header, $this->data, true);
           $this->template['middle']        = $this->load->view('developer/'.$this->middle, $this->data, true);
         
      if($footer!=null)
           $this->template['footer']        = $this->load->view($footer, $this->data, true);
    
    
  
       $this->load->view('developer/layout/index', $this->template);
   
    }
   
}
?>