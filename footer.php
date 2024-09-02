<?php wp_footer(); ?>
<?php global $asset_path;
$asset_path = get_stylesheet_directory_uri();
global $redirect_url;
$redirect_url = get_home_url(); ?>

<footer>
    <div class="container-fluid">
        <div class="wrapper">
            <div class="footer_link">
                <div class="brand_content">
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/general/footer-logo.png"
                            alt="">
                    </a>
                    <p>At VCM, we don't just manage talent, we cultivate success stories. Let's connect and discuss how
                        we can elevate your brand.</p>
                </div>
                <div class="quick_links first">
                    <p class="ht h-5">QUICK LINKS</p>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">About Us</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Services</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Talent</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Brands</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Contact Us</a>
                </div>
                <div class="quick_links">
                    <p class="ht h-5">SERVICES</p>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Artist Management</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Endorser Management</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Influencer Marketing</a>
                    <a href="<?php echo $redirect_url; ?>/" target="_blank">Events and appearance </a>
                </div>
                <div class="quick_links third">
                    <p class="ht h-5">Brands that want to get connected</p>
                    <div class="branding">
                        <?php echo do_shortcode('[contact-form-7 id="16524ca" title="Contact Form @Footer"]') ?>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/VCMTheCelebritySource" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"
                                fill="none">
                                <path
                                    d="M12.3695 16.8093C12.2795 16.8093 10.2995 16.8093 9.39953 16.8093C8.91953 16.8093 8.76953 16.6293 8.76953 16.1793C8.76953 14.9793 8.76953 13.7493 8.76953 12.5493C8.76953 12.0693 8.94953 11.9193 9.39953 11.9193H12.3695C12.3695 11.8293 12.3695 10.0893 12.3695 9.2793C12.3695 8.0793 12.5795 6.9393 13.1795 5.8893C13.8095 4.8093 14.7095 4.0893 15.8495 3.6693C16.5995 3.3993 17.3495 3.2793 18.1595 3.2793H21.0995C21.5195 3.2793 21.6995 3.4593 21.6995 3.8793V7.2993C21.6995 7.7193 21.5195 7.8993 21.0995 7.8993C20.2895 7.8993 19.4795 7.8993 18.6695 7.9293C17.8595 7.9293 17.4395 8.3193 17.4395 9.1593C17.4095 10.0593 17.4395 10.9293 17.4395 11.8593H20.9195C21.3995 11.8593 21.5795 12.0393 21.5795 12.5193V16.1493C21.5795 16.6293 21.4295 16.7793 20.9195 16.7793C19.8395 16.7793 17.5295 16.7793 17.4395 16.7793V26.5593C17.4395 27.0693 17.2895 27.2493 16.7495 27.2493C15.4895 27.2493 14.2595 27.2493 12.9995 27.2493C12.5495 27.2493 12.3695 27.0693 12.3695 26.6193C12.3695 23.4693 12.3695 16.8993 12.3695 16.8093Z"
                                    fill="#2E3094" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/vcmthecelebritysource/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"
                                fill="none">
                                <g clip-path="url(#clip0_556_3216)">
                                    <path
                                        d="M13.4477 6.70898C9.66658 6.70898 6.60547 9.77343 6.60547 13.5512C6.60547 17.3323 9.66991 20.3934 13.4477 20.3934C17.2288 20.3934 20.2899 17.329 20.2899 13.5512C20.2899 9.7701 17.2255 6.70898 13.4477 6.70898ZM13.4477 17.9923C10.9932 17.9923 9.00658 16.0045 9.00658 13.5512C9.00658 11.0979 10.9944 9.1101 13.4477 9.1101C15.901 9.1101 17.8888 11.0979 17.8888 13.5512C17.8899 16.0045 15.9021 17.9923 13.4477 17.9923Z"
                                        fill="#2E3094" />
                                    <path
                                        d="M18.9407 0.306419C16.4874 0.191975 10.4107 0.19753 7.95518 0.306419C5.7974 0.40753 3.89407 0.928641 2.35963 2.46309C-0.204817 5.02753 0.122961 8.48309 0.122961 13.5509C0.122961 18.7375 -0.165928 22.1131 2.35963 24.6386C4.93407 27.212 8.43963 26.8753 13.4474 26.8753C18.5852 26.8753 20.3585 26.8786 22.1752 26.1753C24.6452 25.2164 26.5096 23.0086 26.6918 19.0431C26.8074 16.5886 26.8007 10.5131 26.6918 8.05753C26.4718 3.37642 23.9596 0.53753 18.9407 0.306419ZM22.8241 22.942C21.143 24.6231 18.8107 24.4731 13.4152 24.4731C7.85963 24.4731 5.63185 24.5553 4.00629 22.9253C2.13407 21.062 2.47296 18.0698 2.47296 13.5331C2.47296 7.3942 1.84296 2.97309 8.00407 2.65753C9.41963 2.60753 9.83629 2.59086 13.3996 2.59086L13.4496 2.6242C19.3707 2.6242 24.0163 2.0042 24.2952 8.1642C24.3585 9.56975 24.373 9.99198 24.373 13.5498C24.3718 19.0409 24.4763 21.282 22.8241 22.942Z"
                                        fill="#2E3094" />
                                    <path
                                        d="M20.5598 8.03762C21.4429 8.03762 22.1587 7.32177 22.1587 6.43873C22.1587 5.55569 21.4429 4.83984 20.5598 4.83984C19.6768 4.83984 18.9609 5.55569 18.9609 6.43873C18.9609 7.32177 19.6768 8.03762 20.5598 8.03762Z"
                                        fill="#2E3094" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_556_3216">
                                        <rect width="26.6667" height="26.6667" fill="white"
                                            transform="translate(0.109375 0.222656)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21.5994 21.6007V14.5687C21.5994 11.1127 20.8554 8.47266 16.8234 8.47266C14.8794 8.47266 13.5834 9.52866 13.0554 10.5367H13.0074V8.78466H9.19141V21.6007H13.1754V15.2407C13.1754 13.5607 13.4874 11.9527 15.5514 11.9527C17.5914 11.9527 17.6154 13.8487 17.6154 15.3367V21.5767H21.5994V21.6007Z"
                                    fill="#2E3094" />
                                <path d="M2.71094 8.78516H6.69494V21.6012H2.71094V8.78516Z" fill="#2E3094" />
                                <path
                                    d="M4.70244 2.40039C3.43044 2.40039 2.39844 3.43239 2.39844 4.70439C2.39844 5.97639 3.43044 7.03239 4.70244 7.03239C5.97444 7.03239 7.00644 5.97639 7.00644 4.70439C7.00644 3.43239 5.97444 2.40039 4.70244 2.40039Z"
                                    fill="#2E3094" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright-container">
                <hr>
                <div class="d-flex">
                    <div class="content">
                        <p class="m-0">
                            © 2024 <a href="https://www.vcmthecelebritysource.com/sitemap.xml" target="_blank">VCM</a> The Celebrity Source.
                            All rights reserved. | <a href="https://seo-hacker.com/seo-philippines/"
                                target="_blank">SEO</a> by <a href="https://seo-hacker.net/"
                                target="_blank">SEO-Hacker</a>. Optimized and maintained by<a href="https://sean.si/"
                                target="_blank"> Sean Si</a>
                        </p>
                    </div>
                    <p class="link">
                        <a href="<?php echo $redirect_url; ?>/" target="_blank">Terms of Service</a> <span>|</span>
                        <a href="<?php echo $redirect_url; ?>/" target="_blank">Privacy policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php include ('script-manager.php'); ?>
</body>

</html>