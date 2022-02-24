
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Student List</h4>
                            
                            <table id="datatable-buttons" class="table table-striped table-bordered table-responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Course</th>
                                            <?php if($this->session->userdata('user_type') == 'admin' or $this->session->userdata('user_type') == 'sub_admin'){?>
                                            
                                            <th>Email</th>
                                            <th>Date of Birth</th>
                                            <th>Address</th>
                                            <th>Class</th>
                                            
                                            <th>Course Duration</th>
                                            <th>Course Medium</th>
                                            <th>Refrance</th>
                                            <th>Intrested</th>
                                            <th>Collage/ School</th>
                                            <th>Father Occupation</th>
                                            <th>Mother Occupation</th>
                                            <th>Cammuniction Source</th>
                                            <?php }?>
                                            <?php if($this->session->userdata('user_type')!='reception'){?>
                                            <th>Edit</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                           <tbody>
                                        <?php $i=1;
                                        foreach($student as $row) 
                                            {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->student_name;?></td>
                                            <td><?php echo $row->student_mobile;?></td>
                                            <td><?php echo $row->course;?></td>
                                            <?php if($this->session->userdata('user_type') == 'admin'){?>
                                            <td><?php echo $row->student_mobile;?></td>
                                            <td><?php echo $row->student_email;?></td>
                                            <td><?php echo $row->date_of_birth;?></td>
                                            <td><?php echo $row->address;?></td>
                                            <td><?php echo $row->class;?></td>
                                            
                                            <td><?php echo $row->duration;?></td>
                                            <td><?php echo $row->medium;?></td>
                                            <td><?php echo $row->refrance;?></td>
                                            <td><?php echo $row->intrested;?></td>
                                            <td><?php echo $row->clg;?></td>
                                            <td><?php echo $row->father_occupation;?></td>
                                            <td><?php echo $row->mother_occupation;?></td>
                                            <td><?php echo $row->communication;?></td>
                                            <?php }?>
                                            <td><?php if($this->session->userdata('user_type')!='reception'){?>
                                                   <a  class="btn btn-primary" href="<?php echo base_url('admin/edit_student_form/'.$row->sudent_id)?>" ><?php echo $row->status;?></a>
                                            <?php  }?>
                                            </td>
                                                
                                        </tr>
                                        <?php $i++;
                                    }?>
                                   </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
   