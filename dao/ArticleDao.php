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

    public function create($article)
    {
        $stmt = $this->db->prepare('INSERT INTO article(title, content, date_creation) VALUES(?, ?, NOW())');
        $stmt->bind_param('ss', $article->getTitle(), $article->getContent());
        $stmt->execute();
    }

    public function update($article)
    {
        $stmt = $this->db->prepare('UPDATE article SET title = ?, content = ? WHERE id = ?');
        $stmt->bind_param('sss', $article->getTitle(), $article->getContent(), $article->getId());
        $stmt->execute();
    }

    public function delete($article)
    {
        $this->db->query('DELETE FROM article WHERE id = ' . $article->getId());
    }

}
