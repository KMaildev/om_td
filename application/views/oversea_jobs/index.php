<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="grayBG pt80 pb60">
	<div class="container space-2 space-3--lg">
		<!-- Title -->
		<div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
			<h2 class="h3">Oversea <strong>Jobs</strong></h2>
			<p>
				Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.
			</p>
		</div>
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