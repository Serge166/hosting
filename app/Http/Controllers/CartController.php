<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = auth()->user()->cart;
        return view('cart.index', compact('cart'));
    }

    public function ajouter(Request $request)
    {
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $request->input('product_id');
        $cart->quantite = $request->input('quantite');
        $cart->save();

        return redirect()->route('cart.index')->with('success', 'Produit ajouté dans votre panier');
    }

    public function mettreAJour(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantite = $request->input('quantite');
        $cart->save();

        return redirect()->route('cart.index')->with('success', 'Panier mis à jour');
    }

    public function supprimer($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('cart.index')->with('success', 'Produit supprimé du panier');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
