<?php
session_start();

$name2=$_POST['bookname'];  
$cantante=$_POST['autorname']; 
$descripcion=$_POST['textarea'];
$genero=$_POST['genero'];
$codigo=$_POST['isbn'];
$songs=$_POST['pages']; 
$label=$_POST['editorialname'];
$costo=$_POST['cost']; 
$date=$_POST['date'];
$f1=rand(20000,30000);
$f2=rand(600000,700001);
$f3=rand(700002,800000);
$f4=rand(800001,900002);
$f5=rand(100000,200000);
$f6=rand(200001,300001);
$flag=true;
$flag1=true;
$flag2=true;

function esImagen($name)
    {
                $imageSizeArray = getimagesize($name);
                $imageTypeArray = $imageSizeArray[2];
                return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }

include ("conexion.php");

$result0=pg_query($conexion,"select nombre_contenido,tipo_contenido from CONTENIDO where nombre_contenido='$name2'");
$result1=pg_query($conexion,"select nombre_autor,id_autor from AUTOR where nombre_autor='$cantante'");
$result2=pg_query($conexion,"select nombre_disquera_editorial,id_disquera_editorial from DISQUERA_EDITORIAL ");
$result3=pg_query($conexion,"select nombre_genero_categoria,id_genero_categoria from GENERO_CATEGORIA ");


if (esImagen($_FILES['imagen']['tmp_name'])){
	$rutaservidor="imagesM";
	$rutatmp=$_FILES['imagen']['tmp_name'];
    $nombreimagen=$_FILES['imagen']['name'];
    $rutadestino=$rutaservidor."/".$nombreimagen;
    move_uploaded_file($rutatmp,$rutadestino);
	echo pg_num_rows($result0);
	
if (pg_num_rows($result0)<>0){
	while($row = pg_fetch_row($result0)){
		if ((strcasecmp($row[0],$name2)==0)and(strcasecmp($row[1],'Libro')==0)){
	     echo  "<script type=\"text/javascript\">alert('The Bookname already exists!');window.history.back();</script>";         break;}
	}
}
if (pg_num_rows($result2)<>0){
	while($row3 = pg_fetch_row($result2)){
		if ((strcasecmp($row3[0],$label)==0)){
	     $ideditorial=$row3[1];
		 echo 'hola3';
		  $flag=false;
		        break;}
	}
}
if (pg_num_rows($result3)<>0){
	while($row1 = pg_fetch_row($result3)){
		if ((strcasecmp($row1[0],$genero)==0)){
			echo 'hola2';
	     $idgenero=$row1[1];
		  $flag1=false;
		        break;}
	}
}
echo $idgenero;
if(pg_num_rows($result1)<>0){
	while($row2 = pg_fetch_row($result0)){
		echo 'hola1';
		if ((strcasecmp($row2[0],$cantante)==0)){
			 $idautor=$row1[1];
			 echo 'hola1';
		  $flag2=false;}
	}
}
	echo 'entro11';
if ((!$flag) and (!$flag1) and (!$flag2)){
	echo 'entro';
	     $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");    
	 $result9=pg_query($conexion,"INSERT INTO AUTOR_LIBRO (FK_AUTOR,FK_LIBRO) values($idautor,$f1)");    
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	 if ((!$result2) || (!$result3)  ||(!$result5)||(!$result8)||(!$result9)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 header ('Location: indexadministradorsistema.php');
}
 echo 'entro12';

if (($flag) and ($flag1) and ($flag2)){
	echo 'entro2';
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");        
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	
	 if ((!$result2) || (!$result3)  ||(!$result5)||(!$result8)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 $_SESSION['fk']=$f1;
	 header ('Location: registroautor.php');
}

echo 'entro10';

if ((!$flag) and ($flag1) and ($flag2)){
	echo 'entro3';
	  $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");       
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");

	 if ((!$result2) || (!$result3) ||(!$result5)||(!$result8)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	   $_SESSION['fk']=$f1;
	 header ('Location: registroautor.php');
}

echo 'entro16';
if (($flag) and (!$flag1) and ($flag2)){
	echo 'entro4';
	  $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");       
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	 
	 if ((!$result2) || (!$result3) ||(!$result5)||(!$result8)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	   $_SESSION['fk']=$f1;
	 header ('Location: registroautor.php');
}

echo 'entro18';
if (($flag) and ($flag1) and (!$flag2)){
	echo 'entro5';
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	  $resul11=pg_query($conexion,"INSERT INTO GENERO_CATEGORIA (id_genero_categoria,tipo_genero_categoria,nombre_genero_categoria) values ($f4,'Genero','$genero')");
	   $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	  $result10=pg_query($conexion,"INSERT INTO DISQUERA_EDITORIAL (id_disquera_editorial,tipo_disquera_editorial,nombre_disquera_editorial) values ($f3,'Editorial','$label')");
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");    
	 $result9=pg_query($conexion,"INSERT INTO AUTOR_LIBRO (FK_AUTOR,FK_LIBRO) values($idautor,$f1)");    
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");

	 if ((!$result2) || (!$result3) ||(!$result5)||(!$result8)||(!$result9)||(!$result11)||(!$result10)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 header ('Location: indexadministradorsistema.php');
	 }
	 echo 'entro20';
	 if ((!$flag) and (!$flag1) and ($flag2)){
		 echo 'entro6';
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");       
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	
	 if ((!$result2) || (!$result3) ||(!$result5)||(!$result8)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	  $_SESSION['fk']=$f1;
	 header ('Location: registroautor.php');
	 }
	 
	echo 'entro21'; 
	 if (($flag) and (!$flag1) and (!$flag2)){
		 echo 'entro7';
	  $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	   $result10=pg_query($conexion,"INSERT INTO DISQUERA_EDITORIAL (id_disquera_editorial,tipo_disquera_editorial,nombre_disquera_editorial) values ($f3,'Editorial','$label')");   
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$idgenero)");    
	 $result9=pg_query($conexion,"INSERT INTO AUTOR_LIBRO (FK_AUTOR,FK_LIBRO) values($idautor,$f1)");    
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	 
	 if ((!$result2) || (!$result3)  ||(!$result5)||(!$result8)||(!$result9)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 header ('Location: indexadministradorsistema.php');
	 }
	 
	 echo 'entro30';
	 if ((!$flag) and ($flag1) and (!$flag2)){
		 echo 'entro8';
	 $result2=pg_query($conexion," INSERT INTO CONTENIDO (id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,FK_PROMOCION) values ($f1,'$name2',$costo,0,0,'$date','Libro',null)");
	 $resul11=pg_query($conexion,"INSERT INTO GENERO_CATEGORIA (id_genero_categoria,tipo_genero_categoria,nombre_genero_categoria) values ($f4,'Genero','$genero')"); 
	 $result3=pg_query($conexion,"INSERT INTO LIBRO (descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,FK_DISQUERA_EDITORIAL,FK_CONTENIDO) values ('$descripcion',$songs,$codigo,$ideditorial,$f1)");    
	 $result8=pg_query($conexion,"INSERT INTO LIBRO_GENERO_CATEGORIA (FK_LIBRO,FK_GENERO_CATEGORIA) values ($f1,$f4)");    
	 $result9=pg_query($conexion,"INSERT INTO AUTOR_LIBRO (FK_AUTOR,FK_LIBRO) values($idautor,$f1)");    
     $result5=pg_query($conexion,"INSERT INTO VIDEO_IMAGEN (id_video_imagen,tipo_video_imagen,ruta_video_imagen,FK_CONTENIDO) values ($f2,'Imagen','$rutadestino',$f1");
	 
	 if ((!$result2) || (!$result3)  ||(!$result5)||(!$result8)||(!$result9)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
	 header ('Location: indexadministradorsistema.php');
	 }
}


?>
