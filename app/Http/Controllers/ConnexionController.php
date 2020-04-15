<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class ConnexionController extends Controller
{
    	
    public function login(Request $request) {

    	request()->validate([

        'email' => 'required|email', 
        'password' => 'required|min:8'

    	]);

    		

    		if (Auth()->attempt(['email' => $request->email,'password' => $request->password])) {

    			$user = Auth()->user();
                $id = Auth::id();
                $roles = $user->roles->first()->role;


                flashy('Vous êtes bien connecté, vous pouvez commencer votre expérience');
    			return view('dashboard.index',compact('user','roles'));
    		}
	    	else 
	    	{
            flashy('Vos données sont incorrcts veuillez recommencer');        
    		return back()->withInput()->withErrors([
    			
    		]);
    	}
	}

	public function lagout() {
        Session::flush();
        Auth::logout();
		return redirect('/');
	}

    /*public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-settings', function ($user) {
            return $user->isAdmin;
        });

        Gate::define('update-post', function ($user, $post) {
            return $user->id === $post->user_id;
        });
    }*/
}
