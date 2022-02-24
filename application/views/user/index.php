        <style>
.switch {
  position: relative;
  display: inline-block;
  width: 113px;
  height: 34px;
  margin-bottom:0px;
  margin-right:10px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ca2222;
  -webkit-transition: .4s;
  transition: .4s;
   border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(78px);
}

/*------ ADDED CSS ---------*/
.slider:after
{
 content:'offline';
 color: white;
 display: block;
 position: absolute;
 transform: translate(-50%,-50%);
 top: 50%;
 left: 50%;
 font-size: 13px;
 font-family: Verdana, sans-serif;
}

input:checked + .slider:after
{  
  content:'online';
}

/*--------- END --------*/
.bg-warning_1{
    background-color: #ff0000!important;
}
</style>
<?php 
                        $where = array('id' => $this->session->userdata('id'));
                        $astrologer_status = $this->admin->get_details('author', $where);
                        ?>
 <!-- Chat Modal -->
 <div class="modal fade" id="Chat" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Next available for chat</h4>
        </div>
        <div class="modal-body">
          <select name="hour" id="selectHourChat">
              <option value="">Select Hour</option>
              <option value="00">00 Hour</option>
              <option value="01">01 Hour</option>
              <option value="02">02 Hour</option>
              <option value="03">03 Hour</option>
              <option value="04">04 Hour</option>
              <option value="05">05 Hour</option>
              <option value="06">06 Hour</option>
              <option value="07">07 Hour</option>
              <option value="08">08 Hour</option>
              <option value="09">09 Hour</option>
              <option value="10">10 Hour</option>
              <option value="11">11 Hour</option>
              <option value="12">12 Hour</option>
              <option value="13">13 Hour</option>
              <option value="14">14 Hour</option>
              <option value="15">15 Hour</option>
              <option value="16">16 Hour</option>
              <option value="17">17 Hour</option>
              <option value="18">18 Hour</option>
              <option value="19">19 Hour</option>
              <option value="20">20 Hour</option>
              <option value="21">21 Hour</option>
              <option value="22">22 Hour</option>
              <option value="23">23 Hour</option>
              <option value="24">24 Hour</option>
          </select>
          <select name="min" id="selectMinChat">
              <option value="">Select Minute</option>
              <option value="00">00 Minutes</option>
              <option value="15">15 Minutes</option>
              <option value="30">30 Minutes</option>
          </select>
          <p style="color:red;" class="errormessage1"></p>
          <input type="hidden" class="setastroId" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  onclick="update_status_val('Offline','Chat')" >Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Chat Modal end -->


  <!-- Call Modal -->
 <div class="modal fade" id="Call" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Next available for Call</h4>
        </div>
        <div class="modal-body">
        <select name="hour" id="selectHourCall">
              <option value="">Select Hour</option>
              <option value="01">01 Hour</option>
              <option value="02">02 Hour</option>
              <option value="03">03 Hour</option>
              <option value="04">04 Hour</option>
              <option value="05">05 Hour</option>
              <option value="06">06 Hour</option>
              <option value="07">07 Hour</option>
              <option value="08">08 Hour</option>
              <option value="09">09 Hour</option>
              <option value="10">10 Hour</option>
              <option value="11">11 Hour</option>
              <option value="12">12 Hour</option>
              <option value="13">13 Hour</option>
              <option value="14">14 Hour</option>
              <option value="15">15 Hour</option>
              <option value="16">16 Hour</option>
              <option value="17">17 Hour</option>
              <option value="18">18 Hour</option>
              <option value="19">19 Hour</option>
              <option value="20">20 Hour</option>
              <option value="21">21 Hour</option>
              <option value="22">22 Hour</option>
              <option value="23">23 Hour</option>
              <option value="24">24 Hour</option>
          </select>
          <select name="min" id="selectMinCall">
              <option value="00">00 Minutes</option>
              <option value="15">15 Minutes</option>
              <option value="30">30 Minutes</option>
          </select>
          <p style="color:red;" class="errormessage1"></p>
          <input type="hidden" class="setastroId" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  onclick="update_status_val('Offline','Call')" >Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Call Modal end -->
 <div class="page-wrapper">



          

             <div class="page-breadcrumb">



                <div class="row">



                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Dashboard</h4>



                        <div class="ml-auto text-right">



                            <nav aria-label="breadcrumb">



                                <ol class="breadcrumb">



                                    <li class="breadcrumb-item"><a href="#">Home</a></li>



                                    <li class="breadcrumb-item active" aria-current="page">Library</li>



                                </ol>



                            </nav>



                        </div>



                    </div>



                </div>



            </div>



            <div class="container-fluid">



                <div class="row">



                    

                   <?php if($this->session->userdata('user_type') == 'admin'){?>

                    <div class="col-md-6 col-lg-3 col-xlg-3">



                        <div class="card card-hover">



                            <div class="box bg-cyan text-center">



                                <h1 class="font-light text-white"><?php echo count($astrologer)?></h1>



                                <h6 class="text-white">Total Vendor</h6>



                            </div>



                        </div>



                    </div>



                    

               

                   <div class="col-md-6 col-lg-3 col-xlg-3">



                        <div class="card card-hover">



                            <div class="box bg-success text-center">



                                <h1 class="font-light text-white"><?php echo count($user)?></h1>



                                <h6 class="text-white">Total Customer</h6>



                            </div>



                        </div>



                    </div>



                     



                    <div class="col-md-6 col-lg-3 col-xlg-3">



                        <div class="card card-hover">



                            <div class="box bg-warning text-center">



                                <h1 class="font-light text-white"><?php echo count($booking)?></h1>



                                <h6 class="text-white">Total Bookings</h6>



                            </div>



                        </div>



                    </div>



                    



                    <div class="col-md-6 col-lg-3 col-xlg-3">



                        <div class="card card-hover">



                            <div class="box bg-danger text-center">



                                <h1 class="font-light text-white"><?php echo count($kundali)?></h1>



                                <h6 class="text-white">Total Kundali/Horoscope Booking</h6>



                            </div>



                        </div>



                    </div>

                <?php }elseif($this->session->userdata('user_type') == 'Astrologer'){?>
                    <?php 
                    $Today_earning = 0; 

                    foreach ($my_earning as $row) {


    if($row->date == date('Y-m-d')){

      $Today_earning += $row->amount;

      } 

    }
?>
 <div class="col-md-6 col-lg-3 col-xlg-3">



                        <div class="card card-hover">



                            <div class="box bg-cyan text-center">



                                <h1 class="font-light text-white"><?php echo count($vendor_services)?></h1>



                                <h6 class="text-white">Total Services</h6>



                            </div>



                        </div>



                    </div>



                    

               

                   <div class="col-md-6 col-lg-3 col-xlg-3">



                        <div class="card card-hover">



                            <div class="box bg-success text-center">



                                <h1 class="font-light text-white"><?php echo $Today_earning?></h1>



                                <h6 class="text-white">Total Today Earning</h6>



                            </div>



                        </div>



                    </div>



                     



                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                              <a href="<?= base_url()?>partner/my_booking/">
                                <h1 class="font-light text-white">
                                  <?php echo count($booking)?></h1>
                                <h6 class="text-white">Total Bookings</h6>
                              </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning_1 text-center">
                            <a href="<?= base_url()?>partner/chat_booking/">
                                <h1 class="font-light text-white"><?php echo count($livechat)?></h1>
                                <h6 class="text-white">Live Chat</h6>
                            </a> 
                            </div>
                        </div>
                    </div>
                   
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <h3 style="margin:20px 0px 10px 20px">Available for</h3>
                                    <div class="d-flex flex-wrap">
                                        <?php if($astrologer_status[0]->status != 'Inactive'){?>
                                        <div class="d-flex align-items-center" style="margin:0px 20px 20px 20px">
                                    <label class="switch">
                                    <?php if($astrologer_status[0]->status == 'Online'){?>
                                    <input type="checkbox" checked onchange="change_status_val('Offline','Call','<?php echo $astrologer_status[0]->id;?>')">
                                    <?php } else{?>
                                    <input type="checkbox" onchange="change_status_val('Online','Call','<?php echo $astrologer_status[0]->id;?>')">
                                    <?php }?>
                                    <div class="slider round1">
                                       
                                    </div>
                                    </label>
                                    <span style="font-weight:bolder;color:#000">Audio Call</span>
                                    </div>
                                    <?php }?>
                                    <?php if($astrologer_status[0]->chat_status != 'Inactive'){?>
                                    <div class="d-flex align-items-center" style="margin:0px 20px 20px 20px">
                                    <label class="switch">
                                    <?php if($astrologer_status[0]->chat_status == 'Online'){?>
                                    <input type="checkbox" checked onchange="change_status_val('Offline','Chat','<?php echo $astrologer_status[0]->id;?>')">
                                    <?php } else{?>
                                    <input type="checkbox" onchange="change_status_val('Online','Chat','<?php echo $astrologer_status[0]->id;?>')">
                                    <?php }?>
                                    <span class="slider round1"></span>
                                    </label>
                                    <span style="font-weight:bolder;color:#000">Chat</span>
                                    </div>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                  <?php }else{?>
 <div class="col-md-6 col-lg-4 col-xlg-4">



                        <div class="card card-hover">



                            <div class="box bg-cyan text-center">



                                <h1 class="font-light text-white"><?php echo count($user_wallet_history)?></h1>



                                <h6 class="text-white">Total Invoce</h6>



                            </div>



                        </div>



                    </div>



                    

               

                   <div class="col-md-6 col-lg-4 col-xlg-4">



                        <div class="card card-hover">



                            <div class="box bg-success text-center">



                                <h1 class="font-light text-white"><?php echo count($user_downloads)?></h1>



                                <h6 class="text-white">Total Downloads</h6>



                            </div>



                        </div>



                    </div>



                     



                    <div class="col-md-6 col-lg-4 col-xlg-4">



                        <div class="card card-hover">



                            <div class="box bg-warning text-center">

                                  

                                <h1 class="font-light text-white"><?php echo count($booking)?></h1>



                                <h6 class="text-white">Total Bookings</h6>



                            </div>



                        </div>



                    </div>




                    
                  <?php }?>
            



                </div>



                



            </div>
