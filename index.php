<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 text-justify">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
				
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || '0' != get_comments_number() ) : comments_template();
			endif;
			endwhile; endif;
			?>
		</div><br><br>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>