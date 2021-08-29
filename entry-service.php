<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="serv">
        <div class="serv-img">
            <?php if ((has_post_thumbnail()) && (!is_search())) : ?>
            <a href="<?php the_permalink(); ?>"
                title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
            <?php endif; ?>
        </div>

        <div class="serv-info">
            <div class="serv-icon">
                <img src="<?php the_field('icon') ?>" alt="">
            </div>
            <div class="serv-text">
                <div class="serv-title">
                    <?php if (is_singular()) {
                        echo '<h1 class="entry-title" itemprop="headline">';
                    } else {
                        echo '<h2 class="entry-title">';
                    } ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                        rel="bookmark"><?php the_title(); ?></a>
                    <?php if (is_singular()) {
                        echo '</h1>';
                    } else {
                        echo '</h2>';
                    } ?>
                </div>
                <div class="serv-desc">
                    <p>
                        <?php the_field('description') ?>
                    </p>
                </div>
            </div>


        </div>

    </div>







    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary-service' : 'content')); ?>
    <?php if (is_singular()) {
        get_template_part('entry-footer');
    } ?>
</article>