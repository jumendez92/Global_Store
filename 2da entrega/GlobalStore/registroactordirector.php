<?php
include("conexion.php");
session_start();

$name=$_POST['name2'];
$lastname=$_POST['lastname'];
$tipo=$_POST['title'];
$f1=rand(750000,780001);
$result0=pg_query($conexion,"select nombre_actor_director_cantante,apellido_actor_director_cantante,tipo_actor_director_cantante,id_actor_director_cantante FROM ACTOR_DIRECTOR_CANTANTE" );
$flag=false;
if (pg_num_rows($result0)<>0){
	while ($row= pg_fetch_row($result0)){
		
		if (strcasecmp($row[0],$name)==0 and strcasecmp($row[1],$lastname)==0 and strcasecmp($row[2],$tipo)==0){
			echo 'error';
			$flag=true;
	         $idactor=$row[3] ;break;}
	}

	if(!$flag){
		$idfk=$_SESSION['fk'];
	$result1=pg_query($conexion,"INSERT INTO ACTOR_DIRECTOR_CANTANTE (id_actor_director_cantante,tipo_actor_director_cantante,nombre_actor_director_cantante,apellido_actor_director_cantante) values ($f1,'$tipo','$name','$lastname')");
	$result2=pg_query($conexion,"INSERT INTO PELICULA_ACTOR_DIRECTOR_CANTANTE (fk_pelicula,fk_actor_director_cantante) values ($idfk,$f1)");
     header('Location: enlaceactor.php');
      if (!$result1){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back());</script>";}
	}
	if($flag){
		$idfk=$_SESSION['fk'];
	$result2=pg_query($conexion,"INSERT INTO PELICULA_ACTOR_DIRECTOR_CANTANTE (fk_pelicula,fk_actor_director_cantante) values ($idfk,$idactor)");
     header('Location: enlaceactor.php');
      if (!$result1){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back());</script>";}
	}
	  
}



?>