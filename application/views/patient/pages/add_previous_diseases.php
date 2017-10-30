<head>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<!--<script>
		$(document).ready(function () {
			var max_fields = 20; //maximum input boxes allowed
			var wrapper = $(".input_fields_wrap"); //Fields wrapper
			var add_button = $(".add_field_button"); //Add button ID

			var x = 1; //initlal text box count
			$(add_button).click(function (e) { //on add input button click
				e.preventDefault();
				if (x < max_fields) { //max input box allowed
					x++; //text box increment
					$(wrapper).append('<div><div>\n' +
						'                                        <input type="text" class="form-control col-md-7 col-xs-12" name="medicine_name[]" placeholder="Medicine Name">\n' +
						'                                        <br>\n' +
						'                                        <div class="radio">\n' +
						'                                            <label>\n' +
						'                                                <input type="checkbox" value="morning" id="optionsRadios1"\n' +
						'                                                       name="medicine_quantity[]"> Morning\n' +
						'                                            </label>\n' +
						'                                            <label>\n' +
						'                                                <input type="checkbox" value="day" id="optionsRadios1"\n' +
						'                                                       name="medicine_quantity[]"> Day\n' +
						'                                            </label>\n' +
						'                                            <label>\n' +
						'                                                <input type="checkbox" value="night" id="optionsRadios1"\n' +
						'                                                       name="medicine_quantity[]"> Night\n' +
						'                                            </label>\n' +
						'                                        </div>\n' +
						'                                        <div class="radio">\n' +
						'                                            <label>\n' +
						'                                                 <input type="checkbox" value="Before Eat"\n' +
						'                                                                                            id="optionsRadios1"\n' +
						'                                                                                            name="medicine_take_schedule[]"> Before\n' +
						'                                                Eat\n' +
						'                                            </label>\n' +
						'                                            <label>\n' +
						'                                                <input type="checkbox" checked="" value="After Eat" id="optionsRadios1"\n' +
						'                                                       name="medicine_take_schedule[]"> After Eat\n' +
						'                                            </label>\n' +
						'                                        </div>\n' +
						'                                        <input type="text" placeholder="7 days" class="form-control col-md-7 col-xs-12" name="medicine_date_schedule[]">\n' +
						'                                    </div><a href="#" class="remove_field" style="color: red"> Remove</a></div>'); //add input box
				}
			});

			$(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
				e.preventDefault();
				$(this).parent('div').remove();
				x--;
			})
		});


	</script>-->
</head>


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Add Your Diseases Information Here
					<small style="color: red">All Field Required ( * )</small>
				</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br/>
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
					  action="<?php echo base_url() ?>patient/Patient_diseases_controllers/add_diseases_info"
					  method="post" enctype="multipart/form-data">


					<input type="hidden" name="patient_id"
						   value="<?php echo $this->session->userdata('patient_id') ?>">


					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Diseases Name<span
								class="required">*</span>
						</label>


						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required"
								   class="form-control col-md-7 col-xs-12" name="diseases_name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Diseases Status
							<span
								class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">

							<select required="required" name="diseases_status" class="form-control col-md-7 col-xs-12">
								<option value="0">I Don't Have This Diseases</option>
								<option value="1">I Still Have This Diseases</option>
							</select>

						</div>
					</div>

					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Which Doctor You
							Meet
							<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="middle-name" class="form-control col-md-7 col-xs-12" required="required"
									  placeholder="Doctor Information"
									  name="doctor_info"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Diseases Date<span
								class="required">*</span>
						</label>


						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="date" placeholder="YY-MM-DD" required="required"
								   class="form-control col-md-7 col-xs-12" name="date">
						</div>
					</div>

					<div class="">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add Prescription
							<span style="color: red">(Clear Picture)</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input name="patient_prescription" type="file">
						</div>
					</div>
					<br><br>
					<div class="">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add Report
							<span style="color: red">(Clear Picture)</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input name="patient_report" type="file">
						</div>
					</div>
					<br>

					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
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


<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>


<!-- Bootstrap -- the bad class>
<!--<script src="<?php /*echo base_url() */ ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>-->

<!-- Parsley -->
<script src="<?php echo base_url() ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>
<!-- Custom Theme Style -->
<link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">


<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?php echo base_url() ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="<?php echo base_url() ?>assets/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?php echo base_url() ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?php echo base_url() ?>assets/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?php echo base_url() ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?php echo base_url() ?>assets/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>


