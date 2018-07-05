<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title>BILLET SIMPLE POUR L'ALASKA - Admin</title>
</head>

<body>
<?php include('templates/header.php') ?>

<section class="container mt-5">
  <h1>BIENVENUE SUR VOTRE ESPACE <?php echo $user->getUsername() ?></h1>
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Épisode</th>
      <th scope="col ml-1 ">Titre</th>
      <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($articles

    as $article) { ?>
    <tr>
      <th scope="row"><?php echo $article->getId(); ?></th>
      <td>
          <?php echo $article->getTitle() ?>
      </td>
      <td>
        <a class="btn btn-primary" href="?action=updateArticle&articleId=<?php echo $article->getId(); ?>">
          Modifier
        </a>
        <a class="btn btn-danger" href="?action=deleteArticle&articleId=<?php echo $article->getId(); ?>">
          Supprimer
        </a>
        <a class="btn btn-secondary" href="?action=notifiedComments&articleId=<?php echo $article->getId(); ?>">
          Voir les commentaires signalés
        </a>
      </td>
    </tr>
    </tbody>
      <?php } ?>
  </table>
  <a class="btn btn-secondary" href="?action=addArticle">Ajouter</a>
</section>
</body>
</html>

