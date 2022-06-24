<?php

namespace Controllers;

require_once __DIR__ . '/../../Models/Post.php';

class PostController
{
    public function read_post()
    {
        $ResultReadPost = new \Models\Post;
        $ResultReadPost = $ResultReadPost->read_post();
        return $ResultReadPost;
    }
}
