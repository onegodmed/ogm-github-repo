
    <!-- jQuery -->
<script src="<?php echo COMPONENT_PATH. 'jquery' . DS . 'dist' . DS. 'jquery.min.js' ;?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo COMPONENT_PATH. 'bootstrap' . DS . 'dist' . DS. 'js'. DS . 'bootstrap.min.js' ;?>"></script>
<script src="<?php echo COMPONENT_PATH. 'bootstrap' . DS . 'dist' . DS. 'js'. DS . 'custom-file-input.js' ;?>"></script>
<script src="<?php echo COMPONENT_PATH. 'bootstrap' . DS . 'dist' . DS. 'js'. DS . 'bootstrap-filestyle.min.js' ;?>"></script>


<script src="<?php echo LIB_PATH.  'jquery-validation1140' . DS . 'jquery.validate.min.js' ;?>"></script>
<script src="<?php echo LIB_PATH.  'jquery-validation1140' . DS . 'additional-methods.min.js' ;?>"></script>


<!-- Notification JS -->
<link href="<?php echo LIB_PATH.  'bootbarnotify' . DS . 'bootbar.css' ;?>" rel="stylesheet" type="text/css" />
<script src="<?php echo LIB_PATH.  'bootbarnotify' . DS . 'bootbar.js' ;?>"></script>

<!-- Date Picker JS -->
<link href="<?php echo LIB_PATH.  'bootstrap-datepicker151' . DS . 'bootstrap-datepicker.css' ;?>" rel="stylesheet" type="text/css" />
<script src="<?php echo LIB_PATH.  'bootstrap-datepicker151' . DS . 'bootstrap-datepicker.js' ;?>"></script>


<!-- Datatable JS -->
<link href="<?php echo COMPONENT_PATH. 'datatables' . DS . 'media' . DS . 'css' . DS . 'jquery.dataTables.min.css' ;?>" rel="stylesheet" type="text/css" />
<link href="<?php echo COMPONENT_PATH. 'datatables' . DS . 'media' . DS . 'css' . DS . 'jquery.dataTables_themeroller.css' ;?>" rel="stylesheet" type="text/css" />
<script src="<?php echo COMPONENT_PATH. 'datatables' . DS . 'media' . DS . 'js' . DS . 'jquery.dataTables.min.js' ;?>"></script>


<script src="<?php echo LIB_PATH.  'bootbox' . DS . 'bootbox.js' ;?>"></script>

<script src="<?php echo ASSETS_PATH. 'js' . DS . 'common_functions.js'; ?>"></script>
<script src="<?php echo LIB_PATH. 'ajaxfileupload' . DS . 'jquery.form.js'; ?>"></script>

<script>

    $(document).ready(function(){


        <?php if($this->session->flashdata('success')){ ?>
            var msg_type    = 'success';
            var msg         = '<?php echo $this->session->flashdata('success'); ?>';
        <?php } ?>

        <?php if($this->session->flashdata('info')){ ?>
            var msg_type    = 'info';
            var msg         = '<?php echo $this->session->flashdata('info'); ?>';
        <?php } ?>


        <?php if($this->session->flashdata('error')){ ?>
            var msg_type    = 'danger';
            var msg         = '<?php echo $this->session->flashdata('error'); ?>';
        <?php } ?>


        <?php if($this->session->flashdata('warning')){ ?>
            var msg_type    = 'warning';
            var msg         = '<?php echo $this->session->flashdata('warning'); ?>';
        <?php } ?>

        if(typeof msg_type != 'undefined' ){
            getNotificationBar( msg_type, msg );
        }


        $('#search').change(function(){

            $('#frm_search').submit();
        });

   
       $(".tbtn").click(function() {
            $('.themeControll').toggleClass('active')
        });


        
        $(document).on("click",".toggle_notes",function(){
            
            $("#collapseTwo").collapse("toggle");    
            
        });


        $(document).on("click",".toggle_pincode_search",function(){

            $("#collapseThree").collapse("toggle");    
            
        });

        $(document).on("click",".toggle_important_link",function(){

            $("#collapseFive").collapse("toggle");
           
        });

         $(document).on("click",".toggle_my_imp_link",function(){

            $("#collapseSix").collapse("toggle");    
            
        });
        

    });
</script>