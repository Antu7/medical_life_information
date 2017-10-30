<div>
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Your Profile</h3>
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
							<div class="profile_img">
								<div id="crop-avatar">
									<!-- Current avatar -->
									<img class="img-responsive avatar-view"
										 src="<?php echo base_url() . $Patient_info->patient_image ?>" alt="Avatar"
										 title="Change the avatar">
								</div>
							</div>
							<h3><?php echo $Patient_info->patient_name ?></h3>

							<ul class="list-unstyled user_data">

								<li>
									<i class="fa fa-briefcase user-profile-icon"></i>
									<?php
									echo $Patient_info->patient_email
									?>
								</li><li>
									<i class="fa fa-briefcase user-profile-icon"></i>
									<?php
									echo $Patient_info->patient_phone
									?>
								</li>

								<li class="m-top-xs">
									<i class="fa fa-external-link user-profile-icon"></i>
									<a href="" target="_blank"><?php echo $Patient_info->patient_email?></a>
								</li>
							</ul>


							<br/>

							<!-- start skills -->

							<!-- end of skills -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
