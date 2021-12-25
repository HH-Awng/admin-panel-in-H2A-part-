<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


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

// For Settings Route//

Route::get('/setting', [SettingController::class, 'index'])->name('indexsetting');
Route::post('/setting', [SettingController::class, 'store'])->name('postsetting');
// Route::post('/setting', [SettingController::class, 'store'])->name('postsetting');
// Route::post('/setting/show', ['as'=> 'showsetting', 'uses' => 'SettingController@store']);
// Route::post('/{setting}/show', SettingController::class, 'store')->name('postsetting');

Route::get('/viewsetting', [SettingController::class, 'show'])->name('showsetting');
// Route::get('/viewsetting', ['as' => 'setting.show', 'uses' => 'SettingController@show']);
// Route::get('/deletetting', [SettingController::class, 'create'])->name('viewsetting');
Route::get('/deletesetting/{id}', [SettingController::class, 'destroy'])->name('deletesetting');
Route::get('/editsetting/{id}', [SettingController::class, 'edit'])->name('editsetting');
Route::post('/editsetting/{id}', [SettingController::class, 'update'])->name('updatesetting');
// End for settings Route//

//by Uthein and Nyi
Route::get('/tags', [TagsController::class, 'index'])->name('tags');
Route::post('/tags', [TagsController::class, 'store'])->name('tag_post');
Route::get('/tag_delete/{id}', [TagsController::class, 'destroy'])->name('tag_delete');

Route::get('/tags_edit/{id}', [TagsController::class, 'edit'])->name('tags_edit');
Route::post('/tags_update/{id}', [TagsController::class, 'update'])->name('tags_update');


// Route::post('/upload', [TagsController::class, 'update'])->name('tag_delete');


//By Than Zaw Awo
Route::get('/create',[PostController::class,'create'])->name('create');
Route::post('/store',[PostController::class,'store'])->name('store');

//end Uthein and nyi



// Category Route
Route::resource('category', CategoryController::class);
Route::delete('/selected-category',[CategoryController::class,'deleteCheckCategory'])->name('category.deleteCheckCategory');
// End Category Route


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});




