<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include("conector.php");
if (!empty($_POST['envio']))
{
$conect=mysql_connect($host,$user,$pw) or die ("no hay conexion con servidor");
mysql_select_db($db,$conect) or die ("no hay conexion con base de datos");
$imagen=$_FILES["Imagen"]["name"];
$ruta=$_FILES["Imagen"]["tmp_name"];
$dest="imagenes/" .$imagen;
copy ($ruta, $dest);

mysql_query("INSERT INTO solicitud (Serial,Imagen,Nombre_Equipo,Marca_Equipo,Numero_Inventario,Ubicacion_Equipo,Falla_Equipo,Fecha_Solicitud,Hora_Solicitud,Estado)
VALUES ('$_POST[Serial]','$dest','$_POST[Nombre_Equipo]','$_POST[Marca_Equipo]','$_POST[Numero_Inventario]','$_POST[Ubicacion_Equipo]','$_POST[Falla_Equipo]','$_POST[Fecha_Solicitud]','$_POST[Hora_Solicitud]','$_POST[Estado]')", $conect);
echo "<center>INFORMACION REGISTRADA CORRECTAMENTE</center>";
	
}
else
{
	echo"error de almacenamiento";
	mysql_close($link);
}
?>
<a href="registrosolicitud.php" class="menu"><br/>Click aqui para registra una Nueva Solicitud</a>;<br><br><br><br>
<a href="principal.php" class="menu"><br/>Ir a la Pagina Principal</a>;
</body>
</html>