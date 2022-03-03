<?php		
	include 'header.php';
?>

</header>

      <div id="Infos">
  		<div>
            <img src="images/emma.jpg" alt="profile_photo">
            
             <h3><b>HE</b>MASN</h3>
            
              <p>Welcome ! <br> I'm Emmanuelle, <br> Find here information about me</p>
  		</div>
          
         <a><i class="fa fa-cat" alt="cat"></i></a>  
	  </div>

<div id="conteneur">
    
 <h1>HELLOWORLD</h1>

    <div class="first-part">
        <div class="title-section">
            <h2>Last Projects</h2>
            <span class="separation"></span>
        </div>
    </div>
<br>
   <div id="slide-accueil">
	<div id="cbp-fwslider" class="cbp-fwslider">
        <ul>
            <li><a href="#"><img src="images/slider_11.png" alt="dashboard"/></a></li>
            <li><a href="#"><img src="images/slider_1.png" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slide3.jpg" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider_12.png" alt="dashboard"/></a></li>
            <li><a href="#"><img src="images/slide2.jpg" alt="poster"/></a></li>
            <li><a href="#"><img src="images/slide1.jpg" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider-7.png" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider_3.png" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider_5.png" alt="dashboard"/></a></li>
        </ul>
    </div>
   </div>

    <script src="js/jquery.cbpFWSlider.min.js"></script>

    <script>
        $( function() {
        $( '#cbp-fwslider' ).cbpFWSlider();
            $( '#cbp-fwslider' ).cbpFWSlider('interval');
            } );
    </script>

<br>

 <h1>Example</h1>

     <div class="first-part">
         <div class="title-section">
             <h2>Animation</h2>
             <span class="separation"></span>
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

<?php		
	include 'footer.php';
?>