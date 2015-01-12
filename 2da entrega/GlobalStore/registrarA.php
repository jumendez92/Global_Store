
<?php
session_start();

$name2=$_POST['applicationname'];  
$company=$_POST['company']; 
$descripcion=$_POST['textarea'];
$size=$_POST['size']; 
$version=$_POST['current_version'];
$minimo=$_POST['version'];
$content=$_POST['title'];
$costo=$_POST['cost'];
$url=$_POST['url']; 
$date=$_POST['date'];
$f1=rand(10000,20000);
$f2=rand(200001,300000);
$f3=rand(300001,400000);
$f4=rand(400001,500000);

function esImagen($name)
    {
                $imageSizeArray = getimagesize($name);
                $imageTypeArray = $imageSizeArray[2];
                return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }

include ("conexion.php");

$result0=pg_query($conexion,"select nombre_contenido,tipo_contenido from CONTENIDO where nombre_contenido='$name2'");
if (esImagen($_FILES['imagen']['tmp_name'])){
	$rutaservidor="imagesA";
	$rutatmp=$_FILES['imagen']['tmp_name'];
    $nombreimagen=$_FILES['imagen']['name'];
    $rutadestino=$rutaservidor."/".$nombreimagen;
    move_uploaded_file($rutatmp,$rutadestino);
	echo pg_num_rows($result0);
	
if (pg_num_rows($result0)<>0){
	while($row2 = pg_fetch_row($result0)){
		if ((strcasecmp($row2[0],$name)==0)and ((strcasecmp($row2[1],'Aplicacion')==0))){
	     echo  "<script type=\"text/javascript\">alert('The Application already exists!');window.history.back();</script>";         break;}
	}
}
else{
	$_SESSION['fk']=$f1;
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name',$costo,0,0,'$date','Aplicacion',null)");
	 $result3=pg_query($conexion,"INSERT INTO APLICACION (descripcion_aplicacion,tamaño_aplicacion,version_actual_aplicacion,version_minima_SO_aplicacion,tipo_calificacion_aplicacion,FK_EMPRESA_PERSONA,FK_CONTENIDO) values	('$descripcion','$size','$version','$minimo','$content','$company',$f1)");  
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	 $result4=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f3,'Video','$url',$f1");
	 if ((!$result2) || (!$result3) || (!$result4) ||(!$result5)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 header('Location: enlaceimagen.php');
	 break;
	  



}
}

?>
