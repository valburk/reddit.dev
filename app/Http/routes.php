<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('{word}', function($word)
// {
//     return strtoupper($word);
// });


// Route::get('add/{number}/{Onumber}', function($number, $Onumber)
// {
// 	if (!is_numeric($number)){
// 	    return "Must be a number!";
// 	}else{
// 		return $number + $Onumber;
// 	}
// });


// Route::get('/sayhello/{name}', function($name)
// {
//     return view('my-first-view');
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return Redirect::to('/');
//     }

//     $data = array('name' => $name);
//     return view('my-first-view', $data);
// });

Route::resource('posts', 'PostController');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// Route::get('/uppercase/{word}', function($word)
// {
//     if ($word == "word") {
//         return Redirect::to('/');
//     }

//     $data = array('word' => $word);
//     return view('layouts.uppercase', $data);
// });
Route::get('orm-test', function ()
{
$posts = \App\Models\Post::all();
return $posts;
});
