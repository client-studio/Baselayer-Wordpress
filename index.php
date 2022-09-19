<?php get_header(); ?>

<div class="site-container my-8">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article class="lead text-white text-center">
			 <?php the_content(); ?>
			</article>

			<?php get_template_part( 'page', 'modules' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
