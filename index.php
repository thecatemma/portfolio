<?php		
	include 'header.php';

?>

      <div id="Infos">
  		<div>
            <img src="images/emma.jpg" alt="profile_photo">
            
             <h3><b>HE</b>MASN</h3>
            
              <p>Welcome ! <br> I'm Emmanuelle, <br> A countryside's cat <br> Find here informations about me</p>
  		</div>
          
         <a><i class="fa fa-cat" alt="cat"></i></a> 
          
	  </div>
		
		<section id="contenu-accueil">
			<article>
				<h1>HELLOWORLD</h1>
			</article>
		</section>
		
</header>

<br>

   <div id="slide-accueil">
	<div id="cbp-fwslider" class="cbp-fwslider">
	<ul>
		<li><a href="#"><img src="images/slider_11.png" alt="slide1"/></a></li>
		<li><a href="#"><img src="images/slider_1.png" alt="slide2"/></a></li>
		<li><a href="#"><img src="images/slide3.jpg" alt="slide3"/></a></li>
		<li><a href="#"><img src="images/slide2.jpg" alt="slide4"/></a></li>
		<li><a href="#"><img src="images/slide1.jpg" alt="slide5"/></a></li>
		<li><a href="#"><img src="images/slider-7.png" alt="slide6"/></a></li>
		<li><a href="#"><img src="images/slider_3.png" alt="slide7"/></a></li>
        <li><a href="#"><img src="images/slider_5.png" alt="slide8"/></a></li>
	</ul>
    </div>
   </div>

<h2>Digital Design</h2>

<h1>Project example</h1>

    <div id="contener">

        <div class="yt">
            <video controls preload="metadata" height="250px">
            <source src="images/HomePage.mp4">
            </video>
        </div>
    </div>

<br>
		
	<section id="articles">
		<h1>Number</h1>
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
</div> 


<!-- Slider -->

<script src="js/jquery.cbpFWSlider.min.js"></script>
<script>
	$( function() {
	$( '#cbp-fwslider' ).cbpFWSlider();
		$( '#cbp-fwslider' ).cbpFWSlider('interval');
		} );
</script>

<?php		
	include 'footer.php';
?>