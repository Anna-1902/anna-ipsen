 <?php 
/*
Template Name: Fritidsprojekter
*/
?>

<?php get_header(); ?>

<main class="flex_column">
<h1>Portfolio</h1>
<?php
        wp_nav_menu(array(
            'theme_location'    => 'undernavigation',
            'container_class' => 'custom-menu-class'
        ));
        ?>
        <section>
            <?php echo get_the_content(); ?>
        </section>
    </main>

<?php get_footer(); ?>
