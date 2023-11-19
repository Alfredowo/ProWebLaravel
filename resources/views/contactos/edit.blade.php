@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br><br>
    <h1>Editar Contacto</h1>

    <form action="{{ route('contactos.update', $contacto->id) }}" method="post" role="form">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $contacto->nombre }}" required>
        </div><br>

        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" name="correo" class="form-control" id="correo" value="{{ $contacto->correo }}" required>
        </div><br>

        <div class="form-group">
            <label for="asunto">Asunto</label>
            <input type="text" name="asunto" class="form-control" id="asunto" value="{{ $contacto->asunto }}" required>
        </div><br>

        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" class="form-control" id="mensaje" rows="5" required>{{ $contacto->mensaje }}</textarea>
        </div>

        <div class="my-3">
            @if (session('success'))
            <div class="sent-message">{{ session('success') }}</div>
            @endif
            <div class="error-message"></div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar Contacto</button>
        </div><br>

    </form>
</div>
@endsection