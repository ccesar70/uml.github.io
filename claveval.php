<head>
  <title>Login1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div style= "background : #b3b300"; class="jumbotron text-center">
  <h1>Programa Base de Datos</h1>
  <p>Programa que controla una base de datos en MYSQL</p>
</div>

<?php

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$user1 = Admin;
$pass1 = 12345;

if ($user == $user1)
{
  if ($pass == $pass1)
  {
    //header ('location: /admin.php');
    echo md5($pass1);
  }
  else 
  {
    echo "Contraseña Incorrectos".$pass1."<br>";

  }
}
  else
  {
    echo "Usuario Incorrecto".$user."<br>";

  }
  
  ?>
<a href= "inicio.html">Inicio</a></p>
  
  </div>
  <div align= "center" style= "background : #b8b894"; class="panel-footer">Jose Fernando Sanchez Gomez UNAD</div>
</div>

</body>
</html>