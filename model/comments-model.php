<?php

class comments
{
    private $speudo;
	private $comment;
	private $date_comments;


    /**
     * @return mixed
     */
    public function getspeudo()
    {
        return $this->speudo;
    }

    /**
     * @param mixed $id
     */
    public function setspeudo($speudo)
    {
        $this->id = $speudo;
    }

    /**
     * @return mixed
     */
    public function getcomments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $title
     */
    public function setcomments($comments)
    {
        $this->title = $comments;
    }

    /**
     * @return mixed
     */
    public function getdate_comments()
    {
        return $this->date_comments;
    }

    /**
     * @param mixed $content
     */
    public function setdate_comments($date_comments)
    {
        $this->content = $date_comments;
    }
}