<script src="<?= base_url() ?>assets/js/readmore.min.js"></script>
<?php
//$this->load->model('User_model', 'User');
?>
    <!-- ====================== Start Job Detail 2 ================ -->
    <section>
      <div class="container">
        <div class="row"><!-- row -->
          <div class="list-filter-sec">
            <div class="col-md-2 col-sm-3 col-xs-3 filtr-fullcols">
              <div class="filter-option-sec">
                <p class="filter-desk"><i class="fa fa-filter"></i> Refined By</p>
                <p class="filter-mob"><a href="#" type="button" data-toggle="modal" class="filter-modal-btn" data-direction='left' data-target="#filter-sidbar-mob"><i class="fa fa-filter"></i> Filter</a></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 filtr-fullcols">
              <div class="filter-result-opt">
                <p><strong class="offset_result"><?=@$result_count;?></strong></p>
              </div>
            </div>
            <div class="col-md-6 col-sm-5 col-xs-5 table-col-rightpadd">
              <div class="sortby-sec">
                <div class="fl-right">
                  <div class="search-wide">
                      <p><strong>Sort By</strong></p>
                  </div>
                  <div class="search-wide full form-group">
                    <select class="wide1 form-control" id="sort_select" name="sort_by">
                    <option value="recommend" <?=( $this->input->get('sort_by')=='recommend') ? "selected" : ''?>>Most Recommended</option>
                      <option value="recent" <?=( $this->input->get('sort_by')=='recent') ? "selected" : ''?>>Most Recent</option>
                      <option value="popular" <?=( $this->input->get('sort_by')=='popular') ? "selected" : ''?>>Most Popular</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Sidebar -->
          <!-- form opne in inner header.php -->
          <div class="col-md-2 col-sm-3 col-xs-4 padd-less-col custom-col-size" id="filter-sidbar-mob" role="dialog">
            <form action="<?php echo base_url('client/search_result'); ?>" method="get" id="search_sidebar_form" class="desktop-filter-sidebar">
              <input type="hidden" value="" id="sort_by" name="sort_by">
              <div class="filter-sidebar" id="sidebar_panel">
               <?php include('sidebar_li.php');?>
                        </div>
                    </form>
                </div>
                <!-- end Sidebar -->
                <!-- Start Job List -->
                <div class="col-md-10 col-sm-9 col-xs-8  custom-col-size">
                    <div class="developer-listing">
                    
                    <?php 
                
                        $this->load->view('admin/ajax-search-result');
                    

                    ?>
                    
                    </div>
                </div>
                <!-- End Job List -->
                <div style="clear: both;"></div>
                
            </div>
        </div>
    </section>
    <div class="last_q"></div>

    <!--    COMMENT MODEL BOX FOR ADMIN PANEL   -->
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                   Add Comment
                </h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" class="comment-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <textarea name="comment" class="form-control"></textarea>
                            <input type="hidden" name="uid" value="" id="comment_UID">
                            <input type="hidden" name="session_uid" id="session_UID" value="">

                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--    END COMMENT MODEL BOX FOR ADMIN PANEL   -->

    <script>
    
     //loadPagination('<?php echo ($this->uri->segment('3'))? $this->uri->segment('3'):'0';?>');
     
     
        $('.available_from').datepicker({
            autoclose: true,
            startDate: '-0m',
            format: 'yyyy-mm-dd'
        }).on('changeDate', function(selected) {
            if (this.value != '') {
                loadPagination(0);
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

        // Detect pagination click
        $('#pagination').on('click', 'a', function(e) {
            e.preventDefault();
            var pageno = $(this).attr('data-ci-pagination-page');
            loadPagination(pageno);
        });

        // form submit 
        $('#search_sidebar_form').on('submit', function(e) {
            // FOR - ONFORM SUBMIT CHECKBOX  SHOULD BE Checked
            e.preventDefault();
            var elements = $('#' + $(this).attr('id') + ' input[type="text"]');

            for (var k = 0; k < elements.length; k++) {
                if (elements[k].value !== '') {
                    var inputID = elements[k].getAttribute('id');
                    var listId = $("#" + inputID).parent().parent().next('div').find('ul').attr('id');
                    origOrder = $('#' + listId).children();
                    for (var i = 0; i < origOrder.length; i++) {

                        var input = origOrder[i].getElementsByTagName("input")[0];
                        var txt = input.getAttribute('data-txt');

                        if (txt.substring(0, elements[k].value.length).toLowerCase() === elements[k].value.toLowerCase() && elements[k].value.trim() !== "") {
                            input.checked = true;

                            loadPagination(0, $(this).attr('id'));
                           
                            $('#' + $(this).attr('id') + ' input[type="text"]').val('');
                            break;
                        }

                    }

                }

            }

        });

       

        // script to hide header in admin panel at searching
        $(document).ready(function() {
            if (window.location.href.indexOf("developer_dashboard") > 0) {
                $('.inner-header-sec,.small_footer').hide();
                $('.list-filter-sec').hide();
                 $('.zsiq_floatmain').hide();
                
                

            }
        })

        // admin panel comment script
        function comment(th) {
            $('#comment_UID').val($(th).attr('data-uid'));
            $('#session_UID').val($(th).attr('data-sid'));
            $('.comment-form')[0].reset();
            $('#commentModal').modal('show');
        }

        $('.comment-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?=base_url('admin/comment_add')?>',
                type: 'post',
                data: $(this).serialize(),
                success: function(response) {

                    $('#commentModal').modal('hide');
                }
            });

        });
        
        
    </script>