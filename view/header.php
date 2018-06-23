<header>
  <h2>JEAN FORTEROCHE</h2>
  <ul class="menu">
    <li><a href="/view/base.php"><i class="fas fa-home"></i>Accueil</a></li>
    <li class="hover-sous-menu"><a href="#"><i class="fas fa-book"></i>Episodes</a>
      <ul class="sous-menu">

          <?php foreach ($articles as $article) { ?>
            <li><a href="#"><?php echo $article->getTitle() ?></a></li>
          <?php } ?>

      </ul>
    </li>
    <li><a href="#"><i class="fas fa-sign-in-alt"></i>Connexion</a></li>
  </ul>
</header>