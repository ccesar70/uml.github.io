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
	  <center><figure><h2>MODULO PAR ASIGNAR FECHAS DE REVISION<br>
	    <img src="img/images.jpg" width="197" height="88" alt=""/> </h2>
	   </center> 
	  </figure>
	</header><nav><ul class="menu">
	  <a href="principal.php"class="menu"><br/>PAGINA PRINCIPAL</a>
        </ul>
</nav>


<section class="inicio">
	<article>
<form method="post"  id="form2" action="insertarinspeccion.php">
<center>
  <table width="320" border="4" cellspacing="3" cellpadding="5">
    <tr>
      <th scope="col">Digite el Serial del Equipo a Revisar<br>
      <input type="text" name="Serial"</th>
      <th scope="col"><input class="in" type="submit" value="Asignar"></th>
      <th scope="col"><img src="img/email.jpg" width="36" height="37" alt=""/></th>
    </tr>

    <tr>
    <td><strong>Fecha Inspeccion</strong></td>
    <td><br><input type="date" name="Fecha_Inspeccion"  /><br /><br /></td>
    </tr>

    <tr>
    <td><strong>Hora Inspeccion</strong></td>
    <td><br><input type="time" name="Hora_Inspeccion"  /><br /><br /></td>
    </tr>
  </table>
</center>
</form> 
 </article>
<?php

include("conector.php");

$conect=mysql_connect($host,$user,$pw) or die ("no hay conexion con servidor");
mysql_select_db($db,$conect) or die ("no hay conexion con base de datos");

$regis=mysql_query("SELECT * FROM solicitud") or die ("falla al mostrar datos:" .mysql_error());
echo "<center><strong><u><h3><font color= blue>DETALLE DE TODOS LOS REPORTES DE SOLICITUDES REALIZADAS Y POR ASIGNAR</font></h3></u></strong></center><br>";
while($regi=mysql_fetch_array($regis)) {
echo '<img src="' .$regi["Imagen"]. '"width="70" height="70<br>">  ';
echo "<strong>Serie del Equipo:</strong>" .$regi['Serial']." / ";
echo "<strong>Nombre Equipo:</strong>" .$regi['Nombre_Equipo']. " / ";
echo "<strong>Marca Equipo:</strong>" .$regi['Marca_Equipo']. " / ";
echo "<strong>Numero Inventario:</strong>" .$regi['Numero_Inventario']. " / ";
echo "<strong>Ubicacion Equipo:</strong>" .$regi['Ubicacion_Equipo']. "<br>";
echo "<strong>Falla Equipo:</strong>" .$regi['Falla_Equipo']. " / ";
echo "<strong>Fecha Solicitud:</strong>" .$regi['Fecha_Solicitud']. " / ";
echo "<strong>Hora Solicitud:</strong>" .$regi['Hora_Solicitud']. " / ";
echo "<strong>Estado:</strong>" .$regi['Estado']. " / ";
echo "<strong>Fecha Inspeccion:</strong>" .$regi['Fecha_Inspeccion']." / ";
echo "<strong>Hora_Inspeccion:</strong>" .$regi['Hora_Inspeccion']. "<br>";
echo "<strong>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</strong><br>";
}
?>
  </section>
    

<center><h3><font color="006680">PROGRAMACION DE SITIOS WEB - CESAR AUGUSTO CONTRERAS.</font></center></h3>
</Div>
</body>


<script src="js/modernizr.js"></script>   
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>   





</html>