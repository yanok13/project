<?php

namespace It20Academy\App\Models;

class Post
{
    private $id;
    private $title;
    private $content;
    private $author;
    private $status;
    private $category;
    private $img;

    public static function all(): array
    {
        $db = require_once '../storage/db.php';
        dump($db);
        $posts = isset($db['posts']) ? $db['posts'] : [];

        return array_map(function ($initialPost) {
            $post = new self;
            $post->setId($initialPost['id']);
            $post->setTitle($initialPost['title']);
            $post->setContent($initialPost['content']);
            $post->setAuthor($initialPost['author']);
            $post->setStatus($initialPost['status']);
            $post->setCategory($initialPost['category']);
            $post->setImg($initialPost['img']);

            return $post;
        }, $posts);
    }

    public function setId($id): void 
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setContent(string $content): void 
    {
        $this->content = $content;
    }

    public function getContent(): string 
    {
        return $this->content;
    }

    public function setAuthor($author): void 
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        $this->author;
    }

    public function setStatus($status): void 
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        $this->status;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getCategory() 
    {
        $this->category;
    }

    public function setImg($img): void 
    {
        $this->img = $img;
    }

    public function getImg()
    {
        $this->img;
    }
}