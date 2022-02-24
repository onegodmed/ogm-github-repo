<?php 

  $where = array('id' => $this->session->userdata('id'));

  $user_details = $this->admin->get_details('author',$where)

?>
<!DOCTYPE html>

<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Onegodmed Dashboard</title>

    <link href="<?php echo base_url(); ?>admin-assets/assets/libs/flot/css/float-chart.css" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/assets/libs/select2/dist/css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/assets/libs/jquery-minicolors/jquery.minicolors.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/assets/libs/quill/dist/quill.snow.css">
    <link href="<?php echo base_url(); ?>admin-assets/dist/css/style.min.css" rel="stylesheet">
    <style>
        .wallet_class{
            position: relative;
            top: 15px;
            padding-right: 20px;
            color:#fff;
        }
    </style>

</head>







<body>



  

    <div id="main-wrapper">



        <header class="topbar" data-navbarbg="skin5">

<div class="overlay-section2"></div>

            <nav class="navbar top-navbar navbar-expand-md navbar-dark">



                <div class="navbar-header" data-logobg="skin5">



                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>



                    <a class="navbar-brand" href="<?php echo base_url(); ?>">



                        <!-- Logo icon -->



                        <b class="logo-icon p-l-10">



                            <img src="<?php echo base_url(); ?>front-assets/images/header/logo.png" alt="homepage" class="light-logo" width="200"/>



                           



                        </b>



                        <!-- <span class="logo-text">



                             



                             <img src="<?php echo base_url(); ?>admin-assets/assets/images/logo-text.png" alt="homepage" class="light-logo" />



                            



                        </span> -->



                        <!-- Logo icon -->



                        <!-- <b class="logo-icon"> -->



                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->



                            <!-- Dark Logo icon -->



                            <!-- <img src="<?php echo base_url(); ?>admin-assets/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->



                            



                        <!-- </b> -->



                        <!--End Logo icon -->



                    </a>



                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>



                </div>



                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">



                    <ul class="navbar-nav float-left mr-auto">



                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>



                       

                        <!-- <li class="nav-item dropdown">



                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>



                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   



                            </a>



                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                                <a class="dropdown-item" href="#">Action</a>



                                <a class="dropdown-item" href="#">Another action</a>



                                <div class="dropdown-divider"></div>



                                <a class="dropdown-item" href="#">Something else here</a>



                            </div>



                        </li> -->



                       

                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>



                            <form class="app-search position-absolute">



                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>



                            </form>



                        </li>



                    </ul>



                    <ul class="navbar-nav float-right">

                     <?php if($this->session->userdata('user_type') == 'User'){?>
                     <div>
                                                     <h3 class="wallet_class">Wallet Balance <span style="color: #ff871f;">
                            <?php if ($this->session->userdata('countryCode') == 'IN') {
                                echo "Rs.".$this->session->userdata('wallet_balence');
                                } else {
                                   echo "USD $".$this->session->userdata('wallet_balence');
                                }?></span></h3>
                     </div>
                     <div>
                            <a href="<?php echo base_url('wallet');?>" class="btn btn-success">Recharge</a>
                        </div>
                        <?php }?>
                        <li class="nav-item dropdown">

                               

                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('admin-assets/assets/images/users/'.$user_details[0]->image); ?>" alt="user" class="rounded-circle" width="31"></a>



                            <div class="dropdown-menu dropdown-menu-right user-dd animated">



                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>



                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>



                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>



                                <div class="dropdown-divider"></div>



                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>



                                <div class="dropdown-divider"></div> -->



                                <a class="dropdown-item" href="<?php echo base_url('admin/logout')?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                               


                                <!-- <div class="dropdown-divider"></div>



                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->



                            </div>



                        </li>

                    </ul>



                </div>



            </nav>



        </header>
         <script type="text/javascript">
            function change_status_val(status, service_type, astro_id) {
                if(status == "Offline"){
                    $('.setastroId').val(astro_id);
                    if(service_type == 'Call'){
                        $('#Call').modal({backdrop: 'static', keyboard: false})  
                    }else{
                        $('#Chat').modal({backdrop: 'static', keyboard: false})  
                    }
                
                }else{
                    var chatTime = $('#selectHourChat').val()+' '+ $('#selectMinChat').val();
                    var callTime = $('#selectHourCall').val()+' '+ $('#selectMinCall').val();
                    $.ajax({

                        url: "<?php echo base_url('user/ajax_update_status')?>",

                        type: 'POST',

                        dataType: "json",

                        data: {
                            'status': status,
                            'service_type': service_type,
                            'astro_id': astro_id,
                            'chatTime': chatTime,
                            'callTime': callTime
                        },

                        success: function(response) {

                            if (response.status == 1) {
                                location.reload();
                            } else {

                            }

                        }

                    });
                }

            }
            function update_status_val(status, service_type) {
                    var astro_id = $('.setastroId').val();
                    // var chatTime = $('#selectHourChat').val()+':'+ $('#selectMinChat').val()+':'+'00';
                    // var callTime = $('#selectHourCall').val()+':'+ $('#selectMinCall').val()+':'+'00';
                    var minChat = $('#selectMinChat').val();
                    var minCall = $('#selectMinCall').val();
                    var hrCall = $('#selectHourCall').val();
                    var hrChat = $('#selectHourChat').val();  

                    var dt = new Date();
                    console.log("Current Date: "+dt);
                    dt.setHours(dt.getHours() +parseInt(hrChat));
                    dt.setMinutes(dt.getMinutes() +parseInt(minChat) );
                    var ChatHours = dt.getHours();
                    var ChatMinutes = dt.getMinutes();
                    ChatMinutes = ChatMinutes.toString().padStart(2, '0');
                    let ampm = ChatHours >= 12 ? 'PM' : 'AM';
                    ChatHours = (ChatHours % 12) || 12;
                    ChatHours = ChatHours.toString().padStart(2, '0');
                    let chatTime = ChatHours + ':' + ChatMinutes + ' ' + ampm;

                    var dts = new Date();
                    dts.setHours(dts.getHours() +parseInt(hrCall));
                    dts.setMinutes(dts.getMinutes() +parseInt(minCall) );
                    var CallHours = dts.getHours();
                    var CallMinutes = dts.getMinutes();
                    CallMinutes = CallMinutes.toString().padStart(2, '0');
                    let ampms = CallHours >= 12 ? 'PM' : 'AM';
                    CallHours = (CallHours % 12) || 12;
                    CallHours = CallHours.toString().padStart(2, '0');
                    let callTime = CallHours + ':' + CallMinutes + ' ' + ampms;
                    
                    var flag = 0;
                    if(service_type == 'Chat'){
                        if(minChat == '' && hrChat==''){
                        $('.errormessage1').text('please select time.')
                        var flag = 1;
                        return false
                     }else if( (minChat == '00' && hrChat == '00') ||  minChat == ''){
                        $('.errormessage1').text('please select at least 15 minutes.')
                        var flag = 1;
                        return false
                    }else if( minChat == '00' && hrChat == ''){
                        $('.errormessage1').text('please select at least 15 minutes.')
                        var flag = 1;
                        return false
                    } 
                    }else if(service_type == 'Call'){
                     if(minCall == '' && hrCall == ''){
                        $('.errormessage1').text('please select time.')
                        var flag = 1;
                        return false
                    }else if( (minCall == '00' && hrCall == '00') ||  minCall == ''){
                        $('.errormessage1').text('please select at least 15 minutes.')
                        var flag = 1;
                        return false
                    }else if( minCall == '00' && hrCall == ''){
                        $('.errormessage1').text('please select at least 15 minutes.')
                        var flag = 1;
                        return false
                    } 
                }
                if(flag == 0){
                    $.ajax({

                        url: "<?php echo base_url('user/ajax_update_status')?>",

                        type: 'POST',

                        dataType: "json",

                        data: {
                            'status': status,
                            'service_type': service_type,
                            'astro_id': astro_id,
                            'chatTime': chatTime,
                            'callTime': callTime
                        },

                        success: function(response) {

                            if (response.status == 1) {
                                location.reload();
                            } else {

                            }

                        }

                    });
                }
                

            }


        </script>