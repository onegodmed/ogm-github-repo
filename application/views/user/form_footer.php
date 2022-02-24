   <footer class="footer text-center">

               2019 all rights reserved @ onegodmed.com

            </footer>

        
        </div>

        
    </div>





    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>admin-assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>admin-assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>admin-assets/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/dist/js/pages/mask/mask.init.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/select2/dist/js/select2.min.js"></script>
    <!--<script src="<?php echo base_url(); ?>admin-assets/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>-->
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <!--<script src="<?php echo base_url(); ?>admin-assets/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>-->
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>admin-assets/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor1', {
            theme: 'snow'
        });
        
        $(document).ready(function(){
  $("select#rashiType").change(function(){
      var rashitype = $("#rashiType  option:selected").val();
      if(rashitype=="Sunsign"){
          $("#Sunsign").css("display", "flex");
          $("#moonsign").css("display", "none");
      } else{
          $("#moonsign").css("display", "flex");
          $("#Sunsign").css("display", "none");
      }
  });
  $("select#horotype").change(function(){
      var horotype = $("#horotype  option:selected").val();
      if(horotype=="daily"){
          $("#chsdate").css("display", "flex");
          $("#chsweek").css("display", "none");
          $("#chsmonth").css("display", "none");
          $("#chsyear").css("display", "none");
      } else if(horotype == "weekly"){
          $("#chsweek").css("display", "flex");
          $("#chsdate").css("display", "none");
          $("#chsmonth").css("display", "none");
          $("#chsyear").css("display", "none");
      } else if(horotype == "monthly"){
          $("#chsmonth").css("display", "flex");
          $("#chsdate").css("display", "none");
          $("#chsweek").css("display", "none");
          $("#chsyear").css("display", "none");
      } else if(horotype == "yearly"){
          $("#chsyear").css("display", "flex");
          $("#chsdate").css("display", "none");
          $("#chsweek").css("display", "none");
          $("#chsmonth").css("display", "none");
      }
  });
});

    </script>
    
    
    
    <!-- <script src="<?php echo base_url(); ?>admin-assets/editor/editor.js"></script>
<script>
            $(document).ready(function() {
                $("#editor").Editor();
            });
</script>

<link href="<?php echo base_url(); ?>admin-assets/editor/editor.css" type="text/css" rel="stylesheet"/> -->


</body>

</html>