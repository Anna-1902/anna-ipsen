<?php
/*
Template Name: Profil
*/
?>

<?php get_header(); ?>

<main class="flex">
    <h1>
        <?php echo get_the_title(); ?>
    </h1>
        <?php echo get_the_content(); ?>
</main>

<?php get_footer(); ?>