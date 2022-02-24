<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
	<!-- Datatable JS -->
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <style>
          button.dt-button, div.dt-button, a.dt-button {
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
                        <h4 class="page-title">Payment History</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payment History</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                   <h3>Payment History</h3>
                                <div class="table-responsive">
                                    <form method="post" action="<?php echo base_url(); ?>admin/createPayExcel">
     <input type="submit" name="export" class="btn btn-success" value="Download All" />
    </form>
    <br>
                                   <button class="button-exce" id="button-excel">Create Excel</button>
                                   <table id='empTable' class='display dataTable'>

	  <thead>
	    <tr>
	       <th>S.no</th>
           <th>Customer Name</th>
           <th>Customer Mobile No.</th>
           <th>Invoice No.</th>
           <th>Payment Date/Time</th>
           <th>Payment Id</th>
           <th>Package Name </th>
           <th>Package Amount </th>
           <th>Discount Amount </th>
           <th>Recharge Amount(w/o GST) </th>
           <th>GST</th>
           <th>Amount</th>
           <th>Coupon Code</th>
           <th>Coupon Discount</th>
           <th>Current Balance</th>
           <th>Payment Status</th>
           <th>Nation</th>
           <th>Invoice</th>
	    </tr>
	  </thead>

	</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <script type="text/javascript">
	$(document).ready(function(){
	   	$('#empTable').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'post',
	      	'ajax': {
	          'url':'<?=base_url()?>admin/paymentList'
	      	},
	      	'columns': [
	      	    { data: 'id' },
	         	{ data: 'name' },
	         	{ data: 'mobile' },
	         	{ data: 'invoice' },
	         	{ data: 'date' },
	         	{ data: 'pay_id' },
	         	{ data: 'pack_name' },
	         	{ data: 'pack_amt' },
	         	{ data: 'disc_amt' },
	         	{ data: 'rech_amt' },
	         	{ data: 'gst' },
	         	{ data: 'amt' },
	         	{ data: 'coup_code' },
	         	{ data: 'coup_disc' },
	         	{ data: 'curr_bal' },
	         	{ data: 'pay_status' },
	         	{ data: 'nation' },
	         	{ data: 'link' },
	      	]
	   	});
	});
	     let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
  let table = document.querySelector("#empTable");
  TableToExcel.convert(table);
});
	</script>


    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <footer class="footer text-center">



                <?php echo date('Y');?> all rights reserved @ onegodmed.com



            </footer>