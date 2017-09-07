<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>

<section class="container">
  <h1 class="archive-title"><?php the_title() ?></h1>
</section>

<section class="details container">
  <div class="details__left">
    <div class="description">Lorem Ipsum Dolor Sit Amet</div>
    <div class="price">5000 ₽</div>
  </div>

  <div class="details__right">
    <div class="gallery"></div>
  </div>
</section>

<?php get_footer(); ?>
