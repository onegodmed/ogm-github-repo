<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Horoscope</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris/morris.css')?>">
    <link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/plugins/datatables/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <style>
        #topnav .topbar-main .logo {
    font-size: 22px;
    font-weight: 900;
}
#topnav .navigation-menu {
    list-style: none;
    margin: auto;
    padding: 0;
    display: table;
}
.zzz a.btn.btn-danger {
    padding: 15px !important;
    margin: 10px;
}
    </style>
</head>

<body>
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">
                <!-- Logo container-->
                <div class="logo">
                    <a href="index" class="logo"> Horoscope</a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras topbar-custom">
                    <ul class="float-right list-unstyled mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                               <!--  <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="<?php echo base_url('assets/images/users/user-4.jpg')?>" alt="user" class="rounded-circle"></a> -->
                                <div class="">
                                    <!-- item--><!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a> <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a> <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a> <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div> --><a class="text-danger" href="<?php echo base_url('admin/logout')?>"><i class="mdi mdi-power text-danger"></i> Logout</a></div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link" id="mobileToggle">
                                <div class="lines"><span></span> <span></span> <span></span></div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->
                <div class="clearfix"></div>
            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to Horoscope Dashboard <?php echo $this->session->userdata('user_type').'-'.$this->session->userdata('name')?></li>
                        </ol>
                        <!-- <div class="state-information">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        
                        <li class="has-submenu"><a href="index"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                        <?php  if($this->session->userdata('user_type') == 'admin'){?>
                        <li class="has-submenu"><a href="#"><i class="ti-email"></i>Mamber</a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url('admin/add_mamber')?>">Add Mamber</a></li>
                                <li><a href="<?php echo base_url('admin/mamber_list')?>">Mamber List</a></li>
                               <!--  <li><a href="<?php echo base_url('admin/counsellor_report_list')?>">Counseller List</a></li> -->
                            </ul>
                        </li>
                         <li class="has-submenu"><a href="#"><i class="ti-email"></i>Categories</a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url('admin/super_category_list')?>">Super Category</a></li>
                                <li><a href="<?php echo base_url('admin/category_list')?>">Category</a></li>
                                <li><a href="<?php echo base_url('admin/sub_category_list')?>">Sub-Category</a></li>
                               <!--  <li><a href="<?php echo base_url('admin/counsellor_report_list')?>">Counseller List</a></li> -->
                            </ul>
                        </li>
                        
                        
                        <?php }?>
                        
                        
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end navigation -->
            </div>
            <!-- end container-fluid -->
        </div>
     
        <!-- end navbar-custom -->
    </header>

    <!-- <?php if($this->session->flashdata('success')){?> -->
<script type="text/javascript">
    $(document).ready(function () {
    $("#consolPopup").fancybox({
        'overlayShow': true
    }).trigger('click');
});
</script>
<!-- <?php }?> -->                   
<div id="consolPopup">
        <h1>For Your Information</h1>

        <p><?php echo $this->session->flashdata('success')?></p>
</div>

    <!-- End Navigation Bar-->