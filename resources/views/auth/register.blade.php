@extends('layouts.guest')
@section('content')
    <h2 class="text-2xl font-bold mb-6">Crear cuenta</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <div class="mb-6">
            <label for="password_confirmation">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Registrarme</button>
        <p class="text-sm mt-4">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}">Inicia sesión</a>
        </p>
    </form>
@endsection