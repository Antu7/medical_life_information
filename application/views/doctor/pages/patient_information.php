<div>
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Patient Profile</h3>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>
							<small></small>
						</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
							<?php foreach ($status = $Patient_info as $row) { ?>
							<div class="profile_img">
								<div id="crop-avatar">
									<!-- Current avatar -->
									<img class="img-responsive avatar-view"
										 src="<?php echo base_url() . $row->patient_image ?>" alt="Picture"
										 title="Change the avatar">
								</div>
							</div>


							<h3><?php echo $row->patient_name ?></h3>


							<ul class="list-unstyled user_data">
								<li><i class="fa fa-mobile"></i>
									<?php echo $row->patient_phone ?>
								</li>

								<li>
									<i class="fa fa-heart"></i>
									<?php echo $row->patient_blood_group ?>
								</li>

								<li class="m-top-xs">
									<i class="fa fa-external-link user-profile-icon"></i>
									<?php echo $row->patient_gender ?>
								</li>
								<li class="m-top-xs">
									<i class="fa fa-github-alt"></i>
									<?php echo $row->patient_birthday ?>
								</li>
							</ul>

						</div>
						<div class="row-fluid">

							<a href="<?php echo base_url() ?>doctor/Doctor_view_controllers/view_patient_diseases_overview/<?php echo $row->patient_id ?>"
							   class="btn btn-info"><i class="fa fa-bug"></i> Patient Diseases Overview</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>
