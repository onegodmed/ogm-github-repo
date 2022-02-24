<?php

Class User extends CI_Controller {

    public function __construct() {

        //Add parent controller contructor

        parent::__construct();

        $this->load->model('admin_model', 'admin');
         $this->load->model('front_model', 'front');
        $this->load->library('form_validation');



        if ($this->session->userdata('id') == '') {

            redirect('');
        }
    }

    

    public function index() {

        $where = array('user_type' => 'Astrologer');

        $data['astrologer'] = $this->admin->get_details('author', $where);

        $where = array('user_type' => 'User');

        $data['user'] = $this->admin->get_details('author', $where);
        
        $where1 = array('astrologer_id' => $this->session->userdata('id'), 'is_Active' => 'Running', 'call_type' => 'Chat');

        $data['livechat'] = $this->admin->get_details('order_history', $where1);

        $data['kundali'] = $this->admin->get('kundali');
        if ($this->session->userdata('user_type') == 'admin') {
            $data['booking'] = $this->admin->get('order_history');
        } elseif ($this->session->userdata('user_type') == 'Astrologer') {
            $where_vendor_booking = array('order_history.astrologer_id' => $this->session->userdata('id'));
            $data['booking'] = $this->admin->order($where_vendor_booking);


            $where_vendor_earning = array('customer_id' => $this->session->userdata('id'));
            $data['my_earning'] = $this->admin->get_details('wallet_history', $where_vendor_earning);

            $where_vendor_services = array('astrologer_id' => $this->session->userdata('id'));
            $data['vendor_services'] = $this->admin->get_details('services', $where_vendor_services);
        } else {
            $where1 = array('order_history.customer_id' => $this->session->userdata('id'));

            $data['booking'] = $this->admin->order($where1);

            $where = array('customer_id' => $this->session->userdata('id'));

            $data['user_wallet_history'] = $this->admin->get_details(' order_history', $where);

            $where_downloads = array('customer_id' => $this->session->userdata('id'));

            $data['user_downloads'] = $this->admin->get_details('upload_materials', $where_downloads);
        }

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/index', $data);

        $this->load->view('user/footer');
    }

    public function weeklyavailability(){

        $id = $this->session->userdata('id');
        $check = $this->admin->checkAvb($this->session->userdata('id'));
        $data['check'] = $check;
        $data['timetable'] = $this->admin->gettimetable();
        $this->load->view('user/header');
        $this->load->view('user/side');
        $this->load->view('user/weekly-availability',$data);
        $this->load->view('user/footer');
   }   

    public function updateweeklytime(){

        $day =$this->input->post('day[]');
        $sun = $this->input->post('Sun[]');
        $mon = $this->input->post('Mon[]');
        $tue = $this->input->post('Tue[]');
        $wed = $this->input->post('Wed[]');
        $thu = $this->input->post('Thu[]');
        $fri = $this->input->post('Fri[]');
        $sat = $this->input->post('Sat[]');
        $formArray['astro_id'] = $this->session->userdata('id'); 
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
        $check = $this->admin->checkAvb($this->session->userdata('id'));
        if(empty($check)){
            $this->admin->insertweektime($formArray);
        }else{
            $this->admin->updateweektime($formArray,$this->session->userdata('id'));
        }
       
        redirect($_SERVER['HTTP_REFERER']);
    }
    

    public function logout() {

        $this->session->unset_userdata('id');

        redirect('');
    }

    public function add_super_cat() {

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/add_super_cat');

        $this->load->view('user/form_footer');
    }

    public function edit_super_cat($id) {

        $where = array('id' => $id);

        $data['super_category'] = $this->admin->get_details('super_categories', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/edit_super_cat', $data);

        $this->load->view('user/form_footer');
    }

    public function update_super_category() {

        $id = $this->input->post('id');

        $config['upload_path'] = 'assets/categories_image';

        $config['allowed_types'] = 'jpg|png|jpeg';



        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('banner_image')) {

            $banner_image = "crrent_banner_image";
        } else {

            $data = $this->upload->data();

            $banner_image = $data["file_name"];
        }

        if (!$this->upload->do_upload('image')) {

            $images = $this->input->post('current_image');
        } else {

            $data = $this->upload->data();

            $images = $data["file_name"];
        }



        $data = array(
            'super_category' => $this->input->post('super_category'),
            'slug_super_category' => $this->input->post('slug_super_category'),
            'description' => $this->input->post('description'),
            'short_description' => $this->input->post('short_description'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'date' => date('Y-m-d'),
            'youtube_url' => $this->input->post('youtube_url'),
            'banner_image' => $banner_image,
            'image' => $images,
        );



        $where = array('id' => $id);

        $super_categories = $this->admin->_updateRowWhere('super_categories', $data, $where);

        $where = array('id' => $id);

        $super_category = $this->admin->get_details('super_categories', $where);





        if ($super_categories) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('success', 'Something went wrong');
        }

        redirect('user/super_category_list/' . $super_category[0]->menu_id);
    }

    public function super_category_list($id = '') {

//   if($id == ''){
//     redirect('user');
// }

        $where = array('menu_id' => $id);

        $data['super_category'] = $this->admin->get_details('super_categories', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/super_category_list', $data);

        $this->load->view('user/list_footer');
    }

    public function add_super_category_code() {

        $config['upload_path'] = 'assets/categories_image';

        $config['allowed_types'] = 'jpg|png|jpeg';



        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('banner_image')) {

            $banner_image = "abc.png";
        } else {

            $data = $this->upload->data();

            $banner_image = $data["file_name"];
        }


        if (!$this->upload->do_upload('image')) {

            $images = ("abc.png");
        } else {

            $data = $this->upload->data();

            $images = $data["file_name"];
        }





        $data = array(
            'super_category' => $this->input->post('super_category'),
            'menu_id' => $this->input->post('menu_id'),
            'description' => $this->input->post('description'),
            'short_description' => $this->input->post('short_description'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'date' => date('Y-m-d'),
            'youtube_url' => $this->input->post('youtube_url'),
            'banner_image' => $banner_image,
            'image' => $images,
            'status' => '1'
        );

        $category = $this->admin->_insertRow('super_categories', $data);

        if ($category) {

            $this->session->set_flashdata('error', 'created successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/super_category_list/' . $this->input->post('menu_id'));
    }

    public function delete_super_category($id = '') {

        $where = array('id' => $id);

        $category = $this->admin->get_details('super_categories', $where);

        $branch = $this->admin->_deleteRowWhere('super_categories', $where);

        if ($branch) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('success', 'Something went wrong');
        }

        redirect('user/super_category_list/' . $category[0]->menu_id);
    }

//-----------------------  Add categories --------------------------



    public function add_cat($id = '') {

        if ($id == '') {

            redirect('user');
        }

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/add_cat');

        $this->load->view('user/form_footer');
    }

    public function edit_cat($id) {

        $data['super_category'] = $this->admin->get('super_categories');

        $where = array('id' => $id);

        $data['category'] = $this->admin->get_details('categories', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/edit_cat', $data);

        $this->load->view('user/form_footer');
    }

    public function add_category_code() {

        $config['upload_path'] = 'assets/categories_image';

        $config['allowed_types'] = 'jpg|png|jpeg';



        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $images = ("abc.png");
        } else {
            $data = $this->upload->data();
            $images = $data["file_name"];
        }

        if (!$this->upload->do_upload('banner_image')) {
            $banner_image = ("abc.png");
        } else {
            $data1 = $this->upload->data();
            $banner_image = $data1["file_name"];
        }

        if (!$this->upload->do_upload('comp_image')) {
            $comp_image = ("abc.png");
        } else {
            $data2 = $this->upload->data();
            $comp_image = $data2["file_name"];
        }

        $data = array(
            'super_cat_id' => $this->input->post('super_category_id'),
            'category' => $this->input->post('category'),
            'package_price' => $this->input->post('package_price'),
            'package_duration' => $this->input->post('package_duration'),
            'banner_image' => $banner_image,
            'youtube_url' => $this->input->post('youtube_url'),
            'comp_image' => $comp_image,
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            // 'description'       => $this->input->post('description'),
            // 'short_description'       => $this->input->post('short_description'),
            'date' => date('Y-m-d'),
            'image' => $images,
            'status' => '1'
        );

        $category = $this->admin->_insertRow('categories', $data);

        if ($category) {

            $this->session->set_flashdata('error', 'created successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/category_list/' . $this->input->post('super_category_id'));
    }

    public function category_list($id = 0) {

        if ($id == 0) {

            redirect('front');
        }

        $where = array('super_cat_id' => $id);

        $data['category'] = $this->admin->get_details('categories', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/cat_list', $data);

        $this->load->view('user/list_footer');
    }

    public function update_category() {

        $config['upload_path'] = 'assets/categories_image';

        $config['allowed_types'] = 'jpg|png|jpeg';



        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $images = $this->input->post('current_image');
        } else {
            $data = $this->upload->data();

            $images = $data["file_name"];
        }

        if (!$this->upload->do_upload('banner_image')) {
            $banner_image = $this->input->post('crrent_banner_image');
        } else {
            $data1 = $this->upload->data();
            $banner_image = $data1["file_name"];
        }

        if (!$this->upload->do_upload('comp_image')) {
            $comp_image = $this->input->post('current_comp_image');
        } else {
            $data2 = $this->upload->data();
            $comp_image = $data2["file_name"];
        }



        $data = array(
            'category' => $this->input->post('category'),
            'description' => $this->input->post('description'),
            'package_price' => $this->input->post('package_price'),
            'package_duration' => $this->input->post('package_duration'),
            'banner_image' => $banner_image,
            'youtube_url' => $this->input->post('youtube_url'),
            'comp_image' => $comp_image,
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'image' => $images,
            'super_cat_id' => $this->input->post('super_category_id')
        );

        $where = array('id' => $this->input->post('id'));

        $branch = $this->admin->_updateRowWhere('categories', $data, $where);

        if ($branch) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('success', 'Something went wrong');
        }

        redirect('user/category_list/' . $this->input->post('super_category_id'));
    }

    public function delete_category($id) {

        $where = array('id' => $id);

        $category = $this->admin->get_details('categories', $where);

        $category_status = $this->admin->_deleteRowWhere('categories', $where);

        if ($category_status) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('success', 'Something went wrong');
        }

        redirect('user/category_list/' . $category[0]->super_cat_id);
    }

    public function account() {
        $this->load->helper('text');
        $where = array('author.id' => $this->session->userdata('id'));

        $data['profile'] = $this->admin->get_profile($where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/account', $data);

        $this->load->view('user/form_footer');
    }

    public function edit_account() {

        $where = array('author.id' => $this->session->userdata('id'));

        $data['profile'] = $this->admin->get_profile($where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/edit_account', $data);

        $this->load->view('user/form_footer');
    }

    public function update_account() {

        $id = $this->input->post('id');

        $config['upload_path'] = 'admin-assets/assets/images/users/';

        $config['allowed_types'] = 'jpg|png|jpeg';



        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {

            $images = $this->input->post('current_image');
        } else {

            $data = $this->upload->data();

            $images = $data["file_name"];
        }




        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'image' => $images,
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode'),
            'description' => $this->input->post('about_us'),
            'experience' => $this->input->post('experience'),
            'expertise' => $this->input->post('expertise'),
        );



        $where = array('id' => $this->session->userdata('id'));

        $user = $this->admin->_updateRowWhere('author', $data, $where);





        // if ($user) {

        //     $this->session->set_flashdata('success', 'created successfully');
        // } else {

        //     $this->session->set_flashdata('success', 'Something went wrong');
        // }

        redirect('user/account/');
    }

    public function course() {

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/course');

        $this->load->view('user/form_footer');
    }

    public function booking() {

        $where1 = array('order_history.customer_id' => $this->session->userdata('id'), 'order_history.bookStatus' => '1');

        $data['booking'] = $this->admin->order($where1);

        $where = array('customer_id' => $this->session->userdata('id'));

        $data['kundali'] = $this->admin->get_details('kundali', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/booking', $data);

        $this->load->view('user/list_footer');
    }

    public function user_downloads() {

        $where = array('customer_id' => $this->session->userdata('id'));

        $data['materials'] = $this->admin->get_details('upload_materials', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/user_downloads', $data);

        $this->load->view('user/list_footer');
    }

    public function update_status($status, $id) {

        $data = array(
            'is_Active' => $status,
        );

        $where = array('id' => $id);

        $status = $this->admin->_updateRowWhere('order_history', $data, $where);

        if ($status) {

            redirect('user/booking');
        } else {

            redirect('user/booking');
        }
    }

    public function wallet_history() {

$where = array('customer_id' => $this->session->userdata('id'), 'payment_status' => 'success');
$data['wallet_history'] = $this->admin->custwalletHistory($where);

$arrData2 = array();
foreach($data['wallet_history'] as $row)  {
    $arrData1 = array();
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
    $arrData2[] = $arrData1;
}


$data['final_history'] = $arrData2;

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/wallet_history', $data);

        $this->load->view('user/list_footer');
    }

    public function ajax_update_status() {

    

    if($this->input->post('status') == 'Online'){
    
    $notifyUser = $this->front->checkNotify($this->session->userdata('id'));
    if(!empty($notifyUser)){
        $userIds = explode(',',$notifyUser[0]->user_id);
        foreach($userIds as $userId){
            $userData = $this->front->getUserData($userId);
            $number = str_replace("+","",$userData[0]->country_code).$userData[0]->mobile;
            $astro = $this->session->userdata('name');
            $url = base_url().'/'.$userData[0]->astro_slug;
            $msg = urlencode('Hi'. $userData[0]->name.', 
            Astrologer '.$astro.'  is now online to take your calls/Chat.
            link for astrologer profile=>'.$url);
            $ch=curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts='.$number.'&senderid=GODMED&msg='.$msg);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,"");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
            $data1 = curl_exec($ch);
        }
        $dltAfterNotify = $this->front->dltAfterNotify($this->session->userdata('id'));
    }
    }
        
        if($this->input->post('service_type') == 'Call'){
            $data = array(
            'status' => $this->input->post('status'),
            'next_avail_call' => $this->input->post('callTime'),
            
        );
        } else{
            $data = array(
            'chat_status' => $this->input->post('status'),
            'next_avail_chat' => $this->input->post('chatTime'),
        );
        }

        $where = array('id' => $this->input->post('astro_id'));

        $status = $this->admin->_updateRowWhere('author', $data, $where);
        if ($status) {
            echo json_encode(array("status" => 1, "message" => "successfull"));
        } else {
            echo json_encode(array("status" => 0, "message" => "failed"));
        }
    }

    public function reset_password() {

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/reset_password');

        $this->load->view('user/form_footer');
    }

    public function reset_password_code() {
        $current_pas = $this->input->post('current_pas');
        $new_pas = $this->input->post('new_pas');
        $confirm_pas = $this->input->post('confirm_pas');

        $where = array('id' => $this->session->userdata('id'));
        $where1 = array('password' => $current_pas);
        $check_pas = $this->admin->get_where_details('author', $where, $where1);
        if ($new_pas == $confirm_pas) {
            if ($check_pas) {
                $data = array(
                    'password' => $new_pas,
                );
                $where3 = array('id' => $this->session->userdata('id'));
                $status = $this->admin->_updateRowWhere('author', $data, $where3);
                redirect('user/account');
            } else {
                $this->session->set_flashdata('error', 'Current Password Is Wrong');
                redirect('user/reset_password');
            }
        } else {
            $this->session->set_flashdata('error', "New password does't match the confirm password");
            redirect('user/reset_password');
        }
    }

    public function rashi() {

        $data['rashi'] = $this->admin->get('rashi');

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/rashi_list', $data);

        $this->load->view('user/list_footer');
    }

    public function add_rashi() {

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/add_rashi');

        $this->load->view('user/form_footer');
    }

    public function add_rashi_data() {

        $data = array(
            'rashi_name' => $this->input->post('rashiName'),
            'rashi_type' => $this->input->post('rashiType'),
            'createdOn' => date("Y-m-d H:i:s", time())
        );

        $where = array('rashi_name' => $this->input->post('rashiName'), 'rashi_type' => $this->input->post('rashiType'));

        $check = $this->admin->get_details('rashi', $where);

        if ($check) {

            $this->session->set_flashdata('error', 'Already added this rashi?');

            redirect('user/add_rashi');
        }

        $category = $this->admin->_insertRow('rashi', $data);

        if ($category) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/rashi/');
    }

    public function edit_rashi($id) {

        $where = array('id' => $id);

        $data['rashi'] = $this->admin->get_details('rashi', $where);

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/edit_rashi', $data);

        $this->load->view('user/form_footer');
    }

    public function update_rashi() {
        $id = $this->input->post('id');
        $data = array(
            'rashi_name' => $this->input->post('rashiName'),
            'rashi_type' => $this->input->post('rashiType'),
        );



        $where = array('id' => $id);

        $super_categories = $this->admin->_updateRowWhere('rashi', $data, $where);

        if ($super_categories) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/rashi/');
    }

    public function delete_rashi($id = '') {

        $where = array('id' => $id);
        $branch = $this->admin->_deleteRowWhere('rashi', $where);

        if ($branch) {

            $this->session->set_flashdata('success', 'deleted successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/rashi/');
    }

    public function horoscope() {

        $data['dailyhoroscope'] = $this->admin->gethorodate('daily_horoscope');
        $data['weeklyhoroscope'] = $this->admin->gethorodate('weekly_horoscope');
        $data['monthlyhoroscope'] = $this->admin->gethorodate('monthly_horoscope');
        $data['yearlyhoroscope'] = $this->admin->gethorodate('yearly_horoscope');

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/horoscope_list', $data);

        $this->load->view('user/list_footer');
    }

    public function add_horoscope() {

        $data['rashi'] = $this->admin->get('rashi');

        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/add_horoscope', $data);

        $this->load->view('user/form_footer');
    }

    public function edit_horoscope($horotype, $id) {
        
        $horotype = $this->uri->segment(3);
        
        $data['rashi'] = $this->admin->get('rashi');
        $tblname = "";
        if($horotype == "daily"){
            $tblname = "daily_horoscope";
        } else if($horotype == "weekly"){
            $tblname = "weekly_horoscope";
        } else if($horotype == "monthly"){
            $tblname = "monthly_horoscope";
        } else if($horotype == "yearly"){
            $tblname = "yearly_horoscope";
        }
        $where1 = array('id' => $id, 'horoscope_type' => $horotype);

        $data['horodata'] = $this->admin->get_details($tblname, $where1);
        
        $this->load->view('user/header');

        $this->load->view('user/side');

        $this->load->view('user/edit_horoscope', $data);

        $this->load->view('user/form_footer');
    }

    public function add_horoscope_data() {


        $rashi_name = "";
        $horoscope_desc = "";
        $tableName = "";
        $data = array();
        $where = "";
        $year = "";


        if ($this->input->post('rashiType') == "Sunsign") {
            $rashi_name = $this->input->post('rashiName');
        } else if ($this->input->post('rashiType') == "Moonsign") {
            $rashi_name = $this->input->post('rashi_name');
        }
        
        if ($this->input->post('horoscopetype') == "daily") {
            $horoscope_desc = $this->input->post('date');
            $tableName = "daily_horoscope";
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'date' => $horoscope_desc,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );

        $where = array('rashi_name' => $this->input->post('rashiName'), 'rashi_type' => $this->input->post('rashiType'), 'date' => $horoscope_desc);
        } else if ($this->input->post('horoscopetype') == "weekly") {
            $horoscope_desc = $this->input->post('week');
            $tableName = "weekly_horoscope";
            $year = $this->input->post('weekyear');
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'weekNo' => $horoscope_desc,
            'year' => $year,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );

        $where = array('rashi_name' => $this->input->post('rashiName'), 'rashi_type' => $this->input->post('rashiType'), 'weekNo' => $horoscope_desc, 'year' => $year);
        } else if ($this->input->post('horoscopetype') == "monthly") {
            $horoscope_desc = $this->input->post('month');
            $tableName = "monthly_horoscope";
            $year = $this->input->post('monthyear');
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'monthNo' => $horoscope_desc,
            'year' => $year,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );

        $where = array('rashi_name' => $this->input->post('rashiName'), 'rashi_type' => $this->input->post('rashiType'), 'monthNo' => $horoscope_desc, 'year' => $year);
        } else if ($this->input->post('horoscopetype') == "yearly") {
            $horoscope_desc = $this->input->post('year');
            $tableName = "yearly_horoscope";
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'year' => $horoscope_desc,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );

        $where = array('rashi_name' => $this->input->post('rashiName'), 'rashi_type' => $this->input->post('rashiType'), 'year' => $horoscope_desc);
        }

        

        $check = $this->admin->get_details($tableName, $where);

        if ($check) {

            $this->session->set_flashdata('error', 'Already added this horoscope?');

            redirect('user/add_horoscope/');
        }

        $category = $this->admin->_insertRow($tableName, $data);

        if ($category) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/horoscope/');
    }
    
    public function edit_horoscope_data() {


        $rashi_name = "";
        $horoscope_desc = "";
        $tableName = "";
        $data = array();
        $where = "";
        $year = "";
        $id = $this->input->post('id');

        if ($this->input->post('rashiType') == "Sunsign") {
            $rashi_name = $this->input->post('rashiName');
        } else if ($this->input->post('rashiType') == "Moonsign") {
            $rashi_name = $this->input->post('rashi_name');
        }
        
        if ($this->input->post('horoscopetype') == "daily") {
            $horoscope_desc = $this->input->post('date');
            $tableName = "daily_horoscope";
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'date' => $horoscope_desc,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );
        } else if ($this->input->post('horoscopetype') == "weekly") {
            $horoscope_desc = $this->input->post('week');
            $tableName = "weekly_horoscope";
            $year = $this->input->post('weekyear');
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'weekNo' => $horoscope_desc,
            'year' => $year,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );
        } else if ($this->input->post('horoscopetype') == "monthly") {
            $horoscope_desc = $this->input->post('month');
            $tableName = "monthly_horoscope";
            $year = $this->input->post('monthyear');
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'monthNo' => $horoscope_desc,
            'year' => $year,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );
        } else if ($this->input->post('horoscopetype') == "yearly") {
            $horoscope_desc = $this->input->post('year');
            $tableName = "yearly_horoscope";
            $data = array(
            'horoscope_type' => $this->input->post('horoscopetype'),
            'year' => $horoscope_desc,
            'rashi_type' => $this->input->post('rashiType'),
            'rashi_name' => $rashi_name,
            'description' => $this->input->post('description'),
            'love_horoscope' => $this->input->post('love_horoscope'),
            'career_horoscope' => $this->input->post('career_horoscope'),
            'finance_horoscope' => $this->input->post('finance_horoscope'),
            'health_horoscope' => $this->input->post('health_horoscope'),
            'personality_desc' => $this->input->post('personality_desc'),
            'lover_desc' => $this->input->post('lover_desc'),
            'professional_desc' => $this->input->post('professional_desc'),
            'teen_desc' => $this->input->post('teen_desc'),
            'title' => $this->input->post('title'),
            'meta_tags' => $this->input->post('meta_tags'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description')
        );
        }

        $where = array('id' => $id);

        $horoscope = $this->admin->_updateRowWhere($tableName, $data, $where);

        if ($horoscope) {

            $this->session->set_flashdata('success', 'created successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/horoscope/');
    }

    public function delete_horoscope($id = '') {

        $where = array('id' => $id);
        $branch = $this->admin->_deleteRowWhere('daily_horoscope', $where);

        if ($branch) {

            $this->session->set_flashdata('success', 'deleted successfully');
        } else {

            $this->session->set_flashdata('error', 'Something went wrong');
        }

        redirect('user/horoscope/');
    }
    
    public function chat() {
        
        $chatid = base64_decode($this->input->get('chatid'));
        
        if($chatid == ""){
             redirect('');
        }
         
        $where = array('order_id' => $chatid);

        $data['chat'] = $this->admin->get_details("tbl_chat", $where);
        if(!$data['chat']){
             redirect('');
        }
        
        $where1 = array('id' => @$data['chat'][0]->from);

        $data['astro'] = $this->admin->get_details("author", $where1);
        
        $where2 = array('id' => $chatid);

        $data['order_chat'] = $this->admin->get_details("order_history", $where2);
        // print_r($data['order_chat']);die;
         if($data['order_chat'][0]->is_Active == "Complete"){
             redirect('chat-with-astrologer/');
        }
        
        $data ['resultSet'] = $this->front->get_header_price_details();

        $data['astrologer'] = $this->front->get('author');

        $data['categories'] = $this->front->get('categories');
        $data['countrydata'] = $this->front->getcountry('Country_codes');
        $this->load->view('front/header', $data);

        $this->load->view('front/livechat', $data);

        $this->load->view('front/footer', $data);
    }
    
    public function chatsend() {
         date_default_timezone_set('Asia/Kolkata');
        $arData = array(
                    'from' => $this->input->post('astro_id'),
                    'to' => $this->input->post('cust_id'),
                    'message' => $this->input->post('msgText'),
                    'time' => date('H:i:s'),
                    'sender_read' => 'Yes',
                    'receiver_read' => 'No',
                    'order_id' => $this->input->post('order_id')
                    );
                    
                $chatans = $this->admin->_insertRow('tbl_chat', $arData);
                $chatans_id = $this->db->insert_id();
                if($this->session->userdata('user_type') == "Astrologer"){
                 $where2 = array('id' => $this->input->post('order_id'));
                  $data['order_chat'] = $this->admin->get_details("order_history", $where2); 
                  if($data['order_chat'][0]->start_chatTime == ""){
                      $data1 = array(
                          'start_chatTime' => date('Y-m-d H:i:s')
                          );
                          $where = array('id' => $this->input->post('order_id'));
$status = $this->admin->_updateRowWhere('order_history',$data1,$where);
                  }
                }
        if ($chatans_id) {
            echo json_encode(array("status" => 1, "message" => "successfull"));
        } else {
            echo json_encode(array("status" => 0, "message" => "failed"));
        }

    }
    
    public function chatdisplay() {
        $where = array('order_id' => $this->input->post('order_id'), 'to' => $this->input->post('astro_id'), 'receiver_read'=> 'No');

        $data['chat'] = $this->admin->get_details_user("tbl_chat", $where);
        
        echo json_encode(array("status" => 1, "message" => $data['chat'][0]->message, 'msgId' =>$data['chat'][0]->id));
    }
    
    public function checkchatstus() {

       $where = array('id' => $this->input->post('order_id'));

       $data['checkchatstus'] = $this->admin->get_details('order_history', $where);

        if (count($data['checkchatstus'])>0) {
            echo json_encode(array("status" => 1, "message" => $data['checkchatstus'][0]->is_Active));
        } else {
            echo json_encode(array("status" => 0, "message" => $data['checkchatstus'][0]->is_Active));
        }
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
 public function chatending(){
     date_default_timezone_set('Asia/Kolkata');
     $datetime = date("Y-m-d H:i:s");
     $timestamp = strtotime($datetime);
     $time = $timestamp - 10;
     $chatendTime = date("Y-m-d H:i:s", $time);
     $order_id = $this->input->post('order_id');
     $where = array('id' => $order_id);
     $order_detail = $this->admin->get_details('order_history', $where);
    //  print_r($order_detail);die;
     if($order_detail[0]->is_Active == "Accept" || $order_detail[0]->is_Active == "Running"){
     $actual_price = $order_detail[0]->actual_price;
     $vendor_price = $order_detail[0]->vendor_price;
     $startchatTime = $order_detail[0]->start_chatTime;
     if($startchatTime != ""){
     $astro_id = $order_detail[0]->astrologer_id;
     $cust_id = $order_detail[0]->customer_id;
     $vendor_priceInSec = $vendor_price / 60;
     $where3 = array('id' => $astro_id);
     $where2 = array('id' => $cust_id);
     $walletData = $this->front->get_details('author', $where2);
     $walletAstroData = $this->front->get_details('author', $where3);
     $date1 = strtotime($startchatTime);  
     $date2 = strtotime($chatendTime); 
     $chatDuration = abs($date2 - $date1); 
     $aMins = intval($chatDuration / 60);
     $aSecs = str_pad(($chatDuration % 60), 2, '0', STR_PAD_LEFT);
     if(($aMins-1) <= $order_detail[0]->call_duration){
         $aMins = $aMins;
     }else{
         $aMins = $order_detail[0]->call_duration;
     }
     $fMins = $aMins;
     $fMins = ($aSecs >0) ? $fMins+1 : $fMins;
     $vFmins = ($aMins>5) ? $aMins -1 : $aMins;
     $dMins = ($fMins > 5) ? $fMins-1 : $fMins;
     $callPriceSec = round(($dMins * $actual_price), 2);
     $vFsecs = ($aMins * 60) + $aSecs;
     if($vFsecs>300 && $vFsecs<360){
        $vFsecs = $vFsecs-$aSecs;
     } else if ($vFsecs>360){
        $vFsecs=($aSecs>0) ? $vFsecs-$aSecs : $vFsecs-60;
     } else{
        $vFsecs=$vFsecs;
     }
     $totVendorPrice = round(($vFsecs * $vendor_priceInSec), 2);
     $hour = gmdate("H", $chatDuration);
     $min = gmdate("i", $chatDuration);
     $sec = gmdate("s", $chatDuration);
     $timeSpend = "";
     if ($hour > 0)
        $timeSpend .= $hour . " hour ";
     if ($min > 0){
         if($min <= $order_detail[0]->call_duration){
         $timeSpend .= $min . " Min ";
     }else{
         $timeSpend .= $order_detail[0]->call_duration . " Min ";
     }
     }
     if ($sec > 0)
        $timeSpend .= $sec . " Sec";
     $call_status1 = "Complete";
     $bookStatus = '1';
     $wallet_balance = $walletData[0]->wallet_balence;
     $current_bal = $wallet_balance - $callPriceSec;
     if($order_detail[0]->callNation == "Domestic"){
       $atroWallet_bal = $walletAstroData[0]->wallet_balence;
     $astrocurrent_bal = $atroWallet_bal + $totVendorPrice;  
     } else if($order_detail[0]->callNation == "International"){
        $atroWallet_bal = $walletAstroData[0]->astro_dollar_bal;
     $astrocurrent_bal = $atroWallet_bal + $totVendorPrice;
     }
     $data = array(
            'bookStatus' => $bookStatus,
            'call_duration' => $timeSpend,
            'is_Active' => $call_status1,
            'service_price' => $callPriceSec,
            'current_balance' => $current_bal,
            'vendor_service_price' => $totVendorPrice
        );
     $where = array('id' => $order_detail[0]->id);
     $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
      // update in booking queue
      $getQueueData = $this->admin->getQueueData($order_detail[0]->astrologer_id);
      if(count($getQueueData)>0){
      $updatedQueueVal = $getQueueData[0]->queue - 1;
      $UserId = explode(',', $getQueueData[0]->user_id);

      $getqueueBookingDetail = $this->admin->getqueueBookingDetail($order_detail[0]->astrologer_id,$UserId[0]);
      $orderID = $getqueueBookingDetail[0]->id;

    //   print_r($UserId );
      $data2 = array(
         'is_Active' => "Running",
        );
        $where = array('id' => $orderID);
        $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
        unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, $order_detail[0]->astrologer_id);
           }else{
               $deleteQueue = $this->admin->deleteQueue($order_detail[0]->astrologer_id);
           }
      }
     if ($wallet) {
        $data_cust = array(
            'wallet_balence' => $current_bal,
        );
        $where_cust = array('id' => $walletData[0]->id);
        $cust_wallet = $this->admin->_updateRowWhere('author', $data_cust, $where_cust);
        if($order_detail[0]->callNation == "Domestic"){
        $data_astro = array(
            'wallet_balence' => $astrocurrent_bal,
        );
        $where_astro = array('id' => $walletAstroData[0]->id);
        $astro_wallet = $this->admin->_updateRowWhere('author', $data_astro, $where_astro);
     } else if($order_detail[0]->callNation == "International"){
          $data_astro = array(
            'astro_dollar_bal' => $astrocurrent_bal,
        );
        $where_astro = array('id' => $walletAstroData[0]->id);
        $astro_wallet = $this->admin->_updateRowWhere('author', $data_astro, $where_astro);
     }
       
        if ($cust_wallet && $astro_wallet) {
            $data1 = array(
                'amount' => $callPriceSec,
                'payment_type' => "Debit",
                'customer_id' => $walletData[0]->id,
                'date' => date("Y-m-d"),
                'order_id' => $order_detail[0]->id,
                'current_belence' => $current_bal
            );
            $customer_wallet_history = $this->admin->_insertRow('wallet_history', $data1);
            $data2 = array(
                'amount' => $totVendorPrice,
                'payment_type' => "Cradit",
                'customer_id' => $walletAstroData[0]->id,
                'date' => date("Y-m-d"),
                'order_id' => $order_detail[0]->id,
                'astro_current_bal' => $astrocurrent_bal
            );
            $astrologer_wallet_history = $this->admin->_insertRow('wallet_history', $data2);
            $number1 = $walletData[0]->mobile;
            $number2 = $walletAstroData[0]->mobile;
            $msg = "Dear " . $walletData[0]->name . ", Your last booking from Onegodmed. Your Booking ID is " . $order_detail[0]->booking_no . " for " . $order_detail[0]->call_type . ". Chat duration is " . $timeSpend . " . Your Onegodmed wallet is debited by Rs. " . $callPriceSec;
            $msg1 = "Dear " . $walletAstroData[0]->name . ", Your last booking from Onegodmed. Customer Booking ID is " . $order_detail[0]->booking_no . " for " . $order_detail[0]->call_type . ". Chat duration is " . $timeSpend . " . Your Onegodmed wallet is credited by Rs. " . $totVendorPrice;
            $this->test_sms($msg, $number1);
            $this->test_sms($msg1, $number2);
        }
        // echo 1;
        echo json_encode(array("status" => 1,"this" => 2));
     } else {
        // echo 2;
         echo json_encode(array("status" => 0,"this" => 3 ));      
        }
     } else{
         $data = array(
            'is_Active' => "Cancel"
        );
     $where = array('id' => $order_detail[0]->id);
     $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
     // update in booking queue
      $getQueueData = $this->admin->getQueueData($order_detail[0]->astrologer_id);
      if(count($getQueueData)>0){
      $updatedQueueVal = $getQueueData[0]->queue - 1;
      $UserId = explode(',', $getQueueData[0]->user_id);

      $getqueueBookingDetail = $this->admin->getqueueBookingDetail($order_detail[0]->astrologer_id,$UserId[0]);
      $orderID = $getqueueBookingDetail[0]->id;

    //   print_r($orderID);die;
      $data2 = array(
         'is_Active' => "Running",
        );
        $where = array('id' => $orderID);
        $wallet = $this->admin->_updateRowWhere('order_history', $data2, $where);
        unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, $order_detail[0]->astrologer_id);
           }else{
               $deleteQueue = $this->admin->deleteQueue($order_detail[0]->astrologer_id);
           }
      }
     }
     }else if($order_detail[0]->is_Active == "InQueue"){
        $data = array(
            'is_Active' => "DeQueue"
        );
     $where = array('id' => $order_detail[0]->id);
     $wallet = $this->admin->_updateRowWhere('order_history', $data, $where);
     // update in booking queue
      $getQueueData = $this->admin->getQueueData($order_detail[0]->astrologer_id);
      if(count($getQueueData)>0){
      $updatedQueueVal = $getQueueData[0]->queue - 1;
      $UserId = explode(',', $getQueueData[0]->user_id);

      
        unset($UserId[0]);
           $updateUserId = implode(',',$UserId);
           $qdataArr = array(
               'queue' => $updatedQueueVal,
               'user_id' =>  $updateUserId
           );

           if($qdataArr['queue']>=1){
               $updateQueue = $this->admin->updateQueueData($qdataArr, $order_detail[0]->astrologer_id);
           }else{
               $deleteQueue = $this->admin->deleteQueue($order_detail[0]->astrologer_id);
           }

      }
      
     echo json_encode(array("status" => 1));
     }else {
         
        // echo 3;
         echo json_encode(array("status" => 1));      
        }
 }
  public function test_sms($msg = '', $number1 = '', $number2 = '', $number3 = '') {

        $msg1 = urlencode($msg);
        if ($number2 == '') {

            $ch = curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts=' . $number1 . '&senderid=GODMED&msg=' . $msg1);
        } elseif ($number3 == '' AND $number2 != '') {

            $ch = curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts=' . $number1 . ',' . $number2 . '&senderid=GODMED&msg=' . $msg1);
        } else {

            $ch = curl_init('http://manage.sambsms.com/app/smsapi/index.php?key=35D28447FCCF15&campaign=0&routeid=26&type=text&contacts=' . $number1 . ',' . $number2 . ',' . $number3 . '&senderid=GODMED&msg=' . $msg1);
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 2);

        $data1 = curl_exec($ch);
        return $data1;
    }
    
    public function chatcancel() { 
date_default_timezone_set('Asia/Kolkata');
$data = array(
'is_Active'  => "Cancel",
'date' => date("Y-m-d H:i:s"),
'booking_no' => 'OGM' . date('dmyhis')
);
$where = array('id' => $this->input->post('order_id'));
$status = $this->admin->_updateRowWhere('order_history',$data,$where);
if($status){
echo json_encode(array("status"=>1));
}else{
echo json_encode(array("status"=>0));
}
}
public function updatetypingstatus() {

        $data = array(
            'chat_typing' => $this->input->post('chat_typing'),
        );

        $where = array('id' => $this->input->post('cust_id'));

        $status = $this->admin->_updateRowWhere('author', $data, $where);

        if ($status) {
            echo json_encode(array("status"=>1));
        } else {
            echo json_encode(array("status"=>0));
        }
    }
     public function checktyping() {

       $where = array('id' => $this->input->post('astro_id'));

       $data['checkchatstus'] = $this->admin->get_details('author', $where);

        if (count($data['checkchatstus'])>0) {
            echo json_encode(array("status" => 1, "message" => $data['checkchatstus'][0]->chat_typing));
        } else {
            echo json_encode(array("status" => 0, "message" => $data['checkchatstus'][0]->chat_typing));
        }
    }
    public function chathistory($cust_id,$astro_id, $order_id) {
        
        if($cust_id == ""){
             redirect('user');
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
    public function myfollower(){
        $userid = $this->session->userdata('id');
        $data['list'] = $this->admin->get_folloing($userid);
        //print_r($data['list']); die;
        $this->load->view('user/header');
        $this->load->view('user/side');
        $this->load->view('user/following-list',$data);
        $this->load->view('user/form_footer');
    }
}

?>