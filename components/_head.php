<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Declaração do título da página -->
	<title><?php echo $title_page; ?></title>
	
	<!-- Metatags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=320, initial-scale=1, minimum-scale=1.0, maximum-scale=1.3, user-scalable=yes">
	<meta name="mobile-web-app-capable" content="yes">
	
	<meta name="keywords" content="#"/>
	<meta name="description" content="#"/>
	
	<meta name="author" content="#"/>
	<meta name="name" content="#">
	<meta name="creator" content="#">
	<meta name="publisher" content="#">
	<meta name="title" content="#">
	<meta name="generator" content="#"/>
	<meta name="distributor" content="Local">
	<meta name="url" content="#" />
	<meta name="language" content="pt-br" />
	<link rev=made href="gn.laureano@gmail.com" />
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-After" content="7 days">
	
	<!-- Metatags OPG Facebook -->
	<meta property="og:url" content="#" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="#" />
	<meta property="og:description" content="#" />
	<meta property="og:image:height" content="419">
	<meta property="og:image:width" content="800">
	<meta property="og:image" content="media/metaFacebook/og-image.jpg" />
	
	<!-- Favicon -->
	<!-- Gen by: realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="media/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="media/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="media/favicon/favicon-16x16.png">
	<link rel="manifest" href="media/favicon/site.webmanifest">
	<link rel="mask-icon" href="media/favicon/safari-pinned-tab.svg" color="#0a1b1f">
	<meta name="msapplication-TileColor" content="#0a1b1f">
	<meta name="theme-color" content="#0a1b1f">

	<!-- css files -->
	<link href="https://fonts.googleapis.com/css2?family=Neuton:wght@300;700&family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="dist/css/libraries-min.css" type="text/css" rel="stylesheet" />
	<link href="dist/css/styles-min.css" type="text/css" rel="stylesheet" />
</head>

<body class="<?php echo $classOnBody?> u-overflowBlocked">
	<div class="u-maxRow">

		<div class="l-modal" id="modal-audio">
			<div class="l-modal__content">
				<div class="content__figure">
					<img src="media/img/content/corretor.jpg" alt="">
				</div>
				<div class="content__infos">
					<h2>Posso te falar um pouco mais sobre o empreendimento?</h2>
					<p>Se sim, liga o aúdio e clica no botão abaixo!</p>
					<a href="#" class="js-startAudio js-closeModal c-btn --primary">Sim, iniciar navegação guiada!</a>
					<p><a href="#" class="js-closeModal closeModal">Não, prefiro navegar em silêncio</a></p>
				</div>
			</div>
		</div>