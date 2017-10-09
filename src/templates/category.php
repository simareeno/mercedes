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
<h1 class="archive-title"><?php single_cat_title() ?> для Мерседес</h1>
<?php endif; ?>

</section>

<section>
  <div class="container">

    <?php

    if (is_category()) {
    $this_category = get_category($cat);
    if ('' != get_category_children($this_category->cat_ID)) {
        echo '<ul class="categories">';
        $args = array(
            'orderby' => 'name',
            'show_count' => 0,
            'title_li' => '',
            'depth' => 1,
            'hide_empty' => true,
            'use_desc_for_title' => 0,
            'child_of' => $this_category->cat_ID,
            'walker' => new Custom_Walker_Category(),
        );
        wp_list_categories($args);
        echo '</ul>';
        }
    }
    ?>
    <!-- <?php
      wp_list_categories( array(
        'orderby'            => 'id',
        'show_count'         => 1,
        'use_desc_for_title' => false,
        'child_of'           => $cat,
        'depth'              => 0,
        'title_li'           => '',
        'hide_empty'         => true,
        'show_option_none'   => false,
        'style'              => 'none'
      ) ); ?> -->
  </div>
</section>

<section class="section--border">
  <div class="container">
    <?php if ( have_posts()  ) : ?>

      <ul class="parts-list">
        <?php
        $args_pr = array(
        	'post_type'        => 'post',
          'category'         => $catgoryID,
          'posts_per_page'   => -1,
          'orderby'          => 'name',
	        'order'            => 'ASC',
        	'post_status'      => 'publish');
        	$myposts_pr = get_posts( $args_pr );

        foreach ( $myposts_pr as $post ) : setup_postdata( $post ); ?>

        <li class="parts-list__item part">
          <a class="part__link" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <div class="part__link-title"><?php the_title(); ?></div>
            <?php echo '<div class="part__link-price">от '.get_post_meta( get_the_ID(), "price", true).' ₽</div>'; ?>
          </a>
        </li>

        <?php endforeach; wp_reset_postdata();?>
      </ul>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
