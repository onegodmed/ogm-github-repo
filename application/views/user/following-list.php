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
    .btn {
    display: inline-block;
    width: 100%;
    margin: 2px 0;
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
}
</style>

<div class="page-wrapper">

    <div class="page-breadcrumb">

        <div class="row">

            <div class="col-12 d-flex no-block align-items-center">

                <h4 class="page-title">My Following</h4>

                <div class="ml-auto text-right">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">My Following</li>

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


                            <div>

                                <h3>My Following</h3>

                                <div class="table-responsive">
                                    
                                    
                               
                                    <table  id="zero_config3" class="table table-striped table-bordered display">

                                        <thead>


                                            <tr>

                                                <th>S.no</th>
                                                <th>Astro Image</th>
                                                <th>Astro Name</th>
                                                <th>Astro Follower</th>
                                                <th>Astro rating</th>
                                                <th>Astro Status</th>

                                            </tr>

                                        </thead>

                                        <tbody>

<?php 
$i = 1;

foreach ($list as $key => $row) { 
    
$astroid=$row->aid;

$this->load->model('Admin_model');
$sql = $this->db->select('*')->from('follow')->where('astro_id',$astroid)->get()->result();
$follower = count($sql)+320;

$sql1 = $this->db->select('*,AVG(rating) as avg')->from('rating')->join('Reviews', 'Reviews.id=rating.reviewId')->where('astrologer_id',$astroid)->get()->result();
$rating = number_format($sql1[0]->avg,2);
?>

                                                <tr>

<!-- <td><?php echo $astroid ; ?></td> -->
                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>
                                                
                                                   
                                                    <td>
                                                       <img src="<?php echo base_url() ?>/admin-assets/assets/images/users//<?php echo $row->image; ?>" style="size:circle;">
                                                    </td>
                                                    <td><a href="<?php echo base_url();?>astrologer/<?= $row->astro_slug ?>"><?php echo $row->name; ?></a></td>
                                                    <td>
                                                        <?php echo $follower; ?>
                                                    </td>
                                                <td>
                                                        <?php echo $rating; ?>
                                                    </td> 
                                                <?php if($row->status=='Online') { ?>

                                                    <td><?= $row->status ?></td>
                                                <?php } elseif($row->status=='Offline') { ?>    
                                                <td><?= $row->status ?></td>    
                                                 <?php } ?>
                                                </tr>

                                                <?php } ?>

                                        </tbody>

                                      
                                   
                                    </table>
 
                                </div>

                            </div>

                         

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script type="text/javascript">
            function change_status(status, id) {

                $.ajax({

                    url: "<?php echo base_url('admin/ajax_update_status')?>",

                    type: 'POST',

                    dataType: "json",

                    data: {
                        'id': id,
                        'status': status
                    },

                    success: function(response) {

                        if (response.status == 1) {

                        } else {

                        }

                    }

                });

            }

            function statrt_call(vendor_no,duaretion) {
var appid = 1111137;

var secret = "qzs3on0w0riofawi2j4i";

var from = vendor_no;

var to = <?php echo $this->session->userdata('mobile')?>;

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

function pay_with_bank() {

document.getElementById("myform1").submit();

}

$(document).ready(function() {
    $('table.display').DataTable();
} );


/*======================*/

 let button1 = document.querySelector("#button-excel1");

button1.addEventListener("click", e => {
  let table = document.querySelector("#zero_config1");
  TableToExcel.convert(table);
});

let button2 = document.querySelector("#button-excel2");

button2.addEventListener("click", e => {
  let table = document.querySelector("#zero_config2");
  TableToExcel.convert(table);
});

let button3 = document.querySelector("#button-excel3");

button3.addEventListener("click", e => {
  let table = document.querySelector("#zero_config3");
  TableToExcel.convert(table);
});

let button4 = document.querySelector("#button-excel4");

button4.addEventListener("click", e => {
  let table = document.querySelector("#zero_config4");
  TableToExcel.convert(table);
});
        </script>