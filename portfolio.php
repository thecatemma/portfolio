<?php		
	include 'header.php';

?>
		<section id="contenu-accueil">
			<article>
				<h1><span class="jaune">CREATIVE</span>PORTFOLIO</h1>
				<span class="voir-portfolio"><a href="#" title="Voir le portfolio">SAP + Projects </a></span>
			</article>
		</section>
		
	</header>

<div id="conteneur">

<p id="texte_sap">
Chez SAP mes dates de stage sont du 18 février au 17 août, à Levallois. <br>
Mes missions ont été de travailler sur le design d'une interface d'un produit SAP nommé Smart Predict. <br>
Présentation de l’entreprise dans son ensemble (positionnement, marché, structure, stratégie, SWOT, offre, enjeux, valeurs, etc.) <br>
-L'entreprise est une entreprise leader du logiciel informatique, c'est une structure qui comptabilise environ 2000 collaborateur sur le site sur lequel je suis, elle offre des services aux industries afin de les aider dans leur activité, valeurs: transparence, sérieux, fiabilité... <br>
SWOT <br>
Positif: Force (origine interne) - Opportunités (origine externe)<br>
Négatif: Faiblesses (origine interne)- Menaces (origine externe)<br>
Forces:
Faiblesses:
<br>
Strengths (Force) : caractéristiques de l'entreprise ou du projet qui lui donnent un avantage sur les autres.<br>
Weaknesses (Faiblesses) : caractéristiques de l'entreprise qui désavantagent l'entreprise ou le projet par rapport aux autres.<br>
Opportunities (Opportunités) : éléments de l'environnement que l'entreprise ou le projet pourrait exploiter à son avantage.<br>
Threats (Menaces) : éléments de l'environnement qui pourraient causer des problèmes à l'entreprise ou au projet.<br>
Présentation de votre mission <br>
Le service et son contexte, <br>
Détails de vos missions <br>
Quelques réalisations concrètes et illustrées <br>
- Smart Predict <br>
- Illustrations <br>
Bilan et perspectives <br>
Vos résultats (avec des données objectives, quanti et quali) <br>
Votre plus grande réussite <br>
-
Votre plus grande leçon <br>
-
Quelles compétences avez-vous acquises <br>
-Décortiquer des composants UI UX, travailler avec des équipes, comprendre l'écosystème <br>
Qu’avez-vous appris d’un point de vue humain, équipe, management ? <br>
-ALIEN, work, fun <br>
Comment cette expérience va alimenter votre projet professionnel ? <br>
-Cela m'a ouvert sur de nouveaux horizons dans ce domaine <br>
Témoignage(s) : celui de votre tuteur, d’un collègue, d’un client... <br>
Remerciements <br>
Présentation de l’étudiant (petite bio + CV) <br>
</p>

<h1>Articles</h1>
<h2> Day by Day at SAP </h2>
<?php include('./index-articles.php'); ?>

</div>

<div id="conteneur">

<p>
<!-- <a href="images/slide1.jpg"><img src="images/logo-client-1.jpg" alt="Photo de montagne" title="Cliquez pour agrandir"/></a>
	
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
		
<!-- Carousel -->
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

</dv>
	
</section>
	
<?php		
	include 'footer.php';
?>