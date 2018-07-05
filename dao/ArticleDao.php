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
	      return $this->db
            ->query('SELECT * FROM article WHERE id = ' . $articleId)
            ->fetch_object(Article::class);
    }

    public function update()
    {
        $stmt = $this->db->prepare('UPDATE article SET title = ?, content = ? WHERE id = ?');
        return $stmt->execute(array($article->getTitle(), $article->getContent(), $article->getId()));
    }

    public function delete()
    {
      $req = $this->db->query('DELETE FROM article WHERE id = ' . $article->getId());
        $req->execute();
    }

}
