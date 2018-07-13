<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="?">Jean Forteroche</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?"><i class="fas fa-home" aria-hidden="true"></i>Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false"><i class="fas fa-book" aria-hidden="true"></i>
          Episodes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php foreach ($articles as $articleHeader) { ?>
              <a class="dropdown-item" href="?action=detailArticle&articleId=<?php echo $articleHeader->getId(); ?>">
                  <?php echo $articleHeader->getTitle() ?>
              </a>
            <?php } ?>
        </div>
      </li>
      <li class="nav-item dropdown">
          <?php if ($isConnected) { ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuAdminLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><i class="fas fa-book" aria-hidden="true"></i>
              Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuAdminLink">
              <a class="nav-link" href="?action=pageAdmin"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Espace Admin</a>
              <a class="nav-link" href="?action=logout"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Déconnexion</a>
            </div>
          <?php } ?>
          <?php if (!$isConnected) { ?>
            <a class="nav-link" href="?action=login"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Connexion</a>
          <?php } ?>
      </li>
    </ul>
  </div>
</nav>
