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

<section class="container part-details">

  <div class="half">
    <?php
    $price = get_field( "price" );
    $priceFrom = get_field("price-from");
    $class = "price";
    if ($priceFrom) { $class .= ' price--from'; };

    if ( $price ) { echo '<div class="'.$class.'">'.get_post_meta( get_the_ID(), "price", true).' ₽</div>';  } else {  } ?>
    <?php $description = get_field( "description" );
    if ( $description ) { echo '<p class="description">'.get_post_meta( get_the_ID(), "description", true).'</p>';  } else {  } ?>
    <h3 class="how-to-buy"><a href="/dostavka-i-oplata">Доставка и оплата</a></h3>
    <p>По Москве — 390 ₽</br> По России — 400 ₽</br> Самовывоз — бесплатно</p>
  </div>


  <div class="half">
    <div class="gallery fotorama" data-nav="thumbs" data-allowfullscreen="true">
      <?php
      $images = get_field('images');
      if( $images ):
      foreach( $images as $image ): ?>
          <a href="<?php echo $image['sizes']['large']; ?>">
            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php the_title() ?>" />
          </a>
      <?php endforeach;
      endif; ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>
