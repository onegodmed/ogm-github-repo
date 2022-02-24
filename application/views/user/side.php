<style>
    ul.navbar-nav.float-right a.btn.btn-success {
    position: relative;
    top: 15px;
}
.sidebar-nav ul .sidebar-item.selected>.sidebar-link {
    background: #ff871f;
    opacity: 1;
}

</style>

<aside class="left-sidebar" data-sidebarbg="skin5">



            <!-- Sidebar scroll-->



            <div class="scroll-sidebar">



                <!-- Sidebar navigation-->



                <nav class="sidebar-nav">



                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'Astrologer'){echo base_url('partner'); }else if($this->session->userdata('user_type') == 'User'){echo base_url('user');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('admin');}else{echo base_url('');}  ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</a></li>
                     
<!--
                         <?php if($this->session->userdata('user_type') != 'admin'){?>

                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>user/account" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">My Profile</span></a></li>

                          <?php }?>
                    
    -->                
                   <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'Astrologer'){echo base_url('partner/account'); }else if($this->session->userdata('user_type') == 'User'){echo base_url('user/account');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('admin/account');}else{echo base_url('');}  ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">My Profile</span></a></li>
                  
                    

                          <?php if($this->session->userdata('user_type') == 'admin'){?> 

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/users_list'); ?>" aria-expanded="false"><i class="mdi mdi-codepen"></i><span class="hide-menu">Customer Management</span></a></li>

                         

                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/astrologer_list'); ?>" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Vendor Management</span></a></li>    



                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/booking'); ?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Booking Management</span></a></li>
                          
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/payment'); ?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Payment History</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/blog'); ?>" aria-expanded="false"><i class="mdi mdi-blogger"></i><span class="hide-menu">Articles Management</span></a></li>  
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/promotion'); ?>" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Promotion</span></a></li>  
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/reviews'); ?>" aria-expanded="false"><i class="mdi mdi-eye"></i><span class="hide-menu">Reviews Management</span></a></li>  

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/coupon_list'); ?>" aria-expanded="false"><i class="mdi mdi-book-minus"></i><span class="hide-menu">Coupon Code</span></a></li>  

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/testimonial'); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Testimonial Management</span></a></li>  


                           <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/kundali_booking'); ?>" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span class="hide-menu">Kundli Booking</span></a></li>                        

                       

                        <!--  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>user/Card" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Card</span></a></li>

                          -->
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/package_list" aria-expanded="false"><i class="mdi mdi-credit-card"></i><span class="hide-menu">Wallet Package</span></a></li>
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Add Pages </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('user/super_category_list/1');?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Vedic OPD </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('user/super_category_list/2');?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Vedic Sutra Courses </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('user/super_category_list/3'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Vedic Astrology </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('user/super_category_list/4'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">  Live Predictions </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('user/super_category_list/5'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Vedic Journal </span></a></li>
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Daily Horoscope</span></a>
                         <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('user/rashi');?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Rashi</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('user/horoscope');?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Horoscope</span></a></li>
                            </ul>
                         </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/match_data" aria-expanded="false"><i class="mdi mdi-credit-card"></i><span class="hide-menu">Match Making Data</span></a></li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/free_kundali_data" aria-expanded="false"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Free Kundali Data</span></a></li>

                    <?php }?>

                    

                    <?php if($this->session->userdata('user_type') == 'User'){?>

                     

                        

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('user/booking');?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">My Booking</span></a></li>


            <!--
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('user/wallet_history');?>" aria-expanded="false"><i class="mdi mdi-credit-card"></i><span class="hide-menu">Wallet History</span></a></li>

                -->

    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'User'){echo base_url('user/wallet_history');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('user/wallet_history');}else{echo base_url('');}  ?>" aria-expanded="false"><i class="mdi mdi-credit-card"></i><span class="hide-menu">Wallet History</span></a></li>
    
    

        <!---     
             
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('user/user_downloads');?>" aria-expanded="false"><i class="mdi mdi-download"></i><span class="hide-menu">Download</span></a></li>


--->

  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('user/user_downloads');?>" aria-expanded="false"><i class="mdi mdi-download"></i><span class="hide-menu">Download</span></a></li>
                        <?php }?>

                      

                      <?php if($this->session->userdata('user_type') == 'Astrologer'){?>

                     

                        
            <!--
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/vendor_service_list" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">My Servicefsdffsd</span></a></li>
                -->


    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'Astrologer'){echo base_url('partner/vendor_service_list'); }else if($this->session->userdata('user_type') == 'User'){echo base_url('user/vendor_service_list');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('admin/vendor_service_list');}else{echo base_url('');}  ?>" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">My Service</span></a></li>


        <!--                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/my_booking" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">My Booking</span></a></li>
-->
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'Astrologer'){echo base_url('partner/my_booking'); }  else if($this->session->userdata('user_type') == 'User'){echo base_url('user/my_booking');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('admin/my_booking');}else{echo base_url(''); }  ?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">My Booking</span></a></li>
                               <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'Astrologer'){echo base_url('partner/chat_booking'); }else if($this->session->userdata('user_type') == 'User'){echo base_url('user/my_booking');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('admin/my_booking');}else{echo base_url('');}  ?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Live Chat</span></a></li>
        

<!--
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/my_earning'); ?>" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">My Earning</span></a></li>

--->
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->session->userdata('user_type') == 'Astrologer'){echo base_url('partner/my_earning'); }else if($this->session->userdata('user_type') == 'User'){echo base_url('user/my_earning');}else if($this->session->userdata('user_type') == 'admin'){echo base_url('admin/my_earning');}else{echo base_url('');}  ?>" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">My Earning</span></a></li>

                   



                        <?php }?>

                        
                        <?php if($this->session->userdata('user_type') == 'Astrologer'){ ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>user/add-weeklytime" aria-expanded="false"><i class="fa fa-calendar fa-3"></i><span class="hide-menu">Weekly Availability</span></a></li>
                        <?php }?>

                        


                        

                        <?php if($this->session->userdata('user_type') == 'User'){ ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>user/my-astrologers" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">My Astrologers</span></a></li>
                        <?php }?>


<!-- 
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span></a></li>



                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>



                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>



                            <ul aria-expanded="false" class="collapse  first-level">



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>



                            </ul>



                        </li>



                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>



                            <ul aria-expanded="false" class="collapse  first-level">



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons </span></a></li>



                            </ul>



                        </li>



                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a></li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>



                            <ul aria-expanded="false" class="collapse  first-level">



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a></li>



                            </ul>



                        </li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
 -->


                            <ul aria-expanded="false" class="collapse  first-level">



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>



                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>



                            </ul>



                        </li>



                    </ul>



                </nav>



                <!-- End Sidebar navigation -->



            </div>



            <!-- End Sidebar scroll-->



        </aside>



        