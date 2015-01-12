
<?php
session_start();

$name2=$_POST['moviename'];  
$date=$_POST['date']; 
$descripcion=$_POST['textarea'];
$audio=$_POST['audio']; 
$subtitulo=$_POST['subtitulo'];
$costo=$_POST['cost'];
$categoria=$_POST['category'];
$url=$_POST['url']; 
$date=$_POST['date'];
$duracion=$_POST['duracion'];
$f1=rand(20000,30000);
$f2=rand(600000,700000);
$f3=rand(700001,800000);
$f4=rand(800001,900000);
$f5=rand(900000,950000);
$flag=true;
$flag1=true;
function esImagen($name)
    {
                $imageSizeArray = getimagesize($name);
                $imageTypeArray = $imageSizeArray[2];
                return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }

include ("conexion.php");

$result0=pg_query($conexion,"select nombre_contenido,tipo_contenido from CONTENIDO where nombre_contenido='$name2'");
$result6=pg_query($conexion,"select lenguaje_idioma,id_idioma from IDIOMA");
$result7=pg_query($conexion,"select nombre_genero_categoria from GENERO_CATEGORIA where tipo_genero_categoria='Categoria'");

if (esImagen($_FILES['imagen']['tmp_name'])){
	$rutaservidor="imagesP";
	$rutatmp=$_FILES['imagen']['tmp_name'];
    $nombreimagen=$_FILES['imagen']['name'];
    $rutadestino=$rutaservidor."/".$nombreimagen;
    move_uploaded_file($rutatmp,$rutadestino);
	
	
if (pg_num_rows($result0)<>0){
	while($row2 = pg_fetch_row($result0)){
		if ((strcasecmp($row2[0],$name2)==0)and(strcasecmp($row2[1],'Pelicula')==0)){
	     echo  "<script type=\"text/javascript\">alert('The MOVIE already exists!');window.history.back();</script>";         break;}
	}
}
	if (pg_num_rows($result6)<>0){
		while($row3 = pg_fetch_row($result6)){
		if ((strcasecmp($row3[0],$audio)==0)){
			  $idaudio=$row3[0]; 
		      $flag=false;break;}
		if(strcasecmp($row3[0],$subtitulo)==0){
			  $idsubtitulo=$row3[0];
			  $flag1=false;
	          break;}
	}
if (pg_num_rows($result7)<>0){
		while($row4= pg_fetch_row($result6)){
		if ((strcasecmp($row4[0],$categoria)==0)){
			  $idcategoria=$row4[0]; 
		      $flag1=false;break;}
		
	}
	
  if((!$flag) and ($flag1)){
	$_SESSION['fk']=$f1;
	//$result8=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f4,'$audio')");
	$result9=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f5,'$subtitulo')");
	
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Pelicula',null)");
	$result3=pg_query($conexion,"INSERT INTO PELICULA (descripcion_pelicula,duracion_pelicula,FK_CONTENIDO) values ('$descripcion','$duracion',$f1)");
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1)");
	 $result4=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f3,'Video','$url',$f1)");
	 $result11=pg_query($conexion,"INSERT INTO PELICULA_IDIOMA (tipo_pelicula_idioma,fk_pelicula,fk_idioma)values ('Subtitulo',$f1,$f5)");
	 echo 'entro2';
	 if ((!$result2) || (!$result3) || (!$result4) ||(!$result5) ||(!$result9)||(!$result11)){  echo 'entro';echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 
	 header ('Location: enlaceactor.php');
	 
	  


  }
  if(($flag) and (!$flag1)){
	  $_SESSION['fk']=$f1;
	 echo 'entro3';
	  	$result8=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f4,'$audio')");
	//$result9=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f5,'$subtitulo'");
	 echo 'entro3';
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Pelicula',null)");
	  echo 'entro3';
	$result3=pg_query($conexion,"INSERT INTO PELICULA (descripcion_pelicula,duracion_pelicula,FK_CONTENIDO) values ('$descripcion','$duracion',$f1)");
	 echo 'entro3';
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1)");
	  echo 'entro3';
	 $result4=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f3,'Video','$url',$f1)");
	  echo 'entro3';
	 $result10=pg_query($conexion,"INSERT INTO PELICULA_IDIOMA (tipo_pelicula_idioma,fk_pelicula,fk_idioma)values ('Audio',$f1,$f4)");
	  echo 'entro3';
	 header ('Location: enlaceactor.php');
	 if ((!$result2) || (!$result3) || (!$result4) ||(!$result5) ||(!$result8)||(!$result10)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 
	
	 }
  if (($flag1) and ($flag)){
	  echo 'entro4';
	  $_SESSION['fk']=$f1;
  	$result8=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f4,'$audio')");
	$result9=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f5,'$subtitulo'");
	
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Pelicula',null)");
	$result3=pg_query($conexion,"INSERT INTO PELICULA (descripcion_pelicula,duracion_pelicula,FK_CONTENIDO) values ('$descripcion','$duracion',$f1)");
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1)");
	 $result4=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f3,'Video','$url',$f1)");
	 $result10=pg_query($conexion,"INSERT INTO PELICULA_IDIOMA (tipo_pelicula_idioma,fk_pelicula,fk_idioma)values ('Audio',$f1,$f4)");
	 $result11=pg_query($conexion,"INSERT INTO PELICULA_IDIOMA (tipo_pelicula_idioma,fk_pelicula,fk_idioma)values ('Subtitulo',$f1,$f5)");
	 if ((!$result2) || (!$result3) || (!$result4) ||(!$result5) ||(!$result8)||(!$result9)||(!$result10)||(!$result11)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 
	 header ('Location: enlaceactor.php');
	 
  }
  if ((!$flag1) and (!$flag)){
	  echo 'entr52';
	  $_SESSION['fk']=$f1;
  	//$result8=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f4,'$audio')");
	//$result9=pg_query($conexion,"INSERT INTO IDIOMA (id_idioma,lenguaje_idioma) values ($f5,'$subtitulo'");
	
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Pelicula',null)");
	$result3=pg_query($conexion,"INSERT INTO PELICULA (descripcion_pelicula,duracion_pelicula,FK_CONTENIDO) values ('$descripcion','$duracion',$f1)");
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	 $result4=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f3,'Video','$url',$f1");
	 $result10=pg_query($conexion,"INSERT INTO PELICULA_IDIOMA (tipo_pelicula_idioma,fk_pelicula,fk_idioma)values ('Audio',$f1,$idaudio)");
	 $result11=pg_query($conexion,"INSERT INTO PELICULA_IDIOMA (tipo_pelicula_idioma,fk_pelicula,fk_idioma)values ('Subtitulo',$f1,$idsubtitulo)");
	 if ((!$result2) || (!$result3) || (!$result4) ||(!$result5) ||(!$result8)||(!$result9)||(!$result10)||(!$result11)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 
	 header ('Location: enlaceactor.php');
	 
  }
}
}
}
?>
