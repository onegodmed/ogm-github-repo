<?php 
class Admin_model extends MY_Model {
	var $config;
    var $configVideo;
    var $configdoc;
    var $error;
   	public function __construct()
	{
		//Add parent controller contructor
		parent::__construct();
		$this->load->model('admin_model', 'admin');
		$this->load->database();
		$this->config['upload_path'] = 'assets/img/';
        $this->config['allowed_types'] = 'gif|jpg|png';
        $this->config['max_size'] = 5242880;
//        $this->config['max_width'] = 1024;
//        $this->config['max_height'] = 768;
        $this->config['max_filename'] = '255';
        $this->config['overwrite'] = TRUE;
        
        //resume config
        $this->configdoc['upload_path'] = 'assets/pdf/';
        $this->configdoc['allowed_types'] = 'doc|docx|txt|pdf';
        $this->configdoc['max_size'] = 0;
        $this->configdoc['max_filename'] = '255';
        $this->configdoc['overwrite'] = TRUE;
        $this->configdoc['encrypt_name'] = TRUE;
        
                
       // $this->configVideo['upload_path'] = 'assets/video/portfolios/';
        $this->configVideo['max_size'] = '2097152';//2mb
        $this->configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4|3gp|3gpp';
        $this->configVideo['overwrite'] = FALSE;
        $this->configVideo['remove_spaces'] = TRUE;
        $this->configVideo['encrypt_name'] = TRUE;

		//Redirect to dashboard if loggedin
		/*if( $this->_isAuthLoggedIn() )
		{
			return redirect('dashboard/');
		}*/
	}

	public function uploadImage($field_name = 'profile_image', $type = 'image',$sessionVal=null) {

        if ($type == 'video'){
            $this->load->library('upload', $this->configVideo);
            $upload_path = $this->configVideo['upload_path'] ;
        }
        elseif ($type == 'doc'){
                
            $this->load->library('upload', $this->configdoc);
            $upload_path = $this->configdoc['upload_path'] ;
        }
        else {
            $upload_path = $this->config['upload_path'] ;
            $this->load->library('upload', $this->config);                  
        }           
            
                
        if (!$this->upload->do_upload($field_name)) {
            $return = array('error' => $this->upload->display_errors());
        } else {
            $upload_data = $this->upload->data();           
            if($type = 'image' && $upload_data['image_width'] > 300){
                $this->resize($upload_data, $this->config['file_name']);
            }                     
           
            $return = array('upload_data' => $upload_data);
            $return['upload_data']['file_name'] = base_url() . $upload_path. $return['upload_data']['file_name'];
        }      
        return $return;
    }

    public function getCourseList()
	{
		return $this->getData('course','*','');
	}

    public function getChapterData(){
        $this->db->select('chapter.*,board.board_name,course.name,class_list.class_name,subject_list.subject_name');
        $this->db->from('chapter');
        $this->db->join('board','board.id=chapter.board_id');
        $this->db->join('class_list','class_list.id=chapter.class_id');
        $this->db->join('course','course.id=chapter.course_id');
        $this->db->join('subject_list','subject_list.id=chapter.subject_id');
        $query = $this->db->get();
        return $query->result();
    }

	public function getSubjectList(){
		$this->db->select('course_part.name as subject_name,course_part.id,course_part.course_id,course.name as course_name');
		$this->db->from('course_part');
		$this->db->join('course','course.id=course_part.course_id');
		$query = $this->db->get();
        return $query->result();
	}

	public function getCoursePartsList()
	{
		return $this->getData('course_part','*','');
	}

	public function getProductList()
	{
		$this->db->select('product_master.*,course.name as course_name ,course_part.name as subject_name');
        $this->db->from('product_master');
        $this->db->join('course','course.id=product_master.course_id','left');
        $this->db->join('course_part','course_part.id=product_master.subject_id','left');
         return $query = $this->db->get()->result();

	}

	

	



     public function get($table) {
        $this->db->select('*');
        $this->db->from($table);
        // $this->db->order_by($order, $order_type);
        return $query = $this->db->get()->result();
    }

     public function get_details($table, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();

    }

/*	public function get_details($table, $where, $order, $order_type,$limit='') {
        $this->db->select('*');
        $this->db->from($table);
        if($order!='' && $order_type!='')
        $this->db->order_by($order, $order_type);
	    if ($where!='')
	        $this->db->where($where);
	    if ($limit!='')
	        $this->db->limit($limit);
        $query = $this->db->get();      
        return $query->result();
    }*/

  	public function _insertRow1($table,$data)
   	{
        $this->db->insert($table,$data);
        return true;
    }

    
    function _updateRowWhere($table, $data , $where ) {
		$this->db->where($where);
		if($this->db->update($table, $data))
	    { 
	       return true ;
		}else{ 
		   return false;
		}
	}
	
	public function _deleteRowWhere($table,$where)
	{
		return $this->db->delete($table,$where);
	}
	
    
    //Check in db username exist or not
	public function has_auth($email)
	{
		$hasUser = $this->db
						->select('*')
						->where('email', $email)
						->limit(1)
						->get('admin');
						
	
		return ( $hasUser->num_rows() ) ? $hasUser->row() : FALSE;
	}
	
	
	// GET ALL developer
    public function get_AllDeveloper() { 
        $this->db->select('*,users.id as user_id,developer_profile_videos.type as video_type,developer_profile_videos.verified as video_verified,developer_profile_videos.id as video_id');
        $this->db->from('users');
        $this->db->where(['users.type'=>'developer']);
        $this->db->join('developer_profile_videos',"developer_profile_videos.type='intro' and developer_profile_videos.user_id=users.id",'left');
        $this->db->order_by('users.id',"desc");
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result();
    }
    
    // GET ALL client
    public function get_AllClient() {
        $this->db->select('*,users.id as user_id');
        $this->db->from('users');
        $this->db->where(['type'=>'client']);
        $this->db->order_by('id',"desc");
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result();
    }

    public function courseAllUploads($id){
        $this->db->select('topic_uploads.upload_url,topic_uploads.type,topics.topic_name,chapter.chapter_name,subject_list.subject_name,class_list.class_name,course.name as course_name');
        $this->db->from('topic_uploads');
        $this->db->join('topics','topics.id=topic_uploads.topic_id');
        $this->db->join('chapter','chapter.id=topics.chapter_id');
        $this->db->join('subject_list','subject_list.id=chapter.subject_id');
        $this->db->join('class_list','class_list.id=chapter.class_id');
        $this->db->join('course','course.id=chapter.course_id');        
        $this->db->where('chapter.course_id',$id);
       // $this->db->order_by('id',"desc");
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result();

    }

    public function getMCQByCourseID($course_id){
        $this->db->select('mcq_master.*,course.name');
       
        $this->db->join('course','course.id = mcq_master.course_id');
        $this->db->where('mcq_master.course_id',$course_id);
        
        $query = $this->db->get('mcq_master');
//        echo $this->db->last_query();
        return $query->result();
    }

    public function getMCQByID($id){
        $return = array();
        $this->db->select('mcq_master.*');       
        $this->db->where('mcq_master.id',$id);        
        $query = $this->db->get('mcq_master');
//        echo $this->db->last_query();
        $return =   (array) $query->row();
        if ($return) {
            $this->db->select('mcq_answer.*');
            $this->db->where('mcq_answer.question_id',$return['id']);
            
            $query1 = $this->db->get('mcq_answer');
    //        echo $this->db->last_query();
            $return['option'] = $query1->result();
            # code...
        }
        return $return;
    }

	
  



	
} 
?> 