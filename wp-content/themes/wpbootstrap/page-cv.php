<?php get_header(); ?>

<div class="row">
    <div class="span8">
        <h2>Yrken</h2>
        <?php query_posts('cat=2'); ?>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="span4">
            <?php echo get_field('jobb_name'); ?>
            <?php echo get_field('jobb_time'); ?>
            <?php echo get_field('jobb_info'); ?>
        </div>
    	<?php endwhile; else: ?>
		<p><?php _e('Det gick inte att hitta några inlägg'); ?></p>
	    <?php endif; ?>
    </div>

    <div class="span4">
        <h2>Utbildningar</h2>
        <?php query_posts('cat=2'); ?>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="span4">
            <?php echo get_field('edu_name'); ?>
            <?php echo get_field('edu_time'); ?>
            <?php echo get_field('edu_info'); ?>
        </div>
    	<?php endwhile; else: ?>
		<p><?php _e('Det gick inte att hitta några inlägg'); ?></p>
	    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>