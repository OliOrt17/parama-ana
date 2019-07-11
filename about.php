<?php
require_once 'backend/includes/_db.php';
global $db;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Harvest | Acerca de </title>
<!-- resoluciones mov-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Agro Harvest Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css  -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- estilos css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css  -->
	
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Thasadith:400,400i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-4 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-leaf"></span> Agro Harvest</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-4 mr-2"><a href="index.php">Inicio</a></li>
				<li class="mr-lg-4 mr-2 active"><a href="about.php">Acerca de</a></li>
				<li class="mr-lg-4 mr-2"><a href="services.php">Servicios</a></li>
				<li class="mr-lg-4 mr-2"><a href="gallery.php">Galeria</a></li>
				<li class="mr-lg-4 mr-2"><a href="contact.php">Contacto</a></li>
				<li class="mr-lg-4 mr-2"><a href="backend/index.html">Entrar</a></li>
				<li class="mr-lg-4 mr-2"><span><span class="fa fa-phone"></span> +12 345 6789</span></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="inner-banner" id="home">
	<div class="container">
	</div>
</div>
<!-- //banner -->

<!-- acerca de -->
<section class="about py-5" id="about">
	<div class="container py-lg-5 py-sm-3">
		<h3 class="heading mb-sm-5 mb-4 text-center"> Acerca de Agro Harvest</h3>
		<div class="row">
			<div class="col-lg-6 about-left">
				<h5 class="mb-3">Unas cuantas palabras acerca de nosotros!</h5>
				<h3 class="mb-lg-4 mb-2">Somos innovadores en el negocio de la agricultura</h3>
				<h4 class=""> Nuestro objetivo es generar insumos alimenticios 100% organicos para todas las personas</h4>
			</div>
			<div class="col-lg-6 pl-xl-5 mt-lg-0 mt-4 about-right">
				<p>El enfoque de Agro Harvest para la agricultura se concentra en la precisión que conecta todo el ciclo de cultivo, desde la planificación de la empresa a la siembra, el cuidado del cultivo, la cosecha y el almacenamiento de granos, proporcionando a las operaciones agrícolas de flotas mixtas un mejor acceso a sus datos de explotación para que puedan tomar decisiones comerciales más informadas, lo que redunda en una productividad y una rentabilidad mayores.</p>
				<p class="pt-3 mt-3 border-top"><span class="fa fa-quote-left text-color mr-2"></span>La experiencia profunda de Agro Harvest, la larga trayectoria y la amplia red de distribuidores nos dan un conocimiento inherente de las necesidades de nuestros clientes mejor que otros. </p>
			</div>
		</div>
	</div>
</section>
<!-- //acerca de -->

<!-- boton acerca de -->
<div class="abt_bottom py-md-5">
	<div class="container py-md-4 py-5">
		<div class="row">
			<div class="col-md-9">
				<h4 class="abt-text text-capitalize">Le brindamos algunos consejos sobre el cuidado de su jardín de acuerdo a su estilo</h4>
			</div>
			<div class="col-md-3">
				<a href="services.php" class="text-capitalize serv_link btn">Nuestros Servicios</a>
			</div>
		</div>
	</div>
</div>
<!-- //boton acerca de-->

<!-- estadisticas -->
<section class="w3_stats" id="stats">
	<div class="overlay-clr py-sm-5">
		<div class="container py-5">
			<div class="w3-stats">
				<div class="row">
						<?php
							$stats = $db->select("stats",["stats.sta_nom", "stats.sta_num", "stats.sta_ico"]);
							foreach($stats as $key => $sta){
						?>
					<div class="col-lg-3 col-6">
						<div class="counter">
							<span class="<?php echo $sta["sta_ico"];?>"></span>
							<div class="timer count-title count-number mt-2"><?php echo $sta["sta_num"];?></div>
							<p class="count-text text-uppercase"><?php echo $sta["sta_nom"];?></p>
						</div>
					</div>
					<?php 
							}
					/*<div class="col-lg-3 col-6">
						<div class="counter">
							<span class="fa fa-pagelines"></span>
							<div class="timer count-title count-number mt-2">2271</div>
							<p class="count-text text-uppercase">arboles plantados</p>
						</div>
					</div>
					<div class="col-lg-3 col-6 mt-lg-0 mt-5">
						<div class="counter">
							<span class="fa fa-users"></span>
							<div class="timer count-title count-number mt-2">1120+</div>
							<p class="count-text text-uppercase">granjeros</p>
						</div>
					</div>
					<div class="col-lg-3 col-6 mt-lg-0 mt-5">
						<div class="counter">
							<span class="fa fa-leaf"></span>
							<div class="timer count-title count-number mt-2">2690</div>
							<p class="count-text text-uppercase">productos</p>
						</div>
					</div>
					*/?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //estadisticas -->

<!-- equipo -->
<div class="team py-5" id="team">
	<div class="container py-lg-3">
		<h3 class="heading mb-sm-5 mb-4 text-center">Nuestro Equipo</h3>
		<div class="row team-bottom text-center">
			<?php
				$integrantes = $db->select("integrantes",["integrantes.int_nombre", "integrantes.int_img"]);
				foreach($integrantes as $key => $int){
			?>
			<div class="col-lg-3 col-sm-6 team-grid">
				<img src="<?php echo $int["int_img"];?>" class="img-fluid" alt="">
				<div class="caption">
					<div class="team-text">
						<h4><?php echo $int["int_nombre"];?></h4>
					</div>
					<ul class="mt-2">
						<li>
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="mailto:info@example.com">
								<span class="fa fa-envelope-open" aria-hidden="true"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<?php
			}
			/*<div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
				<img src="images/team2.jpg" class="img-fluid" alt="">
				<div class="caption">
					<div class="team-text">
						<h4>Teodora Fuentes</h4>
					</div>
					<ul class="mt-2">
						<li>
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="mailto:info@example.com">
								<span class="fa fa-envelope-open" aria-hidden="true"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
				<img src="images/team3.jpg" class="img-fluid" alt="">
				<div class="caption">
					<div class="team-text">
						<h4>Chalino Valentin</h4>
					</div>
					<ul class="mt-2">
						<li>
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="mailto:info@example.com">
								<span class="fa fa-envelope-open" aria-hidden="true"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
				<img src="images/team4.jpg" class="img-fluid" alt="">
				<div class="caption">
					<div class="team-text">
						<h4>Guillermo Ortiz</h4>
					</div>
					<ul class="mt-2">
						<li>
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="mailto:info@example.com">
								<span class="fa fa-envelope-open" aria-hidden="true"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			*/?>
		</div>
	</div>
</div>
<!-- //equipo -->

<!-- comentarios -->
<section class="news py-5">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading mb-sm-5 mb-4 text-center">Nuestros clientes dicen...</h3>
		<div class="row">
				<?php
					$reviews = $db->select("reviews",["reviews.rev_nom", "reviews.rev_com", "reviews.rev_cli", "reviews.rev_img"]);
					foreach($reviews as $key => $rev){
				?>
			<div class="col-lg-4 item">
				<div class="feedback-info pt-5 pb-4 px-4">
					<h4 class="mb-3"><?php echo $rev["rev_nom"];?>
					</h4>
					<p><span class="fa fa-quote-left text-color mr-2"></span><?php echo $rev["rev_com"];?></p>
					<div class="feedback-grids mt-3">
						<div class="feedback-img">
							<img src="<?php echo $rev["rev_img"];?>" class="img-fluid rounded-circle" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5><?php echo $rev["rev_cli"];?></h5>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<?php
					}
			/*		
			<div class="col-lg-4 item-2 mt-lg-0 mt-4">
				<div class="feedback-info pt-5 pb-4 px-4">
					<h4 class="mb-3">La granja agricola
					</h4>
					<p><span class="fa fa-quote-left text-color mr-2"></span> Vulputate ac met semper varius Nullam consequat sapien sed leot cursus rhoncus. Nullam dui mi.</p>
					<div class="feedback-grids mt-3">
						<div class="feedback-img">
							<img src="images/te2.jpg" class="img-fluid rounded-circle" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Olivia Ramirez</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 item mt-lg-0 mt-4">
				<div class="feedback-info pt-5 pb-4 px-4">
					<h4 class="mb-3">Cultivos Modernos
					</h4>
					<p><span class="fa fa-quote-left text-color mr-2"></span> Vulputate ac met semper varius Nullam consequat sapien sed leot cursus rhoncus. Nullam dui mi.</p>
					<div class="feedback-grids mt-3">
						<div class="feedback-img">
							<img src="images/te3.jpg" class="img-fluid rounded-circle" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Carlos Navarro</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			*/?>
		</div>
	</div>
</section>
<!-- //comentarios -->


<!-- footer -->
	<footer class="text-center py-5">
		<div class="container py-md-3">
			<!-- logo -->
			<h2 class="logo2 text-center">
				<a href="index.html">
					<span class="fa fa-leaf"></span> Agro Harvest
				</a>
			</h2>
			<!-- //logo -->
			<!-- datos -->
			<div class="contact-left-footer mt-4">
				<ul>
					<li>
						<p>
							<span class="fa fa-map-marker mr-2"></span>Agro Harvest, Cancun, Mexico
						</p>
					</li>
					<li class="mx-4">
						<p>
							<span class="fa fa-phone mr-2"></span>+12(345) 6789 111.
						</p>
					</li>
					<li>
						<p class="text-wh">
							<span class="fa fa-envelope-open mr-2"></span>
							<a href="mailto:info@example.com">Example@gmail.com</a>
						</p>
					</li>
				</ul>
			</div>
			<!-- //datos -->
			<!-- redes -->
			<div class="footercopy-social my-4">
				<ul>
					<li>
						<a href="#">
							<span class="fa fa-facebook-square"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fa fa-twitter-square"></span>
						</a>
					</li>
					<li class="">
						<a href="#">
							<span class="fa fa-google-plus-square"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fa fa-linkedin-square"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-rss-square"></span>
						</a>
					</li>
					<li class="ml-2">
						<a href="#">
							<span class="fa fa-pinterest-square"></span>
						</a>
					</li>
				</ul>
			</div>
			<!-- //redes -->
		</div>
	</footer>
	<!-- //footer -->

	<!-- flecha top -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //flecha top-->

	
</body>
</html>
