<?php

require_once('dao/ArticleDao.php');
require_once('dao/CommentDao.php');

class FrontendController
{
    private $articleDao;
    private $commentDao;

    public function __construct()
    {
        $this->articleDao = new ArticleDao();
        $this->commentDao = new CommentDao();
    }

    public function listArticles()
    {
        $articles = $this->articleDao->findAll();
        require('view/base.php');
    }

    public function displayDetailArticle($articleId)
    {
        $article = $this->articleDao->findById($articleId);
        $articles = $this->articleDao->findAll();
        $comments = $this->commentDao->findAllByArticleId($articleId);
        require('view/detail-article.php');
    }

    public function addComment($articleId, $formData)
    {
        $this->commentDao->create($articleId, $formData);
        header('Location: ?action=detailArticle&articleId=' . $articleId);
    }

}
