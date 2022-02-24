
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title"> Student Registration Form</h4>
                            <?php if($this->session->flashdata('error')){?>
                            <p><?php echo $this->session->flashdata('error')?></p>
                            <?php }?>
                            <form id="form_validation" method="POST" action="<?php echo base_url('admin/register_user')?>" class="row">

                                <div class="form-group col-lg-6">
                                    <label class="form-label">Student Name</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Name" name="student_name" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="form-label">Mobile No.</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Mobile" name="student_mobile" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="form-label">Email Id</label>
                                    <div class="form-line">
                                        <input type="email" class="form-control" placeholder="Email Id" name="student_email" required="" aria-required="true">

                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="form-label">Address</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Address" name="address" required="" aria-required="true">

                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="form-label">Date of Birth</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="Date of Birth" name="date_of_birth" required="" aria-required="true">
                                    </div>
                                </div>
                       

                        <div class="form-group col-lg-6">
                            <label class="form-label">Class/Student Background</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Class" name="class" required="" aria-required="true">

                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">School/collage</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Class"  required="" name="clg" aria-required="true">

                            </div>
                            <!-- <select class="form-control" data-live-search="true" required="" name="clg" tabindex="-98" aria-required="true">
                                <option value="SGSITS">SGSITS</option>
                                <option value="DAVV">DAVV</option>
                                <option value="Vashnav eng. clg">Vashnav eng. clg</option>
                            </select> -->

                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Course</label>
                            <select class="form-float form-control show-tick" name="course" required="" data-live-search="true" tabindex="-98" aria-required="true">
                                <?php foreach ($course as  $row) {?>
                               
                                <option value="<?php echo $row->id?>"><?php echo $row->course?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Father Occupation</label>
                            <select class="form-float form-control show-tick" name="father_occupation" required="" data-live-search="true" tabindex="-98" aria-required="true">
                                <option value="Business">Business</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Gov. job">Gov. job</option>
                                <option value="Private job">Private job</option>
                                <option value="other">other</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Mother Occupation</label>
                            <select class="form-float form-control show-tick" name="mother_occupation" required="" data-live-search="true" tabindex="-98" aria-required="true">
                                <option value="Business">Business</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Gov. job">Gov. job</option>
                                <option value="Private job">Private job</option>
                                <option value="House Wife">House Wife</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-12">
                            <label>Name of Communication</label>
                            <div class="demo-radio-button">

                                <input name="communication" type="radio" id="radio_31" class="with-gap radio-col-red" value="Newspaper" checked="">
                                <label for="radio_31">Newspaper</label>
                                <input name="communication" type="radio" id="radio_32" class="with-gap radio-col-red" value="Friend">
                                <label for="radio_32">Friend</label>
                                <input name="communication" type="radio" id="radio_30" class="with-gap radio-col-red" value="Tamplet">
                                <label for="radio_30">Tamplet</label>
                            </div>
                        </div>
                        <?php if($this->session->userdata('user_type') != 'reception') {?>
                         <div class="form-group col-lg-6">
                            <label class="form-label">Course Duration</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Course Duration" name="duration"  required="" aria-required="true">

                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Course Medium</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Course Medium" name="medium" required="" aria-required="true">

                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label">10th Marks</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Marks in %" name="high_school" required="" aria-required="true">

                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label">12th Marks</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Marks in %" name="high_secondry" required="" aria-required="true">

                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label">Graduation Marks</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Marks in %" name="graduation" required="" aria-required="true">

                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label">Post Graduation Marks</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Marks in %" name="post_graduation" required="" aria-required="true">

                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Reference</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Reference" name="refrance" required="" aria-required="true">

                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Interested</label>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Interested" name="intrested" required="" aria-required="true">

                            </div>
                        </div>
                           <?php $i = 0;
                           foreach ($question as  $row) {
                               
                                           ?>
                        <div class="form-group col-lg-12">
                            <label><?php echo $row->question?></label>
                            <div class="demo-radio-button">
                                <input type="hidden" name="question[]" value="<?php echo $row->id?>">
                                <input name="ans<?php echo $i?>" type="radio" id="radio_31" class="with-gap radio-col-red" value="<?php echo $row->ans1?>" checked="">
                                <label for="radio_31"><?php echo $row->ans1?></label>
                                <input name="ans<?php echo $i?>" type="radio" id="radio_32" class="with-gap radio-col-red" value="<?php echo $row->ans2?>">
                                <label for="radio_32"><?php echo $row->ans2?></label>
                                <input name="ans<?php echo $i?>" type="radio" id="radio_30" class="with-gap radio-col-red" value="<?php echo $row->ans3?>">
                                <label for="radio_30"><?php echo $row->ans3?></label>
                                <input name="ans<?php echo $i?>" type="radio" id="radio_30" class="with-gap radio-col-red" value="<?php echo $row->ans4?>">
                                <label for="radio_30"><?php echo $row->ans4?></label>
                            </div>
                        </div>
                        <?php 
                              $i++;
                    }?>

                        <div class="form-group col-lg-12">
                            <label class="form-label">Remark</label>
                            <div class="form-line">
                                <textarea class="form-control" required=""></textarea>

                            </div>
                        </div>
                        <?php } ?>

                        <div class="form-group col-lg-12">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end col -->

    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <?php include('footer.php'); ?>