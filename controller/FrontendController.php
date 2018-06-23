<?php

require_once('dao/ArticleDao.php');
require_once('dao/comments_Dao.php');

class FrontendController
{
    private $articleDao;
	private $comments_Dao;

    public function __construct()
    {
        $this->articleDao = new ArticleDao();
		$this->comments_Dao = new comments_Dao();
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
		/*$speudo = $this->comments_Dao->findbyid($speudo)
        $comments =$this->comments_Dao->findAll();*/
			require('view/detail-article.php');
    }

}
