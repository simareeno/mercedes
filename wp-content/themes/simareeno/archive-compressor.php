<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>

<section class="container">

<?php
$category = get_category( get_query_var( 'cat' ) );
$catgoryID = $category->cat_ID;
$child = get_category($catgoryID);
$parent = $child->parent;
$parent_name = get_category($parent);
$parent_name = $parent_name->name;

// echo get_ancestors( $categoryID, 'category' );

if ($parent_name == 'Запчасти') : ?>
<h1 class="archive-title">Запчасти для Мерседес <?php single_cat_title() ?></h1>
<?php else : ?>
<h1 class="archive-title">Компрессоssры</h1>
<?php endif; ?>

</section>

<?php get_footer(); ?>
