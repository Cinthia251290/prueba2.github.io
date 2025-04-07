<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de usuario</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #f0f3cc;
        }

        .new{
    color:#1e1e1e;
    font-size: 15px;
    cursor: pointer;
    width: 1900px;
    display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; 
        }
        </style>



</head>
<body>
   <center> <span style="color :#bd1212;"> <h1>SECRETARIA DE SALUD</h1></span></center>

    <div class="new">
    <br> <form action="nuevo.php" method="post">
        <input type="submit" value="Nuevo">
</form>
</div>

<div>
   <center> <table border="1">
       <br> <tr>
        <td>ID </td>
        <td> NOMBRE </td>
        <td>APELLIDO PATERNO</td>
        <td>APELLIDO MATERNO </td>
        <td>EDAD </td>
        <td>NACIONALIDAD </td>
        <td>¿QUE DESEA REALIZAR?</td>
    </center>
</tr>
<?php
    $cnx= mysqli_connect("localhost", "root", "", "info");
    $sql= "SELECT id, Nombre, Paterno, Materno, Edad, Nacionalidad from usuarios order by id desc";
    $rta= mysqli_query($cnx, $sql);
    while ($mostrar =mysqli_fetch_row($rta)) {
        ?>
        <tr> 
            <td><?php echo $mostrar['0'] ?></td>
            <td><?php echo $mostrar['1'] ?></td>
            <td><?php echo $mostrar['2'] ?></td>
            <td><?php echo $mostrar['3'] ?></td>
            <td><?php echo $mostrar['4'] ?></td>
            <td><?php echo $mostrar['5'] ?></td>
            <td>
                <a href="editar.php?
                id=<?php echo $mostrar['0']?> &
                nombre=<?php echo $mostrar['1']?> &
                app=<?php echo $mostrar['2'] ?> &
                apm= <?php echo $mostrar['3'] ?> &
                ed=<?php echo $mostrar['4'] ?> &
                nac=<?php echo $mostrar['5'] ?>                 
                ">Editar usuario</a>
            <a href="eliminar.php? id=<?php echo $mostrar['0']?>"> Eliminar usuario</a>
        </td>
    </tr>
<?php
    }
    ?>
    </table>

</body>
</html>