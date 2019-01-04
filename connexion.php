<?php


include('./header.php'); //contient le doctype, et head.

?>

	 <form action="secret.php" method="post">
		 <h2>Mot de passe :</h2>
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>

	<?php
	include('./footer.php');
//	mysql_close();
	?>



