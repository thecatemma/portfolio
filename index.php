<?php		
	include 'header.php';

?>

      <div id="Infos">
  		<div>
    	<img src="images/emma.jpg" alt="profile_photo">
		 <h3><b>HE</b>MASN</h3>
    	  <p>Welcome ! <br> I'm Emmanuelle, <br> A countryside's cat <br> Find here informations about me</p>
  		</div>
   		 <a href="#"><span class="glyphicon glyphicon-plus"></span>MORE +</a>
	  </div>
		
		<section id="contenu-accueil">
			<article>
				<h1><span class="jaune">HELLO</span>WORLD</h1>
				<h2>Digital Designer</h2>
				<span class="voir-portfolio"><a href="portfolio.php" title="Voir le portfolio">See projects</a></span>
			</article>
		</section>
		
</header>
	

   <div id="slide-accueil">
	<div id="cbp-fwslider" class="cbp-fwslider">
	<ul>
		<li><a href="#"><img src="images/slider_11.png" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slider_1.png" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide3.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide2.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slide1.jpg" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slider-7.png" alt="img01"/></a></li>
		<li><a href="#"><img src="images/slider_3.png" alt="img01"/></a></li>
	</ul>
    </div>
   </div>


<h1>Video</h1>
		
	<section id="articles">
		<h1>Little Animation</h1>
		<div class="clearboth"></div>
	</section>

		<main>
			<div class="frame">
			</div>
			 <div class="content">
				<div class="content__img-wrap">
					<div class="content__img"></div>
					<div class="content__img"></div>
					<div class="content__img"></div>
				</div>
				<div class="content__text">
					<span class="content__text-inner">.011</span>
				</div>
			 </div>
		</main>
		<script src="js2/blotter.min.js"></script>
        <script src="js2/materials/liquidDistortMaterial.js"></script>
		<script src="js2/imagesloaded.pkgd.min.js"></script>
		<script src="js2/demo2.js"></script>


<!-- //////  Options du slider d'images -->
<script src="js/jquery.cbpFWSlider.min.js"></script>
<script>
	$( function() {
	$( '#cbp-fwslider' ).cbpFWSlider();
		$( '#cbp-fwslider' ).cbpFWSlider('interval');
		} );
</script>
	
</div>

<div class="clearboth"></div>

<?php		
	include 'footer.php';
?>