<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="team pt80 pb40">
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-md-12">
                <h4>
                    Meet Our Team
                </h4>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($members as $key => $value) {
            ?>
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="<?php echo base_url(); ?>admin/<?php echo $value->photo; ?>" alt="" style="width: 100%; height: 240px; object-fit: cover; background-size: corver;" data-enlargeable="">
                        </div>
                        <div class="team-desc" style="background-color: #285c5c;">
                            <h5 class="team-name" style="color: white;">
                                <?php echo $value->name; ?>
                            </h5>
                            <span class="team-position" style="color: white;">
                                <?php echo $value->position; ?>
                            </span>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook">
                                    <a class="social-icons-link" href="https://www.facebook.com/OMTD-CoLtd-108073500986670">
                                        <i class="fab fa-facebook-f" style="color: white;"></i>
                                    </a>
                                </li>
                                <li class="social-icons-item social-instagram" style="color: white;">
                                    <a class="social-icons-link" href="#">
                                        <i class="fab fa-instagram" style="color: white;"></i>
                                    </a>
                                </li>
                                <li class="social-icons-item social-twitter" style="color: white;">
                                    <a class="social-icons-link" href="#">
                                        <i class="fab fa-twitter" style="color: white;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>