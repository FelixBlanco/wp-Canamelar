<!-- Dias que Faltan -->
<section id="FaltanDias" class="img-propy height500" style="background-image: url(' <?php bloginfo('template_url' ); ?>/img/16.jpg ');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 id="MovimientoFalta"><?php DiasQueFaltan(); ?></h2>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$("#MovimientoFalta").fadeIn('slow',300);
	});
</script>