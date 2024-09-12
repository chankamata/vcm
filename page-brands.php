<?php /*Template Name: Brands */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/brands.css">
<section class="hero-banner l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="_content mb_60">
                <div class="desc">
                    <h1>Our <span>Partners</span></h1>
                    <img src="<?php echo $asset_path; ?>/assets/img/page-brands/banner.jpg" alt="Our Partners"
                        class="w-100 d-lg-none">
                    <p class="mb-lg-0">We take pride in our diverse portfolio of brands and the strong partnerships
                        we've forged with
                        leading brands across various industries.</p>
                </div>
                <div class="cta">
                    <a href="<?php echo $redirect_url; ?>/contact-us/celebrity/" target="_blank"
                        class="c_btn cta_green c_r">Get to Know Our Artists</a>
                </div>
            </div>
            <div class="image_content  d-none d-lg-block">
                <img src="<?php echo $asset_path; ?>/assets/img/page-brands/banner-2.png" alt="Our Partners"
                    class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="partner-brands l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="owl-carousel owl-theme" id="brands">
                    <?php
                    $totalImages = 36;
                    $imagesPerItem = 6;

                    for ($start = 1; $start <= $totalImages; $start += $imagesPerItem): ?>
                        <div class="item">
                            <div class="group">
                                <?php
                                for ($i = $start; $i < $start + $imagesPerItem && $i <= $totalImages; $i++): ?>

                                    <img src="<?php echo $asset_path; ?>/assets/img/page-brands/partner-brand/<?php echo $i; ?>.jpg"
                                        alt="Brand <?php echo $i; ?>">

                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="content">
                    <h2>PARTNER <span>BRANDS</span></h2>
                    <p class="mb-0">Our collaborative approach ensures that every project is rooted in trust, strategic
                        planning, and a shared vision for success.</p>
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
                    <p class="m-0">Our partner agencies are integral to our mission, bringing diverse expertise and
                        innovative solutions that enhance our offerings. Together, we create impactful strategies that
                        drive success for our clients.</p>
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
<section class="partner l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="content">
                    <h2>PARTNER <span>BRANDS</span></h2>
                    <p class="mb-0">Our collaborative approach ensures that every project is rooted in trust, strategic
                        planning, and a shared vision for success.</p>
                </div>
                <div class="logo">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <div class="image">
                            <img src="<?php echo $asset_path; ?>/assets/img/page-brands/partner/<?php echo $i; ?>.jpg">
                        </div><?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/brands.js"></script>