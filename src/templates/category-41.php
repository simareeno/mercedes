<!-- Запчасти -->

<?php get_header(); ?>
<title>Запчасти Мерседес. Каталог запчастей, разборка Мерседес</title>
<meta name="description" content="Купить бу запчасти Мерседес на разборке в каталоге запчастей в Москве и по России" />
<meta name="keywords" content="запчасти мерседес, разборка мерседес, каталог запчастей, бу запчасти на мерседес, авторазбор мерседес, разбор мерседес, мастермерс" />
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
<h1 class="archive-title"><?php single_cat_title() ?> для Мерседес</h1>
<?php endif; ?>

</section>

<section class="cars">
  <div class="container">

    <?php

    $args = array(
	'type'         => 'post',
	'child_of'     => $catgoryID,
	'parent'       => $catgoryID,
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 0,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'taxonomy'     => 'category',
	'pad_counts'   => false,
);
$categories = get_categories($args );
if( $categories ){
	foreach( $categories as $cat ) {
	    $imageUrl = z_taxonomy_image_url($cat->term_id, array(200, 150));
	    $catID = get_category_link( $cat->cat_ID );
	    echo '<div class="car">';
	    echo '<a class="car__link" href="' . $catID . '">';
	    echo '<img class="car__image" src="' . $imageUrl . '" />';
	    echo '<div class="car__name">'. $cat->name . '</div>';
	    echo '</a>';
	    echo '</div>';
	}
}
    ?>
  </div>
</section>

<?php get_footer(); ?>
