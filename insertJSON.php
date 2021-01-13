<?php

$conn = mysqli_connect("localhost", "root", "", "intelcost_bienes");

$json = "data-1.json";

$data = file_get_contents($json);

$array = json_decode($data, true);

foreach ($array as $row) {
    
    $sql = "INSERT INTO bienes_generales (id, Direccion, Ciudad, Telefono, Codigo_postal, Tipo, Precio) VALUES ('".$row["Id"]."', '".$row["Direccion"]."', '".$row["Ciudad"]."', '".$row["Telefono"]."', '".$row["Codigo_Postal"]."', '".$row["Tipo"]."', '".$row["Precio"]."')";

    mysqli_query($conn, $sql);

}

echo '!Datos subidos exitosamente!';

?>