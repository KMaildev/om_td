<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="contact-area contact-pg-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="get-in-touch">
					<div class="sec-title">
						<h3>Get In Touch</h3>
						<p>
							If you have any queries about recruitments, vacancies, or anything else, our team is ready to response all your queries.
						</p>
					</div>
					<div class="contact-form">
						<form method="post" action="<?php echo site_url('contact/save'); ?>" autocomplete="off" id="ajax-contact" style="margin-bottom: 0px !important;">
							<div class="row">
								<div class="col-lg-12">
									<?php $this->load->view('templates/shared/alert'); ?>
									<div class="form-group">
										<div class="input-group">
											<input name="name" type="text" class="form-control" placeholder="Your Name">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<input name="email" type="email" class="form-control" placeholder="Your Email Address">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<input name="phone" type="text" class="form-control" placeholder="Your Phone">
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<input name="subject" type="text" class="form-control" placeholder="Subject">
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<textarea name="message" rows="4" class="form-control" placeholder="Your Message..."></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<button type="submit">Submit Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div class="contact-info">
					<div>
						<div class="icon">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="details">
							<h5>Call us</h5>
							<p>
								<a href="tel:09 779 741 184">
									09 779 741 184
								</a>
							</p>
						</div>
					</div>
					<div>
						<div class="icon">
							<i class="far fa-envelope"></i>
						</div>
						<div class="details">
							<h5>Mail us</h5>
							<p>
								<a href="mailto:info@omandtdcompany.com">
									info@omandtdcompany.com,
								</a>
								<a href="mailto:sandarcho535@gmail.com">
									sandarcho535@gmail.com
								</a>
							</p>
						</div>
					</div>
					<div>
						<div class="icon">
							<i class="fas fa-headphones-alt"></i>
						</div>
						<div class="details">
							<h5>Fax</h5>
							<p>
								<a href="tel:09 777 860 488">
									09 777 860 488
								</a>
							</p>
						</div>
					</div>
					<div>
						<div class="icon">
							<i class="fas fa-street-view"></i>
						</div>
						<div class="details">
							<h5>Find us</h5>
							<p>
								<a href="https://www.google.com/maps/place/OM+%26+TD+Co.,Ltd/@16.8484698,96.2229195,17z/data=!3m1!4b1!4m5!3m4!1s0x30c1931a62af3a3f:0x2d3506b52a23546!8m2!3d16.8484595!4d96.2251036" target="_blank">
									R6XG+92Q, Thatyetchaung Streets, Yangon, Myanmar
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="contact-box">
					<div class="row">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.5539575538087!2d96.22291951498417!3d16.848469822557913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1931a62af3a3f%3A0x2d3506b52a23546!2sOM%20%26%20TD%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1654877761216!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php $this->load->view('templates/footer'); ?>