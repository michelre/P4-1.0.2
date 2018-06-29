<?php

require_once('model/Comment.php');
require_once('BaseDao.php');


class CommentDao extends BaseDao
{

    public function findAllByArticleId($articleId)
    {
        $stmt = $this->db->prepare("SELECT * FROM comment WHERE article_id = ?");
        $stmt->bind_param('s', $articleId);
        $stmt->execute();
        $result = $stmt->get_result();
        $comments = array();
        while ($comment = $result->fetch_object(Comment::class)) {
            array_push($comments, $comment);
        }
        return $comments;

    }

    public function findById()
    {

    }

    public function create($articleId, $formData)
    {
        $stmt = $this->db->prepare('INSERT INTO comment(author, comment, date_creation, article_id) VALUES(?, ?, NOW(), ?)');
        $stmt->bind_param('sss', $formData['author'], $formData['comment'], $articleId);
        $stmt->execute();
    }

    public function commentsignaler($comment)
    {
      return $this->db
            ->query('UPDATE comments SET commentsignaler = 1 WHERE id = ' . $comment->getId())
            ->execute();
    }

    public function delete($comment)
    {
 		return $this->db->query('DELETE FROM comment WHERE id = ' . $comment
								->getId())->execute();
    }

}
