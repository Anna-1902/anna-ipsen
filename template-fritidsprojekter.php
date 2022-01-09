 <?php 
/*
Template Name: Fritidsprojekter
*/
?>

<?php get_header(); ?>

<main class="flex_column">
        <h1><?php echo get_the_title(); ?></h1>
        <?php echo get_the_content(); ?>
    </main>

<?php get_footer(); ?>
