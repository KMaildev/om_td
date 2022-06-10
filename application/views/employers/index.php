<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="registration registrationAds">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="registration-box">
					<div class="add-post">
						<h4>
							Employer Application Form.
						</h4>
						<form method="post" action="<?php echo site_url('employers/save'); ?>">
							<div class="row">
								<div class="col-md-12 mb-3">
									<?php $this->load->view('templates/shared/alert'); ?>
									<div class="formrow">
										<label for="nameInput" class="form-label">Company Name</label>
										<input autocomplete="off" type="text" class="form-control" placeholder="Company Name" name="company_name" value="<?php echo set_value('company_name'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Type of Company</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Type Of Company" name="company_type" value="<?php echo set_value('company_type'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Company Email Address</label>
										<input type="email" style="background-color: white;" class="form-control" placeholder="Company Email Address" name="email" value="<?php echo set_value('email'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Company Phone Number</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Company Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Company Website</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Company Website" name="website" value="<?php echo set_value('website'); ?>">
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Company Location</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Company Location" name="location" value="<?php echo set_value('location'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Job Category</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Job Category" name="job_category" value="<?php echo set_value('job_category'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Age Limit: 20-40</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Age Limit: 20-40" name="age_limit" value="<?php echo set_value('age_limit'); ?>">
									</div>
								</div>


								<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Educational Requirement</label>
										<textarea class="form-control" name="educational_requirement" placeholder="Educational Requirement"><?php echo set_value('educational_requirement'); ?></textarea>
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Working Experience Requirement</label>
										<textarea class="form-control" name="working_experience_requirement" placeholder="Working Experience Requirement"><?php echo set_value('working_experience_requirement'); ?></textarea>
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Other Additional Requirement</label>
										<textarea class="form-control" name="other_additional_requirement" placeholder="Other Additional Requirement"><?php echo set_value('other_additional_requirement'); ?></textarea>
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Estimate Salary Offer</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Estimate Salary Offer" name="estimate_salary_offer" value="<?php echo set_value('estimate_salary_offer'); ?>">
									</div>
								</div>


								<div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Other Allowance/Benefits</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Other Allowance/Benefits" name="other_allowance" value="<?php echo set_value('other_allowance'); ?>">
									</div>
								</div>


								<div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Gender: Male = 10, Female = 5</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Gender: Male = 10, Female = 5" name="gender" value="<?php echo set_value('gender'); ?>">
									</div>
								</div>


								<div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
									<div class="form-group">
										<label for="nameInput" class="form-label">Interview Type</label>
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Interview Type: Online" name="interview_type" value="<?php echo set_value('interview_type'); ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-12 control-label"></label>
									<div class="col-md-12">
										<button type="submit" class="btn btn-success regi-btn btn-lg">Apply Now</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('templates/footer'); ?>