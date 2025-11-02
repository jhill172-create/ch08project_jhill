<?php get_header(); ?>

<div class="content-area">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="entry-meta"><?php the_time('F j, Y'); ?></p>
      <div class="entry-content">
        <?php the_excerpt(); ?>
      </div>
    </article>
  <?php endwhile; else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
