<?php get_header(); ?>

<body>

<?php include (TEMPLATEPATH . '/hat.php'); ?>

<section class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry"> <?php the_content(); ?> </div>
		<?php endwhile; else: ?><p>Увы, показывать нечего.</p><?php endif; ?>
</section>

<?php include (TEMPLATEPATH . '/scripts.php'); ?>

<?php
get_footer();
