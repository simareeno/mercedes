<!-- Компрессоры -->

<?php get_header(); ?>
<title>Купить автомобильный компрессор</title>
<meta name="description" content="Купить компрессор на Мерседес, Ауди, БМВ, Фольксваген, Порше и Ленд Ровер" />
<meta name="keywords" content="компрессоры, купить компрессор, мерседес, ауди, бмв, фольксваген, порше, ленд ровер, автомобильный компрессор" />
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>

<section class="container">
  <h1 class="archive-title"><?php single_cat_title() ?></h1>
</section>

<section>
  <div class="container">
  <p>Мы&nbsp;профессионально восстанавливаем компрессоры на&nbsp;все марки авто на&nbsp;специальном оборудовании. По&nbsp;характеристикам компрессоры равны новым.</p>
  </div>
</section>

<section class="marks">
  <div class="container">

    <?php

    $category = get_category( get_query_var( 'cat' ) );
    $catgoryID = $category->cat_ID;
    $child = get_category($catgoryID);
    $parent = $child->parent;
    $parent_name = get_category($parent);
    $parent_name = $parent_name->name;

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
    if ( $categories ) {
    foreach( $categories as $cat ) {
      $imageUrl = z_taxonomy_image_url($cat->term_id, array(200, 150));
      $cat_link = get_category_link( $cat->cat_ID );
      $cat_ID = $cat->cat_ID;
      echo '<div class="mark">';
      echo '<div class="mark__logo">';
      echo '<a class="mark__link" href="' . $cat_link . '">';
      echo '<img src="' . $imageUrl . '" />';
      echo '</div>';
      echo '</a>';
      ?>

      <div class="list">
      <?php
        $args_pr = array(
          'post_type'        => 'post',
          'category'         => $cat_ID,
          'posts_per_page'   => -1,
          'orderby'          => 'name',
          'order'            => 'ASC',
          'post_status'      => 'publish');
        $myposts_pr = get_posts( $args_pr );

        foreach ( $myposts_pr as $post ) : setup_postdata( $post ); ?>

          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <div class="list__item"><?php the_title(); ?></div>
          </a>

        <?php endforeach; wp_reset_postdata();?>
      </div>

      <?php

      echo '</div>';
    }
  }
    ?>

  </div>
</section>

<?php get_footer(); ?>
