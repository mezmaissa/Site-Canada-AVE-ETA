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

        <title>Contact</title> 

        <script type="text/javascript" src="js/script-formulaire-2.js"></script>



        <!-- css -->
        <link rel="stylesheet" href="css/style-contact-form.css">  <!-- important de mettre en dessous -->
        <link rel="stylesheet" href="css/styles.css">  <!-- important de mettre en dessous -->

     
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->


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

                    <h3 class="section-heading text-uppercase">CONTACT</h3> 

                    <!-- Consentement et déclaration -->

                </div>

            </div>

        </section>

        <section class="page-section" id="contact" style="margin-top: 5%; margin-bottom: 10%;">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-subheading text-muted"> Si vous avez une question</h3>
                </div>
                <form id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *"/>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="subject" type="text" placeholder="Subject *" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" placeholder="Your Message *"></textarea>
                            </div>
                        </div>
                    </div>
                        <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        

    </body>

</html>