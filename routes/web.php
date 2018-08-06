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
})->name('index');

Route::get('/home', function () {
	return view('home');
});
Route::get('/foo', function (){
   return view('foo');	
})->name('foo');

Route::get('/bar', function (){
   return view('bar');	
})->name('bar');

Route::get('/foo', function (){
   return '<h1>Foo world</h1><br/><a href="/bar">Go to Bar Page</a>';
});

Route::get('/bar', function (){
   return '<h1>Bar world</h1><br/><a href="/bar">Go to Foo Page </a>';
});

 Route::get('middleware/{age}', function ($age){
	return view ('age', array('age'=>$age));
});
 Route::get('/pages/contact',
  'PagesController@contactPage');

 Route::get('/pages/middleware/{age}',
  'PagesController@middlewareAgePage');
 Route::get('/pages/shoutout/{text}',
   'PagesController@shoutoutPage')->name('shoutout');

 Route::get('/crushes','CrushesController@index');

 Route::get('/crushes/create', 'CrushesController@create')->name('crushes.create');

 Route::post( '/crushes/store', 'CrushesController@store' )->name( 'crushes.store' );
Route::get( '/crushes',  'CrushesController@index' )->name( 'crushes.index' );
Route::get( '/crushes/{id}/edit', 'CrushesController@edit ')->name( 'crushes.id.edit' );
Route::post( '/crushes/{id}/update', 'CrushesController@update')->name( 'crushes.id.update' );