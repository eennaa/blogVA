<?php

// use App\Post; //ne treba mi vise jer je zakomentirano OVO
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

// Route::get('/posts', function () {           //OVO je izmesteno u PostController
//     $posts = Post:: published();
//     return view('posts', compact('posts'));
// });

Route::get('/posts', 'PostController@index');



Route::get('/proba', 'PostController@probalica');

// Route::get('/posts/{id}', function ($id) {
//     $post = Post::findOrFail($id);
//     return view('single-post', compact('post'));
// });

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{id}', 'PostController@show');
Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments','CommentController@store')->name('comments-post');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');

