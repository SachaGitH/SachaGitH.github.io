<?php 


if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['message'])) {

try {

$bdd = new PDO("mysql:host=localhost; dbname=portfolio; charset=utf8", "root", "");

} catch(Excpetion $e) {
  die($e->getMessage());
}


$requete = $bdd->prepare('INSERT INTO formulaire(prenom, nom, adressemail, message) VALUES(?, ?, ?, ?)');

$requete->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['message']));

  echo "Votre message à bien été envoyé, merci de votre attention";


}


?>

<!DOCTYPE html>

<html lang="fr-FR">
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css"><!--référance du fichier css-->
	    <link rel="icon" href="C:\Users\sacha\Desktop\BTS SIO\2021-2022\Portfolio\img\logo site.ico">


	<title>Portfolio Sacha VANNIER</title>
</head>


<body>

  <header class="p1"><!--bandeau en haut-->
    <div id="logo"></div> <!--logo du bandeau-->
    <h1 class="folio" ><a class="folio" href="index.html"> Mon Portfolio</a></h1><!--lien vers Mon Portfolio-->
    <div class="lienDroit" >
    <p><a class="bandeau" href="Qui_suis_je.html"><b> QUI SUIS-JE ?</b></a></p><!--lien vers qui suis-je-->
    <p><a class="bandeau" href="Compétence.html"><b> COMPÉTENCES</b></a></p><!--lien vers Compétence-->
    <p><a class="bandeau" href="Me_contacter.php"><b> ME CONTACTER</b></a></p><!--lien vers me contacter-->
    </div>
  </header>
	<!--<p>Pour m'envoyez un mail cliquez ici <a href="mailto:sacha.vannier.contacte@gmail.com">Mail</a></p>lien vers l'envoi de mail-->

  <section>
    <div id="ME_CONTACTER">

    <br>
  <h1 class="titre">ME CONTACTER</h1>


  </section>

<section class="user-contact">
        <div class="contact-heading">
           <p>Formulaire de contact <br></p>
        </div>
                
        <div class="form-wrapper">
        
         <form action="Me_contacter.php" method="POST" id="contactForm" name="contactForm">
           
            <div class="name-block">
            <input type="text" class="first-name input-field" maxlength="256" name="firstname" placeholder="Prenom" required=""  >
            <input type="text" class="last-name input-field" maxlength="256" name="lastname" data-name="LastName" placeholder="Nom" required="">
            </div>
            
            <input type="email" class="input-field" maxlength="256" name="email" placeholder="Adresse E-mail" required="">
            <textarea name="message" placeholder="Votre message" maxlength="5000" required="" class="input-field message"></textarea>
            <input type="submit" value="Envoyer" class="contact-btn btn_global w-button">
           

         </form>
         
      </div> 
           
    </section> 


  <footer><!--bandeau du bas-->
    <a href="#" class="myButton1">⇧</a> <!--bouton pour monter-->
    <p class="bas_de_page">📧 sacha.vannier.contacte@gmail.com</p> <!--mon e-mail-->
    <p class="bas_de_page2">Copyright © 2021 : <a href="index.html" class="Copy" >Sacha VANNIER</a></p><!--Copyright-->

  </footer>
</body>
</html>