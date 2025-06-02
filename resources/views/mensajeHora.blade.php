<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje por hora local</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border: none;
            border-radius: 1rem;
            padding: 2rem;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

@if (!isset($hora))
    <!-- Formulario oculto para enviar la hora automáticamente -->
    <form id="horaForm" action="{{ url('/mensaje-hora') }}" method="POST">
        @csrf
        <input type="hidden" name="hora" id="horaInput">
    </form>

    <script>
        const horaLocal = new Date().getHours();
        document.getElementById('horaInput').value = horaLocal;
        document.getElementById('horaForm').submit();
    </script>
@else
    <!-- Mostrar mensaje basado en la hora -->
    <div class="card text-center text-white bg-{{ $color }}">
        <div class="card-body">
            <i class="{{ $icono }} display-1 mb-3"></i>
            <h1 class="card-title">{{ $mensaje }}</h1>
            <p class="card-text">Hora local detectada: {{ $hora }}:00 hrs</p>
        </div>
    </div>
@endif

</body>
</html>
