<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title>BILLET SIMPLE POUR L'ALASKA</title>
</head>
<body class="mt-5">

<?php include("templates/header.php"); ?>


<h2 class="mt-5">Commentaires Signalés</h2>
<div class="zone_com">

    <?php foreach ($comments as $comment) { ?>
      <div class="comment mt-3 mb-3 p-2 border-bottom">
        <h4><?php echo $comment->getAuthor(); ?></h4>
        <p><?php echo $comment->getComment(); ?></p>
        <a class="btn btn-primary" href="?action=keepComment&commentId=<?php echo $comment->getId(); ?>">Conserver</a>
        <a class="btn btn-danger" href="?action=deleteComment&commentId=<?php echo $comment->getId(); ?>">Supprimer</a>
      </div>
    <?php } ?>


</div>
<?php include("templates/footer.php"); ?>

</body>


</html>
