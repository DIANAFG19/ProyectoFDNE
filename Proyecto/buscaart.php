<!doctype html>
<html>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<head>
<meta charset="utf-8">
<title>DEPORTES</title>
<style type="text/css">
body,td,th {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-style: normal;
	font-weight: normal;
	font-size: 24px;
	color: #F9F7F7;
}
body {
	background-color: #B51E1E;
	background-image: url(imagenes/estadio.jpg);
	background-repeat: repeat;
	margin-left: 200px;
	margin-top: 50px;
	margin-right: 200px;
	margin-bottom: 50px;
}
a:link {
	color: #D0E916;
}
a:hover {
	color: #F7630C;
}
a:visited {
	color: #09E000;
}
a:active {
	color: #F3039F;
}
a {
	font-size: 24px;
}
</style>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>

<body bgcolor="#000000" onLoad="MM_preloadImages('banner2.png')">
<table width="1000" height="521" border="10">
  <tbody>
    <tr>
      <td width="939" height="229" align="center" valign="top" bgcolor="#B51E1E"><h2>ARTICULO</h2>
      <p><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','imagenes/banner2.png',1)"><img src="imagenes/banner5.png" alt="" width="621" height="193" id="Image2"></a></p></td>
    </tr>
    <tr>
      <td width="949" height="201" align="left" valign="top" bgcolor="#4E1919">
        <h6>
          <?php
$id=$_POST['id'];
$db_host="localhost";
$db_nombre="tienda";
$db_usuario="root";
$db_pass="";
$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	if(mysqli_connect_errno($db_nombre)){
		echo mysqli_error($conexion);
	}
	else{
		$busqueda="SELECT * FROM articulo WHERE ID_ARTICULO = '$id'";
		$resultado=mysqli_num_rows(mysqli_query($conexion,$busqueda));
		if($resultado==0){
			echo "No existe la categoria";
		}
		else{
			$consulta=mysqli_query($conexion,$busqueda);
			echo "ARTICULO #".$id;
			while($rows=mysqli_fetch_array($consulta)){ 
				echo "<br>NOMBRE: ".$rows[1]."<br>";
				echo "DISCIPLINA: ".$rows[2]."<br>";
				echo "COSTO: ".$rows[3]."<br>";
				echo "DESCRIPCION: ".$rows[4]."<br>";
				echo $rows[5]."<br>";
			}
		}
	}
	mysqli_close($conexion);
?>
          </h6>
        <h5><a href="index.html">Comprar</a></h5>
      <h5><a href="index.html">Ir a página Principal</a></h5></td>
    </tr>
    <tr>
      <td height="22" align="left" valign="top" bgcolor="#4E1919"><h6>Necesita acceder a su cuenta o registrarse.</h6></td>
    </tr>
  </tbody>
</table>
</body>
</html>