<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LocalizationController;


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
    return view('welcome');
});

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

Route::get('blog/index', [BlogController::class, 'index']);

Route::get('blog/create', function (){
	return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');



Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::view('upload', 'upload');
Route::post('upload',[UploadController::class,'index']);

Route::get('mail/send', [MailController::class,'send']);

Route::get('/index/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('index');
}) ;

Route::get('/{lang}', [LocalizationController::class,'index']);





