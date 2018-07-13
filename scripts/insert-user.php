<?php

require_once("dao/UserDAO.php");

$userDAO = new UserDao();
$userDAO->signup();
