<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_post_thumbnail('medium'); ?>
  <p><?php the_excerpt(); ?></p>
</article>
