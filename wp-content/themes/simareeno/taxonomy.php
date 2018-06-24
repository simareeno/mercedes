<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>



<h1 class="archive-title"><?php single_cat_title() ?> для Мерседес</h1>

<section class="section--border">
  <div class="container">

  </div>
</section>

<?php get_footer(); ?>
