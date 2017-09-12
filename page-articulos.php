<?php /* Template Name: Articulos */ define ('WP_USE_THEMES', false); get_header();?>

<div class="container MarginTop2">
	<div class="row">
		<div class="col-md-7 TextBlack">
			<a href="<?php the_permalink(); ?>">
				<?php query_posts('posts_per_page=10' );
					if( have_posts() ):while( have_posts() ): the_post();
						echo '<article class="MarginTop2">';
						the_post_thumbnail('',['class'=>'img-responsive center-block'] );
						the_title('<h3>','</h3>');
						the_excerpt();
						echo "<span class='glyphicon glyphicon-calendar'> </span>";
						the_date('d M Y');
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
