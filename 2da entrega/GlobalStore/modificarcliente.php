
<?php
session_start();
include ("conexion.php");

$name=$_POST['first_name']; 
$middlename=$_POST['middle_name'];
$lastname=$_POST['last_name'];
$secondlastname=$_POST['second_last_name']; 
$date=$_POST['date']; 
$password=$_POST['password'];
$password2=$_POST['password2'];
$pais=$_POST['pais2'];
$estado=$_POST['state'];
$ciudad=$_POST['city'];
$zip=$_POST['zip'];
$address1=$_POST['address_1'];//urb
$address2=$_POST['address_2'];//calle
$address3=$_POST['address_3'];//apt
$title=$_POST['title'];
$correo=$_POST['email'];
$telefono=$_POST['phone_1'];
$fecha=date("Y-m-d");

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
/*
$result06=pg_query($conexion,"select FK_LUGAR from LUGAR where id_lugar=$row05[0]");
$row06=pg_fetch_row($result06);*/

include ("conexion.php");

if (strcasecmp ($password,$password2)==0){
	
$result=pg_query($conexion,"update PERSONA set primer_nombre_persona='$name',segundo_nombre_persona='$middlename', primer_apellido_persona='$lastname',segundo_apellido_persona='$secondlastname',fecha_nacimiento_persona='$date',clave_persona='$password' where id_persona=$id");

$result1=pg_query($conexion,"update CLIENTE set estado_civil_cliente='$title' where FK_PERSONA=$id");

$result2=pg_query($conexion,"update CORREO set cuenta_correo='$correo' where FK_PERSONA=$id");

$result3=pg_query($conexion,"update TELEFONO set numero_telefono='$telefono' where FK_PERSONA=$id");

$result4=pg_query($conexion,"update LUGAR set nombre_lugar='$address3' where id_lugar=$idl");

$result5=pg_query($conexion,"update LUGAR set nombre_lugar='$zip' where id_lugar=$row0[0]");

$result6=pg_query($conexion,"update LUGAR set nombre_lugar='$address2' where id_lugar=$row01[0]");

$result7=pg_query($conexion,"update LUGAR set nombre_lugar='$address1' where id_lugar=$row02[0]");

$result8=pg_query($conexion,"update LUGAR set nombre_lugar='$ciudad' where id_lugar=$row03[0]");

$result9=pg_query($conexion,"update LUGAR set nombre_lugar='$estado' where id_lugar=$row04[0]");

$result10=pg_query($conexion,"update LUGAR set nombre_lugar='$pais' where id_lugar=$row05[0]");

if ((!$result) || (!$result1) || (!$result2) || (!$result3) || (!$result4) || (!$result5) || (!$result6) || (!$result7) || (!$result8) || (!$result9) || (!$result10)){ echo"<script type=\"text/javascript\">alert('ERROR AL ACTUALIZAR LOS DATOS');window.history.back());</script>"; 
}
else
 header('Location: indexuser.php');
}

else
 echo "<script type=\"text/javascript\">alert('The passwords dont match');window.history.back();</script>"; 


?>
