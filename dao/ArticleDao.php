<?php

/**
 * CRUD -> Create Read Update Delete
 */

require_once('model/Article.php');
require_once('BaseDao.php');

class ArticleDao extends BaseDao
{

    public function findAll()
    {
        $result = $this->db->query("SELECT * FROM article");

        $articles = array();
        while ($article = $result->fetch_object(Article::class)) {
            array_push($articles, $article);
        }

        return $articles;
    }

    public function findById($articleId)
    {
        return $this->db
            ->query('SELECT * FROM article WHERE id = ' . $articleId)
            ->fetch_object(Article::class);
    }

    public function create()
    {
	
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
