<?php
session_start();
include("conexion.php");
$nombret=$_POST['username'];
$tipot=$_POST['username2'];
$fecha=$_POST['date2'];
$bancot=$_POST['username3'];
$digitost=$_POST['id'];
$statust=$_POST['title'];
$user=$_SESSION['username2'];
echo $user;
$f1=rand(8000,10000);
$f2=rand(10001,20001);
$f3=rand(20002,30001);
$result0=pg_query($conexion,"select id_persona from PERSONA where usuario_persona='$user' " );
$result2=pg_query($conexion,"select id_tipo_tarjeta,nombre_tipo_tarjeta from TIPO_TARJETA");
$result3=pg_query($conexion,"select id_banco,nombre_banco from BANCO");
$flag=true;
$flag2=true;
$flag3=true;
if (pg_num_rows($result0)<>0){
	while ($row=pg_fetch_row($result0)){
		echo $row[0];
		echo 'entro';
		$result1=pg_query($conexion,"select digitos_tarjeta,status_tarjeta from TARJETA where fk_cliente=$row[0]");
		    if (pg_num_rows($result1)<>0){
				echo 'entro2';
				while ($row1=pg_fetch_row($result1)){
	                 if (strcasecmp($row1[0],$digitost)==0){
						 echo 'entroerror';
						  echo"<script type=\"text/javascript\">alert('ERROR THIS CARD ALREADY EXISTS');window.history.back();</script>";break;}   
				if (strcasecmp($statust,'Activa')==0){
					 if (strcasecmp($row1[1],'t')==0){
						 $flag=false;
						 echo 'entroerror1';
						  echo"<script type=\"text/javascript\">alert('ERROR YOU HAVE A CARD ACTIVE');window.history.back();</script>";break;                                     }
						  }
			
			}
			
			}
			if (!$flag){
			break;}
		else {
			if (pg_num_rows($result2)<>0){
				echo 'entro10';
			     while ($row2=pg_fetch_row($result2)){
					 if (strcasecmp($row2[1],$tipot)==0){
						echo 'entro11';
					     $idtipo=$row2[0];
						 $flag2=false;
						 break;}
					  
				 }
				 if ($flag2){
					     $result10=pg_query($conexion,"INSERT INTO TIPO_TARJETA (id_tipo_tarjeta,nombre_tipo_tarjeta) values ($f2,'$tipot'");   
						 if (!$result10){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";
						 }
			}
			  if (pg_num_rows($result3)<>0){
				   while ($row3=pg_fetch_row($result3)){
					 if (strcasecmp($row3[1],$bancot)==0){
						 echo 'entro2';
					     $flag3=false;
						 $idbanco=$row3[0];
						 break;}
					 
					 }
				   }
				   if ($flag3) {$result12=pg_query($conexion,"INSERT INTO BANCO (id_banco,nombre_banco) values ($f3,'$bancot')") ;
					 if (!$result12){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";
					 }
				   }
			  }
					      
				if ((!$flag2) and (!$flag3)){ 
			$result13=pg_query($conexion,"INSERT INTO TARJETA (id_tarjeta,status_tarjeta,nombre_tarjeta,fecha_vencimiento_tarjeta,digitos_tarjeta,FK_BANCO,FK_CLIENTE,FK_TIPO_TARJETA) values ($f1,true,'$nombret','$fecha','$digitost',$idbanco,$row[0],$idtipo)");
			if (!$result13){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";}
			header ('Location: indexuser.php');
			}
				if (($flag2) and ($flag3)){ 
			$result13=pg_query($conexion,"INSERT INTO TARJETA (id_tarjeta,status_tarjeta,nombre_tarjeta,fecha_vencimiento_tarjeta,digitos_tarjeta,FK_BANCO,FK_CLIENTE,FK_TIPO_TARJETA) values ($f1,true,'$nombret','$fecha','$digitost',$f3,$row[0],$f2)");
			if (!$result13){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";
			header ('Location: indexuser.php');} 
				}
		}
			}
	}


					
					
				
				
				
				
		
	

?>