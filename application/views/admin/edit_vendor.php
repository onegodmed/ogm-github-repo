<style type="text/css">

        
label{ cursor:pointer; user-select:none; }
   input:checked + span {
   color:red;
   }
   .availbilti-admin input {
       display: none;
   }
   .wrap-main {
   width: calc(100% - 250px);
   margin-left: auto;
}
.availability {
   border: 2px solid #e1e1e1;
   padding: 15px 20px;
}

.availability h4 {
   text-align: center;
   border-radius: 5px;
   break-after: avoid;
   border: 2px solid #000;
   padding: 20px 10px;
   margin: 0;
}
       .avail-wrap {
   border: 2px solid #e1e1e1;
   margin-top: 30px;
}

.day-wrap {
   display: flex;
   align-items: center;
   margin-bottom: 5px;
   border-bottom: 2px solid #e1e1e1;
   padding-bottom: 5px;
   padding-left: 5px;
   padding-top: 5px;
   position: relative;
   flex-wrap: wrap;
}
.day {
   text-align: center;
   border-radius: 5px;
   break-after: avoid;
   border: 2px solid #000;
   padding: 10px 15px;
   margin: 0;
   max-width: 60px;
   min-width: 60px;
   min-height: 46px;
   font-weight: 700;
}

.availbilti-admin {
   margin: 50px auto;
}

.avail-wrap ul {
   width: calc(100% - 60px);
   padding-left: 15px;
   margin-bottom: 0;
}

.avail-wrap ul label span    {
   list-style: none;
   display: inline-block;
   background-color: #ff8820;
   font-size: 10px;
   border-radius: 10px;
   padding: 2px 5px;
   
   color: #fff;
}
.avail-wrap ul label input:checked + span {
   background-color: #66B21B;
   color: #fff;
}
.avail-wrap ul:before {
   content: "";
   width: 2px;
   height: calc(100% + 7px);
   position: absolute;
   background-color: #e1e1e1;
   top: 0;
   left: 73px;
}
.daysTbale:last-child .day-wrap{
   border-bottom: 0;
}

       .day label {
   margin-bottom: 0;
       }

       .availability button.btn {
           margin: 0 auto;
           display: flex;
           margin-top: 17px;
           background-color: #ff8820;
           border-color: #ff8820;
           border-radius: 5px;
           padding: 0.375rem 2rem;
       }
       .avail-wrap ul label {
width: 16%;
text-align: center;
}
</style>

<div id="sample">
   <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
   <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</div>
<?php 
   $country = $this->admin->get('countries');
   ?>   
<div class="page-wrapper">
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">Edit Vendor</h4>
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
      <div class="col-md-12">
         <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/update_vendor') ?>" >
               <div class="card-body row">
                  <div class="form-group col-lg-6">
                     <span style="color: red;"><?php echo $this->session->flashdata('error')?></span>
                     <label>Name</label>
                     <input type="text" class="form-control" name="name" required="" placeholder="Enter Name" value="<?php echo $Astrologer[0]->name;?>">
                     <input type="hidden" name="id" value="<?php echo $Astrologer[0]->id;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Email</label>
                     <input type="text" class="form-control" placeholder="Email" name="email"  value="<?php echo $Astrologer[0]->email;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $Astrologer[0]->password;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Mobile Number</label>
                     <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" required=""  value="<?php echo $Astrologer[0]->mobile;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Address</label>
                     <input type="text" class="form-control" placeholder="Address" name="address" required="" value="<?php echo $Astrologer[0]->address;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Call Username</label>
                     <input type="text" class="form-control" placeholder="UserName" name="call_userId" required=""  value="<?php echo $Astrologer[0]->call_userId;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Call User Password</label>
                     <input type="text" class="form-control" placeholder="Password" name="call_password" required="" value="<?php echo $Astrologer[0]->call_password;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Country</label>
                     <select name="country" class="form-control" onchange="myfunction_member(this.value)">
                        <option value="<?php echo $Astrologer[0]->country?>" hidden><?php echo $Astrologer[0]->user_country?></option>
                        <?php foreach ($country as $row) {
                           ?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
                        <?php }?>
                     </select>
                  </div>
                  <div class="form-group col-lg-6">
                     <label>State</label>
                     <select name="state" id="state1" class="form-control" onchange="myfunction2_member(this.value)">
                        <option value="<?php echo  $Astrologer[0]->state?>" hidden><?php echo  $Astrologer[0]->user_state?></option>
                     </select>
                  </div>
                  <div class="form-group col-lg-6">
                     <label>City</label>
                     <select name="city" id="city1" class="form-control">
                        <option value="<?php echo $Astrologer[0]->city?>" hidden><?php echo $Astrologer[0]->user_city?></option>
                     </select>
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Experience</label>
                     <input type="text" class="form-control" placeholder="Experience" name="experience" value="<?php echo $Astrologer[0]->experience;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Expertise</label>
                     <input type="text" class="form-control" placeholder="Experience" name="expertise" value="<?php echo $Astrologer[0]->expertise;?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Call Status</label>
                     <select class="form-control" name="status">
                        <option value="Online" <?php if($Astrologer[0]->status == "Online"){echo "selected";}?>>Online</option>
                        <option value="Offline" <?php if($Astrologer[0]->status == "Offline"){echo "selected";}?>>Offline</option>
                        <option value="Busy" <?php if($Astrologer[0]->status == "Busy"){echo "selected";}?>>Busy</option>
                        <option value="Inactive" <?php if($Astrologer[0]->status == "Inactive"){echo "selected";}?>>Inactive</option>
                     </select>
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Chat Status</label>
                     <select class="form-control" name="chat_status">
                        <option value="Online" <?php if($Astrologer[0]->chat_status == "Online"){echo "selected";}?>>Online</option>
                        <option value="Offline" <?php if($Astrologer[0]->chat_status == "Offline"){echo "selected";}?>>Offline</option>
                        <option value="Busy" <?php if($Astrologer[0]->chat_status == "Busy"){echo "selected";}?>>Busy</option>
                        <option value="Inactive" <?php if($Astrologer[0]->chat_status == "Inactive"){echo "selected";}?>>Inactive</option>
                     </select>
                  </div>
                  <div class="form-group col-lg-6">
                     <label>About Us</label>
                     <textarea class="form-control" name="about_us" ><?php echo $Astrologer[0]->description;?></textarea> 
                  </div>
                  <div class="form-group col-lg-6">
                     <label>gender</label>
                     <select name="gender" class="form-control">
                        <option value="male" <?php if($Astrologer[0]->gender == "male"){echo "selected";}?>>Male</option>
                        <option value="female" <?php if($Astrologer[0]->gender == "female"){echo "selected";}?>>Female</option>
                     </select>
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Upload your Photo</label>
                     <input type="file" class="form-control" placeholder="" name="image"  >
                     <input type="hidden" name="current_image" value="<?php echo $Astrologer[0]->image?>">
                  </div>
                  <div class="form-group col-lg-6">
                     <label>Language Known</label>
                     <input type="text" class="form-control" placeholder="Experience" name="langknown" value="<?php echo $Astrologer[0]->langknown;?>">
                  </div>
                  <div class="col-md-12 availbilti-admin yes">
            <div class="availability">
               <h4>Availability</h4>
               <div class="avail-wrap">
                    <?php
                        foreach ($timetable as $key => $list) { ?>
                    
                                <div class="daysTbale">
                                <div class="day-wrap">
                                    <div class="day"><input type="checkbox" name="day[]" checked value="<?= $list->day?>">
                                        <input type="hidden" name="astroid" value="<?php echo $this->session->userdata('id') ; ?>">   
                                        <label for="vehicle1"><?= $list->day?></label><br>
                                    </div>
                                    <ul>      
                                        <?php $time =explode(",", $list->time);
                                        if(isset($check[0])){
                                            $select_time = explode(",", $check[0][$list->day]);
                                        }else{
                                            $select_time = [];
                                        }
                                        foreach ($time as  $value) {
                                         ?>  
                                        <label>
                                            <input type="checkbox" <?php if (in_array($value, $select_time)) { echo "Checked"; } ?> name="<?= $list->day?>[]" value="<?= $value ?>">
                                            <span><?= $value ?></span>
                                        </label>  
                                           
                                        <?php }  ?>
                                     
                                    </ul>
                                </div>
                                </div>
                        
                    
                    <?php } ?>
               </div>
               <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
         </div>
                  <!-- <div class="form-group col-lg-6">
                     <label>About you</label>
                     
                     <textarea placeholder="Message" class="form-control" rows="4" name="about"  value="" required=""></textarea>
                     
                      
                     
                     
                     
                     </div> -->
                  <div class="border-top col-lg-12">
                     <div class="card-body">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   function myfunction_member(country_id){
        $.ajax({
           url: "<?php echo base_url('front/ajax_get_state')?>",
           type: 'POST',
             dataType: "json",
           data: {'country_id':country_id},
           success: function(response) {
             if(response.status == 1){
               var i =0;
               $("#state1").empty();
                   $("#state1").append("<option value=''>Select</option>");
                $.each(response.state, function(key, value) {
               $("#state1").append("<option value='"+response.state[i].id+"'>"+response.state[i].name+"</option>")
            i++;
     })
             }else{
                    $("#state1").empty();
             }
           }            
       });
   }
   
   function myfunction2_member(state_id){
        $.ajax({
           url: "<?php echo base_url('front/ajax_get_city')?>",
           type: 'POST',
             dataType: "json",
           data: {'state_id':state_id},
           success: function(response) {
             if(response.status == 1){
               var i =0;
               $("#city1").empty();
                   $("#city1").append("<option value=''>Select</option>");
                $.each(response.city, function(key, value) {
               $("#city1").append("<option value='"+response.city[i].id+"'>"+response.city[i].name+"</option>")
            i++;
     })
             }else{
                    $("#state1").empty();
             }
           }            
       });
   }
</script>