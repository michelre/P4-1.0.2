<?php
require_once('dao/BaseDao.php');

class UserDao extends BaseDao
{
    public function connect($username)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE username = ?');
        $req->execute(array($username));
        $user = $req->fetch();
        return new User($user['id'], $user['username'], $user['password']);
    }
}
