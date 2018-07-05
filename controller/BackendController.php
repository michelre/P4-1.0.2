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

    public function modifyArticle($articleid ,$title, $content)//ici on crée le systeme pour modifié un article depuis la page admin
    {
    /*        $article = $this->ArticleDao
			->getArticleById($articleId);
            $article->setTitle($title);
            $article->setContent($content);
            $this->ArticleDao->update($article);
			require('view/add-article.php');
*/
    }

    public function deleteArticle($articleid)//ici on crée le systeme pour supprimer un article depuis la page admin
    {
  /*        $article = $this->ArticleDao->getArticleById($articleId);
          $this->CommentDao->deleteAllFromArticle($article);
          $this->ArticleDao->delete($article);
		header('location:?action=pageAdmin'); */
    }

    public function postArticle($title, $content, $author)
    {
		$article = new Article($title, $content, $author);
		header('location:?action=pageAdmin');
    }//ici on crée le systeme pour poster un article depuis la page admin avec les info titre/contenu/auteur

}
