<?php
declare(strict_types=1);

class Post
{
private $title;
private $date;
private $content;
private $name;

 public function __construct(string $_title,string $_date,string $_content,string $_name)
 {
     $this->title = $_title;
     $this->date = $_date;
     $this->content = $_content;
     $this->name = $_name;
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
    public function getDate(): string
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
    public function getName(): string
    {
        return $this->name;
    }

}
