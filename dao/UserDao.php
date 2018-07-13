<?php
require_once('dao/BaseDao.php');
require_once('model/User.php');

class UserDao extends BaseDao
{
    public function signup()
    {
        $password = password_hash("root", PASSWORD_BCRYPT);
        $req = $this->db
            ->query('INSERT INTO users(username, password) VALUES("root", "' . $password . '" )');
    }

    public function findByUsername($username)
    {
        return $this->db
            ->query('SELECT * FROM users WHERE username = "' . $username . '"')
            ->fetch_object(User::class);
    }
}
