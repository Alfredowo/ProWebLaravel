<!-- resources/views/chat/chat.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu layout -->

@section('content')
<br><br><br><br>
<div class="container">
    <h1>Chatbot</h1>

    <div class="chat-container">
        <div class="chat-header">Conversacion</div>
        <div class="chat-messages" id="chat">
            <!-- conversacion -->
        </div>
        <div class="chat-input form-group">
            <input type="text" id="pregunta" class="form-control" placeholder="Hazme una pregunta">
            <button onclick="hacerPregunta()" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<style>
    .chat-container {
        background-color: #0B141A;
        max-height: 500px;
        overflow-y: auto;
        border-radius: 10px;
    }

    .chat-header {
        background-color: #202C33;
        color: #E8E6E3;
        padding: 10px;
        text-align: center;
    }

    .chat-messages {
        overflow-y: auto;
        padding: 10px;
        word-wrap: break-word;
    }

    .chat-input {
        display: flex;
        padding: 10px;
    }

    #message-input {
        flex: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 8px;
    }

    .message {
        margin-bottom: 10px;
        display: flex;
    }

    .sender {
        justify-content: flex-end;
    }

    .message-content {
        max-width: 70%;
        padding: 8px;
        border-radius: 8px;
        background-color: #d3d3d3;
    }

    .sender .message-content {
        color: #E8E6E3;
        background-color: #0A7CFF;
    }

    .recipient .message-content {
        color: #E8E6E3;
        background-color: #202C33;
    }
</style>

<!-- ... Tu HTML existente ... -->

<script>
    function hacerPregunta() {
        var pregunta = document.getElementById('pregunta').value;

        // Realizar la petición AJAX para procesar la pregunta
        axios.post('/procesar-pregunta', {
                pregunta: pregunta
            })
            .then(function(response) {
                // Mostrar la respuesta en el chat
                var chat = document.getElementById('chat');
                chat.innerHTML += '<div class="message sender"><div class="message-content"><strong>Tú:</strong> ' + pregunta + '</div></div>';
                chat.innerHTML += '<div class="message recipient"><div class="message-content"><strong>Chatbot:</strong> ' + response.data.respuesta + '</div></div>';

                // Limpiar el campo de pregunta
                document.getElementById('pregunta').value = '';
            })
            .catch(function(error) {
                console.error(error);
            });
    }

    // Asigna el evento keydown al campo de entrada
    document.getElementById("pregunta").addEventListener("keydown", function(event) {
        // Verifica si la tecla presionada es 'Enter'
        if (event.key === 'Enter') {
            // Evita el comportamiento predeterminado de 'Enter' en un formulario
            event.preventDefault();
            // Llama a la función hacerPregunta
            hacerPregunta();
        }
    });

</script>

@endsection