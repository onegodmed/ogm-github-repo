<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Booking extends CI_Model{ 
     
    function __construct() { 
        // Set table name 
       
    } 
     
    /* 
     * Fetch records from the database 
     * @param array filter data based on the passed parameters 
     */ 
    function getRows($params = array()){ 
        $where = array('order_history.call_type !=' => 'Invoice');
       $this->db->select('order_history.*,super_categories.super_category,super_categories.menu_id,author.name,author.address,author.mobile');
        $this->db->from('order_history');
        $this->db->join('super_categories', 'super_categories.id = order_history.super_cat_id');
        $this->db->join('author', 'author.id = order_history.customer_id');
        $this->db->order_by("id", "desc");
        if ($where != "") {
            $this->db->where($where);
        } 
         
        if(array_key_exists("where", $params)){ 
            foreach($params['where'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    } 
    function getEmployees($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " (fname like '%".$searchValue."%' or 
                lname like '%".$searchValue."%' or 
                current_location like'%".$searchValue."%' ) ";
      }


      ## Total number of records without filtering
      $this->db->select('count(*) as allcount');
      $records = $this->db->get('kundali')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $records = $this->db->get('kundali')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('*');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $this->db->order_by($columnName, "DESC");
      $this->db->limit($rowperpage, $start);
      $records = $this->db->get('kundali')->result();

      $data = array();
$i=1;
      foreach($records as $record ){
         if($record->status == "Pandding"){
            $status = '<a class="btn btn-primary" href="upload_kundali/'.$record->id.'/">Upload</a>'; 
         }else{
             $status = "Uploaded";
         }
          $data[] = array( 
              "id"=>$i,
              "fname"=>$record->fname,
              "lname"=>$record->lname,
              "mobile"=>$record->mobile,
              "current_location"=>$record->current_location,
              "birth_country"=>$record->birth_country,
              "dob" => date('d-m-Y', strtotime($record->dob)),
              "birth_time" => $record->birth_time,
              "birth_state" => $record->birth_state,
              "birth_city" => $record->birth_city,
              "status" => $status
          ); 
          $i++;
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }
  function get_reviews($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " (name like '%".$searchValue."%' or 
                astrologer_name like '%".$searchValue."%') ";
      }


      ## Total number of records without filtering
      $this->db->select('count(*) as allcount');
      $records = $this->db->get('Reviews')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $records = $this->db->get('Reviews')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('Reviews.*,author.name as astrologer_name,rating.rating');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $this->db->from('Reviews');
        $this->db->join('rating', 'rating.reviewId = Reviews.id');
        $this->db->join('author', 'author.id = Reviews.astrologer_id', "left");
        $this->db->order_by('Reviews.id', 'DESC');
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();
      $data = array();
$i=1;
      foreach($records as $record ){
         if($record->status == "Pandding"){
           $status =  '<a class="btn btn-primary" href="all_update_status/Accept/'.$record->id.'/">Accept</a>'.' '.'<a class="btn btn-danger" href="all_update_status/Reject/'.$record->id.'/">Reject</a>';
         }else{
             $status = $record->status;
         }
         $deleterow = '<a class="btn btn-danger" href="delete_reviews/'.$record->id.'/">Delete</a>';
          $data[] = array( 
              "id"=>$i,
              "name"=>$record->name,
              "astrologer_name"=>$record->astrologer_name,
              "reviews"=>$record->reviews,
              "rating"=>$record->rating,
              "date" => date('d-m-Y', strtotime($record->date)),
              "status" => $status,
              "service_id" => $deleterow
          ); 
          $i++;
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }
  function get_details_user($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " user_type = 'User' and (name LIKE '%".$searchValue."%' or 
                email LIKE '%".$searchValue."%' or 
                mobile LIKE '%".$searchValue."%') ";
      }


      ## Total number of records without filtering
      $where = array('user_type' => "User");
      $this->db->select('count(*) as allcount');
      $this->db->where($where);
      $records = $this->db->get('author')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      else
      $this->db->where($where);
      $records = $this->db->get('author')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('*');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      else
      $this->db->where($where);
      $this->db->from('author');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($rowperpage, $start);
       // echo $this->db->last_query();
        $records = $this->db->get()->result();

      $data = array();
$i=1;
      foreach($records as $record ){
          $this->db->select('Country');
          $this->db->from('Country_codes');
          $this->db->where('international_dialing', $record->country_code);
          $ctryName = $this->db->get()->result();
          $img = '<img class="img-responsive" src="https://www.onegodmed.com/admin-assets/assets/images/users/'.$record->image.'">';
         $wallet_history = '<a class="btn btn-primary" href="users_wallet_history/'.$record->id.'/">Wallet History</a>';
         $uploadrow = '<a class="btn btn-primary" href="upload_materials/'.$record->id.'/">Upload</a>';
         $editrow = '<a class="btn btn-primary" href="edit_user/'.$record->id.'/">Edit</a>';
         if($record->country_code == "+91"){
                                 $bal = 'Rs. '.$record->wallet_balence;
                                 }else{
                                $bal =  'USD $. '.$record->wallet_balence;
                                 }
          $data[] = array( 
              "id"=>$i,
              "image"=>$img,
              "country_code"=>$ctryName[0]->Country,
              "name"=>$record->name,
              "mobile"=>$record->country_code.' '.$record->mobile,
              "date" => date("d-m-Y H:i:s", strtotime($record->date)),
              "email" => $record->email,
              "wallet_balence" => $bal,
              "user_type" => $wallet_history,
              "gender" => $uploadrow,
              "password" => $editrow,
          ); 
          $i++;
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }
  
  function get_booking_data($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " (callNation like '%".$searchValue."%' or 
                call_type like '%".$searchValue."%' or 
                booking_no like '%".$searchValue."%' or 
                author.name like '%".$searchValue."%' or 
                author.mobile like '%".$searchValue."%') ";
      }


      ## Total number of records without filtering
      $where = array('order_history.call_type !=' => 'Invoice');
      $this->db->select('count(*) as allcount');
      $this->db->where($where);
      $records = $this->db->get('order_history')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      //if($searchQuery != '')
      //$this->db->where($searchQuery);
      //else
      $this->db->where($where);
      $records = $this->db->get('order_history')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('order_history.*,super_categories.super_category,super_categories.menu_id,author.name,author.address,author.mobile');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $this->db->from('order_history');
        $this->db->join('super_categories', 'super_categories.id = order_history.super_cat_id');
        $this->db->join('author', 'author.id = order_history.customer_id');
        $this->db->order_by("id", "desc");
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();

      $data = array();
$i=1;
      foreach($records as $record ){
          $this->db->select('name');
          $this->db->from('author');
          $this->db->where('id',$record->astrologer_id);
          $astroName = $this->db->get()->result();
        $this->db->select('*');
        $this->db->from('tbl_calltype');
        $this->db->where('callid', $record->callRequestId);
        $query = $this->db->get();
        $callData = $query->result();
        
        if(count($callData)>0){
            if($record->callNation == "Domestic"){
                if(@$callData[0]->status =="AgentRing"){
                    $agentRing = $callData[0]->status;
                }else if(@$callData[1]->status =="AgentRing"){
                $agentRing = @$callData[1]->status;
                }else{
                    $agentRing ="";
                }
                if(@$callData[0]->status =="AgentUp"){
                  $agentUp = @$callData[0]->status;
                } else if(@$callData[1]->status =="AgentUp"){
                $agentUp = @$callData[1]->status;
                }else{
                    $agentUp ="";
                }
                if(@$callData[2]->status =="CustomerRing"){
                $customerRing = @$callData[2]->status;
                }else if(@$callData[3]->status =="CustomerRing"){
                $customerRing = @$callData[3]->status;
                }else{
                    $customerRing ="";
                }
                if(@$callData[3]->status =="CustomerUp"){
                $customerUp = @$callData[3]->status;
                }else if(@$callData[2]->status =="CustomerUp"){
                $customerUp = @$callData[2]->status;
                }else{
                    $customerUp ="";
                }
                if(@$callData[4]->status =="CustomerHangup"){
                $hangup = @$callData[4]->status;
                } else if(@$callData[5]->status =="CustomerHangup"){
                $hangup = @$callData[5]->status;
                }else{
                    $hangup ="";
                }
                if(@$callData[4]->status =="AgentHangup"){
                $hangup1 = @$callData[4]->status;
                } else if(@$callData[5]->status =="AgentHangup"){
                $hangup1 = @$callData[5]->status;
                }else{
                    $hangup1 ="";
                }
                if(@$callData[6]->status =="answered"){
                    $callstatus ="Answered";
                }else if(@$callData[4]->status =="answered"){
                    $callstatus ="Answered";
                }else if(@$callData[5]->status =="answered"){
                    $callstatus ="Answered";
                }else if(@$callData[5]->status =="missed"||@$callData[4]->status =="missed"){
                    $callstatus ="Missed";
                }else if(@$callData[3]->status =="CustomerUp"){
                    if($record->is_Active == "Complete"){
                        $callstatus ="Answered";
                    }else if($record->is_Active == "Accept"){
                    $callstatus ="In progress";
                }
                }else{
                    $callstatus ="";
                }
                if(@$callData[6]->callHistory !=""){
                    if(@$callData[6]->status == 'answered'){
                        $caddSt = @$callData[6]->callHistory;
                        $CalData = json_decode($caddSt, 1);
                        $re = @$CalData['voicefile'];
                    $recording = '<audio controls><source src="'.$re.'" type="audio/wav">
                                                                </audio>';
                }}else if(@$callData[4]->callHistory !=""){
                    if(@$callData[4]->status == 'answered'){
                        $caddSt = @$callData[4]->callHistory;
                        $CalData = json_decode($caddSt, 1);
                        $re = @$CalData['voicefile'];
                    $recording = '<audio controls><source src="'.$re.'" type="audio/wav">
                                                                </audio>';
                }else{
                    $recording = "";
                }}else if(@$callData[5]->callHistory !=""){
                    if(@$callData[5]->status == 'answered'){
                        $caddSt = @$callData[5]->callHistory;
                        $CalData = json_decode($caddSt, 1);
                        $re = @$CalData['voicefile'];
                    $recording = '<audio controls><source src="'.$re.'" type="audio/wav">
                                                                </audio>';
                }else{
                    $recording = "";
                }}else{
                    $recording = "";
                }
            }else{
                $agentRing ="";
            $agentUp ="";
            if(@$callData[0]->status =="CustomerRing"){
            $customerRing = @$callData[0]->status;
                }else{
                    $customerRing ="";
                }
                if(@$callData[1]->status =="CustomerUp"){
            $customerUp = @$callData[1]->status;
                }else{
                    $customerUp ="";
                }
            $hangup ="";
            $hangup1 ="";
           if(@$callData[3]->status =="answered"){
                    $callstatus ="Answered";
                }else if(@$callData[1]->status =="CustomerUp"){
                    if($record->is_Active == "Complete"){
                        $callstatus ="Answered";
                    }else if($record->is_Active == "Accept"){
                    $callstatus ="In progress";
                }
                }else{
                    $callstatus ="";
                }
            if(@$callData[3]->callHistory !=""){
                    if(@$callData[3]->status == 'answered'){
                        $caddSt = @$callData[3]->callHistory;
                        $CalData = json_decode($caddSt, 1);
                        $finalData = json_decode($CalData['data'], 1);
                        $re = @$finalData['cdr']['recording-url'];
                    $recording = '<audio controls><source src="'.$re.'" type="audio/mpeg">
                                                                </audio>';
                }}else{
                    $recording = "";
                }
            }
        }else{
            $agentRing ="";
            $agentUp ="";
            $customerRing ="";
            $customerUp ="";
            $hangup ="";
            $hangup1 ="";
            $callstatus ="";
            if($record->call_type == "Chat" && ($record->is_Active == "Reimbursement" || $record->is_Active == "Complete" || $record->is_Active == "Accept")){
                $enCust = base64_encode($record->customer_id);
                $enAst = base64_encode($record->astrologer_id);
                $enI = base64_encode($record->id);
                $recording = '<a href="chathistory/'.$enCust.'/'.$enAst.'/'.$enI.'/" target="_blank">Chat History</a>';
            }else{
                 $recording = "";
            }
        }
       if($record->is_Active == "Complete"){
           $bookingNo = "'".$record->booking_no."'";
           $callNat = "'".$record->callNation."'";
           $refund = '<input type="button" class="btn btn-primary" onclick="updateCallstatus('.$record->id.','.$record->service_price.', '.$record->vendor_service_price.', '.$record->customer_id.', '.$record->astrologer_id.', '.$bookingNo.','.$callNat.')" value="Reimbursement">';
       } else if($record->is_Active == "Reimbursement"){
           $refund = "Reimbursed";
       } else{
           $refund = "";
       }
        if($record->is_Active == "Cancel" || $record->is_Active == "Complete"){ 
           $ac = "hidden";
           
       }else{
           $ac = "";
       }
        $action = '<select class="form-control" onchange="chat_status(this.value,'.$record->id.')">
                    <option value="'.$record->is_Active.'">'.$record->is_Active.'</option>
                    <option value="Cancel" '.$ac.'>Cancel</option>
                   </select>';
          $data[] = array( 
              "id"=>$i,
              "name"=>$record->name,
              "mobile"=>$record->mobile,
              "astro_name"=>@$astroName[0]->name,
              "super_category"=>$record->super_category,
              "callNation" => $record->callNation,
              "service_price" => $record->service_price,
              "vendor_service_price" => $record->vendor_service_price,
              "vendor_price" => $record->vendor_price,
              "call_type" => $record->call_type,
              "call_duration" => $record->call_duration,
              "date" => date("d-m-Y H:i:s", strtotime($record->date)),
              "booking_no" => $record->booking_no,
              "callCount" => $record->callCount,
              "is_Active" => $record->is_Active,
              "agentRing" => $agentRing,
              "agentUp" => $agentUp,
              "customerRing" => $customerRing,
              "customerUp" => $customerUp,
              "hangup" => $hangup,
              "hangup1" => $hangup1,
              "callstatus" => $callstatus,
              "recording" => $recording,
              "refund" => $refund,
              "action" => $action
              ); 
          $i++;
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }
  function getpayment($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " (inv_no like '%".$searchValue."%' or 
                payment.date like '%".$searchValue."%' or 
                txn_id like '%".$searchValue."%' or 
                author.name like '%".$searchValue."%' or 
                author.mobile like '%".$searchValue."%') ";
      }


      ## Total number of records without filtering
      $this->db->select('count(*) as allcount');
      $records = $this->db->get('payment')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      
      $records = $this->db->get('payment')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('payment.*,author.name,author.mobile');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $this->db->from('payment');
        $this->db->join('author', 'author.id = payment.customer_id');
        $this->db->order_by("id", "desc");
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();

      $data = array();
$i=1;
      foreach($records as $record ){
        if($record->payment_status == "success"){
          $action =  '<a style="text-decoration:underline" href="invoice/'.base64_encode(@$record->customer_id).'/'.base64_encode(@$record->txn_id).'/" target="_blank">View Invoice</a>';
        } else{
            $action = "";
        }
                   if($record->nation == "Domestic"){
                       $invoice = "OGM".$record->inv_no;
                   }elseif($record->nation == "International"){
                       $invoice = "OGMW".$record->inv_no;
                   }else{
                       $invoice = "OGM".$record->inv_no;
                   }
          $data[] = array( 
              "id"=>$i,
              "name"=>$record->name,
              "mobile"=>$record->mobile,
              "invoice"=>$invoice,
              "date"=> date("d-m-Y H:i:s", strtotime($record->date)),
              "pay_id" => $record->txn_id,
              "pack_name" => $record->pack_name,
              "pack_amt" => $record->amt_bfr_dsc,
              "disc_amt" => $record->disc_price,
              "rech_amt" => $record->amt_after_dsc,
              "gst" => $record->gst,
              "amt" => $record->amount,
              "coup_code" => $record->coupon_code,
              "coup_disc" => $record->coupon_disc,
              "curr_bal" => $record->current_bal,
              "pay_status" => $record->payment_status,
              "nation" => $record->nation,
              "link" => $action
              ); 
          $i++;
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }
  function get_details_astro($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " user_type = 'Astrologer' and (name LIKE '%".$searchValue."%' or 
                email LIKE '%".$searchValue."%' or 
                mobile LIKE '%".$searchValue."%') ";
      }


      ## Total number of records without filtering
      $where = array('user_type' => "Astrologer");
      $this->db->select('count(*) as allcount');
      $this->db->where($where);
      $records = $this->db->get('author')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      else
      $this->db->where($where);
      $records = $this->db->get('author')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('*');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      else
      $this->db->where($where);
      $this->db->from('author');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($rowperpage, $start);
       // echo $this->db->last_query();
        $records = $this->db->get()->result();

      $data = array();
$i=1;
      foreach($records as $record ){
          
          $img = '<img class="img-responsive" src="https://www.onegodmed.com/admin-assets/assets/images/users/'.$record->image.'">';
         $wallet_history = '<a class="btn btn-primary" href="astro_wallet_history/'.$record->id.'/">Wallet History</a>';
         $add_service = '<a class="btn btn-primary" href="services_list/'.$record->id.'/">Add Services</a>';
         $editrow = '<a class="btn btn-primary" href="edit_vendor/'.$record->id.'/">Edit</a>';
         $pay_rel = '<a class="btn btn-orange" href="vendor_payment/'.$record->id.'/">Payment Release</a>';
         $delete_astro = '<a class="btn btn-danger" href="delete_astrologer/'.$record->id.'/">Delete</a>';
         if($record->chat_status == 'Online'){
              $st = "'Offline'";
             $ty = "'Chat'";
          $chat_st =   '<label class="switch">
            <input type="checkbox" checked onchange="change_status_val('.$st.','.$ty.','.$record->id.')">
            <div class="slider round1"></div>
          </label>';
         }else if($record->chat_status == 'Offline'){
             $st = "'Online'";
             $ty = "'Chat'";
          $chat_st =   '<label class="switch">
            <input type="checkbox" onchange="change_status_val('.$st.','.$ty.','.$record->id.')">
            <div class="slider round1"></div>
          </label>';
         }else{
             $chat_st = $record->chat_status;
         }
         
         $chat_status = '<div class="d-flex align-items-center" style="margin:0px 20px 20px 20px">'.$chat_st.'</div>';
         
         if($record->status == 'Online'){
              $st = "'Offline'";
             $ty = "'Call'";
          $call_st =   '<label class="switch">
            <input type="checkbox" checked onchange="change_status_val('.$st.','.$ty.','.$record->id.')">
            <div class="slider round1"></div>
          </label>';
         }else if($record->status == 'Offline'){
             $st = "'Online'";
             $ty = "'Call'";
          $call_st =   '<label class="switch">
            <input type="checkbox" onchange="change_status_val('.$st.','.$ty.','.$record->id.')">
            <div class="slider round1"></div>
          </label>';
         }else{
             $call_st = $record->status;
         }
         
         $call_status = '<div class="d-flex align-items-center" style="margin:0px 20px 20px 20px">'.$call_st.'</div>';
          $data[] = array( 
              "id"=>$i,
              "image"=>$img,
              "name"=>$record->name,
              "email"=>$record->email,
              "password"=>$record->password,
              "wallet_balence" => $record->wallet_balence,
              "astro_dollar_bal" => $record->astro_dollar_bal,
              "mobile" => $record->mobile,
              "stonline" => $call_status,
              "stoffline" => "$chat_status",
              "wallet_hist" => $wallet_history,
              "add_service" => $add_service,
              "edit_astro" => $editrow,
              "pay_rel" => $pay_rel,
              "delete_astro" => $delete_astro,
          ); 
          $i++;
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }
}