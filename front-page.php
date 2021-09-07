<?php
$client_q = new WP_Query([
    "post_type" => CPT_CLIENT,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
$testimonial_q = new WP_Query([
    "post_type" => CPT_TEST,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
$project_q = new WP_Query([
    "post_type" => CPT_PROJECTS,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
$service_q = new WP_Query([
    "post_type" => CPT_SERVICES,
    "posts_per_page" => -1,
    "orderby" => array('menu_order' => 'asc', 'title' => 'asc'),

]);
get_header();
?>
<main id="content" role="main">
    <section class="services">
        <div class="serv-title">
            <span>WE ARE SPECIALISTS IN</span>
            <h1>WHAT WE DO</h1>
        </div>

        <?php if ($service_q->have_posts()) :
            while ($service_q->have_posts()) :
                $service_q->the_post(); ?>
        <?php get_template_part('entry', 'service-front'); ?>


        <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </section>
    <section class="projects">
        <div class="proj-title">
            <span>WORK OF EXCELLENCE</span>
            <h1>RECENT PROJECTS</h1>
        </div>

        <div class="projects-care">
            <?php if ($project_q->have_posts()) :
                while ($project_q->have_posts()) :
                    $project_q->the_post(); ?>
            <?php get_template_part('entry', 'projects-front'); ?>


            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </section>



    <section class="happy-clients">
        <div class="happy">
            <h1>TESTIMONIALS</h1>
            <div class="testimonials">
                <?php if ($testimonial_q->have_posts()) :
                    while ($testimonial_q->have_posts()) :
                        $testimonial_q->the_post(); ?>
                <?php get_template_part('entry', 'testimonials-front'); ?>


                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

        </div>

        <div class="clients">
            <h1>Happy Clients</h1>
            <div class="the-happy">
                <?php if ($client_q->have_posts()) :
                    while ($client_q->have_posts()) :
                        $client_q->the_post(); ?>

                <div class="client">

                    <?php the_post_thumbnail(); ?>


                </div>





                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </section>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



    <?php if (comments_open() && !post_password_required()) {
                comments_template('', true);
            } ?>
    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>