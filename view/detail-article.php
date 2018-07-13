<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('templates/head.php') ?>
  <title>BILLET SIMPLE POUR L'ALASKA</title>
</head>
<body>

<?php include("templates/header.php"); ?>

<h1 class=" text-center mt-5">
    <?php echo $article->getTitle(); ?>
</h1>

<p class="col-lg-6">
    <?php echo $article->getContent(); ?>
</p>


<h3 class="text-center border border-info rounded bg-info text-white container">Commentaires</h3>

    <?php foreach ($comments as $comment) { ?>
      <div class="mt-3 mb-3 p-2 border-bottom">
        <h4><?php echo $comment->getAuthor(); ?></h4>
        <p><?php echo $comment->getComment(); ?></p>
          <?php if (!$comment->isNotified()) { ?>
            <a class="btn btn-danger"
               href="?action=signalComment&commentId=<?php echo $comment->getId(); ?>">Signaler</a>
          <?php } ?>
          <?php if ($comment->isNotified()) { ?>
            <div class="text-danger">Déjà signalé</div>
          <?php } ?>
      </div>
    <?php } ?>


<div class="text-center">
  <form action="?action=addComment&articleId=<?php echo $article->getId(); ?>" method="post">
    Pseudo : <br/>
    <input type="text" name="author"/><br/>

    Commentaires :<br/><textarea name="comment"></textarea><br/>
    <button type="submit">Poster</button>
  </form>

</div>
<?php include("templates/footer.php"); ?>

</body>


</html>
