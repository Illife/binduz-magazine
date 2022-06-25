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

    public function read_post_by_reccomended()
    {
        $ResultReadPostByReccomended = new \Models\Post;
        $ResultReadPostByReccomended = $ResultReadPostByReccomended->read_post_by_reccomended();
        return $ResultReadPostByReccomended;
    }

    public function read_post_by_video_left()
    {
        $ResultReadPostByVideoLeft = new \Models\Post;
        $ResultReadPostByVideoLeft = $ResultReadPostByVideoLeft->read_post_by_video_left();
        return $ResultReadPostByVideoLeft;
    }

    public function read_post_by_video_center()
    {
        $ResultReadPostByVideoCenter = new \Models\Post;
        $ResultReadPostByVideoCenter = $ResultReadPostByVideoCenter->read_post_by_video_center();
        return $ResultReadPostByVideoCenter;
    }

    public function read_post_by_video_right()
    {
        $ResultReadPostByVideoRight = new \Models\Post;
        $ResultReadPostByVideoRight = $ResultReadPostByVideoRight->read_post_by_video_right();
        return $ResultReadPostByVideoRight;
    }

    public function read_post_by_trend()
    {
        $ResultReadPostByTrend = new \Models\Post;
        $ResultReadPostByTrend = $ResultReadPostByTrend->read_post_by_trend();
        return $ResultReadPostByTrend;
    }

    public function read_post_by_positions()
    {
        $ResultReadPostByPositions = new \Models\Post;
        $ResultReadPostByPositions = $ResultReadPostByPositions->read_post_by_positions();
        return $ResultReadPostByPositions;
    }

    public function read_post_last()
    {
        $ResultReadPostLast = new \Models\Post;
        $ResultReadPostLast = $ResultReadPostLast->read_post_last();
        return $ResultReadPostLast;
    }
}
