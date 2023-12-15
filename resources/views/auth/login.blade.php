@extends('layouts.base')
@section('titre')
{{'Page de connection'}}
@endsection
@section('content')
<h1>Page de connection</h1>
<div class="container mx-auto">
    <form action="{{ route('login') }}" method="POST">
    @csrf    
    <p>
        <input type="email" name="email" id="email" placeholder="Votre émail..." required>
    </p>
    <p>
        <input type="password" name="password" id="password" placeholder="Votre mot de passe">
    </p>
    
    <p>
        <button type="submit" class="btn btn-lg-primary">Connectez-vous</button>
        <a href="{{ route('register') }}" class="btn-light">Je n'ai pas encore de compte</a>
    </p>

</form>

</div>
@endsection