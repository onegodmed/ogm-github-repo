
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta_section.php');  ?>
    <title>Apply Now <?php echo ( isset( $page_title ) ? ' :: ' . $page_title : '' )?> </title>
    <link rel="icon" href="<?php echo IMG_PATH. 'favicon.ico' ;?>">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'> -->
    <?php include('css_section.php');  ?>

</head>

<body>
    
<header class="header_main">

    <div class="container">

        <div class="header_top clearfix">

            <div class="pull-left topbar_logo">
                <div class="div_logo"> 
                    <a href="<?php echo site_url(); ?>">
                        <img class="img-responsive" src="<?php echo IMG_PATH .'logo.png';?>" 
                        width="80px">
                    </a>
                </div>
            </div><!-- topbar_logo -->

            <div class="pull-right topbar_id_search">
                
                <div class="header_seacrh_box clr_blue"><img class="img-responsive" src="<?php echo IMG_PATH .'id_logo.png';?>" width="30px"> Unique Id </div>

                <div class="search_field">

                    <form action="<?php echo site_url('home/search'); ?>" method="post" class="navbar-form" role="search" id="frm_search">

                        <div class="input-group">
                            
                            <input type="text" name="id"  class="form-control"  placeholder="Unique Id"/>

                            <div class="input-group-btn" title="Search">

                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

                            </div>

                        </div>

                    </form>

                </div><!-- search_field -->

                <div class="header_seacrh_box is_logout" title="Logout">

                    <?php if( !isset($is_logout_show) ) : ?>

                        <a href="<?php echo site_url('home/logout'); ?>">
                        <span class="glyphicon glyphicon-log-out fa-lg"></span>
                        </a>

                    <?php endif; ?>

                </div>

            </div><!-- topbar_id_search -->


        </div><!-- header_top -->

    </div><!-- container -->

</header> <!-- header content -->