<?php get_header(); ?>

<div class="container MarginTop2">
	<div class="row">
		<div class="col-md-7 TextBlack">
			<a href="<?php the_permalink(); ?>">
				<?php
					if( have_posts() ):while( have_posts() ): the_post();
						echo '<article class="MarginTop2">';
						the_post_thumbnail('',['class'=>'img-responsive center-block'] );
						the_title('<h3>','</h3>');
						the_excerpt();
						echo "<span class='glyphicon glyphicon-calendar'> </span>";
						the_date();
						echo "<span class='glyphicon glyphicon-tag'></span>";
						the_category(',');
						echo '</article>';
					endwhile; endif;
				?>
			</a>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


			