<div class="shadow-lg p-3 mb-5 bg-white rounded post">
<h2><?php the_title(); ?></h2>
<p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
<?php the_content();?> 
<?php if ( comments_open() || '0' != get_comments_number() ) {
    comments_template();
} 
comment_form(); ?> 
</div><br><br>