<?php

/** 
 * Template Name: Client Archive
 */
$client_q = new WP_Query([
    "post_type" => CPT_CLIENT,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
get_header(); ?>
<div class="album py-5 bg-light">
    <main class="row" id="content">
        <header class="header">
            <h1 class="entry-title"><?php single_term_title(); ?></h1>
            <div class="archive-meta">
                <?php if ('' != the_archive_description()) {
                    echo esc_html(the_archive_description());
                } ?>
            </div>
            <hr>
        </header>

        <?php if ($client_q->have_posts()) :
            while ($client_q->have_posts()) :
                $client_q->the_post(); ?>
        <?php get_template_part('entry', 'clients'); ?>


        <?php endwhile;
            wp_reset_postdata();
        endif; ?>

        <?php get_template_part('nav', 'below'); ?>

    </main>
</div>
<?php get_footer(); ?>