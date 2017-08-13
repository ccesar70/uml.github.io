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
	  <center><figure><h2>FORMULARIO DE REGISTRO DE NUEVOS ADMINISTRADORES <br>
	    <img src="img/images.jpg" width="197" height="88" alt=""/> </h2>
	   </center> 
	  </figure>
	</header><nav><ul class="menu">
	  <a href="principal.php"class="menu"><br/>Menu Principal</a><br><br><br><br>
          <a href="usuario.php"class="menu"><br/>Usuario Registrado</a>
        </ul>
</nav>
<section >
<form method="post" enctype="multipart/form-data"class="for" id="form1" action="insertaradmin.php">

  <center> 
  <table width="600" >
  
  <tr>
  <td><strong>Numero de Documento:</strong></td>
  <td><br><input type="text" name="documento"  /><br /><br /></td>
  </tr>

  <tr>
  <td><strong>Nombre Completo</strong></td>
  <td><br><input type="text" name="nombre"  /><br /><br /></td>
  </tr>

  <tr>
  <td><strong>Usuario</strong></td>
  <td><br><input type="text" name="usuario"  /><br /><br /></td>
  </tr>

  <tr>
  <td><strong>Contraseña</strong></td>
  <td><br><input type="password" name="pass"  /><br /><br /></td>
  </tr>
  <td></td>     
     <td><br><br><input align= "center" type="submit" name="envio"/></td>
   </tr>

 </table>
</center> 
</form>

</section>
<center><h3><font color="006680">PROGRAMACION DE SITIOS WEB - CESAR AUGUSTO CONTRERAS.</font></center></h3>

</Div>

</body>

<script src="js/modernizr.js"></script>   
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>   

</html>