<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title>BILLET SIMPLE POUR L'ALASKA - Nouveau POST</title>
</head>
<body>

<?php include("templates/header.php") ?>

<section>
  <h2>Ajouter un nouvel article</h2>
  <form class="mt-5 container" method="POST" action="?action=addArticle">
    <div class="form-group">
      <input type="text" name="title" placeholder="titre" class="form-control">
    </div>
    <div class="form-group">
      <textarea id="tinymce" name="content" placeholder="contenu de l'article"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Publier</button>
  </form>
</section>

</body>
</html>
