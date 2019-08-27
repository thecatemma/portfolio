<?php		
	include 'header.php';

// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
// Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }
  
  if (!isset($_POST['captcha'])) {
    $nombreErreur++;
    $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
  } else {
    if ($_POST['captcha']!=4) {
      $nombreErreur++;
      $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
    }
  }
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    $destinataire = 'hemasn@icloud.com'; // Mon adresse email
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message
    
// Pour envoyer un email HTML, l'en-tête Content-type doit être définie
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
	if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
	if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
    echo '</div>';
  }
}
?>
		<section id="contenu-accueil">
			<article>
				<h1>inbox</h1>
			</article>
		</section>
	</header>

<div id="formulaire">

	<h2 id="post_comment">Contact Me</h2>

  <form method="post" action="mail.php">
	  
    <p><label for="Name" id="author">Name</label> <br />
	<input type="text" name="nom" id="pseudo" maxlength="30"/> </p>
    
	<p><label for="Email" id="entrer_email">Email</label><span class="etoile">*</span> <br />
	<input type="email" name="email" id="email" maxlength="50"/></p>
    
	<p><Label for="comment" id="text_comment">Message</Label><span class="etoile">*</span> <br />
    <textarea name="message" id="message" cols="8" rows="5"></textarea></p>
    
	<p>Combien font 1+3 <span class="etoile">*</span> <input type="text" name="captcha" size="3" /></p>
    
	 <p><input type="submit" name="submit" class="btn-success" value="Envoyer" /></p>
  </form>
    
  <a href=""https://www.youtube.com/channel/UCHQyXitCjlQQrSXQCB-fn0w?""><i class="fa fa-youtube"></i></a> 
  <a href="https://www.behance.net/hussonemmad23e"><i class="fa fa-behance"></i></a> 
  <a href="https://www.linkedin.com/in/emmanuelle-husson-92709b130/"><i class="fa fa-linkedin"></i></a> 
  <a href="https://www.facebook.com/emmanuelle.husson"><i class="fa fa-facebook"></i></a>
  <a href="https://github.com/thecatemma"><i class="fa fa-github"></i></a>
	
</div>



<br>

<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5250.19341041613!2d2.303794230574179!3d48.85636629999429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6702783262341%3A0xb42802ea4f18d49!2s18+Avenue+de+la+Motte-Picquet%2C+75007+Paris!5e0!3m2!1sfr!2sfr!4v1543271411127"></iframe>


<br>

</div>

<?php		
	include 'footer.php';
?>