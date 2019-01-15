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
//     return view('get');
// });


Route::get('/api','ApiController@index');
Route::get('/api/{id}','ApiController@show');
Route::post('/api/store','ApiController@store');
Route::put('/api/update/{id}','ApiController@update');
Route::get('/api/delete/{id}','ApiController@destroy');

Route::get('/','GetController@index');
Route::get('/data','GetController@getData'); 
Route::get('/data/{id}','GetController@show');
Route::post('/save','GetController@store');
Route::get('/edit/{id}','GetController@edit');
Route::post('/update/{id}','GetController@update');
Route::get('/delete/{id}','GetController@destroy');




Route::post('/insert','TestController@store');
Route::post('/search','TestController@search');





Route::get('dt','DtController@index');
Route::get('dt/getdata','DtController@getData');
Route::post('dt/postData','DtController@postData');
Route::get('dt/editData/{id}','DtController@editData');
Route::post('dt/updateData/{id}','DtController@updateData');
Route::get('dt/deleteData/{id}','DtController@deleteData');













// Route::get('/product-list','ProductListController@index');

// Route::get('/product-list/{company_userid}','ProductListController@show_product_list');
// Route::get('/product-show/{company_userid}','ProductListController@show_by_id');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// //Api Route
// Route::get('api','ApiController@index');
// Route::post('api-store','ApiController@store');
// Route::get('api-show/{id}','ApiController@show');
// Route::post('api-update/{id}','ApiController@update');
// Route::get('api-delete/{id}','ApiController@destroy');



// Route::get('test','TestController@index');