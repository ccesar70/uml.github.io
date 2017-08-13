<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
// variables
$dbhost = 'localhost';
$dbname = 'salainformatica';
$dbuser = 'root';
$dbpass = '12345678';
 

$dump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup= $dbname;
$backupruta= '"C:\AppServ\www\backup\backupsalainformatica.sql"';
system ("$dump --no-defaults -u $dbuser -p$dbpass $dbname > $backupruta");

echo "<center>SE HA CREADO CORRECTAMENTE LA COPIA DE SEGURIDAD</center>";
?>
<a href="menuadmin.php" class="menu"><br/>Ir al Menu de Administrador</a>;<br><br><br><br>
<a href="principal.php" class="menu"><br/>Ir a la Pagina Principal</a>;
</body>
</html>