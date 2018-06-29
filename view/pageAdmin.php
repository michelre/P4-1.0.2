<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="/public/bootstrap-4.1.1/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../public/css/style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>BILLET SIMPLE POUR L'ALASKA</title>
</head>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><? echo $user['username']?></a>
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
      <a class="nav-link" href="base.php"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>déconnexion</a>
		</li>
    </ul>
  </div>
</nav>
<header>
	<h1>BIENVENUE SUR VOTRE ESPACE <? echo $user['username']?></h1>
</header>	
	
<section class="container">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">EPISODES</th>
      <th scope="col ml-1 ">TITRES</th>
      <th scope="col">EXTRAITS</th>
	  <th scope="col">MODIFIER</th>
	  <th scope="col">SUPPRIMER</th>	
    </tr>
  </thead>
  <tbody>
	  	   <?php foreach ($articles as $article) { ?>
    <tr>
      <th scope="row"><?php echo $article->getId();?></th>
      <td><a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>"><?php echo $article->getTitle() ?></a></td>
      <td><?php echo $article->getContent() ?></td>
	  </tr>
		</tbody>
	<?php } ?>
	</table>
	<button type="button" class="btn btn-success">POSTER</button>
	<button type="button" class="btn btn-warning">MODIFIER</button>
	<button type="button" class="btn btn-danger">SUPPRIMER</button>
</section>
