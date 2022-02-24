
<div class="wrapper" style="float: right;">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Service</h4>

                        <p></p>



                        <form class="row" method="POST" action="<?php echo base_url('admin/add_vendor_services_code') ?>" >

                             <div class="form-group col-lg-6">

                                <label>Service Name</label>

                                <input type="text" class="form-control" name="service_name" required="" placeholder="Service Name">
                                <input type="hidden" name="astrologer_id" value="<?php echo $this->session->userdata('id'); ?>">

                            </div>

                            <div class="form-group col-lg-6">

                                <label>Super Category</label>
                                <select  class="form-control" name="super_cat_id" onchange="get_menu(this.value)"  required="">
                                    <option value="">Select</option>
                                    <?php foreach ($menu as $key => $row) {
                
                                    ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->name;?></option>
                                <?php }?>
                    
                                </select>
                                
                                
                            </div>
                            <div class="form-group col-lg-6">

                                <label>Category</label>
                                 <select  class="form-control" required="" name="category_id" id="get_cat" onchange="get_sub_cat(this.value)">

                                </select>

                            </div>
                             <div class="form-group col-lg-6">

                                  <label>Sub Category</label>
                                 <select  class="form-control" name="sub_cat_id" id="sub_cat_id">

                                </select>
                            </div>

                             <div class="form-group col-lg-6">

                                  <label>Price Per Unit</label>
                                 <select  class="form-control" name="price_unit">
                                   <option value="Min">Min</option>
                                   <option value="Hour">Hour</option>
                                   <option value="Day">Day</option>
                                   <option value="Week">Week</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">

                                <label>Price</label>

                                <input type="number" class="form-control" name="vendor_price" required="" placeholder="Price in rupee">
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

    </div>

    <!-- end container -->

</div>
<script type="text/javascript">

   function get_menu(id){
    alert(id);
         $.ajax({
            url: "http://rcsieducation.com/horoscope/admin/ajax_get_menu",
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
            url: "http://rcsieducation.com/horoscope/admin/ajax_get_cat",
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



