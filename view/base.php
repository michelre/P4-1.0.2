<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../public/css/style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>BILLET SIMPLE POUR L'ALASKA</title>
</head>
<body>

<?php include("templates/header.php"); ?>

<section id="fond">
  <div class="image-du-blog">
    <img src="/public/image/fond.jpg" alt="aurore boreal en alaska"></div>
</section>
<section>
  <div class="intro-perso">
    <h2> Qui suis-je?</h2>
    <p>Bien le bonjour à vous qui me lisez, je me présente je m'apelle Jean Forteroche.
      Je suis écrivain depuis toujours je dirais.
      Sur mon site vous trouverez directement mon livre pas à pas, épisode par épisode. Comme vous avez déjà du le voir
      mon nouveau roman s'appelera "Un billet pour l'Alaska".
      Vous pourrez accéder directement a chaque épisode de ce roman soit par la barre de navigation en haut de mon site
      , soit juste en dessous de ma présentation.</p>
  </div>
</section>
<h2>Les Épisodes du roman "Un billet pour l'Alaska"</h2>
<section class="tableau-Episode">
<table>
	<th>Episodes</th>
	<tr><a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>">
		<?php echo $article->getTitle() ?></a>
	<td> 
		<p>
              <?php echo $article->getContent() ?>
          </p>
	</td>
	</tr>
		<tr><a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>">
		<?php echo $article->getTitle() ?></a>
	<td> 
		<p>
              <?php echo $article->getContent() ?>
          </p>
	</td>
		<tr><a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>">
		<?php echo $article->getTitle() ?></a>
	<td> 
		<p>
              <?php echo $article->getContent() ?>
          </p>
	</td>
	
	</table>
    
</section>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<?php include("templates/footer.php"); ?>

</body>


</html>
