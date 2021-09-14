<?php get_header(); ?>

<h1>hello index.php</h1>
<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('entry'); ?>
    <?php comments_template(); ?>
    <?php endwhile;
    endif; ?>
    <?php get_template_part('nav', 'below'); ?>
</main>
<?php get_footer(); ?>