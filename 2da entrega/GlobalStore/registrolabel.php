<?php
include("conexion.php");
$name=$_POST['name'];
$tipo=$_POST['title'];
$f1=rand(730000,739999);
$result0=pg_query($conexion,"select nombre_disquera_editorial,tipo_disquera_editorial FROM DISQUERA_EDITORIAL" );
$flag=false;
if (pg_num_rows($result0)<>0){
	while ($row= pg_fetch_row($result0)){
		
		if (strcasecmp($row[0],$name)==0 and strcasecmp($row[1],$tipo)==0){
			echo 'error';
			$flag=true;
	         echo"<script type=\"text/javascript\">alert('ERROR THIS PERSON ALREADY EXISTS');window.history.back();</script>"; break;}
	}
	if(!$flag){
	$result1=pg_query($conexion,"INSERT INTO DISQUERA_EDITORIAL (id_disquera_editorial,tipo_disquera_editorial,nombre_disquera_editorial) values ($f1,'$tipo','$name')");
     header('Location: indexadministradorsistema.php');
      if (!$result1){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
	}
	  
}

?>