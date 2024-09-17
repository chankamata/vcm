<?php /*Template Name: Clients       */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/brands.css">
<section class=" client l-_hpx">
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
            <div class="brand-logo mb_60">
                <?php for ($i = 1; $i <= 36; $i++): ?>
                    <div class="image">
                        <img src="<?php echo $asset_path; ?>/assets/img/page-brands/partner-brand/<?php echo $i; ?>.jpg">
                    </div>
                <?php endfor; ?>
            </div>
            <button id="loadbrand" class="cta_button">Load More</button>
        </div>
    </div>
</section>
<section class="contact l-_hpx mt-xl-0 mt-5">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content-box">
                <div class="image">
                    <img src="<?php echo $asset_path; ?>/assets/img/page-brands/marian.png" alt="Marian Rivera"
                        class="d-md-block d-none">
                    <img src="<?php echo $asset_path; ?>/assets/img/page-brands/marian-mobile.png" alt="Marian Rivera"
                        class="d-md-none">
                </div>
                <div class="content">
                    <h2>Work With Us <span>Today</span></h2>
                    <p>At VCM, we cherish our partnerships and are proud to work with a diverse range of clients. Reach
                        out to us to learn more about how we can collaborate and support your needs.</p>
                    <a href="<?php echo $redirect_url; ?>/contact-us/" target="_blank"
                        class="c_btn cta_green c_r">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/brands.js"></script>