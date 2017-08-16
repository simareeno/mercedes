<header class="header <?php if ( is_front_page() ) { echo 'header--black'; } ?>">
	<div class="container">
		<div class="header__logo logo">
			<a class="logo__link" href="/">

				<?php

				if( is_front_page() ){
					echo '<img class="logo__image" src="/resources/images/logo-white.png" alt="Мастермерс" srcset="/resources/images/logo-white.png 1x, /resources/images/logo-white@2x.png 2x, /resources/images/logo-white@3x.png 3x">';
				}
				else {
					echo '<img class="logo__image" src="/resources/images/logo.png" alt="Мастермерс" srcset="/resources/images/logo.png 1x, /resources/images/logo@2x.png 2x, /resources/images/logo@3x.png 3x">';
				}
				?>
			</a>
		</div>
		<nav class="navigation" role="navigation">
			<div class="navigation__icon">
				<div class="navigation__icon-line navigation__icon-line--1"></div>
				<div class="navigation__icon-line navigation__icon-line--2"></div>
				<div class="navigation__icon-line navigation__icon-line--3"></div>
			</div>
			<ul class="navigation__list">
				<li class="navigation__item">
					<a class="navigation__item-link" href="/catalog">Запчасти</a>
				</li>
				<li class="navigation__item">
					<a class="navigation__item-link" href="/service">Сервис</a>
				</li>
				<li class="navigation__item">
					<a class="navigation__item-link" href="/contacts">Контакты</a>
				</li>
			</ul>
		</nav>
		<div class="phone">
			<a class="phone__link" href="tel:+79256321506">+7 925 632 15 06</a>
		</div>
	</div>
</header>
