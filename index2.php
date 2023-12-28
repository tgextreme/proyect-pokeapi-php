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
    $url=urldecode($_GET["url"]);
   // echo $url;
    $file = file_get_contents($url, true);
    
    $data= json_decode($file,true);
    //var_dump($data);
    echo "nombre: ".$data["name"]."<br>";
    echo "id: ".$data["id"]."<br>";
    echo "Experiencia: ".$data["base_experience"]."<br>";
    echo "Altura: ".$data["height"]."<br>";
    echo "Peso: ".$data["weight"]."<br>";
    foreach ($data["types"] as $t) {
        echo "Type: ".$t["type"]["name"]."<br>";
    }
    foreach ($data["moves"] as $m) {
        echo "Move: ".$m["move"]["name"]."<br>";
    }
    foreach ($data["abilities"] as $a) {
        echo "Abilities: ".$a["ability"]["name"]."<br>";

    }

    foreach ($data["stats"] as $s) {
echo "Stats: ".$s["stat"]["name"]."<br>";
    }
    foreach ($data["sprites"] as $s) {
        try{
            if(!is_array ($s)){
echo "Image: <img src='".$s."'></img><br>";
            }
}catch (Exception $e) {
}
    }
    

?>
</body>

</html>