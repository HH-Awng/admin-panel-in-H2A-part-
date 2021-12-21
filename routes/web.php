<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
<<<<<<< HEAD

use App\Http\Controllers\TagsController;

=======
use App\Http\Controllers\TagsController;
>>>>>>> d7d40602b8950c22dc88776ff574bdb0abb76f4d
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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
 

Auth::routes();

<<<<<<< HEAD

=======
>>>>>>> d7d40602b8950c22dc88776ff574bdb0abb76f4d
//by Uthein and Nyi
Route::get('/tags', [TagsController::class, 'index'])->name('tags');
Route::post('/tags', [TagsController::class, 'store'])->name('tag_post');


//By Than Zaw Awo
Route::get('/create',[PostController::class,'create'])->name('create');

//end Uthein and nyi
<<<<<<< HEAD

=======
>>>>>>> d7d40602b8950c22dc88776ff574bdb0abb76f4d
// Category Route
Route::resource('category', CategoryController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

// For Settings Route//
Route::get('editsetting', [SettingController::class, 'edit'])->name('editsetting');


// End for settings Route//



