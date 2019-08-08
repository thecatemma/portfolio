<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA aka HEMASN</title>
    </head>
    <body>

	<?php
		if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "escargot") 
		// Si mot de passe est bon
		{
		// On affiche les codes

			require_once('./bo.php');
		}
		else // Sinon, on affiche un message d'erreur
		{
			echo '<p>Mot de passe incorrect</p>';
		}
	?>

    </body>
	
</html>