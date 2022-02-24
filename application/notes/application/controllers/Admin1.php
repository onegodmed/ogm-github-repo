<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->model('admin_model', 'admin'); 
       /* if(!$this->session->userdata('id')){
        	redirect('login');
       }*/
    }


	public function index()
	{
		//$this->load->view('admin/header1');
		$this->load->view('admin/index1');
		//$this->load->view('admin/footer1');
	}

public function logout() {
        $this->session->unset_userdata('id');
         redirect('login');
    }

	public function addmision_form()
	{
		if($this->form_validation->run('admission')){

			$config['upload_path']  = 'assets/images/profile_pic/';
            $config['allowed_types']  = 'jpg|png|jpeg|JPG|JPEG|PNG';

                $this->load->library('upload', $config);
     if ( ! $this->upload->do_upload('profile_pic'))
                {
                    $profile_pic = ("default.png");   
                }
                else
                {
                        $data =  $this->upload->data();
                        $profile_pic = $data["file_name"];
                         
                     }
                  if($this->input->post('fee_dicount') != ""){
                $final_fee = $this->input->post('course_fee')  -  $this->input->post('fee_dicount');
                   $fee_discount = $this->input->post('fee_dicount');
               }else{
                    $final_fee = $this->input->post('course_fee');
                   $fee_discount = 0;
               }

               if($final_fee <=  $this->input->post('advance_fee')){
                     $due_fee    = 0;
                     $fee_status = 'Complete';
               }else{
                    $due_fee = $final_fee -  $this->input->post('advance_fee');
                    $fee_status = 'Pandding';
               }





$data = array( 
        'student_name'     => $this->input->post('name'),
        'parent_name'      => $this->input->post('parents_name'),
        'student_mobile'   => $this->input->post('mobile'),
        'student_email'    => $this->input->post('email'),
        'student_address'  => $this->input->post('address'),
        'parent_mobile'    => $this->input->post('parents_mobile'),
        'postal_code'      => $this->input->post('postal_code'),
        'category'         => $this->input->post('category'),
        'branch_id'        => $this->session->userdata('branch_id'),
        'DOB'              => date('Y-m-d', strtotime($this->input->post('DOB'))),
        'gender'           => $this->input->post('gender'),
        'course_id'        => $this->input->post('course'),
        'optional_subject' => $this->input->post('optional_subject'),
        'medium'           => $this->input->post('medium'),
        'profile_pic'      => $profile_pic,
        '10th'             => $this->input->post('10th'),
        '12th'             => $this->input->post('12th'),
        'graduation'       => $this->input->post('graduation'),
        'date'             => date('Y-m-d'),
        'course_fee'       => $this->input->post('course_fee'),
        'final_fee'        => $final_fee,
        'refrance'         => $this->input->post('refrance'), 
        'advance_fee'      => $this->input->post('advance_fee'),
        'fee_discount'     => $fee_discount,
        'due_fee'          => $due_fee,
        'discount_region'  => $this->input->post('discount_region'),
        'instalment'       => $this->input->post('instalment'),
        'instalment_amount'=> $this->input->post('first_instalment'),
        'instalment_date'  => date('Y-m-d', strtotime($this->input->post('instalment_date'))),
        'fee_status'       => $fee_status
            
        );
			 $register = $this->admin->_insertRow('db_admission', $data);
			 $last_id  = $this->db->insert_id();
			if($register){
			$data = array(
             
            'student_id' => $last_id,
            'date' => date('Y-m-d'),
            'instalment' =>  $this->input->post('advance_fee'),
            
        );
			 $register = $this->admin->_insertRow('db_fee', $data);
       redirect('admin/admission_list');
			}
}else{
	 $data['course'] = $this->admin->get('db_course');
	  $this->load->view('admin/header');
		$this->load->view('admin/add_admission',$data);
		$this->load->view('admin/footer');
}

}

 public function admission_list()
  {
    $data['admission'] = $this->admin->get_admission();
    $this->load->view('admin/header');
    $this->load->view('admin/admission_list',$data);
    $this->load->view('admin/footer');
  }  

  public function add_course() { 
  if($this->form_validation->run('course')){
    $data = array(
      'branch_id' => $this->input->post('branch_id'),
      'course' => $this->input->post('course'),
      'medium' => $this->input->post('medium'),
      'fees' => $this->input->post('fees'),
      'duration' => $this->input->post('duration')
        );
        $course = $this->admin->_insertRow('db_course', $data);
        if($course){
               redirect('admin/course_list');
        }else{
          $this->session->set_flashdata('course_error','somthig want wrong');
               redirect('admin/course_list');
        }
   }else{
$data['branch'] = $this->admin->get('db_branch');
$this->load->view('admin/header'); 
$this->load->view('admin/add_course',$data);
$this->load->view('admin/footer');
}
}  

 public function course_list()
  {
    $data['course'] = $this->admin->get_course();
    $this->load->view('admin/header');
    $this->load->view('admin/course_list',$data);
    $this->load->view('admin/footer');
  } 

  public function delete_course($id = '') { 
  if($id == ''){
      redirect('admin/course_list');
  } 
   $where = array('id' => $id);
    $branch = $this->admin->_deleteRowWhere('db_course',$where);
     if ($branch) {
            $this->session->set_flashdata('success', 'created successfully');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong');
        }
        redirect('admin/course_list');
   }


   

public function add_branch() { 
 if($this->form_validation->run('branch')){
           $data = array(
       'branch' => $this->input->post('branch'),
       'city' => $this->input->post('city'),
       'branch_address' => $this->input->post('branch_address'),
       'branch_email' => $this->input->post('branch_email'),
       'branch_mobile' => $this->input->post('branch_mobile'),
       'incharge_name' => $this->input->post('incharge_name'),
       'incharge_mobile' => $this->input->post('incharge_mobile'),
       
            
    );
   $branch = $this->admin->_insertRow('db_branch', $data);
     if ($branch) {
            $this->session->set_flashdata('error', 'created successfully');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong');
        }
        redirect('admin/branch_list');
 }else{
$this->load->view('admin/header'); 
$this->load->view('admin/add_branch');
$this->load->view('admin/footer');
}
}

public function branch_list() { 
$data['branch'] = $this->admin->get('db_branch'); 
$this->load->view('admin/header'); 
$this->load->view('admin/branch_list',$data);
$this->load->view('admin/footer');
}

 public function delete_branch($id = '') { 
  if($id == ''){
      redirect('admin/branch_list');
  } 
   $where = array('id' => $id);
    $branch = $this->admin->_deleteRowWhere('db_branch',$where);
     if ($branch) {
            $this->session->set_flashdata('success', 'created successfully');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong');
        }
        redirect('admin/branch_list');
   }

  public function submit_fee()
  {
    $where = array('fee_status' => 'Pandding');
    $data['pandding_fee'] = $this->admin->get_details('db_admission',$where);
    $this->load->view('admin/header');
    $this->load->view('admin/pandding_fee_list',$data);
    $this->load->view('admin/footer');
  }   

  public function student_profile($id = "")
  {
    if($id == ""){
       redirect('admin/admission_list');
    }
    $where = array('id' => $id);
    $data['student_profile'] = $this->admin->get_details('db_admission',$where);
    $where1 = array('student_id' => $id);
    $data['fee_status'] = $this->admin->get_details('db_fee',$where1);
    $this->load->view('admin/header');
    $this->load->view('admin/student_profile',$data);
    $this->load->view('admin/footer');
  }   

  public function submit_student_fee()
  {
      if($this->input->post('due_fee') > $this->input->post('student_fee')){
                $due_fee = $this->input->post('due_fee') - $this->input->post('student_fee');
                $fee_status = 'Panding';
      }elseif($this->input->post('due_fee') == $this->input->post('student_fee')){
                $due_fee = 0;
                $fee_status = 'Complete';
      }else{
             $due_fee = 0;
                $fee_status = 'Complete';
      }
      $student_id = $this->input->post('student_id');
      $data = array(
             
            'student_id' => $student_id,
            'date' => date('Y-m-d'),
            'instalment' =>  $this->input->post('student_fee'),
            
        );
    $register = $this->admin->_insertRow('db_fee', $data);

     $data1 = array(
            'due_fee' => $due_fee,
            'fee_status' => $fee_status,
            'instalment_date' =>  $this->input->post('nxt_instalment_date'),
            
        );
    $where = array('id' => $student_id);
    $register = $this->admin->_updateRowWhere('db_admission', $data1 ,$where);
    redirect('admin/student_profile/'.$student_id);
   
  }   

		
		
}