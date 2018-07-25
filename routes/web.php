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

/*
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/home', function () {
	return view('home');
});
Route::get('/foo', function () {
	return view('foo');
})->name('foo');
Route::get('/bar', function () {
	return view('bar');
})->name('bar');
Route::get('/foo', function(){
	return '<h1>Foo world</h1><br/><a href="/bar">Go to Bar Page</a>';
});
Route::get('/bar', function(){
	return '<h1>Bar world</h1><br/><a href="/foo">Go to Foo Page</a>';
});
Route::get('/shoutout/{text}', function ($text) {
	$colors = array(
		            "red" =>"means of passion", 
		            "green"=> "color of nature",
		            "blue"=>"color of the sky", 
		            "pink"=>"color of kikay",
		             "black"=>"color of emotional",
		              "maroon"=>"color of the day",);

	return view ('shoutout',
	       array(
	 	           'text'=> $text,
	 	           'colors'=> $colors
	 	         ));
})->name('shoutout');
*/

Route::get('/', function() {
	return view('welcome');
});
Route::get('/basic-arithmetic/{operation}/{num1}/{num2}', function ($operation,$num1,$num2){

	return view('basic-arithmetic',
           array('operation'=>$operation,
                 'num1'=>$num1,
                 'num2'=>$num2,
                 'sum'=>$sum=$num1+$num2,
                 'diff'=>$diff=$num1-$num2,
                 'mul'=>$mul=$num1*$num2,
                 'div'=>$div=$num1/$num2));
})->name('basic-arithmetic');
