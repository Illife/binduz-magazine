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

    public function read_post_by_actual()
    {
        $ResultReadPostByActual = new \Models\Post;
        $ResultReadPostByActual = $ResultReadPostByActual->read_post_by_actual();
        return $ResultReadPostByActual;
    }

    public function read_post_by_not_actual()
    {
        $ResultReadPostByNotActual = new \Models\Post;
        $ResultReadPostByNotActual = $ResultReadPostByNotActual->read_post_by_not_actual();
        return $ResultReadPostByNotActual;
    }
}
