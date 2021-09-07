<div class="entry-summary">

    <span itemprop="description"><?php the_excerpt(); ?></span>
    <?php if (is_search()) { ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
    <?php } ?>
</div>