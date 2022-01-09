<?php get_header(); ?>
<section class="container-fluid">
    <?php
    while(have_posts()) {
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php
    } ?>
</section>

<?php get_footer(); ?>