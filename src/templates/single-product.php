<?php
/*
    Template Name: Запчасть
*/
?>
<?php define('WP_USE_THEMES', false); get_header(); ?>

<?php include (TEMPLATEPATH . '/hat.php'); ?>

<?php
$weblink = get_post_meta($post->ID, "link", true);
$desc = get_post_meta($post->ID, "work-desc", true);
$year = get_post_meta($post->ID, "year", true);
?>

<body>

<div class="header-wrapper">
	<div class="container">

		<h1><?php the_title(); ?></h1>
		<div class="worklink"><span class="year"><?php echo $year ?></span> <a class="mail" target="_blank" href="http://<?php echo $weblink ?>"> <?php echo $weblink ?></a> </div>
		<div class="workdesc"><p><?php echo $desc ?></p></div>


	</div>
</div>



<div class="work-wrapper"><div class="container">

	<div class="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry"> <?php the_content(); ?> </div>
		<?php endwhile; else: ?><p>Увы, показывать нечего.</p><?php endif; ?>
			<h2>Посмотрите другие мои работы</h2>
	</div>

</div></div>


	</div>
</div>

<?php include (TEMPLATEPATH . '/scripts.php'); ?>

<?php
get_footer();
