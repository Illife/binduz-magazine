<?php

use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/../app/Http/Controllers/PostController.php';

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
    return view('index')->with('ResultReadPost', $ResultReadPost);;
});
