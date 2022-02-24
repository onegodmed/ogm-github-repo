<div class="page-wrapper">

<div class="page-breadcrumb">

<div class="row">

<div class="col-12 d-flex no-block align-items-center">

<h4 class="page-title">Promotion List</h4>

<div class="ml-auto text-right">

<nav aria-label="breadcrumb">

<ol class="breadcrumb">

<li class="breadcrumb-item"><a href="#">Home</a></li>

<li class="breadcrumb-item active" aria-current="page">Promotion</li>

</ol>

</nav>

</div>

</div>

</div>

</div>

<div class="container-fluid">

<a class="btn btn-primary" href="<?php echo base_url('admin/add_promotion')?>">Add Promotion</a><br><br>
<div class="row">

<div class="col-12">

<div class="card">

<div class="card-body">

<!-- <h5 class="card-title">Basic Datatable</h5> -->

<div class="table-responsive">

<table id="zero_config" class="table table-striped table-bordered">

    <thead>

        <tr>

            <th>S.No.</th>

            <th>Promotion Amount</th>

            <th>Create Date</th>

            <th>Edit</th>

            <th>Delete</th>

        </tr>

    </thead>

    <tbody>

        <?php $i=1;

            foreach($promotion as $row) 

                {?>

            <tr>

                <td>
                    <?php echo $i?>
                </td>

                <td><?php echo $row->promo_amt;?></td>

                <td>
                    <?php echo date('d-m-Y H:i:s', strtotime($row->date));?>
                </td>

                <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_promotion/'.$row->id)?>">Edit</a></td>

                <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_promotion/'.$row->id)?>">Delete</a></td>

            </tr>

            <?php $i++;

        }?>

    </tbody>

    <tfoot>

        <tr>

          <th>S.No.</th>

            <th>Promotion Amount</th>

            <th>Create Date</th>

            <th>Edit</th>

            <th>Delete</th>
        </tr>

    </tfoot>

</table>

</div>
</div>
</div>
</div>
</div>

</div>