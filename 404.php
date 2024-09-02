<?php /*Template Name: 404 */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/redirection.css">
<section class="redirection thank-you l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="_content">
                <h1 class="header_text">404!</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Ut mauris eu faucibus fames lorem nulla vitae. Suspendisse
                    ullamcorper congue accumsan nulla.</p>
                <a href="<?php echo $redirect_url; ?>/" class="cta_green c_r c_btn">Back to Homepage</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>