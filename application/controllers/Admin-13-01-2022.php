<?php
Class Admin extends CI_Controller {
public function __construct() {
//Add parent controller contructor
parent::__construct();
$this->load->model('admin_model', 'admin');
$this->load->library('form_validation'); 
if($this->session->userdata('id') ==''){
redirect('');
}
$this->load->library('ajax_pagination'); 
        $this->perPage = 10;
}
// Show login page
public function index() { 
date('dmyhis');
$this->load->view('admin/header');
//  
$this->load->view('admin/index');
$this->load->view('admin/footer');
}
public function student_registration_form() {
$data['question'] = $this->admin->get('question');
$where = array('branch_id' => $this->session->userdata('branch_id'));
$data['course'] = $this->admin->get_details('course', $where);
$this->load->view('admin/header');
$this->load->view('admin/student_registration_form',$data);
$this->load->view('admin/footer');
}
public function register_user() {
$where = array('student_mobile' => $this->input->post('student_mobile'));
$check = $this->admin->get_details('tmp_student', $where);
if($check){
$this->session->set_flashdata('error', 'Mobile Number Is Already exists');
redirect('admin/student_registration_form');
}
if($this->session->userdata('user_type') != 'reception'){
$data = array(
'student_name' => $this->input->post('student_name'),
'student_mobile' => $this->input->post('student_mobile'),
'student_email' => $this->input->post('student_email'),
'address' => $this->input->post('address'),
'class' => $this->input->post('class'),
'clg'   => $this->input->post('clg'),
'status' => "Pandding",
'course' => $this->input->post('course'),
'date_of_birth' => $this->input->post('date_of_birth'),
'father_occupation' => $this->input->post('father_occupation'),
'mother_occupation' => $this->input->post('mother_occupation'),
'communication' => $this->input->post('communication'),
'branch_id'     => $this->session->userdata('branch_id'),
'counsellor_id' => $this->session->userdata('id'),
'duration' => $this->input->post('duration'),
'medium' => $this->input->post('medium'),
'refrance' => $this->input->post('refrance'),
'status' => "Complete",     
'10th'          =>$this->input->post('high_school')."%",
'12th'          =>$this->input->post('high_secondry')."%",
'graduation'          =>$this->input->post('graduation')."%",
'post_graduation'          =>$this->input->post('post_graduation')."%",
'date'     => date('d-m-Y'),
'intrested' => $this->input->post('intrested')
);
}else{
$data = array(
'student_name' => $this->input->post('student_name'),
'student_mobile' => $this->input->post('student_mobile'),
'student_email' => $this->input->post('student_email'),
'address' => $this->input->post('address'),
'class' => $this->input->post('class'),
'clg'   => $this->input->post('clg'),
'status' => "Pandding",
'course' => $this->input->post('course'),
'date_of_birth' => $this->input->post('date_of_birth'),
'father_occupation' => $this->input->post('father_occupation'),
'mother_occupation' => $this->input->post('mother_occupation'),
'communication' => $this->input->post('communication'),
'branch_id'     => $this->session->userdata('branch_id'),
'date'     => date('d-m-Y'),
'counsellor_id' => $this->session->userdata('id')
);
}
$register = $this->admin->_insertRow('tmp_student', $data);
if ($register) {
$mobile = $this->input->post('student_mobile');
$text = "Welcome%20to%20kautilya%20Acadmy";
$ch=curl_init('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=3wyvqUjJjUC1PBy5zkhomQ&senderid=SMSTST&channel=2&DCS=0&flashsms=0&number='.$mobile.'&text='.$text.'&route=1');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
$data1 = curl_exec($ch);
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/student_registration_form');
}
public function edit_student_form($id) {
// $where = array('is_active' => 1 , 'deleted'=>'0');
$data['id'] = $id;
$data['question'] = $this->admin->get('question');
$where = array('sudent_id' => $id);
$data['student'] = $this->admin->get_details('tmp_student', $where);
// $data1= array(
//        'status' => 'views',
//     );
//    $status = $this->admin->_updateRowWhere('tmp_student',$data1,$where); 
$this->load->view('admin/header');
$this->load->view('admin/edit_student_form',$data);
$this->load->view('admin/footer');
}

public function branch_info($id) {
// $where = array('is_active' => 1 , 'deleted'=>'0');
$data['id'] = $id;
//$data['question'] = $this->admin->get('question');
$where = array('id' => $id);
$data['branch'] = $this->admin->get_details('branch', $where);
// $data1= array(
//        'status' => 'views',
//     );
//    $status = $this->admin->_updateRowWhere('tmp_student',$data1,$where); 
$this->load->view('admin/header');
$this->load->view('admin/branch_info',$data);
$this->load->view('admin/footer');
}

public function update_student_registration_form() {
$count = count($this->input->post('question'));
$data = array(
'student_name' => $this->input->post('student_name'),
'student_mobile' => $this->input->post('student_mobile'),
'student_email' => $this->input->post('student_email'),
'address' => $this->input->post('address'),
'class' => $this->input->post('class'),
// 'course' => $this->input->post('course'),
'duration' => $this->input->post('duration'),
'medium' => $this->input->post('medium'),
'refrance' => $this->input->post('refrance'),
'status' => "Complete",
'counsellor_id' =>$this->input->post('id'),
'10th'          =>$this->input->post('high_school')."%",
'12th'          =>$this->input->post('high_secondry')."%",
'graduation'          =>$this->input->post('graduation')."%",
'post_graduation'          =>$this->input->post('post_graduation')."%",
'intrested' => $this->input->post('intrested')
);
$where = array('sudent_id' => $this->input->post('id'));
$register = $this->admin->_updateRowWhere('tmp_student',$data,$where);
if ($register) {
for ($i=0; $i < $count ; $i++) { 
$data1 = array(
'question_id' => $this->input->post('question')[$i],
'answer' => $this->input->post('ans'.$i),
'user_id' => $this->input->post('id')
);
$answer = $this->admin->_insertRow('user_answer_table', $data1);
}
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/student_list');
}
public function student_list() {
$data1['student'] = $this->admin->get('course');
$where = array('course' => 'course');
$data['student'] = $this->admin->get('tmp_student');
if($this->session->userdata('user_type')=='admin'){ 
$where = array('status' => 'Pandding');
$data['student'] = $this->admin->get_details('tmp_student', $where);
}else{
$where1 = array('branch_id' => $this->session->userdata('branch_id'));
$where = array('status' => 'Pandding');
$data['student'] = $this->admin->get_where_details('tmp_student', $where ,$where1);
}
$this->load->view('admin/header');  
$this->load->view('admin/student_list',$data);
$this->load->view('admin/footer');
}
public function add_question() {  
$this->load->view('admin/header');
$this->load->view('admin/add_question');
$this->load->view('admin/footer');
}
public function add_question_code() {
$data = array(
'question' => $this->input->post('question'),
'ans1'     => $this->input->post('ans1'),
'ans2'     => $this->input->post('ans2'),
'ans3'     => $this->input->post('ans3'),
'ans4'     => $this->input->post('ans4'),
);
$register = $this->admin->_insertRow('question', $data);
if ($register) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/add_question');
}
public function logout() {
if($this->session->userdata('user_type') == 'Astrologer'){
    $this->session->unset_userdata('id');
    $this->session->sess_destroy();
   redirect('partner-login/'); 
} else if($this->session->userdata('user_type') == 'admin'){
    $this->session->unset_userdata('id');
    $this->session->sess_destroy();
   redirect('adminlogin/'); 
} else{
    $this->session->unset_userdata('id');
    $this->session->sess_destroy();
    redirect('');
}

}
// ------------------      Super Category  --------------------
public function add_super_cat() { 
$this->load->view('admin/header');
$this->load->view('admin/add_super_cat');
$this->load->view('admin/footer');
}
public function edit_super_cat($id) {
$where = array('id' => $id);
$data['super_category'] = $this->admin->get_details('super_categories', $where);
$this->load->view('admin/header');
$this->load->view('admin/edit_super_cat',$data);
$this->load->view('admin/footer');
}
public function super_category_list() { 
$data['super_category'] = $this->admin->get('super_categories');
$this->load->view('admin/header');
$this->load->view('admin/super_cat_list',$data);
$this->load->view('admin/footer');
}
public function add_super_category_code() { 
$config['upload_path']  = 'assets/categories_image';
$config['allowed_types']  = 'jpg|png|jpeg';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('image'))
{
$images = ("abc.png");   
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];
}
$data = array(
'super_category'    => $this->input->post('super_category'),
'menu_id'           => $this->input->post('menu_id'),
'description'       => $this->input->post('description'),
'short_description'       => $this->input->post('short_description'),
'date'              =>date('Y-m-d'), 
'image' => $images,
'status'      => '1'        
);
$category = $this->admin->_insertRow('super_categories', $data);
if ($category) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/super_category_list');
}
public function update_super_category() { 
$data = array(
'super_category' => $this->input->post('super_category'),
'description' => $this->input->post('description')
);
$where = array('id' => $this->input->post('id'));
$branch = $this->admin->_updateRowWhere('super_categories',$data,$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/super_category_list');
}
public function delete_super_category($id) {  
$where = array('id' => $id);
$branch = $this->admin->_deleteRowWhere('super_categories',$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/super_category_list');
}
//-----------------------  Add categories --------------------------
public function add_cat() { 
$data['super_category'] = $this->admin->get('super_categories');
$this->load->view('admin/header');
$this->load->view('admin/add_cat',$data);
$this->load->view('admin/footer');
}
public function edit_cat($id) {
$data['super_category'] = $this->admin->get('super_categories');
$where = array('id' => $id);
$data['category'] = $this->admin->get_details('categories', $where);
$this->load->view('admin/header');
$this->load->view('admin/edit_cat',$data);
$this->load->view('admin/footer');
}
public function add_category_code() { 
$config['upload_path']  = '../assets/categories_image';
$config['allowed_types']  = 'jpg|png|jpeg';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('image'))
{
$images = ("abc.png");   
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];
}
$data = array(
'super_cat_id' =>$this->input->post('super_category_id'),
'category' =>$this->input->post('category'),
'description'       =>$this->input->post('description'),
'date'              =>date('Y-m-d'), 
'image' => $images,
'status'            => '1'        
);
$category = $this->admin->_insertRow('categories', $data);
if ($category) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/category_list');
}
public function category_list() { 
$data['category'] = $this->admin->get_category();
$this->load->view('admin/header');
$this->load->view('admin/cat_list',$data);
$this->load->view('admin/footer');
}
public function update_category() { 
$data = array(
'category'    => $this->input->post('category'),
'description' => $this->input->post('description'),
'super_cat_id'=> $this->input->post('super_category_id')
);
$where = array('id' => $this->input->post('id'));
$branch = $this->admin->_updateRowWhere('categories',$data,$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/category_list');
}
public function delete_category($id) {  
$where = array('id' => $id);
$branch = $this->admin->_deleteRowWhere('categories',$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/category_list');
}
//-----------------
public function question_list() { 
$data['question'] = $this->admin->get('question');
$this->load->view('admin/header');
$this->load->view('admin/question_list',$data);
$this->load->view('admin/footer');
}
public function edit_branch($id) {  
$where = array('id' => $id);
$data['branch'] = $this->admin->get_details('branch', $where);
$this->load->view('admin/header');
$this->load->view('admin/edit_branch',$data);
$this->load->view('admin/footer');
}
public function edit_question($id) {  
$where = array('id' => $id);
$data['question'] = $this->admin->get_details('question', $where);
$this->load->view('admin/header');
$this->load->view('admin/edit_question',$data);
$this->load->view('admin/footer');
}
public function update_branch_code() { 
$data = array(
'branch' => $this->input->post('branch'),
'city' => $this->input->post('city'),
'branch_address' => $this->input->post('branch_address'),
'branch_email' => $this->input->post('branch_email'),
'branch_mobile' => $this->input->post('branch_mobile'),
'incharge_name' => $this->input->post('incharge_name'),
'incharge_mobile' => $this->input->post('incharge_mobile')
);
$where = array('id' => $this->input->post('id'));
$branch = $this->admin->_updateRowWhere('branch',$data,$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/branch_list');
}
/*QUESTION CODE*/
public function update_question_code() { 
$data = array(
'question' => $this->input->post('question'),
'ans1' => $this->input->post('ans1'),
'ans2' => $this->input->post('ans2'),
'ans3' => $this->input->post('ans3'),
'ans4' => $this->input->post('ans4'),         
);
$where = array('id' => $this->input->post('id'));
$question = $this->admin->_updateRowWhere('question',$data,$where);
if ($question) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/question_list');
}
public function delete_question($id) {  
$where = array('id' => $id);
$question = $this->admin->_deleteRowWhere('question',$where);
if ($question) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/question_list');
}
public function add_course() {  
$data['branch'] = $this->admin->get('branch');
$this->load->view('admin/header');
$this->load->view('admin/add_course',$data);
$this->load->view('admin/footer');
}
public function edit_course($id) {  
$data['branch'] = $this->admin->get('branch');
$where = array('id' => $id);
$data['course'] = $this->admin->get_details('course', $where);
$this->load->view('admin/header');
$this->load->view('admin/edit_course',$data);
$this->load->view('admin/footer');
}
public function course_list() { 
$data['course'] = $this->admin->get('course');
$data['branch'] = $this->admin->get('branch');
$this->load->view('admin/header');
$this->load->view('admin/course_list',$data);
$this->load->view('admin/footer');
}
public function add_course_code() {
$data = array(
'branch_id' => $this->input->post('branch_id'),
'course' => $this->input->post('course'),
'medium' => $this->input->post('medium'),
'fees' => $this->input->post('fees'),
'duration' => $this->input->post('duration')
);
$register = $this->admin->_insertRow('course', $data);
if ($register) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/add_course');
} 
public function update_course_code() {  
$data = array(
'branch_id' => $this->input->post('branch_id'),
'course' => $this->input->post('course'),
'medium' => $this->input->post('medium'),
'fees' => $this->input->post('fees'),
'duration' => $this->input->post('duration')
);
$where = array('id' => $this->input->post('id'));
$branch = $this->admin->_updateRowWhere('course',$data,$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/course_list');
}
public function delete_course($id) {  
$where = array('id' => $id);
$branch = $this->admin->_deleteRowWhere('course',$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/course_list');
}
public function course_list1() { 
$data['course'] = $this->admin->get('course');
$this->load->view('admin/header');
$this->load->view('admin/course_list',$data);
$this->load->view('admin/footer');
}
public function exists_admission() { 
$this->load->view('admin/header');
$this->load->view('admin/exists_admission');
$this->load->view('admin/footer');
}
public function add_admission() { 
if($this->input->post('mobile'))
{
if($this->session->userdata('user_type')=='admin'){ 
$where = array('student_mobile' => $this->input->post('mobile'));
$data['user'] = $this->admin->get_details('tmp_student', $where);   
}else{   
$where1 = array('branch_id' => $this->session->userdata('branch_id'));
$where = array('student_mobile' => $this->input->post('mobile'));
$data['user'] = $this->admin->get_where_details('tmp_student', $where,$where1);
}
if(empty($data['user'])){
$this->session->set_flashdata('error', 'student is not exists plese cleck New Admission Button');
redirect('admin/exists_admission');
}
}else{
$data['user'] = "";
}
$where = array('branch_id' => $this->session->userdata('branch_id'));
$data['course'] = $this->admin->get_details('course', $where);
$this->load->view('admin/header');
$this->load->view('admin/add_admission',$data);
$this->load->view('admin/footer');
}
public function admission_list() { 
$data['admission'] = $this->admin->get('admission');
$data['branch'] = $this->admin->get('branch');
$this->load->view('admin/header');
$this->load->view('admin/admission_list',$data);
$this->load->view('admin/footer');
}
public function admission_report() { 
if($this->input->post('from') AND $this->input->post('to')){
$this->db->select('*');
$this->db->from('admission');
$this->db->where('branch_id',$this->input->post('branch_id'));
$this->db->where('date>=',date('d-m-Y', strtotime($this->input->post('from'))));
$this->db->where('date<=',date('d-m-Y', strtotime($this->input->post('to'))));
$query = $this->db->get();
$data['admission']  = $query->result();
}elseif($this->input->post('from')){
$this->db->select('*');
$this->db->from('admission');
$this->db->where('branch_id',$this->input->post('branch_id'));
$this->db->where('date>=',date('d-m-Y', strtotime($this->input->post('from'))));
$query = $this->db->get();
$data['admission']  = $query->result();
}else{
$data['admission'] = $this->admin->get('admission');
}
$data['branch'] = $this->admin->get('branch');
$data['course'] = $this->admin->get('course');
$this->load->view('admin/header');
$this->load->view('admin/admission_report',$data);
$this->load->view('admin/footer');
}
public function add_admission_code() { 
if($this->input->post('total_fees') < $this->input->post('advance_fees')){
$this->session->set_flashdata('error', $this->input->post('advance_fees')-$this->input->post('total_fees').' You submit Extra Fees');
redirect('admin/add_admission');
}
$branch_id = $this->session->userdata('branch_id');
$course_id = $this->input->post('course');
$data = array(
// ''   => ,
'student_name' =>$this->input->post('student_name'),
'branch_id' => $branch_id,
'student_mobile' => $this->input->post('student_mobile'),
'student_email' => $this->input->post('student_email'),
'address' => $this->input->post('address'),
'class' => $this->input->post('class'),
'course' => $course_id,
// 'duration' => $this->input->post('duration'),
'medium' => $this->input->post('medium'),
'refrance' => $this->input->post('refrance'),
'total_fees' => $this->input->post('total_fees'),
'advance_fees' => $this->input->post('advance_fees'),
'due_fees'    => $this->input->post('total_fees')-$this->input->post('advance_fees'),
'instalment' => $this->input->post('instalment'),
'counsellor_id' =>$this->session->userdata('id'),
'date'       => date('d-m-Y'),
'status'     => "Active"
);
$admission = $this->admin->_insertRow('admission',$data);
$last_id = $this->db->insert_id();
if($last_id){
$student_id= "00".$branch_id."".$course_id."00".$last_id;
$mobile =$this->input->post('student_mobile');  
$text   = $student_id;
$data = array(
'student_id' => $student_id,    
);
$where = array('id' => $last_id);
$update_student_id = $this->admin->_updateRowWhere('admission',$data,$where);
}
if ($update_student_id) {
$data = array(
'student_id' => $student_id,
'amount' => $this->input->post('advance_fees'),
'date'       => date('d-m-Y'),
);  
$admission = $this->admin->_insertRow('student_fee',$data);  
if($$admission){
$this->session->set_flashdata('success', 'created successfully');
}else{
$this->session->set_flashdata('error', 'Something went wrong');
}
//              $ch=curl_init('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=3wyvqUjJjUC1PBy5zkhomQ&senderid=SMSTST&channel=2&DCS=0&flashsms=0&number='.$mobile.'&text='.$text.'&route=1');
//  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//  curl_setopt($ch,CURLOPT_POST,1);
//  curl_setopt($ch,CURLOPT_POSTFIELDS,"");
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
//  $data1 = curl_exec($ch);
//  print_r($data1);
//             $where1 = array('student_mobile' => $this->input->post('student_mobile'));
// $delete_tmp_student = $this->admin->_deleteRowWhere('tmp_student', $where1);
//           if($delete_tmp_student){
//               $this->session->set_flashdata('success', 'created successfully');
//           }else{
//              $this->session->set_flashdata('error', 'Something went wrong');
//           }
/* result of API call*/
redirect('admin/admission_report');
}
}
public function search_admission_report() { 
}
/*Add Mamber*/
public function add_mamber() {  
$data['branch'] = $this->admin->get('branch');
$this->load->view('admin/header');
$this->load->view('admin/add_mamber',$data);
$this->load->view('admin/footer');
}
public function register_mamber() {
$where = array('email' => $this->input->post('email'));
$check_emali = $this->admin->get_details('author', $where);
if($check_emali){
$this->session->set_flashdata('error', 'Already exists');
redirect('admin/add_mamber');
}
$data = array(
'name' => $this->input->post('name'),
'mobile' => $this->input->post('mobile'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password'),
'user_type' => $this->input->post('user_type'),
'branch_id' => $this->input->post('branch_id'),
);
$register = $this->admin->_insertRow('author', $data);
if ($register) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/add_mamber');
}
public function mamber_list() { 
$data['mamber'] = $this->admin->get('author');
$this->load->view('admin/header');
$this->load->view('admin/mamber_list',$data);
$this->load->view('admin/footer_list');
}
public function edit_mamber($id) {  
$where = array('id' => $id);
$data['mamber'] = $this->admin->get_details('author', $where);
//$data['branch'] = $this->admin->get('branch');
$this->load->view('admin/header');
$this->load->view('admin/edit_mamber',$data);
$this->load->view('admin/footer');
}
public function update_mamber_code() { 
$data = array(
'name' => $this->input->post('name'),
'mobile' => $this->input->post('mobile'),
'email' => $this->input->post('email'),
);
$where = array('id' => $this->input->post('id'));
$mamber = $this->admin->_updateRowWhere('author',$data,$where);
if ($mamber) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/mamber_list');
}
public function delete_mamber($id) {  
$where = array('id' => $id);
$mamber = $this->admin->_deleteRowWhere('author',$where);
if ($mamber) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/mamber_list');
}
public function take_student_fee($id) {
// $where = array('is_active' => 1 , 'deleted'=>'0');
$data['id'] = $id;
$data['question'] = $this->admin->get('question');
$where = array('id' => $id);
$data['student'] = $this->admin->get_details('admission', $where);
// $data1= array(
//        'status' => 'views',
//     );
//    $status = $this->admin->_updateRowWhere('tmp_student',$data1,$where); 
$this->load->view('admin/header');
$this->load->view('admin/take_student_fee',$data);
$this->load->view('admin/footer');
}
public function counseller_report($id) { 
$where = array('counsellor_id' => $id);
$data['counselling'] = $this->admin->get_details('tmp_student', $where); 
$where = array('counsellor_id' => $id);
$data['admission_counseller'] = $this->admin->get_details('admission', $where); 
$this->load->view('admin/header');
$this->load->view('admin/counseller_Report',$data);
$this->load->view('admin/footer');
}
public function add_expanse_code() {
$data = array(
'branch_id' => $this->input->post('branch_id'),
'member_id' => $this->input->post('member_id'),
'amount' => $this->input->post('amount'),
'date'   => date('d-m-Y'),
'description' => $this->input->post('description')
);
$register = $this->admin->_insertRow('expanse', $data);
if ($register) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/expanse_list');
} 

public function users_list() { 
    $this->load->model('Booking');
    $this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/users_list');
$this->load->view('user/list_footer');
} 
public function customerList(){
    $this->load->model('booking');
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->booking->get_details_user($postData);

    echo json_encode($data);
  }
public function delete_user($id = '') {  
$where = array('id' => $id);
$branch = $this->admin->_deleteRowWhere('author',$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/users_list');
}
public function edit_user($id = "") { 
if($id == ""){
redirect('admin/page_not_found');
}
$where = array('author.id' => $id);
$data['user'] = $this->admin->get_profile($where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_user',$data);
$this->load->view('user/form_footer');
}
public function update_user() { 
$config['upload_path']  = 'admin-assets/assets/images/users/';
$config['allowed_types']  = 'jpg|png|jpeg|JPG|JPEG|PNG';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('image'))
{
$images = $this->input->post('current_image');
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];
}
$data = array(
'name'       => $this->input->post('name'),
'email'       => $this->input->post('email'),
'mobile'       => $this->input->post('mobile'), 
'address' => $this->input->post('address'),
'city'  =>   $this->input->post('city'),
'state'  =>   $this->input->post('state'),
'image'      => $images,
'wallet_balence' => $this->input->post('wallet_balence'),
);
$where = array('id' => $this->input->post('id'));
$update_student_id = $this->admin->_updateRowWhere('author',$data,$where);
if($update_student_id){
redirect("admin/users_list");
}else{
redirect("admin/users_list"); 
}
// $this->load->view('user/form_footer');
}
public function add_astrologer() { 
$where = array('user_type' => "User");
$data['user'] = $this->admin->get_details('author', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_user',$data);
// $this->load->view('user/form_footer');
}
public function delete_astrologer($id = '') {  
$where = array('id' => $id);
$branch = $this->admin->_deleteRowWhere('author',$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/astrologer_list');
}
public function add_services($id = "") { 
if($id == ""){
redirect('admin/page_not_found');
}
$data['menu'] = $this->admin->get('menu');
$data['id']   = $id;
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_services',$data);
$this->load->view('user/form_footer');
}
public function edit_services($id ="") { 
if($id == ""){
redirect('admin/page_not_found');
}
// $data['service'] = $this->admin->get_details('services', $where);
// $astrologer_id = $data['service'][0]->astrologer_id;
// $astrologer_id = $data['services'][0]->astrologer_id;
$where = array('id' => $id);
$data['services'] = $this->admin->get_details('services', $where);
$data['menu'] = $this->admin->get('menu');
$data['id']   = $id;
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_service',$data);
$this->load->view('user/form_footer');
}
public function update_services() {
$where1 = array('id' => $this->input->post('id'));
$data['service'] = $this->admin->get_details('services', $where1);
$astrologer_id =$data['service'][0]->astrologer_id;
$data = array(
'service_name' => $this->input->post('service_name'),
'super_cat_id' => $this->input->post('super_cat_id'),
'category_id' => $this->input->post('category_id'),
'sub_cat_id' => $this->input->post('sub_cat_id'),
'actual_call_price' => $this->input->post('actual_call_price'),
'actual_chat_price' => $this->input->post('actual_chat_price'),
'price' => $this->input->post('price'),
'chat_price' => $this->input->post('chat_price'),
'vendor_chat_price' => $this->input->post('vendor_chat_price'),
'dollar_chat_price' => $this->input->post('dollar_chat_price'),
'vendor_dollar_chat_price' => $this->input->post('vendor_dollar_chat_price'),
'vendor_video_price' => $this->input->post('vendor_video_price'),
'video_dollar_price' => $this->input->post('video_dollar_price'),
'vendor_video_dollar_price' => $this->input->post('vendor_video_dollar_price'),
'video_price' => $this->input->post('video_price'),
'vendor_price' =>  $this->input->post('vendor_price'),
'vendor_dollar_price' =>  $this->input->post('vendor_dollar_price'),
'price_unit' => $this->input->post('price_unit'),
'dollar_price' =>  $this->input->post('dollar_price'),
);
$where = array('id' => $this->input->post('id'));
$branch = $this->admin->_updateRowWhere('services',$data,$where);
// if ($branch) {
// $this->session->set_flashdata('success', 'created successfully');
// } else {
// $this->session->set_flashdata('success', 'Something went wrong');
// }
redirect('admin/services_list/'.$astrologer_id);
}
public function services_list($id = "") { 
//    if($id == ""){
//   redirect('admin/page_not_found');
// }
$where = array('astrologer_id' => $id);
$data['id'] = $id;
$data['services'] = $this->admin->service_cat_subcat($where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/services_list',$data);
$this->load->view('user/form_footer');
}
public function add_services_code() { 
$astrologer_id = $this->input->post('astrologer_id'); 
$data1 = array(
'astrologer_id' => $astrologer_id,
'service_name' => $this->input->post('service_name'),
'super_cat_id' => $this->input->post('super_cat_id'),
'category_id' => $this->input->post('category_id'),
'sub_cat_id' => $this->input->post('sub_cat_id'),
'actual_call_price' => $this->input->post('actual_call_price'),
'actual_chat_price' => $this->input->post('actual_chat_price'),
'price' => $this->input->post('price'),
'chat_price' => $this->input->post('chat_price'),
'vendor_chat_price' => $this->input->post('vendor_chat_price'),
'dollar_chat_price' => $this->input->post('dollar_chat_price'),
'vendor_dollar_chat_price' => $this->input->post('vendor_dollar_chat_price'),
'vendor_price' =>  $this->input->post('vendor_price'),
'video_price' => $this->input->post('video_price'),
'vendor_video_price' =>  $this->input->post('vendor_video_price'),
'dollar_price' => $this->input->post('audio_dollar'),
'vendor_dollar_price' =>  $this->input->post('vendor_audio_dollar'),
'video_dollar_price' => $this->input->post('video_dollar'),
'vendor_video_dollar_price' =>  $this->input->post('vendor_video_dollar'),
'price_unit' => $this->input->post('price_unit'),
'status' => 'Active'
);
$answer = $this->admin->_insertRow('services', $data1);
if($answer){
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/services_list/'.$astrologer_id);
}
public function add_vendor_services_code() { 
$astrologer_id = $this->input->post('astrologer_id'); 
$data1 = array(
'astrologer_id' => $astrologer_id,
'service_name' => $this->input->post('service_name'),
'super_cat_id' => $this->input->post('super_cat_id'),
'category_id' => $this->input->post('category_id'),
'sub_cat_id' => $this->input->post('sub_cat_id'),
'price' => $this->input->post('vendor_price') * 2,
'vendor_price' =>  $this->input->post('vendor_price'),
'price_unit' => $this->input->post('price_unit'),
'status' => 'Active'
);
$answer = $this->admin->_insertRow('services', $data1);
if($answer){
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/vendor_service_list');
}
public function delete_services($id = '') {  
$where1 = array('id' => $id);
$services = $this->admin->get_details('services', $where1); 
$service_status = $this->admin->_deleteRowWhere('services',$where1);
if ($service_status) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/services_list/'.$services[0]->astrologer_id);
}
public function ajax_get_menu() { 
$where = array('menu_id' => $this->input->post('menu_id'));
$super_category = $this->admin->get_details('super_categories', $where);
if($super_category){
echo json_encode(array("status"=>1,"message"=>"successfull","super_category"=>$super_category));
}else{
echo json_encode(array("status"=>0,"message"=>"failed"));
}
}
public function ajax_get_cat() { 
$where = array('super_cat_id' => $this->input->post('cat_id'));
$category = $this->admin->get_details('categories', $where);
if($category){
echo json_encode(array("status"=>1,"message"=>"successfull","category"=>$category));
}else{
echo json_encode(array("status"=>0,"message"=>"failed"));
}
}
public function kundali_booking() { 
    $this->load->model('Booking');
    $this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/kundali_booking');
$this->load->view('user/list_footer');
} 
public function kundliList(){
    $this->load->model('booking');
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->booking->getEmployees($postData);

    echo json_encode($data);
  }
public function match_data() { 
$data['match'] = $this->admin->get('tbl_match');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/match_data',$data);
}

public function free_kundali_data() { 
$data['match'] = $this->admin->get('tbl_freekundali');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/free_kundli',$data);
}

public function upload_kundali($id = "") { 
if($id == ""){
redirect('admin/page_not_found');
}
$where = array('id' => $id);
$data['kundali'] = $this->admin->get_details('kundali', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/upload_kundali',$data);
$this->load->view('user/form_footer');
}
public function upload_kundali_code($id) {
$config['upload_path']  = 'admin-assets/assets/kundali';
$config['allowed_types']  = 'jpg|png|jpeg|pdf';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('upload_kundali'))
{
$this->session->set_flashdata('error',"kundali not upload");
redirect("admin/upload_kundali/".$id); 
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];    
}
$data = array(
'upload' =>$images,
'status' =>"Uploaded",
);
$where = array('id' => $id);
$upload = $this->admin->_updateRowWhere('kundali',$data,$where);
if($upload){
$this->session->set_flashdata('error',"kundali not upload");         
}else{
$this->session->set_flashdata('success',"kundali  uploaded");  
}
redirect("admin/kundali_booking");
}
public function add_vendor() { 
$data['kundali'] = $this->admin->get('kundali');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_vendor',$data);
$this->load->view('user/form_footer');
} 
public function edit_vendor($id = "") { 
if($id == ""){
redirect('admin/page_not_found');
}
$where = array('author.id' => $id);
$data['Astrologer'] = $this->admin->get_profile($where);
$check = $this->admin->checkAvb($id);
$data['check'] = $check;
//print_r($check); die;
$data['timetable']  = $this->admin->get_timetable();
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_vendor',$data);
$this->load->view('user/form_footer');
}
public function astrologer_list() { 
    $this->load->model('Booking');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/astrologer_list');
$this->load->view('user/list_footer');
} 
public function astroList(){
    $this->load->model('booking');
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->booking->get_details_astro($postData);

    echo json_encode($data);
  }
public function update_vendor() { 
$config['upload_path']  = 'admin-assets/assets/images/users/';
$config['allowed_types']  = 'jpg|png|jpeg|JPG|JPEG|PNG';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('image'))
{
$images = $this->input->post('current_image');
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];
}
$delimiter = '-';
        $astro_slug = $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $this->input->post('name')))))), $delimiter));
        $whereName = array('name' => ucwords($this->input->post('name')), 'user_type' => 'Astrologer');

        $checkName = $this->admin->get_details('author', $whereName);

        if (count($checkName)>1) {
            $totCount = count($checkName);
            $asrtoSlug = $astro_slug.'-'.$totCount;
        } else{
            $asrtoSlug = $astro_slug;
        }
$data = array(
'name' => $this->input->post('name'),
'astro_slug' => $asrtoSlug,
'email' => $this->input->post('email'),
'password' => $this->input->post('password'),
'mobile' => $this->input->post('mobile'),
'gender' => $this->input->post('gender'),
'call_userId' => $this->input->post('call_userId'),
'call_password' => $this->input->post('call_password'),
'image' => $images,
'address' => $this->input->post('address'),
'country' => $this->input->post('country'),
'city'  =>   $this->input->post('city'),
'state'  =>   $this->input->post('state'),
'description' => $this->input->post('about_us'),
'experience' => $this->input->post('experience'),
'langknown' => $this->input->post('langknown'),
'expertise'  => $this->input->post('expertise'),
'status'     => $this->input->post('status'),
'chat_status'     => $this->input->post('chat_status'),
'date'  => date('Y-m-d H:i:s')
);
$where = array('id' => $this->input->post('id'));

$day =$this->input->post('day[]');
        $sun = $this->input->post('Sun[]');
        $mon = $this->input->post('Mon[]');
        $tue = $this->input->post('Tue[]');
        $wed = $this->input->post('Wed[]');
        $thu = $this->input->post('Thu[]');
        $fri = $this->input->post('Fri[]');
        $sat = $this->input->post('Sat[]');
        $formArray['astro_id'] = $this->input->post('id'); 
        if(isset($sun)){
            $formArray['Sun'] = implode(",",$sun);
        }else{
            $formArray['Sun'] = '';
        }
        if(isset($mon)){
            $formArray['Mon'] = implode(",",$mon);
        }else{
            $formArray['Mon'] = '';
        }
        if(isset($tue)){
            $formArray['Tue'] = implode(",",$tue);
        }else{
            $formArray['Tue'] = '';
        }
        if(isset($wed)){
            $formArray['Wed'] = implode(",",$wed);
        }else{
            $formArray['Wed'] = '';
        }
        if(isset($thu)){
            $formArray['Thu'] = implode(",",$thu);
        }else{
            $formArray['Thu'] = '';
        }
        if(isset($fri)){
            $formArray['Fri'] = implode(",",$fri);
        }else{
            $formArray['Fri'] = '';
        }
        if(isset($sat)){
            $formArray['Sat'] = implode(",",$sat);
        }else{
            $formArray['Sat'] = '';
        }
        // print_r($formArray);die;
        $check = $this->admin->checkAvb($this->input->post('id'));
        if(empty($check)){
            $this->admin->insertweektime($formArray);
        }else{
            $this->admin->updateweektime($formArray,$this->input->post('id'));
        }

$update_student_id = $this->admin->_updateRowWhere('author',$data,$where);
if($update_student_id){
redirect("admin/astrologer_list");
}else{
redirect("admin/astrologer_list");  
}
// $this->load->view('user/form_footer');
}
public function add_vendor_code() {
$email = $this->input->post('email');
$where = array('email' => $email);
$check = $this->admin->get_details('author', $where);
if($check){
$this->session->set_flashdata('error','Email is already register');
redirect('admin/add_vendor');
}
$config['upload_path']  = 'admin-assets/assets/images/users/';
$config['allowed_types']  = 'jpg|png|jpeg|JPG|JPEG|PNG';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('image'))
{
$images = ("csm_person-placeholder-male_5602d73d5e.png");   
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];
}
$data = array(
'name' => $this->input->post('name'),
'email' => $email,
'mobile' => $this->input->post('mobile'),
'password' => $this->input->post('password'),
'gender' => $this->input->post('gender'),
'user_type' => 'Astrologer',
'address' => $this->input->post('address'),
'country' => $this->input->post('country'),
'city'  =>   $this->input->post('city'),
'state'  =>   $this->input->post('state'),
'description' => $this->input->post('about_us'),
'experience' => $this->input->post('experience'),
'expertise'  => $this->input->post('expertise'),
'status'     => $this->input->post('status'),
'image' => $images,
'date'  => date('Y-m-d')
);
$recruitment = $this->admin->_insertRow('author',$data);
redirect('admin/astrologer_list');
}
public function my_earning() { 
$where = array('wallet_history.customer_id' => $this->session->userdata('id'), 'order_history.is_Active' => "Complete");
$data['my_earning'] = $this->admin->astrototalEarn($where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/my_earning',$data);
$this->load->view('user/list_footer');
}
// -------------------------------  admin booking  -----------------------
public function booking() { 
    $data['kundali'] = $this->admin->kundali_cat();
    $this->load->model('Booking');
    $this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/booking',$data);
$this->load->view('user/list_footer');
} 
public function bookingList(){
    $this->load->model('booking');
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->booking->get_booking_data($postData);

    echo json_encode($data);
  }
public function bookingold() {
        $this->load->model('booking');
$data['kundali'] = $this->admin->kundali_cat();
//$where = array('order_history.call_type !=' => 'Invoice');
//$data['booking'] = $this->admin->order($where);
 $data = array(); 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->booking->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'limit' => $this->perPage 
        ); 
        $data['booking'] = $this->booking->getRows($conditions);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/booking',$data);
$this->load->view('user/list_footer');
}     
function ajaxPaginationData(){ 
        // Define offset 
         $this->load->model('booking');
        $page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->booking->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'start' => $offset, 
            'limit' => $this->perPage 
        ); 
        $data['booking'] = $this->booking->getRows($conditions); 
         
        // Load the data list view 
        $this->load->view('posts/admin-ajax-data', $data, false); 
    } 
// -------------------------------  user vendor booking  -----------------------
public function my_booking() {
$where = array('order_history.astrologer_id' => $this->session->userdata('id'),'order_history.bookStatus' => '1');
$data['booking'] = $this->admin->order($where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/my_booking',$data);
$this->load->view('user/list_footer');
} 
public function add_vendor_service() { 
$data['menu'] = $this->admin->get('menu');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_vendor_service',$data);
$this->load->view('user/form_footer');
}
public function vendor_service_list() { 
$where = array('astrologer_id' => $this->session->userdata('id'));
$data['services'] = $this->admin->get_details('services', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/vendor_service_list',$data);
$this->load->view('user/list_footer');
}
public function package_list() { 
$data['package'] = $this->admin->get('package');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/package_list',$data);
$this->load->view('user/list_footer');
}
public function add_package() {  
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_package');
$this->load->view('user/form_footer');
}
public function edit_package($id = "") { 
$where = array('id' => $id);
$data['package'] = $this->admin->get_details('package', $where); 
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_package',$data);
$this->load->view('user/form_footer');
}
public function add_package_code() {
$data = array(
'package_name'    => $this->input->post('package_name'),
'package_price'           => $this->input->post('package_price'),
'date'              =>date('Y-m-d'),   
'package_price_dollar' => $this->input->post('package_price_dollar')
);
$category = $this->admin->_insertRow('package', $data);
if ($category) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/package_list');  
}
public function update_package() { 
$data = array(
'package_name'  => $this->input->post('package_name'),
'package_price' => $this->input->post('package_price'),
'package_price_dollar' => $this->input->post('package_price_dollar')
);
$where = array('id' => $this->input->post('id'));
$package = $this->admin->_updateRowWhere('package',$data,$where);
if($package){
redirect("admin/package_list");
}else{
redirect("admin/package_list");  
}
// $this->load->view('user/form_footer');
}
public function delete_package($id = '') { 
$where = array('id' => $id);
$service_status = $this->admin->_deleteRowWhere('package',$where);
if ($service_status) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/package_list/');
}
public function update_vendor_payment() { 
    $id = $this->input->post('id');
$where1 = array('id' => $id);
$data['astro'] = $this->admin->get_details('author', $where1);
$currency = $this->input->post('currency_name');
$realaseamount = $this->input->post('amount');
$astro_wallet =  $data['astro'][0]->wallet_balence;
$tot_amount = $astro_wallet - $realaseamount;
$name= $data['astro'][0]->name;
$number1 = $data['astro'][0]->mobile;
$number2 = "9169305305";
$realdate = $this->input->post('realdate');
if($currency == "INR"){
    $callNation = "Domestic";
}else if($currency == "USD"){
    $callNation = "International";
}
$serv_name = "Payment release (".$this->input->post('monthN').")";
date_default_timezone_set('Asia/Kolkata');
        $booking_no = 'OGM' . date('dmyhis');
        $book_date = date("Y-m-d H:i:s", strtotime($realdate) );
        
        
        $arrdata = array(
            'sevice_name' => $serv_name,
            'call_duration' => 0,
            'astrologer_id' => $id,
            'super_cat_id' => '76',
            'service_price' => 0,
            'vendor_service_price' => $realaseamount,
            'customer_id' => $this->session->userdata('id'),
            'call_type' => "Invoice",
            'payment_mode' => 'Bank',
            'booking_no' => $booking_no,
            'is_Active' => "Complete",
            'date' => $book_date,
            'callRequestId' => 0,
            'bookStatus' => '1',
            'callNation' => $callNation,
            'actual_price' => 0
        );

        $answer = $this->admin->_insertRow('order_history', $arrdata);

        $order_id = $this->db->insert_id();
        if($answer){
            
if($currency == "INR"){
    $data = array(
       'wallet_balence' => $tot_amount
    );

   $where = array('id' => $id);

   $wallet = $this->admin->_updateRowWhere('author',$data,$where);
   
   if($wallet){

        $data1 = array(

            'amount'        => $realaseamount,

            'payment_type'  => "Debit",

            'customer_id'   => $id,

            'date'          => $realdate,

            'order_id'      => $order_id,
            
            'astro_current_bal' => $tot_amount

        );

$astro_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
$msg1 = "Dear ".$name.", we have released your payment on ".$realdate.", amount is Rs. ".$realaseamount.". Your current wallet balance is Rs. ".$tot_amount;
 $this->test_sms($msg1,$number1, $number2);
 }
} else if($currency == "USD"){
    $dollorastro_wallet =  $data['astro'][0]->astro_dollar_bal;
    $dollor_tot_amount = $dollorastro_wallet - $realaseamount;
       $data = array(
       'astro_dollar_bal' => $dollor_tot_amount
    );

   $where = array('id' => $id);

   $wallet = $this->admin->_updateRowWhere('author',$data,$where);
   
   if($wallet){

        $data1 = array(

            'amount'        => $realaseamount,

            'payment_type'  => "Debit",

            'customer_id'   => $id,

            'date'          => $realdate,

            'order_id'      => $order_id,
            
            'astro_current_bal' => $dollor_tot_amount

        );

$astro_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
$msg1 = "Dear ".$name.", we have released your payment on ".$realdate.", amount is USD $ ".$realaseamount.". Your current wallet balance is USD $ ".$dollor_tot_amount;
 $this->test_sms($msg1,$number1, $number2);
   }
}
        }
  redirect('admin/astrologer_list'); 
}

public function vendor_payment($id){
 $where1 = array('id' => $id);
$data['astro'] = $this->admin->get_details('author', $where1);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/vendor_payment', $data);
 $this->load->view('user/form_footer');   
}
public function ajax_update_status() { 
//--------------------  sms  Api-----------------------------//
if($this->input->post('status') == 'Accept'){
$msg1 = "Dear ".$this->input->post('customer_name')." your booking has been confirmed. You can Click on start call or go to my booking section to start call to start you session.";
}elseif($this->input->post('status') == 'Complete'){
$msg1 = "Dear ".$this->input->post('customer_name').", Thank you for consulted with ".$this->input->post('vendor_name').". Please Rate your Astrologer.";
}else{
$msg1 = "Dear ".$this->input->post('customer_name')." your booking ".$this->input->post('booking_id')." is ".$this->input->post('status')."led And your Onegodmed wallet is credit by Rs. ".$this->input->post('call_price').". You can choose any other astrologer.";
}
$where = array('user_type' => 'admin');
$admin = $this->admin->get_details('author', $where);
 if($this->input->post('vendor_mobile') == 0){
         $vendor_id = $admin[0]->mobile;
 }else{
          $vendor_id = $this->input->post('vendor_mobile');
 }
$number1 = $vendor_id;
$number2 = $this->input->post('customer_mobile');
$msg    = $msg1;
if($this->input->post('status') == "Cancel"){
    $where_user = array('id' =>$this->input->post('cust_id'));

$wallet_balence = $this->admin->get_details('author', $where_user);

$customer_wallet = $wallet_balence[0]->wallet_balence;

    $update_customer_wallet = $wallet_balence[0]->wallet_balence + $this->input->post('call_price');
     $data = array(
       'wallet_balence' => $update_customer_wallet
    );

   $where_user1 = array('id' => $this->input->post('cust_id'));

   $wallet = $this->admin->_updateRowWhere('author',$data,$where_user1);
    if($wallet){

        $data1 = array(

            'amount'        => $this->input->post('call_price'),

            'payment_type'  => "Cradit",

            'customer_id'   => $this->input->post('cust_id'),

            'date'          => date("Y-m-d"),

            'order_id'      => $this->input->post('id')

        );

$customer_wallet_history = $this->admin->_insertRow('wallet_history', $data1);

 }
$where_astrologer = array('id' =>$this->input->post('astro_id'));

$wallet_balance = $this->admin->get_details('author', $where_astrologer);
$callTotTime = str_replace('Min', '', $this->input->post('call_time'));
$totvendorprice = $this->input->post('astro_price') * $callTotTime;

    $astrologer_wallet = $wallet_balance[0]->wallet_balence;

    $update_astrologer_wallet = $wallet_balance[0]->wallet_balence - $totvendorprice;

    $data = array(
       'wallet_balence' => $update_astrologer_wallet,
    );

   $where_astrologer1 = array('id' => $this->input->post('astro_id'));

   $wallet = $this->admin->_updateRowWhere('author',$data,$where_astrologer1);
if($wallet){

 $data3 = array(

            'amount'       => $totvendorprice,

            'payment_type' => "Debit",

            'customer_id'  => $this->input->post('astro_id'),

            'date'         => date("Y-m-d"),

            'order_id'     => $this->input->post('id'), 

        );

$wallet_history = $this->admin->_insertRow('wallet_history', $data3);
 }
$msg2 = "Dear ".$this->input->post('vendor_name').", Customer booking ID ".$this->input->post('booking_id')." is ".$this->input->post('status')."led And your Onegodmed wallet is debited by Rs. ".$totvendorprice;
$this->test_sms($msg,$number2);
$this->test_sms($msg2,$number1);
}else{
$this->test_sms($msg,$number2);
}
//----------------sms api    --------------------------------
$data = array(
'is_Active'  => $this->input->post('status'),
);
$where = array('id' => $this->input->post('id'));
$status = $this->admin->_updateRowWhere('order_history',$data,$where);
if($status){
echo json_encode(array("status"=>1));
exit();
}else{
echo json_encode(array("status"=>0));
exit(); 
}
}
public function update_status($status,$id,$customer_id = '',$vendor_name) { 
$where = array('id' => $customer_id);
$customer_id = $this->admin->get_details('author', $where);
//--------------------  sms  Api-----------------------------//
if($status == 'Accept'){
$msg1 = "Dear ".$customer_id[0]->name." your booking has been confirmed. You can Click on start call or go to my booking section to start call to start you session.";
}elseif($status == 'Complete'){
$msg1 = "Dear ".$customer_id[0]->name.", Thank you for consulted with ".urldecode($vendor_name).". Please Rate your Astrologer.";
}else{
$msg1 = "Dear ".$customer_id[0]->name." your session is.".$status;
}
$number2 = $customer_id[0]->mobile;
$msg    = $msg1;
$this->test_sms($msg,$number2);
//----------------sms api    --------------------------------
$data = array(
'is_Active'  => $status,
);
$where = array('id' => $id);
$status = $this->admin->_updateRowWhere('order_history',$data,$where);
if($status){
redirect('admin/my_booking');
}else{
redirect('admin/my_booking');
}
}
public function test()
{               
$this->load->view('admin/test');       
}  
public function video_call($id)
{     
if($this->session->userdata('user_type') == 'Astrologer' OR $this->session->userdata('user_type') == 'admin'){
$data = array(
'service_type' => date('his'),    
);
$where = array('id' => $id);
$insert_session = $this->admin->_updateRowWhere('order_history',$data,$where);
if ($insert_session) {
$where1 = array('id' => $id);
$where2 = array('astrologer_id' => $this->session->userdata('id'));
$data['token'] = $this->admin->get_where_details('order_history',$where1,$where2);
}            
}else{
$where1 = array('id' => $id);
$where2 = array('customer_id' => $this->session->userdata('id'));
$data['token'] = $this->admin->get_where_details('order_history',$where1,$where2); 
} 
$this->load->view('admin/video',$data);
}
public function s_video_call()
{               
$this->load->view('admin/s_video');       
} 
public function upload_materials($id = "") { 
if($id == ""){
redirect('admin/page_not_found');
}
$where = array('id' => $id);
$data['author'] = $this->admin->get_details('author', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/upload_materials',$data);
// $this->load->view('user/form_footer');
} 
public function upload_materials_code() { 
$config['upload_path']  = 'admin-assets/assets/kundali';
$config['allowed_types']  = '*';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('upload_kundali'))
{
$this->session->set_flashdata('error',"kundali not upload");
redirect("admin/upload_kundali/".$this->input->post('id')); 
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];    
}
$data = array(
'file_name' =>$images,
'title' =>$this->input->post('title'),
'date'  => date('Y-m-d'),
'customer_id' => $this->input->post('id'),
);
$upload = $this->admin->_insertRow('upload_materials', $data);
if($upload){
$this->session->set_flashdata('error',"kundali not upload");         
}else{
$this->session->set_flashdata('success',"kundali  uploaded");  
}
redirect("admin/users_list");
}
public function test_sms($msg='',$number1 ='',$number2 = '',$number3 = '') {
$msg1 = urlencode($msg);
if ($number2 == '') {
$ch=curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts='.$number1.'&senderid=GODMED&msg='.$msg1);
}elseif ($number3 == '' AND $number2 !='') {
$ch=curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts='.$number1.','.$number2.'&senderid=GODMED&msg='.$msg1);
}else{
$ch=curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts='.$number1.','.$number2.','.$number3.'&senderid=GODMED&msg='.$msg1);
}
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
$data1 = curl_exec($ch);
return $data1;
}
public function blog() { 
$data['blog'] = $this->admin->gethorodate('blog');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/blog_list',$data);
$this->load->view('user/list_footer');
}
public function add_blog() { 
$data['blog'] = $this->admin->get('blog');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_blog',$data);
$this->load->view('user/form_footer');
}
public function add_blog_code() { 
$config['upload_path']  = 'admin-assets/assets/blog-images/';
$config['allowed_types']  = '*';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('blog_image'))
{
$blog_image = ("abc.png");   
}
else
{
$data =  $this->upload->data();
$blog_image = $data["file_name"];
}
$data = array(
'heading' => $this->input->post('heading'),
'slug_url' => $this->input->post('slug_url'),
'short_discription' => $this->input->post('short_discription'),
'discription' => $this->input->post('discription'),
'title' => $this->input->post('title'),
'meta_tag' => $this->input->post('meta_tags'),
'meta_keyword' => $this->input->post('meta_keywords'),
'meta_description' => $this->input->post('meta_description'),
'blog_image' => $blog_image,
'date' => date('Y-m-d'),   
);
$blog = $this->admin->_insertRow('blog',$data);
if ($blog) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/blog');
}
public function edit_blog($id = '') { 
$where = array('id' => $id);
$data['blog'] = $this->admin->get_details('blog', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_blog',$data);
$this->load->view('user/form_footer');
}
public function edit_blog_code() { 
$config['upload_path']  = 'admin-assets/assets/blog-images/';
$config['allowed_types']  = '*';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('blog_image'))
{
$blog_image = $this->input->post('current_blog_image');   
}
else
{
$data =  $this->upload->data();
$blog_image = $data["file_name"];
}
$data = array(
'heading' => $this->input->post('heading'),
'slug_url' => $this->input->post('slug_url'),
'short_discription' => $this->input->post('short_discription'),
'discription' => $this->input->post('discription'),
'title' => $this->input->post('title'),
'meta_tag' => $this->input->post('meta_tags'),
'meta_keyword' => $this->input->post('meta_keywords'),
'meta_description' => $this->input->post('meta_description'),
'blog_image' => $blog_image,   
);
$where = array('id' => $this->input->post('id'));
$blog = $this->admin->_updateRowWhere('blog',$data,$where);
if ($blog) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/blog');
}  
public function delete_blog($id) {  
$where = array('id' => $id);
$blog = $this->admin->_deleteRowWhere('blog',$where);
if ($blog) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/blog');
}

public function reviews() { 
    $this->load->model('Booking');
    $this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/review');
$this->load->view('user/list_footer');
} 
public function reviewList(){
    $this->load->model('booking');
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->booking->get_reviews($postData);

    echo json_encode($data);
  }
public function all_update_status($status = '',$id = '') {
$data = array(
'status' => $status,
);
$where = array('id' => $id);
$review = $this->admin->_updateRowWhere('Reviews',$data,$where);
// if ($review) {
// $this->session->set_flashdata('success', 'created successfully');
// } else {
// $this->session->set_flashdata('success', 'Something went wrong');
// }
redirect('admin/reviews');
}
public function testimonial() { 
$data['testimonial'] = $this->admin->get('Testimonial');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/testimonial_list',$data);
$this->load->view('user/list_footer');
}
public function add_testimonial() { 
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_testimonial');
$this->load->view('user/form_footer');
}
public function add_testimonial_code() {
$config['upload_path']  = 'admin-assets/assets/images/testimonials';
$config['allowed_types']  = 'jpg|png|jpeg|JPG|JPEG|PNG';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('image'))
{
$images = ("abc.png");   
}
else
{
$data =  $this->upload->data();
$images = $data["file_name"];
}
$data = array(
'title' => $this->input->post('title'),
'description' => $this->input->post('description'),
'image'      => $images,
'name' => $this->input->post('name'),
'designation'      =>$this->input->post('designation'),
'date' => date('Y-m-d'),   
);
$testimonial = $this->admin->_insertRow('Testimonial',$data);
if ($testimonial) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/testimonial');
}
public function delete_testimonial($id) {  
$where = array('id' => $id);
$testimonial = $this->admin->_deleteRowWhere('Testimonial',$where);
if ($testimonial) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/testimonial');
}
public function distroy_session($id) { 
$data = array(
'is_Active' => 'Complete',
);
$where = array('id' => $id);
$review = $this->admin->_updateRowWhere('order_history',$data,$where);
redirect('user/booking');
}
public function test_email() {
$email_id = 'sales@onegodmed.com';
$address  =
$this->admin->emailus();
}

public function add_coupon() {  
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_coupon');
$this->load->view('user/form_footer');
}


public function edit_coupon($id) {  
$where = array('id' => $id);
$data['coupon'] = $this->admin->get_details('coupon', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_coupon',$data);
$this->load->view('user/form_footer');
}


public function coupon_list() { 
$data['coupon'] = $this->admin->get('coupon');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/coupon_list',$data);
$this->load->view('user/list_footer');
}


public function add_coupan_code() {
	// $length = 8;
 //    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
 //    $string = '';    

 //    for ($p = 0; $p < $length; $p++) {
 //        $string .= $characters[mt_rand(0, strlen($characters))];
 //    }
$data = array(
'name' => $this->input->post('name'),
'discount_parcent' => $this->input->post('discount_parcent'),
'date' => date('Y-m-d'),
'coupan_code' => $this->input->post('coupon_code'),
);
$register = $this->admin->_insertRow('coupon', $data);
if ($register) {
$this->session->set_flashdata('error', 'created successfully');
} else {
$this->session->set_flashdata('error', 'Something went wrong');
}
redirect('admin/coupon_list');
}


public function update_coupon_code() {  
$data = array(
'name' => $this->input->post('name'),
'discount_parcent' => $this->input->post('discount_parcent'),
);
$where = array('id' => $this->input->post('id'));
$branch = $this->admin->_updateRowWhere('coupon',$data,$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/coupon_list');
}


public function delete_coupon($id) {  
$where = array('id' => $id);
$branch = $this->admin->_deleteRowWhere('coupon',$where);
if ($branch) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/coupon_list');
}

public function users_wallet_history($id) {

$where1 = array('id' => $id);
$data['cust'] = $this->admin->get_details('author', $where1);
$where = array('customer_id' => $id, 'payment_status' => 'success');
$data['wallet_history'] = $this->admin->custwalletHistory($where);

$where2 = array('wallet_history.customer_id' => $id, 'order_history.is_Active' => 'Complete');

$data['call_history'] = $this->admin->custcallHistory($where2);

$arrData = array();
$arrData2 = array();
foreach($data['wallet_history'] as $row)  {
    $arrData1 = array();
    $arrData1['id'] = $id;
    $arrData1['txn_id'] = $row->txn_id;
    $arrData1['pay_date'] = $row->date;
    $arrData1['pack_name'] = $row->pack_name;
    $arrData1['amt_bfr_dsc'] = $row->amt_bfr_dsc;
    $arrData1['disc_price'] = $row->disc_price;
    $arrData1['amt_after_dsc'] = $row->amt_after_dsc;
    $arrData1['gst'] = $row->gst;
    $arrData1['pay_amount'] = $row->amount;
    $arrData1['coupon_code'] = $row->coupon_code;
    $arrData1['coupon_disc'] = $row->coupon_disc;
    $arrData1['pay_current_bal'] = $row->current_bal;
    $arrData1['payment_type'] = $row->pay_type;
    $arrData2[] = $arrData1;
}

foreach($data['call_history'] as $row)  {
    $arrData1 = array();
    $arrData1['id'] = $id;
    $arrData1['txn_id'] = $row->booking_no;
    $arrData1['pay_date'] = $row->date;
    $arrData1['callNation'] = $row->callNation;
    $arrData1['sevice_name'] = $row->sevice_name;
    $arrData1['call_type'] = $row->call_type;
    $arrData1['pay_amount'] = $row->amount;
    $arrData1['call_duration'] = $row->call_duration;
    $arrData1['name'] = $row->name;
    $arrData1['payment_type'] = $row->payment_type;
    $arrData1['pay_current_bal'] = $row->current_belence;
    $arrData2[] = $arrData1;
}
function date_compare($element1, $element2) { 
    $datetime1 = strtotime($element1['datetime']); 
    $datetime2 = strtotime($element2['datetime']); 
    return $datetime1 - $datetime2; 
}  
  
usort($arrData2, function($a, $b) {
    return $b['pay_date'] <=> $a['pay_date'];
});

$data['final_history'] = $arrData2;

$this->load->view('user/header');

$this->load->view('user/side');

$this->load->view('admin/users_wallet_history',$data);

}

public function astro_wallet_history($id) {
    $this->db->select('*');
    $this->db->from('wallet_history');
    $this->db->where('customer_id',$id);
    $this->db->where('astro_current_bal',0);
    $this->db->order_by('id','ASC');
    $query = $this->db->get()->result();
    // print_r($this->db->last_query());die;
    $sum = 0;
    foreach($query as $key => $val){
        if($val->payment_type == 'Cradit'){
            $sum += $val->amount;
        }else{
            $sum -= $val->amount;
        }
        if($key == 0){
            $data['astro_current_bal'] = $val->amount;
            $update = $this->db->where('id',$val->id)->update('wallet_history',$data);
        }else{
            $data['astro_current_bal'] = $sum;
            $update = $this->db->where('id',$val->id)->update('wallet_history',$data);
        }
    }
    $this->db->select('*');
    $this->db->from('order_history');
    $this->db->where('sevice_name','');
    $this->db->order_by('id','ASC');
    $service = $this->db->get()->result();
    foreach($service as $key => $val){
        $data['sevice_name'] = "Vedic Astrology";
        $update = $this->db->where('id',$val->id)->update('order_history',$data);
    }
$where1 = array('id' => $id);
$data['astro'] = $this->admin->get_details('author', $where1);

$where = array('wallet_history.customer_id' => $id, 'order_history.is_Active' => 'Complete');

$data['wallet_history'] = $this->admin->astrowalletHistory($where);

$this->load->view('user/header');

$this->load->view('user/side');

$this->load->view('admin/astro_wallet_history',$data);

}

public function walletFixer($id){
    $this->db->select('*');
    $this->db->from('wallet_history');
    $this->db->where('customer_id',$id);
    $this->db->where('astro_current_bal',0);
    $this->db->order_by('id','ASC');
    $query = $this->db->get()->result();
    // print_r($this->db->last_query());die;
    $sum = 0;
    foreach($query as $key => $val){
        // echo "<pre>";
        //  print_r('current-'.$val->id.'-'.$val->amount);
        if($val->payment_type == 'Cradit'){
            $sum += $val->amount;
        }else{
            $sum -= $val->amount;
        }
        if($key == 0){
            // echo "<pre>";
            // print_r($val->id.'-'.$val->amount);
            $data['astro_current_bal'] = $val->amount;
            $update = $this->db->where('id',$val->id)->update('wallet_history',$data);
        }else{
            // echo "<pre>";
            // print_r($val->id.'-'.$sum);
            $data['astro_current_bal'] = $sum;
            $update = $this->db->where('id',$val->id)->update('wallet_history',$data);
        }
    }
    
    print_r('fixed');die;
}

public function add_link() {
   
$data = array(
'video_link' => $this->input->post('youtube'),
);
$where = array('id' => $this->input->post('order_id'));
$order_id = $this->admin->_updateRowWhere('order_history',$data,$where);
if($order_id){
echo json_encode(array("status"=>1));
}else{
echo json_encode(array("status"=>0));
}

}

public function delete_reviews($id) {  
$where = array('id' => $id);
$blog = $this->admin->_deleteRowWhere('Reviews',$where);
$where1 = array('reviewId' => $id);
$blog = $this->admin->_deleteRowWhere('rating',$where1);
if ($blog) {
$this->session->set_flashdata('success', 'deleted successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/reviews');
}

function invoice($id, $txnid) {
    
       $where1 = array('id' => base64_decode($id));
$data['cust'] = $this->admin->get_details('author', $where1);
$where = array('customer_id' => base64_decode($id), 'payment_status' => 'success', 'txn_id' => base64_decode($txnid));
$data['wallet_history'] = $this->admin->custwalletHistory($where);
$data['amtinWord'] = $this->numberTowords($data['wallet_history'][0]->amount);
if($data['cust'][0]->country_code == "+91"){
$data['currency'] = "Rs.";  
$data['currency_code'] = "RUPEES";
$data['inv'] = "OGM";
} else{
    $data['currency'] = "USD $";
    $data['currency_code'] = "USD DOLLAR";
    $data['inv'] = "OGMW";
}
        $this->load->library('Pdf');
        $obj_pdf = new Pdf('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $obj_pdf->SetCreator(PDF_CREATOR);
        $obj_pdf->AddPage();
        ob_start();
        $content = $this->getTemplateHtml($data);
        ob_end_clean();
        $obj_pdf->writeHTML($content, true, false, true, false, '');
        $obj_pdf->Output('output.pdf', 'I');
    }
    
    function getTemplateHtml($data) {
        
        return '<!DOCTYPE html>

<div style="background-color: #fff; margin: 0; padding: 0;position:absolute">
	<div style="width: 600px; height: auto; margin:0 auto;">
		<span style="padding: 5px 0 ;width:800px;position:absolute;">
			<img src="https://www.onegodmed.com/invoice/Astrology.jpg" style="width: 150px ; float: left;position:absolute;left:10;" alt="" >	
            <span style="position:absolute;left:50;right:2.1em;font-size: 20px; left:5em;text-transform: uppercase; font-weight: bold; float:right; padding: 0px 10px; color: #333;width:30%">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; INVOICE</span>
     		<div style="width: 100%; border-bottom: 1px solid #ff871f; float: left; "></div>
		</span>
		<div style="width:100%;">
			<span style="width:100px;float: left;position:absolute;left:10">
				<span style="font-size:23px;">'.$data['cust'][0]->name.'</span>
				<div style="font-size: 13px;margin:0;padding:0px;width:80px;display:inline">&nbsp;  <strong>Phone:</strong>'.$data['cust'][0]->country_code.' '.$data['cust'][0]->mobile.'</div>
			</span><br>
			<span style="width:400px;float:right;position:absolute;left:10">
				<table border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr style="line-height: 20px;">
                            <td width="20%"><strong>Invoice Number</strong></td>
                            <td width="5%"><strong>:</strong></td>
                            <td width="54%">'.$data['inv'].''.$data['wallet_history'][0]->inv_no.'</td>
                        </tr>
                        <tr style="line-height: 20px;">
                            <td><strong>Invoice Date</strong></td>
                            <td><strong>:</strong></td>
                            <td>'.$data['wallet_history'][0]->date.'</td>
                        </tr>
                        <tr style="line-height: 20px;">
                            <td><strong>Service Type</strong></td>
                            <td><strong>:</strong></td>
                            <td>Calling Pack</td>
                        </tr>
                    </tbody>
                </table>
			</span>
		</div>

<!--Table-->
<table width="100%" cellspacing="0" cellpadding="0" style="line-height: 30px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
            <tbody>
                <tr style="background: #333; color: #fff;  ">
                    <td width="70%" style="background-color: #333;border-right:1px solid #aaa;border-bottom:1px solid #aaa; color: #fff;">Description</td>
                    <td width="30%" style="background-color: #333;border-bottom:1px solid #aaa; color: #fff;">Amount ('.$data['currency'].')</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">'.$data['wallet_history'][0]->pack_name.'</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['wallet_history'][0]->amt_bfr_dsc.'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['wallet_history'][0]->disc_price.'</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Taxable Amount</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['wallet_history'][0]->amt_after_dsc.'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['wallet_history'][0]->gst.'</td>
                </tr>
                <tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
                    <td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
                    <td style="">'.$data['currency'].' '.$data['wallet_history'][0]->amount.'</td>
                </tr>
            </tbody>
        </table>

 <!--Table 2-->
 <span style="background-color: #fff; margin: 15px 0;">
            <table width="100%" border="0" style=" padding: 10px; line-height: 25px;" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td width="27%" valign="top">Amount in Words </td>
                        <td width="3%" valign="top">:</td>
                        <td width="70%">'.$data['amtinWord'].' '.$data['currency_code'].' ONLY</td>
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
        </span>       		
 <div style="background-color: #333; color: #fff; display: block;padding:30px;width:100%">       
 		<h2 style="margin-top:0px; padding: 0; margin-bottom: 15px; color: #ff871f; font-size: 15px; font-weight: normal;">&nbsp; Corporate Office</h2>
 		<span>&nbsp; &nbsp;  1701/57, Express Trade Tower 2, Sector 132, Noida, UP, India 201305</span><br>
<span>&nbsp; &nbsp; E-mail:- support@onegodmod.com</span><br>
<span>&nbsp; &nbsp; Tel:- +91 9169-305-305</span>
<span style="left:1em">
 		<h2 style="margin-bottom: 0px; padding: 0; color: #ff871f; font-size: 15px; font-weight: normal;">&nbsp; Terms & Conditions:</h2>
 		<ul style="color:#fff">
                    <li>All Payments should be made in favour of Godmed Technologies Private Limited - Noida</li>
                    <li>All payment should be in advance and it will be non-refundable</li>
                    <li>Onegodmed is a product of Godmed Technologies Private Limited</li>
                </ul>
 	</span>
<span style="font-size: 12px; float: left; width: 100%; font-weight: normal; display: block; margin: 10px 0; text-align: center;color:#fff">&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp;   This is computer generated invoice and does not require signature and stamp</span>
<br>
</div>
</span>
</div>
';
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
public function payment() {
    $this->load->model('Booking');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/pay_history');
}
public function paymentList(){
    $this->load->model('booking');
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->booking->getpayment($postData);

    echo json_encode($data);
  }
function consultation($id, $booking_no) {
    
       $where1 = array('id' => base64_decode($id));
$data['cust'] = $this->admin->get_details('author', $where1);
$where = array('order_history.customer_id' => base64_decode($id), 'is_Active' => 'complete', 'booking_no' => base64_decode($booking_no));
$data['history'] = $this->admin->custCunHistory($where);
if($data['cust'][0]->country_code == "+91"){
$data['currency'] = "Rs.";  
$data['currency_code'] = "RUPEES";
} else{
    $data['currency'] = "USD $";
    $data['currency_code'] = "USD DOLLAR"; 
}
$file_name = 'Consultation-'.$data['history'][0]->booking_no.'.pdf';
        $this->load->library('Pdf');
        $obj_pdf = new Pdf('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $obj_pdf->SetCreator(PDF_CREATOR);
        $obj_pdf->AddPage();
        ob_start();
        $content = $this->getTemplateHtml1($data);
        ob_end_clean();
        $obj_pdf->writeHTML($content, true, false, true, false, '');
        $obj_pdf->Output($file_name, 'I');
    }
    
    function getTemplateHtml1($data) {
        
        return '<!DOCTYPE html>

<div style="background-color: #fff; margin: 0; padding: 0;position:absolute">
	<div style="width: 600px; height: auto; margin:0 auto;">
		<span style="padding: 5px 0 ;width:800px;position:absolute;">
			<img src="https://www.onegodmed.com/invoice/Astrology.jpg" style="width: 150px ; float: left;position:absolute;left:10;" alt="" >	
            <span style="position:absolute;left:50;right:2.1em;font-size: 20px; left:5em;text-transform: uppercase; font-weight: bold; float:right; padding: 0px 10px; color: #333;width:30%">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RECEIPT</span>
     		<div style="width: 100%; border-bottom: 1px solid #ff871f; float: left; "></div>
		</span>
		<div style="width:100%;">
			<span style="width:100px;float: left;position:absolute;left:10">
				<span style="font-size:23px;text-align:center;display:block">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Thank you for consultation!</span>
				<div style="font-size: 13px;margin:0;padding:0px;width:80px;display:inline">Thanks you, '.$data['cust'][0]->name.' for consulting with '.$data['history'][0]->name.'. Hope you had a wonderful experience.
Kindly rate and review your Astrologer <a href="#">here</a>. </div>
			</span><br>
			<span style="width:100%;">
				<table border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr style="line-height: 20px;">
                            <td width="100%"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Below is your session summary for your reference :</strong></td>
                        </tr>
                    </tbody>
                </table>
			</span>
		</div>

<!--Table-->
<table width="100%" cellspacing="0" cellpadding="0" style="line-height: 30px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
            <tbody>
                <tr style="background: #333; color: #fff;  ">
                    <td width="70%" style="background-color: #333;border-right:1px solid #aaa;border-bottom:1px solid #aaa; color: #fff;">Description</td>
                    <td width="30%" style="background-color: #333;border-bottom:1px solid #aaa; color: #fff;">Details</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Astrologer Name</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['history'][0]->name.'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Call Duration</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['history'][0]->call_duration.'</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Call Date Time</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['history'][0]->date.'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Astrologer Price</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['history'][0]->actual_price.' / Min</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Consultation Charge</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['history'][0]->service_price.'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Booking ID</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['history'][0]->booking_no.'</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Payment Mode</td>
                    <td style="border-bottom:1px solid #aaa;">onegodmed wallet</td>
                </tr>
            </tbody>
        </table>
<br>
 <!--Table 2-->
 <div style="background-color: #333; color: #fff; display: block;padding:30px;width:100%">       
 		<h2 style=" padding: 0; margin-bottom: 15px; color: #ff871f; font-size: 15px; font-weight: normal;">&nbsp; Corporate Office</h2>
 		<span>&nbsp; &nbsp;  1701/57, Express Trade Tower 2, Sector 132, Noida, UP, India 201305</span><br>
<span>&nbsp; &nbsp; E-mail:- support@onegodmod.com</span><br>
<span>&nbsp; &nbsp; Tel:- +91 9169-305-305</span>
<br>
<br>
<table width="15%">
<tbody>
<tr>
<td>
 	 <a rel="nofollow" target="_blank" href="https://www.onegodmed.com/blog/" style="color:#333">
                                <img border="0" style="width:13px;" alt="Blog" src="https://www.onegodmed.com/front-assets/images/blog.png">
                            </a></td>
<td>                           
                            <a rel="nofollow" target="_blank" href="https://twitter.com/OnegodmedC" style="color:#333">
                                <img border="0" style="width:13px;" alt="Twitter" src="https://www.onegodmed.com/front-assets/images/twitter.png">
                            </a></td>
<td>
                            <a rel="nofollow" target="_blank" href="https://www.facebook.com/1godmed" style="color:#333">
                                <img border="0" style="width:13px;" alt="Facebook" src="https://www.onegodmed.com/front-assets/images/fb.png">
                            </a></td>
</tr>
</tbody>
</table>

 
<br>
</div>
</span>
</div>
';
    }
     public function ajax_updateCallstatus() { 

   
   $where_user = array('id' =>$this->input->post('user_id'));

$wallet_balence = $this->admin->get_details('author', $where_user);
$customer_wallet = $wallet_balence[0]->wallet_balence;
$update_customer_wallet = $customer_wallet + $this->input->post('price');
$data1 = array(
            'wallet_balence'        => $update_customer_wallet
        );
   $where_user2 = array('id' => $this->input->post('user_id'));
   $wallet = $this->admin->_updateRowWhere('author',$data1,$where_user2);
   if($wallet){
 $data2 = array(

            'amount'       => $this->input->post('price'),
            'payment_type' => "Cradit",
            'customer_id'  => $this->input->post('user_id'),
            'date'         => date("Y-m-d H:i:s"),
            'order_id'     => $this->input->post('id'), 
            'current_belence' => $update_customer_wallet
        );
$wallet_history = $this->admin->_insertRow('wallet_history', $data2);
   }
$where_astrologer = array('id' =>$this->input->post('astro_id'));
$wallet_balance = $this->admin->get_details('author', $where_astrologer);
$totvendorprice = $this->input->post('vendor_price');
if($this->input->post('callNation') == "Domestic"){
    $astrologer_wallet = $wallet_balance[0]->wallet_balence;
    $update_astrologer_wallet = $astrologer_wallet - $totvendorprice;
    $data3 = array(
       'wallet_balence' => $update_astrologer_wallet,
    );
}elseif($this->input->post('callNation') == "International"){
    $astrologer_wallet = $wallet_balance[0]->astro_dollar_bal;
    $update_astrologer_wallet = $astrologer_wallet - $totvendorprice;
    $data3 = array(
       'astro_dollar_bal' => $update_astrologer_wallet,
    );
}



   $where_astrologer1 = array('id' => $this->input->post('astro_id'));

   $astrwallet = $this->admin->_updateRowWhere('author',$data3,$where_astrologer1);
if($astrwallet){

 $data4 = array(

            'amount'       => $totvendorprice,

            'payment_type' => "Debit",

            'customer_id'  => $this->input->post('astro_id'),

            'date'         => date("Y-m-d H:i:s"),

            'order_id'     => $this->input->post('id'), 
             'astro_current_bal' => $update_astrologer_wallet

        );

$wallet_history = $this->admin->_insertRow('wallet_history', $data4);
 }
$number1 = $wallet_balance[0]->mobile;
$number2 = $wallet_balence[0]->mobile;

if($this->input->post('callNation') == "Domestic"){
    $msg = "Dear ".$wallet_balence[0]->name.", Your booking ID ".$this->input->post('booking_id')." is reimbursed. And your Onegodmed wallet is credited by Rs. ".$this->input->post('price');
   $msg1 = "Dear ".$wallet_balance[0]->name.", Customer booking ID ".$this->input->post('booking_id')." is reimbursed. And your Onegodmed wallet is debited by Rs. ".$totvendorprice;
}elseif($this->input->post('callNation') == "International"){
    $msg = "Dear ".$wallet_balence[0]->name.", Your booking ID ".$this->input->post('booking_id')." is reimbursed. And your Onegodmed wallet is credited by USD $ ".$this->input->post('price');
   $msg1 = "Dear ".$wallet_balance[0]->name.", Customer booking ID ".$this->input->post('booking_id')." is reimbursed. And your Onegodmed wallet is debited by USD $ ".$totvendorprice;
}
$this->test_sms($msg,$number2);
$this->test_sms($msg1,$number1);
$data = array(
            'is_Active'        => "Reimbursement"
        );
   $where_user1 = array('id' => $this->input->post('id'));

   $order_history = $this->admin->_updateRowWhere('order_history',$data,$where_user1);
if($order_history){
echo json_encode(array("status"=>1));
exit();
}else{
echo json_encode(array("status"=>0));
exit(); 
}
}
public function chat_booking() {
$where = array('order_history.astrologer_id' => $this->session->userdata('id'),'order_history.call_type' => 'Chat', 'order_history.is_Active' => 'Running');
$data['booking'] = $this->admin->order($where);
$where = array('order_history.astrologer_id' => $this->session->userdata('id'),'order_history.call_type' => 'Chat', 'order_history.is_Active' => 'Accept');
$data['booking1'] = $this->admin->order($where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/chat_booking',$data);
$this->load->view('user/list_footer');
} 

public function update_chat_status() { 
date_default_timezone_set('Asia/Kolkata');
$id = base64_encode($this->input->post('id'));
$data = array(
'is_Active'  => "Accept",
'date' => date("Y-m-d H:i:s"),
'booking_no' => 'OGM' . date('dmyhis')
);
$where = array('id' => $this->input->post('id'));
$status = $this->admin->_updateRowWhere('order_history',$data,$where);
if($status){
echo json_encode(array("status"=>1, "chatId"=>$id));
}else{
echo json_encode(array("status"=>0, "chatId"=>$id));
}
}

 public function chat() {
        
        $chatid = base64_decode($this->input->get('chatid'));
        
        if($chatid == ""){
             redirect('');
        }
         
        $where = array('order_id' => $chatid);

        $data['chat'] = $this->admin->get_details("tbl_chat", $where);
        if(!$data['chat']){
             redirect('partner');
        }
        $where1 = array('id' => @$data['chat'][0]->to);

        $data['user'] = $this->admin->get_details("author", $where1);
        
        $where2 = array('id' => $chatid);

        $data['order_chat'] = $this->admin->get_details("order_history", $where2);
        
        $this->load->view('user/header');
        //$this->load->view('user/side');
        $this->load->view('admin/start_chat',$data);
        $this->load->view('user/list_footer');
    }
    
    public function chatdisplay() {
        $where = array('order_id' => $this->input->post('order_id'), 'to' => $this->input->post('user_id'), 'receiver_read'=> 'No');

        $data['chat'] = $this->admin->get_details_user("tbl_chat", $where);
        
        echo json_encode(array("status" => 1, "message" => $data['chat'][0]->message, 'msgId' =>$data['chat'][0]->id));
    }
    
       public function updatemsgstatus() { 

$id = $this->input->post('msgId');
$data = array(
'receiver_read'  => "Yes",
);
$where = array('id' => $id);
$status = $this->admin->_updateRowWhere('tbl_chat',$data,$where);
if($status){
echo json_encode(array("status"=>1));
}else{
echo json_encode(array("status"=>0));
}
}
public function chathistory($cust_id,$astro_id, $order_id) {
        
        if($cust_id == ""){
             redirect('admin');
        }
         
        $where = array('order_id' => base64_decode($order_id));

        $data['chat'] = $this->admin->get_details("tbl_chat", $where);

        $where1 = array('id' => base64_decode($cust_id));

        $data['user'] = $this->admin->get_details("author", $where1);
        
        $where1 = array('id' => base64_decode($astro_id));

        $data['astro'] = $this->admin->get_details("author", $where1);
        
       $this->load->view('user/header');
        $this->load->view('user/side');
        $this->load->view('admin/chat-history',$data);
        $this->load->view('user/list_footer');
    }
    public function promotion() { 
$data['promotion'] = $this->admin->gethorodate('tbl_promotion');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/promotion_list',$data);
$this->load->view('user/list_footer');
}
public function add_promotion() { 
$data['promotion'] = $this->admin->get('tbl_promotion');
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/add_promotion',$data);
$this->load->view('user/form_footer');
}
public function add_promotion_code() { 
    date_default_timezone_set('Asia/Kolkata');
$data = array(
'promo_amt' => $this->input->post('promo_amt'),
'date' => date("Y-m-d H:i:s")
);
$promotion = $this->admin->_insertRow('tbl_promotion',$data);
if ($promotion) {
$this->session->set_flashdata('success', 'created successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/promotion');
}
public function edit_promotion($id = '') { 
$where = array('id' => $id);
$data['promotion'] = $this->admin->get_details('tbl_promotion', $where);
$this->load->view('user/header');
$this->load->view('user/side');
$this->load->view('admin/edit_promotion',$data);
$this->load->view('user/form_footer');
}
public function edit_promotion_code() {
    date_default_timezone_set('Asia/Kolkata');
$data = array(
'promo_amt' => $this->input->post('promo_amt'),
'date' => date("Y-m-d H:i:s")
);
$where = array('id' => $this->input->post('id'));
$promotion = $this->admin->_updateRowWhere('tbl_promotion',$data,$where);
if ($promotion) {
$this->session->set_flashdata('success', 'update successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/promotion');
}  
public function delete_promotion($id) {  
$where = array('id' => $id);
$promotion = $this->admin->_deleteRowWhere('tbl_promotion',$where);
if ($promotion) {
$this->session->set_flashdata('success', 'deleted successfully');
} else {
$this->session->set_flashdata('success', 'Something went wrong');
}
redirect('admin/promotion');
}

public function createBookExcel() { 
$where = array('order_history.call_type !=' => 'Invoice');
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("S.No.", "Customer Name", "Customer Mobile", "Astrologer Name", "Service Name", "Nation", "Price", "Astrologer Price", "Astrologer Service Price", "Service Type", "Duration", "Booking Date", "Booking No", "No of Call", "Status");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->admin->order($where);

		$excel_row = 2;
        $i = 1;
		foreach($employee_data as $row)
		{
		    $where = array('id' => $row->astrologer_id);
            $profile = $this->admin->get_details('author', $where);
		    	$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row,$i);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->mobile);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, @$profile[0]->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->super_category);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->callNation);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->service_price);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->vendor_service_price);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->vendor_price);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->call_type);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->call_duration);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->date);
				$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->booking_no);
					$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->callCount);
						$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->is_Active);
			$excel_row++;
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Booking Data.xls"');
		$object_writer->save('php://output');
}
public function createPayExcel() { 
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("S.No.", "Customer Name", "Customer Mobile", "Invoice No", "Payment Date", "Payment Id", "Package Name", "Package Amount", "Discount Amount", "Recharge Amount(w/o GST)", "GST", "Amount", "Coupon Code", "Coupon Discount", "Current Balance", "Payment Status", "Nation");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->admin->payHst();

		$excel_row = 2;
        $i = 1;
		foreach($employee_data as $row)
		{
		    if($row->nation == "Domestic"){
                       $invoice = "OGM".$row->inv_no;
                   }elseif($row->nation == "International"){
                       $invoice = "OGMW".$row->inv_no;
                   }else{
                       $invoice = "OGM".$row->inv_no;
                   }
		    	$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row,$i);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->mobile);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $invoice);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->txn_id);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->pack_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->amt_bfr_dsc);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->disc_price);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->amt_after_dsc);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->gst);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->amount);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->coupon_code);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->coupon_disc);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->current_bal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->payment_status);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->nation);
			$excel_row++;
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="payment_data.xls"');
		$object_writer->save('php://output');
}
public function createUserExcel() { 
    $where = array('user_type' => "User");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("S.No.", "Image", "Country Name", "Name", "Mobile", "Email", "Signup Date/Time", "Wallet Belence");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->admin->get_details_user('author', $where);

		$excel_row = 2;
        $i = 1;
		foreach($employee_data as $row)
		{
		    $where = array('international_dialing' => $row->country_code);
                $ctryName = $this->admin->get_details('Country_codes', $where);
		    if($row->country_code == "+91"){
                $bal = 'Rs. '.$row->wallet_balence;
            }else{
                $bal =  'USD $. '.$row->wallet_balence;
            }
		    	$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row,$i);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->image);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $ctryName[0]->Country);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->country_code.' '.$row->mobile);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->email);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $bal);
			$excel_row++;
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="user_data.xls"');
		$object_writer->save('php://output');
}
public function createAstroExcel() { 
    $where = array('user_type' => "Astrologer");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("S.No.", "Image", "Name", "Email", "Password", "Wallet", "Dollar Wallet Balance", "Mobile", "Status", "Chat Status");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->admin->get_details_user('author', $where);

		$excel_row = 2;
        $i = 1;
		foreach($employee_data as $row)
		{
		    	$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row,$i);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->image);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->email);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->password);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->wallet_balence);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->astro_dollar_bal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->mobile);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->status);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->chat_status);
			$excel_row++;
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="astro_data.xls"');
		$object_writer->save('php://output');
}
    
    public function deleteuser($id){
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        $data = $this->admin->getauthordel($id);
        $this->admin->insertdeleteeddata($data[0]);
        $this->admin->deluser($id);
        
        redirect('');
        // $mesg = '<div id="flashsms" class="alert alert-success" role="alert"><span>Deleted Successfully.</span></div>';
        //         $this->session->set_flashdata('message', $mesg);
        // redirect('admin/users_list');
    }

    
}
?>
