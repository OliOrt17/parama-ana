<?php
require_once 'backend/includes/_db.php';
global $db;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Harvest | Servicios</title>
<!-- resolucion mov -->
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
	<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- estilo css -->

	<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Thasadith:400,400i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->

	
</head>
<body>
<!-- //header -->
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
				<li class="mr-lg-4 mr-2"><a href="about.php">Acerca de</a></li>
				<li class="mr-lg-4 mr-2 active"><a href="services.php">Servicios</a></li>
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

<!-- servicios -->
<section class="services py-5">
	<div class="container py-lg-5">
		<h3 class="heading mb-sm-5 mb-4 text-center">Nuestros Servicios</h3>
		<div class="row">
			<?php
				$servicios = $db->select("servicios",["servicios.ser_id", "servicios.ser_nom", "servicios.ser_des"]);
				$count = $db->count("servicios");
				$numero = 3;
				foreach($servicios as $key => $ser){		
			?>
			<div class="col-lg-4 col-sm-6">
				<div class="home-grid">
					<span class="num-title"><?php echo $ser["ser_id"];?></span>
					<h4 class="home-title mt-3"><?php echo $ser["ser_nom"];?></h4>
					<p class="mt-2"><?php echo $ser["ser_des"];?></p>
				</div>
				<br>
			</div>
			
			<?php	
				}
			/*<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
				<div class="home-grid">
					<span class="num-title">02</span>
					<h4 class="home-title mt-3">Plantaciones</h4>
					<p class="mt-2"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">
				<div class="home-grid">
					<span class="num-title">03</span>
					<h4 class="home-title mt-3">Reforestacion</h4>
					<p class="mt-2"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
				</div>
			</div>
			
		</div>
		
		<div class="row ">
			<div class="row col-lg-9 mt-lg-5 mt-4 mx-auto px-lg-3 px-0">
				<div class="col-lg-6 col-sm-6">
					<div class="home-grid">
						<span class="num-title">04</span>
						<h4 class="home-title mt-3">Cosecha</h4>
						<p class="mt-2"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 mt-sm-0 mt-4">
					<div class="home-grid">
						<span class="num-title">05</span>
						<h4 class="home-title mt-3">Jardineria</h4>
						<p class="mt-2"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
					</div>
				</div>
			</div>
		</div>
		*/?>	
	</div>
</section>
<!-- //servicios  -->

<!-- porque nosotros -->
<section class="serives-agile py-5" id="works">
	<div class="container py-md-5">
		<h3 class="heading mb-5 text-center"> ¿Porque somos tu mejor eleccion?</h3>
		<div class="welcome-bottom text-center">
			<?php
				$caracteristicas = $db->select("caracteristicas",["caracteristicas.car_nom", "caracteristicas.car_desc", "caracteristicas.car_ico"]);
				foreach($caracteristicas as $key => $car){
			?>
			<div class="welcome-grid">
				<span class="<?php echo $car["car_ico"];?>"></span>
				<h4 class="my-3"><?php echo $car["car_nom"];?></h4>
				<p><?php echo $car["car_desc"];?></p>
			</div>
			<?php
				}

			/*<div class="welcome-grid">
				<span class="fa fa-skyatlas"></span>
				<h4 class="my-3">Semillas</h4>
				<p>quis nostrum ullamet corporis suscipit.</p>
			</div>

			<div class="welcome-grid mt-md-0 mt-5">
				<span class="fa fa-yelp"></span>
				<h4 class="my-3">Seguridad</h4>
				<p>quis nostrum ullamet corporis suscipit.</p>
			</div>
			<div class="welcome-grid mt-lg-0 mt-md-4 mt-5">
				<span class="fa fa-viadeo"></span>
				<h4 class="my-3">Cultivacion</h4>
				<p>quis nostrum ullamet corporis suscipit.</p>
			</div>
			<div class="welcome-grid mt-lg-0 mt-md-4 mt-5">
				<span class="fa fa-pagelines"></span>
				<h4 class="my-3">Ambiente</h4>
				<p>quis nostrum ullamet corporis suscipit.</p>
			</div>
			*/?>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- porque nosotros -->

<!-- servicios -->
<section class="blog py-5">
	<div class="container py-md-5">
		<h3 class="heading mb-sm-5 mb-4 text-center"> Nuestros productos y servicios</h3>
		<div class="row blog-grids">
			<?php
				$productos = $db->select("productos",["productos.pro_nom", "productos.pro_desc", "productos.pro_img"]);
				foreach($productos as $key => $pro){
			?>
			<div class="col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">	
				<img src="<?php echo $pro["pro_img"];?>" class="img-fliud" alt="" />
				<div class="blog-info">
					<h4><?php echo $pro["pro_nom"];?><span class="fa fa-pagelines"></span></h4>
					<p class="mt-2"><?php echo $pro["pro_desc"];?></p>
				</div>
			</div>
			<?php
			}
			/*<div class="col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">	
				<img src="images/s2.jpg" class="img-fliud" alt="" />
				<div class="blog-info">
					<h4>Cultivo <span class="fa fa-pagelines"></span></h4>
					<p class="mt-2">Integer sit ut amet mattis quam, sit amet ultricies velit. Praesent ullam corper dui turpis sit.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 blog-right mt-lg-0 mt-5 pt-lg-0 pt-md-5">
				<img src="images/s3.jpg" class="img-fliud" alt="" />
				<div class="blog-info">
					<h4>Cosecha <span class="fa fa-pagelines"></span></h4>
					<p class="mt-2">Integer sit ut amet mattis quam, sit amet ultricies velit. Praesent ullam corper dui turpis sit.</p>
				</div>
			</div>
			*/?>
		</div>
	</div>
</section>
<!-- //servicos -->

<!-- newsletter -->
<div class="newsletter_right_w3 py-5">
	<div class="container py-lg-3">
		<h3 class="heading mb-4 text-center">Suscribete a nuestro Newsletter</h3>

			<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

	
		<div id="mc_embed_signup">
			<form action="https://gmail.us3.list-manage.com/subscribe/post?u=0a4666295d88abfbc790f0bf7&amp;id=c219b7b59f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
			<div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Correo electronico <span class="asterisk">*</span>
			</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0a4666295d88abfbc790f0bf7_c219b7b59f" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Suscribete" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
			</div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
	</div>
	
	
</div>
<!-- //newsletter -->

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
	<!-- //flecha top -->

<!--End mc_embed_signup-->

</body>
</html>
