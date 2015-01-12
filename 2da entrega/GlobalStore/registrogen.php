<?php
$name=$_POST['name'];
$f1=rand(400000,500001);
$conexion = pg_connect ("user=postgres password=12345 port=5432 dbname=postgres host=localhost")or die("problemas al conectar el host");

$result0=pg_query($conexion,"select nombre_genero_categoria from GENERO_CATEGORIA where nombre_genero_categoria='$name'");
if (pg_num_rows($result0)<>0){
    echo 'entro';
	echo "<script type=\"text/javascript\">alert('ERROR GENERO REGISTRADO');window.history.back();</script>";}
else {
	echo 'entro2';
    $result2=pg_query($conexion," INSERT INTO GENERO_CATEGORIA (id_genero_categoria,tipo_genero_categoria,nombre_genero_categoria) values ($f1,'Genero','$name')");
	if (!$result2){
			echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
}

?>