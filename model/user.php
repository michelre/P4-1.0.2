<?php

class Comment
{

    private $id;
    private $username;
    private $password;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getusername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function usernmame($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setpassword($password)
    {
        $this->comment = $password;
    }

}
