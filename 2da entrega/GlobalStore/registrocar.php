<?php
$name=$_POST['name'];
$salario=$_POST['salary'];
$f1=rand(600001,700000);
$conexion = pg_connect ("user=postgres password=12345 port=5432 dbname=postgres host=localhost")or die("problemas al conectar el host");

$result0=pg_query($conexion,"select nombre_cargo from CARGO where nombre_cargo='$name'");
if (pg_num_rows($result0)<>0){
	echo 'entro';
	echo "<script type=\"text/javascript\">alert('ERROR CARGO REGISTRADO');window.history.back());</script>";}
else {
	echo 'entro2';
    $result2=pg_query($conexion," INSERT INTO CARGO (id_cargo,nombre_cargo,salario_cargo)values ($f1,'$name',$salario)");
	if (!$result2){
			echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
}
?>