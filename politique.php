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

        <title>Privacy Policy</title> 

        <script type="text/javascript" src="js/script-formulaire-2.js"></script>



        <!-- css -->
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

                    <h3 class="section-heading text-uppercase"> Politique de confidentialité </h3> 

                    <!-- Consentement et déclaration -->

                </div>

            </div>

        </section>


        <div class="container-fluid" >
            <div class="policy" style="margin-left: 5%; margin-right: 5%; margin-top: 5%; margin-bottom: 10%;">
            <div class="row">
                <p>
                
                ETA Canada Online s'engage à protéger votre vie privée et à développer une technologie qui vous offre l'expérience en ligne la plus puissante et la plus sûre. Cette déclaration de confidentialité s'applique au site Web d'ETA Canada Online et régit la collecte et l'utilisation des données. En utilisant le site Web de ETA Canada Online, vous consentez aux pratiques en matière de données décrites dans cette déclaration.
                
                Collecte de vos informations personnelles
                
                Le site Web d'ETA Canada Online recueille des informations personnelles identifiables, telles que votre adresse électronique, votre nom, votre adresse personnelle ou professionnelle ou votre numéro de téléphone. ETA Canada Online recueille également des informations démographiques anonymes, qui ne vous sont pas propres, telles que votre code postal, votre âge, votre sexe, vos préférences, vos intérêts et vos favoris.

                </p> 
            </div>

            <div class="row" >
                <p>

                L'ATE Canada en ligne recueille aussi automatiquement des renseignements sur votre matériel informatique et vos logiciels. Ces renseignements peuvent comprendre : votre adresse IP, le type de navigateur, les noms de domaine, les temps d'accès et les adresses des sites Web de référence. ETA Canada Online utilise ces informations pour le fonctionnement du service, pour maintenir la qualité du service et pour fournir des statistiques générales concernant l'utilisation du site Web d'ETA Canada Online.

                </p> 
            </div>

            <div class="row">
                <p>

                <h5>Utilisation de vos informations personnelles</h5>
                
                ETA Canada Online recueille et utilise vos informations personnelles pour faire fonctionner le site Web de ETA Canada Online et fournir les services que vous avez demandés. ETA Canada Online utilise également vos informations personnelles identifiables pour vous informer d'autres produits ou services disponibles chez ETA Canada Online et ses affiliés. ETA Canada Online peut également vous contacter via des enquêtes pour effectuer des recherches sur votre opinion des services actuels ou de nouveaux services potentiels qui pourraient être offerts.
                </p> 
            </div>
            
            <div class="row">
                <p>
                TA Canada Online ne vend, ni ne loue ses listes de clients à des tiers. ETA Canada Online peut, de temps à autre, vous contacter au nom de partenaires commerciaux externes au sujet d'une offre particulière qui pourrait vous intéresser. Dans ces cas, vos renseignements personnels identifiables (courriel, nom, adresse, numéro de téléphone) ne sont pas transférés à la tierce partie. En outre, ETA Canada Online peut partager des données avec des partenaires de confiance pour nous aider à effectuer des analyses statistiques, vous envoyer des courriels ou du courrier postal, fournir un soutien à la clientèle ou organiser des livraisons. Toutes ces tierces parties n'ont pas le droit d'utiliser vos informations personnelles, sauf pour fournir ces services à ETA Canada Online, et elles sont tenues de maintenir la confidentialité de vos informations.

                ETA Canada Online n'utilise pas et ne divulgue pas d'informations personnelles sensibles, telles que la race, la religion ou les affiliations politiques, sans votre consentement explicite. ETA Canada Online garde la trace des sites Web et des pages que nos clients visitent au sein de ETA Canada Online, afin de déterminer quels services de ETA Canada Online sont les plus populaires. Ces données sont utilisées pour fournir un contenu et une publicité personnalisés au sein de ETA Canada Online aux clients dont le comportement indique qu'ils sont intéressés par un domaine particulier.
                
                Les sites Web d'ETA Canada Online ne divulgueront vos informations personnelles, sans préavis, que si la loi l'exige ou si l'on croit de bonne foi qu'une telle action est nécessaire pour : (a) se conformer aux édits de la loi ou se conformer à un processus légal signifié à ETA Canada Online ou au site ; (b) protéger et défendre les droits ou la propriété de ETA Canada Online ; et, (c) agir dans des circonstances urgentes pour protéger la sécurité personnelle des utilisateurs de ETA Canada Online, ou du public.

                Sécurité de vos renseignements personnels
                
                ETA Canada Online protège vos informations personnelles contre tout accès, utilisation ou divulgation non autorisés. ETA Canada Online sécurise les informations personnelles identifiables que vous fournissez sur des serveurs informatiques dans un environnement contrôlé et sécurisé, protégé contre tout accès, utilisation ou divulgation non autorisés. Lorsque des renseignements personnels (comme un numéro de carte de crédit) sont transmis à d'autres sites Web, ils sont protégés par l'utilisation d'un chiffrement, comme le protocole SSL (Secure Socket Layer).


                Modifications de la présente déclaration
                ETA Canada Online mettra occasionnellement à jour cette déclaration de confidentialité afin de refléter les commentaires de la société et des clients. ETA Canada Online vous encourage à revoir périodiquement cette déclaration pour être informé de la manière dont ETA Canada Online protège vos informations. Information de contact ETA Canada Online accueille vos commentaires concernant cette déclaration de confidentialité. Si vous pensez que ETA Canada Online n'a pas adhéré à cette déclaration, veuillez envoyer un courriel à info@ETA-Canada-Online.com. Nous déploierons des efforts commercialement raisonnables pour déterminer et résoudre rapidement le problème.


                </p> 
            </div>
        </div>
        </div>

    </body>

</html>




