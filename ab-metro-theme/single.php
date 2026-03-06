<!-- = REQUIREMENTS = 
single.php — must display full post content using a Loop, with post title as <h1>, full content via the_content(), author, and date
-->

<?php
/*
Template Name: Single
*/
?>

<?php get_header(); ?>


<?php
// LOOP
while (have_posts()) : the_post();
?>
  <div class="single">
    <article <?php post_class(); ?>>

      <h1><?php the_title(); ?></h1>

      <p class="date">
        By <?php the_author(); ?> | <?php the_date(); ?>
      </p>

      <div class="content">
        <?php the_content(); ?>
      </div>

    </article>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>