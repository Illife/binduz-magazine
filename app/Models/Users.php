<?php

namespace Models;

require_once __DIR__ . '/Dbconnect.php';

class Users extends Dbconnect
{

    public function read_author_by_author_id($author_id)
    {
        $SqlReadAuthorByAuthorId = "SELECT * FROM users WHERE id = $author_id";
        $conn = $this->dbconnect();
        $ResultReadAuthorByAuthorId = $conn->query($SqlReadAuthorByAuthorId);
        return $ResultReadAuthorByAuthorId;
    }
}
