<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$ed = $_POST['ed'];
$nac = $_POST['nac'];

$cnx= mysqli_connect("localhost", "root", "", "info");
$sql= "UPDATE usuarios SET Nombre='$nombre', Paterno='$app', Materno='$apm', Edad='$ed', Nacionalidad='$nac' WHERE id LIKE $id"; 
$rta= mysqli_query($cnx, $sql);
    if(!$rta){
        echo "¡No se Actualizo!";
    }
    else {
        header("Location: index.php");
    }
?>