    <div class="col-sm-3">
      <div class="sidebar-module">
        <h4>About</h4>
        <p><?php the_author_meta( 'display_name' ); ?> </p>
        <p><?php the_author_meta( 'user_email' ); ?> </p>
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
<!-- /.blog-sidebar -->