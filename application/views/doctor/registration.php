<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Life | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div id="register">
            <section class="login_content">
                <form action="<?php echo base_url() ?>doctor/Doctor_reg_controllers/doctor_registration" method="post">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Name" name="doctor_name"/>
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" name="doctor_email"/>
                    </div>
                    <div>
                        <input type="number" class="form-control" placeholder="Phone Number"
                               name="doctor_phone"/>
                    </div>
                    <br>
                    <div>
                        <input type="password" class="form-control" placeholder="Password"
                               name="doctor_password"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Confirm Password"
                               name="doctor_confirm_password"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            <span class="required"></span></label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary"
                                       data-toggle-passive-class="btn-default">
                                    <input type="radio" name="doctor_gender" value="Male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary"
                                       data-toggle-passive-class="btn-default">
                                    <input type="radio" name="doctor_gender" value="Female"> Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div>
                        <input class="btn btn-default submit" type="submit" name="submit" value="Submit">
                        <input class="btn btn-default submit" type="reset" value="Reset">
                    </div>
                </form>

                <?php
                $session_data = $this->session->userdata('message');
                if ($session_data) {
                    echo $session_data;
                    $this->session->unset_userdata('message');
                }
                ?>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="<?php echo base_url() ?>Welcome/doctor_login" class="to_register"
                           style="color: #00A000"> Log in </a>
                    </p>
                    <div class="clearfix"></div>
                    <br/>
                    <div>
                        <h1><i class="fa fa-heartbeat"></i> Medical Life !!</h1>
                        <p>©2016 All Rights Reserved Git Antu7 </p>
                    </div>
                </div>
            </section>
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


</body>
</html>
