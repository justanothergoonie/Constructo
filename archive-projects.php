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
<div class="album py-5 bg-light">
    <main class="row" id="content">
        <header class="header">
            <h1 class="entry-title">PROJECTS</h1>

            <hr>
        </header>

        <?php if ($project_q->have_posts()) :
            while ($project_q->have_posts()) :
                $project_q->the_post(); ?>
        <?php get_template_part('entry', 'projects'); ?>


        <?php endwhile;
            wp_reset_postdata();
        endif; ?>

        <?php get_template_part('nav', 'below'); ?>

    </main>
</div>
<?php get_footer(); ?>