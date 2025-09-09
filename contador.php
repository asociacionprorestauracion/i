<?php
header("Content-Type: application/json");

// Ruta del archivo JSON
$archivo = "contador.json";

// Si no existe, lo creamos con visitas = 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, json_encode(["visitas" => 0]));
}

// Leer el archivo JSON
$data = json_decode(file_get_contents($archivo), true);

// Incrementar el contador
$data["visitas"]++;

// Guardar nuevamente en el archivo con formato bonito
file_put_contents($archivo, json_encode($data, JSON_PRETTY_PRINT));

// Devolver el contador en formato JSON
echo json_encode($data);
