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

    $ResultReadPostByActual = new \Controllers\PostController;
    $ResultReadPostByActual = $ResultReadPostByActual->read_post_by_actual();

    $ResultReadPostByNotActual = new \Controllers\PostController;
    $ResultReadPostByNotActual = $ResultReadPostByNotActual->read_post_by_not_actual();

    return view('index')->with('ResultReadPost', $ResultReadPost)->with('ResultReadCategory', $ResultReadCategory)->with('ResultReadPostByActual', $ResultReadPostByActual)->with('ResultReadPostByNotActual', $ResultReadPostByNotActual);
});
