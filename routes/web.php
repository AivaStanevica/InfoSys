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
    return view('auth/login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


/*
 * Profile routes
 */

Route::get('/profile/{user}', 'UsersController@edit')->name('user')->middleware('can:login');

Route::get('/profile/create', 'UsersController@create')->name('userCreate');

Route::post('/profile', 'UsersController@store')->name('userStore')->middleware('auth');

Route::patch('/profile/{user}', 'UsersController@update')->name('userUpdate')->middleware('auth');


/*
 * User list routes
 */

Route::get('/users', 'UsersController@index')->name('usersList')->middleware('auth');

Route::get('/users/expanded', 'UsersController@index2')->name('usersListExpanded')->middleware('auth');

Route::delete('/users', 'UsersController@destroy')->name('deleteUser');

Route::get('/users/pending', 'UsersController@showPending')->name('showPending');

Route::patch('/users/pending', 'UsersController@active')->name('active');
/*
 * Roles routes
 */

Route::get('/roles', 'RolesController@index')->name('roles')->middleware('auth');

Route::get('/role/create', 'RolesController@create')->name('roleCreate')->middleware('auth');

Route::post('/roles', 'RolesController@store')->name('roleStore')->middleware('auth');

Route::get('/role/list', 'RolesController@userRole')->name('userRole')->middleware('auth');


/*
 * Permissions routes
 */

Route::get('/permissions', function () {
    return view('user.permissions');
})->name('permissions')->middleware('auth');

/*
 * Finance routes
 */

Route::get('/finance/{id?}', 'TransactionsController@show')->name('finance')->middleware('auth');

Route::post('/finance/.*', 'FinanceController@store')->name('financeStore')->middleware('auth');

Route::post('/finance', 'TransactionsController@store')->name('transactionStore')->middleware('auth');


/*
 * Project routes
 */
Route::get('/projects/{id?}', 'ProjectsController@show')->name('project')->middleware('auth');

Route::post('/projects', 'ProjectsController@store')->name('projectStore')->middleware('auth');
/*
 * Inventory routes
 */

Route::get('/inventory', function () {
    return view('inventory.show');
})->name('inventory')->middleware('auth');