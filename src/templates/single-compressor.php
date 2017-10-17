<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>

<section class="container">
  <h1 class="archive-title">Компрессор для <?php the_title() ?></h1>
</section>

<section class="container part-details">

  <div class="half">
    <?php $price = get_field( "price-exchange" );
    if ( $price ) { echo '<div class="price">'.get_post_meta( get_the_ID(), "price-exchange", true).'
    ₽</div>';  } else {  } ?>
    <?php $price_without = get_field( "price-without-exchange" );
    if ( $price_without ) { echo '<div class="price-desc">Цена без обмена старого компрессора на новый — '.get_post_meta( get_the_ID(), "price-without-exchange", true).' ₽</div>';  } else {  } ?>
    <h3 class="how-to-buy">Номер запчасти</h3>
    <?php $number = get_field( "number" );
    if ( $number ) { echo '<div class="detail-numbers">'.get_post_meta( get_the_ID(), "number", true).'</div>';  } else {  } ?>
    <h3 class="how-to-buy">Доставка и оплата</h3>
    <p>Вы можете забрать товар самовывозом или оплатить доставку. Так же, мы доставляем товары по всей России. <a href="/dostavka-i-oplata">Подробнее</a></p>
  </div>


  <div class="half">
    <div class="gallery fotorama" data-nav="thumbs" data-allowfullscreen="true">
      <?php
      $images = get_field('photos');
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
