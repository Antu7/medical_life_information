<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Life</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css"
          rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">

    <script type="text/javascript">
        function checkDelete() {
            var chk = confirm('Are You Sure To Change This Diseases Recode ? NB: You Only One Time Change This Record !!');

            if (chk) {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
</head>


<?php

$email = $this->session->userdata('patient_email');

$this->db->select('*');
$this->db->from('patient');
$this->db->where('patient_email', $email);
$query_result = $this->db->get();
$patient_image = $query_result->result();

?>


<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="" class="site_title"><i class="fa fa-heartbeat"></i> Welcome <span>Patient </span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->


                <?php

                foreach ($patient_image as $information) {

                ?>


                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo base_url() . $information->patient_image ?>" alt="..."
                             class="img-circle profile_img">
                    </div>

                    <?php
                    }
                    ?>


                    <div class="profile_info">
                        <span>Login As A Patient</span>
                        <h2><?php echo $this->session->userdata('patient_email'); ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3 style="color: red">Your Medical Life</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i>Your Profile <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo base_url() ?>patient/Patient_view_controllers">Home</a></li>
                                    <li><a href="<?php echo base_url() ?>patient/Patient_view_controllers/edit_profile">Edit
                                            Your Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bug"></i>Diseases Overview <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="<?php echo base_url() ?>patient/Patient_view_controllers/add_previous_diseases">Add
                                            Previous Diseases Information</a></li>
                                    <li>
                                        <a href="<?php echo base_url() ?>patient/Patient_view_controllers/view_all_diseases_list">View
                                            All Diseases List</a></li>
                                </ul>
                            </li>
                            <!--<li><a><i class="fa fa-medkit"></i>Medicine Overview <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="<?php /*echo base_url() */?>patient/Patient_view_controllers/medicine_list">All
                                            Medicine List </a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-ambulance"></i>Report Overview <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li>
                                        <a href="<?php /*echo base_url() */?>patient/Patient_view_controllers/view_all_report">View
                                            All Report</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-user-md"></i>Doctor Overview <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php /*echo base_url() */?>patient/Patient_view_controllers/view_all_doctor_list">All Doctor List</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">

                            <a href="<?php echo base_url() ?>patient/Patient_view_controllers/logout ">
                                <button type="button" class="btn btn-danger">
                                    Logout
                                </button>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->


        <div class="right_col" role="main">

            <!-- /top tiles -->
            <?php

            echo $admin_main_content;

            ?>

        </div>
        <!-- end of weather widget -->
    </div>

    <footer>
        <div class="pull-right">
            Copyright © 2017. All rights reserved Developed By <a style="color: #00A000"
                                                                  href="https://www.facebook.com/Antu9903"
                                                                  target="_blank">Tanvir Hossain Antu</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
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
<!-- Chart.js -->
<script src="<?php echo base_url() ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?php echo base_url() ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo base_url() ?>assets/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php echo base_url() ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?php echo base_url() ?>assets/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>

</body>
</html>
