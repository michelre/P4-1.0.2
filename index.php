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
if($_GET['action'] == 'addarticle'){
    $backendController->postArticle();
    return;
}

/**
 * 1. Installer tinyMCE (pour faire du texte riche)
 * 2. Implémenter la partie admin (Ajouter un nouvel article, modifier un article et le supprimer)
 * 3. Gérer les commentaires dans la partie admin
 *
 */