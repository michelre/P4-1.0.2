<?php

require_once('controller/FrontendController.php');
require_once('controller/BackendController.php');

$frontendController = new FrontendController();
$backendController = new BackendController();

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
    $frontendController->notifiyComment($_GET['commentId']);
    return;
}

if($_GET['action'] == 'login'){
    $frontendController->displayLoginPage();
    return;
}

if($_GET['action'] == 'logout'){
    $backendController->deconnexion();
    return;
}

if($_GET['action'] == 'loginAction'){
    $backendController->connexion();
    return;
}

if($_GET['action'] == 'pageAdmin'){
    $backendController->displayPageAdmin();
    return;
}

if($_GET['action'] == 'displayAddArticle'){
    $backendController->displayAddArticle();
    return;
}

if($_GET['action'] == 'addArticle'){
    $backendController->postArticle($_POST["title"], $_POST["content"]);
    return;
}

if($_GET['action'] == 'deleteArticle'){
    $backendController->deleteArticle($_GET['articleId']);
    return;
}

if($_GET['action'] == 'displayUpdateArticle'){
    $backendController->displayUpdateArticle($_GET['articleId']);
    return;
}

if($_GET['action'] == 'updateArticle'){
    $backendController->modifyArticle($_GET['articleId'], $_POST['title'], $_POST['content']);
    return;
}

if($_GET['action'] == 'notifiedComments'){
    $backendController->notifiedComments($_GET['articleId']);
    return;
}

if($_GET['action'] == 'keepComment'){
    $backendController->keepComment($_GET['commentId']);
    return;
}

if($_GET['action'] == 'deleteComment'){
    $backendController->deleteComment($_GET['commentId']);
    return;
}

/**
 * 1. Implémenter la gestion des commentaires (suppression et conservation des commentaires)
 * 2. Revoir le style global (photo, marges, voir les titres coupés)
 *
 */