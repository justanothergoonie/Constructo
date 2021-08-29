<?php get_header(); ?>
<main id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                    rel="bookmark"><?php the_title(); ?></a>
            </h1>
        </header>
        <div class="entry-meta">
            <?php $testi = get_field('testimonial');
                    if (!empty($testi)) : ?>
            <?php print_r($testi->ID) ?>

            <br>
            <div class="testimonial">
                <h2> <?php echo $testi->post_title; ?></h2>
                <p>Testimonial: <?php echo get_field('quote', $testi->ID) ?></p>
                <span>Location: <?php echo get_field('job_title', $testi->ID) ?></span>
            </div>


            <?php endif; ?>
            <?php $image = get_field('icon');
                    if (!empty($image)) : ?>
            <img src='<?php echo $image['url'] ?>' alt="">

            <?php endif; ?>


        </div>
        <div class="entry-content">
            <?php if (has_post_thumbnail()) : ?>
            <a href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                    echo esc_url($src[0]); ?>"
                title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
            <?php endif; ?>

            <?php the_content(); ?>
            <hr>
            <?php the_excerpt() ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>

    </article>
    <?php endwhile;
    endif; ?>

</main>
<?php get_footer(); ?>