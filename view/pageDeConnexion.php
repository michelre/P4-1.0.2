<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="/public/bootstrap-4.1.1/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../public/css/style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>BILLET SIMPLE POUR L'ALASKA</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Jean Forteroche</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
		  <a class="nav-link" href="#"><i class="fas fa-home"  aria-hidden="true"></i>Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book" aria-hidden="true"></i>
          Episodes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			
          <a class="dropdown-item" href="#">Episode 1</a>
          <a class="dropdown-item" href="#">Episode 2</a>
          <a class="dropdown-item" href="#">Episode 3</a>
			
        </div>
      </li>
	<li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Connexion</a>
		</li>
    </ul>
  </div>
</nav>
<section class="form">
	<div class="container text-center">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
		<label for="inputusername">Entrez votre nom de connexion</label>
      <input type="text" id="username" class="form-control" placeholder="nom de connexion" required autofocus>
		<label for="inputPassword">Entrez votre mot de passe </label>
      <input type="password" id="inputPassword" class="form-control" placeholder="mot de passe" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> se souvenir de moi?
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>
	  </div>
	</section>
  </body>
</html>