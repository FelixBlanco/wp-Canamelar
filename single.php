<?php  get_header(); ?>

<div class="min" >

	<div class="container MarginTop2">
		<div class="row">
			<div class="col-md-7">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_post_thumbnail('large',['class'=>'img-responsive  center-block']); ?>
					<?php the_title('<h2>','</h2>'); ?>
					<div class="row PocoPadding">
						<div class="col-md-4">Publicado: <?php the_time('d M Y'); ?></div>
						<div class="col-md-4">Categorias: <?php the_category(','); ?></div>
					</div>
					<?php the_content(); ?>
					
					<div class="row">
						<div class="col-md-12">
							<?php the_tags(); ?>
						</div>
					</div>

				<?php endwhile ?>
		
			</div>
			<div class="col-md-4 col-md-offset-1">
				<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
					<?php dynamic_sidebar( 'home_right_1' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>