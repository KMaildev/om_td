<?php
$lang_session = $this->session->userdata('lang');
?>
<header class="header-static navbar-sticky navbar-light shadow">
	<!-- Navbar top start-->
	<div class="navbar-top d-none d-lg-block">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<!-- navbar top Left-->
				<div class="d-flex align-items-center">
					<!-- Language -->
					<!-- <div class="dropdown"> <a class="dropdown-toggle" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="dropdown-item-icon" src="<?php echo base_url(); ?>public/assets/images/flag/uk.svg" alt=""> English </a>
						<div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownLanguage"> <span class="dropdown-item-text">Select language</span>
							<div class="dropdown-divider">
							</div>
							<a class="dropdown-item" href="#"><img class="dropdown-item-icon" src="<?php echo base_url(); ?>public/assets/images/flag/sp.svg" alt=""> Español</a> <a class="dropdown-item" href="#"><img class="dropdown-item-icon" src="<?php echo base_url(); ?>public/assets/images/flag/fr.svg" alt=""> Français</a> <a class="dropdown-item" href="#"><img class="dropdown-item-icon" src="<?php echo base_url(); ?>public/assets/images/flag/gr.svg" alt=""> Deutsch</a>
						</div>
					</div> -->

					<ul class="nav list-unstyled ml-3">
						<li class="nav-item mr-3">
							<a class="navbar-link" href="tel:09 779 741 184">
								<strong>Phone:</strong> 09 779 741 184
							</a>
						</li>
						<li class="nav-item mr-3">
							<a class="navbar-link" href="mailto:info@omandtdcompany.com">
								<strong>Email:</strong> info@omandtdcompany.com
							</a>
						</li>
					</ul>
				</div>

				<!-- navbar top Right-->
				<div class="d-flex align-items-center">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
						</li>
					</ul>

					<ul class="social-icons">
						<li class="social-icons-item social-facebook m-0">
							<a class="social-icons-link w-auto px-2" href="https://www.facebook.com/OMTD-CoLtd-108073500986670" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="social-icons-item social-instagram m-0">
							<a class="social-icons-link w-auto px-2" href="#">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li class="social-icons-item social-twitter m-0">
							<a class="social-icons-link w-auto pl-2" href="#">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Navbar top End-->

	<!-- Logo Nav Start -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo -->
			<a class="navbar-brand" href="<?php echo site_url('welcome'); ?>">
				<img src="<?php echo base_url(); ?>public/assets/images/logo-header.png" alt="travelgo">
			</a>

			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> </span> </button>
			<!-- Main Menu Start -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item active">
						<a href="<?php echo site_url('welcome'); ?>" class="nav-link">
							<?php
							if ($lang_session == 'jp') {
								echo "ホームページ";
							} else {
								echo "Home";
							}
							?>
						</a>
					</li>

					<li class="nav-item active">
						<a href="<?php echo site_url('about'); ?>" class="nav-link">
							<?php
							if ($lang_session == 'jp') {
								echo "会社概要";
							} else {
								echo "About Us";
							}
							?>
						</a>
					</li>


					<li class="nav-item active">
						<a href="<?php echo site_url('oversea_jobs/index'); ?>" class="nav-link">
							<?php
							if ($lang_session == 'jp') {
								echo "会社概要";
							} else {
								echo "Overseas Jobs";
							}
							?>
						</a>
					</li>



					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="demosMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php
							if ($lang_session == 'jp') {
								echo "応用";
							} else {
								echo "Application";
							}
							?>
						</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li>
								<a href="<?php echo site_url('job_seeker'); ?>" class="dropdown-item">
									<?php
									if ($lang_session == 'jp') {
										echo "求職者";
									} else {
										echo "Job Seeker";
									}
									?>
								</a>
							</li>

							<li>
								<a href="<?php echo site_url('job_seeker/cv_upload'); ?>" class="dropdown-item">
									<?php
									if ($lang_session == 'jp') {
										echo "CVをアップロード";
									} else {
										echo "Upload CV";
									}
									?>
								</a>
							</li>

							<li>
								<a href="<?php echo site_url('employers'); ?>" class="dropdown-item">
									<?php
									if ($lang_session == 'jp') {
										echo "雇用主";
									} else {
										echo "Employers";
									}
									?>
								</a>
							</li>
						</ul>
					</li>


					<li class="nav-item active">
						<a href="<?php echo site_url('activities'); ?>" class="nav-link">
							<?php
							if ($lang_session == 'jp') {
								echo "活動";
							} else {
								echo "Company Activities";
							}
							?>
						</a>
					</li>

					<li class="nav-item active">
						<a href="<?php echo site_url('contact'); ?>" class="nav-link">
							<?php
							if ($lang_session == 'jp') {
								echo "コンタクト";
							} else {
								echo "Contact Us";
							}
							?>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
</header>