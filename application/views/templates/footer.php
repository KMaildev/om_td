<?php
$lang_session = $this->session->userdata('lang');
?>
<div class="gradient-overlay-half-primary-v1">
	<div class="bg-img-hero" style="background-image: url(images/bg2.png);">
		<div class="container">
			<div class="row align-items-lg-center text-lg-left space-2">
				<div class="col-lg-6">
					<h3 class="text-white h3">
						GETTING STARTED TO WORK
					</h3>
					<p class="text-white">
						WE CREATE ANY JOB OPPORTUNITY FOR MYANMAR PEOPLE
					</p>
				</div>
				<div class="col-lg-6 text-lg-right">
					<a class="btn btn-light mb-2 mb-sm-0 mr-sm-2" href="<?php echo site_url('employers'); ?>">
						Employer Application.
					</a>
					<a class="btn btn-purple mb-2 mb-sm-0 mr-sm-2" href="<?php echo site_url('job_seeker'); ?>">
						Apply Now
					</a>
					<a class="btn btn-light mb-2 mb-sm-0" href="<?php echo site_url('contact'); ?>">
						Contact Us
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="main-footer">
	<div class="footer-content">
		<div class="container">
			<div class="row">
				<div class=" col-xl-3 col-xl-3 col-md-3 col-sm-6 col-xs-12 col-6 ">
					<div class="footer-col">
						<h4 class="footer-title">Quick Links</h4>
						<ul class="list-unstyled footer-nav">
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
										echo "Oversean Jobs";
									}
									?>
								</a>
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

				<div class=" col-xl-3 col-xl-3 col-md-3 col-sm-6 col-xs-12 col-6  ">
					<div class="footer-col">
						<h4 class="footer-title">Application Form</h4>
						<ul class="list-unstyled footer-nav">
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
					</div>
				</div>
				<div class=" col-xl-3 col-xl-3 col-md-3 col-sm-6 col-xs-12 col-6  ">
					<div class="footer-col">
						<h4 class="footer-title">Oversea Jobs</h4>
						<ul class="list-unstyled footer-nav">
							<?php
							foreach ($country_lists as $key => $value) {
							?>
								<li>
									<a href="<?php echo site_url('oversea_jobs/index'); ?>">
										<?php echo $value->name; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-xl-3 col-md-3 col-sm-6 col-xs-12 col-12">
					<div class="footer-col row">
						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
							<div class="mobile-app-content">
								<h4 class="footer-title">Social Media</h4>
								<div class="row">
									<div id="fb-root">
										<div class="fb-page" data-href="https://www.facebook.com/OMTD-CoLtd-108073500986670" data-tabs="timeline" data-height="240" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
										</div>

										<script>
											(function(d, s, id) {
												var js, fjs = d.getElementsByTagName(s)[0];
												if (d.getElementById(id)) return;
												js = d.createElement(s);
												js.id = id;
												js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=310515396183252&autoLogAppEvents=1';
												fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));
										</script>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
							<div class="hero-subscribe">
								<h4 class="footer-title no-margin">Follow us on</h4>
								<ul class="list-unstyled list-inline footer-nav social-list-footer social-list-color footer-nav-inline">
									<li><a class="icon-color fb" title="" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/OMTD-CoLtd-108073500986670" data-original-title="Facebook"><i class="fab fa-facebook-f"></i> </a></li>
									<li><a class="icon-color tw" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="fab fa-twitter"></i> </a></li>
									<li><a class="icon-color gp" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Google+"><i class="fab fa-google-plus-g"></i> </a></li>
									<li><a class="icon-color lin" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i class="fab fa-linkedin"></i> </a></li>
									<li><a class="icon-color pin" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i class="fab fa-pinterest-p"></i> </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div style="clear: both"></div>
				<div class="col-xl-12">
					<div class="copy-info text-center"> © <?php echo date('Y'); ?> Classifly. All Rights Reserved. </div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="<?php echo base_url(); ?>public/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/functions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/slick.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/swiper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/js/main.js" type="text/javascript"></script>
</body>

</html>
<script type="text/javascript">
	$('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
		var src = $(this).attr('src');
		var modal;

		function removeModal() {
			modal.remove();
			$('body').off('keyup.modal-close');
		}
		modal = $('<div>').css({
			background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
			backgroundSize: 'contain',
			width: '100%',
			height: '100%',
			position: 'fixed',
			zIndex: '10000',
			top: '0',
			left: '0',
			cursor: 'zoom-out'
		}).click(function() {
			removeModal();
		}).appendTo('body');
		//handling ESC
		$('body').on('keyup.modal-close', function(e) {
			if (e.key === 'Escape') {
				removeModal();
			}
		});
	});
</script>