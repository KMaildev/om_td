<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>


<div class="section section-padding" style="background-color: #ededef;">
	<div class="container">
		<div class="row">

			<div class="col-lg-6 col-12 mb-lg-0 mb-3">
				<div class="about-image">
					<img src="<?php echo base_url('public/data/about.jpg') ?>" alt="">
				</div>
			</div>

			<!--About Content Start-->
			<div class="col-lg-6 col-12 align-self-center mt-lg-0 mt-3">
				<div class="about-content">
					<div class="about-heading">
						<h1 style="color: #285c5c; text-shadow: 5px 5px 5px gray; font-weight: bold; font-size: 23px;">
							OM & TD CO.,LTD
						</h1>
					</div>

					<div class="desc">
						<p>
							Our Company “OM & TD Co.,Ltd” is one of the leading global recruitments, staffing and executive search companies and company was formally established in the year 2019 January. We are a fully accredited member of Myanmar Overseas Employment Agency Federation(MOEAF). We are serving our clients of attestation since then.
						</p>

						<br>
						<p>
							We have been in the industry related to overseas manpower recruitment and can handle all the requirements needed for such recruitments. We have excellent contacts with other overseas placement agencies and other industries. <br>
							Our experience is the key to our success and also the reason that most of our Clients are associated with us . <br>
							We operate through a network of our worldwide teams, with specialists in recruitment for different industries. <br>
							We are a team of experienced, qualified, and professional working staff who strive to render premium, potent, cost-effective, and reliable services, truly unmatched by others. <br>
						</p>

						<br>
						<p>
							We provide comprehensive advice and services to Construction, Agricultural, Shipyard, Manufacturing Factories, Health Care, Food & Beverages, Laundry, Restaurant and Hotel professionals and all kinds of professionals and Myanmar workers in multitudes of areas and activities. We also provide visa services for most of the countries including Singapore, Malaysia, Thailand and Middle East Countries.
						</p>
					</div>
				</div>
			</div>
			<!--About Content End-->

		</div>
	</div>
</div>



<div class="grayBG pt80 pb80 OurServices">
	<div class="container space-2 space-3--lg">
		<div class="row justify-content-lg-between">
			<div class="col-md-4 col-lg-4 mb-7 mb-md-0">
				<div class="tab-vertical tab-vertical-md py-5 mr-lg-7">
					<div class="pr-md-7 mb-5">
						<h3 class="h4">
							Company Statement
						</h3>
					</div>

					<!-- Tab Nav -->
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active tab-vertical__nav-link" id="v-pills-features-tab" data-toggle="pill" href="#v-pills-features" role="tab" aria-controls="v-pills-features" aria-selected="true">1. Our Vision</a>
						<a class="nav-link tab-vertical__nav-link" id="v-pills-key-benefits-tab" data-toggle="pill" href="#v-pills-key-benefits" role="tab" aria-controls="v-pills-key-benefits" aria-selected="false">2. Our Mission</a>
						<a class="nav-link tab-vertical__nav-link" id="v-pills-company-tab" data-toggle="pill" href="#v-pills-company" role="tab" aria-controls="v-pills-company" aria-selected="false">3. Our Value</a>
					</div>
					<!-- End Tab Nav -->
				</div>
			</div>
			<div class="col-md-8">
				<!-- Tab Content -->
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-features-tab">
						<div class="row align-items-lg-center">
							<div class="col-md-3 col-lg-3">
								<img class="img-fluid" src="<?php echo base_url('public/data/vision.png') ?>" alt="Image Description">
							</div>
							<div class="col-md-9 col-lg-9">
								<div class="pl-lg-4"> <span class="u-label u-label--sm u-label--purple mb-3">Our Vision</span>
									<p>
										To be the most credible, and reliable land-based recruitment agency of choice worldwide
									</p>
									<br>
									<p>
										To improve the quality of skillful employees lives by giving them overseas job opportunities
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-key-benefits" role="tabpanel" aria-labelledby="v-pills-key-benefits-tab">
						<div class="row align-items-lg-center">
							<div class="col-md-3 col-lg-3">
								<img class="img-fluid" src="<?php echo base_url('public/data/mission.jpeg') ?>" alt="Image Description">
							</div>
							<div class="col-md-9 col-lg-9">
								<div class="pl-lg-4"> <span class="u-label u-label--sm u-label--purple mb-3">Our Mission</span>
									<p>
										To provide a working environment where the human rights of workers are upheld and employees are treated with dignity and respect.
									</p>
									<br>
									<p>
										Build solid, strong and responsible partnership with the government to maintain the integrity of its overseas employment program.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
						<div class="row align-items-lg-center">
							<div class="col-md-3 col-lg-3">
								<img class="img-fluid" src="<?php echo base_url('public/data/value.png') ?>" alt="Image Description">
							</div>
							<div class="col-md-9 col-lg-9">
								<div class="pl-lg-4"> <span class="u-label u-label--sm u-label--purple mb-3">Our Value</span>
									<ul>
										<li>
											Transparency
										</li>
										<li>
											Accountability
										</li>
										<li>
											Professionalism
										</li>
										<li>
											Teamwork
										</li>
										<li>
											Excellence
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Tab Content -->
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>