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
        $SqlReadPostByActual = "SELECT * FROM post WHERE `status` = 'actual'";
        $conn = $this->dbconnect();
        $ResultReadPostByActual = $conn->query($SqlReadPostByActual);
        return $ResultReadPostByActual;
    }

    public function read_post_by_not_actual()
    {
        $SqlReadPostByNotActual = "SELECT * FROM post WHERE `status` = 'not_actual'";
        $conn = $this->dbconnect();
        $ResultReadPostByNotActual = $conn->query($SqlReadPostByNotActual);
        return $ResultReadPostByNotActual;
    }

    public function read_post_by_not_actual_by_category($category_id)
    {
        $SqlReadPostByNotActualByCategory = "SELECT * FROM post WHERE `status` = 'not_actual' AND category_id = $category_id";
        $conn = $this->dbconnect();
        $ResultReadPostByNotActualByCategory = $conn->query($SqlReadPostByNotActualByCategory);
        return $ResultReadPostByNotActualByCategory;
    }
}
