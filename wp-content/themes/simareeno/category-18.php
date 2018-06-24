<?php get_header(); ?>
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
    <div class="mark">
      <div class="mark__logo"><a href="/kompressori/audi/"><img src="/resources/images/mercedes-logo.png" alt=""></a></div>
      <div class="list">
        <a href=""><div class="list__item">Audi A6 Allroad 2000-2006</div></a>
        <a href=""><div class="list__item">Audi Allroad 2007-2010</div></a>
        <a href=""><div class="list__item">Audi A8</div></a>
        <a href=""><div class="list__item">Audi Q7</div></a>
      </div>
    </div>

    <div class="mark">
      <div class="mark__logo"><img src="/resources/images/audi-logo.png" alt=""></div>
      <div class="list">
        <a href=""><div class="list__item">Audi A6 Allroad 2000-2006</div></a>
        <a href=""><div class="list__item">Audi Allroad 2007-2010</div></a>
        <a href=""><div class="list__item">Audi A8</div></a>
        <a href=""><div class="list__item">Audi Q7</div></a>
      </div>
    </div>

    <div class="mark">
      <div class="mark__logo"><img src="/resources/images/lr-logo.png" alt=""></div>
      <div class="list">
        <a href=""><div class="list__item">Audi A6 Allroad 2000-2006</div></a>
        <a href=""><div class="list__item">Audi Allroad 2007-2010</div></a>
        <a href=""><div class="list__item">Audi A8</div></a>
        <a href=""><div class="list__item">Audi Q7</div></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
