<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<section class="portfolio pt80 pb80" style="background-color: #f5f8fb;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 p-0">
				<div class="nav justify-content-center">
					<div class="w-md-80 w-lg-60 text-center mx-md-auto">
						<h2 class="h3">Our Company <strong>Activities</strong></h2>
						<p>
							Some Of Our Work
						</p>
					</div>
				</div>
				<div class="portfolio-wrap grid items-4 items-padding">
					<?php
					foreach ($activities as $activitie) {
						$temp_arr = explode(',', $activitie->photo);
						$total_count = count($temp_arr);
						for ($i = 0; $i < $total_count; $i++) {
					?>
							<div class="portfolio-card isotope-item digital">
								<div class="portfolio-card-body">
									<div class="">
										<img src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="" style="width: 100%; height: 200px; object-fit: cover; background-size: corver;" data-enlargeable="">
									</div>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('templates/footer'); ?>