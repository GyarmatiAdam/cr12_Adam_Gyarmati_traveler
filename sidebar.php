<div class="col-sm-3">
      <div class="sidebar-module">
        <div class="text-center">
          <h3><?php the_author_meta( 'display_name' ); ?> </h3>
          <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
          <p><?php the_author_meta( 'user_email' ); ?> </p>
        </div>
      </div>
      <div class="sidebar-module">
        <h4>Archives</h4>
        <ol>
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
      </div>
      <div class="sidebar-module">
        <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'home_right_1' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>