<script src='<?php echo base_url() ?>assets/js/jquery-1.8.3.min.js'></script>
<script src='<?php echo base_url() ?>assets/js/jquery.elevatezoom.js'></script>

<script src='<?php echo base_url() ?>assets/js/jquery.elevateZoom-3.0.8.min.js'></script>
<script src='<?php echo base_url() ?>assets/js/elevatezoom.jquery.json'></script>


<div class="" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>View Report </h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="" role="tabpanel" data-example-id="togglable-tabs">

									<img id="zoom_01" style="max-width: 1000px; height: 1000px;"
										 src="<?php echo base_url() . $prescription_info->patient_report ?> "
										 data-zoom-image="<?php echo base_url() . $prescription_info->patient_report ?>"/>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$('#zoom_01').elevateZoom({
		zoomType: "inner",
		cursor: "crosshair",
		zoomWindowFadeIn: 700,
		zoomWindowFadeOut: 750
	});
</script>
