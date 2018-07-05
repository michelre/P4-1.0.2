<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title>BILLET SIMPLE POUR L'ALASKA</title>
</head>
<body>

<?php include("templates/header.php") ?>

<header>
  <img src="/public/image/fond.jpg" class="img-fluid" alt="photo illustration Alaska">
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
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">EPISODES</th>
      <th scope="col ml-1 ">TITRES</th>
      <th scope="col">EXTRAITS</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article) { ?>
    <tr>
      <th scope="row"><?php echo $article->getId(); ?></th>
      <td><a
          href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>"><?php echo $article->getTitle() ?></a>
      </td>
      <td><?php echo $article->getDateCreation() ?></td>
    </tr>
    </tbody>
      <?php } ?>
  </table>
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
