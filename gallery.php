<?php
require_once 'backend/includes/_db.php';
global $db;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Harvest | Galeria </title>
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
	<link rel="stylesheet" href="css/lightbox.min.css">
	<script type="text/javascript" src="backend/js/lightbox-plus-jquery.min.js"></script>
	<!-- //css  -->
	
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
				<li class="mr-lg-4 mr-2"><a href="services.php">Servicios</a></li>
				<li class="mr-lg-4 mr-2 active"><a href="gallery.php">Galeria</a></li>
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

<!-- galeria  -->
<section id="blog-sec">
		<br>
			<h1>Imagenes de galeria</h1>

			<div class="gallery" >
			<?php
				$galeria = $db->select("galeria","*");
				foreach($galeria as $key => $gal){		
			?>
				<a href="<?php echo $gal["gal_img"];?>" data-lightbox="mygallery" data-title="<?php echo $gal["gal_titulo"];?>"> <img src="<?php echo $gal["gal_img"];?>" alt=""></a>
				<?php	
				}
			?>
			</div>
	</section>
<!-- //galeria -->

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

	<!-- flechita de regreso -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //flechita de regreso -->

	
</body>
</html>
