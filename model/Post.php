<?php
declare(strict_types=1);

class Post
{
private $title;
private $date;
private $content;
private $authername;

 public function __construct(string $title,int $date,string $content,string $authername)
 {
     $this->title = $title;
     $this->date = $date;
     $this->content = $content;
     $this->authername = $authername;
 }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthername(): string
    {
        return $this->authername;
    }

}
