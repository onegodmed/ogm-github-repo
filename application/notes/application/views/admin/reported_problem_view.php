<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Reported Problems</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">

                    <li class="active">Reported Problems</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="ui-typography">
            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title" v-if="headerText">Reported Problem details</strong>
                        </div>

                        <div class="card-body">

                            <div class="row">                       
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Developer name</label>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-9"><?= $problem[0]->d_first_name . ' ' . $problem[0]->d_last_name; ?></div>
                            </div>
                            <div class="row">                       
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Client name</label>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-9"><?= $problem[0]->c_first_name . ' ' . $problem[0]->c_last_name; ?></div>
                            </div>
                            <div class="typo-articles">
                                <p><?= $problem[0]->violation_details; ?></p>
                            </div>



                        </div>
                        <div class="card-footer"> 
                            <a href="<?php echo base_url('admin/reported_problems')?>"><button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-arrow-circle-o-left"></i> Back to listing page
                                </button></a>
<!--                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>-->
                      </div>
                    </div>
                    


                </div>
            </div>
        </div>



    </div><!-- .animated -->
</div>




















