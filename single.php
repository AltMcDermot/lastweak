<?php get_header(); ?>
	<section id="single" class="content clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			
		</article>
				<?php endwhile; ?>
				<nav class="post-nav clearfix"><?php next_post_link('%link'); ?>  <?php previous_post_link('%link'); ?></nav>
	</section>
<?php get_footer(); ?>