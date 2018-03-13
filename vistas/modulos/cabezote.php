<?php
$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();
?>
<!--====
top
	===-->
<div class="container-fluid navbar-fixed-top barraSuperior " id="top">
	<div class="container">
		<div class="row" >
<!--
	SOCIAL
-->
			<div class="col-lg-9 col-md-9 col-xs-12 social">
				<ul>
					<?php $social = ControladorPlantilla::ctrEstiloPlantilla();
				$jsonRedesSociales = json_decode($social["redesSociales"],true); 
					
					
				foreach ($jsonRedesSociales as $key => $value) {
									
					
					
					echo '<li><a href="'.$value["url"].'" target="_black">
						<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
						</a>
					</li>';
						}
					?>
				
				</ul>

			</div>
			<!--
				REGISTRO
			-->
			 	<div class="col-lg-3 col-md-3 col-xs-12 registro">
			 		<ul>
			 			<li><a href="modalIngreso" data-google="modal">Ingresar</a></i>
			 			<li>|</li>
			 			<li><a href="modalRegistro" data-google="modal">Crear una cuenta</a></i>

			 		</ul>


			 	</div>
		</div>

	</div>
</div>


<!--=============================================
=  HEADER
=============================================-->
<header class="container-fluid">
	<div class="container">
		<div class="row" id="cabezote">
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 logotipo">
				<a href="<?php echo $url; ?>">

					<img src="<?php echo $servidor.$social["logo"]?>" class="img-responsive">

				</a>

			</div>
<!--=============================================
= BLOQUE CATEGORY Y BUSCADOR
=============================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

<!--=============================================
= BOTON CATEGORIAS
=============================================-->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
					<p>CATEGORIAS
					<span class="pull-right"><i class="fa fa-bars" aria-hidden = "true"></i></span>

					</p>
					</div>
<!--=============================================
= BUSCADOR
=============================================-->
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-group" id="buscador">

							<input type="search" name="buscar" class="form-control" placeholder="Buscar...">
							<span class="input-group-btn">
								<a href="#">
								<button class="btn btn-default backColor" type="submit">
									<i class="fa fa-search"></i>
								</button>

								</a>
							</span>

						</div>

					</div>
<!--=============================================
= CARRITO DE COMPRAS
=============================================-->
	<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
						<a href="#">
							<button class="btn btn-default pull-left backColor" >
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</button>
						</a>
						<p>TU CESTA <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>
					</div>
				</div>
<!--=============================================
= CATEGORIAS
=============================================-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 backColor" id="categorias">

					<?php
					$item = null;
					$valor = null;
					$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
					foreach ($categorias as $key => $value) {
						
					
					echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" id="subCategoria">
					<h4>
						<a href="'.$value["ruta"].'" class="pixelCategorias">'. $value["categoria"].' </a>
					</h4>
					<hr>

						<ul>';
						$item = "id_categoria";
						$valor = $value["id"];
						$subcategorias= ControladorProductos::ctrMostrarSubCategorias($item, $valor);
						foreach ($subcategorias as $key => $value) {
							echo'<li><a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["subcategoria"].'</a></li>';
						}
					
					echo'		
						</ul>
					</div>';
					}
					?>
				</div>
			</div>
					
</header><!-- /header -->
