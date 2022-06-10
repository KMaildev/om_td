<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php $this->load->view('templates/slider'); ?>

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

<div class="grayBG pt80 pb80 OurServices">
    <div class="container space-2 space-3--lg">
        <div class="row justify-content-lg-between">
            <div class="col-md-12">
                <!-- Tab Content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-features-tab">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="pr-lg-4">
                                    <img class="max-width-9 mb-2" src="<?php echo base_url(); ?>public/assets/images/consult-primary-icon.svg" alt="Image Description">
                                    <h4 class="title">Our Vision</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis orci odio, condimentum at dapibus.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="pr-lg-4"> <img class="max-width-9 mb-2" src="<?php echo base_url(); ?>public/assets/images/plan-brown-icon.svg" alt="Image Description">
                                    <h4 class="title">Our Mission</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis orci odio, condimentum at dapibus.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="pr-lg-4"> <img class="max-width-9 mb-2" src="<?php echo base_url(); ?>public/assets/images/create-blue-icon.svg" alt="Image Description">
                                    <h4 class="title">Our Value</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis orci odio, condimentum at dapibus.</p>
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


<div class="grayBG pb60">
    <div class="container space-2 space-3--lg">
        <div class="row">
            <div class="col-md-12 page-content col-thin-right">
                <div class="inner-box category-content">
                    <div class="row">
                        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                            <h2 class="h3">Oversea <strong>Jobs</strong></h2>
                            <p>
                                Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.
                            </p>
                        </div>
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