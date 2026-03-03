<?php
/*
Template Name: Single
*/
?>
<?php
// LOOP
?>

<?php while(have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

    <h2><?php the_title(); ?></h2>
    
    <div>
      <?php the_content(); ?>
    </div>

  </article>
<?php endwhile; ?>