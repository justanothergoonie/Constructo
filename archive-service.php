<?php

/** 
 * Template Name: Service Archive
 */
$service_q = new WP_Query([
    "post_type" => CPT_SERVICES,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
get_header(); ?>
<div class="service-page">

    <div class="hero">
        <h2>SERVICE</h2>
        <span>HOME &sol; SERVICES &sol; ALL SERVICES</span>
    </div>
    <div class="entry-services">
        <?php if ($service_q->have_posts()) :
            while ($service_q->have_posts()) :
                $service_q->the_post(); ?>
        <?php get_template_part('entry', 'service'); ?>


        <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>


    <?php get_template_part('nav', 'below'); ?>


</div>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>