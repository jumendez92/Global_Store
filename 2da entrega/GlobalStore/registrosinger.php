<?php
include("conexion.php");
$name=$_POST['name2'];
$lastname=$_POST['lastname'];
$f1=rand(740000,749999);
$result0=pg_query($conexion,"select nombre_actor_director_cantante,apellido_actor_director_cantante,tipo_actor_director_cantante FROM ACTOR_DIRECTOR_CANTANTE" );
$flag=false;
if (pg_num_rows($result0)<>0){
	while ($row= pg_fetch_row($result0)){
		
		if (strcasecmp($row[0],$name)==0 and strcasecmp($row[1],$lastname)==0 and strcasecmp($row[2],'Cantante')==0){
			echo 'error';
			$flag=true;
	         echo"<script type=\"text/javascript\">alert('ERROR THIS PERSON ALREADY EXISTS');window.history.back();</script>"; break;}
	}
	if(!$flag){
	$result1=pg_query($conexion,"INSERT INTO ACTOR_DIRECTOR_CANTANTE (id_actor_director_cantante,tipo_actor_director_cantante,nombre_actor_director_cantante,apellido_actor_director_cantante) values ($f1,'Cantante','$name','$lastname')");
     header('Location: indexadministradorsistema.php');
      if (!$result1){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
	}
	  
}

?>