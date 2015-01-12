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
$titler=$_POST['title'];
$titlen=$_POST['title_1'];
$titleb=$_POST['title_2'];
$correo=$_POST['email'];
$telefono=$_POST['phone_1'];
$cargo=$_POST['cargo'];
$fecha=date("Y-m-d");

$id=$_SESSION['id'];
$rol=$_SESSION['idr'];

$result0=pg_query($conexion,"select id_rol from ROL where nombre_rol='$titler'");
$rowr=pg_fetch_row($result0);

if (strcasecmp ($password,$password2)==0){

$result=pg_query($conexion,"update PERSONA set primer_nombre_persona='$name',segundo_nombre_persona='$middlename', primer_apellido_persona='$lastname',segundo_apellido_persona='$secondlastname',fecha_nacimiento_persona='$date',clave_persona='$password' where id_persona=$id");

$result1=pg_query($conexion,"update EMPLEADO set nivel_educativo_empleado='$titlen',grupo_sanguineo_empleado='$titleb', FK_ROL=$rowr[0] where FK_PERSONA=$id");

$result2=pg_query($conexion,"update CORREO set cuenta_correo='$correo' where FK_PERSONA=$id");

$result3=pg_query($conexion,"update TELEFONO set numero_telefono='$telefono' where FK_PERSONA=$id");

$result4=pg_query($conexion,"update EMPLEADO_CARGO set FK_EMPLEADO=$id,FK_CARGO='' where ");

if ((!$result) || (!$result1) || (!$result2) || (!$result3)){ echo"<script type=\"text/javascript\">alert('ERROR AL ACTUALIZAR LOS DATOS');window.history.back());</script>"; 
}
else
 header('Location: indexadministradorsistema.php');

}
else
 echo "<script type=\"text/javascript\">alert('The passwords dont match');window.history.back();</script>"; 

?>
