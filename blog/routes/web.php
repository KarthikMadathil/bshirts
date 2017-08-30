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
Route::get('/bomb', function () {
    return view('bs');
});


Route::get('/test', function () {

    return view('VueCustom'); ;
});




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('order', 'OrderController');
Route::get('/custom', 'OrderController@custom')->name('custom');//customising route
// Route::resource('product/{id}/cuff', 'CuffController');
// Route::resource('product/{id}/sleeve', 'SleeveController');
// Route::resource('product/{id}/pocket', 'PocketController');
// Route::resource('product/{id}/button', 'ButtonController');
// Route::resource('product/{id}/planket', 'PlanketController');

//__________________________________ADMIN ROUTES________________________________________________//
Route::post('/sample', 'OrderController@sample')->name('ajax show sample for order'); //ajax route to show order
Route::resource('product', 'ProductController');
Route::resource('Custom', 'CustomController');
Route::resource('product/{id}/collar', 'CollarController');
// Route::post('/submit', 'OrderController@storeOrder');
// Route::get('/add', 'ProductController@create');
// Route::post('/store', 'ProductController@store');
// // Route::get('/add/shirt', 'ProductController@create');
// Route::post('/store/shirt', 'ProductController@add');
// Route::get('/show', 'OrderController@showOrder')->middleware('auth');
//what was that this load the all the load the all the relation of model
//mm  while using eloquent is ther eny thing to note..
//
