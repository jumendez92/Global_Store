<?php
session_start();
include ('conexion.php');
$name=$_SESSION['contentname'];
$comen=$_POST['textarea'];
$cali=$_POST['title'];
$username=$_SESSION['username2'];
$date=date("Y-m-d");
$time=date("h:i:s");
$f1=rand(899999,10000000);
$f2=rand(799999,899998);
$result=pg_query($conexion,"select id_contenido from CONTENIDO where nombre_contenido='$name'");
$row=pg_fetch_row($result);
$result1=pg_query($conexion,"select id_persona from PERSONA where usuario_persona='$username'");
$row1=pg_fetch_row($result1);

if (pg_num_rows($result1)<>0){

$result4=pg_query($conexion,"select * from COMENTARIO where fk_cliente=$row1[0]");
$result5=pg_query($conexion,"select * from CALIFICACION where fk_cliente=$row1[0]");
if((pg_num_rows($result4)<>0)||pg_num_rows($result5)<>0){
	echo "<script type=\"text/javascript\"> alert('ERROR YA COMENTO ESTA APLICACION O CALIFICO ESTA APLICACION');window.history.back();</script>";}
	

}

if(empty($comen)){
	if(empty($cali)){
		echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back());</script>";}
}
if(!(empty($comen))){
	if(empty($cali)){
		$result2=pg_query($conexion,"INSERT INTO COMENTARIO (id_comentario,hora_comentario,fecha_comentario,contenido_comentario,FK_CLIENTE,FK_CONTENIDO) values ($f1,'$time','$date','$comen',$row1[0],$row[0]) ");
		  if ((!$result2)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
		  
		  }
}
if((empty($comen))){
	if(!(empty($cali))){
		$result2=pg_query($conexion,"INSERT INTO CALIFICACION (id_calificacion,hora_calificacion,fecha_calificacion,valor_calificacion,FK_CLIENTE,FK_CONTENIDO) values ($f2,'$time','$date','$cali',$row1[0],$row[0]) ");
		 if ((!$result2)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
		 header ('Location: indexuser.php');
		 }
}
if(!(empty($comen))){
	if(!(empty($cali))){
		$result3=pg_query($conexion,"INSERT INTO CALIFICACION (id_calificacion,hora_calificacion,fecha_calificacion,valor_calificacion,FK_CLIENTE,FK_CONTENIDO) values ($f2,'$time','$date','$cali',$row1[0],$row[0]) ");
		$result2=pg_query($conexion,"INSERT INTO COMENTARIO (id_comentario,hora_comentario,fecha_comentario,contenido_comentario,FK_CLIENTE,FK_CONTENIDO) values ($f1,'$time','$date','$comen',$row1[0],$row[0]) ");
		 if ((!$result2) || (!$result3) ){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
		 header ('Location: indexuser.php');
		 }
}
?>