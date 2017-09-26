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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/datatable', function () {
    return view('datatable');
});
*/


//Main Pages
Route::get('/crm', 'AccountController@display');
Route::get('/contacts', 'ContactController@display');


// Route::get('/accountadd', function () {
//     return view('account_add');
// });


//for Account Display and Entry

Route::get('/accountadd', 'AccountController@index');

Route::post('/accountadd', 'AccountController@store');

//for Contact Display and Entry

Route::get('/contactadd', 'ContactController@index');

Route::post('/contactadd', 'ContactController@store');
Route::get('/notes', 'NoteController@index');



//notes relates



Route::group(['middleware' => ['web']], function() {

Route::resource('notes','NoteController');

});


