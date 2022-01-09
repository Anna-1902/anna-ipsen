 <?php
    /*
Template Name: Projekter
*/
    ?>
 
 <?php get_header(); ?>

 <main class="flex">
     <h1>Portfolio</h1>
     <h2><?php echo get_the_title(); ?></h2>

 <?php
$loop = new WP_Query( array(
    'post_type' => 'projekter',
    'posts_per_page' => -1
  )
);
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  
<div class="project_div" >
         <img src="<?php the_field('project_picture'); ?>" alt="" class="">
         <h2><?php the_field('project_title'); ?></h2>
         <?php the_field('project_description'); ?>
         <div id="project_button">
             <a href="<?php the_field('live_button'); ?>">Se live</a>
             <a href="<?php the_field('github_button'); ?>">Se kode på Github</a>
         </div>

     </div>

<?php endwhile; wp_reset_query(); ?>
</main>
 <?php get_footer(); ?>