<?php

require_once('controller/FrontendController.php');

$frontendController = new FrontendController();

if (!isset($_GET['action']) || $_GET['action'] == 'listArticles') {
    $frontendController->listArticles();
    return;
}

if ($_GET['action'] == 'detailArticle') {
    $frontendController->displayDetailArticle($_GET['articleId']);
    return;
}

if($_GET['action'] == 'addComment'){
    $frontendController->addComment($_GET['articleId'], $_POST);
    return;
}

if($_GET['action'] == 'signalComment'){

    return;
}

/**
 * 1. Implémenter le bouton signaler (revoir un peu le schéma de la table commentaires + créer la route + le controleur + DAO associés)
 * 2. Mettre Bootstrap sur le projet
 * 3. Commencer la partie admin (BackendController + la page d'accueil de la partie admin + formulaire de connexion)
 */
