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
						<h2 class="title h1">OM & TD Co.,Ltd</h2>
					</div>

					<div class="desc">
						<p>
							OM & TD Co.,Ltd is founded on 22 January, 2016 as a Private Company Limited under the law of Myanmar Companies Act 1999. Company registration number is 3294/2015-2016 (YGN). Overseas Employment Service Agent Licence was issued in 2019 and current Licence Number is 134/2021. Myanmar Overseas Employment Agencies Federation (MOEAF) number is 326.
						</p>

						<br>
						<p>
							We believe in the concept of continual technical development. Our aim is to fully support employers whilst showcasing a job seekers skill, qualifications, and natural ability. Our ambition is to improve the quality of all workers lives and leading a better future.
						</p>

						<br>
						<p>
							We believe in the concept of continual technical development. Our aim is to fully support employers whilst showcasing a job seekers skill, qualifications, and natural ability. Our ambition is to improve the quality of all workers lives and leading a better future.
						</p>
					</div>
				</div>
			</div>
			<!--About Content End-->

		</div>
	</div>
</div>


<div class="section section-padding pt-0 py-5">
	<div class="container">

		<div class="feature-wrap row">
			<div class="feature col-lg-4 col-sm-6 col-12">
				<div class="inner">
					<span class="icon"><i class="fas fa-rocket"></i></span>
					<div class="content">
						<h4 class="title">Our Vision</h4>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum</p>
					</div>
				</div>
			</div>

			<div class="feature col-lg-4 col-sm-6 col-12">
				<div class="inner">
					<span class="icon"><i class="fas fa-user-friends"></i></span>
					<div class="content">
						<h4 class="title">Our Mission</h4>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum</p>
					</div>
				</div>
			</div>

			<div class="feature col-lg-4 col-sm-6 col-12">
				<div class="inner">
					<span class="icon"><i class="fas fa-coffee"></i></span>
					<div class="content">
						<h4 class="title">Our Value</h4>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php $this->load->view('templates/footer'); ?>