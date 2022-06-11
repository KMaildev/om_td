<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="grayBG py-3">
	<div class="container space-2 space-3--lg">
		<div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
			<h2 class="h3">Oversea <strong>Jobs</strong></h2>
			<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</p>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-3 col-lg-3 col-sm-12 mb-5">
				<a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="<?php echo site_url('job_seeker'); ?>">
					<img class="d-block max-width-12 mx-auto mb-2" src="<?php echo base_url(); ?>public/data/thailand.jpeg" alt="SVG" style="width: 100%; height: 140px; background-size: cover; object-position: center;">
					<h3 class="h6 text-dark mb-0">Thailand</h3>
				</a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 mb-5">
				<a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="<?php echo site_url('job_seeker'); ?>">
					<img class="d-block max-width-12 mx-auto mb-2" src="<?php echo base_url(); ?>public/data/malaysia.webp" alt="SVG" style="width: 100%; height: 140px; background-size: cover; object-position: center;">
					<h3 class="h6 text-dark mb-0">Malaysia</h3>
				</a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 mb-5">
				<a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="<?php echo site_url('job_seeker'); ?>">
					<img class="d-block max-width-12 mx-auto mb-2" src="<?php echo base_url(); ?>/public/data/sg.jpeg" alt="SVG" style="width: 100%; height: 140px; background-size: cover; object-position: center;">
					<h3 class="h6 text-dark mb-0">Singapore</h3>
				</a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 mb-5">
				<a class="d-block card-frame bg-white text-center rounded py-7 px-5" href="<?php echo site_url('job_seeker'); ?>">
					<img class="d-block max-width-12 mx-auto mb-2" src="<?php echo base_url(); ?>/public/data/dubai.jpeg" alt="SVG" style="width: 100%; height: 140px; background-size: cover; object-position: center;">
					<h3 class="h6 text-dark mb-0">Dubai</h3>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="grayBG">
	<div class="container space-2 space-3--lg">
		<!-- End Title -->
		<div class="row">
			<div class="col-md-12 page-content col-thin-right">
				<div class="inner-box category-content">
					<div class="row">
						<?php
						foreach ($country_lists as $key => $value) {
							$country_id = $value->id;
						?>
							<div class="col-md-4 col-sm-4">
								<div class="cat-list">
									<h3 class="cat-title">
										<a href="<?php echo site_url('job_seeker'); ?>">
											<?php echo $value->name; ?>
											<span class="count">
												<?php
												$jobs_count = [];
												foreach ($oversea_jobs as $key => $oversea_job) {
													if ($country_id == $oversea_job->country_id) {
														$jobs_count[] = 1;
													}
												}
												echo array_sum($jobs_count);
												?>
											</span>
										</a>
									</h3>
									<ul class="cat-collapse cat-id-1 collapse show">
										<?php
										foreach ($oversea_jobs as $key => $oversea_job) {
											if ($country_id == $oversea_job->country_id) {
										?>
												<li>
													<a href="<?php echo site_url('job_seeker'); ?>">
														<?php echo $oversea_job->name; ?>
													</a>
												</li>
											<?php } ?>
										<?php } ?>
									</ul>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>