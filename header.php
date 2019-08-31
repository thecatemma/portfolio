<!doctype html>
<html lang="fr">
<head>
    <?php    
    if ($_SERVER["SERVER_NAME"] != "localhost") {?>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143357752-1"></script>
    <?php } ?>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143357752-1');
    </script>
    
    sécuriser mon site --> google videos

	<meta charset="UTF-8" />
	<title>HEMASN : Mon Portfolio</title>
    <meta name="description" content="HEMASN, portfolio, dessins, UX Design, Code">
	<link rel="icon" type="images/png" href="images/favicon.ico">
<!-- Pages -->
	<link rel="stylesheet" type="text/css" href="about.php"/>
	<link rel="stylesheet" type="text/css" href="portfolio.php"/>
	<link rel="stylesheet" type="text/css" href="blog.php"/>
	<link rel="stylesheet" type="text/css" href="contact.php"/>
<!-- CSS  -->
	<link rel="stylesheet" href="style.css" type="text/css" /><!-- Appel de la feuille de stlyle générique -->
	<link rel="stylesheet" href="style/normalize.css" type="text/css"><!-- réinitialisation des valeurs à 0 sur des propriétés CSS  -->
    <link rel="stylesheet" type="text/css" href="style/jquery.bxslider.css" /><!-- Appel du carousel clients / projets -->
<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="./bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./bootstrap-theme.min.css" />
<!-- JS -->
    <script type="text/javascript" src="jquery-1.4.4.js"></script>
	<script type="text/javascript" src="jaime.js"></script>
<!-- Bibliothèque Ajax pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bibliothèque JS conçue pour détecter fonctionnalités spécifiques de HTML et CSS dans les navigateurs -->
	<script src="js/modernizr.custom.js"></script>
<!-- Librairie JQUERY -->
	<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
<!-- Appel JS du carousel -->
	<script src="js/jquery.bxslider.min.js"></script>
<!-- Appel JS du Portfolio -->
    <script src="js/jquery.isotope.min.js"></script>
<!-- Appel Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700,900" rel="stylesheet" type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
<!-- Optimisation en largeur pour correspondre à la largeur de l'écran du périphérique -->
    <meta name="viewport" content="width=device-width" />

<!-- NOUVEL ELEMENT JS -->
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|IBM+Plex+Sans:500" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
</head>
	
<body>
<div id="header"> </div>
<div id="conteneur">
	<header id="header-accueil">
		<div id="header-top">
			
		  <div id="wrap">
					
			 <a id="logo" href="index.php"><b>HE</b>MASN.</a>
				
				<div id="droite">
					
					<a id="lock" href="connexion.php" title="lock"><img src="images/header-lock.png" alt="Mon compte"></a>


					<div id="social">				
						<a href="https://www.facebook.com/emmanuelle.husson" title="facebook"><img src="images/header-facebook.png" alt="Facebook"></a>
						<a href="https://github.com/thecatemma" title="Github"><img src="images/header-github.png" alt="Mon GitHub"></a>
						<a id="behance" href="https://www.behance.net/hussonemmad23e" title="Behance+"><img src="images/header-behance.png" alt="Behance"></a>
					</div>
			    </div>
			 </div>	

		</div>
		
		
		<nav id="menu">
			<div id="menuToggle">
		    	<input id="check" type="checkbox"/>
				    <span></span>
				    <span></span>
				    <span></span>
			
			<ul class="nav">
				<li><a href="index.php">Hello</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="portfolio.php">Internship</a></li> <!-- class="active" -->
				<li><a href="blog.php">Waterfall</a></li>
				<li><a href="contact.php">Keep in touch</a></li>
			</ul>
				
			</div>
		</nav>
		
		<div class="clearboth"></div>