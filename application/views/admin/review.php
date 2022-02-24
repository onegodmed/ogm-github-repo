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

<h4 class="page-title">Reviews List</h4>

<div class="ml-auto text-right">

<nav aria-label="breadcrumb">

<ol class="breadcrumb">

<li class="breadcrumb-item"><a href="#">Home</a></li>

<li class="breadcrumb-item active" aria-current="page">Review</li>

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


<div class="table-responsive">
<button class="button-exce" id="button-excel">Create Excel</button>
                                   <table id='empTable' class='display dataTable'>

	  <thead>
	    <tr>
	      <th>S. No.</th>
          <th>User Name</th>
            <th>Astrologer Name</th>
            <th>review</th>
            <th>Rating</th>
            <th>Date</th>
            <th>Action</th>
            <th>Delete</th>
	    </tr>
	  </thead>

	</table>

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
	          'url':'<?=base_url()?>admin/reviewList'
	      	},
	      	'columns': [
	      	    { data: 'id' },
	         	{ data: 'name' },
	         	{ data: 'astrologer_name' },
	         	{ data: 'reviews' },
	         	{ data: 'rating' },
	         	{ data: 'date' },
	         	{ data: 'status' },
	         	{ data: 'service_id' },
	      	]
	   	});
	});
	     let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
  let table = document.querySelector("#empTable");
  TableToExcel.convert(table);
});
	</script>
