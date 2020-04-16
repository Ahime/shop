<?php

namespace App\Http\Controllers\Auth;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	public function index(){
        $title = 'login';
        return view('auth/login',compact('title'));
    }

    public function login(Request $request) {

    	request()->validate([

        'email' => 'required|email', 
        'password' => 'required|min:8'

    	]);	

		if (Auth()->attempt(['email' => $request->email,'password' => $request->password])) {

			$user = Auth()->user();
            $id = Auth::id();
            $roles = $user->roles;
            flashy('Vous êtes connecté en tant que '.$user->username);
			return view('dashboard.index',compact('user','roles'));
		}
    	else {

            flashy('Vos données sont incorrcts veuillez recommencer');        
    		return back();
    	}
	}

	public function logout() {
        Session::flush();
        Auth::logout();
		return redirect()->route('index');
	}

}
