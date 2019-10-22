<?php
declare(strict_types=1);

class HomeController //to connect all the files (model and view)
{
    public function render(string $title, int $date, string $content, string $name)
    {
        $loader = new PostLoader();// when you call a method here you are connecting that class(ProductLoader) to (HomeController)

        $allPosts = $loader->loadPost();
        // $post = $loader->loadPost($name);

        require 'view/home.php';
    }

}