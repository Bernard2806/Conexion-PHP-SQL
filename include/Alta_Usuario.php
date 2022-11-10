<?php
include("include/Conexion.php");
$_Nombre=$_POST['Nombre'];
$_Clave=$_POST['Clave'];
$_Cargo=$_POST['Cargo'];

$_Consulta="SELECT COUNT(Nombre) as nuevo from Escuela where Nombre='$_Nombre'";
$_Resultado= mysqli_query($Conexion, $_Consulta);

while($a = mysqli_fetch_assoc($_Resultado)){
    $Existe=$A["Nuevo"];
}
if($Existe == 1){
    header('Location:Agregar_Usuario.php');
    echo "<script languaje='javascrip' type='text/javascrip'>
    window.close();
    </script>";
}
else{
    $Alta="INSERT INTO Escuela VALUES('$_Nombre', '$_Clave', '$_Cargo')";
    $Resultado_Alta=mysqli_query($Conexion,$Alta);
    echo "<script languaje='javascrip' type='text/javascrip'>
    window.close();
    </script>";
    echo "<script languaje='javascrip' type='text/javascrip'>
    window.opener.document.location.reload();
    self.close();
    </script>";
}
?>