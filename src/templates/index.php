<?php get_header(); ?>

<body>

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

<section class="container">
	<div class="h1"><a href="parts">Каталог запчастей</a></div>
	<?php
	$categories = get_the_category();
	$topcats = array();
	foreach ($categories as $cat) {
		if ($cat->parent != 0) $cat = get_term($cat->parent, 'category');
		$topcats[$cat->term_id] = '<a href="/' . $cat->slug . '">' . $cat->name . '</a>';
	}
	echo implode(', ', $topcats);
	?>
</section>

<section class="container">
	<h1>Запчасти Мерседес</h1>
	<div class="seo-text">
		<p>У&nbsp;нас вы&nbsp;можете купить любые запчасти для Мерседес. Мы&nbsp;продаём бу&nbsp;запчасти  с&nbsp;разборок, а&nbsp;так&nbsp;же привозим оригинальные из&nbsp;Англии, Финляндии и&nbsp;ОАЭ. В&nbsp;нашем каталоге запчастей вы&nbsp;можете посмотреть примерные цены на&nbsp;запчасти. Если вы&nbsp;не&nbsp;нашли чего искали&nbsp;&mdash; звоните, мы&nbsp;найдём нужную деталь.</p>
		<p>В&nbsp;нашем каталоге запчастей вы&nbsp;можете посмотреть примерные цены на&nbsp;запчасти. Если вы&nbsp;не&nbsp;нашли чего искали&nbsp;&mdash; звоните, мы&nbsp;найдём нужную деталь.</p>
		<h3>Компрессоры</h3>
		<p>Мы&nbsp;профессионально восстанавливаем компрессоры Мерседес на&nbsp;специальном оборудовании. По&nbsp;характеристикам компрессоры равны новым.</p>
		<h3>Доставка</h3>
		<p>Мы&nbsp;доставим вам запчасти в&nbsp;Москве за&nbsp;сутки. Также вы&nbsp;можете забрать запчасти в&nbsp;пунтктах самовывоза.</p>
	</div>
</section>

<section class="container">
	<div class="h1"><a href="contacts">Контакты</a></div>
</section>

<?php include (TEMPLATEPATH . '/scripts.php'); ?>

<?php
get_footer();
