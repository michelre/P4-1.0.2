<?php
/* APPEL DES DAO et model */

require_once('dao/ArticleDao.php');
require_once('dao/CommentDao.php');
require_once('dao/UserDao.php');
require_once('model/Article.php');
require_once('model/Comment.php');
require_once('model/User.php');
require_once('services/ConnectionService.php');


class backendController
{
    private $articleDao;
    private $commentDao;
    private $userDao;
    private $pageAdmin;
    private $connectionService;


    public function __construct()
    {
        $this->articleDao = new ArticleDao();
        $this->commentDao = new CommentDao();
        $this->userDao = new UserDao();
        $this->connectionService = new ConnectionService();

    }

    public function connexion($username, $password)
    {

        /* @var User $user */
        $user = $this->userDao->findByUsername($username);
        if ($user && password_verify($password, $user->getPassword())) {
            $this->connectionService->connect();
            header('Location: ?action=pageAdmin');
        } else {
            header('Location: ?action=login&error=true');
        }
    }

    public function displayPageAdmin()
    {
        if ($this->connectionService->isConnected()) {
            $user = new User();
            $user->setUsernmame('Ulrich Vallaud');
            $articles = $this->articleDao->findAll();
            $isConnected = $this->connectionService->isConnected();
            require('view/page-admin.php');
        } else {
            header('Location: ?action=login');
        }
    }

    public function deconnexion()
    {
        $this->connectionService->disconnect();
        header('Location: ?');

    }

    public function displayUpdateArticle($articleId)
    {
        if ($this->connectionService->isConnected()) {
            $articles = $this->articleDao->findAll();
            $article = $this->articleDao->findById($articleId);
            $isConnected = $this->connectionService->isConnected();
            require('view/modify-article.php');
        } else {
            header('Location: ?action=login');
        }
    }

    public function modifyArticle($articleId, $title, $content)//ici on crée le systeme pour modifié un article depuis la page admin
    {
        if ($this->connectionService->isConnected()) {
            $article = $this->articleDao->findById($articleId);
            $article->setTitle($title);
            $article->setContent($content);
            $this->articleDao->update($article);
            header('Location: ?action=detailArticle&articleId=' . $articleId);
        } else {
            header('Location: ?action=login');
        }
    }

    public function deleteArticle($articleId)
    {
        if ($this->connectionService->isConnected()) {
            $article = $this->articleDao->findById($articleId);
            $this->commentDao->deleteAllFromArticle($article);
            $this->articleDao->delete($article);
            header('location:?action=pageAdmin');
        } else {
            header('Location: ?action=login');
        }
    }

    public function displayAddArticle()
    {
        if ($this->connectionService->isConnected()) {
            $articles = $this->articleDao->findAll();
            $isConnected = $this->connectionService->isConnected();
            require('view/add-article.php');
        } else {
            header('Location: ?action=login');
        }
    }

    public function postArticle($title, $content)
    {
        if ($this->connectionService->isConnected()) {
            $article = new Article();
            $article->setTitle($title)
                ->setContent($content);
            $this->articleDao->create($article);
            header('location:?action=pageAdmin');
        } else {
            header('Location: ?action=login');
        }
    }

    public function notifiedComments($articleId)
    {
        if ($this->connectionService->isConnected()) {
            $articles = $this->articleDao->findAll();
            $comments = $this->commentDao->findAllByArticleId($articleId, true);
            $isConnected = $this->connectionService->isConnected();
            require('view/notified-comments.php');
        } else {
            header('Location: ?action=login');
        }
    }

    public function keepComment($commentId)
    {
        if ($this->connectionService->isConnected()) {
            $comment = $this->commentDao->findbyid($commentId);
            $this->commentDao->acceptnotify($comment);
            header('location:?action=pageAdmin');
        } else {
            header('Location: ?action=login');
        }
    }

    public function deleteComment($commentId)
    {
        if ($this->connectionService->isConnected()) {
            $comment = $this->commentDao->findbyid($commentId);
            $this->commentDao->delete($comment);
            header('location:?action=pageAdmin');
        } else {
            header('Location: ?action=login');
        }
    }


}
