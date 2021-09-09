<?php

/** 
 * Template Name: Project Archive
 */
$project_q = new WP_Query([
    "post_type" => CPT_PROJECTS,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
get_header(); ?>
<div class="project-page">

    <div class="hero">
        <h2>PROJECTS</h2>
        <span>HOME &sol; PROJECTS &sol; ALL PROJECTS</span>
    </div>

    <div class="entry-projects">
        <?php if ($project_q->have_posts()) :
            while ($project_q->have_posts()) :
                $project_q->the_post(); ?>
        <?php get_template_part('entry', 'projects'); ?>


        <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>


    <?php get_template_part('nav', 'below'); ?>


</div>
<?php get_footer(); ?>