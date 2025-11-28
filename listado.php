<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - Kawasaki H2R</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            color: white;
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #00ff00;
            text-shadow: 0 0 20px #00ff00;
            margin-bottom: 40px;
        }
        .comments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .comment-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #00ff00;
            border-radius: 15px;
            padding: 20px;
            backdrop-filter: blur(5px);
            transition: transform 0.3s;
        }
        .comment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 255, 0, 0.2);
        }
        .author {
            color: #00ff00;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 1px solid rgba(0, 255, 0, 0.3);
            padding-bottom: 5px;
        }
        .date {
            font-size: 0.8em;
            color: #aaa;
            float: right;
        }
        .text {
            font-size: 1em;
            line-height: 1.5;
            color: #ddd;
        }
        .nav-btn {
            display: block;
            width: 200px;
            margin: 40px auto;
            text-align: center;
            padding: 15px;
            background: #00ff00;
            color: black;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
        }
        .server-msg {
            font-size: 0.8em; 
            color: #555; 
            text-align: center; 
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="server-msg">
    <?php
    
    $conexion = mysqli_connect("sql312.epizy.com","if0_40478677","jesusvazquezproyecto","if0_40478677_proyecto");
    if(!$conexion){
        echo "Error: No se pudo conectar a MySQL.";
        exit;
    }
    
    echo "Estado: Conexión establecida (Host: " . mysqli_get_host_info($conexion) . ")";
    ?>
    </div>

    <h1>💬 Opiniones de la Comunidad</h1>

    <div class="comments-grid">
        <?php
        $sql = "SELECT * FROM Visitas ORDER BY id DESC";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while($fila = mysqli_fetch_assoc($resultado)) {
                echo '<div class="comment-card">';
                echo '<div class="author">' . htmlspecialchars($fila["nombre"]) . ' <span class="date">' . $fila["fecha"] . '</span></div>';
                echo '<div class="text">"' . htmlspecialchars($fila["comentario"]) . '"</div>';
                echo '</div>';
            }
        } else {
            echo "<p style='text-align:center; grid-column: 1/-1;'>Aún no hay comentarios. ¡Sé el primero!</p>";
        }

        mysqli_close($conexion);
        ?>
    </div>

    <a href="formulario.php" class="nav-btn">✍️ Escribir Comentario</a>
    <a href="index.html" style="display:block; text-align:center; color: #00ff00; margin-top: 10px;">← Volver a la Moto</a>

</body>
</html>