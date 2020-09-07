<?php get_header(); ?>

<div class="container-404">
  <h2 class="page-heading">404 Page Not Found</h2>
  <img src="http://source.unsplash.com/640x480/?cats">

  <h3>Sorry, the page you are looking for cannot be found. Try the following links.</h3>

  <ul>
    <li><a href="<?php echo site_url('/blog'); ?>">Blog List</a></li>
    <li><a href="<?php echo site_url('/projects'); ?>">Projects List</a></li>
    <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
    <li><a href="<?php echo site_url(''); ?>">Home Page</a></li>
  </ul>
</div>

<?php get_footer(); ?>