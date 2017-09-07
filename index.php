<?php  get_header(); ?>

<div class="min" >

	<?php 

		get_template_part( 'dias_falta' );
		
		get_template_part( 'loop_inicio' );

		get_template_part( 'normas' );

		get_template_part( 'soudcloud' );

		get_template_part( 'comentarios_fb_tw' );

	?>

</div>

<?php get_footer(); ?>