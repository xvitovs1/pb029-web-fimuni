<!doctype HTML>
<html>
<head>  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="author" content="HTML code: Martina Vitovska; e-mail: 409920@mail.muni.cz">
	<link rel="stylesheet" href="pb029-style.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400&amp;subset=latin,latin-ext" rel='stylesheet' type='text/css'>
	<title><?php echo $title; ?></title>
</head>
<body>
<div class="page-wrapper">
  
	<header class="site-header" id="top">
		<a href="index.php">Filmový festival Fakulty informatiky</a>
	</header>

	<ul id="main-menu">
		<li><a href="rocnik2012.php">2012</a></li>
		<li><a href="rocnik2013.php">2013</a></li>
		<li><a href="rocnik2014.php">2014</a></li>
	</ul>

	<?php if(!(isset($noSubMenu) && $noSubMenu)) { ?>
	<ul id="menu">
		<li><a href="#info">Info</a></li>
		<li><a href="#porota">Porota</a></li>
		<li><a href="#program">Program</a></li>
		<li><a href="#vysledky">Výsledky</a></li>
		<li><a href="#galerie">Fotogalerie</a></li>
		<li><a href="#top">Na začátek</a></li>
	</ul>
	<?php } ?>

	<div id="content">
