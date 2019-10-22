<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'controller/HomeController.php';
require 'model/Post.php';
require 'model/PostLoader.php';

$controller = new HomeController();

if(!isset($_GET['title']) && !isset($_GET['date']) && !isset($_GET['content']) &&  !isset($_GET['name'])) {
    $_GET['title'] = 0;
    $_GET['date'] = 0;
    $_GET['content'] = 0;
    $_GET['name'] = 0;
}

    $controller->render((string)$_GET['title'], (int)$_GET['date'], (string)$_GET['content'], (string)$_GET['name']);

?>