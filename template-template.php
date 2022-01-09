<?php 
/*
Template Name: Template
*/
?>
<!-- Skabelon til at lave en skabelon - hæhæ -->
<?php get_header(); ?>

<article id="helloThere">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Siden har intet indhold.</p>
<?php endif; ?>
</article>
<?php get_footer(); ?>
