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
    <div class="price-block">
      <?php $class = "price";
      if ($priceFrom) { $class .= ' price--from'; };
      if ( $price ) {
      echo '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <meta itemprop="price" content="'.get_post_meta( get_the_ID(), "price-exchange", true).'">
        <meta itemprop="priceCurrency" content="RUB">
        <div class="'.$class.'">'.get_post_meta( get_the_ID(), "price-exchange", true).' ₽</div>
      </div>';  } else {  } ?>

      <?php
        $price_without = get_field( "price-without-exchange" );
        if ( $price_without ) { echo '<div class="price-description">Без обмена старого компрессора на новый — '.get_post_meta( get_the_ID(), "price-without-exchange", true).' ₽</div>';  } else {  }
      ?>
    </div>

    <a href="tel:+79256321506" class="button button--secondary button--size-xl">
      +7 925 632 15 06
    </a>

    <h3>Гарантия</h3>
    <p>6&nbsp;месяцев. Срок эксплуатации после полугода ограничивается состоянием самой пневматической подвески. При её&nbsp;целостности и&nbsp;исправности компрессор исправно проработает 2-3&nbsp;года.</p>

    <h3 class="how-to-buy">Номер запчасти</h3>
    <?php $number = get_field( "number" );
    if ( $number ) { echo '<div class="detail-numbers">'.get_post_meta( get_the_ID(), "number", true).'</div>';  } else {  } ?>

  </div>


  <div class="half">
    <div class="gallery fotorama" data-nav="thumbs" data-maxheight="600" data-allowfullscreen="true">
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

<section class="container section--border">
    <?php
      if ( $description ) { echo '<h3>Доставка и оплата</h3><p class="description" itemprop="description">'.get_post_meta( get_the_ID(), "description", true).'</p>';  } else {
        echo '<meta itemprop="description" content="Купить запчасть '.get_the_title().' для Мерседес на разборке в Москве и в России">';
      }
    ?>
    <h3 class="how-to-buy"><a href="/dostavka-i-oplata">Доставка и оплата</a></h3>
    <p>По Москве — 390 ₽</br> По России — 400 ₽</br> Самовывоз — бесплатно</p>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2f20c712d1c4b04564b752a9c7bed9acff25cbe00f398d22be83390c74f9c72f&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
</section>

<?php get_footer(); ?>
