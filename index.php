<?php while (have_posts()) { the_post() ?>

	<article <?php post_class() ?>>
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>
	</article>

<?php } ?>