<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba SQL</title>
    <?php
    include('include/Conexion.php');
    $Consulta="SELECT COUNT(DISTINCT Nombre)as Usuario from escuela";
    $Consulta2= "SELECT * FROM escuela";
    $Resultado=mysqli_query($Conexion,$Consulta);
    while($A = mysqli_fetch_assoc($Resultado)){
        $CantidadUsuario=$A["Usuario"];
    }
    $Resultado2=mysqli_query($Conexion, $Consulta2);
    mysqli_close($Conexion)
    ?>
</head>
<body>
    <h1 align = "center">Base de datos</h1>
    <button><a href="Agregar_Usuario.php">Agregar Usuario</a></button>
    <table>
        <thead>
            <tr>
                <td>Nombre</td> <td>Clave</td> <td>Cargo</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($D=mysqli_fetch_array($Resultado2)){
                echo "<tr>";
                echo "<td>".$D["Nombre"]."</td>";
                echo "<td>".$D["Clave"]."</td>";
                echo "<td>".$D["Cargo"]."</td>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>