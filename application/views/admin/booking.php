<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
	<!-- Datatable JS -->
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<?php 
$caddSt="";
?>
<style>
    ul.nav.nav-tabs li {
        background: #fe871e;
        margin: 10px;
        padding: 10px 20px;
        color: #fff;
        font-size: 14px;
    }
    
    ul.nav.nav-tabs li a {
        color: #fff;
    }
    
    .tab-content h3 {
        text-align: center;
        padding: 15px;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #fff;
    background-color: #ffffff;
    background: linear-gradient(to bottom, #ffffff 0%, #fff 100%);
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0;
    margin-left: 0;
}
.button-exce{
    background: #fe871e;
        margin: 10px;
        padding: 10px 20px;
        color: #fff;
        font-size: 14px;
        border-radius: 50px;
}
ul.nav.nav-tabs li.active{
    background: #141619;
}
</style>


<div class="page-wrapper">

    <div class="page-breadcrumb">

        <div class="row">

            <div class="col-12 d-flex no-block align-items-center">

                <h4 class="page-title">Booking</h4>

                <div class="ml-auto text-right">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Booking</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">

                        <ul class="nav nav-tabs">

                            <li><a data-toggle="tab" href="#home">Vedic Healing</a></li>

                            <li><a data-toggle="tab" href="#menu1">Course</a></li>

                            <li class="active"><a data-toggle="tab" href="#menu2" class="active show">Vedic Astrology</a></li>

                            <li><a data-toggle="tab" href="#menu3">Live Predictions</a></li>

                            <li><a data-toggle="tab" href="#menu4">Kundali/Horoscope</a></li>

                        </ul>

                        <div class="tab-content">

                            <div id="home" class="tab-pane fade">

                                <h3>Vedic Healing</h3>

                                <div class="table-responsive">

                                     <button class="button-exce" id="button-excel1">Create Excel</button>
                    

                                    <table id="zero_config" class="display" style="width:100%">

                                        <thead>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Vendor Name</th>

                                                <th>Services name</th>

                                                <th>Price</th>

                                                <th>Appointment Date</th>

                                                <th>Appointment Time</th>

                                                <th>Time</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Status</th>

                                                <th>Change Status button</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php 

                             $i = 1;

                         foreach ($booking as $key => $row) {

                                  if($row['menu_id'] == 1){

                                    $where = array('id' => $row['astrologer_id']);

                                    $profile = $this->admin->get_details('author', $where);

                         ?>

                                                <tr>

                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->name; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->address; ?>
                                                    </td>

                                                    <td>
                                                        <?php if($profile){echo $profile[0]->name;}else{

                                                echo "";

                                            } ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->super_category; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->service_price; ?>
                                                    </td>

                                                    <td><?php echo date('d-m-Y', strtotime($row->appointment_date)); ?></td>

                                                    <td><?php echo $row->appointment_time; ?></td>

                                                    <td></td>

                                                    <td>
                                                        <?php echo date('d-m-Y', strtotime($row->date)); ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->booking_no; ?>
                                                    </td>

                                                     <td>
                                                        <?php echo $row->is_Active; ?>
                                                    </td>

                                                    <td>

                                                        <select class="form-control" onchange="change_status(this.value,<?php echo $row->id?>,<?php echo $profile[0]->mobile?>,<?php echo $row->mobile?>)">
                                                            <option value="<?php echo $row->is_Active?>">
                                                                <?php echo $row->is_Active?>
                                                            </option>
                                                            <option value="Cancel" <?php if($row->is_Active == "Cancel"){ echo "hidden"; } ?> >Cancel</option>

                                                            <option value="Accept" <?php if($row->is_Active == "Accept"){ echo "hidden"; } ?> >Accept</option>

                                                            <option value="Running" <?php if($row->is_Active == "Running"){ echo "hidden"; } ?>>Processing</option>

                                                            <option value="Complete" <?php if($row->is_Active == "Complete"){ echo "hidden"; } ?> >Complete</option>

                                                            <option value="Reject" <?php if($row->is_Active == "Reject"){ echo "hidden"; } ?>>Reject</option>

                                                        </select>

                                                    </td>

                                                </tr>

                                                <?php  }}?>

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Vendor Name</th>

                                                <th>Services name</th>

                                                <th>Price</th>

                                                <th>Appointment Start Date</th>

                                                <th>Appointment End Date Time</th>

                                                <th>Time</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                 <th>Status</th>

                                                <th>Change Status button</th>

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>

                            <div id="menu1" class="tab-pane fade">

                                <h3>Course</h3>


                                <div class="table-responsive">

                                     <button class="button-exce" id="button-excel2">Create Excel</button>
                    

                                    <table id="zero_config1" class="display" style="width:100%">

                                        <thead>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Coustomer Number</th>

                                                <th>Services name</th>

                                                <th>Price</th>

                                                <th>Appointment Start Date</th>

                                                <th>Appointment End Date Time</th>

                                                <th>Time</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Change Status button</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php 

                             $i = 1;

                         foreach ($booking as $key => $row) {

                                  if($row['menu_id'] == 2){

                                    $where = array('id' => $row['astrologer_id']);

                                    $profile = $this->admin->get_details('author', $where);

                         ?>

                                                <tr>

                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->name; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->address; ?>
                                                    </td>

                                                    <td>
                                                         <?php echo $row->mobile; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->super_category; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->service_price; ?>
                                                    </td>

                                                    <td><?php echo date('d-m-Y', strtotime($row->appointment_date)); ?></td>

                                                    <td><?php echo $row->appointment_time; ?></td>

                                                    <td><?php echo date('d-m-Y', strtotime($row->date));?></td>

                                                    <td><?php echo $row->booking_no?></td>

                                                      
                                                    <td>
                                                        <?php echo $row->is_Active?>
                                                    </td>

                                                    <td>

                                                        <select class="form-control" onchange="change_status(this.value,<?php echo $row->id;?>,<?php echo 0;?>,<?php echo $row->mobile;?>,'<?php echo $row->name;?>')">
                                                            <option value="<?php echo $row->is_Active?>">
                                                                <?php echo $row->is_Active?>
                                                            </option>
                                                            <option value="Cancel" <?php if($row->is_Active == "Cancel"){ echo "hidden"; } ?> >Cancel</option>

                                                            <option value="Accept" <?php if($row->is_Active == "Accept"){ echo "hidden"; } ?> >Accept</option>

                                                            <option value="Running" <?php if($row->is_Active == "Running"){ echo "hidden"; } ?>>Processing</option>

                                                            <option value="Complete" <?php if($row->is_Active == "Complete"){ echo "hidden"; } ?> >Complete</option>

                                                            <option value="Reject" <?php if($row->is_Active == "Reject"){ echo "hidden"; } ?>>Reject</option>

                                                        </select>

                                                    </td>

                                                </tr>

                                                <?php  }}?>

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Coustomer Number</th>

                                                <th>Services name</th>

                                                <th>Price</th>

                                                <th>Appointment Start Date</th>

                                                <th>Appointment End Date Time</th>

                                                <th>Time</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Change Status button</th>

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>

                            <div id="menu2" class="tab-pane fade active show">

                                <h3>Vedic Astrology</h3>

                                <div class="table-responsive">
                                    <form method="post" action="<?php echo base_url(); ?>admin/createBookExcel">
     <input type="submit" name="export" class="btn btn-success" value="Download All" />
    </form>
                                   <button class="button-exce" id="button-excel">Create Excel</button>
                                   <table id='empTable' class='display dataTable'>

	  <thead>
	    <tr>
	      <th>S.no</th>

                                                <th>Customer Name</th>
                                                
                                                <th>Customer Mobile</th>

                                                <th>Vendor Name</th>

                                                <th>Services name</th>
                                                
                                                 <th>Nation</th>

                                                <th>Price</th>
                                                
                                                <th>Vendor Price</th>
                                                <th>Vendor Service Price</th>
                                                <th>Service Type</th>
                                                
                                                <th>Duration</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>
                                                <th>No. of Calls</th>
                                                <th>Status</th>
                                                
                                                <th>Agent Call Ring Status</th>
                                                
                                                <th>Agent Call Up Status</th>
                                                
                                                <th>Customer Call Ring Status</th>
                                                <th>Customer Call Up Status</th>
                                                
                                                <th>Customer Hangup Status</th>
                                                
                                                <th>Agent Hangup Status</th>
                                                
                                                <th>Call Status</th>
                                                
                                                <th>Recording</th>
                                                <th>Refund</th>
                                                <th>Action</th>
	    </tr>
	  </thead>

	</table> 

					
                                </div>

                            </div>
                            
                            <div id="menu3" class="tab-pane fade">

                                <h3>Live Predictions</h3>

                                <div class="table-responsive">

                                     <button class="button-exce" id="button-excel3">Create Excel</button>
                    

                                    <table  id="zero_config3" class="display" style="width:100%">

                                        <thead>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Mobile no</th>

                                                <th>Service Name</th>

                                                <th>Sub Category</th>

                                                <th>Price</th>

                                                <!-- <th>Duration Appointment Date</th> -->

                                                <th>Time</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Add Link</th>

                                                <th>Link</th>

                                                <th>Current Status</th>

                                                <th>Change Status</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php 

                             $i = 1;

                         foreach ($booking as $key => $row) {

                                  if($row['menu_id'] == 4){

                         ?>

                                                <tr>

                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->name; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->address; ?>
                                                    </td>

                                                    <td>
                                                         <?php echo $row->mobile; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->super_category; ?>
                                                    </td>
                                                   <?php 
                                                   $where = array('id' => $row->category_id);
                                                $sub_cat = $this->admin->get_details('categories', $where);
                                                   ?>
                                                    <td>
                                                        <?php if(isset($sub_cat[0]->category)){echo $sub_cat[0]->category;}else{echo "";}; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->service_price; ?>
                                                    </td>

                                                   <!--  <td><?php echo date('d-m-Y', strtotime($row->appointment_date)); ?></td> -->

                                                    <td><?php echo $row->appointment_time; ?></td>

                                                    <td><?php echo date('d-m-Y', strtotime($row->date))?></td>

                                                    <td><?php echo $row->booking_no?></td>

                                                      <?php
                                                 
                                             if($row->is_Active == 'Accept' AND $row->super_cat_id == 81){?>
                                                <td>
                                                       <p id="#invalide_link<?php echo $i?>"></p>
                                                                       <form>
                                                                           <input type="text" id="youtube_link<?php echo $i?>">
                                                                           <input type="hidden" id="order_id<?php echo $i?>" value="<?php echo $row->id;?>">
                                                                          <input type="button" class="btn btn-primary" onclick="submit_link(<?php echo $i?>)" value="Add Link">
                                                                       </form>
                                                                       </td>

                                                                            <?php }else{?>
                                                                        <td>N/A</td>
                                                                            <?php }?>

                                                     <td>
                                                        <?php if($row->video_link != "" AND $row->super_cat_id == 81){?>
                                                        <a href="<?php echo $row->video_link?>">Link</a>
                                                        <?php }else{?>
                                                            N/A
                                                        <?php }?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->is_Active?>
                                                    </td>

                                                    <td>

                                                        <select class="form-control" onchange="change_status(this.value,<?php echo $row->id;?>,<?php echo 0;?>,<?php echo $row->mobile;?>,'<?php echo $row->name;?>')">
                                                            <option value="<?php echo $row->is_Active?>">
                                                                <?php echo $row->is_Active?>
                                                            </option>
                                                            <option value="Cancel" <?php if($row->is_Active == "Cancel"){ echo "hidden"; } ?> >Cancel</option>

                                                            <option value="Accept" <?php if($row->is_Active == "Accept"){ echo "hidden"; } ?> >Accept</option>

                                                            <option value="Running" <?php if($row->is_Active == "Running"){ echo "hidden"; } ?>>Processing</option>

                                                            <option value="Complete" <?php if($row->is_Active == "Complete"){ echo "hidden"; } ?> >Complete</option>

                                                            <option value="Reject" <?php if($row->is_Active == "Reject"){ echo "hidden"; } ?>>Reject</option>

                                                        </select>

                                                    </td>


                                                </tr>

                                                <?php }}?>

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Mobile no</th>

                                                <th>Service Name</th>

                                                <th>Price</th>

                                                <th>Duration Appointment Date</th>

                                                <th>Time</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Add Link</th>

                                                <th>Link</th>

                                                <th>Current Status</th>

                                                <th>Change Status</th>

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>

                            <div id="menu4" class="tab-pane fade">

                                <h3>Kundali/Horoscope</h3>

                                <div class="table-responsive">

                                     <button class="button-exce" class="button-exce" id="button-excel4">Create Excel</button>
                

                                    <table  id="zero_config4" class="display" style="width:100%">

                                        <thead>

                                            <tr>

                                                <th>S.no </th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Mobile Number</th>

                                                <th>Language</th>

                                                <th>Birth Country</th>

                                                <th>Birth State</th>

                                                <th>Birth City</th>

                                                <th>Birth Date</th>

                                                <th>Birth Time</th>

                                                <th>Gender</th>

                                                <th>Service Category</th>

                                                <th>Services name</th>

                                                <th>Price</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Upload Button </th>

                                                <!--  <th>Status</th> -->

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php 

                             $i =1;

                        foreach ($kundali as $kundali) {

                        ?>

                                                <tr>

                                                    <td>
                                                        <? echo $i++?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->fname.' '.$kundali->lname;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->current_location;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->mobile;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->birth_detail;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->birth_country;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->birth_state;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->birth_city;?>
                                                    </td>

                                                    <td>
                                                        <?php echo date('d-m-Y', strtotime($kundali->dob));?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->birth_time;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->gender;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->super_category;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->service_name;?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->service_price;?>
                                                    </td>

                                                    <td>
                                                        <?php echo date('d-m-Y', strtotime($kundali->date));?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kundali->booking_no;?>
                                                    </td>

                                                    <?php if($kundali->status == "Pandding"){?>

                                                        <td> <a class="btn btn-primary" href="<?php echo base_url('admin/upload_kundali/'.$kundali->id)?>">Upload</a></td>

                                                        <?php }else{?>

                                                            <td>Uploaded</td>

                                                            <?php }?>

                                                                <!--  <td>

                                                <select class="form-control" >

                                                <option>Select</option>

                                                <option>Cancel</option>

                                                 <option>Complete</option>

                                                  <option>Running</option>

                                            </select>

                                        </td> -->

                                                </tr>

                                                <?php }?>

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                               <th>S.no </th>

                                                <th>Customer Name</th>

                                                <th>Customer Address</th>

                                                <th>Mobile Number</th>

                                                <th>Language</th>

                                                <th>Birth Country</th>

                                                <th>Birth State</th>

                                                <th>Birth City</th>

                                                <th>Birth Date</th>

                                                <th>Birth Time</th>

                                                <th>Gender</th>

                                                <th>Service Category</th>

                                                <th>Services name</th>

                                                <th>Price</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>

                                                <th>Upload Button </th>

                                                <!-- <th>Status</th> -->

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <script type="text/javascript">
        function chat_status(status, order_id) {

                $.ajax({

                    url: "<?php echo base_url('user/chatcancel/')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'order_id': order_id
                    },

                    success: function(response) {

                        if (response.status == 1) {
                               location.reload();
                        } else {

                        }

                    }

                });

            }
            function change_status(status, id, vendor_mobile, customer_mobile, customer_name, vendor_name, call_price, cust_id, astro_id, astro_price, call_time,booking_id) {

                // alert(status);

                // alert(id);

                // alert(vendor_mobile);

                // alert(customer_mobile);

                $.ajax({

                    url: "<?php echo base_url('admin/ajax_update_status')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'id': id,
                        'status': status,
                        'vendor_mobile': vendor_mobile,
                        'customer_mobile': customer_mobile,
                        'customer_name': customer_name,
                        'vendor_name': vendor_name,
                        'call_price': call_price,
                        'cust_id': cust_id,
                        'astro_id': astro_id,
                        'astro_price': astro_price,
                        'call_time': call_time,
                        'booking_id': booking_id
                    },

                    success: function(response) {

                        if (response.status == 1) {
                               location.reload();
                        } else {

                        }

                    }

                });

            }
             function updateCallstatus(id, price, vendor_price, user_id, astro_id, booking_id, callNation) {
                $.ajax({

                    url: "<?php echo base_url('admin/ajax_updateCallstatus')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'id': id,
                        'price': price,
                        'vendor_price':vendor_price,
                        'user_id': user_id,
                        'astro_id': astro_id,
                        'booking_id': booking_id,
                        'callNation': callNation
                    },

                    success: function(response) {

                        if (response.status == 1) {
                               location.reload();
                        } else {

                        }

                    }

                });

            }
        </script>
        <script type="text/javascript">
	$(document).ready(function(){
	   	$('#empTable').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'post',
	      	'ajax': {
	          'url':'<?=base_url()?>admin/bookingList'
	      	},
	      	'columns': [
	      	    { data: 'id' },
	         	{ data: 'name' },
	         	{ data: 'mobile' },
	         	{ data: 'astro_name' },
	         	{ data: 'super_category' },
	         	{ data: 'callNation' },
	         	{ data: 'service_price' },
	         	{ data: 'vendor_service_price' },
	         	{ data: 'vendor_price' },
	         	{ data: 'call_type' },
	         	{ data: 'call_duration' },
	         	{ data: 'date' },
	         	{ data: 'booking_no' },
	         	{ data: 'callCount' },
	         	{ data: 'is_Active' },
	         	{ data: 'agentRing' },
	         	{ data: 'agentUp' },
	         	{ data: 'customerRing' },
	         	{ data: 'customerUp' },
	         	{ data: 'hangup' },
	         	{ data: 'hangup1' },
	         	{ data: 'callstatus' },
	         	{ data: 'recording' },
	         	{ data: 'refund' },
	         	{ data: 'action' }
	      	]
	   	});
	});
	     let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
  let table = document.querySelector("#empTable");
  TableToExcel.convert(table);
});
	</script>
<script type="text/javascript">
     



 let button1 = document.querySelector("#button-excel1");

button1.addEventListener("click", e => {
  let table = document.querySelector("#zero_config1");
  TableToExcel.convert(table);
});

let button2 = document.querySelector("#button-excel2");

button2.addEventListener("click", e => {
  let table = document.querySelector("#zero_config2");
  TableToExcel.convert(table);
});

let button3 = document.querySelector("#button-excel3");

button3.addEventListener("click", e => {
  let table = document.querySelector("#zero_config3");
  TableToExcel.convert(table);
});

let button4 = document.querySelector("#button-excel4");

button4.addEventListener("click", e => {
  let table = document.querySelector("#zero_config4");
  TableToExcel.convert(table);
});

function submit_link(id){
    var youtube = $('#youtube_link'+id).val();
    var order_id = $('#order_id'+id).val();
    if(youtube == ""){
          $('#invalide_link'+id).html('Please Enter Valide Link');
    }else{
         $.ajax({

                    url: "<?php echo base_url('admin/add_link')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'youtube': youtube,
                        'order_id': order_id
                    },

                    success: function(response) {

                        if (response.status == 1) {
                        
                        } else {

                        }

                    }

                });
    }
}

/*=====================*/

$(document).ready(function() {
    $('table.display').DataTable();
} );

</script>
             <script>
    //     function autoRefreshPage()
    // {
    //     window.location = window.location.href;
    // }
    // setInterval('autoRefreshPage()', 10000);
    </script>  