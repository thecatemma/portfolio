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
				<span class="voir-portfolio"><a href="#" title="Voir le portfolio">SAP + Projects </a></span>
			</article>
		</section>
		
	</header>

<p>
Brève présentation du stage (dates, lieu, entreprise, missions, rapport de stage) <br>
-J'ai réalisé mon stage chez SAP du 18 février au 17 août, à Levallois. Mes mission ont étées de travailler sur le design d'une interface d'un produit SAP nommé Smart Predict. <br>
Présentation de l’entreprise dans son ensemble (positionnement, marché, structure, stratégie, SWOT, offre, enjeux, valeurs, etc.) <br>
-L'entreprise est une entreprise leader du logiciel informatique, c'est une structure qui comptabilise environ 2000 collaborateur sur le site sur lequel j'étais, elle offre des services aux industries afin de les aider dans leur activité, les valeurs... <br>
Présentation de votre mission <br>
Le service et son contexte, <br>
Détails de vos missions <br>
Quelques réalisations concrètes et illustrées <br>
Bilan et perspectives <br>
Vos résultats (avec des données objectives, quanti et quali) <br>
Votre plus grande réussite <br>
Votre plus grande leçon <br>
Quelles compétences avez-vous acquises <br>
Qu’avez-vous appris d’un point de vue humain, équipe, management ? <br>
Comment cette expérience va alimenter votre projet professionnel ? <br>
Témoignage(s) : celui de votre tuteur, d’un collègue, d’un client... <br>
Remerciements <br>
Présentation de l’étudiant (petite bio + CV) <br>
</p>

</div>

<div id="conteneur">

<p>
<!--	<a href="images/slide1.jpg"><img src="images/logo-client-1.jpg" alt="Photo de montagne" title="Cliquez pour agrandir"/></a>
	
	Ajouter une croix puis mettre en display none
	Faire un évènement onclick en js et voilà faire attention aux conflits -->
</p>
	
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