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
					<div class="row">
						<div class="col-md-12">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- canamelar-dos -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:728px;height:90px"
							     data-ad-client="ca-pub-8885363887400217"
							     data-ad-slot="9967592549"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</div>
				<?php endwhile ?>
		
			</div>
			<div class="col-md-4 col-md-offset-1">
				<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
					<?php dynamic_sidebar( 'home_right_1' ); ?>
				<?php endif; ?>

				<div style="height: 400px;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- canamelar-uno -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-8885363887400217"
					     data-ad-slot="4822242929"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>