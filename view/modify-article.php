<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title><?php echo $article->getTitle(); ?></title>
</head>
<body>

<?php include("templates/header.php") ?>

<section class="container mt-5">
  <form method="POST" action="?action=updateArticle&articleId=<?php echo $article->getId(); ?>">
    <div class="form-group">
      <input type="text" name="title" placeholder="titre" class="form-control" value="<?php echo $article->getTitle(); ?>" />
    </div>
    <div class="form-group">
      <textarea id="tinymce" name="content"><?php echo $article->getcontent() ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</section>

</body>
</html>