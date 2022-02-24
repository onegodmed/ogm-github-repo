<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Remote Developers</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
       
       <link rel="stylesheet" href="https://myremotedevelopers.com/admin_assets/css/bootstrap.min.css"> 


        <link rel="stylesheet" href="<?= base_url('assets/css/admin_custom_style.css'); ?>"> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('admin_assets/css/font-awesome.min.css'); ?>">
       
        <link rel="stylesheet" href="<?= base_url('admin_assets/css/dataTables.bootstrap.min.css') ?>">
        <!-- <link rel="stylesheet" href="admin_assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="<?= base_url('admin_assets/scss/style.css'); ?>">
        <!--<link href="<?= base_url('admin_assets/css/lib/vector-map/jqvmap.min.css'); ?>" rel="stylesheet">-->
        
        <?php //  if (strcasecmp($this->uri->segment(2), 'edit_profile') != 0) {?>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.min.css" type="text/css">
<script src="<?= base_url() ?>assets/js/select2.min.js"></script> 
        <?php // }?>


        
<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin_style.css')?>"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script><!-- 
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


    </head>	 
        <script>
		//GLOBAL VARIABLE
	   var baseurl = '<?php echo base_url();?>';
	
        </script>
    <body>


<!-- <script src="<?= base_url() ?>assets/js/script.js"></script> -->
        <!-- Left Panel -->
        <?php
//hide side bar

        if (!isset($hide_sidebar)) {
            ?>
            <aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">

                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url('admin/dashboard');?>"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="Online Notes"></a>
                        <a class="navbar-brand hidden" href="./"><img src="<?= base_url('admin_assets/images/logo2.png'); ?>" alt="Logo"></a>
                    </div>

                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#"> </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/board_list/') ?>"> <i class="menu-icon fa fa-user"></i>Board </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/course_list/') ?>"> <i class="menu-icon fa fa-user"></i> Course </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/class_list/') ?>"> <i class="menu-icon fa fa-user"></i> Class </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/subject_list/') ?>"> <i class="menu-icon fa fa-user"></i> Subject </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/chapter_list/') ?>"> <i class="menu-icon fa fa-user"></i> Chapter </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/package_list/') ?>"> <i class="menu-icon fa fa-user"></i> Package </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/user_list/') ?>"> <i class="menu-icon fa fa-user"></i> user Master </a>
                            </li>
                            
                            <!-- <li class="active">
                                <a href="<?= base_url('admin/add_subject/') ?>"> <i class="menu-icon fa fa-user"></i>Create Subject </a>
                            </li>

                            <li class="active">
                                <a href="<?= base_url('admin/Subject_list/') ?>"> <i class="menu-icon fa fa-user"></i>Subject List</a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/add_product/') ?>"> <i class="menu-icon fa fa-user"></i>Create Product </a>
                            </li>

                            <li class="active">
                                <a href="<?= base_url('admin/product_list/') ?>"> <i class="menu-icon fa fa-user"></i>Product List </a>
                            </li> -->
                            
                           <!--  <li class="active">
                                <a href="<?= base_url('admin/developer_dashboard') ?>"> <i class="menu-icon fa fa-user"></i>Developers </a>
                            </li>
                            
                            <li class="active">
                                <a href="<?= base_url('admin/users_list/client') ?>"> <i class="menu-icon fa fa-user"></i>Clients </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/projects') ?>"> <i class="menu-icon fa fa-user"></i>Projects </a>
                            </li> -->
                            <h3 class="menu-title">Settings</h3><!-- /.menu-title -->
<!--                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                                    <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                                    <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                                    <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                                    <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                                    <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                                    <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                                    <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                                    <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                                    <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                                    <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                                </ul>
                            </li>-->
							<!-- <li  class="active">
                                <a href="<?= base_url('admin/resume_parse') ?>"> <i class="menu-icon fa fa-black-tie"></i>Resume Parse </a>
                            </li>
							<li  class="active">
                                <a href="<?= base_url('admin/sovren_resume_parse') ?>"> <i class="menu-icon fa fa-black-tie"></i>Sovren Parse </a>
                            </li>
                            <li  class="active">
                                <a href="<?= base_url('admin/position_list') ?>"> <i class="menu-icon fa fa-black-tie"></i>Position </a>
                            </li> -->
                            <!-- <li  class="active">
                                <a href="<?= base_url('admin/category_list') ?>"> <i class="menu-icon fa fa-list-alt"></i>Category </a>
                            </li> -->
                            <!-- <li  class="active">
                                <a href="<?= base_url('admin/skills_list') ?>"> <i class="menu-icon fa fa-database"></i>Technologies </a>
                            </li>
                            <li  class="active">
                                <a href="<?= base_url('admin/tools_list') ?>"> <i class="menu-icon fa fa-cubes"></i>Tools </a>
                            </li>   -->                          
                           <!--  <li  class="active">
                                <a href="<?= base_url('admin/job_type') ?>"> <i class="menu-icon fa fa-briefcase"></i>Job Type Description </a>
                            </li> -->
                            <!-- <h3 class="menu-title">Extra</h3>
                            <li  class="active">
                                <a href="<?= base_url('admin/reported_problems') ?>"> <i class="menu-icon fa fa fa-exclamation-circle"></i>Reported problems </a>
                            </li>
							<li  class="active">
                                <a href="<?= base_url('admin/searched_data') ?>"> <i class="menu-icon fa fa fa-exclamation-circle"></i>Search Result </a>
                            </li>
                            <li  class="active">
                                <a href="<?= base_url('admin/newslatters') ?>"> <i class="menu-icon fa fa-envelope"></i>Newsletter </a>
                            </li> -->
                           <!--  <li>
                                <a href="<?= base_url('admin/bulk_email') ?>"> <i class="menu-icon fa fa-envelope-o" aria-hidden="true"></i>
                                    Send Email </a>
                            </li> -->
                            <!-- <h3 class="menu-title">Public</h3>
                           
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Users</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-user"></i><a href="<?= base_url('admin/users_list/developer') ?>">Developers</a></li>
                                    <li><i class="fa  fa-user-md"></i><a href="<?= base_url('admin/users_list/client') ?>">Clients</a></li>
                                </ul>
                            </li>-->
                  <!--                <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                                    <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                                    <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                                </ul>
                            </li>-->

                            <!-- /.menu-title -->

<!--                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                    <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                                    <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                                    <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <h3 class="menu-title">Extras</h3> /.menu-title 
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </aside><!-- /#left-panel -->
        <?php } ?>
        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel" >

            <!-- Header-->
            <header id="header" class="header">
              <div class="header-menu">
                <div class="container custom-container">
                  <div class="row">
                    <div class="col-md-7 col-sm-7">
                      
                        <?php if(!empty($hide_sidebar)){?>
                        <div class="user-area dropdown">
                            <a href="#" class="dropdown-toggle btn btn-primary btn-sm " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>  Menu <i class="fa fa-chevron-down "></i>
                            </a>
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?= base_url('admin/position_list') ?>"><i class="fa fa-black-tie"></i>  Positions</a>
                               <!--  <a class="nav-link" href="<?= base_url('admin/category_list') ?>"><i class="fa fa-list-alt"></i>  Categories</a> -->
                                <a class="nav-link" href="<?= base_url('admin/skills_list') ?>"><i class="fa fa-database"></i>  Skills</a>
                                <a class="nav-link" href="<?= base_url('admin/tools_list') ?>"><i class="fa fa-cubes"></i>  Tools</a>
                                <a class="nav-link" href="<?= base_url('admin/newslatters') ?>"><i class="fa fa-cubes"></i>  Newslatter</a>
                                <a class="nav-link" href="<?= base_url('admin/developer_dashboard') ?>"><i class="fa fa-user"></i>  Developers</a>
                                <a class="nav-link" href="<?= base_url('admin/users_list/client') ?>"><i class="fa fa-user"></i> Clients</a>
                            </div>
                        </div>
                        <?php if($this->uri->segment(2) =='edit_client'){?>
                            <a href="<?= base_url('admin/users_list/client') ?>" class="btn btn-primary btn-sm " style="margin-left: 25px;">
                                <i class="fa fa-arrow-left"></i>  Back To Client List 
                         </a>
                        <?php }else{?>
                        <a href="<?= base_url('admin/developer_dashboard') ?>" class="btn btn-primary btn-sm " style="margin-left: 25px;">
                                <i class="fa fa-arrow-left"></i>  Back To Developer List 
                         </a>
                        <?php } }?>
                    </div>

                    <div class="col-md-5 col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="<?= $this->session->userdata('image')?>" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <!--<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>-->

                                <!--<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>-->

                                <!--<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>-->

                                <a class="nav-link" href="<?= base_url('admin/logout') ?>"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="language" >
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-fr"></span>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-es"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-it"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
                  

                    
                </div>

            </header><!-- /header -->
            <!-- Header-->
          
<style>
        .alert-group{
            margin: 0 auto;
        }
    </style>
<?php if ($this->session->flashdata('success')) { ?>
        <div class="row">
            <div class="alert-group">  
                <div class="alert alert-success alert-dismissable animated fadeInDown flash">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Success!</strong> <?= $this->session->flashdata('success') ?>
                </div>
            </div></div>
<?php }
if ($this->session->flashdata('error')) {
?>  
      <div class="container">  
        <div class="row">
          <div class="alert-group">  
            <div class="alert alert-danger alert-dismissable animated fadeInDown flash">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>
            </div>
          </div>
        </div>
      </div>
<?php } ?>     

     <script type="text/javascript">
//        $(document).ready(function () {
//            $('.flash').delay(3000).fadeOut("slow", function () {});
//            $('.alert-danger').delay(6000).fadeOut("slow", function () {
//                
//            });
//        });


    </script> 
    
    