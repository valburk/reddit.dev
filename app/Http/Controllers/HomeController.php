<?php 
namespace App\Http\Controllers;
class HomeController extends Controller
{
    // actions
    public function showWelcomePage()
    {
        return view('welcome');
    }
    public function showNumbers($start, $end) {
        $data = ['start' => $start, 'end' => $end];
        return view('foreach', $data);
    }
    public function sayHello($name = "World") {
        if($name === "Ryan") {
            return Redirect::to("/");
        }
        $data = ['name' => $name];
        return view('my-first-view', $data);
    }
}