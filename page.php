<?php get_header(); ?>
    <?php
    while(have_posts()) {
        the_post(); ?>
        <!-- <h2><?php the_title(); ?></h2> -->
        <main>
        <?php the_content(); ?>
        </main>
        <?php
    } ?>
<?php get_footer(); ?>