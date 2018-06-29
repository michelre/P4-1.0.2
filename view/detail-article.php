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
      <a class="nav-link" href="view/connexion.php"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Connexion</a>
		</li>
    </ul>
  </div>
</nav>

<div class=image_article>
  <img src="/public/image/Image-Ep-1.jpeg" class="container-fluid">
</div>
	


<h1>
    <?php echo $article->getTitle(); ?>
</h1>

<p>
    <?php echo $article->getContent(); ?>
</p>


<h2>Commentaires</h2>
<div class="zone_com">

    <?php foreach ($comments as $comment) { ?>
      <div class="comment">
        <h4><?php echo $comment->getAuthor(); ?></h4>
        <p><?php echo $comment->getComment(); ?></p>
      </div>
    <?php } ?>


</div>
<div class="zone_ajout_com">
  <form action="?action=addComment&articleId=<?php echo $article->getId(); ?>" method="post">
    Pseudo : <br/>
	  <input type="text" name="author"/><br/>
    
	Commentaires :<br/><textarea name="comment"></textarea><br/>
	  <button type="submit">Poster</button>
  </form>

  <form action="?action=signalComment&articleId=<?php echo $article->getId(); ?>" method="post">
    <button type="submit" id ="signaler">Signaler</button>
	  </form>
	 	  
</div>
<?php include("templates/footer.php"); ?>

</body>


</html>
