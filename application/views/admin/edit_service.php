<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Edit vendor Service</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Service</li>
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
                    <form class="form-horizontal" action="<?php echo base_url('admin/update_services')?>" method="POST" name="course" id="course" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Service Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="service_name" required="" placeholder="Service Name" value="<?php echo $services[0]->service_name; ?>">
                                    <input type="hidden" name="id" value="<?php echo $services[0]->id; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Super Category</label>
                                <div class="col-sm-4">
                                    <select  class="form-control" id="super_cat_id" name="super_cat_id" onchange="get_menu(this.value)"  required="">
                                        <?php foreach ($menu as $key => $row) { ?>
                                        <option value="<?php echo $row->id ?>"   <?php if($services[0]->super_cat_id == $row->id){echo 'selected';}?>><?php echo $row->name;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Category</label>
                                <div class="col-sm-4">
                                    <select  class="form-control get_cat" required="" name="category_id" id="get_cat" onchange="get_sub_cat(this.value)">
                                        
                                    </select>

                                        </div>



                                    </div>



                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Sub Category</label>

                                        <div class="col-sm-4">

                                              <select  class="form-control" name="sub_cat_id" id="sub_cat_id">



                                </select>

                                        </div>



                                    </div>



                                     <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Price Per Unit</label>

                                        <div class="col-sm-4">

                                              <select  class="form-control" name="price_unit">

                                   <option value="Min" <?php if($services[0]->price_unit == "Min"){echo "selected";}?>>Min</option>

                                    <option value="Week" <?php if($services[0]->price_unit == "Week"){echo "selected";}?>>Week</option>

                                   <option value="Hour" <?php if($services[0]->price_unit == "Hour"){echo "selecte";}?>>Hour</option>

                                   <option value="Day" <?php if($services[0]->price_unit == "Day"){echo "selected";}?>>Day</option>

                                   <option value="" <?php if($services[0]->price_unit == "."){echo "selected";}?>>.</option>

                                </select>

                                        </div>



                                    </div>
                                  <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Actual Call Astrologer Price</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="actual_call_price" value="<?php echo $services[0]->actual_call_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Actual Chat Astrologer Price</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="actual_chat_price" value="<?php echo $services[0]->actual_chat_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    

                                      <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Audio Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="price" required="" value="<?php echo $services[0]->price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>



                                     <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Audio Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_price" required="" value="<?php echo $services[0]->vendor_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Video Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="video_price"  value="<?php echo $services[0]->video_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>

                                <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Vendor Video Price in Rs </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_video_price" value="<?php echo $services[0]->vendor_video_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Chat Price in Rs </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="chat_price"  value="<?php echo $services[0]->chat_price?>" placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Vendor Chat Price in Rs </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_chat_price"  value="<?php echo $services[0]->vendor_chat_price?>" placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                             <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Customer Audio Price in Dollar </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="dollar_price"  value="<?php echo $services[0]->dollar_price?>" placeholder="Price in Dollar">

                                        </div>



                                    </div>         <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Vendor Audio Price in Dollar </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_dollar_price"  value="<?php echo $services[0]->vendor_dollar_price?>" placeholder="Price in Dollar">

                                        </div>



                                    </div>         <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Customer Video Price in Dollar </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="video_dollar_price"  value="<?php echo $services[0]->video_dollar_price?>" placeholder="Price in Dollar">

                                        </div>



                                    </div>         <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Vendor Video Price in Dollar </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_video_dollar_price"  value="<?php echo $services[0]->vendor_video_dollar_price?>" placeholder="Price in Dollar">

                                        </div>



                                    </div>
                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Chat Price in Dollar </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="dollar_chat_price"  value="<?php echo $services[0]->dollar_chat_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Vendor Chat Price in Dollar </label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_dollar_chat_price"  value="<?php echo $services[0]->vendor_dollar_chat_price?>" placeholder="Price in rupee">

                                        </div>



                                    </div>

                           </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input  type="submit" name="submit"  class="btn btn-primary" placeholder="Submit">

                                    </div>

                                </div>

                            </form>

                        </div>

                       </div>

                       

                       </div>

            

          <script type="text/javascript">

        window.onload = function() {

  get_menu();

  get_sub_cat();

};

   function get_menu(){

     var id = $("#super_cat_id").val();

         $.ajax({

            url: "<?php echo base_url('admin/ajax_get_menu')?>",

            type: 'POST',

              dataType: "json",

            data: {'menu_id':id},

            success: function(response) {

              if(response.status == 1){

                var i =0;

                    $("#get_cat").empty();

                  

                 $.each(response.super_category, function(key, value) {

                $("#get_cat").append("<option value='"+response.super_category[i].id+"'>"+response.super_category[i].super_category+"</option>")

             i++;

      })



                 get_sub_cat();

              }else{

                

               

              }

            }            

        });

   }



      function get_sub_cat(){

        var cat_id = $(".get_cat").val();

         $.ajax({

            url: "<?php echo base_url('admin/ajax_get_cat')?>",

            type: 'POST',

              dataType: "json",

            data: {'cat_id':cat_id},

            success: function(response) {

              if(response.status == 1){

                var i =0;

                    $("#sub_cat_id").empty();

                 $.each(response.category, function(key, value) {

                $("#sub_cat_id").append("<option value='"+response.category[i].id+"'>"+response.category[i].category+"</option>")

             i++;

      })

              }else{

                     $("#sub_cat_id").empty();

              }

            }            

        });

   }

         

               







</script>