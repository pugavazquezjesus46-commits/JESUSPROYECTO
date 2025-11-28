<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dejar Comentario - Kawasaki H2R</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 2px solid #00ff00;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 30px rgba(0, 255, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #00ff00;
            margin-bottom: 30px;
            text-shadow: 0 0 10px #00ff00;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #00ff00;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #333;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 16px;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #00ff00;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
        }
        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #00ff00 0%, #00cc00 100%);
            color: black;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: white;
            text-decoration: none;
        }
        .back-link:hover {
            color: #00ff00;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>✍️ Tu Opinión H2R</h2>
        <form action="procesar.php" method="POST">
            <label for="nombre">Nombre o Nickname:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Ej: PilotoX">

            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="5" required placeholder="¿Qué te pareció la moto?"></textarea>

            <button type="submit">Enviar Comentario 🚀</button>
        </form>
        <a href="index.html" class="back-link">← Volver a la moto</a>
    </div>
</body>
</html>