<style>
    ul.nav.nav-tabs li {
        background: #fe871e;
        margin: 10px;
        padding: 10px 20px;
        color: #fff;
        font-size: 14px;
    }
    
    ul.nav.nav-tabs li a {
        color: #fff;
    }
    
    .tab-content h3 {
        text-align: center;
        padding: 15px;
    }
</style>

<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<style>
    ul.nav.nav-tabs li {
        background: #fe871e;
        margin: 10px;
        padding: 10px 20px;
        color: #fff;
        font-size: 14px;
    }
    
    ul.nav.nav-tabs li a {
        color: #fff;
    }
    
    .tab-content h3 {
        text-align: center;
        padding: 15px;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #fff;
    background-color: #ffffff;
    background: linear-gradient(to bottom, #ffffff 0%, #fff 100%);
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0;
    margin-left: 0;
}
.button-exce{
    background: #fe871e;
        margin: 10px;
        padding: 10px 20px;
        color: #fff;
        font-size: 14px;
        border-radius: 50px;
        display:none;
}
</style>


<div class="page-wrapper">

    <div class="page-breadcrumb">

        <div class="row">

            <div class="col-12 d-flex no-block align-items-center">

                <h4 class="page-title">Booking</h4>

                <div class="ml-auto text-right">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Booking</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">

                        <div class="tab-content">
                            <div >

                                <h3>Vedic Astrology</h3>

                                <div class="table-responsive">
                                    <button class="button-exce" id="button-excel3">Create Excel</button>

                                    <table id="zero_config3" class="table table-striped table-bordered display">

                                        <thead>

                                            <tr>

                                                <th>S.no</th>
                                                <th>Action</th>
                                                <th>Customer Name</th>
                                                
                                                <th>Services name</th>

                                                <th>Booking(Date & Time)</th>
                                                
                                                <th>Service Type</th>

                                                <th>Status</th>
                                                <th>Nation</th>
                                               


                                            </tr>

                                        </thead>
                                         <?php if(count($booking)>0) {?>
                                             <tbody>

                                            <?php

                             $i = 1;

                         foreach ($booking as $key => $row) {
                 
                                    $where = array('id' => $row->astrologer_id);

                                    $profile = $this->admin->get_details('author', $where);
                                         
                         ?>

                                                <tr>

                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>
                                                    <td> <input type="button" class="btn btn-primary" onclick="updatechatstatus(<?php echo $row->id;?>)" value="Start Chat">
                                                        </td>
                                                    <td>
                                                        <?php echo $row->name; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->sevice_name; ?>
                                                    </td>


                                                    <td><?php echo $row->date; ?></td>
                                                   


                                                  <td>
                                                        <?php echo $row->call_type?>
                                                  </td>

                                                  <td>
                                                        <?php echo $row->is_Active?>
                                                  </td>

                                                                  <td>
                                                                        <?php echo $row->callNation?>
                                                                    </td>
                                                         

                                                </tr>

                                                <?php  }?>

                                        </tbody>
                                         <?php }else{?>
                                               <tbody>

                                            <?php

                             $i = 1;

                         foreach ($booking1 as $key => $row) {
                 
                                    $where = array('id' => $row->astrologer_id);

                                    $profile = $this->admin->get_details('author', $where);
                                         
                         ?>

                                                <tr>

                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>
                                                    <td> <a class="btn btn-primary" href="<?= base_url() ?>admin/chat?chatid=<?php echo base64_encode($row->id);?>">Re-join Chat</a>
                                                        </td>
                                                    <td>
                                                        <?php echo $row->name; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row->sevice_name; ?>
                                                    </td>


                                                    <td><?php echo $row->date; ?></td>
                                                   


                                                  <td>
                                                        <?php echo $row->call_type?>
                                                  </td>

                                                  <td>
                                                        <?php echo $row->is_Active?>
                                                  </td>

                                                                  <td>
                                                                        <?php echo $row->callNation?>
                                                                    </td>
                                                         

                                                </tr>

                                                <?php  }?>

                                        </tbody>
                                         <?php }?>
                                        

                                        <tfoot>

                                            <tr>

                                                <th>S.no</th>
                                                <th>Action</th>
                                                <th>Customer Name</th>
      
                                                <th>Services name</th>

                                                <th>Booking(Date & Time)</th>

                                               <th>Service Type</th>

                                                <th>Status</th>
                                               <th>Nation</th>
                                               

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script type="text/javascript">
            function updatechatstatus(id) {

                $.ajax({

                    url: "<?php echo base_url('admin/update_chat_status')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'id': id
                    },

                    success: function(response) {

                        if (response.status == 1) {
                             window.location.href = "<?= base_url() ?>admin/chat?chatid="+response.chatId;
                        } else {

                        }

                    }

                });

            }

            function statrt_call(customer_mobile,duaretion) {
              
                
                alert(duaretion);
                
                var appid = 1111137;

                var secret = "qzs3on0w0riofawi2j4i";

                var from = <?php echo $this->session->userdata('mobile')?>;

                var to = customer_mobile;

                var duration = duaretion*60;

                var productDetails = {
                    "appid": appid,
                    "secret": secret,
                    "from": from,
                    "to": to,
                    "duration": duration
                };

                $.ajax({

                    type: 'POST',

                    contentType: "application/json",

                    url: "https://piopiy.telecmi.com/v1/phone2phone",

                    data: JSON.stringify(productDetails),

                    dataType: 'JSON',

                });

            }

        function submit_link(){
    var youtube = $('#youtube_link').val();
    var order_id = $('#order_id').val();
    if(youtube == ""){
          $('#invalide_link').html('Please Enter Valide Link');
    }else{
         $.ajax({

                    url: "<?php echo base_url('admin/add_link')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'youtube': youtube,
                        'order_id': order_id
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

$(document).ready(function() {
    $('table.display').DataTable();
} );

/*======================*/

//  let button1 = document.querySelector("#button-excel1");

// button1.addEventListener("click", e => {
//   let table = document.querySelector("#zero_config1");
//   TableToExcel.convert(table);
// });

// let button2 = document.querySelector("#button-excel2");

// button2.addEventListener("click", e => {
//   let table = document.querySelector("#zero_config2");
//   TableToExcel.convert(table);
// });

let button3 = document.querySelector("#button-excel3");

button3.addEventListener("click", e => {
  let table = document.querySelector("#zero_config3");
  TableToExcel.convert(table);
});

// let button4 = document.querySelector("#button-excel4");

// button4.addEventListener("click", e => {
//   let table = document.querySelector("#zero_config4");
//   TableToExcel.convert(table);
// });
        </script>