<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>

        <div class="quote">
            <p>
                <?php the_field('quote') ?>
            </p>
        </div>
        <div class="client">
            <div class="headshot">
                <img src="<?php $headshot = the_field('headshot'); ?>" alt="">
            </div>
            <div class="name">
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
                <span><?php the_field('job_title') ?></span>
            </div>


        </div>








    </header>
    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>

</article>