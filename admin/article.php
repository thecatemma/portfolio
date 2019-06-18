<?php

// Controller servant pour afficher un article unique en fonction de son ID
// Indiquer article.php?id=$id sinon redirige vers l'index.php

if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
		header('Location: index.php');
else
{
	extract($_GET);
	$id = strip_tags($id);
	
	require_once('./functions.php');
	
	if(!empty($_POST))
	{
		extract($_POST);
		$errors = array();
		
		$author = strip_tags($author);
		$comment = strip_tags($comment);
		
		if(empty($author))
			array_push($errors, 'Entrez un pseudo');
		
		if(empty($comment))
			array_push($errors, 'Entrez un commentaire');
		
		if(count($errors) == 0)
		{
			$comment = addComment($id, $author, $comment);
			
			$success = 'Votre commentaire a été publié';
			
			unset($author);
			unset($comment);
		}
	}
	
	$article = getArticle($id);
	$comments = getComments($id);
	
}
?>

<!DOCTYPE html>



  
</head>




<html>
	<head>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>
		  tinymce.init({
			selector: '#mytextarea'
		  });
		  </script>	   
		<meta charset="utf-8" />
		<title><?= $article->title ?></title>
	</head>
	
	<body>
	  <a href="index.php">Retour aux articles</a>
		
	  <div class="container">
		
			<h3><?= $article->title ?><time><?= $article->date ?></time><br/></h3>
			
		  <!-- ajouter action au submit du formulaire pour stocketr les infos en bdd -->
  <form method="post" action="article.php">
    <textarea id="mytextarea"><?= $article->content ?></textarea>
	  <input type="submit" value="Submit">
  </form>
		  
		  <!-- https://www.tiny.cloud/docs/quick-start/ -->
			<hr />

			<?php

			if(!empty($errors)):?>

				<?php foreach($errors as $erros): ?>
			<p><?= $error ?></p>
				<?php endforeach; ?>

			<?php endif; ?>

		  
		</div>
	</body>
</html>