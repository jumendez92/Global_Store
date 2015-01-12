
<?php
session_start();
include("conexion.php");
$name2=$_POST['namecompany'];  
$email=$_POST['email']; 
$url=$_POST['url'];
$urb=$_POST['address_1']; 
$apto=$_POST['address_2'];
$calle=$_POST['address_3'];
$zip=$_POST['zip'];
$estado=$_POST['state'];
$ciudad=$_POST['city']; 
$pais=$_POST['pais2'];
$f1=rand(250000,300000);
$f2=rand(300001,450000);
$f3=rand(450001,500000);
$f4=rand(500001,600000);
$f5=rand(600001,700000);
$f6=rand(700001,850000);
$f7=rand(850001,900001);
$f8=rand(10,80);
$f9=rand(80,160);
$tipo=$_POST['title'];


$result0=pg_query($conexion,"select nombre_empresa_persona from EMPRESA_PERSONA ");

if (pg_num_rows($result0)){
   while ($row = pg_fetch_row($result0)) {
  if (strcasecmp($row[0],$name2)==0){
      echo  "<script type=\"text/javascript\">alert('The COMPANY already exists!');window.history.back();</script>"; 
	  $flag1=false;
	  break;}
	  else
	  {
		  $flag1=true;
	  }
  
}

if ($flag1){
		$result12=pg_query($conexion,"select id_lugar, nombre_lugar from LUGAR where tipo_lugar='Pais'");
$result13=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Estado'");
$result14=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Ciudad'");
$result15=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Calle'");
$result16=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Urbanizacion'");
$result17=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='CodigoPostal'");
$result18=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Apartamento'");
$flag8=true;
$flag2=true;
$flag3=true;
$flag4=true;
$flag5=true;
$flag6=true;
$flag7=true;
while ($row1 = pg_fetch_row($result12)) {
	 echo $row1[1];
	 echo $pais;
  if (strcasecmp($row1[1],$pais)==0){
	  $idpais=$row1[0];
	  $flag1=false;
	  echo "$idpais";
	  break;
  }
       
}
 if ($flag8){
	 $result3= pg_query ($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values   ($f1,'Pais','$pais',NULL)");
	 if (!$result3){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
  }
while ($row2 = pg_fetch_row($result13)) {
        if (strcasecmp($row2[1],$estado)==0){
			echo $row2[1];
			$idestado=$row2[0];
			$flag2=false;
			break;
		}

}
if (($flag2)and ($flag1)){
			$result4= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f2,'Estado','$estado',$f1)");
			if (!$result4){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
		}
if (($flag2)and(!$flag1)){
	$result4= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f2,'Estado','$estado',$idpais)");
	if (!$result4){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
}

while ($row3 = pg_fetch_row($result14)) {
   if (strcasecmp($row3[1],$ciudad)==0){
	   $flag3=false;
	   $idciudad=$row3[0];
	   break;
	
   }
}
if(($flag3)and (!$flag2)){$result5= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f3,'Ciudad','$ciudad',$idestado)");
if (!$result5){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
   }
if(($flag3) and ($flag2)){$result5= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f3,'Ciudad','$ciudad',$f2)");
if (!$result5){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
}
while ($row4 = pg_fetch_row($result15)) {
      if (strcasecmp($row4[1],$urb)==0){
		  $flag4=true;
		  $idurb=$row4[0];
		  break;
	  }
}
if (($flag4) and (!$flag3)){
  $result7= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f4,'Urbanizacion','$urb',$idciudad)");
  if (!$result7){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
 }
 if (($flag4) and ($flag3)){
	$result7= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f4,'Urbanizacion','$urb',$f3)");
	if (!$result7){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}
 while ($row5 = pg_fetch_row($result16)) {
           if (strcasecmp($row5[1],$calle)==0){
			   $flag5=true;
			   $idcalle=$row5[0];
			   break;
		   }

		   
 }
if(($flag5)and (!$flag4)) {
			   $result8= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f5,'Calle','$calle',$idurb)");
			   if (!$result8){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
			  }
if(($flag5)and ($flag4)){$result8= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f5,'Calle','$calle',$f4)");
if (!$result8){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}	
	  
while ($row6 = pg_fetch_row($result17)) {
              if (strcasecmp($row6[1],$zip)==0){
							 $idzip=$row6[0];
							 $flag6=true;
							 break;
												 }
	 }
	if(($flag6) and (!$flag5)) {
							$result6= pg_query ($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f6,'CodigoPostal','$zip',$idcalle)");
							if (!$result6){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
							}
		if(($flag6) and ($flag5)) {		
		$result6= pg_query ($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f6,'CodigoPostal','$zip',$f5)");
		if (!$result6){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}		
	 while ($row7 = pg_fetch_row($result18)) {
       if (strcasecmp($row7[1],$apto)==0){
		   $flag7=true;
		   $idapto=$row7[1];
		     break;
	   }
	   
	 }
if(($flag7) and(!$flag6)) {
		   $result11= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f9,'Apartamento','$apto',$idzip)");
		  $result20= pg_query ($conexion, "INSERT INTO EMPRESA_PERSONA (id_empresa_persona,nombre_empresa_persona,sitio_web_empresa_persona,tipo_empresa_persona,FK_LUGAR) values ($f7,'$name2','$url','$tipo',$idzip)");
		  if (!$result3){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
	   }
	   if(($flag7) and($flag6)){$result11= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f9,'Apartamento','$apto',$f6)");
	   $result20= pg_query ($conexion, "INSERT INTO EMPRESA_PERSONA (id_empresa_persona,nombre_empresa_persona,sitio_web_empresa_persona,tipo_empresa_persona,FK_LUGAR) values ($f7,'$name2','$url','$tipo',$idzip)");
	   if (!$result11){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}

if ((!$result20)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; 
}
else
 header('Location: registroaplicacion.php');
}
}

?>
