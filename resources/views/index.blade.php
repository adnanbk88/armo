<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo.png" type="image/x-icon" > 
	<meta charset="UTF-8">
	<title>Visites médicales </title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">

	<script src='index.js'></script>
	
</head>
<body>
	<section>

		<nav class="nav" id="scrollY">
			<a href="acceuil.html" class="logo"><img height: 100% 	width: 286px src="/img/ops.png" alt=""></a>
			<div class="Toggle" onclick="Menu();"></div>
			<ul class="menu">
				<li><a href="E-infirmiere.html">Espace Infirmière</a></li>
				<li><a href="E-assistante.html">Espace Gestionnaire RH</a></li>
				<li><a href="E-responsable.html">Espace Responsable RH</a></li>
				
				
			</ul>
		</nav>
		<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
				<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
				<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img alt="First slide" class="d-block w-100" src="img/armr1.jpg">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="animated bounceInRight" style="animation-delay: 1s">Armor Industries</h5>
						<p class="animated bounceInLeft" style="animation-delay: 2s"> <strong>Armor Industries est le spécialiste des cartouches laser remanufacturées, conçues selon les règles de l’économie circulaire. Situé à LBir Jdid, proche de Casablanca. </strong></p>
						<a href="https://armor-industrie.ma/"><button class="animated zoomIn" style="animation-delay: 3s">Voir plus</button></a>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Second slide" class="d-block w-100" src="img/armr2.jpg">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="animated slideInDown" style="animation-delay: 1s">Armor Industries</h5>
						<p class="animated bounceInLeft" style="animation-delay: 2s"> <strong> Avec plus de 400 collaborateurs, ingénieurs, experts, techniciens ou opérateurs qui conçoivent les cartouches de demain, Armor Industries compte parmi les entreprises d’avenir au Maroc.</strong></p>
						<a href="https://armor-industrie.ma/"><button class="animated zoomIn" style="animation-delay: 3s">Voir plus</button></a>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Third slide" class="d-block w-100" src="img/armr3.jpeg">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="animated zoomIn" style="animation-delay: 1s">Armor Industries</h5>
						<p class="animated bounceInLeft" style="animation-delay: 2s"> <strong>  Armor compte 2 000 salariés dans le monde dont 750 en France et a réalisé un chiffre d'affaires de 280 millions d'euros en 2019 </strong></p>
						<a href="https://armor-industrie.ma/"><button class="animated zoomIn" style="animation-delay: 3s">Voir plus</button></a>
					</div>
				</div>
			</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
		</script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
		</script> 
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</section>

	<section>
		<div class="services-section">
			<div class="inner-width">
			  <h1 class="section-title">QUEL TYPE DE VISITE ET POURQUOI ?</h1>
			  <div class="border"></div>
			  <div class="services-container">
	  
				<div class="service-box">
				  <div class="service-icon">
					<i class="fa fa-check"></i>
				  </div>
				  <div class="service-title">(VIP) & (EMA)</div>
				  <div class="service-desc">
					Tous les salariés sont pris en charge par un professionnel de santé dès l’embauche quel que soit le contrat (CDI, CDD ou intérim) : soit lors d’une visite d’information et de prévention initiale pouvant être réalisée par un Infirmier 

				  </div>
				</div>
	  
				<div class="service-box">
				  <div class="service-icon">
					<i class="fa fa-calendar"></i>
				  </div>
				  <div class="service-title">Visite Périodique</div>
				  <div class="service-desc">
					Ce suivi individuel est assuré tout au long du parcours professionnel: le délai entre deux visites ou examens médicaux ne peut excéder deux ans pour les salariés occupant un poste à risques particuliers (Suivi Individuel Renforcé), cinq ans pour les autres (Suivi Individuel Simple).


				  </div>
				</div>
	  
				<div class="service-box">
				  <div class="service-icon">
					<i class="fa fa-comment"></i>
				  </div>
				  <div class="service-title">Visite de Pré-reprise</div>
				  <div class="service-desc">
					La visite de pré-reprise a été instaurée pour favoriser le maintien dans l’emploi des travailleurs en arrêt de travail d’une durée de plus de trois mois. Elle est organisée par le Médecin du travail à l’initiative du médecin traitant, du médecin conseil des organismes de sécurité sociale ou du travailleur.

				  </div>
				</div>
	  
				<div class="service-box">
				  <div class="service-icon">
					<i class="fa fa-heartbeat"></i>
				  </div>
				  <div class="service-title">Visite de Reprise</div>
				  <div class="service-desc">
					En cas d’arrêt de travail pour maladie, professionnelle ou autre, accident de travail de plus de 30 jours, ou après un retour de congés maternité, l’employeur doit programmer une visite médicale de reprise du travail qui a pour objectif d’apprécier l’aptitude du salarié à reprendre l’emploi qu’il occupait avant son arrêt. Elle est obligatoire !
				  </div>
				</div>
	  
				<div class="service-box">
				  <div class="service-icon">
					<i class="fa fa-id-badge"></i>
				  </div>
				  <div class="service-title">Visite  à la demande du Salarié</div>
				  <div class="service-desc">
					
La visite occasionnelle à la demande du salarié: le salarié peut solliciter directement son médecin du travail s’il ressent des troubles qui lui semblent en rapport avec son poste de travail.

				  </div>
				</div>
	  
				<div class="service-box">
				  <div class="service-icon">
					<i class="fa fa-user"></i>
				  </div>
				  <div class="service-title">Visite  à la demande de l'Employeur</div>
				  <div class="service-desc">
					La visite occasionnelle à la demande de l’employeur: l’employeur peut solliciter un rendez-vous auprès du service de santé au travail en cas de détresse du salarié. Le médecin du travail peut lui aussi programmer un rendez-vous avec le salarié s’il le juge nécessaire.
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	</section>
	<footer class="site-footer">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12 col-md-6">
			  <h6>A propos</h6>
			  <p class="text-justify">Armor est un groupe industriel français, spécialiste de la formulation et de l'enduction de couches fines sur films minces.

				Il est présent en Europe sur le marchés des cartouches remanufacturées.
				
				Armor compte 2 000 salariés dans le monde dont 750 en France et a réalisé un chiffre d'affaires de 280 millions d'euros en 20192.</p>
			</div>
  
			<div class="col-xs-6 col-md-3">
			  <h6>Liens</h6>
			  <ul class="footer-links">
				<li>Acceuil</li>
				<li>Visites</li>
				<li>Statistiques</li>
			  </ul>
			</div>
  
			<div class="col-xs-6 col-md-3">
			  <h6>CONTACTS</h6>
			  <ul class="footer-links">
				<li><a href="#http://scanfcode.com/about/">Site de production :</a></li>
				<li><a href="#http://scanfcode.com/contact/">Boulevard Mustapha el Maani</a></li>
				<li><a href="#http://scanfcode.com/contribute-at-scanfcode/">24 150 Bir Jdid</a></li>
				<li><a href="#http://scanfcode.com/privacy-policy/">Maroc</a></li>
			  </ul>
			</div>
		  </div>
		  <hr>
		</div>
		<div class="container">
		  <div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
			  <p class="copyright-text">Copyright &copy; 2021 tous les droits sont réservés </p>
			</div>
  
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <ul class="social-icons">
				<li><a class="facebook" href="https://www.facebook.com/pg/owamaroc/community/?mt_nav=0&msite_tab_async=0"><i class="fab fa-facebook"></i></a></li>
				<li><a class="twitter" href="https://twitter.com/groupearmor?lang=fr"><i class="fab fa-twitter"></i></a></li>
				<li><a class="youtube" href="https://www.youtube.com/channel/UCclCYSySpiC1259ReY7bDZw?view_as=subscriber"><i class="fab fa-youtube"></i></a></li>
				<li><a class="linkedin" href="https://fr.linkedin.com/company/armor-industrie"><i class="fab fa-linkedin"></i></a></li>   
			  </ul>
			</div>
		  </div>
		</div>
  </footer>
</body>
</html>  