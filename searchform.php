<form role="search" method="get" class="form-inline search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
	    <input type="text" name="s" id="search" placeholder="Buscar" class="form-control" value="<?php the_search_query(); ?>" />
	</div>
    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
</form>

