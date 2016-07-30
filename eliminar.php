<?php

include "conexion.php";
$id=$_POST['id'];

$
$sql="SELECT *FROM datos where IdServicios=$id";
$resp=mysqli_query($conexion,$sql);

if($resp){
echo "El registro fue eliminado correctamente";
}else{
echo "Ocurrio un error al eliminar el registro:".mysqli_error();
}
mysqli_close($conexion);
?>
