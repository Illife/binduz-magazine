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

    public function read_post_limit_3()
    {
        $SqlReadPostLimit3 = "SELECT * FROM post LIMIT 3";
        $conn = $this->dbconnect();
        $ResultReadPostLimit3 = $conn->query($SqlReadPostLimit3);
        return $ResultReadPostLimit3;
    }

    public function read_post_limit_3_offset_3()
    {
        $SqlReadPostLimit3Offset3 = "SELECT * FROM post LIMIT 3 OFFSET 3";
        $conn = $this->dbconnect();
        $ResultReadPostLimit3Offset3 = $conn->query($SqlReadPostLimit3Offset3);
        return $ResultReadPostLimit3Offset3;
    }

    public function read_post_by_author_id($author_id)
    {
        $SqlReadPostByAuthorId = "SELECT * FROM post WHERE `author_id` = $author_id";
        $conn = $this->dbconnect();
        $ResultReadPostByAuthorId = $conn->query($SqlReadPostByAuthorId);
        return $ResultReadPostByAuthorId;
    }

    public function read_post_by_category($category_id)
    {
        $SqlReadPostByCategoryId = "SELECT * FROM post WHERE category_id = $category_id";
        $conn = $this->dbconnect();
        $ResultReadPostByCategoryId = $conn->query($SqlReadPostByCategoryId);
        return $ResultReadPostByCategoryId;
    }

    public function read_post_by_id($id)
    {
        $SqlReadPostById = "SELECT * FROM post WHERE id = $id";
        $conn = $this->dbconnect();
        $ResultReadPostById = $conn->query($SqlReadPostById);
        return $ResultReadPostById;
    }
    public function read_post_search($search)
    {
        $SqlReadPostSearch = "SELECT * FROM `post` WHERE `title` LIKE '%{$search}%'";
        $conn = $this->dbconnect();
        $ResultReadPostSearch = $conn->query($SqlReadPostSearch);
        return $ResultReadPostSearch;
    }
}
