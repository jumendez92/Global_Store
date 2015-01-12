<?php
session_start();
$url=$_POST['url']; 
$f2=rand(80000,90000);
$f3=rand(110000,120001);
function esImagen($name2)
    {
                $imageSizeArray = getimagesize($name2);
                $imageTypeArray = $imageSizeArray[2];
                return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }

	$conexion = pg_connect ("user=postgres password=12345 port=5432 dbname=postgres host=localhost")or die("problemas al conectar el host");
	$fk=$_SESSION['fk'];
	$result0=pg_query($conexion,"select tipo_contenido from CONTENIDO where id_contenido=$fk");
if (pg_num_rows($result0)<> 0){
	while($row=pg_fetch_row($result0)){
		if(strcasecmp($row[0],'Aplicacion')==0){
		    $rutaservidor="imagesA";
			break;}
		if(strcasecmp($row[0],'Pelicula')==0){
			$rutaservidor="imagesP";
			break;}
	}
}
$result1=pg_query($conexion,"select nombre_contenido,id_contenido from CONTENIDO where id_contenido=$fk");
if ($_FILES['imagen']['name']!=NULL){
if (esImagen($_FILES['imagen']['tmp_name'])){
	$rutatmp=$_FILES['imagen']['tmp_name'];
    $nombreimagen=$_FILES['imagen']['name'];
    $rutadestino=$rutaservidor."/".$nombreimagen;
    move_uploaded_file($rutatmp,$rutadestino);
	if (pg_num_rows($result1)<> 0){
	while($row=pg_fetch_row($result1)){
		$result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN   (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$row[1])");
		if (!$result5){
			echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}

	 break;}	}
	else echo"<script type=\"text/javascript\">alert('ERROR AL SELECCIONAR LOS DATOS');window.history.back();</script>";
}
}
if ($url!= ""){
if (pg_num_rows($result1)<> 0){
	while($row=pg_fetch_row($result1)){
 $result4=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f3,'Video','$url',$row[1])");
	  if ((!$result4)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	  break;
		}
	}
	header ('Location: enlaceimagen.php');
}

?>