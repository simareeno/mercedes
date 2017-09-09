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
    <div class="gallery">
      <?php
      $images = get_field('images');
      if( $images ): ?>
      <?php foreach( $images as $image ): ?>
        <figure>
          <a href="<?php echo $image['url']; ?>" data-size="1024x768">
            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php the_title() ?>" />
          </a>
        </figure>
      <?php endforeach; ?>
    <?php endif; ?>
    </div>
  </div>


  <div class="half">
    <?php $description = get_field( "description" );
    if ( $description ) { echo '<div class="description">'.get_post_meta( get_the_ID(), "description", true).'</div>';  } else {  } ?>
    <?php $price = get_field( "price" );
    if ( $price ) { echo '<div class="price">'.get_post_meta( get_the_ID(), "price", true).' ₽</div>';  } else {  } ?>
  </div>


</section>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">

    <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
    </div>

    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <button class="pswp__button pswp__button--share" title="Share"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>

      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
