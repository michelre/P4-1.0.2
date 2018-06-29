<?php
/* APPEL DES DAO et model */

require_once('dao/ArticleDao.php');
require_once('dao/CommentDao.php');
require_once('dao/UserDao.php');
require_once('model/Article.php');
require_once('model/Comment.php');
require_once "template/connextion.php";


class backendController
{
	private $articleDao;
    private $commentDao;
	private $UserDao;
    private $pageAdmin;
	


    public function __construct()
    {
		$this->UserDao = new articleDao();
		$this->UserDao = new commentDao();
		$this->UserDao = new UserDao();
        $this->UserDao = new pageAdmin();

    }
    public function __connexion()//création de la fonction de connexion
{
		$user =$this->UserDao->getbyusername($username);//on va mettre l'username dans la variable $user
		if(password_verify($password, $user->getpassword())){
		$this->connection-initConnection();// on dis que si le mdp est vérifié on affiche la page de l'admin 
			header('location :?action=pageAdmin');
		}else{// sinon on redigire vers la page de connexion 
		header('location:?action=connexion')	
	}
}
	    public function __deconnexion()
	{
		$this->connection->logout();//dès la déconnexion on redirige vers la page d'acceuil
       header('Location:?action=base');
		
	}
	    public function __modifyArticle($articleid)//ici on crée le systeme pour modifié un article depuis la page admin
	{
		
		
	}
	    public function __deleteArticle($articleid)//ici on crée le systeme pour supprimer un article depuis la page admin
	{
		
		
	}
	    public function __postArticle($title;$content,$author)//ici on crée le systeme pour poster un article depuis la page admin avec les info titre/contenu/auteur
	{
		
		
	}
}