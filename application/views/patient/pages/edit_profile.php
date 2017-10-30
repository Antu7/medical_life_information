

<!--

profile part start from here

-->

<div> <!--class="right_col" role="main"-->
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Your Profile</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" novalidate
                              action="<?php echo base_url() ?>patient/Patient_profile_controllers/update_patient_profile"
                              enctype="multipart/form-data" method="post">

                            <input type="hidden" name="patient_id" value="<?php echo $Patient_info->patient_id ?>">

                            <span class="section">Patient Information</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control "
                                           data-validate-length-range="6" data-validate-words="2" name="patient_name"
                                           placeholder="" required="required" type="text"
                                           value="<?php echo $Patient_info->patient_name ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email2" name="patient_email" data-validate-linked="email"
                                           required="required" class="form-control col-md-7 col-xs-12"
                                           disabled="disabled" value="<?php echo $Patient_info->patient_email ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Mobile No <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="telephone" name="patient_phone" required="required"
                                           data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"
                                           value="<?php echo $Patient_info->patient_phone ?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email2" name="patient_email" data-validate-linked="email"
                                           required="required" class="form-control col-md-7 col-xs-12"
                                           disabled="disabled" value="<?php echo $Patient_info->patient_gender ?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">NID No <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="number" name="patient_nid" required="required"
                                           data-validate-minmax="" class="form-control col-md-7 col-xs-12"
                                           value="<?php echo $Patient_info->patient_nid ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Birth Date <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" id="number" name="patient_birthday" required="required"
                                           data-validate-minmax="" class="form-control col-md-7 col-xs-12"
                                           value="<?php echo $Patient_info->patient_birthday ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Blood Group <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control "
                                           data-validate-length-range="6" data-validate-words="1"
                                           name="patient_blood_group"
                                           placeholder="" required="required" type="text"
                                           value="<?php echo $Patient_info->patient_blood_group ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="password" class="control-label col-md-3">Password
                                    <span class="required">*</span></label>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" type="password" data-validate-length="6,8"
                                           class="form-control col-md-7 col-xs-12" required="required" name="password">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat
                                    Password <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password2" type="password" name="patient_confirm_password"
                                           data-validate-linked="password" class="form-control col-md-7 col-xs-12"
                                           required="required">
                                </div>
                            </div>

                            <div class="">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Profile Picture
                                    <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="patient_image" type="file">
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        $session_data = $this->session->userdata('message');
                        if ($session_data) {
                            echo $session_data;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<script src="<?php echo base_url() ?>assets/vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<!--<script src="<?php /*echo base_url() */ ?>assets/admin/build/js/custom.min.js"></script>
-->
<!-- Bootstrap -->
<link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
