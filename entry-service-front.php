<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="ind-services">
        <div class="logo">
            <img src="<?php the_field('icon') ?>" alt="">
        </div>
        <div class="service">
            <div class="title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                    rel="bookmark"><?php the_title(); ?></a>
            </div>
            <p class="description">
                <?php the_field('description') ?>
            </p>
        </div>

    </div>

    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary-service-front' : 'content')); ?>

</article>