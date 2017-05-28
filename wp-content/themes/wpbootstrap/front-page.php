<?php get_header(); ?>

	<?php query_posts('cat=1'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<h4><?php the_title(); ?></h4>
		<h5><?php the_content(); ?></h5>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>


<?php wp_reset_query(); ?>