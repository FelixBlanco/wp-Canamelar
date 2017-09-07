<?php /* Template Name: Articulos */ define ('WP_USE_THEMES', false); get_header();?>

<div class="container MarginTop2 LoopArticulo">
	<div class="row">
		<?php 
			query_posts(array('posts_per_page'=>10 )); 
			if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<div class="col-md-4">
				<article class="PocoPadding">
					<a href="<?php the_permalink(); ?>">
						<?php 
							the_post_thumbnail('',['class'=>'img-responsive']); 
							the_title("<h2>","</h2>");
						?>
					</a>
					<div class="row">
						<div class="col-md-5"><?php the_time('d M Y'); ?></div>
						<div class="col-md-6"><?php the_category(','); ?></div>
					</div>
				</article>
			</div>
		<?php endwhile; endif; ?> 
	</div>
</div>
	


<?php get_footer(); ?>
