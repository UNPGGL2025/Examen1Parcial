<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo Repetido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f0f8; /* Azul grisáceo claro */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .custom-card {
            max-width: 600px;
            margin: 60px auto;
            border: none;
            border-radius: 1rem;
            background: #ffffff; /* Blanco suave */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            background: #cce5ff; /* Azul hielo */
            border-radius: 1rem 1rem 0 0;
            border-bottom: 1px solid #b8daff;
            color: #004085;
        }

        .saludo-icon {
            font-size: 1.2rem;
            color: #0d6efd; /* Azul principal Bootstrap */
            margin-right: 8px;
        }

        .saludo-text {
            font-weight: 500;
            color: #333;
        }

        .info-text {
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="card custom-card">
    <div class="card-header custom-header text-center">
        <h5 class="mb-0"><i class="bi bi-megaphone-fill me-1"></i>Saludo Repetido</h5>
    </div>

    <div class="card-body">
        <p class="info-text text-center mb-4">Mostrando <strong>{{ $veces }}</strong> veces el saludo:</p>

        <div class="px-3">
            @for ($i = 0; $i < $veces; $i++)
                <p><i class="bi bi-chat-left-quote saludo-icon"></i><span class="saludo-text">{{ $saludo }}</span></p>
            @endfor
        </div>
    </div>
</div>

</body>
</html>


