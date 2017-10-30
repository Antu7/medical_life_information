<link href="<?php echo base_url() ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="<?php echo base_url() ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="<?php echo base_url() ?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- Datatables -->
<link href="<?php echo base_url() ?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"
	  rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
	  rel="stylesheet">
<link
	href="<?php echo base_url() ?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
	rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
	  rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
	  rel="stylesheet">

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>assets/admin/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/admin/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?php echo base_url() ?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script
	src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script
	src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script
	src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script
	src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script
	src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script
	src="<?php echo base_url() ?>assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script>


<!--
Data table start




-->


<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>All Diseases Information
				<small>Your Full Medical Life</small>
			</h2>
			<ul class="nav navbar-right panel_toolbox">
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<p class="text-muted font-13 m-b-30">
			</p>

			<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
				   cellspacing="0" width="100%">
				<thead>
				<tr>
					<th>No</th>
					<th>Diseases Name</th>
					<th>Diseases Status</th>
					<th>Doctor Info</th>
					<th>Prescription</th>
					<th>Report</th>
					<th>Date</th>
				</tr>
				</thead>
				<tbody>

				<?php
				$count = 1;
				foreach ($diseases_info as $information) {
					?>

					<tr>
						<td><?php echo $count++ ?></td>
						<td><?php echo $information->diseases_name ?></td>
						<td>
							<?php
							$status = $information->diseases_status;

							if ($status) :
								?>
								<form
									action="<?php echo base_url() ?>patient/Patient_diseases_controllers/change_diseases_status "
									method="post">
									<input type="hidden" value="<?php echo $information->diseases_id ?>" name="diseases_id">
									<button type="submit" value="0" name="diseases_status" class="label label-danger"
											onclick="return checkDelete();">Diseases I
										Have
									</button>
								</form>
								<?php
							else :
								?>
								<span class="label label-success">NO</span>
								<?php
							endif;
							?>

						</td>
						<td>
							<a href="<?php echo base_url() ?>patient/Patient_view_controllers/patient_doctor_info/<?php echo $information->diseases_id ?>"
							   class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a></td>
						<td>
							<a href="<?php echo base_url() ?>patient/Patient_view_controllers/patient_prescription_info/<?php echo $information->diseases_id ?>"
							   class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a></td>
						<td>
							<a href="<?php echo base_url() ?>patient/Patient_view_controllers/patient_report_info/<?php echo $information->diseases_id ?>"
							   class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a></td>

						<td><?php echo $information->date ?></td>

					</tr>

					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
