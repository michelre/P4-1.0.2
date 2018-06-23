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

/**
 * 1. Penser à exporter la DB en un seul fichier (bien vérifier que il y a les requêtes d'insertion des données)
 * 2. Afficher la liste des articles sous forme de tableau sans image sur la page d'index
 * 3. Lister sur la page de détail d'un article les commentaires associés (Nouveau modèle et une nouvelle DAO)
 * 4. Implémenter le bouton signaler (revoir un peu le schéma de la table commentaires + créer la route + le controleur + DAO associés)
 */
