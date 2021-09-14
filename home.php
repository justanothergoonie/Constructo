<?php

/** 
 * Template Name: Blog Archive
 */
$blog_q = new WP_Query([
    "post_type" => 'post',
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
get_header(); ?>
<div class="blog-page">
    <div class="hero">
        <h2>BLOG</h2>
        <span>HOME &sol; BLOG </span>
    </div>

    <?php if ($blog_q->have_posts()) :
        while ($blog_q->have_posts()) :
            $blog_q->the_post(); ?>
    <?php get_template_part('entry', 'post'); ?>


    <?php endwhile;
        wp_reset_postdata();
    endif; ?>


</div>
<?php get_footer(); ?>