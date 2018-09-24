<?php
/*
Template Name: Contacts
*/
?>

<?php get_header(); ?>
<title>Контакты Мастермерс</title>
<meta name="description" content="Телефон и адреса самовывоза и сервисов Мастермерс" />
<meta name="keywords" content="телефон, пункт самовывоза, мастермерс, адрес" />
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="container">
	<h1>Контакты</h1>
</section>

<section class="contacts">
  <div class="container">
    <div class="contacts__content">
      <div class="contacts__list list">
        <div class="list__item">
          <div class="list__item-icon list__item-icon--phone"></div>
          <h2 class="list__item-title h2"><a href="tel:+79256321506">+7 925 632 15 06</a></h2>
          <div class="list__item-description">Мы&nbsp;работаем каждый день, </br>с&nbsp;10:00 до&nbsp;20:00</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--border contacts">
  <div class="container">
    <div class="contacts__content">
			<div class="contacts__list list">

        <div class="list__item">
          <div class="list__item-icon list__item-icon--pin"></div>
          <div class="list__item-description">Алтуфьевское шоссе, 37, строение 33 </br>пн. &mdash;&nbsp;сб., 10:00&nbsp;&mdash; 19:00

						<div class="ul-title">Услуги</div>
						<ul class="ul">
							<li class="li">Самовывоз запчастей</li>
							<li class="li">Диагностика и&nbsp;калибровка Мерседес</li>
							<li class="li">Замена компрессоров пневмоподвески на&nbsp;любой авто</li>
						</ul>
					</div>
        </div>

      </div>
      <div class="contacts__map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A686c5baba94108e8f8e1ade7ee358895cd199a98a52f4e654a24e1347f1ce224&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=false"></script>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();
