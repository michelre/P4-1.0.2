<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title>BILLET SIMPLE POUR L'ALASKA - Nouveau POST</title>
</head>
<body>

<?php include("templates/header.php") ?>

<section>
	 <?php foreach ($articles as $article) { ?>
    <h2><?php echo $article->getTitle() ?></h2>
    <form method="POST" action="?action=addArticle">
      <div class="form-group">
      <input type="text" name="author" placeholder="auteur" class="form-control">
      </div>
      <div class="form-group">
      <textarea id="tinymce" name="content" class="form-control"><?php echo $content->getcontent() ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
	   <?php } ?>
  </section>
	
	</body>
</html>