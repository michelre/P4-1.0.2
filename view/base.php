<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="/public/css/bootstrap.min.css"/>
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
      <a class="nav-link" href="view/pageDeConnexion.php"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Connexion</a>
		</li>
    </ul>
  </div>
</nav>
	
<header>
    <img src="/public/image/fond.jpg" class="img-fluid"  alt="photo illustration Alaska">
</header>

<section class="container">
  <div class="text-center col-lg-10">
    <h2> Qui suis-je?</h2>
    <p>Bien le bonjour à vous qui me lisez. Je me présente je m'apelle Jean Forteroche.
      Je suis écrivain depuis toujours je dirais.
      Sur mon site vous trouverez directement mon livre pas à pas, épisode par épisode. Comme vous avez déjà du le voir
      mon nouveau roman s'appelera "Un billet pour l'Alaska".
      Vous pourrez accéder directement a chaque épisode de ce roman soit par la barre de navigation en haut de mon site
      , soit juste en dessous de ma présentation.</p>
  </div>
</section>
<h2 class="text-center">Les Épisodes du roman "Un billet pour l'Alaska"</h2>
<section class="container">
<?php include("templates/tableauEpisodes.php"); ?>
</section>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<div class="contact mt-5">
                <h2 class="text-center mb-4">Contact</h2>
                <div class="bordure mb-4 p-4 d-sm-flex justify-content-around custom">
                    <a href=""><i class="fab fa-facebook-square fa-3x"></i><br/>Facebook</a><br/>
                    <a href=""><i class="fab fa-twitter-square fa-3x"></i><br/>Twitter</a><br/>
                    <a href=""><i class="fa fa-envelope-square fa-3x" aria-hidden="true"></i><br/>Email</a><br/>
                </div>
            </div>

<?php include("templates/footer.php"); ?>

</body>

</html>
