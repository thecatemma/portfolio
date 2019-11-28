<?php


include('./header.php'); //contient le doctype, et head.

?>

	 <form action="admin/index.php" method="post">
		 <h2>Mot de passe :</h2>
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
		 <a href="index.php"> <h3>Retour</h3> </a>
        </form>

<?php
	include('./footer.php');

//	mysql_close();