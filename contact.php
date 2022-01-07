<?php 
        require_once 'recaptcha/autoload.php';
		if( isset( $_POST["envoyer"] ) AND $_POST["envoyer"] == "Envoyer"){
		$nom = $_POST["nom"];
		$email = $_POST["email"];
		$message = htmlspecialchars($_POST["message"]);
        $objet = ($_POST["objet"]);     


		if($nom != "" AND $email != "" AND $message != "" AND $objet != ""){
            
            if(isset($_POST['g-recaptcha-response'])){
                $recaptcha = new \ReCaptcha\ReCaptcha('6LepDI8UAAAAADn7pbjj6N7l3TxpClXZuX4aCHUL');
                $resp = $recaptcha->verify($_POST['g-recaptcha-response']);

                if ($resp->isSuccess()) {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $texte = "<p style='font-weight:bold;'>Nom : $nom</p>";
                        $texte .= "<p>Objet : $objet</p>";
                        $texte .= "<p>E-mail : $email</p>";// Le .= va rajouter du contenu à l'ancienne valeur
                        $texte .= "<p>Message : $message</p>";

                        // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                        $headers[] = 'MIME-Version: 1.0';
                        $headers[] = 'Content-type: text/html; charset=utf-8';
                        
                        // En-têtes additionnels
                        $headers[] = "From: $nom <$email>\n";
                       // $headers[] = "From: Contact Patte du web";
                        mail("simon.motelle@outlook.fr", "Patte du Web", $texte, implode("\r\n", $headers) );
                        $message_alert= "Votre message a bien été envoyé !";
                        } else {
                            $message_alert = "L'adresse mail n'est pas valide";
                        } 
                } else {
                    $errors = $resp->getErrorCodes();
                    $message_alert ="Recaptcha pas ok !";
                }
        
            }
            

		} else {
			$message_alert = "Tous les champs ne sont pas remplis";
		}


	}
 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- META TITLE & DESCRIPTION-->
        <title>Patte du web - Simon Motelle - Contact</title>
        <meta name="description" content="Si vous souhaitez me contacter, c'est ici que ça se passe !">
        <link rel="canonical" href="https://patteduweb.fr/contact.php">
        <meta name="robots" content="noindex">
        <!-- RAJOUTER BALISES OG -->

        <!-- LES FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
        <!-- AUTRE LINK -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">-->
        <link      rel="stylesheet"      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"    />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <!-- STYLES -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="header_">
        <?php 
 		if(isset($message_alert)){
 		 ?>	
        <div class="alert">
 			<p>
             <?php 
 				echo $message_alert;
 		    ?>
            </p>
 		</div>
         <?php 
 		}
 		 ?>       
          <?php 
            include('header.php');
          ?>

      

          </header>
       
        <section class="col-12" id="contact" data-aos="fade-down" data-aos-duration="600" data-aos-delay="250">
            <div class="container">
                <div >
                    <h2>Contactez-moi</h2>
                </div>
                <div class="contact">
                <form action="" method="POST">
                    <label for="">Nom</label><br>
                    <input type="text" name="nom" value="<?php if(isset($nom)){ echo $nom; } ?>" required><br>
                    <label for="">E-mail</label><br>
                    <input type="email" name="email" value="<?php if(isset($email)){ echo $email; } ?>" required><br>
                    <label for="">Objet</label><input type="text" name="objet" value="<?php if(isset($objet)){ echo $objet; } ?>" required><br>
                    <label for="">Votre message</label><br>
                    <textarea name="message" required><?php if(isset($message)){ echo $message; } ?></textarea><br>
                    <div class="c_center">
                        <div class="g-recaptcha" data-sitekey="6LepDI8UAAAAAASbSPYr0BOAD8oB-dwknU9NtGQU"></div>
                    </div>
                     <br/>
                    <input class="submit" type="submit" name="envoyer" value="Envoyer">
                </form>
            </div>
            </div>
            
        </section><hr class="clear">

    <?php 
        include('footer.php');
    ?>

    </body>  
    
    <!-- ICI LES SCRIPTS -->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/js.js"></script>
  <script>
    AOS.init();
  </script>
</html>