<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUESTBOOK</title>
</head>
<body class="text-center">

    <form id="gb-sign" method="get">
        <h1>Welcome to our GuestBook</h1>
        <label for="gb-title">Title:</label>
        <input id="title" type="text" maxlength="255" required/></br>
        <label for="gb-date">Date:</label>
        <input id="date" type="date" maxlength="255" required/></br>
        <label for="gb-content">Content:</label>
        <input id="content" type="text" maxlength="255" required/></br>
        <label for="gb-name"> Name:</label>
        <input id="name" type="text" maxlength="255" required/></br>
        <input type="submit" value="Submit"/>
    </form>


<h3>Guestbook </h3>
    <?php foreach ($allPosts AS $post): ?>
    <ul class="text-left">
        <li>Name: <?php echo $post->getName() ?></li>
        <li>Title: <?php echo $post->getTitle() ?></li>
        <li>Content: <?php echo $post->getContent() ?></li>
        <li>Date: <?php echo $post->getDate() ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
