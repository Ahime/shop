<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Users.create');
    }
                
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'username' => 'required|string|min:10', 
            'birthday' => 'required|date', 
            'phone' => 'required|min:8', 
            'email' => 'required|email|min:10|unique:users', 
            'password' => 'required|confirmed|min:8'  
        ]);

        $user = new User([
            'username' => $request->username,
            'sex' => $request->sex,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'bankingAccount' => '256854535454534',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'urlImage' => 'storage/images/photo.png',
        ]);

        $user->save();
            
        $role = DB::table('roles')->where('name', 'buyer')->first();

        DB::table('roles_users')->insert([
            'user_id' => $user->id,
            'role_id' => $role->id,
        ]);
            
        flashy('Votre compte a été crée avec succès');
        return redirect()->route('index');
    }
             
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
