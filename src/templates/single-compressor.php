<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>

<section>
  <div class="container">
    <h1 class="archive-title">Компрессоры для <?php the_title() ?></h1>
  </div>
</section>


<section class="section--border">
  <div class="container">

  </div>
</section>

<?php get_footer(); ?>
