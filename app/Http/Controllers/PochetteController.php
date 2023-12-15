<?php

namespace App\Http\Controllers;

use App\Models\Pochette;
use Illuminate\Http\Request;

class PochetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pochette.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pochette=new Pochette();
        $pochette->quantity=$request->quantity;
        $pochette->rabats=$request->rabats;
        $pochette->inside_printe=$request->inside_printe;
        $pochette->choice_carton=$request->choice_carton;
        $pochette->infography=$request->infography;
        $pochette->advertising=$request->advertising;
        $pochette->livraison=$request->livraison;
        $pochette->product_price=$request->product_price;
        $pochette->save();

        $quantity_choix=explode(" - ", $pochette->quantity)[0];
        $quantity_prix=floatval(explode(" - ", $pochette->quantity)[1]);
        
        $rabats_choix=explode(" - ", $pochette->rabats)[0];
        $rabats_prix=floatval(explode(" - ", $pochette->rabats)[1]);

        $inside_printe_choix=explode(" - ", $pochette->inside_printe)[0];
        $inside_printe_prix=floatval(explode(" - ", $pochette->inside_printe)[1]);

        $choice_carton_choix=explode(" - ", $pochette->choice_carton)[0];
        $choice_carton_prix=floatval(explode(" - ", $pochette->choice_carton)[1]);

        $infography_choix=explode(" - ", $pochette->infography)[0];
        $infography_prix=floatval(explode(" - ", $pochette->infography)[1]);
        
        $advertising_choix=explode(" - ", $pochette->advertising)[0];
        $advertising_prix=floatval(explode(" - ", $pochette->advertising)[1]);
        
        $livraison_choix=explode(" - ", $pochette->livraison)[0];
        $livraison_prix=floatval(explode(" - ", $pochette->livraison)[1]);

        $product_price=floatval(198.99);
        $total_choices=floatval($quantity_prix + $rabats_prix + $inside_printe_prix + $choice_carton_prix + $infography_prix + $advertising_prix + $livraison_prix);
        $total=floatval($total_choices + $product_price);
        return view('pochette.store', compact('pochette', 
        'quantity_choix','quantity_prix',
        'rabats_choix','rabats_prix',
        'inside_printe_choix','inside_printe_prix',
        'choice_carton_choix','choice_carton_prix',
        'infography_choix','infography_prix',
        'advertising_choix','advertising_prix',
        'livraison_choix','livraison_prix',
        'product_price','total_choices', 'total'));
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pochette $pochette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pochette $pochette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pochette $pochette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pochette $pochette)
    {
        //
    }
}
