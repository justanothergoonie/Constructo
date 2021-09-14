<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_singular()) {
        echo '<h1 class="entry-title" itemprop="headline">';
    } ?>
    <h1 class="title" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></h1>
    <?php if (is_singular()) {
        echo '</h1>';
    }  ?>


    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary-post' : 'content-post')); ?>
    <?php if (is_singular()) {
        get_template_part('entry-footer');
    } ?>
</article>