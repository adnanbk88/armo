<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo.png" type="image/x-icon" > 
	<meta charset="UTF-8">
	<title>Gestion des visites</title>
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
	<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



	
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
					<img alt="First slide" class="d-block w-100" src="{{asset('img/4.jpg')}}">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Second slide" class="d-block w-100" src="{{asset('img/1.jpg')}}">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Third slide" class="d-block w-100" src="{{asset('img/3.jpg')}}">
					<div class="carousel-caption d-none d-md-block">
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
    <div>
		<style>
			h2{
				display: flex;
				text-align: center;
				justify-content: center;
			}
			p{
				display: flex;
				text-align: center;
				justify-content: center;
			}
		.accordion {
		  background-color: #eee;
display: flex;
text-align: center;
justify-content: center;
		  color: #444;
		  cursor: pointer;
		  padding: 18px;
		  width: 100%;
		  border: none;
		  text-align: left;
		  outline: none;
		  font-size: 1.2rem;
		  transition: 0.4s;
		}
		
		.active, .accordion:hover {
		  background-color: #ccc;
		}
		
		.accordion:after {
		  content: '\002B';
		  color: #777;
		  font-weight: bold;
		  float: right;
		  margin-left: 5px;
		}
		
		.active:after {
		  content: "\2212";
		}
		
		.panel {
		  padding: 0 18px;
		  background-color: white;
		  max-height: 0;
		  overflow: hidden;
		  transition: max-height 0.2s ease-out;
		}
		</style>
		</head>

		
		<h2 style="color: red;">La santé au travail</h2>
		<p><b>La santé au travail est une démarche interdisciplinaire, associant employés et employeurs, dans le but de créer un lieu de travail favorable à la santé et notamment de lutter contre le harcèlement au travail et contre la « discrimination salariale selon l’état de santé ».</b></p>
		<button class="accordion">Ajouter une visite</button>
		<div class="panel">
			<div class="container">

				<button class="btn btn-primary my-3 mr-3">Visite d'ambauche</button>
				<button class="btn btn-primary my-3 mr-3">Visite spantannée</button>
				<button class="btn btn-primary my-3 mr-3">Visite peridoique</button>
				<button class="btn btn-primary my-3 mr-3">Visite de reprise</button>
				<button class="btn btn-primary my-3 mr-3">Visite d'audiogramme</button>
				<button class="btn btn-primary my-3 mr-3">Visite de grocesse</button>
				<button class="btn btn-primary my-3 mr-3">Visite des cas exceptionnels</button>
			</div>
		</div>
		
		<button class="accordion">Afficher les visites programmées</button>
		<div class="panel">
			<div style="padding: 5px; text-align: initial; margin-left: 0px;" class="container">

				<FORM style="padding: 5px; text-align: initial; margin-right: 1500px;">
					<SELECT name="nom"  size="1">
					<OPTION>VISITE </OPTION>
					<OPTION>VISITE DE </OPTION>
					<OPTION>VISITE DE </OPTION>
					<OPTION>VISITE DE </OPTION>
					<OPTION>VISITE DE </OPTION>
					<OPTION>VISITE DE </OPTION>
					
					</SELECT>
					</FORM>
					<FORM>
						<SELECT style="padding: 5px; text-align: initial; margin-left: 1500px;" name="nom" size="1">
						<OPTION>MOIS</OPTION>
						<OPTION>1</OPTION>
						<OPTION>2</OPTION>
						<OPTION>3</OPTION>
						<OPTION>4</OPTION>
						<OPTION>5</OPTION>
						<OPTION>6</OPTION>
						<OPTION>7</OPTION>
						<OPTION>9</OPTION>
						<OPTION>10</OPTION>
						<OPTION>11</OPTION>
						<OPTION>12</OPTION>
						
						</SELECT>
						</FORM>
			</div>
			<table class="table">
				<thead>
				  <tr>
					<th scope="col">VISITE / JOURS </th>
					<th scope="col">Lundi 1 </th>
					<th scope="col">Mercredi 1 </th>
					<th scope="col">Lundi 2 </th>
					<th scope="col">Mercredi 2 </th>
					<th scope="col">Lundi 3</th>
					<th scope="col">Mercredi 3 </th>
					<th scope="col">Lundi 4 </th>
					<th scope="col">Mercredi 4 </th>
					
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td>Otto</td>
					<td>@mdo</td>
				  </tr>
				  <tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>Thornton</td>
					<td>@fat</td>
				  </tr>
				  <tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				  </tr>
				</tbody>
			  </table>
	    </div>	
		<button class="accordion">Ajouter un employé</button>
		<div class="panel">
			<div class="container">

				<button class="btn btn-primary my-3 mr-3">Ajouter un employé</button>
			</div>
		</div>
		
		<button class="accordion">Afficher un employé</button>
		<div class="panel">
			<div class="container">
<form class="text-center my-3 mr-3" action="">
		<label for="">Entrer le matricule d'employé : </label>
	<input type="text" placeholder="saisire le matricule">
		</form>
				<button class=" text-center btn btn-primary my-3 mr-3">Afficher un employé enregistré</button>
			</div>
		</div>
		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;
		
		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		  });
		}
		</script>
    </div>
    <footer class="site-footer">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12 col-md-6">
			</div>
			<div class="col-xs-6 col-md-3">
			</div>
			<div class="col-xs-6 col-md-3">
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