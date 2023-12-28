<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Info</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pokémon API</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Welcome to the Pokémon API Project By Tomás González</h1>
                <!-- Aquí puedes añadir más contenido relacionado con Pokémon -->
            </div>
        </div>
    </div>
<?php
error_reporting(E_ALL);

// Mostrar errores
ini_set('display_errors', 1);
//phpinfo();
//https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0
$file = file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0', true);

$data= json_decode($file,true);
//var_dump($data);
$resultados =$data["results"];
echo '<table class="table table-bordered table-striped">
<thead>
    <tr>
        
        <th>Nombre</th>
        <th>URL</th>
        
    </tr>
</thead>
<tbody>';
foreach ($resultados as $r) {
    echo "<tr>";
    echo "<td> <a href='index2.php?url=".urlencode($r["url"])."'>".$r["name"]."</a></td>";
    echo "<td>".$r["url"]."</td>";

    echo "</tr>";

}

echo "</tbody></table>";

?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>