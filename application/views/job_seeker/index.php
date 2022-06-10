<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="registration registrationAds">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="registration-box">
					<div class="add-post">
						<h4>
							Apply for your job
						</h4>
						<p style="font-weight: bold;">
							We help employees transition quickly and successfully into new jobs and career opportunities.
						</p>
						<form method="post" action="<?php echo site_url('job_seeker/save'); ?>" autocomplete="off">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
									<?php $this->load->view('templates/shared/alert'); ?>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Name</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">NRC No</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="NRC No" name="nrc" value="<?php echo set_value('nrc'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Email Address</label>
										<input type="email" style="background-color: white;" class="form-control" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Phone Number</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Date Of Birth</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Date Of Birth" name="date_of_birth" value="<?php echo set_value('name'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Health Status</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Health Status" name="health_status" value="<?php echo set_value('health_status'); ?>">
									</div>
								</div>


								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Age</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Age" name="age" value="<?php echo set_value('age'); ?>">
									</div>
								</div>


								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Gender</label>
										<ul class="row featchoose">
											<div class="col-md-4">
												<input type="radio" name="gender" value="Male" checked> Male
											</div>
											<div class="col-md-6">
												<input type="radio" name="gender" value="Female"> Female
											</div>
										</ul>
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Height</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Height" name="height" value="<?php echo set_value('height'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Weight <small><i>(lb)</i></small></label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Weight" name="weight" value="<?php echo set_value('weight'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Passport</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Passport" name="passport" value="<?php echo set_value('passport'); ?>">
									</div>
								</div>

								<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Date Of Expiry (Passport)</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Date Of Expiry (Passport)" name="expire_date" value="<?php echo set_value('expire_date'); ?>">
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Education</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Education" name="education" value="<?php echo set_value('education'); ?>">
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Skill</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Skill" name="skill" value="<?php echo set_value('skill'); ?>">
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Language</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="English 4 skills, N5 Japanese" name="language" value="<?php echo set_value('language'); ?>">
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
									<div class="formrow">
										<label for="nameInput" class="form-label">Current Address</label>
										<input type="text" style="background-color: white;" class="form-control" placeholder="Current Address" name="current_address" value="<?php echo set_value('current_address'); ?>">
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
					<div class="login-btm text-center">
						<p>You have already resume format?
							<a href="<?php echo site_url('job_seeker/cv_upload'); ?>">Upload Here</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('templates/footer'); ?>