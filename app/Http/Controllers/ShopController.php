<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
class ShopController extends Controller
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
        return view('shops.create');
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
        'shopName' => 'required|string|min:3', 
        'domain' => 'required|string|min:3', 
        'adress' => 'required|min:7' 
        ]);
    //$shopStore = Shop::create($request->only('shopName','country','town','domain','adress'));
        $shopStore = Shop::create(
            [
                'shopName' => $request ->shopName,
                'country' => $request ->country,
                'town' => $request ->town,
                'domain' => $request ->domain,
                'adress' => $request ->adress
            ]
        );

        flashy('Votre boutique a été crée avec succès');
        return redirect()->route('admin');
        
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
