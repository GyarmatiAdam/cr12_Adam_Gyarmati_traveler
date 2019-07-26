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
  </div>
</div>
<!-- /.blog-sidebar -->