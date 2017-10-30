<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Report | </title>

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
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="<?php echo base_url() ?>patient/Patient_login_controllers/login_check" method="post">
                    <h1>Patient Login </h1>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" name="patient_email"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="patient_password"/>
                    </div>
                    <div>
                        <input class="btn btn-default submit" type="submit" value="Submit">
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
                    <p class="change_link">New to site?
                        <a href="<?php echo base_url() ?>Welcome/patient_registration" class="to_register"
                           style="color: #00A000"> Create Account </a>
                    </p>

                    <div class="clearfix"></div>
                    <br/>

                    <div>
                        <h1><i class="fa fa-heartbeat"></i><a href="<?php echo base_url() ?>Welcome"> Medical Life!</h1>
                        <p>©2016 All Rights Reserved. Git Antu7</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>
