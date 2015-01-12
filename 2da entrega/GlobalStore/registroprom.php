<?php

include("conexion.php");
$name=$_POST['username'];
$fechainicio=$_POST['date'];
$fechafin=$_POST['date2'];
$valor=$_POST['id'];
$descripcion=$_POST['textarea'];
$condicion=$_POST['textarea2'];

$f1=rand(10,30);
$f2=rand(31,50);
$result0=pg_query($conexion,"select nombre_promocion FROM PROMOCION" );
$flag=false;
if (pg_num_rows($result0)<>0){
	while ($row= pg_fetch_row($result0)){
		if (strcasecmp($row[0],$name)==0){
			echo 'error';
			$flag=true;
	         echo"<script type=\"text/javascript\">alert('ERROR PROMOTION EXISTS');window.history.back();</script>"; break;}
	}
	if(!$flag){
	$result1=pg_query($conexion,"INSERT INTO PROMOCION (id_promocion,nombre_promocion,status_promocion,valor_promocion,descripcion_promocion,fecha_inicio_promocion,fecha_culminacion_promocion) values ($f1,'$name',false,$valor,'$descripcion','$fechainicio','$fechafin')");
	$result2=pg_query($conexion,"INSERT INTO CONDICION (id_condicion,descripcion_condicion,FK_PROMOCION) values ($f2,'$condicion',$f1)");
      if ((!$result1)||(!$result2)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}
}



?>