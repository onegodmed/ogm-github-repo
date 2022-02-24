<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     public function __construct() {
        //Add parent controller contructor
        parent::__construct();
        $this->load->model('Admin_model', 'admin'); 
       
    }


	public function index()
	{
		$data['course'] = $this->admin->get('course');
		$this->load->view('front/header');
		$this->load->view('front/home',$data);
		$this->load->view('front/footer');
	}

	/*public function course($id)
	{
    $where = array('course_id' => $id);
    $data['course_part'] = $this->admin->get_details('course_part',$where);
		$this->load->view('front/header');
		$this->load->view('front/course',$data);
		$this->load->view('front/footer');
	}*/

	public function course($id)
	{
    $where = array('course_id' => $id);
    $data['course_content'] = $this->admin->courseAllUploads($id);
    
		$this->load->view('front/header');
		$this->load->view('front/course',$data);
		$this->load->view('front/footer');
	}



public function subject($id)
	{
    $where = array('subject.coursepart_id' => $id);
    $data['subject'] = $this->admin->course_subject($where);
		$this->load->view('front/header');
		$this->load->view('front/subject',$data);
		$this->load->view('front/footer');
	}

}