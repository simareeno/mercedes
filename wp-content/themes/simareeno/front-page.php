<?php get_header(); ?>
<title>Запчасти Мерседес. Разборка, каталог запчастей, диагностика и ремонт Мерседес</title>
<meta name="description" content="Купить бу запчасти на Мерседес на разборке. Ремонт и диагностика Мерседес" />
<meta name="keywords" content="запчасти мерседес, разборка мерседес, каталог запчастей, бу запчасти на мерседес, ремонт мерседес, авторазбор мерседес, разбор мерседес, мастермерс, mercedes, диагностика мерседес, компрессоры мерседес" />
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="front-banner">
  <div class="container">
  <div class="front-banner__title">
  <img src="/resources/images/front-title.png" alt="Дешевые запчасти и сервис  для вашего Mercedes-Benz" srcset="/resources/images/front-title.png 1x, /resources/images/front-title@2x.png 2x, /resources/images/front-title@3x.png 3x">
  </div>
  <div class="front-banner__image">
  <img src="/resources/images/black-mercedes.jpg" alt="Дешевые запчасти и сервис  для вашего Mercedes-Benz">
  </div>
  <div class="front-banner__background"></div>
  </div>
</section>

<!-- <section class="catalog">
  <div class="container">
    <h2><a href="zapchasti">Каталог запчастей</a></h2>
    <?php
    $categories = get_the_category();
    $topcats = array();
    foreach ($categories as $cat) {
    if ($cat->parent != 0) $cat = get_term($cat->parent, 'category');
      $topcats[$cat->term_id] = '<a href="/zapchasti/' . $cat->slug . '">' . $cat->name . '</a>';
    }
    echo implode(', ', $topcats);
    ?>
  </div>
</section> -->

<section class="seo">
  <div class="container">
    <h1 class="h2"><a href="/zapchasti/">Запчасти Мерседес</a></h1>
    <div class="seo-text">
    <p>Самое главное в&nbsp;подборе и&nbsp;покупке новой или б/у запчасти&nbsp;&mdash; диагностика автомобиля. У&nbsp;нас вы&nbsp;можете сделать компьютерную диагностику дилерским сканером &laquo;Star Diagnosis&raquo;. А&nbsp;потом приобрести любые запчасти для Мерседес. Мы&nbsp;разбираем автомобили привезенные из&nbsp;Европы, ОАЭ и&nbsp;РФ.</p>
    <p>В&nbsp;нашем каталоге запчастей вы&nbsp;можете посмотреть примерные цены на&nbsp;запчасти. Если вы&nbsp;не&nbsp;нашли чего искали&nbsp;&mdash; звоните, мы&nbsp;найдём нужную деталь.</p>
    <h3><a href="/kompressori/">Компрессоры</a></h3>
    <p>Мы&nbsp;профессионально восстанавливаем компрессоры на&nbsp;все марки авто на&nbsp;специальном оборудовании. По&nbsp;характеристикам компрессоры равны новым.</p>
    <h3><a href="/dostavka-i-oplata/">Доставка</a></h3>
    <p>Мы&nbsp;доставим вам запчасти в&nbsp;Москве за&nbsp;сутки. Также вы&nbsp;можете забрать запчасти в&nbsp;пунтктах самовывоза.</p>
    </div>
  </div>
</section>

<section class="section--border contacts">
  <div class="container">
    <h2><a href="contacts">Контакты</a></h2>

    <div class="contacts__content">

      <div class="contacts__list list">
        <div class="list__item">
          <div class="list__item-icon list__item-icon--phone"></div>
          <h3 class="h3 list__item-title"><a href="tel:+79256321506">+7 925 632 15 06</a></h3>
          <div class="list__item-description">Мы&nbsp;работаем каждый день, </br>с&nbsp;10:00 до&nbsp;20:00</div>
        </div>

        <div class="list__item">
          <div class="list__item-icon list__item-icon--pin"></div>
          <h3 class="h3 list__item-title">Мастерская и&nbsp;склад</h3>
          <div class="list__item-description">Алтуфьевское шоссе, 37, строение 33  </br>пн. &mdash;&nbsp;сб., 10:00&nbsp;&mdash; 19:00</div>
        </div>

        <div class="list__item">
          <div class="list__item-icon list__item-icon--pin"></div>
          <h3 class="h3 list__item-title">Сервис в&nbsp;Солнцево</h3>
          <div class="list__item-description">Производственная ул., 23&nbsp;стр.10</br>
    пн. &mdash;&nbsp;сб., 10:00&nbsp;&mdash; 19:00</div>
        </div>

        <div class="list__item">
          <div class="list__item-icon list__item-icon--pin"></div>
          <h3 class="h3 list__item-title">Сервис в&nbsp;Балашихе</h3>
          <div class="list__item-description">Шоссе энтузиастов, владение 8а</br>
    пн. &mdash;&nbsp;сб., 10:00&nbsp;&mdash; 19:00</div>
        </div>
      </div>
      <div class="contacts__map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aac436a37a1ba5398940f8b0af4a4df8a34bcc03ed335dea44dd6de2ea1b63369&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();
