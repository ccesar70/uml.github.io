<!DOCTYPE html>


<html lang="es" class"no-js">



<head>
<meta charset="UTF-8">
	<meta content="CESAR AUGUSTO CONTRERAS MONTOYA" name="author"/>
    <meta content="Registro de equipos de computo" name="description" />
    <meta content="Datos de Registro" name="keywords" />
	<title>UNAD</title>
    
</head>


<body>	

<Div id="contenidos">
	<header>
	  <center><figure><h2>CONSULTA DE EQUIPO POR NUMERO SERIAL<br>
	    <img src="img/images.jpg" width="197" height="88" alt=""/> </h2>
	   </center> 
	  </figure>
	</header><nav><ul class="menu">
	  <a href="usuario.php"class="menu"><br/>VOLVER A USUARIOS REGISTRADOS</a><br><br><br>
          <a href="principal.php"class="menu"><br/>PAGINA PRINCIPAL</a>
        </ul>
</nav>
<?php

include("conector.php");

$conect=mysql_connect($host,$user,$pw) or die ("no hay conexion con servidor");
mysql_select_db($db,$conect) or die ("no hay conexion con base de datos");

$pass1 = md5($_POST[pass]);


$regis=mysql_query("SELECT * FROM registro WHERE usuario= '$_POST[usuario]' AND pass= '$pass1'") or die ("falla al mostrar datos:" .mysql_error());

while($regi=mysql_fetch_array($regis)) {

header ('location: /menuadmin.php');

}
echo "<center><H2>Usuario/Contraseña incorrecto o No se Encuentra Registrado</center></H2>";
?>

</Div>

</body>

<script src="js/modernizr.js"></script>   
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>   

</html>