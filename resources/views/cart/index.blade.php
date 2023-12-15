@extends('layouts.base')

@section('content')
    <h1>Votre Panier</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(isset($cart) && !is_null($cart)){
        $count = count($cart);
        @if($cart->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item->product->nom }}</td>
                        <td>
                            <form action="{{ route('cart.mettre-a-jour', $item->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <input type="number" name="quantite" value="{{ $item->quantite }}" min="1">
                                <button type="submit">Mettre à jour</button>
                            </form>
                        </td>
                        <td>{{ $item->product->prix }}</td>
                        <td>{{ $item->product->prix * $item->quantite }}</td>
                        <td>
                            <form action="{{ route('cart.supprimer', $item->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            Total: {{ $cart->sum(function ($item) {
                return $item->product->prix * $item->quantite;
            }) }}
        </div>
    @else
        <p>Le panier est vide.</p>
    @endif
    } 
        @endif

    
@endsection