<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'controller/HomeController.php';
require 'model/Post.php';
require 'model/PostLoader.php';
require 'model/PostSaver.php';

$controller = new HomeController();
$postController = new HomeController();
/*
if(!isset($_GET['title']) && !isset($_GET['date']) && !isset($_GET['content']) &&  !isset($_GET['name'])) {
    $_GET['title'] = 0;
    $_GET['date'] = 0;
    $_GET['content'] = 0;
    $_GET['name'] = 0;
}


*/

if(isset($_GET)) {
    var_dump($_GET);
}
    $controller->render("0",0, "0", "0");
    //$postController->render(((string)$_POST['title'], (int)$['date'], (string)$_GET['content'], (string)$_GET['name']););
?>