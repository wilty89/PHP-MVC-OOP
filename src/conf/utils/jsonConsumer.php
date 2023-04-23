<?php


$data = file_get_contents("http://localhost/pruebas/leer/alumnos.json");
$notas = json_decode($data, true);
 
foreach ($notas as $nota)
{
    $nombre = "";
    $apellidos = "";
    $nota_final = "";
    foreach ($nota as $key => $value){
        switch ($key) {
            case 'nombre':
                $nombre = $value;
                break;
            case 'apellidos':
                $apellidos = $value;
                break;
            case 'nota':
                $nota_final = $value;
                break;
        }
    }
    echo "<p>Alumno: " . $nombre . " " . $apellidos . " -> " . $nota_final . "</p>";
    echo "<h4>Aquí vendría el código de lo que queramos hacer con ese alumno...</h4>";
}
echo "<p>Codigo fuera del bucle</p>";



function get_all_data()
{
    $json = (array) json_decode(file_get_contents('data.json'));
    $data = [];
    foreach ($json as $row) {
        $data[$row->id] = $row;
    }
    return $data;
}