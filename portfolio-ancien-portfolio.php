
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- META TITLE & DESCRIPTION-->
        <title>Patte du web - Simon Motelle - L'avant Patte du web</title>
        <meta name="description" content="Voci à quoi ressemblait mon portfolio avant ma nouvelle identité graphique.">
        <link rel="canonical" href="https://patteduweb.fr/portoflio-ancien-portfolio.php">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <!-- STYLES -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="header_">
       
          <?php 
            include('header.php');
          ?>
        </header>
        <section class="section-portfolio">
            <div class="container">
                <h1 class="animate__animated animate__fadeIn animate__slower">L'avant Patte du web</h1>
            <div class="fond-qui col-12 animate__animated animate__fadeInUp  animate__delay-1s">
                <div class="col-5">
                    <div class="description">
                    <img id ="griffe-portrait" src="img/griffe-portrait.svg" alt="griffe marron">
                     <h3>Portfolio</h3>
                     <p class="date-folio">Date : 2020</p>
                     <p class="txt-folio">Voici à quoi ressemblait mon portfolio avant <strong>ma nouvelle identité graphique !</strong></p>
                    <p class="txt-folio">Pour voir <strong>l'intégration</strong> c'est via le bouton juste en dessous.</p>
                    <a class="button" href="https://portfolio.patteduweb.fr" target="blank">Intégration</a>
                     <h4>Missions</h4>
                     <p class="missions">Maquette - intégration</p>
                    </div> 
                </div>
                <div class="col-7">
                    <div class="fond-crea">
                        <div class="bloc-crea">
                            <div class="bloc-port-img">
                                   <img class="border-radius" src="img/folio/folio-perso-maquette-desktop.png" alt="Maquette desktop ancien portfolio">
                            </div>
                            <div class="crea">
                                <h3>Maquette desktop</h3>
                            </div>
                        </div><hr class="clear">
                        <div class="bloc-crea mobile">
                            <div class="bloc-port-img">
                                   <img class="border-radius" src="img/folio/folio-perso-maquette-mobile.png" alt="Maquette mobile ancien portfolio">
                            </div>
                            <div class="crea">
                                <h3>Maquette mobile</h3>
                            </div>
                        </div><hr class="clear">
                    </div>
                </div>
              </div>

            </div>

          </section>



    <?php 
        include('footer.php');
    ?>

    </body>  
    
    <!-- ICI LES SCRIPTS -->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/js.js"></script>
  <script>
    AOS.init();
  </script>
</html>