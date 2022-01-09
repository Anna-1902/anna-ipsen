 <?php 
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>

<main class="flex">
    <?php echo get_the_content(); ?> 
    <article class="articleKontakt">
        <?php echo the_field('contact_field'); ?>
    </article>
        <article class="articleImgKontakt">
            <img src="<?php the_field('contact_image'); ?>" alt="Anna" class="imgProfil">
        </article>
</main>

<?php get_footer(); ?>
