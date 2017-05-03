<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class AccountController extends Controller
{
	public function showAccount(Request $request)
    {
    	$user = Auth::user();
        $data = [];
        $data['user'] = $user;
        return view('users.account')->with($data);
    }



}