<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="OddMutt LLC">
    <meta name="description" content="Cata y Camilo offers professional accounting services in South Florida. Trust us for all your accounting needs.">
    <meta name="keywords" content="accounting, accounting services, South Florida, Cata y Camilo, taxes, finance, accounting advice">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $titulo; ?> | Cata y Camilo">
    <meta property="og:description" content="Cata y Camilo offers professional accounting services in South Florida. Trust us for all your accounting needs.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.catalinaycamilo.com">
    <meta property="og:image" content="https://www.catalinaycamilo.com/images/og-image.jpg">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $titulo; ?> | Cata y Camilo">
    <meta name="twitter:description" content="Cata y Camilo offers professional accounting services in South Florida. Trust us for all your accounting needs.">
    <meta name="twitter:image" content="https://www.catalinaycamilo.com/images/twitter-image.jpg">

    <!-- Font Imports -->
	<link rel="stylesheet" href="https://use.typekit.net/tra1ost.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="/build/css/swiper.css">
    <link rel="stylesheet" href="/build/css/wedding.css">


    <!-- Font Icons -->
    <link rel="stylesheet" href="/build/css/font-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/build/css/custom.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Document Title -->
    <title><?php echo $titulo; ?> | Cata y Camilo</title>

    	<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "WebPage",
		  "name": "Videographer",
		  "description": "Videographer — Ready-to-use website demo built with Canvas, the multi-purpose Bootstrap 5 HTML5 template."
		}
	</script>
</head>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
	<h1 class="visually-hidden">Videographer</h1>


    <?php 
        include_once __DIR__ .'/templates/header.php';
        echo $contenido;
        include_once __DIR__ .'/templates/footer.php'; 
    ?>


	</div><!-- #wrapper end -->

	<!-- JavaScripts
	============================================= -->
	<script src="/build/js/plugins.min.js"></script>
	<script src="/build/js/functions.bundle.js"></script>
    <script src="/build/js/hover-img-animate.js"></script>

</body>
</html>