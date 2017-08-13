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

mysql_query("INSERT INTO registro (documento,nombre,usuario,pass)
VALUES ('$_POST[documento]','$_POST[nombre]','$_POST[usuario]',md5('$_POST[pass]'))", $conect);
echo "<center>INFORMACION REGISTRADA CORRECTAMENTE</center>";
	
}
else
{
	echo"error de almacenamiento";
	mysql_close($link);
}
?>
<center><a href="usuario.php" class="menu"><br/>Click aqui para ir a usuarios Registrados</a></center>;
<a href="principal.php" class="menu"><br/>Pagina Principal</a>;
</body>
</html>