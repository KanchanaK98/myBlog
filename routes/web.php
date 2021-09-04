<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    //$post=Post::all();
    $post=DB::table('users')->join('posts','users.id','=','posts.user_id')->get();
    return view('welcome')->with('posts',$post);
});

Route::get('/{id}/continue',['as'=>'continue_reading','uses'=>'App\Http\Controllers\continueReading@continue']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/addPost', ['as' => 'add_post', 'uses' => 'App\Http\Controllers\HomeController@store']);

});