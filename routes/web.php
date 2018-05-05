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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/user/dashboard', 'UserDashboardController@show')->name('user.dashboard');
Route::get('/{slug?}', 'PageController@viewSingle')->name('page.single');
Route::get('admin/pages', 'Admin\Page\AdminPageController@index')->name('page.list');
Route::get('admin/page/add', 'Admin\Page\AdminPageController@create')->name('page.add');
Route::get('admin/page/edit/{$id}', 'Admin\Page\AdminPageController@edit')->name('page.edit');
