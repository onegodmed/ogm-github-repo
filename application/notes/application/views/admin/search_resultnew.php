    <!-- ====================== Start Job Detail 2 ================ -->
    <section class="page-container">
      <div class="container custom-container" >
        <div class="row"><!-- row -->
            <div class="other-buttons-sec">
                <ul>
                    <li>
                        <form  target="_blank" id="mail_form" action="<?=base_url('admin/bulk_email');?>" method="post">
                            <input type="hidden" name="QUERY_STRING" value="<?php echo (!empty($_SERVER['QUERY_STRING']))?$_SERVER['QUERY_STRING']:1; ?>">
                            <button type="submit" class="btn btn-info btn-lg bulk_em" id="mail_id" ><i class="fa fa-paper-plane"></i> Send Bulk Email</button>
                        </form>
                </li>
                <li>
                <form  target="_blank" id="mail_form" action="<?=base_url('admin/bulk_sms');?>" method="post">
                    <input type="hidden" name="QUERY_STRING" value="<?php echo (!empty($_SERVER['QUERY_STRING']))?$_SERVER['QUERY_STRING']:1; ?>">
                    <button type="submit" class="btn btn-info btn-lg bulk_em" id="mail_id" ><i class="fa fa-paper-plane"></i> Send Bulk SMS</button>
                </form>
                </li>
                <li>
                 <a class="btn btn-info btn-lg bulk_em" href="<?php echo base_url('admin/createExcel?'.$_SERVER['QUERY_STRING']);?>">Export Data</a>
                </li>
                    <li>
                        <a class="btn btn-info btn-lg bulk_em" href="<?php echo base_url('admin/summary?'.$_SERVER['QUERY_STRING']);?>" target="_blank">Summary</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
          <!-- Start Sidebar -->
          <!-- form opne in inner header.php -->
          <div class="col-md-2 col-sm-3 col-xs-4 padd-less-col custom-col-size" id="filter-sidbar-mob" role="dialog">

             <!-- <form  target="_blank" id="mail_form" action="<?=base_url('admin/bulk_email');?>" method="post">                
                <input type="hidden" name="QUERY_STRING" value="<?php echo $_SERVER['QUERY_STRING']; ?>">  
                <button type="submit" class="btn btn-info btn-lg bulk_em" id="mail_id" ><i class="fa fa-paper-plane"></i> Send Bulk Email</button>                   
            </form>


            <form  target="_blank" id="mail_form" action="<?=base_url('admin/bulk_sms');?>" method="post">
                <input type="hidden" name="QUERY_STRING" value="<?php echo $_SERVER['QUERY_STRING']; ?>">
                <button type="submit" class="btn btn-info btn-lg bulk_em" id="mail_id" ><i class="fa fa-paper-plane"></i> Send Bulk SMS</button>
            </form>
             <a class="btn btn-info btn-lg" href="<?php echo base_url('admin/createExcel?'.$_SERVER['QUERY_STRING']);?>">Export Data</a>  -->






            <form autocomplete="false" action="<?php echo base_url('admin/developer_dashboard'); ?>" method="get" id="search_sidebar_form" class="desktop-filter-sidebar">
              <input type="hidden" value="" id="sort_by" name="sort_by">
              <div class="filter-sidebar" id="sidebar_panel">

               
<?php  // include('excel_file.php'); ?>
               <?php 
              include('sidebar_linew.php');?>
                        </div>
                    </form>
                </div>
                <!-- end Sidebar -->
                <!-- Start Job List -->
                <div class="col-md-10 col-sm-9 col-xs-8  custom-col-size">

                   <div class="table-responsive custom_table_res">
                         <table class="table table-bordered admin_table " id="stepTable1">
                            <thead>
                                   <tr>
                                        <th>No</th>                        
                                      <th>Action</th>
                                      <th>Comment</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Full Time Amount</th>
                                         <th>Part Time Amount</th>
                                        <th>Contract Amount</th>
                                         <th>Last Login </th>
                                        <th>Last Update </th>
                                        
                                         <th>Country</th> 
                                         <th>Download Resume </th>
                                        
                                          <th>Branded Resume </th>
                                     
                                         <th>User Source</th>
                                       

                                      <?php if($this->input->get('step')=='incomplete'){ echo '<th>intro Video uploaded</th>';} ?>
                                        <?php if($this->input->get('step')=='scheduled'){ echo '<th> Interview Timings</th>';} ?>
                                         
                                           
                                         
                                        
                                        <!--  <th>Profile Link</th>   -->     
                                           
                                        
                                      </tr>
                                  
                            </thead>                
                       </table>
                   </div>
                    
                    <?php 
                
                      //  $this->load->view('admin/ajax-search-result');
                    

                    ?>
                    
                 
                </div>
                <!-- End Job List -->
                <div style="clear: both;"></div>
                
            </div>
        </div>
    </section>
    <div class="last_q"></div>


<!--branded resume Modal -->

  <div class="modal fade" id="brandedResumeModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Update Price</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body">
         <form target="_blank" action="<?=base_url('client/getDeveloperProfileDetail');?>" method="post">
            <input type="hidden" name="filterSkills" value="<?php echo @implode(',',$this->input->get('skill')) ?>">
            <input type="hidden" name="developer_id">

            <div class="form-group">
               <label>
                  Full Time
                </label>
                <input type="text" name="full_time" class="form-control">
            </div>

            <div class="form-group">
                <label>
                 Part Time
                </label>
                <input type="text" name="part_time" class="form-control">
            </div>
             
            <div class="form-group">
               <label>
                 Contract Base 
                </label>
                <input type="text" name="contract_time" class="form-control">
            </div>

            <div>
                <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm ">
            </div>            
         </form>
        </div>
      </div>      
    </div>
  </div>


<script>
    function showModal(id,fullamt,partamt,contractamt) {
        $('#brandedResumeModal').modal('show');
        $('input[name=developer_id]').val(id);
        $('input[name=part_time]').val(partamt);
        $('input[name=full_time]').val(fullamt);
        $('input[name=contract_time]').val(contractamt);

    }
</script>


<script>
            $(document).ready(function () {
                    $('.language_checkbox').on('click', function() {
                        var tool_id = $(this).attr('data-id');
                        if ($(this).is(':checked')) {
                            $('.language_level_'+tool_id).show();
                            $('.language_level_'+tool_id).find('input[type="radio"]').removeAttr('disabled');
                        } else {
                            $('.language_level_'+tool_id).hide();
                            $('.language_level_'+tool_id).find('input[type="radio"]').attr('disabled', 'disabled');
                        }
                    });
                    var formdata = $("#search_sidebar_form :input").serialize();
                   //  $("#search_sidebar_form").filter(function () {return $.trim(this.value);}).serialize();
                   //console.log(formdata);
                    var dataTable =  $('#stepTable1').DataTable( {
                    processing:true,
                    serverSide: true,
                    
                    scrollX: true,
                    scrollCollapse: true,                  
                    columnDefs: [
                        { width: 300, targets: 2 }
                    ],
                    fixedColumns: true,

                     "ajax": {
                        "url": "<?php echo base_url('admin/ajax?'); ?>"+formdata,
                        "type": "get",
                     },
                    
                    "sDom": 'RilfrtpB',
                    "ordering": false,
                    "oLanguage": {
                    "sLengthMenu": "Show _MENU_ "
                    },

                    /*"autoWidth": false,
                    "sScrollY": ($(window).height()),
                    "sScrollX": "100%", */
                    "fnDrawCallback": function(oSettings) {
                        if ($('#example tr').length < 11) {
                            $('.dataTables_paginate').hide();
                        }
                    }

                } );


                    $('.custom_table_res:input').on('keyup change', function(){                     
                      dataTable.search($(this).val()).draw();
                    })         

            });



        </script>


    <script>
    
     //loadPagination('<?php echo ($this->uri->segment('3'))? $this->uri->segment('3'):'0';?>');
     
     
        $('.available_from').datepicker({
            autoclose: true,
            startDate: '-0m',
            format: 'yyyy-mm-dd'
        }).on('changeDate', function(selected) {
            if (this.value != '') {
               // loadPagination(0);
            }
        });

        // filter list
        function filter(suggetion_for) {
            var keyword = $("#" + suggetion_for).val().toLowerCase();
            var keywordlength = $("#" + suggetion_for).val().length;
            var listId = $("#" + suggetion_for).parent().parent().next('div').find('ul').attr('id');
            var formID = $("#" + suggetion_for).closest('form').attr('id');
            //console.log(formID);
            var readmoreId = $("#" + suggetion_for).parent().parent().parent().find('p').attr('id');
            origOrder = $('#' + listId).children();
            for (var i = 0; i < origOrder.length; i++) {

                var input = origOrder[i].getElementsByTagName("input")[0];
                var txt = input.getAttribute('data-txt');
                //console.log(origOrder[i].childNodes[2].className );
                if (txt.substring(0, keyword.length).toLowerCase() !== keyword && keyword.trim() !== "") {
                    $(origOrder[i]).hide();
                } else {
                    $(origOrder[i]).show();
                    // script for highlight matching text
                    textL = txt.toLowerCase(),
                        index = textL.indexOf(keyword);
                    <!-- get skill,position etc  -->        
                    nodeID = origOrder[i].childNodes[3].id;
                    nodeCount = origOrder[i].childNodes[3].innerHTML.split(" ");
                    <!--Last element of array -->
                    LastSplitElement = nodeCount[nodeCount.length - 1];
                    if (listId == 'tools_list') {
                        var htmlR = txt.substr(0, index) + '<b>' + txt.substr(index, keywordlength) + '</b>' + txt.substr(index + keywordlength);
                    } else {
                        var htmlR = txt.substr(0, index) + '<b>' + txt.substr(index, keywordlength) + '</b>' + txt.substr(index + keywordlength) + ' ' + LastSplitElement;
                    }

                    $('#' + nodeID).html(htmlR);

                }

                //$('#'+readmoreId).hide();

            }

            if ($('#' + listId + " li:visible").length === 0) {
                $("#" + suggetion_for).parent().next('.error').html('No matching "<b>' + $("#" + suggetion_for).attr('data-filter') + '</b>" Found');
                $("#" + suggetion_for).addClass('err_inp');
                $('#' + readmoreId).hide();
                $('#' + formID + ' .btn_searchboxside').attr('disabled', true);
                return false;
            } else {
                if (origOrder.length === $('#' + listId + " li:visible").length) {
                    $('#' + readmoreId).show().text('Show Less');
                } else {
                    $('#' + readmoreId).hide();
                }
                $("#" + suggetion_for).parent().next('span').text('');
                $("#" + suggetion_for).removeClass('err_inp');

                $('#' + formID + ' .btn_searchboxside').attr('disabled', false);
                return true;
            }

        }

     $('.available_from').datepicker({
          autoclose: true,             
          format: 'yyyy-mm-dd',
          todayHighlight: true,
      }).on('changeDate', function (selected) {
            //loadPagination(0);           
                      });               
   /*Category*/
    $("#category_list input[type='checkbox']").click(function(){
        
        var list = $("#category_list");        
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
           var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {                    
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {

                        checked.appendChild(origOrder[i]);
                        origOrder[i].style.display='';
                        origOrder[i].getElementsByClassName("skill-drop-options")[0].style.display='';
                        origOrder[i].getElementsByTagName("select")[0].disabled = false;
                        origOrder[i].getElementsByTagName("select")[1].disabled = false;
                       
                    } else {
                        unchecked.appendChild(origOrder[i]);
                        origOrder[i].getElementsByClassName("skill-drop-options")[0].style.display='none';
                        origOrder[i].getElementsByTagName("select")[0].disabled = true;
                        origOrder[i].getElementsByTagName("select")[1].disabled = true;
                        origOrder[i].getElementsByTagName("select")[0].value = '';
                        origOrder[i].getElementsByTagName("select")[1].value = '';
                        
                    }
                        
                }               
                list.append(checked).append(unchecked);
            });
    });

    $(document).ready(function() {
     var list = $("#category_list"),
       origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                        origOrder[i].style.display='';
                        origOrder[i].classList.remove("hidden_position");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                    // nodeCount = origOrder[i].childNodes[3].innerHTML;                     
                    // var regExp = /\(([^)]+)\)/;
                    // var matches = regExp.exec(nodeCount);
                   
                }


                list.append(checked).append(unchecked);
           /* });*/
});
    

    


/*  
    
$( ".search_paramiter_checkbox" ).each(function() {
      if($(this).is(":checked")){
          $(this).removeClass('hidden_skills');
         console.log($(this).parent().parent());
          console.log($(this).closest('ul').attr('id'));
         
         $('#category_list').prepend($(this).parent().parent());

      }
});
*/



/*Position List*/
$("#position_list input").click(function(){
    
        var list = $("#position_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                    
                }
                        
                list.append(checked).append(unchecked);
            });
    });

    $(document).ready(function() {
     var list = $("#position_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                        origOrder[i].style.display='';
                        origOrder[i].classList.remove("hidden_position");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});

/*Hourly Rate List*/
$("#hourly_rate_list input").click(function(){
        var list = $("#hourly_rate_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
    });

    $( document ).ready(function() {
     var list = $("#hourly_rate_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});



 /*Job Type List*/
 $("#job_type_list input").click(function(){
        var list = $("#job_type_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#job_type_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});

 /*Timezone List*/
 $("#timezone_list input").click(function(){
        var list = $("#timezone_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#timezone_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                            checked.appendChild(origOrder[i]);
                            origOrder[i].style.display='';
                            origOrder[i].classList.remove("hidden_zone");
                        } else {
                            unchecked.appendChild(origOrder[i]);
                        }
                }
                list.append(checked).append(unchecked);
           /* });*/
});


/*Location List*/
 $("#location_list input").click(function(){
        var list = $("#location_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });
        
        $( document ).ready(function() {
         var list = $("#location_list"),
            origOrder = list.children();
            /*list.on("click", ":checkbox", function() {*/
                var i, checked = document.createDocumentFragment(),
                        unchecked = document.createDocumentFragment();
                    for (i = 0; i < origOrder.length; i++) {
                        if (origOrder[i].getElementsByTagName("input")[0].checked) {
                            checked.appendChild(origOrder[i]);
                            origOrder[i].style.display='';
                            origOrder[i].classList.remove("hidden_location");
                        } else {
                            unchecked.appendChild(origOrder[i]);
                        }
                    }
                    list.append(checked).append(unchecked);
               /* });*/
         });



/*Travel List*/
 $("#willing_to_traval input").click(function(){
        var list = $("#willing_to_traval"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#willing_to_traval"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});

 /*Travel List*/
 $("#tools_list input").click(function(){
        var list = $("#tools_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                        origOrder[i].style.display='';
                        origOrder[i].classList.remove("hidden_tools");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#tools_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                        origOrder[i].style.display='';
                        origOrder[i].classList.remove("hidden_tools");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
     });
     
     
    
    
    
    $('.filter-modal-btn').click(function() {       
        $('#filter-sidbar-mob').prop('class', 'modal fade filter-modal').addClass('left' );
        $('#search_sidebar_form').show();
        //$('.filter-modal').modal('show');
    });

</script>
<script>
// job type checkbox onchange
$('.search_paramiter_checkbox2').on('change',function(){
    if ($(this).is(':checked')) {
        $(this).parentsUntil('ul').find('.availability-group').show();  
    }else{
        $(this).parentsUntil('ul').find('.availability-group,.available-from-group').hide();
        
         $(this).parentsUntil('ul').find('.available_from').val('');      
         $(this).parentsUntil('ul').find('input[type="radio"]').prop('checked',false);
         
        // loadPagination(0);
         
    }
})


$(".availability-rd").change(function() {       
     if($(this).val()=='from'){
         $(this).parentsUntil('ul').find('.available-from-group').show();
         $(this).parentsUntil('ul').find('.available_from').val('');         
     }else{
        // loadPagination(0);
         $(this).parentsUntil('ul').find('.available-from-group').hide();   
     }
});

// onchange sort by
$("#sort_select").change(function() {       
      $('#sort_by').val( this.value);
     // setTimeout(function(){ loadPagination(0); }, 500);

      
});


 


</script>
        
    </script>