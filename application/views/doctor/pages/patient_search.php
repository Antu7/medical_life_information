<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h2>Search Patient With Email Id </h2>
			<form action="<?php echo base_url()?>doctor/Patient_search_controllers/patient_email_search" method="post">
			<div id="custom-search-input">
				<div class="input-group col-md-12">

					<input type="email" class="form-control input-lg" name="patient_email_search" placeholder="@example.com"/>
					<span class="input-group-btn">
                        <button class="btn btn-info btn-lg" name="submit" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
						</button>
					</span>
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




