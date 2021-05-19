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


    <title>Visite d'handycape</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Ajouter une visite</h3>
            <form action="{{url('/infermiere/VisiteHandiquape')}}" method="POST" enctype="multipart/form-data">
              @csrf                  <div class="row">
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
                  <label for="" class="col-form-label">Type handycape</label>
                  
<select name="typehandicap" class="form-control" id="pet-select">
  <option value="">--Veuillez choisissez--</option>
  <option value="Auditif">Auditif</option>
  <option value="Invalidants">Invalidants</option>
  <option value="Moteur">Moteur</option>
  <option value="Neurologique">Neurologique</option>
</select>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Maladie:</label>
                  <select class="form-control" name="maladie" id="pet-select">
                    <option value="">--Veuillez choisissez--</option>
                    <option value="contracture de l'omoplate droite">contracture de l'omoplate droite</option>
                    <option value="Démunition de la cuité auditif">Démunition de la cuité auditif</option>
                    <option value="Douleur MSD">Douleur MSD</option>
                    <option value="Eperon calcarienne">Eperon calcarienne</option>
                    <option value="Epilipsie">Epilipsie</option>
                    <option value="Hernie dorsale">Hernie dorsale</option>
                    <option value="Lombosciatique">Lombosciatique</option>
                    <option value="NCB">NCB</option>
                    <option value="Otite à répitition oreille gauche">Otite à répitition oreille gauche</option>
                    <option value="Rhinopharyngite allergique">Rhinopharyngite allergique</option>
                    <option value="Tynpenoplastie orreil droite">Tynpenoplastie orreil droite</option>
                </select>                </div>
                </div>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date d'ambauche</label>
                  <input type="date" class="form-control" name="email" id="email"  placeholder="date d'ambauche">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Date de sortie</label>
                  <input type="date" class="form-control" name="name" id="name" placeholder="date de sortie">
                </div>
                
            </div>
                
             
              
              
              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Mesure prise</label>
                  <textarea class="form-control" name="mesureprise" id="message" cols="30" rows="4"  ></textarea>
                </div>
            
              </div>
    
                           <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="Ajouter" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

          

          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>