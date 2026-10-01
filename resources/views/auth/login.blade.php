@extends('layouts.guest')
@section('content')
    <h2 class="text-2xl font-bold mb-6">Iniciar sesión</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <label class="flex items-center mb-6">
            <input type="checkbox" name="remember">
            <span class="ml-2 text-sm">Recordarme</span>
        </label>
        <button type="submit">Entrar</button>
        <p class="text-sm mt-4">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}">Regístrate</a>
        </p>
    </form>
@endsection