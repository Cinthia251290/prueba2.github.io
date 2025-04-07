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
<center><span style="color :#bd1212;"> <h3>INGRESA LOS DATOS SOLICITADOS</h3></span></center>
    <div>
        <form action="insertar.php" method="post">
      <center>  <table border="1">
        <br><br><br> <tr>
              <td> INGRESA LOS DATOS: </td>
</tr>
        <tr>
                <td> NOMBRE (S): </td>
                <td><input type="text" name="nombre" id=""></td>
</tr>
<tr>
                <td> Apellido Paterno: </td>
                <td><input type="text" name="app" id=""></td>
</tr>
<tr>
                <td> Apellido Materno: </td>
                <td><input type="text" name="apm" id=""></td>
</tr>
<tr>
                <td> Edad: </td>
                <td><input type="text" name="ed" id=""></td>
</tr>
<tr>
                <td> Nacionalidad: </td>
                <td><input type="text" name="nac" id=""></td>
    </center>
</tr>
<tr>
               <center> <td><input type="submit" value="Guardar" ></td>
    </center>
</tr>
</table>
</form>
</div>
</body>
</html>