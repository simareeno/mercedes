<?php get_header(); ?>
<title><?php
$price = get_field( "price-exchange" );
$priceFrom = get_field("price-from");
echo 'Компрессор ';
echo the_title();
echo ' от ';
echo $price;
echo ' ₽';
?></title>
<meta name="description" content="Купить компрессор <?php mb_strtolower(the_title()) ?> от <?php echo $price ?> в каталоге запчастей в разборке в Москве и России"/>
<meta name="keywords" content="компрессор <?php the_title() ?>, запчасть <?php the_title() ?>, цена компрессора <?php the_title() ?>, купить компрессор <?php the_title() ?>, каталог запчастей, купить компрессор" />
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
    <?php
    $class = "price";
    if ($priceFrom) { $class .= ' price--from'; };

    if ( $price ) { echo '<div class="'.$class.'">'.get_post_meta( get_the_ID(), "price-exchange", true).'
    ₽</div>';  } else {  } ?>

    <?php $price_without = get_field( "price-without-exchange" );
    if ( $price_without ) { echo '<div class="price-desc">Без обмена старого компрессора на новый — '.get_post_meta( get_the_ID(), "price-without-exchange", true).' ₽</div>';  } else {  } ?>

    <h3 class="how-to-buy">Номер запчасти</h3>
    <?php $number = get_field( "number" );
    if ( $number ) { echo '<div class="detail-numbers">'.get_post_meta( get_the_ID(), "number", true).'</div>';  } else {  } ?>

    <h3 class="how-to-buy"><a href="/dostavka-i-oplata">Доставка и оплата</a></h3>
    <p>По Москве — 390 ₽</br> По России — 400 ₽</br> Самовывоз — бесплатно</p>

    <h3>Гарантия</h3>
    <p>6&nbsp;месяцев. Срок эксплуатации после полугода ограничивается состоянием самой пневматической подвески. При её&nbsp;целостности и&nbsp;исправности компрессор исправно проработает 2-3&nbsp;года.</p>
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
