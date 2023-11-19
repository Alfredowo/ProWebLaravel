<!-- resources/views/chat/entrenar.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu layout -->

@section('content')
<br><br><br><br><br>
    <div class="container">
        <h1>Entrenar Chatbot</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('guardar-entrenamiento') }}">
            @csrf
            <div class="form-group">
                <label for="pregunta">Pregunta</label>
                <input type="text" id="pregunta" name="pregunta" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="respuesta">Respuesta</label>
                <input type="text" id="respuesta" name="respuesta" class="form-control" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Guardar Entrenamiento</button><br>
        </form><br>
    </div>
@endsection
