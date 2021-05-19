<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Espace gestionnaire Rh</title>
</head>
<body>
   <section>
    <div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-imag"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Espace Gestionnaire Rh</h3>
                    <form>
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email </label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Mot de passe</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Se connecter</button>
                      <div class="text-center">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
   </section>
</body>
</html>