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

// Route::get('/', function () {
//     return view('welcome');
// });

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




Route::get('/roll/{guess}', function($guess)
{
    if ($guess == "guess") {
        return Redirect::to('/');
    }

    $data = array('guess' => $guess);
    return view('rolldice', $data);
});