<!DOCTYPE html>

<html>

  <head>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    
	<?php

    require_once("header.php");
    require_once("nav_sticky.html");

	?>

  <div class="background_body">

    <div class="container">

      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="message_acceuil">

            <h1> Bienvenue dans notre établissement</h1>

            <article>

              <p><br/>
              La Clinique du Virval est un établissement de santé psychosomatique et psychiatrique créé en 2012 à Calais,
              inscrit dans le pôle santé du Virval incluant le Centre Hospitalier de Calais et l’EHPAD « La Roselière ».
              La clinique a initié une réflexion éthique, notamment concernant la liberté d’aller et de venir, la promotion de
              la bientraitance, la prévention de la maltraitance, l’intimité, la confidentialité. Dans un environnement protégé et 
              rassurant, la clinique du Virval dispose de 60 chambres individuelles et 10 chambres doubles réparties sur deux niveaux. 
              Afin d’assurer une offre de soins performante, le plateau technique de la Clinique du Virval est composé d’un secteur 
              d’hydrothérapie, d’une salle de sports dotée de nombreux équipements, d’un terrain multi-sports et de salles d’activités 
              thérapeutiques. Une aile du batiment accueil des patients en hospitalisation de jour.<br><br><br>
              </p>
              <div class="row">
                <div class="col-xs-12">
              <?php require_once("standard.html"); ?>
            </div>
          </div>

            </article>

          </div>

        </div>

      </div>

    </div>

  </div>

    <div class="container">

      <div class="row">

        <div class="text-center">

          <div class="title_pres">

            <h1>Présentation de la clinique</h1>

          </div>

        </div>

      </div>

    </div>

  <div class="presentation">

    <?php require_once("img_pres.html"); ?>

  </div class="presentation">
  
  <?php
    require_once("plan_dacces.html");
    require_once("footer.php");
  ?>

  </body>

</html>
