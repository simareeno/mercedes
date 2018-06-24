<?php
/*
Template Name: Delivery
*/
?>

<?php get_header(); ?>
<title>Доставка и оплата в Мастермерс</title>
<meta name="description" content="Узнайте об оплате, самовывозе и доставке по Москве и России." />
<meta name="keywords" content="доставка, оплата, самовывоз, мастермерс, транспортная компания, стоимость, бесплатно" />
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="container">
	<h1>Доставка и оплата</h1>
</section>

<section>
  <div class="container">
    <h3>Самовывоз</h3>
    <p>Самовывоз бесплатно.</p>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A686c5baba94108e8f8e1ade7ee358895cd199a98a52f4e654a24e1347f1ce224&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
    <h3>По Москве</h3>
    <p>Доставка по Москве — до 5 кг, 390 ₽.</p>
    <h3>По России</h3>
    <p>Доставка по России транспортной компанией, от 400 ₽.</p>
    <h3>Оплата</h2>
    <p>Можно оплатить наличными, или перевести деньги на карту.</p>
  </div>
</section>

<?php
get_footer();
