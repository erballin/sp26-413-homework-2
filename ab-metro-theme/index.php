<!-- = REQUIREMENTS = 
index.php — must implement a full WordPress Loop displaying: post title linked via get_permalink(), post date, excerpt, and featured image with a has_post_thumbnail() check; include a "no posts" fallback message
-->

<?php get_header(); ?>

<main id="main">
  <?php
  if (have_posts()):
    while (have_posts()) : the_post();
  ?>

      <article <?php post_class(); ?>>

        <h2><?php the_title(); ?></h2>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>

      <?php endwhile; ?>
    <?php else: ?>
      <?php echo '<p>No content found</p>'; ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>