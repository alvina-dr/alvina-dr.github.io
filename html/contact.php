<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<link rel="icon" href="../icon.ico" />
	<meta name="description"
		content="Jeune étudiante en DUT Métiers du Multimédia et de l'Internet à Bordeaux Montaigne. Graphisme • Level Design • Photographie" />
	<meta name=”viewport” content=”width=device-width, initial-scale=1>

	<title>Alvina Damasio--Razafiarizaka | Présentation</title>

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/contact.css">
	<link rel="stylesheet" href="../css/flickity.css">

</head>

<body>
	<!--------------------------------------------------------- MENU ------------------------------------------------------>

	<iframe class="include fix" src="0commons/navbar.html" seamless></iframe>
	<!---------------------------------------------- TEXT PRESENTATION ------------------------------------------------>
	<a href="#" class="bouton_remonter">▲</a>

	<div class="espace"></div>
	<div class="row_simple_present">
		<div class="column_simple" id="deuxtiers">
			<img src="../RESSOURCES/Photo Alvina 1.png" width="90%">
		</div>
		<div class="column_simple" id="tiers">
			<h1 class="present_big_present">Contact</h1>
			<p class="explication_text_present">Pour toute demande vous pouvez me contacter grâce au formulaire suivant.
			</p>
			<br><br>
    <form method="post">
        <label class="explication_text_present">Email</label> <!--Champ de l'e-mail--><br>
        <input class="mail_textarea" type="email" name="email" required><br><br>

        <label class="explication_text_present">Message</label> <!--Champ du message-->
        <textarea class="message_textarea" type="text" name="message" required></textarea><br><br>

        <input type="submit" class="bouton_envoyer"> <!--Input = Bouton Envoyer-->
    </form>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('alvinadr@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
		</div>
	</div>


	<!------------------------------------------------------ FOOTER ------------------------------------------------------>

	<iframe class="include" src="0commons/footer.html" seamless></iframe>
	<!------------------------------------------------------ SCRIPTS ------------------------------------------------>
	<script src="https://kit.fontawesome.com/68b1f887b3.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="../js/flickity.pkgd.js"></script>
	<!--------------------------------------------------------------------------------------------------------------->

</body>

</html>