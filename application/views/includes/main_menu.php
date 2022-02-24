    <div class="container">
        <div class="header_menu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse header_nav_menu" id="bs-example-navbar-collapse-1">
                    
                    <?php 
                    if ( ! isset( $active_menu ) ){
                        $active_menu = '1';
                    }
                    ?>

                    <ul class="nav navbar-nav">
                        
                        <li  <?php echo ( 1 == $active_menu ) ? 'class="active"' : '' ?> >
                            <a href="<?php echo site_url('user_wallet/index'); ?>">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- dashboard_menu -->
    </div>