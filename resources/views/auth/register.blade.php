@extends('layouts.base')
@section('titre')
{{'Page d\'inscription'}}
@endsection
@section('content')
<h1>Page d'inscription</h1>
    <div class="container mx-auto">
        <form action="{{ route('register') }}" method="POST">
        @csrf
        <p>
            <input type="text" name="name" id="name" placeholder="Votre nom" required>
        </p>
        <p>
            <input type="email" name="email" id="email" placeholder="Votre émail..." required>
        </p>
        <p>
            <input type="password" name="password" id="password" placeholder="Votre mot de passe">
        </p>
        <p>
            <input type="password" name="password_confirmation" id="password" placeholder="Resaisissez votre mot de passe">
        </p>
        <p>
            <button type="submit" class="btn btn-lg-light">Enregistrez</button>
        </p>
    </form>
    </div>
@endsection