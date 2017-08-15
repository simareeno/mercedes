<?php get_header(); ?>

<body>

<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="container">
	<h2>Запчасти</h2>

</section>

<section class="container">
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
</section>

<?php include (TEMPLATEPATH . '/scripts.php'); ?>

<?php
get_footer();
