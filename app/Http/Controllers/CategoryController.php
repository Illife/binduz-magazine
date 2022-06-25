<?php

namespace Controllers;

require_once __DIR__ . '/../../Models/Category.php';

class CategoryController
{
    public function read_category()
    {
        $ResultReadCategory = new \Models\Category;
        $ResultReadCategory = $ResultReadCategory->read_category();
        return $ResultReadCategory;
    }
}
