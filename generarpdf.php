<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

$host="localhost";
$user="root";
$pw="12345678";
$db="salainformatica";

include ('C:\AppServ\www\fpdf\fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(45,10,'',0);
$pdf->Write (10,'Informe Registro de Equipos Biomedicos en Fase de Mantenimiento');
$pdf->Ln(10);
$pdf->Cell(81,10,'',0);
$pdf->Write (10,'Clinica Reina Inmaculada');
$pdf->Ln(20);

$pdf->Cell(73,10,'',0);
$pdf->Cell(100,10,'Detalle de los Equipos Reportados',0);
$pdf->Ln(10);
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(20,10,'Serial');
$pdf->Cell(31,10,'Nombre Equipo');
$pdf->Cell(25,10,'Marca Equipo');
$pdf->Cell(25,10,'Ubicacion Equipo');
$pdf->Cell(25,10,'Fecha Solicitud');
$pdf->Cell(25,10,'Hora Solicitud');
$pdf->Cell(25,10,'Fecha Revision');
$pdf->Cell(25,10,'Hora Revision');
$pdf->Ln(10);



$conect=mysql_connect($host,$user,$pw) or die ("no hay conexion con servidor");
mysql_select_db($db,$conect) or die ("no hay conexion con base de datos");

$regis=mysql_query("SELECT * FROM solicitud") or die ("falla al mostrar datos:" .mysql_error());

while($regi=mysql_fetch_array($regis)){

$pdf->Line(10,52,207,52);
$pdf->Line(10,57,207,57);
$pdf->Line(10,52,10,360);
$pdf->Line(207,52,207,360);
$pdf->Line(30,52,30,360);
$pdf->Line(61,52,61,360);
$pdf->Line(86,52,86,360);
$pdf->Line(111,52,111,360);
$pdf->Line(135,52,135,360);
$pdf->Line(160,52,160,360);
$pdf->Line(185,52,185,360);
$pdf->Cell(20,10,$regi['Serial'],0);
$pdf->Cell(31,10,$regi['Nombre_Equipo'],0);
$pdf->Cell(25,10,$regi['Marca_Equipo'],0);
$pdf->Cell(25,10,$regi['Ubicacion_Equipo'],0);
$pdf->Cell(25,10,$regi['Fecha_Solicitud'],0);
$pdf->Cell(25,10,$regi['Hora_Solicitud'],0);
$pdf->Cell(25,10,$regi['Fecha_Inspeccion'],0);
$pdf->Cell(25,10,$regi['Hora_Inspeccion'],0);
$pdf->Write (10,'-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------');

$pdf->Ln(5);

}
$pdf->output('informepdf');
?>
<br><br><br><center>INFORME GENERADO CON EXITO</center><br><br><br>
<center><a href="menuadmin.php" class="menu"><br/>Click aqui para volver al Menu Administrador</a></center>;
<a href="principal.php" class="menu"><br/>Pagina Principal</a>;
</body>
</html>
