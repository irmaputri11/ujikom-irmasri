<?php

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

Auth::routes(['register' => false]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend','middleware' => ['auth','role:admin']],function(){
    Route::get('/', function () {
        return 'hallo';
    });
    route::resource('user','UserController');
    route::resource('peminjam','peminjamController');

});

// Route::get('peminjam', function () {
//     return view('peminjam');
// });





