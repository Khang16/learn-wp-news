<?php get_header(); ?>

<main>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('template-parts/content', 'post'); ?>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Không có bài viết nào.</p>
  <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
