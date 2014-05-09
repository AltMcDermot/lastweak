<?php get_header(); ?>
	<section id="single" class="content clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			
		</article>
				<?php endwhile; ?>
	</section>
<?php get_footer(); ?>