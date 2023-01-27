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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6NWKP571MZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6NWKP571MZ');
</script>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Site officiel de l'accompagnement de demande d'AVE (Autorisation de Voyager Electronique). Embarquez pour le Canada !" />
        <meta name="author" content="AVE-CANADA-CA"/>
        <title><?php echo _TITRE;?>Autorisation de voyage électronique (AVE) - Ave-Canada-Ca.com</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" /> -->
        <!-- Font Awesome icons (free version)-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style_ind.css" rel="stylesheet" />
    </head>
    
    <!-- <body > onload="initElement();" -->
    <body id="page-top">
<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logocan.svg"  alt="" /></a> 
				 <div class="dropdown"> 

                 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                    <?php echo _LANGUES;?>
                     <i class="fas fa-bars ml-1"></i> 
                </button> 
				<div class="dropdown-menu">
				 <a class="dropdown-item" href="index.php?lang=fr"><span class="flag-icon flag-icon-fr"> </span> <?php echo _FR;?></a>
                 <a class="dropdown-item" href="index.php?lang=es"><span class="flag-icon flag-icon-es"> </span><?php echo _ES;?></a>
                 <a class="dropdown-item" href="index.php?lang=en"><span class="flag-icon flag-icon-us"> </span><?php echo _EN;?></a>
				 <a class="dropdown-item" href="index.php?lang=ch"><span class="flag-icon flag-icon-cn"> </span><?php echo _CZ;?></a>
				 <a class="dropdown-item" href="index.php?lang=it"><span class="flag-icon flag-icon-it"> </span><?php echo _IT;?></a>
				 <a class="dropdown-item" href="index.php?lang=pt"><span class="flag-icon flag-icon-pt"> </span><?php echo _PT;?></a>
				 <a class="dropdown-item" href="index.php?lang=de"><span class="flag-icon flag-icon-de"> </span><?php echo _DE;?></a>
				
				
				
                </div>
            </div>
        </nav>

<!-- Masthead-->
<header class="masthead">
            <div class="container">
			<div class="masthead-heading text-uppercase"><?php echo _AUTORISATION_TITRE;?><div>
                 <div class="masthead-subheading"><?php echo _AUTORISATION_SOUS_TITRE;?><div>
                
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href=""><?php echo _BOUTON_AVE; ?></a>
            </div>
        </header>

<!-- Services-->
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo _COMMENT; ?></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">1</h4>
                        <p class="text-muted"><?php echo _SOUM_INFOS; ?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">2</h4>
                        <p class="text-muted"><?php echo _VISA_MAIL; ?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-print fa-stack-1x fa-inverse"></i> 
							<!-- changer icone dans bulle -->
                        </span>
                        <h4 class="my-3">3</h4>
                        <p class="text-muted"><?php echo _IMP_TEL; ?></p>
                    </div>
                </div>
				
            </div>
        </section>

        <!-- Portfolio Grid-->

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase"><?php echo _C_QUOI;?></h3>
                    <h3 class="section-subheading text-muted"><?php echo _EXIGEANCE;?></h3>
                </div>
                
                  
            
            </div>
        </section>
        

<!-- About-->
<section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo _PAYS; ?></h2>
                   
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1bis.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo _EUROPE; ?></h4>
                               
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo _LISTE_PAYS_EUROPE; ?> </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2bis.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo _AMERIQUE; ?> </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo _LISTE_PAYS_AMERIQUE; ?> </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3bis.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo _OCEANIE; ?></h4>
                            
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo _LISTE_PAYS_OCEANIE; ?> </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4bis.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo _ASIE; ?></h4>
           
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo _LISTE_PAYS_ASIE; ?> </p></div>
                        </div>
                    </li>
                    
                </ul>
					 <!-- <p class="text-muted"><?php echo _AST_1+'</br>'+_AST_2; ?></p> -->
            </div>
        </section>
<!-- Team-->
<section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo _COMMENT_APP; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo _VALIDE; ?></h3>
                </div>
     
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo _SOUMISSION_P; ?></h2>
                    <p class="pcwhite">
					<?php echo _SOUMISSION_1; ?>
</p>
<ul><li>
<p class="pcwhite">
<?php echo _SOUMISSION_2; ?>
</p></li>  <li><p class="pcwhite">
<?php echo _SOUMISSION_3; ?>
</p></li>    <li><p class="pcwhite">
<?php echo _SOUMISSION_4; ?>
</p></li>	 <li><p class="pcwhite">
<?php echo _SOUMISSION_5; ?>
</p></li>    <li><p class="pcwhite">
<?php echo _SOUMISSION_6; ?>
</p></li>	 <li><p class="pcwhite">
<?php echo _SOUMISSION_7; ?>
</p></li>    <li><p class="pcwhite">
<?php echo _SOUMISSION_8; ?>
</p></li>	 <li><p class="pcwhite">
<?php echo _SOUMISSION_9; ?>
</p></li>    <li><p class="pcwhite">
<?php echo _SOUMISSION_10; ?>
</p></li>	 <li><p class="pcwhite">
<?php echo _SOUMISSION_11; ?>
</p></li>	 <li><p class="pcwhite">
<?php echo _SOUMISSION_12; ?>
</p></li>    <li><p class="pcwhite">
<?php echo _SOUMISSION_13; ?> </p>
 </p></li></ul>            </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                  
                    
                    <div class="text-center">
                        <div id="success"></div>
                         <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href=""><?php echo _BOUTON_AVE; ?></a>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                     <div class="col-lg-4 text-lg-left"> 
					
						<img class="flag" src="assets/img/flag-roung.png" height="90" width="90"></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                      
					  <h4><?php echo _TITRE; ?></h4>
					<h5><?php echo 'contact@ave-canada-ca.com'; ?></h5>

	

					 
                    </div>
                    <div class="col-lg-4 text-lg-right">
                         <a class="mr-3" href="politique.php"><?php echo _POLITIQUE; ?></a> 
                         <a href="contact.php">Contact</a> 
                         <a href="faq.php">FAQ</a> 
					
                    </div>
                </div>
				<p><?php echo _ATTENTION; ?></p>
            </div>
			<p> © 2021 by eTACanadaform.com</p>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>