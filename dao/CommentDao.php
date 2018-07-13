<?php

require_once('model/Comment.php');
require_once('BaseDao.php');


class CommentDao extends BaseDao
{

    public function findAllByArticleId($articleId, $isNotified = null)
    {
        if(!isset($isNotified)){
            $stmt = $this->db->prepare("SELECT * FROM comment WHERE article_id = ?");
        } else  {
            $stmt = $this->db->prepare("SELECT * FROM comment WHERE article_id = ? AND is_notified = 1");
        }
        $stmt->bind_param('s', $articleId);
        $stmt->execute();
        $result = $stmt->get_result();
        $comments = array();
        while ($comment = $result->fetch_object(Comment::class)) {
            array_push($comments, $comment);
        }
        return $comments;

    }

    public function findById($commentId)
    {
        return $this->db
            ->query('SELECT * FROM comment WHERE id = ' . $commentId)
            ->fetch_object(Comment::class);
    }

    public function create($articleId, $formData)
    {
        $stmt = $this->db->prepare('INSERT INTO comment(author, comment, date_creation, article_id) VALUES(?, ?, NOW(), ?)');
        $stmt->bind_param('sss', $formData['author'], $formData['comment'], $articleId);
        $stmt->execute();
    }

    public function notify($comment)
    {
        $this->db->query('UPDATE comment SET is_notified = 1 WHERE id = ' . $comment->getId());
    }

	  public function acceptnotify($comment)
    {
        $this->db->query('UPDATE comment SET is_notified = 0 WHERE id = ' . $comment->getId());
    }
	
      public function delete($comment)
    {
        $this->db->query('DELETE FROM comment WHERE id = ' . $comment->getId());
    }

    public function deleteAllFromArticle($article)
    {
        var_dump('DELETE FROM comment WHERE article_id = ' . $article->getId());
        return $this->db->query('DELETE FROM comment WHERE article_id = ' . $article->getId());
    }

}
