<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Your Dev Solutions</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="<?= base_url('admin_assets/css/normalize.css'); ?>">

       <link rel="stylesheet" href="<?= base_url('admin_assets/css/bootstrap.min.css'); ?>">
       <link rel="stylesheet" type="text/css" href="https://myremotedevelopers.com/assets/css/responsiveness.css"> 

        <link rel="stylesheet" href="<?= base_url('admin_assets/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin_assets/css/themify-icons.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin_assets/css/flag-icon.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin_assets/css/cs-skin-elastic.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin_assets/css/dataTables.bootstrap.min.css') ?>">
        <!-- <link rel="stylesheet" href="admin_assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="<?= base_url('admin_assets/scss/style.css'); ?>">
        <link href="<?= base_url('admin_assets/css/lib/vector-map/jqvmap.min.css'); ?>" rel="stylesheet">
        
        <?php //  if (strcasecmp($this->uri->segment(2), 'edit_profile') != 0) {?>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>

        <script src="https://yourdevsolutions.com/your-dev/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        
        <!-- Validate min -->       
        <script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?= base_url() ?>assets/js/additional-methods.js"></script>
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.min.css" type="text/css">
<script src="<?= base_url() ?>assets/js/select2.min.js"></script>
        <?php // }?>

<link rel="stylesheet" type="text/css" href="https://myremotedevelopers.com/assets/css/style2.css">
        
  <link rel="stylesheet" type="text/css" href="https://myremotedevelopers.com/assets/css/style.css">      
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin_style.css')?>">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Data table -->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

<script src="<?= base_url() ?>assets/js/script.js"></script>

    </head>
    <body>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel" >

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                      
                        <?php if($this->uri->segment(2) =='edit_profile' || $this->uri->segment(2) =='edit_client'){?>
                        <div class="user-area dropdown float-left">
                            <a href="#" class="dropdown-toggle btn btn-primary btn-sm " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>  Menu <i class="fa fa-chevron-down "></i>
                            </a>
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?= base_url('admin/position_list') ?>"><i class="fa fa-black-tie"></i>  Positions</a>
                                <a class="nav-link" href="<?= base_url('admin/category_list') ?>"><i class="fa fa-list-alt"></i>  Categories</a>
                                <a class="nav-link" href="<?= base_url('admin/skills_list') ?>"><i class="fa fa-database"></i>  Skills</a>
                                <a class="nav-link" href="<?= base_url('admin/tools_list') ?>"><i class="fa fa-cubes"></i>  Tools</a>
                                <a class="nav-link" href="<?= base_url('admin/newslatters') ?>"><i class="fa fa-cubes"></i>  Newslatter</a>
                                <a class="nav-link" href="<?= base_url('admin/users_list/developer') ?>"><i class="fa fa-user"></i>  Developers</a>
                                <a class="nav-link" href="<?= base_url('admin/users_list/client') ?>"><i class="fa fa-user"></i> Clients</a>
                            </div>
                        </div>
                        <?php if($this->uri->segment(2) =='edit_client'){?>
                            <a href="<?= base_url('admin/users_list/client') ?>" class="btn btn-primary btn-sm " style="margin-left: 25px;">
                                <i class="fa fa-arrow-left"></i>  Back To Client List 
                         </a>
                        <?php }else{?>
                        <a href="<?= base_url('admin/users_list/developer') ?>" class="btn btn-primary btn-sm " style="margin-left: 25px;">
                                <i class="fa fa-arrow-left"></i>  Back To Developer List 
                         </a>
                        <?php } }?>
                    </div>

                    <div class="col-sm-5">
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
        <div class="row">
            <div class="alert-group">  
                <div class="alert alert-danger alert-dismissable animated fadeInDown flash">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>
                </div>
            </div></div>
<?php } if (validation_errors() != '') { ?>
        <div class="row">
            <div class="alert-group">  
                <div class="alert alert-danger alert-dismissable animated fadeInDown">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Error!</strong> <?php print_r(validation_errors()); ?>
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
    
    