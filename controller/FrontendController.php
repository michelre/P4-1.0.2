<?php

require_once('dao/ArticleDao.php');
require_once('dao/CommentDao.php');
require_once('services/ConnectionService.php');

class FrontendController
{
    private $articleDao;
    private $commentDao;
    private $connectionService;

    public function __construct()
    {
        $this->articleDao = new ArticleDao();
        $this->commentDao = new CommentDao();
        $this->connectionService = new ConnectionService();
    }

    public function listArticles()
    {
        $articles = $this->articleDao->findAll();
        $isConnected = $this->connectionService->isConnected();
        require('view/base.php');
    }

    public function displayDetailArticle($articleId)
    {
        $article = $this->articleDao->findById($articleId);
        $articles = $this->articleDao->findAll();
        $comments = $this->commentDao->findAllByArticleId($articleId);
        $isConnected = $this->connectionService->isConnected();
        require('view/detail-article.php');
    }

    public function addComment($articleId, $formData)
    {
        $this->commentDao->create($articleId, $formData);
        header('Location: ?action=detailArticle&articleId=' . $articleId);
    }

    public function displayLoginPage($isAuthenticationFailed)
    {
        $isConnected = $this->connectionService->isConnected();
        require('view/login.php');
    }

    public function notifiyComment($commentId)
    {
        $comment = $this->commentDao->findById($commentId);
        $this->commentDao->notify($comment);
        header('Location: ?action=detailArticle&articleId=' . $comment->getArticleId());
    }
    public function acceptnotifiyComment($commentId)
    {
        $comment = $this->commentDao->findById($commentId);
        $this->commentDao->acceptnotify($comment);
        header('Location: ?action=detailArticle&articleId=' . $comment->getArticleId());
    }
}
