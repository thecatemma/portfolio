<?php


include('./header.php'); //contient le doctype, et head.

?>
<h2>Mot de passe :</h2>
	 <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>

	<?php
	include('./footer.php');
//	mysql_close();
	?>



