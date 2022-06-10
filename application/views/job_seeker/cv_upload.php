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
                        <form method="post" action="<?php echo site_url('job_seeker/upload_cv'); ?>" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-xl-12 col-md-12 col-sm-12 mb-4">
                                    <?php $this->load->view('templates/shared/alert'); ?>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Name</label>
                                        <input type="text" style="background-color: white;" class="form-control" required placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Phone Number</label>
                                        <input type="text" style="background-color: white;" class="form-control" required placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Choose Your CV File</label>
                                        <input type="file" name="attached_file" accept=".pdf, .doc, .docx" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary">
                                        Apply Now <i class="uil uil-message ms-1"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="login-btm text-center">
                        <p>If you don't have resume format?
                            <a href="<?php echo site_url('job_seeker'); ?>">Apply Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>