<?php 
session_start(); 
if(empty($_GET['lang'])){
    $_SESSION['lang'] = "fr";
}else{
    switch($_GET['lang']){
        case "fr":
        $_SESSION['lang'] = "fr";
        break;
		 case "de":
        $_SESSION['lang'] = "de";
        break;
        case "en":
        $_SESSION['lang'] = "en";
        break;
        case "ch":
        $_SESSION['lang'] = "ch";
        break;
		 case "pt":
        $_SESSION['lang'] = "pt";
        break;
		case "it":
        $_SESSION['lang'] = "it";
        break;
        default :
        $_SESSION['lang'] = "fr"; //au cas ou quelqu'un rentre autre chose que fr/en ou it
        break;
    }
}
 
switch($_SESSION['lang']){
        case "fr":
        $fichier_langage = "lang/fr.php";
        break;
        case "en":
        $fichier_langage = "lang/en.php";
        break;
        case "it":
        $fichier_langage = "lang/it.php";
        break;
		 case "ch":
        $fichier_langage = "lang/cz.php";
        break;
		 case "de":
        $fichier_langage = "lang/de.php";
        break;
		 case "pt":
        $fichier_langage = "lang/pt.php";
        break;
		 case "es":
        $fichier_langage = "lang/es.php";
        break;
}
include($fichier_langage);
?>

<html> 



   <head> 

         <meta charset="utf-8">

        <title>FAQ</title> 

        <script type="text/javascript" src="js/script-formulaire-2.js"></script>



        <!-- css -->
        <link rel="stylesheet" href="css/style-faq.css">  <!-- important de mettre en dessous -->
        <link rel="stylesheet" href="css/styles.css">  <!-- important de mettre en dessous -->


    </head> 

    

    <!-- <body > onload="initElement();" -->

    <body >



<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavForm">

            <div class="container">

                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logocan.svg"  alt="" /></a> 

				 <div class="dropdown"> 



   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 

                    <?php echo _LANGUES;?>

                     <i class="fas fa-bars ml-1"></i> 

                </button> 

				<div class="dropdown-menu">

			             <a class="dropdown-item" href="formulaire-eta-2.php?lang=fr"><span class="flag-icon flag-icon-fr"> </span> <?php echo _FR;?></a>
						 <a class="dropdown-item" href="formulaire-eta-2.php?lang=es"><span class="flag-icon flag-icon-es"> </span><?php echo _ES;?></a>
						 <a class="dropdown-item" href="formulaire-eta-2.php?lang=en"><span class="flag-icon flag-icon-us"> </span><?php echo _EN;?></a>
						 <a class="dropdown-item" href="formulaire-eta-2.php?lang=ch"><span class="flag-icon flag-icon-cn"> </span><?php echo _CZ;?></a>
						 <a class="dropdown-item" href="formulaire-eta-2.php?lang=it"><span class="flag-icon flag-icon-us"> </span><?php echo _IT;?></a>
						 <a class="dropdown-item" href="formulaire-eta-2.php?lang=pt"><span class="flag-icon flag-icon-cn"> </span><?php echo _PT;?></a>
						 <a class="dropdown-item" href="formulaire-eta-2.php?lang=de"><span class="flag-icon flag-icon-cn"> </span><?php echo _DE;?></a>
                </div>

            </div>

        </nav>


        

<section class="page-section2" id="team">

		</section>

		  <section class="page-section2 bg-light" id="team">

            <div class="container">

                <div class="text-center">

                    <h3 class="section-heading text-uppercase">FAQ</h3> 

                    <!-- Consentement et déclaration -->

                </div>

            </div>

        </section>


        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
  
	  <h2>FAQ </h2>
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title" style="color: rgb(197, 75, 58);">
			  Question : Je n’ai pas pu soumettre ma demande d’AVE à cause d’un problème technique (p. ex., avec mon paiement ou mon formulaire de demande).
			  Puis-je tout de même prendre mon vol à destination du Canada?
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>Reponse</p>
			  <ul>
				<li>Non. L’AVE est une exigence d’entrée obligatoire. Si vous n’avez pas été en mesure d’obtenir une AVE,
				vous ne devriez pas prévoir ou entreprendre un voyage au Canada.</li>
				<li>Si vous décidez de vous rendre au Canada sans une AVE, 
				vous serez retardé ou on vous empêchera de prendre votre avion à destination du Canada.</li>
			  </ul>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title" style="color: rgb(197, 75, 58);">
			  Question : J’ai soumis une demande d’AVE, 
			  mais je n’ai reçu aucun courriel d’IRCC. Puis-je tout de même me rendre au Canada?
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>Reponse : Non. L’AVE est une exigence d’entrée obligatoire. 
			  Vous ne devriez pas vous rendre au Canada tant qu’une décision n’aura pas été rendue pour votre AVE.

			  Dans la plupart des cas, les demandeurs recevront un courriel de confirmation d’Immigration, Réfugiés et Citoyenneté Canada (IRCC) quelques minutes après avoir soumis une demande d’AVE.
			  Toutefois, le traitement de certaines demandes peut prendre quelques jours.
			  
			  Si vous devez partir pour le Canada bientôt, vous devriez peut-être reporter votre vol.
			  Vérifiez le dossier des courriers indésirables de l’adresse électronique que vous avez fournie dans votre formulaire de demande d’AVE. 
			  Certains filtres antipourriel peuvent bloquer les courriels automatiques d’IRCC.</p>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title" style="color: rgb(197, 75, 58);">
			  Question : Ma demande d’AVE a été refusée. Puis-je tout de même me rendre au Canada ?
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>Reponse : Si votre demande a été refusée, vous ne devriez pas vous rendre au Canada. Si vous tentez de vous rendre au Canada malgré tout, 
			  vous ne pourrez pas prendre votre avion à destination du Canada.
			  
			  Nous vous conseillons de présenter une nouvelle demande d’AVE 
			  seulement après avoir fait le nécessaire pour remédier aux motifs ayant mené au refus de votre demande initiale.</p>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title" style="color: rgb(197, 75, 58);">
			  Question : Qu'est-ce qu'un étranger dispensé de l'obligation de visa ?
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>Reponse : Un étranger dispensé de l’obligation de visa est une personne qui n’est ni un citoyen canadien ni un résident permanent 
			  du Canada et qui n’a habituellement pas besoin d’un visa pour entrer au Canada.</p>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title" style="color: rgb(197, 75, 58);">
			  Question : Est-ce qu’il y a des dispenses de l’obligation d’obtenir une AVE fondées sur l’âge ?
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>Reponse : Non. Tous les voyageurs originaires de pays visés par l’AVE, 
			  peu importe leur âge, doivent obtenir une AVE pour entrer au Canada par avion.</p>
			</div>
		  </div>
		</div>
  
  </div>
</section>

    </body>

</html>