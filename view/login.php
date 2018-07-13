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
    <form class="form-signin" method="POST" action="?action=loginAction">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
      <label for="inputusername">Entrez votre nom de connexion</label>
      <input type="text" name="username" class="form-control" placeholder="nom de connexion" required autofocus/>
      <label for="inputPassword">Entrez votre mot de passe </label>
      <input type="password" class="form-control" placeholder="mot de passe" name="password" required/>
        <?php if ($isAuthenticationFailed) { ?>
          <div class="alert alert-danger mt-2">Vos identifiants ne semblents pas corrects</div>
        <?php } ?>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>
  </div>
</section>
</body>
</html>
