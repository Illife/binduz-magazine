<?php

use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/../app/Http/Controllers/PostController.php';
require_once __DIR__ . '/../app/Http/Controllers/CategoryController.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $ResultReadPost = new \Controllers\PostController;
    $ResultReadPost = $ResultReadPost->read_post();

    $ResultReadCategory = new \Controllers\CategoryController;
    $ResultReadCategory = $ResultReadCategory->read_category();

    $ResultReadCategoryLimit5 = new \Controllers\CategoryController;
    $ResultReadCategoryLimit5 = $ResultReadCategoryLimit5->read_category_limit_5();

    $ResultReadPostByActual = new \Controllers\PostController;
    $ResultReadPostByActual = $ResultReadPostByActual->read_post_by_actual();

    $ResultReadPostByNotActual = new \Controllers\PostController;
    $ResultReadPostByNotActual = $ResultReadPostByNotActual->read_post_by_not_actual();

    $ResultReadPostByReccomended = new \Controllers\PostController;
    $ResultReadPostByReccomended = $ResultReadPostByReccomended->read_post_by_reccomended();

    $ResultReadPostByVideoLeft = new \Controllers\PostController;
    $ResultReadPostByVideoLeft = $ResultReadPostByVideoLeft->read_post_by_video_left();

    $ResultReadPostByVideoCenter = new \Controllers\PostController;
    $ResultReadPostByVideoCenter = $ResultReadPostByVideoCenter->read_post_by_video_center();

    $ResultReadPostByVideoRight = new \Controllers\PostController;
    $ResultReadPostByVideoRight = $ResultReadPostByVideoRight->read_post_by_video_right();

    $ResultReadPostByTrend = new \Controllers\PostController;
    $ResultReadPostByTrend = $ResultReadPostByTrend->read_post_by_trend();

    $ResultReadPostByPositions = new \Controllers\PostController;
    $ResultReadPostByPositions = $ResultReadPostByPositions->read_post_by_positions();

    $ResultReadPostLast = new \Controllers\PostController;
    $ResultReadPostLast = $ResultReadPostLast->read_post_last();

    $ResultReadCategoryLimit6 = new \Controllers\CategoryController;
    $ResultReadCategoryLimit6 = $ResultReadCategoryLimit6->read_category_limit_6();

    $ResultReadCategoryLimit6Offset6 = new \Controllers\CategoryController;
    $ResultReadCategoryLimit6Offset6 = $ResultReadCategoryLimit6Offset6->read_category_limit_6_offset_6();

    $ResultReadPostLast2 = new \Controllers\PostController;
    $ResultReadPostLast2 = $ResultReadPostLast2->read_post_last_2();

    return view('index')->with('ResultReadPost', $ResultReadPost)
        ->with('ResultReadCategory', $ResultReadCategory)
        ->with('ResultReadCategoryLimit5', $ResultReadCategoryLimit5)
        ->with('ResultReadPostByActual', $ResultReadPostByActual)
        ->with('ResultReadPostByNotActual', $ResultReadPostByNotActual)
        ->with('ResultReadPostByReccomended', $ResultReadPostByReccomended)
        ->with('ResultReadPostByVideoLeft', $ResultReadPostByVideoLeft)
        ->with('ResultReadPostByVideoCenter', $ResultReadPostByVideoCenter)
        ->with('ResultReadPostByVideoRight', $ResultReadPostByVideoRight)
        ->with('ResultReadPostByTrend', $ResultReadPostByTrend)
        ->with('ResultReadPostByPositions', $ResultReadPostByPositions)
        ->with('ResultReadPostLast', $ResultReadPostLast)
        ->with('ResultReadCategoryLimit6', $ResultReadCategoryLimit6)
        ->with('ResultReadCategoryLimit6Offset6', $ResultReadCategoryLimit6Offset6)
        ->with('ResultReadPostLast2', $ResultReadPostLast2);
});

Route::get('/about-us', function () {
    return view('about-us');
});
