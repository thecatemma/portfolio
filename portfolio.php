<?php		
	include 'header.php';

?>


		<div id="logo"><a href="#"><b>HE</b>MASN.</a></div>
		
		<nav id="menu">
			<ul>
				<li><a href="index.php" title="">Hello</a></li>
				<li><a href="about.php" title="">About</a></li>
				<li><a class="active" href="portfolio.php" title="">Porte folie</a></li>
				<li><a href="blog.php" title="">-Mia ? -Miaowww</a></li>
				<li><a href="contact.php" title="">Keep in touch</a></li>
			</ul>
		</nav>
		
		<div class="clearboth"></div>
		
		<section id="contenu-accueil">
			<article>
				<h1><span class="jaune">CREATIVE</span>PORTFOLIO</h1>
				<span class="voir-portfolio"><a href="#" title="Voir le portfolio">See projects</a></span>
			</article>
		</section>
		
	</header>

</div>


<div id="conteneur">
	
	<section id="client-acc">
	  <h1>Some ideas</h1>
		
		<div class="slider5">
  			<div class="slide"><img src="images/logo-client-1.jpg"></div>
  			<div class="slide"><img src="images/logo-client-2.jpg"></div>
			<div class="slide"><img src="images/logo-client-3.jpg"></div>
  			<div class="slide"><img src="images/logo-client-4.jpg"></div>
			<div class="slide"><img src="images/logo-client-5.jpg"></div>
			<div class="slide"><img src="images/logo-client-6.jpg"></div>
		</div>
		
<!-- ////// Options du carousel clients / projets -->
<script>
	$(document).ready(function(){
	  $('.slider5').bxSlider({
		slideWidth: 300,
		minSlides: 4,
		maxSlides: 4,
		moveSlides: 4,
		slideMargin: 10,
		preloadImages : 'all',
		auto:true,
	  });
	});
</script>

</div>
</section>
	

<?php		
	include 'footer.php';
?>