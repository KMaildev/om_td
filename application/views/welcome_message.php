<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php $this->load->view('templates/slider'); ?>

<div class="section" style="background-color: #ededef;">
    <br><br>
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
                        <a href="<?php echo site_url('about'); ?>">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <!--About Content End-->

        </div>
    </div>
</div>

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

<section class="portfolio" style="background-color: #f5f8fb;">
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