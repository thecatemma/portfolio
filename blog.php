<?php		
	include 'header.php';

?>

</header>

<div id="conteneur">

 <h1>Galerie</h1>

    <section id="portfolio" class="our-projets">
          <div class="first-part">
              <div class="title-section">
                  <h2>Nos Projets</h2>
                  <span class="separation"><i class="fas fa-circle"></i></span>
                   <p>Voici nos dernières réalisations</p>
              </div>
          </div>

          <div id="container">
              <figure class="portfolio">
                    <img src="images/dashboard.png" alt="Curious Potatoe" />
                  <figcaption>
                    <h3>Dashboard</h3>
                    <p>London</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>

              <figure class="portfolio">
                    <img src="images/logo-client-4.jpg" alt="Anniversaire">
                  <figcaption>
                    <h3>Graphism</h3>
                    <p>Paper</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>

              <figure class="portfolio">
                    <img src="images/slider_12.png" alt="Pompadour">
                  <figcaption>
                    <h3>Dashboard</h3>
                    <p>Invoices</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>

              <figure class="portfolio">
                    <img src="images/portfolio-7.jpg" alt="Graphic Design">
                  <figcaption>
                    <h3>Drawing</h3>
                    <p>Wood</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>
              
              <figure class="portfolio">
                    <img src="images/slider_1.png" alt="Space">
                  <figcaption>
                    <h3>Design</h3>
                    <p>Jewel</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>

              <figure class="portfolio">
                    <img src="images/portfolio-9.jpg" alt="Cities">
                  <figcaption>
                    <h3>Drawing</h3>
                    <p>Nature</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>
              
              <figure class="portfolio">
                    <img src="images/slide1.jpg" alt="Shopping">
                  <figcaption>
                    <h3>Mockup</h3>
                    <p>Jewel</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>

              <figure class="portfolio">
                    <img src="images/slider_3.png" alt="Branding">
                  <figcaption>
                    <h3>Sketching</h3>
                    <p>R bnb</p>
                    <div class="eye"><i class="fa fa-eye oeil"></i></div>
                  </figcaption>
              </figure>
          </div>
    </section>


<br>

 <h1>The eyes</h1><br>

    <section>
          <div class="first-part">
              <div class="title-section">
                  <h2>Nos Vidéos</h2>
                  <span class="separation"></span>
                   <p>Voici nos dernières vidéos</p>
              </div>
          </div>

        <div id="contener">

            <div class="yt">
                <iframe width="400" height="200" src="https://www.youtube.com/embed/1LvL__JC8Yw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="yt">
                <iframe width="400" height="200" src="https://www.youtube.com/embed/KwPHDwF8HtM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="yt">
                <iframe width="400" height="200" src="https://www.youtube.com/embed/DBxPvraakQ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="yt">
                <iframe width="400" height="200" src="https://www.youtube.com/embed/fqhsD0i4PS0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="yt">
                <iframe width="400" height="200" src="https://www.youtube.com/embed/-49fwbsFe_U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="yt">
              <video controls preload="metadata" width="400" height="200">
                 <source src="images/HomePage.mp4">
              </video>
             </div>

        </div>
    </section>


 <h1>works</h1>

    <section>

          <div class="first-part">
              <div class="title-section">
                  <h2>Nos Projets</h2>
                  <span class="separation"></span>
                   <p>Voici nos dernières réalisations</p>
              </div>
          </div>
	
         <div id="client-acc">

                <div class="slider5">
                    <div class="slide"><img src="images/logo-client-2.jpg"></div>
                    <div class="slide"><img src="images/logo-client-3.jpg"></div>
                    <div class="slide"><img src="images/portfolio-7.jpg"></div>
                    <div class="slide"><img src="images/logo-client-4.jpg"></div>
                    <div class="slide"><img src="images/logo-client-5.jpg"></div>
                    <div class="slide"><img src="images/logo-client-6.jpg"></div>
                    <div class="slide"><img src="images/portfolio-8.jpg"></div>
                    <div class="slide"><img src="images/portfolio-9.jpg"></div>
                </div>

                 <script>
                    $(document).ready(function(){
                      $('.slider5').bxSlider({
                        slideWidth: 300,
                        minSlides: 1,
                        maxSlides: 5,
                        moveSlides: 4,
                        slideMargin: 10,
                        preloadImages : 'all',
                        auto:true,
                      });
                    });
                 </script>

        </div>
    </section>

<h1>OTHER</h1>
   
    <section>

          <div class="first-part">
              <div class="title-section">
                  <h2>Nos Sites</h2>
                  <span class="separation"></span>
                   <p>Voici nos autres sites</p>
              </div>
          </div>
        
        <div class="contain">

            <div class="links">

                <h2><img src="images/picto-search.png"> <a href="http://hemasn.000webhostapp.com/onePage" target="_blank">Site OnePage</a></h2>

    <br>
            </div>

            <div class="links">

                <h2><img src="images/picto-brain.png"> <a href="http://hemasn.000webhostapp.com/projetBabyCat" target="_blank">Application</a></h2>
    <br>
            </div>

            <div class="links">
                <h2><img src="images/picto-graphic.png"> <a href="http://hemasn.000webhostapp.com/purple/purple.html" target="_blank">Landing Page</a></h2>
    <br>
            </div>

            <div class="links">
                <h2><img src="images/picto-pencil.png"> <a href="" target="_blank">Node.js try</a></h2>
    <br>
            </div>

            <div class="links">
                <h2><img src="images/picto-flag.png"> <a href="" target="_blank">New Website !</a></h2>
    <br>
            </div>

        </div>
    </section>

<br>

 <h1> Quotes </h1>

    <section>

          <div class="first-part">
              <div class="title-section">
                  <h2>Nos Citations</h2>
                  <span class="separation"></span>
              </div>
          </div>
        
        <div id ="text_sap">

            <p> *Showing Terminal Skills* "Elle n'a que 20 ans et elle en sait plus que nous regarde"</p>

            <p>"58 95, ça c'est le plus bas c'est ça ?"</p>

            <p>"HEMA toujours un coup d’avance"</p>

            <p>"Une thèseeee"</p>

            <p>"69€"</p>

            <p>"Les racines du mal" "Les fleurs du mal"</p>

            <p>"Come, no matter where you are, no matter how far"</p>

            <p>02/12/19 : "Victime de son succès"</p>

            <p>"Je sais pas où est-ce qu'on se connecte pour accéder à notre adresse mail"</p>

            <p>"Soeur Emmanuelle"</p>

            <p>"L'idée c'est de pas faire comme l'Arbre, hyper réaliste"</p>

            <p>"Coeur photo story"</p>

            <p>"Merci tu me fais économiser 100€"</p>

            <p>"Y'avait une fosse, j'avais des potes bourés qui jetaient des bouteilles dedans"</p>

            <p>"Moi je le paye pas je le vole" 4/12/2019</p>

            <p>"Je pensais partir mais j'attendais que quelqu'un revienne"</p>

            <p>"Suite à cette blessure, stress post traumatique"</p>

            <p>"Se sentir en sécurité pour avoir un nouveau comportement"</p>
        
        </div>

        <div>
            <img src="images/Root3.png" width="100%" alt="Profile">
        </div>

        <p>2019 - ©roots by hemasn</p>

    </section>

<br>

</div>	
</div>	

<?php		
	include 'footer.php';
?>