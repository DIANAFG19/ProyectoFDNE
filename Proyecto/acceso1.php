<?php
$usuario=$_POST['usuario'];
$pass=$_POST['psw'];
$db_host="localhost";
$db_nombre="tienda";
$db_usuario="root";
$db_pass="";
$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
if(mysqli_connect_errno($db_nombre)){
	echo mysqli_error($conexion);
}
else{
		$consulta="SELECT ID_PERSONA FROM persona WHERE USUARIO LIKE '$usuario' AND PASSWORD LIKE '$pass'" ;
		$resultado=mysqli_num_rows(mysqli_query($conexion,$consulta));
		if($resultado==0){
			echo "No existe el usuario o no coincide con la contraseña ingresada";
			include("acceso.php");
		}
		else{
			if($usuario=='Administrador' && $pass=='password'){
				echo "Bienvenido Administrador";
				include("menu.html");
			}
			else{
				echo "Bienvenido Cliente";
				$respuesta=mysqli_query($conexion,$consulta);
				while($rows=mysqli_fetch_array($respuesta)){
					echo "<br>ID PERSONA: ".$rows[0]."<br>";
					include("compras.html");
				}
			}
		}
}
mysqli_close($conexion);
?>