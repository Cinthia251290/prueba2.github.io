<?php
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$ed = $_POST['ed'];
$nac = $_POST['nac'];

$cnx= mysqli_connect("localhost", "root", "", "info");
$sql= "INSERT INTO usuarios (Nombre, Paterno, Materno, Edad, Nacionalidad) VALUES ('$nombre', '$app', '$apm', '$ed', '$nac')";
$rta= mysqli_query($cnx, $sql);
    if(!$rta){
        echo "¡Datos incompletos!";
    }
    else {
        header("Location: index.php");
    }
?>