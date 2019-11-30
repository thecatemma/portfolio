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
    
<!-- CHARSET -->   
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
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="style/normalize.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="style/jquery.bxslider.css" />
    
<!-- R Studio -->
    <link rel="stylesheet" type="text/css" href="./start.R" />
    
<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="./bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./bootstrap-theme.min.css" />
    
<!-- Javascript -->
    <script type="text/javascript" src="jquery-1.4.4.js"></script>
	<script type="text/javascript" src="jaime.js"></script>
    
<!-- Bibliothèque Ajax pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    
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
    
<!-- Optimisation pour correspondre à la largeur de l'écran -->
    <meta name="viewport" content="width=device-width" />
    
        
<!-- NOUVEL ELEMENT JS -->
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|IBM+Plex+Sans:500" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    
</head>
    
  <!--  sécuriser mon site  google videos enlever les http sans S et commencer par un slash -->
	
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
                        
                        <a href="https://www.facebook.com/emmanuelle.husson" class="rs" title="facebook"><i class="fab fa-facebook" alt="Facebook"></i></a>
                        
                        <a href="https://github.com/thecatemma" class="rs" title="Github"><i class="fab fa-github" alt="GitHub"></i></a>
                        
                        <a href="https://www.behance.net/hussonemmad23e" class="rs" title="Behance"><i class="fab fa-behance" alt="Behance"></i></a>
                        
                        <a href="https://www.youtube.com/channel/UCHQyXitCjlQQrSXQCB-fn0w?" class="rs"><i class="fab fa-youtube"></i></a>
                        
                        <a href="https://www.linkedin.com/in/emmanuelle-husson-92709b130/" class="rs"><i class="fab fa-linkedin"></i></a>
                        
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
                    <li><a href="portfolio.php">Internship</a></li>
                    <li><a href="blog.php">Waterfall</a></li>
                    <li><a href="contact.php">Keep in touch</a></li>
                </ul>
				
			</div>
		</nav>