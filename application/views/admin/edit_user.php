<?php 
$country = $this->admin->get('countries');
?> 

<div class="page-wrapper">



    <div class="container-fluid">



        <div class="row">



            <div class="col-lg-12">



                <div class="card m-b-20">



                    <div class="card-body">



                        <h4 class="mt-0 header-title">Edit User</h4>
                        <!-- <a href="<?php echo base_url();?>Admin/deleteuser/<?= $user[0]->id ?>"><h4 class="mt-0 header-title">Delete</h4></a> -->
                        <?php echo  $this->session->flashdata('message');?>
                        <form class="" method="POST" action="<?php echo base_url('admin/update_user') ?>" enctype="multipart/form-data">


                            <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">User Name</label>

<div class="col-sm-6">

                                <input type="text" class="form-control" name="name" placeholder="Enter Category Name" value="<?php echo $user[0]->name?>">

                                <input type="hidden" name="id" value="<?php echo $user[0]->id?>">

</div>

                            </div>

                            <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">User Email</label>

<div class="col-sm-6">

                                <input type="text" class="form-control" name="email" placeholder="Enter Category Name" value="<?php echo $user[0]->email?>">

</div>

                            </div>

                             <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">User Contact</label>

<div class="col-sm-6">

                                <input type="text" class="form-control" name="mobile" required="" placeholder="Enter Category Name" value="<?php echo $user[0]->mobile?>">
</div>
                            </div>



                             <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">User Image</label>

<div class="col-sm-6">

                                <input type="file" class="form-control" name="image"  placeholder="Enter Category Name">

                                <input type="hidden" name="current_image" value="<?php echo $user[0]->image?>">

</div>

                            </div>

                           <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-6">

                            <input type="text" class="form-control" placeholder="Address" name="address"  value="<?php echo $user[0]->address;?>">

                                
</div>


                            </div>

                             <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">Country</label>
                                <div class="col-sm-6">

                            <select name="country" class="form-control" onchange="myfunction_member(this.value)">
                                              <option value="<?php echo $user[0]->country?>" hidden><?php echo $user[0]->user_country?></option>
                                             <?php foreach ($country as $row) {
                                               ?>
                                              <option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
                                              <?php }?>
                                                </select>

                                
</div>


                            </div>



                             


                            <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">State</label>
                                <div class="col-sm-6">

                            <select name="state" id="state1" class="form-control" onchange="myfunction2_member(this.value)">
                                           <option value="<?php echo  $user[0]->state?>" hidden><?php echo  $user[0]->user_state?></option>
                
                            </select>
</div>
                                



                            </div>

                            <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">City</label>
                                <div class="col-sm-6">

                            <select name="city" id="city1" class="form-control">
                                            <option value="<?php echo $user[0]->city?>" hidden><?php echo $user[0]->user_city?></option>
                                         </select>

</div>
                                



                            </div>


                             <div class="form-group row">



                                <label class="col-sm-2 text-right control-label col-form-label">User wallet balence</label>

<div class="col-sm-6">

                                <input type="text" class="form-control" name="wallet_balence" required="" placeholder="Enter Category Name" value="<?php echo $user[0]->wallet_balence?>">
                                </div>

                            </div>



                            <div class="border-top">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
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

<!-- autohide falsh msg -->
<script type="text/javascript">
   $('.alert').hide(1000); 
</script>
<!--end od msg -->