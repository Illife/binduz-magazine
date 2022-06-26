<?php

namespace Models;

require_once __DIR__ . '/Dbconnect.php';

class Category extends Dbconnect
{

    public function read_category_by_category_id($category_id)
    {
        $SqlReadCategoryByCategoryId = "SELECT * FROM category WHERE id = $category_id";
        $conn = $this->dbconnect();
        $ResultReadCategoryByCategoryId = $conn->query($SqlReadCategoryByCategoryId);
        return $ResultReadCategoryByCategoryId;
    }

    public function read_category()
    {
        $SqlReadCategory = "SELECT * FROM category";
        $conn = $this->dbconnect();
        $ResultReadCategory = $conn->query($SqlReadCategory);
        return $ResultReadCategory;
    }

    public function read_category_limit_5()
    {
        $SqlReadCategoryLimit5 = "SELECT * FROM category LIMIT 5";
        $conn = $this->dbconnect();
        $ResultReadCategoryLimit5 = $conn->query($SqlReadCategoryLimit5);
        return $ResultReadCategoryLimit5;
    }

    public function read_category_limit_6()
    {
        $SqlReadCategoryLimit6 = "SELECT * FROM category LIMIT 6";
        $conn = $this->dbconnect();
        $ResultReadCategoryLimit6 = $conn->query($SqlReadCategoryLimit6);
        return $ResultReadCategoryLimit6;
    }

    public function read_category_limit_6_offset_6()
    {
        $SqlReadCategoryLimit6Offset6 = "SELECT * FROM category LIMIT 6 OFFSET 6";
        $conn = $this->dbconnect();
        $ResultReadCategoryLimit6Offset6 = $conn->query($SqlReadCategoryLimit6Offset6);
        return $ResultReadCategoryLimit6Offset6;
    }
}
