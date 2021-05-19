<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('cssb/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('cssb/css/styles.css')}}">
    <link rel="icon" href="img/logo.png" type="image/x-icon">


    <title>Visite d'ambauche</title>
  </head>
  <body>
  
<form action="">
  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Ajouter une visite</h3>
            <form action="{{url('/infermiere/VisiteAmbauche')}}" method="POST" enctype="multipart/form-data">
              @csrf                  
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Matricule</label>
                  <input type="text" class="form-control" name="matricule" id="name" placeholder="Matricule">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nom</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="nom">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Prénom</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="prenom">
                </div>
             
          <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">CIN</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="CIN">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Site:</label>
                  <select name="pets" class="form-control" id="pet-select">
                    <option value="">Veuillez choisissez</option>
                    <option value="PLATE FORME LOGISTIQUE">PLATE FORME LOGISTIQUE</option>
                    <option value="CASABLANCA">CASABLANCA</option>
                    <option value="USINE BIR JDID">USINE BIR JDID</option>
                </select>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">sex</label>
                  <select name="pets" class="form-control" id="pet-select">
                    <option value="">veuillez choisissez</option>
                      <option value="F">Femme</option>
                      <option value="H">Homme</option>
                  </select>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Cnss</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="CNSS">
                </div>
               
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date de naissance</label>
                  <input type="date" class="form-control" name="name" id="name" placeholder="date de naissance">
                </div>
    
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date d'ambauche</label>
                  <input type="date" class="form-control" name="email" id="email"  placeholder="date d'ambauche">
                </div>
               
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Radio 2021</label>
                  <input type="date" class="form-control" name="name" id="name"  placeholder="Radio 2021">
                </div>
    
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Service:</label>
                  <select name="pets" class="form-control" id="pet-select">
                    <option value="">--Veuillez choisissez--</option>
                    <option value="Achat">Achat</option>
                    <option value="Agent acceuil">Agent acceuil</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Comptabilité">Comptabilité</option>
                    <option value="Direction générale">Direction générale</option>
                    <option value="Finance">Finance</option>
                    <option value="Gestion personnel">Gestion pesonnel</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Livraison">Livraison</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Packaging">Packaging</option>
                    <option value="Planification">Planification</option>
                    <option value="Production">Production</option>
                    <option value="Qualité">Qualité</option>
                    <option value="R&D">R&D</option>
                    <option value="Reception">Rececption</option>
                    <option value="RH & SM SST">RH & SM SST</option>
                    <option value="Service géneraux">Service géneraux</option> 
                    <option value="Service médicale">Service médicale</option> 
                    <option value="Shipment">Shipment</option> 
                    <option value="Service médicale">Service médicale</option> 
                    <option value="SM QE">SM QE</option> 
                    <option value="Supplychain">Supplychain</option> 
                    <option value="Technique">Technique</option> 
                    <option value="Transport">Transport</option> 
                    <option value="Warehousing">Warehousing</option> 
                </select>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Section</label>
                  <select class="form-control" name="pets" id="pet-select">
                    <option value="">--Veuillez choisissez--</option>
                    <option value="Achat">Achats</option>
                    <option value="Agent acceuil">Agent acceuil</option>
                    <option value="Agent Qualité">Agent Qualité</option>
                    <option value="Agent Comptable">Agent Comptable</option>
                    <option value="Agent Développement">Agent Développement</option>
                    <option value="Agent Maintenance">Agent Maintenance</option>
                    <option value="Agent Ménage">Agent Ménage</option>
                    <option value="Agent Méthode">Agent Méthode</option>
                    <option value="Alimentation Couleur">Alimentation Couleur</option>
                    <option value="Alimentation Laser Mono">Alimentation Laser Mono</option>
                    <option value="Cariste">Cariste</option>
                    <option value="Chef Equipe Unité Conditionnement">Chef Equipe Unité Conditionnement</option>
                    <option value="Chef Equipe Unité Cross docking">Chef Equipe Unité Cross docking</option>
                    <option value="Chef Equipe Unité SF">Chef Equipe Unité SF</option>
                    <option value="Conditionnement">Conditionnement</option>
                    <option value="Coursier">coursier</option>
                    <option value="Cross docking">Cross docking</option>
                    <option value="Déchetrie">Déchetrie</option> 
                    <option value="Découpe">Découpe</option> 
                    <option value="Démantelement">Démantelement</option> 
                    <option value="Démontage Couleur">Démontage Couleur</option> 
                    <option value="Démontage Monochrome">Démontage Monochrome</option> 
                    <option value="Expedition">Expedition</option> 
                    <option value="Expedition & Transport">Expedition & Transport</option> 
                    <option value="Flux physique">Flux physique</option> 
                    <option value="Gardien">Gardien</option>
                    <option value="Gestionnaire RH">Gestionnaire RH</option>
                    <option value="Infirmière">Infirmière</option>
                    <option value="Jardinier">Jardinier</option>
                    <option value="Livraison">Livraison</option>
                    <option value="Machine filmeuse">Machine filmeuse</option>
                    <option value="Magasinier S.F">Magasinier S.F</option>
                    <option value="Montage Couleur">Montage Couleur</option>
                    <option value="Montage Monochrome">Montage Monochrome</option>
                    <option value="Nettoyage composant">Nettoyage composant</option>
                    <option value="Planification">Planification</option>
                    <option value="Planification & Expedition">Planification & Expedition</option>
                    <option value="Préparation commande locale">Préparation commande locale</option>
                    <option value="Préparation Couleur">Préparation Couleur</option>
                    <option value="Préparation Monochrome">Préparation Monochrome</option>
                    <option value="Production">Production</option>
                    <option value="R&D">R&D</option>
                    <option value="Remplissage Couleur">Remplissage Couleur</option>
                    <option value="Remplissage Monochrome">Remplissage Monochrome</option> 
                    <option value="Reporting Production">Reporting Production</option> 
                    <option value="RES PROJET RES">RES PROJET RES</option> 
                    <option value="Res.Approvisionnement">Res.Approvisionnement</option> 
                    <option value="Res.De Production">Res.De Production</option> 
                    <option value="Res.Informatique">Res.Informatique</option> 
                    <option value="Res.magasin">Res.magasin</option> 
                    <option value="Res.Maintenance">Res.Maintenance</option> 
                    <option value="Res.Planification">Res.Planification</option>
                    <option value="Res.Qualité">Res.Qualité</option> 
                    <option value="Responsable Développement des nouveaux produits">Responsable Développement des nouveaux produits</option>
                    <option value="Responsable Sce Développement">Responsable Sce Développement</option>
                    <option value="Sce.Achat Cartouches Vides">Sce.Achat Cartouches Vides</option>
                    <option value="Sce.Ressources Humaines &SMSST">Sce.Ressources Humaines &SMSST</option>
                    <option value="SM QE">SM QE</option>
                    <option value="Supplychain">Supplychain</option>
                    <option value="Technique">Technique</option>
                    <option value="Transport">Transport</option>
                    <option value="#N/A">#N/A</option>
                </select>

                </div>
              </div>
             
<div class="row">
    <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date initial audio</label>
                  <input type="date" class="form-control" name="dateinitialaudio" id="email"  placeholder="Your email">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date apres 6 mois</label>
                  <input type="date" class="form-control" name="dateapres6mois" id="name" placeholder="Your name">
                </div>
</div>              
              
              <div class="row">
                
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Visite 2021</label>
                  <input type="date" class="form-control" name="visite2020" id="email"  placeholder="Your email">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Aptitude physique</label>
                  <select class="form-control" name="aptitudephysique" id="pet-select">
                    <option value="">--Veuillez choisissez--</option>
                    <option value="Apte">Apte</option>
                    <option value="Inapte">Inapte</option>
                </select>                </div>
              </div>
     
  
              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Remarque Medecin</label>
                  <textarea class="form-control" name="remarquemedecin" id="message" cols="30" rows="4"  ></textarea>
                </div>
              </div>
                           <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="Ajouter" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
    </div>
  </div>
</form>


          

         
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>