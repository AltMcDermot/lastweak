<?php get_header(); ?>
	<section id="home" class="content clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), /*array( 720,405 ),*/ false, '' ); ?>
		<article id="post-<?php the_ID(); ?>" style="background-image:url('<?php echo $src[0]; ?>');" <?php post_class(); ?>>
			<a href="<?php the_permalink(); ?>">
				<!-- <h2><?php the_title(); ?></h2> -->
			</a>
		</article>
				<?php endwhile; ?>
	</section>
<?php get_footer(); ?>