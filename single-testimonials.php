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



        </div>
        <div class="entry-content">

        </div>

    </article>
    <?php endwhile;
    endif; ?>

</main>
<?php get_footer(); ?>