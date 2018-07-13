<?php


class ConnectionService
{

    public function connect()
    {
        setcookie('uvdprojet4', 'uvdprojet4', time() + 60);
    }

    public function disconnect()
    {
        setcookie('uvdprojet4', null, -1);
    }

    public function isConnected()
    {
        return isset($_COOKIE['uvdprojet4']);
    }

}
