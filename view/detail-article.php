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

<div class=image_article>
  <img src="/public/image/Image-Ep-1.jpeg">
</div>


<h1>
  <?php echo $article->getTitle(); ?>
</h1>

<p>
    <?php echo $article->getContent(); ?>
</p>


<h2>Commentaires</h2>
<div class="zone_com">
	
	
	</div>
	<div class="zone_ajout_com">
<form action="add_comments.php" method="post">
	Pseudo : <input type="text" name="pseudo"/><br/>
	<textarea name="comment"></textarea>
  <div class="bouton">
	 <input type="hidden" name="article_id" value="">
	<input type="submit" value="POSTER" name="poster">
    <input type="button" value="SIGNALER" name="Signaler">
  </div>
	</form>

</div>
<?php include("templates/footer.php"); ?>

</body>


</html>
