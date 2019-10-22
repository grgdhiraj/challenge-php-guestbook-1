<?php
declare(strict_types=1);
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
<form method="get">
<h3>Guestbook </h3>
    <?php foreach ($allPosts AS $post): ?>
    <ul class="text-left">
        <li>Name: <?php echo $post->getName() ?></li>
        <li>Title: <?php echo $post->getTitle() ?></li>
        <li>Content: <?php echo $post->getContent() ?></li>
        <li>Date: <?php echo $post->getDate() ?></li>
    </ul>
    <?php endforeach; ?>

</form>
</body>
</html>
