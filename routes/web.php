<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

use App\Http\Controllers\BlogController;

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

Route::get('/index', function () {
    return view('index');
}) -> name('index');

Route::get('/skills', function () {
    return view('skills');
}) -> name('skills');

Route::get('/Experience', function () {
    return view('Experience');
}) -> name('Experience');

Route::get('/Contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('/post/create', function () {
    DB::table('post')->insert([
    	'title' => 'My first post',
    	'body' => 'This is post body'

    ]);
});

Route::get('post', function (){
	$post = Post::find(1);
	return $post;
});

Route::get('blogs', [BlogController::class, 'index']);





