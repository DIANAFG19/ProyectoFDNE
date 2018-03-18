<?php
$nombre=$_POST['nombre'];
$appaterno=$_POST['appaterno'];
$apmaterno=$_POST['apmaterno'];
$direccion=$_POST['direccion'];
$usuario=$_POST['usuario'];
$pass=$_POST['psw'];
$rpass=$_POST['rpsw'];

if($pass==$rpass){
	$db_host="localhost";
	$db_nombre="tienda";
	$db_usuario="root";
	$db_pass="";
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	if(mysqli_connect_errno($db_nombre)){
		echo mysqli_error($conexion);
	}
	else{
		echo "DATOS REGISTRADOS";
		$registrar="INSERT INTO persona VALUES('','$nombre','$appaterno','$apmaterno','$direccion','$usuario','$pass')";
		mysqli_query($conexion,$registrar);
		include("acceso.php");
	}
	mysqli_close($conexion);
}
else{
	echo "Las contraseñas no coinciden, intentelo de nuevo";
	include("registro.php");
}
?>