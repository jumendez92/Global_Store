<?php
include("conexion.php");
session_start();
$name=$_POST['name2'];
$reseña=$_POST['textarea'];
$f1=rand(750000,780001);
$idlibro=$_SESSION['fk'];
$result0=pg_query($conexion,"select nombre_autor,id_autor FROM AUTOR" );
$flag=false;
if (pg_num_rows($result0)<>0){
	while ($row= pg_fetch_row($result0)){
		if (strcasecmp($row[0],$name)==0){
			echo 'entro1';
			$flag=true;
			$result2=pg_query($conexion,"INSERT INTO AUTOR_LIBRO(fk_autor,fk_libro)values ($row[1],$idlibro)");
     header('Location: indexadministradorsistema.php');
	          break;}
	}
}
	if(!$flag){
		echo 'entro';
	$result1=pg_query($conexion,"INSERT INTO AUTOR (id_autor,nombre_autor,reseña_autor) values ($f1,'$name','$reseña')");
	$result2=pg_query($conexion,"INSERT INTO AUTOR_LIBRO(fk_autor,fk_libro)values ($f1,$idlibro)");
     header('Location: indexadministradorsistema.php');
      if ((!$result1)||(!$result2)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}




?>