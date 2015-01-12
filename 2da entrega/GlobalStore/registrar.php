
<?php


$name=$_POST['first_name']; 
$middlename=$_POST['middle_name'];
$lastname=$_POST['last_name'];
$secondlastname=$_POST['second_last_name']; 
$date=$_POST['date']; 
$username=$_POST['username']; 
$password=$_POST['password'];
$password2=$_POST['password2'];
$pais=$_POST['virtuemart_country_id'];
$estado=$_POST['state'];
$ciudad=$_POST['city'];
$zip=$_POST['zip'];
$address1=$_POST['address_1'];
$address2=$_POST['address_2'];
$address3=$_POST['address_3'];
$title=$_POST['title'];
$correo=$_POST['email'];
$telefono=$_POST['phone_1'];
$id=$_POST['id'];
$fecha=date("Y-m-d");
$f1=rand(10000,20000);
$f2=rand(20001,30000);
$f3=rand(30001,40000);
$f4=rand(40001,50000);
$f5=rand(50001,60000);
$f6=rand(60001,70000);
$f7=rand(70001,80000);
$f8=rand(80001,90000);
$f9=rand(90001,99999);

include ("conexion.php");
if (strcasecmp ($password,$password2)==0){



$result0=pg_query($conexion,"select usuario_persona from PERSONA ");


while ($row = pg_fetch_row($result0)) {
  if (strcasecmp($row[0],$username)==0){
      echo  "<script type=\"text/javascript\">alert('The username already exists!');window.history.back();</script>"; 
	  $flag1=false;
	  break;}
	  else
	  {
		  $flag1=true;
	  }
  
}

$result10=pg_query($conexion,"select id_persona from PERSONA ");

while ($row = pg_fetch_row($result10)) {
  if (strcasecmp($row[0],$id)==0){
      echo  "<script type=\"text/javascript\">alert('The id already exists!');window.history.back();</script>";
	  $flag2=false; 
	  break;}
	  else
	  {
		  $flag2=true;
	  }
  
}
if ($flag1 && $flag2){
		$result12=pg_query($conexion,"select id_lugar, nombre_lugar from LUGAR where tipo_lugar='Pais'");
$result13=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Estado'");
$result14=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Ciudad'");
$result15=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Calle'");
$result16=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Urbanizacion'");
$result17=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='CodigoPostal'");
$result18=pg_query($conexion,"select id_lugar,nombre_lugar from LUGAR where tipo_lugar='Apartamento'");
$flag1=true;
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
 if ($flag1){
	 $result3= pg_query ($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values   ($f3,'Pais','$pais',NULL)");
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
			$result4= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f4,'Estado','$estado',$f3)");
			if (!$result4){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
		}
if (($flag2)and(!$flag1)){
	$result4= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f4,'Estado','$estado',$idpais)");
	if (!$result4){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
}

while ($row3 = pg_fetch_row($result14)) {
   if (strcasecmp($row3[1],$ciudad)==0){
	   $flag3=false;
	   $idciudad=$row3[0];
	   break;
	
   }
}
if(($flag3)and (!$flag2)){$result5= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f5,'Ciudad','$ciudad',$idestado)");
if (!$result5){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
   }
if(($flag3) and ($flag2)){$result5= pg_query($conexion,"INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f5,'Ciudad','$ciudad',$f4)");
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
  $result7= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f7,'Urbanizacion','$urb',$idciudad)");
  if (!$result7){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
 }
 if (($flag4) and ($flag3)){
	$result7= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f7,'Urbanizacion','$urb',$f5)");
	if (!$result7){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}
 while ($row5 = pg_fetch_row($result16)) {
           if (strcasecmp($row5[1],$calle)==0){
			   $flag5=true;
			   $idcalle=$row5[0];
			   break;
		   }

		   
 }
if(($flag5)and (!$flag4)) {
			   $result8= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f8,'Calle','$calle',$idurb)");
			   if (!$result8){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
			  }
if(($flag5)and ($flag4)){$result8= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f8,'Calle','$calle',$f7)");
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
		$result6= pg_query ($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f6,'CodigoPostal','$zip',$f8)");if (!$result6){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}		
	 while ($row7 = pg_fetch_row($result18)) {
       if (strcasecmp($row7[1],$apto)==0){
		   $flag7=true;
		   $idapto=$row7[1];
		     break;
	   }
	   
	 }
$result = pg_query ($conexion, "INSERT INTO PERSONA (id_persona,primer_nombre_persona,segundo_nombre_persona,primer_apellido_persona,segundo_apellido_persona,fecha_nacimiento_persona,status_persona,tipo_persona,usuario_persona,clave_persona) VALUES ($id,'$name','$middlename','$lastname','$secondlastname','$date',TRUE,'Cliente','$username','$password');");

$result1= pg_query ($conexion, "INSERT INTO CORREO (id_correo,cuenta_correo,FK_PERSONA) values ($f1,'$correo',$id);");


$result2= pg_query ($conexion, "INSERT INTO TELEFONO(id_telefono,numero_telefono,FK_PERSONA) values ($f2,'$telefono',$id);");





if(($flag7) and(!$flag6)) {
		   $result11= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f9,'Apartamento','$apto',$idzip)");
		   $result9= pg_query ($conexion, "INSERT INTO CLIENTE (estado_civil_cliente,fecha_registro_cliente,FK_PERSONA,FK_LUGAR) values ('$title','$fecha',$id,$idzip)");
		   if (!$result11){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
	   }
	   if(($flag7) and($flag6)){$result11= pg_query($conexion, "INSERT INTO LUGAR (id_lugar,tipo_lugar,nombre_lugar,FK_LUGAR) values ($f9,'Apartamento','$apto',$f6)");
	   $result9= pg_query ($conexion, "INSERT INTO CLIENTE (estado_civil_cliente,fecha_registro_cliente,FK_PERSONA,FK_LUGAR) values ('$title','$fecha',$id,$f9)");
	   if (!$result11){echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}}

if ((!$result) || (!$result1) || (!$result2) ||(!$result9)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; 
}
else
 header('Location: login.php');
}
} 
else
 echo "<script type=\"text/javascript\">alert('The passwords dont match');window.history.back();</script>"; 


?>
