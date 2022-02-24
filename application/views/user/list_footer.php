<footer class="footer text-center">



                2019 all rights reserved @ onegodmed.com



            </footer>



        

        </div>



        

    </div>

 <style>

       table img{

        width: 50px;

    }

 </style>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin-assets/assets/extra-libs/multicheck/multicheck.css">

 <link href="<?php echo base_url();?>admin-assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">



<script src="<?php echo base_url();?>admin-assets/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="<?php echo base_url();?>admin-assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>

    <script src="<?php echo base_url();?>admin-assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="<?php echo base_url();?>admin-assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>

    <script src="<?php echo base_url();?>admin-assets/assets/extra-libs/sparkline/sparkline.js"></script>

    <!--Wave Effects -->

    <script src="<?php echo base_url();?>admin-assets/dist/js/waves.js"></script>

    <!--Menu sidebar -->

    <script src="<?php echo base_url();?>admin-assets/dist/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->

    <script src="<?php echo base_url();?>admin-assets/dist/js/custom.min.js"></script>

    <!-- this page js -->

    <script src="<?php echo base_url();?>admin-assets/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>

    <script src="<?php echo base_url();?>admin-assets/assets/extra-libs/multicheck/jquery.multicheck.js"></script>

    <script src="<?php echo base_url();?>admin-assets/assets/extra-libs/DataTables/datatables.min.js"></script>

    <script>

        /****************************************

         *       Basic Table                   *

         ****************************************/

        $('#zero_config').DataTable();
        
        $(document).ready(function(){
  $("#filterhorotype").click(function(){
      var horotype = $("#filterhorotype").val();
  if(horotype=="daily"){
          $(".dailydata").css("display", "block");
          $(".weeklydata").css("display", "none");
          $(".monthlydata").css("display", "none");
          $(".yearlydata").css("display", "none");
          $("#headingdata").text('Daily');
      } else if(horotype == "weekly"){
          $(".weeklydata").css("display", "block");
          $(".dailydata").css("display", "none");
          $(".monthlydata").css("display", "none");
          $(".yearlydata").css("display", "none");
          $("#headingdata").text('Weekly');
      } else if(horotype == "monthly"){
          $(".monthlydata").css("display", "block");
          $(".weeklydata").css("display", "none");
          $(".dailydata").css("display", "none");
          $(".yearlydata").css("display", "none");
          $("#headingdata").text('Monthly');
      } else if(horotype == "yearly"){
          $(".yearlydata").css("display", "block");
          $(".weeklydata").css("display", "none");
          $(".monthlydata").css("display", "none");
          $(".dailydata").css("display", "none");
          $("#headingdata").text('Yearly');
      }
});
});

    </script>

</body>







</html>