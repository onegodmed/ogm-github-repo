<div id="sample">
  <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</div>
<?php 
$country = $this->admin->get('countries');
?>
<div class="page-wrapper">



    <div class="container-fluid">



        <div class="row">



            <div class="col-lg-12">



                <div class="card m-b-20">



                    <div class="card-body">



                        <h4 class="mt-0 header-title">Add Category</h4>



                        <p></p>







                        <form class="row" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/add_vendor_code') ?>" >



                       

                            <div class="form-group col-lg-6">

                              <p style="color: red;"><?php echo $this->session->flashdata('error')?></p>

                               <label>Name</label>



                                <input type="text" class="form-control" name="name" required="" placeholder="Enter Name">



                            </div>

                            <div class="form-group col-lg-6">

                                <label>Email</label>

                            <input type="text" class="form-control" placeholder="Email" name="email" required="">



                            </div>



                            <div class="form-group col-lg-6">



                                <label>Password</label>

                            <input type="password" class="form-control" placeholder="Password" name="password" required="">

                                



                            </div>

                             <div class="form-group col-lg-6">



                                <label>Mobile Number</label>

                            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" required="">

                                



                            </div>

                        

                            <div class="form-group col-lg-6">



                                <label>Address</label>

                            <input type="text" class="form-control" placeholder="Address" name="address" required="">

                                



                            </div>

                            <div class="form-group col-lg-6">



                                <label>County</label>

                             <select name="country" class="form-control" onchange="myfunction_member(this.value)">
                                             
                                             <?php foreach ($country as $row) {
                                               ?>
                                              <option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
                                              <?php }?>
                                                </select>

                            </div>

                             <div class="form-group col-lg-6">

                                <label>State</label>

                               <select name="state" id="state1" class="form-control" onchange="myfunction2_member(this.value)">
                                           
                
                            </select>
                            </div>


                             <div class="form-group col-lg-6">



                                <label>City</label>

                            <select name="city" id="city1" class="form-control">
                                            
                                         </select>

                                



                            </div>



                            


                            <div class="form-group col-lg-6">



                               <label>Experience</label>

                            <input type="text" class="form-control" placeholder="Experience" name="experience">

                                



                            </div>



                             <div class="form-group col-lg-6">



                               <label>Expertise</label>

                            <input type="text" class="form-control" placeholder="Expertise" name="expertise">

                                



                            </div>



                            <div class="form-group col-lg-6">



                            <label>Status</label>

                             <select class="form-control" name="status">

                               <option value="Online">Online</option>

                               <option value="Offline">Offline</option>

                               <option value="Busy">Busy</option>

                               <option value="Inactive">Inactive</option>

                            </select>

                                



                            </div>



                            <div class="form-group col-lg-6">



                               <label>About Us</label>
                           <textarea class="form-control" name="about_us" ></textarea>

                                



                            </div>

                             <div class="form-group col-lg-6">



                              <label>gender</label>

                            <select name="gender" class="form-control">

                                <option value="male">Male</option>

                                <option value="female">Female</option>

                            </select>

                                



                            </div>

                             <div class="form-group col-lg-6">



                               <label>Upload your Photo</label>

                            <input type="file" class="form-control" placeholder="" name="image" required="">

                                



                            </div>

                            

                            <div class="form-group col-lg-12">



                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>



                            </div>



                        </form>



                    </div>



                </div>



            </div>



            <!-- end col -->



           



        </div>



        <!-- end row -->



   

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






