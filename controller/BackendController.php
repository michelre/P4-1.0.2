<?php
/* APPEL DES DAO et model */

require_once('dao/ArticleDao.php');
require_once('dao/CommentDao.php');
require_once('dao/UserDao.php');
require_once('model/Article.php');
require_once('model/Comment.php');
require_once('model/User.php');


class backendController
{
    private $articleDao;
    private $commentDao;
    private $userDao;
    private $pageAdmin;


    public function __construct()
    {
        $this->articleDao = new ArticleDao();
        $this->commentDao = new CommentDao();
        $this->userDao = new UserDao();

    }

    public function connexion()//création de la fonction de connexion
    {
        //TODO --> Vérifier l'authentification de l'utilisateur
        header('Location: ?action=pageAdmin');
        /*$user = $this->UserDao->getbyusername($username);//on va mettre l'username dans la variable $user
        if (password_verify($password, $user->getpassword())) {
            $this->connection - initConnection();// on dis que si le mdp est vérifié on affiche la page de l'admin
            header('location :?action=pageAdmin');
        } else {// sinon on redigire vers la page de connexion
            header('location:?action=connexion');
        }*/
    }

    public function displayPageAdmin()
    {
        $user = new User();
        $user->setUsernmame('Ulrich Vallaud');
        $articles = $this->articleDao->findAll();
        require('view/page-admin.php');
    }

    public function deconnexion()
    {
        //TODO:: Gérer la déco de l'utilisateur
        header('Location: ?');

    }

    public function displayUpdateArticle($articleId)
    {
        $articles = $this->articleDao->findAll();
        $article = $this->articleDao->findById($articleId);
        require('view/modify-article.php');
    }

    public function modifyArticle($articleId, $title, $content)//ici on crée le systeme pour modifié un article depuis la page admin
    {
        $article = $this->articleDao->findById($articleId);
        $article->setTitle($title);
        $article->setContent($content);
        $this->articleDao->update($article);
        header('Location: ?action=detailArticle&articleId=' . $articleId);
    }

    public function deleteArticle($articleId)
    {
        $article = $this->articleDao->findById($articleId);
        $this->commentDao->deleteAllFromArticle($article);
        $this->articleDao->delete($article);
        header('location:?action=pageAdmin');
    }

    public function displayAddArticle()
    {
        $articles = $this->articleDao->findAll();
        require('view/add-article.php');
    }

    public function postArticle($title, $content)
    {
        $article = new Article();
        $article->setTitle($title)
            ->setContent($content);
        $this->articleDao->create($article);
        header('location:?action=pageAdmin');
    }

    public function notifiedComments($articleId)
    {
        $articles = $this->articleDao->findAll();
        $comments = $this->commentDao->findAllByArticleId($articleId, true);
        require('view/notified-comments.php');
    }   
	
	public function keepComment($commentId)
    {
	    $comment = $this->commentDao->findbyid($commentId);
		$this -> commentDao ->acceptnotify($comment);
       	header('location:?action=pageAdmin');
    }   
	
	public function deleteComment($commentId)
    {	
		$comment = $this -> commentDao ->findbyid($commentId);
		$this -> commentDao ->delete($comment);
		header('location:?action=pageAdmin');
    }

	
}
