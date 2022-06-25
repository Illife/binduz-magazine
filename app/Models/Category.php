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
}
