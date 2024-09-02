<?php /*Template Name: Book a Influencer  */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/contact-us.css">

<section class="cf7-form l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="main header_content">
                <h2><span>vorem ipsum dolor</span> sit amet consectetur</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Ultrices non in donec cursus morbi lorem sit massa. Sodales
                    nisl convallis nisl ipsum. Aenean amet at sit diam aliquam gravida. Pulvinar urna ac ipsum in
                    egestas.</p>
            </div>
            <div class="main row">
                <div class="col-lg-6 contact-column">
                    <div class="contact-form">
                        <div class="header_content">
                            <h2><span>lorem ipsum dolor </span>sit amet</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Nibh nam vitae imperdiet eget.</p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="844191b" title="Contact Form @Book a Influencer"]') ?>
                    </div>
                </div>
                <div class="col-lg-6 contact-column">
                    <div class="contact-image">
                        <img src="<?php echo $asset_path; ?>/assets/img/contact/influencer.png" alt="Book a Celebrity">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>