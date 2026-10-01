@extends('layouts.plantilla')

@section('content')

<form action="{{ route('personas.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        
        @error('nombre') 
            <p class="text-red-500">{{ $message }}</p> 
        @enderror
    </div>

    {{-- El campo "email" sigue el mismo patrón: --}}
    {{-- input + old('email') + @error('email') --}}

    <div class="mb-6">
        <label>Intereses</label>
        <div class="grid grid-cols-2 gap-2">
            @foreach($intereses as $interes)
                <label>
                    <input type="checkbox" name="intereses[]" value="{{ $interes->id }}">
                    {{ $interes->nombre }}
                </label>
            @endforeach
        </div>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Guardar Persona
    </button>
</form>

@endsection