   

        <div class="page-wrapper">

           

            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Add vendor Service</h4>

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

                            <form class="form-horizontal" action="<?php echo base_url('admin/add_services_code') ?>" method="POST" name="course" id="course" enctype="multipart/form-data">

                                

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Service Name</label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" name="service_name" required="" placeholder="Service Name">

                                <input type="hidden" name="astrologer_id" value="<?php echo $id; ?>">

                                        </div>



                                    </div>

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Super Category</label>

                                        <div class="col-sm-4">

                                            <select  class="form-control" name="super_cat_id" onchange="get_menu(this.value)"  required="">

                                    <option value="">Select</option>

                                    <?php foreach ($menu as $key => $row) {

                

                                    ?>

                                    <option value="<?php echo $row->id ?>"><?php echo $row->name;?></option>

                                <?php }?>

                    

                                </select>

                                            

                                        </div>



                                    </div>



                                     <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Category</label>

                                        <div class="col-sm-4">

                                              <select  class="form-control" required="" name="category_id" id="get_cat" onchange="get_sub_cat(this.value)">



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

                                   <option value="Min">Min</option>

                                   <option>Week</option>

                                   <option value="Hour">Hour</option>

                                   <option value="Day">Day</option>

                                   <option value="">.</option>

                                </select>

                                        </div>



                                    </div>

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Actual Call Astrologer Price</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="actual_call_price"  placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Actual Chat Astrologer Price</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="actual_chat_price"  placeholder="Price in rupee">

                                        </div>



                                    </div>

                                      <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Audio Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="price" required="" placeholder="Price in rupee">

                                        </div>



                                    </div>





                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Audio Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_price" required="" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                   <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Video Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="video_price" required="" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Video Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_video_price" required="" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                     <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Chat Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="chat_price" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Chat Price in Rs</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_chat_price" placeholder="Price in rupee">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Audio Price in Dollar</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="audio_dollar"  placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Audio Price in Dollar</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_audio_dollar"  placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Video Price in Dollar</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="video_dollar"  placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Video Price in Dollar</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_video_dollar" placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Customer Chat Price in Dollar</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="dollar_chat_price"  placeholder="Price in Dollar">

                                        </div>



                                    </div>
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Vendor Chat Price in Dollar</label>

                                        <div class="col-sm-4">

                                               <input type="tel" class="form-control" name="vendor_dollar_chat_price" placeholder="Price in Dollar">

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



   function get_menu(id){

   // alert(id);

         $.ajax({

            url: "<?php echo base_url('admin/ajax_get_menu')?>",

            type: 'POST',

              dataType: "json",

            data: {'menu_id':id},

            success: function(response) {

              if(response.status == 1){

                var i =0;

                    $("#get_cat").empty();

                    $("#get_cat").append("<option value=''>Select</option>");

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



      function get_sub_cat(cat_id){

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