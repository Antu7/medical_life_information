<div class="" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Doctor Profile </h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
									<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Professional Information</a>
									</li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

										<!-- start recent activity -->
										<ul class="messages">
											<li>
												<div class="message_date">
												</div>
												<div class="message_wrapper">
													<h4 class="heading">Doctor Information</h4>
													<blockquote class="message"><?php echo $doctor_info->doctor_info ?></blockquote>
													<br/>
													<p class="url">
														<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
													</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
