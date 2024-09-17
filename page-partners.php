<?php /*Template Name: Partners */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/brands.css">

<section class="partner l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="content">
                    <h1><span>PARTNERS</span></h1>
                    <p class="mb-0">Collaborating with industry leaders to deliver exceptional results. VCM partners
                        with top-tier brands and agencies to create impactful campaigns that drive success.</p>
                </div>
                <div class="logo">
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <div class="image">
                            <img src="<?php echo $asset_path; ?>/assets/img/page-brands/partner/<?php echo $i; ?>.jpg">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partner-agency l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="mb_60">
                <div class="desc">
                    <h2><span>PARTNER</span> AGENCIES</h2>
                    <p class="m-0">The partner agencies of VCM play a crucial role in enhancing our collaborative
                        efforts and driving impactful results. Each agency brings unique expertise and innovative
                        strategies, allowing us to deliver comprehensive solutions that meet the diverse needs of our
                        clients.</p>
                </div>
            </div>
            <div class="agency">
                <?php for ($i = 1; $i <= 21; $i++): ?>
                    <div class="image">
                        <img src="<?php echo $asset_path; ?>/assets/img/page-brands/partner-agency/<?php echo $i; ?>.jpg">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<section class="contact l-_hpx mt-xl-0 mt-5">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content-box">
                <div class="image">
                    <img src="<?php echo $asset_path; ?>/assets/img/page-brands/marian.png" alt="Marian Rivera" class="d-md-block d-none">
                    <img src="<?php echo $asset_path; ?>/assets/img/page-brands/marian-mobile.png" alt="Marian Rivera" class="d-md-none">
                </div>
                <div class="content">
                    <h2>Work With Us <span>Today</span></h2>
                    <p>We want to help you and your brand achieve your goals.</p>
                    <a href="<?php echo $redirect_url; ?>/contact-us/" target="_blank"
                        class="c_btn cta_green c_r">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/brands.js"></script>