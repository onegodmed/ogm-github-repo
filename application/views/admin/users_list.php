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
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
	<!-- Datatable JS -->
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <div class="page-wrapper">

            <div class="page-breadcrumb">



                <div class="row">



                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Customer List</h4>



                        <div class="ml-auto text-right">



                            <nav aria-label="breadcrumb">



                                <ol class="breadcrumb">



                                    <li class="breadcrumb-item"><a href="#">Home</a></li>



                                    <li class="breadcrumb-item active" aria-current="page">Customer List</li>



                                </ol>



                            </nav>



                        </div>



                    </div>



                </div>



            </div>



           

            <div class="container-fluid">

<!-- <a class="btn btn-primary" href="<?php echo base_url('user/add_super_cat/'.$this->uri->segment('3'))?>">Add Super Category</a><br><br> -->



                <div class="row">



                    <div class="col-12">



                        <div class="card">



                            <div class="card-body">



                                <!-- <h5 class="card-title">Basic Datatable</h5> -->



                                <div class="table-responsive">
                                    <form method="post" action="<?php echo base_url(); ?>admin/createUserExcel">
     <input type="submit" name="export" class="btn btn-success" value="Download All" />
    </form>
    <br>
<button class="button-exce" id="button-excel">Create Excel</button>
                                   <table id='empTable' class='display dataTable'>

	  <thead>
	    <tr>
	      <th>S. No.</th>
          <th>Image</th>
          <th>Country Name</th>
          <th>Name</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Signup Date/Time</th>
          <th>Wallet Belence</th>
          <th>Wallet History</th>                                        
          <th>Upload</th>
          <th>Edit</th>
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
	          'url':'<?=base_url()?>admin/customerList'
	      	},
	      	'columns': [
	      	    { data: 'id' },
	         	{ data: 'image' },
	         	{ data: 'country_code' },
	         	{ data: 'name' },
	         	{ data: 'mobile' },
	         	{ data: 'email' },
	         	{ data: 'date' },
	         	{ data: 'wallet_balence' },
	         	{ data: 'user_type' },
	         	{ data: 'gender' },
	         	{ data: 'password' },
	      	]
	   	});
	});
	     let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
  let table = document.querySelector("#empTable");
  TableToExcel.convert(table);
});
	</script>




 