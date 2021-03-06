<!-- loop -->
<section id="LoopLanding">
	<div class="container-fluid TextBlack">
		<div class="row">
			<?php  query_posts('posts_per_page=3' ); if( have_posts() ): while( have_posts() ): the_post(); ?>

				<div class="col-md-4">
					<article>
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('',['class'=>'img-responsive center-block']); ?>
						<?php the_title('<h2>','</h2>'); ?></a>
						<div class="row">
							<div class="col-md-12">

								<span class="glyphicon glyphicon-calendar"></span> <?php the_time('d M Y'); ?>

								<span class="glyphicon glyphicon-tag"></span> <?php the_category(','); ?></div>

						</div>
						<div class="text-justify">
						</div>
						<div>
							<span class="glyphicon glyphicon-tag"></span> <?php the_tags(); ?>
						</div>
					</article>
				</div>

			<?php endwhile; endif; ?>
		</div>
	</div>
</section>