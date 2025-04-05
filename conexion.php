<?php
$server = "localhost";
$user = "root";
$passw= "";
$db= "examen_pr2"; //para subir una base de datos, se descarga, se va a la casita, las tres lineas, import, seleccion del elemento y al fondo import
$portdb="3306"; //necesario si hay otro puerto determinado 

$conexion = new mysqli($server, $user, $passw, $db);
//socket: protocolo bidireccional. Usado para mensajeria
if ($conexion->connect_error){
    die("Conexion fallida <br>" . $conexion->connect_error);
}

echo "Conexion exitosa <br>";

$sql= "select * from personas"; //trae un array de elemetos
$restDB=$conexion->query($sql);

if($restDB->num_rows>0){ 
    while($row=$restDB->fetch_assoc()){ 
    //Se asigna a la variable row
    //convierte los elementos a objetos de php
    echo $row['id']. "" . $row['nombre'] . "" . $row['email'] . "" . $row['edad'];
    echo '<br>';
    }
}

$conexion->close(); //para cerrar la conexión
?>
