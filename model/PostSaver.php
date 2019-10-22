<?php


class PostSaver
{
    public function appendPost($newPost) : Post {

        $list = [];
        $json = json_encode(file_put_contents("posts.json",$newPost),true);

            $list[] = new Post($json['title'],(int)$json['date'],$json['content'],$json['name']);

        return $list;
    }
}