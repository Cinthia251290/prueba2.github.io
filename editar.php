<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #f0f3cc;
        }
        </style>

</head>
<body>

<center><span style="color :#bd1212;"> <h3>POR FAVOR ACTUALIZA LA INFORMACION</h3></span></center>

<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$app = $_GET['app'];
$apm = $_GET['apm'];
$ed = $_GET['ed'];
$nac = $_GET['nac'];
?>
    <div>
        <form action="editar2.php" method="post">
      <center>  <table border="1">
           <br><br> <tr>
                <td> INGRESA LOS DATOS: </td>
                <td><input type="text" name="id" id= "" style="visibility:hidden" value ="<?=$id?>"></td>
</tr>
        <tr>
                <td> NOMBRE (S): </td>
                <td><input type="text" name="nombre" id="" value="<?=$nombre?>"></td>
</tr>
<tr>
                <td> Apellido Paterno: </td>
                <td><input type="text" name="app" id="" value="<?=$app?>"></td>
</tr>
<tr>
                <td> Apellido Materno: </td>
                <td><input type="text" name="apm" id="" value="<?=$apm?>"></td>
</tr>
<tr>
                <td> Edad: </td>
                <td><input type="text" name="ed" id="" value="<?=$ed?>"></td>
</tr>
<tr>
                <td> Nacionalidad: </td>
                <td><input type="text" name="nac" id="" value="<?=$nac?>"></td>
</tr>
<tr>
                <td><input type="submit" value="Actualizar" ></td>
                <td><a href="index.php">Cancelar</a></td>
    </center>
</tr>
</table>
</form>
</div>
</body>
</html>