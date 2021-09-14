<div class="entry-summary">
    <?php if ((has_post_thumbnail()) && (!is_search())) : ?>
    <div class="blog-img" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <span class="blog-text" itemprop="description"><?php the_excerpt(); ?></span>
    <?php if (is_search()) { ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
    <?php } ?>
</div>