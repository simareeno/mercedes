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
        Позвонить и заказать
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
      if ( $description ) { echo '<h3>Доставка и оплата</h3><p class="description" itemprop="description">'.get_post_meta( get_the_ID(), "description", true).'</p>';  } else {
        echo '<meta itemprop="description" content="Купить запчасть '.get_the_title().' для Мерседес на разборке в Москве и в России">';
      }
    ?>
    <h3 class="how-to-buy"><a href="/dostavka-i-oplata">Доставка и оплата</a></h3>
    <p>По Москве — 390 ₽</br> По России — 400 ₽</br> Самовывоз — бесплатно</p>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A686c5baba94108e8f8e1ade7ee358895cd199a98a52f4e654a24e1347f1ce224&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
</section>

</div>

<?php get_footer(); ?>
