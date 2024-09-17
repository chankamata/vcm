<?php /* Template Name: News and Updates */ ?>
<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/blog-card.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/archive.css">

<section class="recent l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content _news">
                <div class="text">
                    <h1><span>Endorsements That </span>Drive Success</h1>
                    <p>Discover how strategic endorsements amplify brand reach and impact. Our proven track record
                        showcases partnerships that elevate visibility and drive remarkable results.</p>
                </div>
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>
            <?php
            $featured_blogs_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'desc',
            );

            $featured_blogs_query = new WP_Query($featured_blogs_args);
            if ($featured_blogs_query->have_posts()): ?>
                <div class="grid">
                    <?php while ($featured_blogs_query->have_posts()):
                        $featured_blogs_query->the_post();
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $post_date = get_the_date('F j, Y', $post_id);
                        $post_content = get_the_excerpt();
                        $post_permalink = get_permalink();
                        ?>
                        <div class="blog-card">
                            <div class="image">
                                <?php
                                // Display featured image if available
                                if (has_post_thumbnail($post_id)) {
                                    echo get_the_post_thumbnail($post_id, 'full', array('class' => 'w-100', 'alt' => ''));
                                } else {
                                    // Placeholder image or default image
                                    echo '<img src="' . $asset_path . '/assets/images/index/default-blog-image.jpg" class="w-100" alt="Placeholder Image">';
                                }
                                ?>
                            </div>
                            <div class="content">
                                <div class="tag">
                                    <p class="date"><?php echo esc_html($post_date); ?></p>
                                    <h4 class=""><?php echo esc_html($post_title); ?></h4>
                                </div>
                                <div class="desc">
                                    <p class="details"><?php echo esc_html($post_content); ?></p>
                                    <div class="cta">
                                        <a href="<?php echo esc_url($post_permalink); ?>" target="_blank">Read More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none">
                                                <path
                                                    d="M15.1381 7.52861L10.4714 2.86195C10.3457 2.74051 10.1773 2.67331 10.0025 2.67483C9.82768 2.67635 9.66047 2.74646 9.53687 2.87007C9.41326 2.99367 9.34315 3.16088 9.34163 3.33568C9.34011 3.51048 9.40731 3.67888 9.52875 3.80461L13.0574 7.33328H1.33341C1.1566 7.33328 0.987034 7.40352 0.86201 7.52854C0.736986 7.65357 0.666748 7.82313 0.666748 7.99995C0.666748 8.17676 0.736986 8.34633 0.86201 8.47135C0.987034 8.59637 1.1566 8.66661 1.33341 8.66661H13.0574L9.52875 12.1953C9.46507 12.2568 9.41429 12.3303 9.37935 12.4117C9.34441 12.493 9.32602 12.5805 9.32525 12.669C9.32448 12.7575 9.34135 12.8453 9.37487 12.9272C9.40839 13.0092 9.45789 13.0836 9.52048 13.1462C9.58308 13.2088 9.65751 13.2583 9.73945 13.2918C9.82138 13.3253 9.90916 13.3422 9.99768 13.3414C10.0862 13.3407 10.1737 13.3223 10.255 13.2873C10.3364 13.2524 10.4099 13.2016 10.4714 13.1379L15.1381 8.47128C15.2631 8.34626 15.3333 8.17672 15.3333 7.99995C15.3333 7.82317 15.2631 7.65363 15.1381 7.52861Z"
                                                    fill="#2E3094" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p><?php echo __('No posts found'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="blogs l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="mb_60 text-center">
                <h2>Learn <span>MORE</span></h2>
            </div>
            <?php
            // Fetch post IDs of featured blogs for exclusion
            $featured_post_ids = $featured_blogs_query->posts ? wp_list_pluck($featured_blogs_query->posts, 'ID') : array();

            // Arguments for WP_Query
            $other_blogs_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'desc',
                'post__not_in' => $featured_post_ids
            );

            // The Query
            $other_blogs_query = new WP_Query($other_blogs_args);

            // The Loop
            if ($other_blogs_query->have_posts()): ?>
                <div class="main_card row">
                    <?php while ($other_blogs_query->have_posts()):
                        $other_blogs_query->the_post();

                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $post_date = get_the_date('F j, Y', $post_id);
                        $post_content = get_the_excerpt();
                        $post_permalink = get_permalink();
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="blog_card">
                                <div class="image">
                                    <?php
                                    // Display featured image if available
                                    if (has_post_thumbnail($post_id)) {
                                        echo get_the_post_thumbnail($post_id, 'full', array('class' => 'w-100', 'alt' => ''));
                                    } else {
                                        // Placeholder image or default image
                                        echo '<img src="' . $asset_path . '/assets/images/index/default-blog-image.jpg" class="w-100" alt="Placeholder Image">';
                                    }
                                    ?>
                                </div>
                                <div class="content">
                                    <div class="tag">
                                        <p class="date"><?php echo esc_html($post_date); ?></p>
                                        <h4 class=""><?php echo esc_html($post_title); ?></h4>
                                    </div>
                                    <div class="desc">
                                        <p class="details"><?php echo esc_html($post_content); ?></p>
                                        <div class="cta">
                                            <a href="<?php echo esc_url($post_permalink); ?>" target="_blank">Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <path
                                                        d="M15.1381 7.52861L10.4714 2.86195C10.3457 2.74051 10.1773 2.67331 10.0025 2.67483C9.82768 2.67635 9.66047 2.74646 9.53687 2.87007C9.41326 2.99367 9.34315 3.16088 9.34163 3.33568C9.34011 3.51048 9.40731 3.67888 9.52875 3.80461L13.0574 7.33328H1.33341C1.1566 7.33328 0.987034 7.40352 0.86201 7.52854C0.736986 7.65357 0.666748 7.82313 0.666748 7.99995C0.666748 8.17676 0.736986 8.34633 0.86201 8.47135C0.987034 8.59637 1.1566 8.66661 1.33341 8.66661H13.0574L9.52875 12.1953C9.46507 12.2568 9.41429 12.3303 9.37935 12.4117C9.34441 12.493 9.32602 12.5805 9.32525 12.669C9.32448 12.7575 9.34135 12.8453 9.37487 12.9272C9.40839 13.0092 9.45789 13.0836 9.52048 13.1462C9.58308 13.2088 9.65751 13.2583 9.73945 13.2918C9.82138 13.3253 9.90916 13.3422 9.99768 13.3414C10.0862 13.3407 10.1737 13.3223 10.255 13.2873C10.3364 13.2524 10.4099 13.2016 10.4714 13.1379L15.1381 8.47128C15.2631 8.34626 15.3333 8.17672 15.3333 7.99995C15.3333 7.82317 15.2631 7.65363 15.1381 7.52861Z"
                                                        fill="#2E3094" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php
                // Pagination
                $pagination_args = array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $other_blogs_query->max_num_pages,
                    'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none"><path d="M0.786427 13.1913C0.786718 13.1916 0.786963 13.1919 0.787304 13.1922L5.89004 18.2703C6.27231 18.6507 6.89062 18.6493 7.27114 18.267C7.65161 17.8847 7.65015 17.2664 7.26787 16.8859L3.84189 13.4766L24.5234 13.4766C25.0628 13.4766 25.5 13.0394 25.5 12.5C25.5 11.9606 25.0628 11.5234 24.5234 11.5234L3.84194 11.5234L7.26782 8.11407C7.6501 7.7336 7.65156 7.11529 7.27109 6.73301C6.89058 6.35064 6.27222 6.34932 5.88999 6.72969L0.787256 11.8078C0.786963 11.8081 0.786718 11.8085 0.786377 11.8087C0.403906 12.1905 0.405127 12.8108 0.786427 13.1913Z" fill="#20201F"/></svg> Prev'),
                    'next_text' => __('Next <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none"><g clip-path="url(#clip0_3161_30)"><path d="M25.2136 11.8087C25.2133 11.8084 25.213 11.8081 25.2127 11.8078L20.11 6.72968C19.7277 6.34926 19.1094 6.35068 18.7289 6.733C18.3484 7.11528 18.3499 7.73359 18.7321 8.11406L22.1581 11.5234H1.47656C0.937207 11.5234 0.5 11.9606 0.5 12.5C0.5 13.0394 0.937207 13.4766 1.47656 13.4766H22.1581L18.7322 16.8859C18.3499 17.2664 18.3484 17.8847 18.7289 18.267C19.1094 18.6494 19.7278 18.6507 20.11 18.2703L25.2127 13.1922C25.213 13.1919 25.2133 13.1915 25.2136 13.1913C25.5961 12.8095 25.5949 12.1892 25.2136 11.8087Z" fill="#20201F"/></g></svg>'),
                );

                echo '<div class="pagination">';
                echo paginate_links($pagination_args);
                echo '</div>';

                wp_reset_postdata();
            else:
                echo __('No posts found');
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>