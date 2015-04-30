<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/a1equipos/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/wp-admin/themes/a1equipos/css/animate.css">
	<script type="text/javascript" src="/wp-content/themes/a1equipos/js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="/wp-content/themes/a1equipos/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="/wp-content/themes/a1equipos/script.js"></script>
	<script type="text/javascript">
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
       <script type="text/javascript">
	// $(document).ready(function(){
	// 		$(".uno:eq(0)").click(function(){
	// 			window.location.href = "/quienes-somos/";
	// 		})
	// 		$(".dos").click(function(){
	// 			window.location.href = "/factor-diferenciador/";
	// 		})
	// 		$(".tres").click(function(){
	// 			window.location.href = "/portafolio-de-servicios/";
	// 		})
	// 	})
	// </script>
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="container-fluid">
	<header id="cabezote" class="row">
		<div class=" col-xs-12 col-sm-12 col-md-12">
			<div class="col-md-12 contSup">

<!-- 				<div id="menu_header" class="col-md-6">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Portal empleo</a></li>
						<li><a href="#">Suscribete</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div> -->
			</div>
            <div class="col-md-6 informacion">
				<div class="col-md-3 contMartin ">
					<img src="/wp-content/themes/a1equipos/images/martin.png" class="martin animated tada data-delay=200">
				</div>
				<div class="row col-md-9" id="header_contacto">
					<div class="col-md-12 contTit"><h1>Contactanos</h1></div>
					<ul class="nav navbar-right informacionLista">
						<li class="col-md-4 contContactoItem">
							<div class="col-md-2 contIcono">
								<img src="/wp-content/themes/a1equipos/images/telefonoIcon.png"/>
							</div>
							<div class="col-md-9 contTextHeader">
								<!-- <h2>Llamenos: </h2> -->
								<span>(4) 448 6080</span>
							</div>
						</li>
						<li class="col-md-7 contContactoItem">
							<div class="col-md-2 contIcono">
							     <img src="/wp-content/themes/a1equipos/images/emailIcon.png"/>
							</div>
							<div class="col-md-9 contTextHeader">
							 <!--  <h2>Escribenos:</h2> -->
							  <span>a1equipos@a1equipos.com</span>
							</div>
						</li>
					</ul>
					<div class="row col-md-12">
						<div id="redes" class="row">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/pages/A1-Equipos/396820683797027?ref=bookmarks" class="facebook" target="_blank">facebook</a></li>
<!-- 								<li><a href="#" class="instagram">instagram</a></li>
 -->							<li><a href="https://www.twitter.com/a1equipos1" class="twitter"  target="_blank">twitter</a></li>
							</ul>
						</div>						
				    </div>
				</div>
			</div>
		</div>
	
	</header>
	           <div class="col-md-12 informacionMob">
				<div class="col-md-3 contMartin ">
					<img src="/wp-content/themes/a1equipos/images/martin.png" class="martin animated tada data-delay=200">
				</div>
				<div class="row col-md-9" id="header_contacto">
					<div class="col-md-12 contTit"><h1>Contactanos</h1></div>
					<ul class="nav navbar-right informacionLista">
						<li class="col-md-4 contContactoItem">
							<div class="col-md-2 contIcono">
								<img src="/wp-content/themes/a1equipos/images/telefonoIcon.png"/>
							</div>
							<div class="col-md-9 contTextHeader">
								<!-- <h2>Llamenos: </h2> -->
								<span>(4) 444 6080</span>
							</div>
						</li>
						<li class="col-md-7 contContactoItem">
							<div class="col-md-2 contIcono">
							     <img src="/wp-content/themes/a1equipos/images/emailIcon.png"/>
							</div>
							<div class="col-md-9 contTextHeader">
							 <!--  <h2>Escribenos:</h2> -->
							  <span>a1equipos@a1equipos.com</span>
							</div>
						</li>
					</ul>
					<div class="row col-md-12">
						<div id="redes" class="row">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/pages/A1-Equipos/396820683797027?ref=bookmarks" class="facebook" target="_blank">facebook</a></li>
<!-- 								<li><a href="#" class="instagram">instagram</a></li>
 -->							<li><a href="https://www.twitter.com/a1equipos1" class="twitter"  target="_blank">twitter</a></li>
							</ul>
						</div>						
				    </div>
				</div>
			</div>
	<nav id="menu" class="row navbar navbar-default">
		<div class="nav-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			 <span class="sr-only">Cambiar Navegacion</span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a class="menu_p" href="/">Inicio</a></li>
					<li class="dropdown"><a href="/quienes-somos/" class="menu_p uno">¿Quiénes somos?</a>
					</li>
					<li class="dropdown"><a href="/factor-diferenciador/" class="menu_p">Factor Diferenciador</a>					
					</li>
					<li class="dropdown"><a href="" class="menu_p dropdown-toggle tres" data-toggle="dropdown">Portafolio de Servicios<b class="caret"></b></a>
						<ul class="menu_d dropdown-menu">
							<li><a href="/categoria-producto/alquiler-de-equipos-para-construccion-medellin/">Alquiler de equipos</a></li>
    						<li><a href="/centro-de-servicio">Centro de servicios</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="" class="menu_p dropdown-toggle" data-toggle="dropdown">Zona de Interés<b class="caret"></b></a>
						<ul class="menu_d dropdown-menu">
							<li><a href="/category/sabias-que/">¿Sabías qué?</a></li>
							<li><a href="/category/noticias/">Noticias</a></li>
							<li><a href="/category/galeria/">Galería de Fotos</a></li>
							<li><a href="/category/diversion/">Diversión</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="/informacion-de-contacto/" class="menu_p">Contactanos</a></li>

				</ul>
				<div class="form-group"><form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="col-md-3 searchCont">
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input class="form-control contSearch" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input class="btn btn-danger" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</div>
</form></div>
			</div>
		</div>
		
		
	</nav>
	<div id="main" class="row">
