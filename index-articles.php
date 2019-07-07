<?php
// Affiche la page d'accueil du blog qui liste le titre et lien cliquable des différents articles

error_reporting(E_ERROR | E_WARNING | E_PARSE);

//error_reporting() modifie la directive error_reporting pendant l'exécution du script. PHP possède plusieurs niveaux d'erreurs, utiliser cette fonction configure ce niveau pendant la durée (d'exécution) de votre script. 

require_once('./functions.php');
$articles = getArticles();

?>

<div id="container">
	
   <?php foreach($articles as $article): ?>

	<a id="article_bdd" href="article.php? id=<?= $article->id ?>"> 
		<h3><?= $article->title ?></h3>
	</a>
						
		<?php endforeach; ?>

	 </div>

	</body>

</html>