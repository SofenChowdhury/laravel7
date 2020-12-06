<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'TodoController@index')->name('home');
//Route::get('/todo_show', 'TodoController@index')->name('todo_show');
Route::get('todo_show','TodoController@show');
Route::get('todo_delete/{id}','TodoController@destroy');
Route::get('todo_create','TodoController@create');
Route::post('todo_submit','TodoController@store');
Route::get('todo_edit/{id}','TodoController@edit');
Route::post('todo_update/{id}','TodoController@update')->name('todo.update');
//Route::view('page','page');
//Route::view('page2','page2');
//Route::view('form','form');
//Route::post('formSubmit','FormController@index');
////Route::view('web','web');
//Route::get('/web', function () {
////    return view('web', array('data'=>array('name'=>'sofen008')));
//    return view('web', array('data'=>array('sofen','rabby','imon')));
//});
////Route::view('news','news')->middleware('UserCheck');
////Route::view('news','news');
//Route::view('news2','news2');
//Route::view('denied','denied');
//Route::group(['middleware'=>['UserCheck']],function(){
//    Route::view('news','news');
//});
//Route::get('session_set','User@session_set');
//Route::get('session_get','User@session_get');
//Route::get('session_remove','User@session_remove');
//Route::get('session_check','User@session_check');
//Route::view('login','login');
//Route::post('userLoginSubmit','User@userLoginSubmit');
//Route::get('/logout', function () {
//    session()->forget('name');
//    session()->flash('error','Logout successfully');
//    return redirect('login');
//});
//Route::group(['middleware'=>['UserAuth']],function(){
//    Route::get('index','User@index');
//    Route::get('about','User@about');
//    Route::get('services','User@services');
//});

//Route::get('select','DB_Test@select');
//Route::get('insert','DB_Test@insert');
//Route::get('update','DB_Test@update');
//Route::get('delete','DB_Test@delete');
//Route::get('get_data','UserProfile@index');
//Route::get('/test/{id}', function ($id) {
//    echo $id;
//    return view('first');
//});
//Route::get('user_home','User@index');
//Route::get('user_home/{id}','User@index');
