<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 text-justify">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
		</div><br><br><hr>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>