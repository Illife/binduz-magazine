<?php

namespace Models;

require_once __DIR__ . '/Dbconnect.php';

class Post extends Dbconnect
{

    public function read_post()
    {
        $SqlReadPost = "SELECT * FROM post";
        $conn = $this->dbconnect();
        $ResultReadPost = $conn->query($SqlReadPost);
        return $ResultReadPost;
    }

    public function read_post_by_actual()
    {
        $SqlReadPostByActual = "SELECT * FROM post WHERE `status` = 'actual' LIMIT 3";
        $conn = $this->dbconnect();
        $ResultReadPostByActual = $conn->query($SqlReadPostByActual);
        return $ResultReadPostByActual;
    }

    public function read_post_by_not_actual()
    {
        $SqlReadPostByNotActual = "SELECT * FROM post WHERE `status` = 'not_actual' LIMIT 3";
        $conn = $this->dbconnect();
        $ResultReadPostByNotActual = $conn->query($SqlReadPostByNotActual);
        return $ResultReadPostByNotActual;
    }

    public function read_post_by_not_actual_by_category($category_id)
    {
        $SqlReadPostByNotActualByCategory = "SELECT * FROM post WHERE `status` = 'not_actual' AND category_id = $category_id LIMIT 3";
        $conn = $this->dbconnect();
        $ResultReadPostByNotActualByCategory = $conn->query($SqlReadPostByNotActualByCategory);
        return $ResultReadPostByNotActualByCategory;
    }

    public function read_post_by_reccomended()
    {
        $SqlReadPostByReccomended = "SELECT * FROM post WHERE `reccomended` = 'yes'";
        $conn = $this->dbconnect();
        $ResultReadPostByReccomended = $conn->query($SqlReadPostByReccomended);
        return $ResultReadPostByReccomended;
    }

    public function read_post_by_video_left()
    {
        $SqlReadPostByVideoLeft = "SELECT * FROM post WHERE `video` = 'left' LIMIT 2";
        $conn = $this->dbconnect();
        $ResultReadPostByVideoLeft = $conn->query($SqlReadPostByVideoLeft);
        return $ResultReadPostByVideoLeft;
    }

    public function read_post_by_video_center()
    {
        $SqlReadPostByVideoCenter = "SELECT * FROM post WHERE `video` = 'center' LIMIT 1";
        $conn = $this->dbconnect();
        $ResultReadPostByVideoCenter = $conn->query($SqlReadPostByVideoCenter);
        return $ResultReadPostByVideoCenter;
    }

    public function read_post_by_video_right()
    {
        $SqlReadPostByVideoRight = "SELECT * FROM post WHERE `video` = 'right' LIMIT 2";
        $conn = $this->dbconnect();
        $ResultReadPostByVideoRight = $conn->query($SqlReadPostByVideoRight);
        return $ResultReadPostByVideoRight;
    }

    public function read_post_by_video_left_by_category($category_id)
    {
        $SqlReadPostByVideoLeftByCategory = "SELECT * FROM post WHERE `video` = 'left' AND category_id=$category_id LIMIT 2";
        $conn = $this->dbconnect();
        $ResultReadPostByVideoLeftByCategory = $conn->query($SqlReadPostByVideoLeftByCategory);
        return $ResultReadPostByVideoLeftByCategory;
    }

    public function read_post_by_video_center_by_category($category_id)
    {
        $SqlReadPostByVideoCenterByCategory = "SELECT * FROM post WHERE `video` = 'center' AND category_id=$category_id LIMIT 1";
        $conn = $this->dbconnect();
        $ResultReadPostByVideoCenterByCategory = $conn->query($SqlReadPostByVideoCenterByCategory);
        return $ResultReadPostByVideoCenterByCategory;
    }

    public function read_post_by_video_right_by_category($category_id)
    {
        $SqlReadPostByVideoRightByCategory = "SELECT * FROM post WHERE `video` = 'right' AND category_id=$category_id LIMIT 2";
        $conn = $this->dbconnect();
        $ResultReadPostByVideoRightByCategory = $conn->query($SqlReadPostByVideoRightByCategory);
        return $ResultReadPostByVideoRightByCategory;
    }

    public function read_post_by_trend()
    {
        $SqlReadPostByTrend = "SELECT * FROM post LIMIT 4";
        $conn = $this->dbconnect();
        $ResultReadPostByTrend = $conn->query($SqlReadPostByTrend);
        return $ResultReadPostByTrend;
    }

    public function read_post_by_positions()
    {
        $SqlReadPostByPositions = "SELECT * FROM post LIMIT 6";
        $conn = $this->dbconnect();
        $ResultReadPostByPositions = $conn->query($SqlReadPostByPositions);
        return $ResultReadPostByPositions;
    }

    public function read_post_last()
    {
        $SqlReadPostLast = "SELECT * FROM post ORDER BY ID DESC LIMIT 4";
        $conn = $this->dbconnect();
        $ResultReadPostLast = $conn->query($SqlReadPostLast);
        return $ResultReadPostLast;
    }

    public function read_post_last_2()
    {
        $SqlReadPostLast2 = "SELECT * FROM post ORDER BY ID DESC LIMIT 2";
        $conn = $this->dbconnect();
        $ResultReadPostLast2 = $conn->query($SqlReadPostLast2);
        return $ResultReadPostLast2;
    }
}
