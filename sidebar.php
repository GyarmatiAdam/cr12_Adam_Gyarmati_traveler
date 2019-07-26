<div class="col-sm-3">
  <div class="sidebar-module">
    <h4>About</h4>
    <p><?php the_author_meta( 'description' ); ?> </p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol>
        <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
      <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'home_right_1' ); ?>
      </div><!-- #primary-sidebar -->
    <?php endif; ?>
  </div>
</div>
<!-- /.blog-sidebar -->