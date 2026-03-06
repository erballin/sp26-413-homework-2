<!-- = REQUIREMENTS = 
page.php or archive.php — must implement its own Loop appropriate to the template type using semantically correct HTML
-->

<?php get_header(); ?>

<main>
  <?php
  // PAGE LOOP
  while (have_posts()) : the_post();
  ?>
    <div class="page">


      <article <?php post_class(); ?>>

        <h1><?php the_title(); ?></h1>

        <section class="content">
          <?php the_content(); ?>
        </section>

      </article>
    </div>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>