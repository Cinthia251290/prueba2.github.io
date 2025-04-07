<?php
$id = $_GET['id'];

$cnx= mysqli_connect("localhost", "root", "", "info");
$sql= "DELETE from usuarios WHERE id LIKE $id"; 
$rta= mysqli_query($cnx, $sql);
    if(!$rta){
        echo "¡No se Elimino!";
    }
    else {
        header("Location: index.php");
    }
?>