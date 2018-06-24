<?php get_header(); ?>
<title><?php
$price = get_field( "price" );
$priceFrom = get_field("price-from");
$priceDescription = get_field("price_description");
$description = get_field("description");
$number = get_field( "number" );
echo the_title();
echo ' Мерседес от ';
echo $price;
echo ' ₽';
?></title>
<meta name="description" content="Купить <?php mb_strtolower(the_title()) ?> на Мерседес от <?php echo $price ?> в каталоге запчастей в разборке Мерседес в Москве и России"/>
<meta name="keywords" content="<?php the_title() ?>, запчасть мерседес, цена <?php the_title() ?>, купить <?php the_title() ?>, каталог запчастей, разборка мерседес" />
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="breadcrumbs">
  <div class="container">
    <?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
  </div>
</section>

<div itemscope itemtype="http://schema.org/Product">
<section class="container">
  <h1 class="archive-title" itemprop="name"><?php the_title() ?></h1>
</section>

<section class="container part-details">

  <div class="half">

    <div class="price-block">
      <?php $class = "price";
      if ($priceFrom) { $class .= ' price--from'; };
      if ( $price ) {
      echo '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <meta itemprop="price" content="'.get_post_meta( get_the_ID(), "price", true).'">
        <meta itemprop="priceCurrency" content="RUB">
        <div class="'.$class.'">'.get_post_meta( get_the_ID(), "price", true).' ₽</div>
      </div>';  } else {  } ?>

      <?php
      if ( $priceDescription ) {
      echo '<div class="price-description">'
        .get_post_meta( get_the_ID(), "price_description", true).'
        </div>'; } else {  } ?>
    </div>

      <a href="tel:+79256321506" class="button button--secondary button--size-xl">
        +7 925 632 15 06
      </a>

      <?php
        if ( $number ) {
          echo '<h3 class="how-to-buy">Номер запчасти</h3>';
          echo '<div class="detail-numbers">'.get_post_meta( get_the_ID(), "number", true).'</div>';
        } else {  }
      ?>
  </div>


  <div class="half">
    <div class="gallery fotorama" data-nav="thumbs" data-maxheight="600" data-allowfullscreen="true">
      <?php
      $images = get_field('images');
      if( $images ):
      foreach( $images as $image ): ?>
          <a href="<?php echo $image['sizes']['large']; ?>">
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title() ?>" itemprop="image"/>
          </a>
      <?php endforeach;
      endif; ?>
    </div>
  </div>

</section>

<section class="container section--border">
    <?php
      if ( $description ) { echo '<h3>Описание товара</h3><p class="description" itemprop="description">'.get_post_meta( get_the_ID(), "description", true).'</p>';  } else {
        echo '<meta itemprop="description" content="Купить запчасть '.get_the_title().' для Мерседес на разборке в Москве и в России">';
      }
    ?>
    <h3 class="how-to-buy"><a href="/dostavka-i-oplata">Доставка и оплата</a></h3>
    <p>По Москве — 390 ₽</br> По России — 400 ₽</br> Самовывоз — бесплатно</p>
</section>

<section class="pickup">
  <div class="container">

    <div class="list">
      <div class="list__item">
        <div class="list__item-icon list__item-icon--pin"></div>
        <h3 class="h3 list__item-title">Пункт самовывоза</h3>
        <div class="list__item-description">м. Тропарёво, Академика Варги, 28. пн. &mdash;&nbsp;сб., 10:00&nbsp;&mdash; 20:00</div>
      </div>
    </div>

    <div class="pickup__map map">
      <div class="map__desktop">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2190867961162972bfd8445bbf5779fb04ac4094f736e1edaab2a5375a376c48&amp;width=100%&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>
      <a class="map__touch" href="https://yandex.ru/maps/?um=constructor%3A2190867961162972bfd8445bbf5779fb04ac4094f736e1edaab2a5375a376c48&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A2190867961162972bfd8445bbf5779fb04ac4094f736e1edaab2a5375a376c48&amp;height=350&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
    </div>

  </div>
</section>

<section class="call">
  <div class="container">
  <h3 class="call__phone">
      <a href="tel:+79256321506">+7 925 632 15 06</a>
  </h3>
  <div class="call__desc">Мы работаем каждый день, с&nbsp;10:00&nbsp;до&nbsp;20:00</div>
</div>
</section>

<?php get_footer(); ?>
