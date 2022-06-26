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

    public function read_category_limit_5()
    {
        $ResultReadCategoryLimit5 = new \Models\Category;
        $ResultReadCategoryLimit5 = $ResultReadCategoryLimit5->read_category_limit_5();
        return $ResultReadCategoryLimit5;
    }

    public function read_category_limit_6()
    {
        $ResultReadCategoryLimit6 = new \Models\Category;
        $ResultReadCategoryLimit6 = $ResultReadCategoryLimit6->read_category_limit_6();
        return $ResultReadCategoryLimit6;
    }

    public function read_category_limit_6_offset_6()
    {
        $ResultReadCategoryLimit6Offset6 = new \Models\Category;
        $ResultReadCategoryLimit6Offset6 = $ResultReadCategoryLimit6Offset6->read_category_limit_6();
        return $ResultReadCategoryLimit6Offset6;
    }
}
