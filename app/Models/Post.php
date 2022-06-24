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
}
