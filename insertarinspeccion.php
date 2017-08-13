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
	  <center><figure><h2>REGISTRO DE SOLICITUD DE INSPECCION<br><br>
	    <img src="img/images.jpg" width="197" height="88" alt=""/> </h2>
	   </center> 
	  </figure>
	</header><nav><ul class="menu">
	  <a href="registroinspeccion.php"class="menu"><br/>REGISTRAR OTRA INSPECCION</a><br><br><br>
          <a href="principal.php"class="menu"><br/>PAGINA PRINCIPAL</a>
        </ul>
</nav>
<?php

include("conector.php");

$conect=mysql_connect($host,$user,$pw) or die ("no hay conexion con servidor");
mysql_select_db($db,$conect) or die ("no hay conexion con base de datos");

$regis=mysql_query("SELECT Serial FROM solicitud WHERE Serial= '$_POST[Serial]'",$conect) ;

if($regi=mysql_fetch_array($regis)) {

$regis=mysql_query("UPDATE solicitud SET Fecha_Inspeccion = '$_POST[Fecha_Inspeccion]' WHERE Serial= '$_POST[Serial]'") or die ("falla al mostrar datos:" .mysql_error());
$regis=mysql_query("UPDATE solicitud SET Hora_Inspeccion = '$_POST[Hora_Inspeccion]' WHERE Serial= '$_POST[Serial]'") or die ("falla al mostrar datos:" .mysql_error());

echo "<center><strong>SE REGISTRO LA FECHA Y HORA DE LA INSPECCION SATISFACTORIAMENTE</center><br>";

}
else
{
echo "<center><strong>EL EQUIPO AL CUAL INTENTA ASIGNAR FECHA Y HORA DE REVISION, NO EXISTE</center><br>";

}
?>
</Div>

</body>

<script src="js/modernizr.js"></script>   
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>   

</html>