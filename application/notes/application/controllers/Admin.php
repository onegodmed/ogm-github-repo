<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Home
 *
 * @author SSV
 */
Class Admin extends MY_Controller {

    public function __construct() {
        //Add parent controller contructor
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Admin_model', 'admin');
        /*$this->load->library('form_validation');
		$this->load->model('User_model', 'User');
        $this->load->model('Frontend_model', 'frontend');
        $this->load->library('pagination');
		$this->load->library('career_builderapi');
		$this->load->helper('custome');
        $this->load->model('CustomEmail_model');
        $this->load->model('SMS_model');
        $this->load->model('Search_model', 'Search');*/

		
        //Redirect to dashboard if loggedin
        //check user is authenticate for called url

        $without_login_method = array('index', 'admin_login');
        if (in_array($this->router->method, $without_login_method)) {
            return true;
        } else {
            if ($this->session->userdata('userid') != '' && $this->session->userdata('user_type') == 'admin')
                return true;
            else {
                $this->session->set_flashdata('error', 'You are not authenticated for accessing this page, Please login.');
                redirect(base_url());
            }
        }
    }
		
	

    public function index() {
        $this->load->view('admin/login');
    }

    public function dashboard() {
        if (!$this->session->userdata('userid')) {
            redirect('admin/');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function admin_login() {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $id = 'auth_ID';
        $hasAuth = $this->admin->has_auth($email);

        if ($hasAuth != FALSE) {
        
            if ($password == $hasAuth->password) {
                $this->session->set_userdata(array(
                    'userid' => $hasAuth->admin_id,
                    'email' => $hasAuth->email,
                    'image' => $hasAuth->image,
                    'user_type' => 'admin',
                    'loggedin' => TRUE
                ));
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('error', 'invalid username or password');
                redirect(base_url('admin'));
            }
        } else {

            $this->session->set_flashdata('error', 'invalid username or password');
            redirect(base_url('admin'));
        }
    }

    public function logout() {

        $this->session->unset_userdata('userid');
        return redirect('admin/');
    }
    // section Board
    public function add_board() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['board_name'] =  ucfirst(strtolower($this->input->post('board_name')));
          $result = $this->db->insert("board",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("admin/board_list"));
          }          
                    
              
        }
       
        $this->load->view('admin/header');    
        $this->load->view('admin/add_board');      
        $this->load->view('admin/footer');
    
    }

    public function board_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['board'] = $this->admin->getData('board','*','');

        $this->load->view('admin/header');
        $this->load->view('admin/board_list', $data);
        $this->load->view('admin/footer');
    }

    public function edit_board($id){

      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['board_name'] =  ucfirst(strtolower($this->input->post('board_name')));
          $result = $this->admin->updateData('board',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect(base_url("admin/board_list"));
          }          
                    
              
        }

      $board = $this->admin->getData('board','*',array('id'=>$id));
      if ($board) {
        $data['board'] = $board[0];
      }
      $this->load->view('admin/header');    
      $this->load->view('admin/add_board',$data);      
      $this->load->view('admin/footer');
    }

    public function delete_board($id){
      $this->admin->deleteData('board',array('id'=>$id));
      $this->session->set_flashdata('success', 'Deleted successfully');
      redirect(base_url("admin/board_list"));
          
    }

    /*end board*/
    /*package section*/
    public function add_package() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['package_name'] =  ucfirst(strtolower($this->input->post('package_name')));
          $save_data['amount'] =  ucfirst(strtolower($this->input->post('amount')));
          $save_data['valid_days'] =  ucfirst(strtolower($this->input->post('valid_days')));
          
          $result = $this->db->insert("package",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("admin/package_list"));
          }          
                    
              
        }
       
        $this->load->view('admin/header');    
        $this->load->view('admin/add_package');      
        $this->load->view('admin/footer');
    
    }

    public function package_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['package'] = $this->admin->getData('package','*','');

        $this->load->view('admin/header');
        $this->load->view('admin/package_list', $data);
        $this->load->view('admin/footer');
    }

    public function edit_package($id){

      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['package_name'] =  ucfirst(strtolower($this->input->post('package_name')));
          $save_data['amount'] =  ucfirst(strtolower($this->input->post('amount')));
          $save_data['valid_days'] =  ucfirst(strtolower($this->input->post('valid_days')));
          $result = $this->admin->updateData('package',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect(base_url("admin/package_list"));
          }          
                    
              
        }

      $package = $this->admin->getData('package','*',array('id'=>$id));
      if ($package) {
        $data['package'] = $package[0];
      }
      $this->load->view('admin/header');    
      $this->load->view('admin/add_package',$data);      
      $this->load->view('admin/footer');
    }

    public function delete_package($id){
      $this->admin->deleteData('package',array('id'=>$id));
      $this->session->set_flashdata('success', 'Deleted successfully');
      redirect(base_url("admin/package_list"));
          
    }
    /*end package section*/

    public function add_courseClass($id){
      if ($this->input->server("REQUEST_METHOD") == "POST") {
          //$save_data['id'] =  ucfirst(strtolower($this->input->post('class_id')));
          $save_data['course_id'] =  $id;
          $result = $this->admin->updateData('class_list',$save_data,array('id'=>$this->input->post('class_id')))  ;      
          if ($result) {
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect(base_url("admin/add_courseClass/".$id));
          }          
                    
              
        }
        $data['class'] = $this->admin->getData('class_list','*','');
        $data['class_list'] = $this->admin->getData('class_list','*',array('course_id'=>$id));
        /*if (!empty($data['course'] )) {
          $data['course'] =$data['course'] ['0'];
        }*/
        $data['course_id'] =$id;
        $this->load->view('admin/header');    
        $this->load->view('admin/add_course_subject',$data);      
        $this->load->view('admin/footer');
    }

    

    public function add_course() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['name'] =  ucfirst(strtolower($this->input->post('course_name'))); 
          $save_data['description'] =  ucfirst(strtolower( $this->input->post('description')));
          $save_data['duration'] =  ucfirst(strtolower( $this->input->post('duration')));
         // $save_data['price'] =  ucfirst(strtolower( $this->input->post('price')));
          $save_data['package_id'] =  ucfirst(strtolower( $this->input->post('package_id')));
          $result = $this->db->insert("course",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'User Created successfully');
            redirect(base_url("admin/add_course"));
          }          
                    
              
        }
        $data['package'] = $this->admin->getData('package','*','');
        $this->load->view('admin/header');    
        $this->load->view('admin/add_course',$data);      
        $this->load->view('admin/footer');
    
    }

    public function course_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['course'] = $this->admin->getCourseList();

        $this->load->view('admin/header');
        $this->load->view('admin/course_list', $data);
        $this->load->view('admin/footer');
    }

    public function course_delete($id){
      $this->admin->deleteData('course',array('id'=>$id));
      redirect(base_url("admin/course_list"));
          
    }

    public function edit_course($id){

      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['name'] =  ucfirst(strtolower($this->input->post('course_name'))); 
          $save_data['description'] =  ucfirst(strtolower( $this->input->post('description')));
          $save_data['duration'] =  ucfirst(strtolower( $this->input->post('duration')));
         // $save_data['price'] =  ucfirst(strtolower( $this->input->post('price')));
          $save_data['package_id'] =  ucfirst(strtolower( $this->input->post('package_id')));
          $result = $this->admin->updateData('course',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'User Created successfully');
            redirect(base_url("admin/course_list"));
          }          
                    
              
        }

      $course = $this->admin->getData('course','*',array('id'=>$id));
      if ($course) {
        $data['course'] = $course[0];
      }
      $data['package'] = $this->admin->getData('package','*','');
      $this->load->view('admin/header');    
      $this->load->view('admin/add_course',$data);      
      $this->load->view('admin/footer');
    }

    /*class section*/
    public function add_class() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['class_name'] =  ucfirst(strtolower($this->input->post('class_name'))); 
         $result = $this->db->insert("class_list",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("admin/class_list"));
          }          
                    
              
        }
        $this->load->view('admin/header');    
        $this->load->view('admin/add_class');      
        $this->load->view('admin/footer');
    
    }

    public function class_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['class'] =$this->admin->getData('class_list','*','');

        $this->load->view('admin/header');
        $this->load->view('admin/class_list', $data);
        $this->load->view('admin/footer');
    }

    public function class_delete($id){
      $this->admin->deleteData('class_list',array('id'=>$id));
      redirect(base_url("admin/class_list"));
          
    }

    public function edit_class($id){

      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['class_name'] =  ucfirst(strtolower($this->input->post('class_name')));
          $result = $this->admin->updateData('class_list',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect(base_url("admin/class_list"));
          }          
                    
              
        }

      $class = $this->admin->getData('class_list','*',array('id'=>$id));
      if ($class) {
        $data['class'] = $class[0];
      }
      $this->load->view('admin/header');    
      $this->load->view('admin/add_class',$data);      
      $this->load->view('admin/footer');
    }

    public function add_subject() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['subject_name'] =  ucfirst(strtolower($this->input->post('subject_name')));
          $result = $this->db->insert("subject_list",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("admin/subject_list"));
          }          
                    
              
        }
        $this->load->view('admin/header');    
        $this->load->view('admin/add_subject');      
        $this->load->view('admin/footer');
    
    }

    public function edit_subject($id){

      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['subject_name'] =  ucfirst(strtolower($this->input->post('subject_name')));
          $result = $this->admin->updateData('subject_list',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'User Created successfully');
            redirect(base_url("admin/subject_list"));
          }          
                    
              
        }

      $subject = $this->admin->getData('subject_list','*',array('id'=>$id));
      if ($subject) {
        $data['subject'] = $subject[0];
      }
      $this->load->view('admin/header');    
      $this->load->view('admin/add_subject',$data);      
      $this->load->view('admin/footer');
    }



    public function subject_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['subject'] = $this->admin->getData('subject_list','*','');

        $this->load->view('admin/header');
        $this->load->view('admin/subject_list', $data);
        $this->load->view('admin/footer');
    }

    public function subject_delete($id){
      $this->admin->deleteData('subject_list',array('id'=>$id));
      redirect(base_url("admin/subject_list"));
          
    }

    public function add_chapter() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['board_id'] =  ucfirst(strtolower($this->input->post('board_id')));
          $save_data['class_id'] =  ucfirst(strtolower($this->input->post('class_id')));
          $save_data['course_id'] =  ucfirst(strtolower($this->input->post('course_id')));
          $save_data['subject_id'] =  ucfirst(strtolower($this->input->post('subject_id')));
          $save_data['chapter_name'] =  ucfirst(strtolower($this->input->post('chapter_name')));
          $save_data['isPaid'] =  ucfirst(strtolower($this->input->post('isPaid')));
          $result = $this->db->insert("chapter",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("admin/chapter_list"));
          }          
                    
              
        }
        $data['board'] = $this->admin->getData('board','*','');
        $data['course'] = $this->admin->getData('course','*','');
        $data['class'] = $this->admin->getData('class_list','*','');
        $data['subject'] = $this->admin->getData('subject_list','*','');
       

        $this->load->view('admin/header');    
        $this->load->view('admin/add_chapter',$data);      
        $this->load->view('admin/footer');
    
    }

    public function chapter_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['chapter'] = $this->admin->getChapterData();
        $this->load->view('admin/header');
        $this->load->view('admin/chapter_list', $data);
        $this->load->view('admin/footer');
    }

    public function edit_chapter($id) {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['board_id'] =  ucfirst(strtolower($this->input->post('board_id')));
          $save_data['class_id'] =  ucfirst(strtolower($this->input->post('class_id')));
          $save_data['course_id'] =  ucfirst(strtolower($this->input->post('course_id')));
          $save_data['subject_id'] =  ucfirst(strtolower($this->input->post('subject_id')));
          $save_data['chapter_name'] =  ucfirst(strtolower($this->input->post('chapter_name')));
          $result = $this->admin->updateData('chapter',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect(base_url("admin/chapter_list"));
          }          
                    
              
        }
        $data['board'] = $this->admin->getData('board','*','');
        $data['course'] = $this->admin->getData('course','*','');
        $data['class'] = $this->admin->getData('class_list','*','');
        $data['subject'] = $this->admin->getData('subject_list','*','');
        $data['chapter'] = $this->admin->getData('chapter','*',array('id'=>$id));
        if (!empty($data['chapter'])) {
          $data['chapter']=$data['chapter'][0];
        }
       

        $this->load->view('admin/header');    
        $this->load->view('admin/add_chapter',$data);      
        $this->load->view('admin/footer');
    
    }

    public function chapter_delete($id){
      $this->admin->deleteData('chapter',array('id'=>$id));
      redirect(base_url("admin/chapter_list"));
          
    }

    public function add_topic($chapter_id) {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['chapter_id'] =  ucfirst(strtolower($this->input->post('chapter_id')));
          $save_data['topic_name'] =  ucfirst(strtolower($this->input->post('topic_name')));
          $result = $this->db->insert("topics",$save_data);    
          if ($result) {
            $this->session->set_flashdata('success', 'Created successfully');
            redirect(base_url("admin/topics_list/".$save_data['chapter_id']));
          }          
                    
              
        }
        $data['chapter_id'] = $chapter_id;
       

        $this->load->view('admin/header');    
        $this->load->view('admin/add_topic',$data);      
        $this->load->view('admin/footer');
    
    }

    public function topics_list($chapter_id) {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['topic'] = $this->admin->getData('topics','*',array('chapter_id'=>$chapter_id));

        $data['chapter_id'] = $chapter_id;
        $this->load->view('admin/header');
        $this->load->view('admin/topics_list', $data);
        $this->load->view('admin/footer');
    }

    public function topics_edit($id) {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['chapter_id'] =  ucfirst(strtolower($this->input->post('chapter_id')));
          $save_data['topic_name'] =  ucfirst(strtolower($this->input->post('topic_name')));
          $result = $this->admin->updateData('topics',$save_data,array('id'=>$id))  ;    
          if ($result) {
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect(base_url("admin/topics_list/".$save_data['chapter_id']));
          }          
                    
              
        }
        
        $data['topic'] = $this->admin->getData('topics','*',array('id'=>$id));
        if (!empty($data['topic'])) {
          $data['topic']= $data['topic'][0];
        }
        $data['chapter_id'] = $data['topic']->chapter_id;
        $this->load->view('admin/header');    
        $this->load->view('admin/add_topic',$data);      
        $this->load->view('admin/footer');
    
    }

    public function topic_delete($chapter_id,$id){
      $this->admin->deleteData('topics',array('id'=>$id));
      redirect(base_url("admin/topics_list/".$chapter_id));
          
    }

    public function topic_upload($topic_id) {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data1['type'] =  ucfirst(strtolower($this->input->post('type'))); 
         
          if (@$_FILES['upload_data']['tmp_name'] != '') {
            if ( $this->input->post('type')=='pdf') {
              $this->admin->configdoc['upload_path'] = 'assets/pdf/'; 
              $upload_data = $this->admin->uploadImage('upload_data','doc');
            }
            else{
              $this->admin->configVideo['upload_path'] = 'assets/video/'; 
              $upload_data = $this->admin->uploadImage('upload_data','video');
            }
            
             if (!empty($upload_data['error'])) {
               $this->session->set_flashdata('success',$upload_data['error']);
             }
             else{
               $save_data1['upload_url'] = $upload_data['upload_data']['file_name'];
               $save_data1['topic_id'] = $topic_id ;
               $this->db->insert("topic_uploads",$save_data1); 
               $this->session->set_flashdata('success', 'User Created successfully');
             }
          }
           
                   
                    
              
        }
        $data['topic_id']=$topic_id;
        $this->load->view('admin/header');    
        $this->load->view('admin/topic_upload',$data);      
        $this->load->view('admin/footer');
    
    }

    public function topics_uploads_list($topic_id) {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['topic_upload'] = $this->admin->getData('topic_uploads','*',array('topic_id'=>$topic_id));

        $data['topic_id'] = $topic_id;
        $this->load->view('admin/header');
        $this->load->view('admin/topic_upload_list', $data);
        $this->load->view('admin/footer');
    }


    public function add_product() {
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['subject_id'] =  ucfirst(strtolower($this->input->post('subject_id'))); 
          $save_data['course_id'] =  ucfirst(strtolower( $this->input->post('course_id')));
          $save_data['topic'] =  ucfirst(strtolower( $this->input->post('topics')));
          $save_data['chapter_name'] =  ucfirst(strtolower( $this->input->post('chapter_name')));
          $save_data['upload_type'] =  ucfirst(strtolower( $this->input->post('upload_type')));
          $save_data['board_id'] =  ucfirst(strtolower( $this->input->post('board_id')));
          $save_data['package_id'] =  ucfirst(strtolower( $this->input->post('package_id')));
          $this->db->insert("product_master",$save_data); 
          $lastID = $this->db->insert_id();
          if (@$_FILES['upload_data']['tmp_name'] != '') {
            if ( $this->input->post('upload_type')=='pdf') {
              $this->admin->configdoc['upload_path'] = 'assets/pdf/'; 
              $upload_data = $this->admin->uploadImage('upload_data','doc');
            }
            else{
              $this->admin->configVideo['upload_path'] = 'assets/video/'; 
              $upload_data = $this->admin->uploadImage('upload_data','video');
            }
            
             if (!empty($upload_data['error'])) {
               $this->session->set_flashdata('success',$upload_data['error']);
             }
             else{
               $save_data1['upload_url'] = $upload_data['upload_data']['file_name'];
               $save_data1['product_id'] = $lastID ;
               $this->db->insert("product_upload_data",$save_data1); 

             }
          }
           
          if ($lastID) {
            $this->session->set_flashdata('success', 'User Created successfully');
          }          
                    
              
        }
        $data['course'] = $this->admin->getCourseList();
        $data['CourseParts'] = $this->admin->getCoursePartsList();
        $data['board'] = $this->admin->getData('board_master','*','');
        $data['package'] = $this->admin->getData('package_master','*','');

        $this->load->view('admin/header');    
        $this->load->view('admin/add_product',$data);      
        $this->load->view('admin/footer');
    
    }

    public function edit_product($id){

      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $save_data['subject_id'] =  ucfirst(strtolower($this->input->post('subject_id'))); 
          $save_data['course_id'] =  ucfirst(strtolower( $this->input->post('course_id')));
          $save_data['topic'] =  ucfirst(strtolower( $this->input->post('topics')));
          $save_data['chapter_name'] =  ucfirst(strtolower( $this->input->post('chapter_name')));
          $save_data['upload_type'] =  ucfirst(strtolower( $this->input->post('upload_type')));
          $save_data['board_id'] =  ucfirst(strtolower( $this->input->post('board_id')));
          $save_data['package_id'] =  ucfirst(strtolower( $this->input->post('package_id')));
          $result = $this->admin->updateData('product_master',$save_data,array('id'=>$id))  ;   
          if ($result) {
            $this->session->set_flashdata('success', 'User Created successfully');
            redirect(base_url("admin/product_list"));
          }          
                    
              
        }

      $product = $this->admin->getData('product_master','*',array('id'=>$id));
      if ($product) {
        $data['product'] = $product[0];
      }
      $data['course'] = $this->admin->getCourseList();
      $data['CourseParts'] = $this->admin->getCoursePartsList();
      $data['board'] = $this->admin->getData('board_master','*','');
      $data['package'] = $this->admin->getData('package_master','*','');

      $this->load->view('admin/header');    
      $this->load->view('admin/add_product',$data);      
      $this->load->view('admin/footer');
    }

    public function product_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['ProductList'] = $this->admin->getProductList();
        $this->load->view('admin/header');
        $this->load->view('admin/product_list', $data);
        $this->load->view('admin/footer');
    }

    public function upload_more($id){
      if ($this->input->server("REQUEST_METHOD") == "POST") {
          $lastID = $this->input->post('id');
          if (@$_FILES['upload_data']['tmp_name'] != '') {
            if ( $this->input->post('upload_type')=='pdf') {
              $this->admin->configdoc['upload_path'] = 'assets/pdf/'; 
              $upload_data = $this->admin->uploadImage('upload_data','doc');
            }
            else{
              $this->admin->configVideo['upload_path'] = 'assets/video/'; 
              $upload_data = $this->admin->uploadImage('upload_data','video');
            }
            
             if (!empty($upload_data['error'])) {
               $this->session->set_flashdata('success',$upload_data['error']);
             }
             else{
               $save_data1['upload_url'] = $upload_data['upload_data']['file_name'];
               $save_data1['product_id'] = $lastID ;
               $save_data1['upload_type'] =  ucfirst(strtolower( $this->input->post('upload_type')));
               $this->db->insert("product_upload_data",$save_data1); 

             }
          }
        }
          
$data['id']=$id;
        $this->load->view('admin/header');
        $this->load->view('admin/upload_more', $data);
        $this->load->view('admin/footer');
    
    }

    public function add_MCQ($course_id) {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
           // foreach ($this->input->post('question') as $key => $value) {

                  $save_data['question'] =   ucfirst(strtolower( $this->input->post('question')));
                  $save_data['isPaid'] =   ucfirst(strtolower( $this->input->post('isPaid')));
                  
                  $save_data['course_id'] =  $course_id;
                  $this->db->insert("mcq_master",$save_data); 
                  $lastID = $this->db->insert_id();
                  if ($lastID) {
                    foreach ($this->input->post('option') as $key => $value) {
                      $save_data1['question_id'] = $lastID;
                      $save_data1['is_correct'] = ucfirst(strtolower( $this->input->post('correct_answer')[$key]));
                      $save_data1['option'] = ucfirst(strtolower( $this->input->post('option')[$key]));
                      $this->db->insert("mcq_answer",$save_data1); 
                    
                    }
                    $this->session->set_flashdata('success', 'User Created successfully');
                  }
           // }         
                      
                
          }
        $data['id'] =$course_id;
        $data['mcq'] = $this->admin->getMCQByCourseID($course_id);

        $this->load->view('admin/header');
        $this->load->view('admin/add_mcq',$data);
        $this->load->view('admin/footer');

    }

    public function edit_MCQ($course_id,$id) {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
           // foreach ($this->input->post('question') as $key => $value) {

                  $save_data['question'] =   ucfirst(strtolower( $this->input->post('question')));
                  $save_data['course_id'] =  $course_id;
                 $save_data['isPaid'] =   ucfirst(strtolower( $this->input->post('isPaid')));
                  
                  $result = $this->admin->updateData('mcq_master',$save_data,array('id'=>$id))  ;   
                 // $lastID = $this->db->insert_id();
                  //if ($result) {
                    foreach ($this->input->post('option') as $key => $value) {
                      $save_data1['question_id'] = $id;
                      $save_data1['is_correct'] = ucfirst(strtolower( $this->input->post('correct_answer')[$key]));
                      $save_data1['option'] = ucfirst(strtolower( $this->input->post('option')[$key]));
                     
                       $result = $this->admin->updateData('mcq_answer',$save_data1,array('id'=> $this->input->post('id')[$key]))  ; 
                    
                    }
                    $this->session->set_flashdata('success', ' Updated successfully');
                    redirect(base_url('admin/add_MCQ/'.$course_id));
                  //}
           // }         
                      
                
          }
        $data['id'] =$course_id;
        $data['mcq'] = $this->admin->getMCQByCourseID($course_id);
        $data['mcqById'] = $this->admin->getMCQByID($id);
    
        $this->load->view('admin/header');
        $this->load->view('admin/add_mcq',$data);
        $this->load->view('admin/footer');

    }

    public function delete_MCQ($id){
      $this->admin->deleteData('mcq_master',array('id'=>$id));
      $this->admin->deleteData('mcq_answer',array('question_id'=>$id));
      $this->session->set_flashdata('success', 'Deleted successfully');
      redirect($_SERVER['HTTP_REFERER']);

    }

    public function user_list() {
        // $data['skills'] = $this->admin->get('skills', '', '');
        $data['user'] = $this->admin->getData('user_master','*','');

        $this->load->view('admin/header');
        $this->load->view('admin/users_list', $data);
        $this->load->view('admin/footer');
    }

    
	
	
      
             




}

?>
