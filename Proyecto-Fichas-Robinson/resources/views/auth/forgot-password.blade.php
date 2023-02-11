@extends('layouts.guest')
@section('title', 'Restablecer Contraseña')
@section('content')
    <form method="post" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
        <button type="submit"> Email Password Reset Link  </button>
    </form>
@endsection
