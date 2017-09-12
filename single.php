<?php  get_header(); ?>

<div class="min" >

	<div class="container MarginTop2">
		<div class="row">
			<div class="col-md-7">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_post_thumbnail('large',['class'=>'img-responsive  center-block']); ?>
					<?php the_title('<h2>','</h2>'); ?>
					<div class="row PocoPadding">
						<div class="col-md-4"><span class="glyphicon glyphicon-calendar"></span>Publicado: <?php the_time('d M Y'); ?></div>
						<div class="col-md-4">
						<span class="glyphicon glyphicon-tag"></span>Categorias: <?php the_category(','); ?></div>
					</div>
					<?php the_content(); ?>
					
					<div class="row">
						<div class="col-md-12">
							<span class="glyphicon glyphicon-tag"></span><?php the_tags(); ?>
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

							<!-- Facebook Comentarios -->
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<h3>Dejanos tu comentario <hr></h3>
							<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
						</div>
					</div>
				<?php endwhile ?>
		
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>