<!-- = REQUIREMENTS = 
index.php — must implement a full WordPress Loop displaying: post title linked via get_permalink(), post date, excerpt, and featured image with a has_post_thumbnail() check; include a "no posts" fallback message
-->

<?php get_header(); ?>

<main id="main" class="cardMain">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class(); ?>>

        <h2>
          <a href="<?php echo get_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>

        <p class="date"><?php the_date(); ?></p>

        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>

        <?php the_excerpt(); ?>

      </article>

    <?php endwhile; ?>


  <?php else : ?>

    <p>No posts found.</p>

  <?php endif; ?>

</main>

<?php get_footer(); ?>