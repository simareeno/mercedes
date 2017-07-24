<?php define('WP_USE_THEMES', false); get_header(); ?>

<body>


<?php if(is_front_page() ) {
include (TEMPLATEPATH . '/hat.php');
} else {
include (TEMPLATEPATH . '/hat.php'); }
?>

<div id="content-wrapper"><div class="container container-article">

	<div class="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry"> <?php the_content(); ?> </div>
		<?php endwhile; else: ?><p>Увы, показывать нечего.</p><?php endif; ?>
	</div>
</div></div>



<?php include (TEMPLATEPATH . '/scripts.php'); ?>

<?php
get_footer();
