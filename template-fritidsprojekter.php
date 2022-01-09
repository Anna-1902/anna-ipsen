 <?php 
/*
Template Name: Fritidsprojekter
*/
?>

<?php get_header(); ?>

<main class="flex_column">
<h1>Portfolio</h1>
        <h2><?php echo get_the_title(); ?></h2>
        <?php echo get_the_content(); ?>
    </main>

<?php get_footer(); ?>
