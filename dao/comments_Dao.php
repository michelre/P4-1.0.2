<?php

require_once('model/comments-model.php');
require_once('BaseDao.php');


class comments_Dao extends BaseDao
{

    public function findAll()
    {
         $result_comments = $this->db
            ->query("SELECT * FROM comments");
    }
    public function findById()
    {

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