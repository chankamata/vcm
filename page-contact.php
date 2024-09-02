<?php /*Template Name: Contact Us */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/index.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/contact-us.css">
<section class="main-contact l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <div class="text">
                    <h2>Partner <span>with VCM</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Ut mauris eu faucibus fames lorem nulla vitae.
                        Suspendisse
                        ullamcorper congue accumsan nulla.</p>
                </div>
                <div class="cta">
                    <a href="<?php echo $redirect_url; ?>/" target="_blank" class="cta_green c_r c_btn">Book a
                        Celebrity</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank" class="cta_violet c_r c_btn">Book an
                        INfluencer</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank" class="cta_blue c_r c_btn">Book an
                        Event Host/Appearance</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form">
                        <div class="header_content">
                            <h2>Ready to <span>join us?</span></h2>
                            <p>Drop us a mesage or give us a call. We'd love to chat about how VCM can make your
                                dream a
                                reality.</p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="b9d3928" title="Contact Form @Main"]') ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-details">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/megan.png" alt="Megan Young">
                        <h3>Let's Talk</h3>
                        <div class="info">
                            <div class="info_card">
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_1408_16288)">
                                            <path
                                                d="M15.3914 11.3093L13.2981 9.21597C12.5505 8.46837 11.2796 8.76744 10.9805 9.7393C10.7563 10.4122 10.0087 10.786 9.33582 10.6364C7.84061 10.2626 5.82207 8.31885 5.44827 6.74888C5.22399 6.076 5.67255 5.3284 6.3454 5.10415C7.31728 4.8051 7.61633 3.53417 6.86872 2.78657L4.77543 0.693274C4.17734 0.16995 3.28021 0.16995 2.75689 0.693274L1.33644 2.11372C-0.0840089 3.60893 1.48596 7.57124 4.99971 11.085C8.51345 14.5987 12.4758 16.2435 13.971 14.7483L15.3914 13.3278C15.9148 12.7297 15.9148 11.8326 15.3914 11.3093Z"
                                                fill="#2E3094" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1408_16288">
                                                <rect width="15" height="15" fill="white"
                                                    transform="translate(0.799805 0.300781)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex">
                                    <h5 class="m-0">Phone Number</h5>
                                    <a href="tel:+639158835111" target="_blank">+63 9158835111</a>

                                </div>
                            </div>
                            <div class="info_card">
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_1408_16298)">
                                            <path
                                                d="M10.5194 8.42383L9.26315 9.68436C8.75371 10.1956 7.85734 10.2066 7.33688 9.68436L6.08055 8.42383L1.56836 12.9507C1.73632 13.0283 1.9215 13.0747 2.11838 13.0747H14.4817C14.6785 13.0747 14.8637 13.0284 15.0316 12.9507L10.5194 8.42383Z"
                                                fill="#2E3094" />
                                            <path
                                                d="M14.4816 2.52734H2.11832C1.92145 2.52734 1.73626 2.57369 1.56836 2.65136L6.38995 7.48895C6.39027 7.48927 6.39065 7.48933 6.39098 7.48965C6.3913 7.48997 6.39136 7.49041 6.39136 7.49041L7.95912 9.06336C8.12564 9.22988 8.47434 9.22988 8.64086 9.06336L10.2083 7.49067C10.2083 7.49067 10.2087 7.48997 10.209 7.48965C10.209 7.48965 10.2097 7.48927 10.21 7.48895L15.0315 2.65133C14.8636 2.57363 14.6785 2.52734 14.4816 2.52734Z"
                                                fill="#2E3094" />
                                            <path
                                                d="M0.94002 3.26562C0.853125 3.44135 0.799805 3.63641 0.799805 3.84535V11.7555C0.799805 11.9645 0.853066 12.1595 0.93999 12.3352L5.46 7.80058L0.94002 3.26562Z"
                                                fill="#2E3094" />
                                            <path
                                                d="M15.6596 3.26562L11.1396 7.80064L15.6596 12.3354C15.7465 12.1596 15.7998 11.9646 15.7998 11.7556V3.84541C15.7998 3.63641 15.7465 3.44135 15.6596 3.26562Z"
                                                fill="#2E3094" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1408_16298">
                                                <rect width="15" height="15" fill="white"
                                                    transform="translate(0.799805 0.300781)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex">
                                    <h5 class="m-0">Email</h5>
                                    <a href="mailto:kali@vcmthecelebritysource.com" target="_blank">
                                        kali@vcmthecelebrity<br>source.com</a>
                                </div>
                            </div>
                            <div class="info_card">
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_1408_16317)">
                                            <path
                                                d="M8.30255 0.300781C5.30709 0.300781 2.87012 2.73775 2.87012 5.73318C2.87012 9.45061 7.73161 14.908 7.93859 15.1385C8.13301 15.355 8.47244 15.3547 8.6665 15.1385C8.87349 14.908 13.735 9.45061 13.735 5.73318C13.7349 2.73775 11.298 0.300781 8.30255 0.300781ZM8.30255 8.46638C6.79546 8.46638 5.56938 7.24027 5.56938 5.73318C5.56938 4.22609 6.79549 3.00002 8.30255 3.00002C9.80961 3.00002 11.0357 4.22612 11.0357 5.73321C11.0357 7.2403 9.80961 8.46638 8.30255 8.46638Z"
                                                fill="#2E3094" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1408_16317">
                                                <rect width="15" height="15" fill="white"
                                                    transform="translate(0.802734 0.300781)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex">
                                    <h5 class="m-0">Address</h5>
                                    <a href="https://maps.app.goo.gl/wXt3gB9FMrBsgMvV6" target="_blank">Unit 14, La
                                        Chesa Townhomes, Alcantara St., Tandang Sora, Q.C.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>