<?php		
	include 'header.php';

?>
		<div id="logo"><a href="#"><b>HE</b>MASN.</a></div>
		
		<nav id="menu">
			<ul>
				<li><a class="active" href="index.php" title="Index">Hello</a></li>
				<li><a href="about.php" title="About">About</a></li>
				<li><a href="portfolio.php" title="Portfolio">Porte folie</a></li>
				<li><a href="blog.php" title="Blog">-Mia ? -Miaowww</a></li>
				<li><a href="contact.php" title="Contact">Keep in touch</a></li>
			</ul>
		</nav>
		
		<div class="clearboth"></div>
		
      <div id="Infos">
  		<div>
    	<img src="images/emma.jpg">
			<h3><b>HE</b>MASN</h3>
    	<p>Welcome ! <br> I'm Emmanuelle, <br> A cat from countryside <br> Find here more informations about me</p>
  		</div>
   		<a href="#"><span class="glyphicon glyphicon-plus"></span>MORE</a>
	  </div>
		
		<section id="contenu-accueil">
			<article>
				<h1><span class="jaune">HELLO</span>WORLD</h1>
				<h2>Digital Designer</h2>
				<span class="voir-portfolio"><a href="#" title="Voir le portfolio">See projects</a></span>
			</article>
		</section>
		
	</header>
	

   <div id="slide-accueil">
	<div id="cbp-fwslider" class="cbp-fwslider">
	<ul>
		<li><a href="#"><img src="images/slide3.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide2.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide1.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide4.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide5.jpg" alt="img01"/></a></li>
	</ul>
    </div>
   </div>
	
	
	<section id="articles">
		<h1>Last posts</h1>
	
		<article class="article-boucle">
			<ul>
				<li><h2>Last post: portfolio mis à jour</h2></li>
				<li class="meta-acc">Le 12 avril 2017 par <b>Hemasn</b> dans <a href="#">Photo du jour</a> 312 vues</li>
				<li><p>Description... <a href="#">Read more</a></p></li>
			</ul>
			
			<ul>
				<li><a href="#"><img src="images/art1.jpg"></a></li>
			</ul>
		
		</article>
		
		<article class="article-boucle">
			<ul>
				<li><h2>Last post: portfolio mis à jour</h2></li>
				<li class="meta-acc">Le 12 avril 2017 par <b>Hemasn</b> dans <a href="#">Photo du jour</a> 312 vues</li>
				<li><p>Description... <a href="#">Read more</a></p></li>
			</ul>
			
			<ul>
				<li><a href="#"><img src="images/art2.jpg"></a></li>
			</ul>
		
		</article>
		
		<div class="clearboth"></div>
	
	</section>
	
	
<!-- //////  Options du slider d'images -->
<script src="js/jquery.cbpFWSlider.min.js"></script>
<script>
	$( function() {
	$( '#cbp-fwslider' ).cbpFWSlider();
		$( '#cbp-fwslider' ).cbpFWSlider('interval');
		} );
</script>
<!-- Fin Options du slider d'images -->
	
<div class="clearboth"></div>

</div>	


<?php		
	include 'footer.php';
?>