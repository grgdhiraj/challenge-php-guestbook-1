<?php
declare(strict_types=1);

class PostLoader
{
    public function loadPost() : array {

        $list = [];
        $json = json_decode(file_get_contents("posts.json"),true);
        foreach ($json AS $jsonPost){
            $list[] = new Post($jsonPost['title'],$jsonPost['date'],$jsonPost['content'],$jsonPost['name']);

        }
       // var_dump($list);
        return $list;
    }


}
