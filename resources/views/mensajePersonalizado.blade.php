<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje Personalizado</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #e3f2fd, #fce4ec);
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mensaje-container {
            max-width: 420px;
            width: 100%;
            padding: 35px;
            border-radius: 18px;
            background: linear-gradient(135deg, #ffffff, #f1f1ff);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-left: 6px solid #a78bfa;
            transition: all 0.3s ease;
        }

        .mensaje-container:hover {
            transform: scale(1.01);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
        }

        .mensaje-icon {
            font-size: 3rem;
            color: #a78bfa;
        }

        .mensaje-title {
            font-size: 1.7rem;
            font-weight: 600;
            color: #333;
            margin-top: 15px;
        }

        .mensaje-text {
            font-size: 1.1rem;
            color: #555;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="mensaje-container">
        <i class="bi bi-envelope-heart-fill mensaje-icon"></i>
        <div class="mensaje-title">Mensaje Personalizado</div>
        <div class="mensaje-text">{{ $mensaje }}</div>
    </div>

</body>
</html>


