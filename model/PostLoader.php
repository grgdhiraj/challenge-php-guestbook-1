<?php
declare(strict_types=1);

class PostLoader
{
    public function loadPost() : array {

        $list = [];
        $json = json_encode(file_put_contents("posts.json"));
    }
}