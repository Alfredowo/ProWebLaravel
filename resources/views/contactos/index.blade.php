<!-- resources/views/contactos/index.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu layout -->

@section('content')
<div class="container">
    <br><br><br><br><br>
    <h1>Listado de Contactos</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto)
            <tr>
                <td>{{ $contacto->id }}</td>
                <td>{{ $contacto->nombre }}</td>
                <td>{{ $contacto->correo }}</td>
                <td>{{ $contacto->asunto }}</td>
                <td>{{ $contacto->mensaje }}</td>
                <td>
                    <a href="{{ route('contactos.edit', $contacto->id) }}" class="btn btn-warning">Modificar</a>
                    <form action="{{ route('contactos.destroy', $contacto->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table><br>
</div>
@endsection