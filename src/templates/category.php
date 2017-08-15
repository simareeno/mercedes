<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="container">
<h1 class="archive-title"><?php single_cat_title() ?></h1>
</section>

<section class="container">
	<?php
	wp_list_categories( array(
		'orderby'            => 'id',
		'show_count'         => true,
		'use_desc_for_title' => false,
		'child_of'           => $cat,
		'title_li'           => ' ',
		'show_option_none'   => false
	) ); ?>
</div>

</section>

<?php get_footer(); ?>
