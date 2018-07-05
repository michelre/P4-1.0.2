<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("templates/head.php"); ?>
  <title>BILLET SIMPLE POUR L'ALASKA - Login</title>
</head>
<body>

<?php include("templates/header.php"); ?>

<section class="form">
	<div class="container text-center">
    <form class="form-signin" method="post" action="?action=loginAction">
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
