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

                    <h3 class="section-heading text-uppercase"> Politique de confidentialit?? </h3> 

                    <!-- Consentement et d??claration -->

                </div>

            </div>

        </section>


        <div class="container-fluid" >
            <div class="policy" style="margin-left: 5%; margin-right: 5%; margin-top: 5%; margin-bottom: 10%;">
            <div class="row">
                <p>
                
                ETA Canada Online s'engage ?? prot??ger votre vie priv??e et ?? d??velopper une technologie qui vous offre l'exp??rience en ligne la plus puissante et la plus s??re. Cette d??claration de confidentialit?? s'applique au site Web d'ETA Canada Online et r??git la collecte et l'utilisation des donn??es. En utilisant le site Web de ETA Canada Online, vous consentez aux pratiques en mati??re de donn??es d??crites dans cette d??claration.
                
                Collecte de vos informations personnelles
                
                Le site Web d'ETA Canada Online recueille des informations personnelles identifiables, telles que votre adresse ??lectronique, votre nom, votre adresse personnelle ou professionnelle ou votre num??ro de t??l??phone. ETA Canada Online recueille ??galement des informations d??mographiques anonymes, qui ne vous sont pas propres, telles que votre code postal, votre ??ge, votre sexe, vos pr??f??rences, vos int??r??ts et vos favoris.

                </p> 
            </div>

            <div class="row" >
                <p>

                L'ATE Canada en ligne recueille aussi automatiquement des renseignements sur votre mat??riel informatique et vos logiciels. Ces renseignements peuvent comprendre : votre adresse IP, le type de navigateur, les noms de domaine, les temps d'acc??s et les adresses des sites Web de r??f??rence. ETA Canada Online utilise ces informations pour le fonctionnement du service, pour maintenir la qualit?? du service et pour fournir des statistiques g??n??rales concernant l'utilisation du site Web d'ETA Canada Online.

                </p> 
            </div>

            <div class="row">
                <p>

                <h5>Utilisation de vos informations personnelles</h5>
                
                ETA Canada Online recueille et utilise vos informations personnelles pour faire fonctionner le site Web de ETA Canada Online et fournir les services que vous avez demand??s. ETA Canada Online utilise ??galement vos informations personnelles identifiables pour vous informer d'autres produits ou services disponibles chez ETA Canada Online et ses affili??s. ETA Canada Online peut ??galement vous contacter via des enqu??tes pour effectuer des recherches sur votre opinion des services actuels ou de nouveaux services potentiels qui pourraient ??tre offerts.
                </p> 
            </div>
            
            <div class="row">
                <p>
                TA Canada Online ne vend, ni ne loue ses listes de clients ?? des tiers. ETA Canada Online peut, de temps ?? autre, vous contacter au nom de partenaires commerciaux externes au sujet d'une offre particuli??re qui pourrait vous int??resser. Dans ces cas, vos renseignements personnels identifiables (courriel, nom, adresse, num??ro de t??l??phone) ne sont pas transf??r??s ?? la tierce partie. En outre, ETA Canada Online peut partager des donn??es avec des partenaires de confiance pour nous aider ?? effectuer des analyses statistiques, vous envoyer des courriels ou du courrier postal, fournir un soutien ?? la client??le ou organiser des livraisons. Toutes ces tierces parties n'ont pas le droit d'utiliser vos informations personnelles, sauf pour fournir ces services ?? ETA Canada Online, et elles sont tenues de maintenir la confidentialit?? de vos informations.

                ETA Canada Online n'utilise pas et ne divulgue pas d'informations personnelles sensibles, telles que la race, la religion ou les affiliations politiques, sans votre consentement explicite. ETA Canada Online garde la trace des sites Web et des pages que nos clients visitent au sein de ETA Canada Online, afin de d??terminer quels services de ETA Canada Online sont les plus populaires. Ces donn??es sont utilis??es pour fournir un contenu et une publicit?? personnalis??s au sein de ETA Canada Online aux clients dont le comportement indique qu'ils sont int??ress??s par un domaine particulier.
                
                Les sites Web d'ETA Canada Online ne divulgueront vos informations personnelles, sans pr??avis, que si la loi l'exige ou si l'on croit de bonne foi qu'une telle action est n??cessaire pour : (a) se conformer aux ??dits de la loi ou se conformer ?? un processus l??gal signifi?? ?? ETA Canada Online ou au site ; (b) prot??ger et d??fendre les droits ou la propri??t?? de ETA Canada Online ; et, (c) agir dans des circonstances urgentes pour prot??ger la s??curit?? personnelle des utilisateurs de ETA Canada Online, ou du public.

                S??curit?? de vos renseignements personnels
                
                ETA Canada Online prot??ge vos informations personnelles contre tout acc??s, utilisation ou divulgation non autoris??s. ETA Canada Online s??curise les informations personnelles identifiables que vous fournissez sur des serveurs informatiques dans un environnement contr??l?? et s??curis??, prot??g?? contre tout acc??s, utilisation ou divulgation non autoris??s. Lorsque des renseignements personnels (comme un num??ro de carte de cr??dit) sont transmis ?? d'autres sites Web, ils sont prot??g??s par l'utilisation d'un chiffrement, comme le protocole SSL (Secure Socket Layer).


                Modifications de la pr??sente d??claration
                ETA Canada Online mettra occasionnellement ?? jour cette d??claration de confidentialit?? afin de refl??ter les commentaires de la soci??t?? et des clients. ETA Canada Online vous encourage ?? revoir p??riodiquement cette d??claration pour ??tre inform?? de la mani??re dont ETA Canada Online prot??ge vos informations. Information de contact ETA Canada Online accueille vos commentaires concernant cette d??claration de confidentialit??. Si vous pensez que ETA Canada Online n'a pas adh??r?? ?? cette d??claration, veuillez envoyer un courriel ?? info@ETA-Canada-Online.com. Nous d??ploierons des efforts commercialement raisonnables pour d??terminer et r??soudre rapidement le probl??me.


                </p> 
            </div>
        </div>
        </div>

    </body>

</html>




