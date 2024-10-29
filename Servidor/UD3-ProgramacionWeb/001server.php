<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Valores de $_SERVER</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_SERVER as $key => $value) {
                    echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <h2 class="mt-3">Parámetros POST</h2>
        <pre><?php print_r($_POST); ?></pre>
        <h2 class="mt-3">HTTP_REFERER</h2>
        <p>
            <?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No disponible'; ?>
        </p>
    </div>
</body>
</html>
