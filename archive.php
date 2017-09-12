<?php get_header(); ?>

<div class="container MarginTop2">
	<div class="row">
		<div class="col-md-7">
						
			<?php
				if( have_posts() ):while( have_posts() ): the_post();
					echo '<article class="MarginTop2">';
					the_post_thumbnail('',['class'=>'img-responsive center-block'] );
					the_title('<h3>','</h3>');
					the_excerpt();
					the_category(',');
					echo '</article>';
				endwhile; endif;
			?>
		
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


			