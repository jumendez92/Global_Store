<?php
session_start();
include ("conexion.php");

$name=$_POST['namecompany'];
$correo=$_POST['email'];
$url=$_POST['url'];
$tipo=$_POST['title'];
$urb=$_POST['address_1'];
$apt=$_POST['address_2'];
$calle=$_POST['address_3'];
$zip=$_POST['zip'];
$estado=$_POST['state'];
$ciudad=$_POST['city'];
$pais=$_POST['pais2'];

$id=$_SESSION['id'];
$idl=$_SESSION['idl'];

$result0=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$idl");
$row0=pg_fetch_row($result0);

$result01=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$row0[0]");
$row01=pg_fetch_row($result01);

$result02=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$row01[0]");
$row02=pg_fetch_row($result02);

$result03=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$row02[0]");
$row03=pg_fetch_row($result03);

$result04=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$row03[0]");
$row04=pg_fetch_row($result04);

$result05=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$row04[0]");
$row05=pg_fetch_row($result05);

//$result2=pg_query($conexion,"update CORREO set cuenta_correo='$correo' where FK_PERSONA=$id");

$result3=pg_query($conexion,"update EMPRESA_PERSONA set nombre_empresa_persona='$name', sitio_web_empresa_persona='$url',tipo_empresa_persona='$tipo' where id_empresa_persona=$id");

$result4=pg_query($conexion,"update LUGAR set nombre_lugar='$apt' where id_lugar=$idl");

$result5=pg_query($conexion,"update LUGAR set nombre_lugar='$zip' where id_lugar=$row0[0]");

$result6=pg_query($conexion,"update LUGAR set nombre_lugar='$calle' where id_lugar=$row01[0]");

$result7=pg_query($conexion,"update LUGAR set nombre_lugar='$urb' where id_lugar=$row02[0]");

$result8=pg_query($conexion,"update LUGAR set nombre_lugar='$ciudad' where id_lugar=$row03[0]");

$result9=pg_query($conexion,"update LUGAR set nombre_lugar='$estado' where id_lugar=$row04[0]");

$result10=pg_query($conexion,"update LUGAR set nombre_lugar='$pais' where id_lugar=$row05[0]");

if ((!$result0) || (!$result01) || (!$result02) || (!$result03) || (!$result04) || (!$result05) || (!$result3) || (!$result4) || (!$result5) || (!$result6) || (!$result7) || (!$result8) || (!$result9) || (!$result10)){ echo"<script type=\"text/javascript\">alert('ERROR AL ACTUALIZAR LOS DATOS');window.history.back());</script>"; 
}
else
 header('Location: indexadministradorsistema.php');

?>
