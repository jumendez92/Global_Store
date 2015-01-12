<?php
include('conexion.php');
session_start();
$lista2=$_SESSION['carrito'];
$id=$_SESSION['idfa'];
$date=$_SESSION['dia'];
//$username=$_SESSION['username2'];
$username='Alf24';
$total=$_SESSION['total'];
$subtotal=$_SESSION['subtotal'];
$datepay=date("Y-m-d");
$i=0;
if ($total<>0){
		$result=pg_query($conexion,"select id_persona,primer_nombre_persona,primer_apellido_persona from PERSONA where usuario_persona='$username'");	
					
					if (pg_num_rows($result)<>0){
					 
					 while ($row2 = pg_fetch_row($result)){
	$result1=pg_query($conexion,"select id_tarjeta from TARJETA  where fk_cliente=$row2[0] and status_tarjeta=FALSE");
	if(pg_num_rows($result1)<>0){
	 echo  "<script type=\"text/javascript\">alert('NOT ACTIVE CARD!');window.history.back();</script>"; }
else{
	 $result10=pg_query($conexion,"select id_tarjeta from TARJETA  where fk_cliente=$row2[0] and status_tarjeta=TRUE");
	 if(pg_num_rows($result10)<>0){
		 $row3=pg_fetch_row($result10);
		 $result6=pg_query($conexion,"select id_contenido,fk_promocion from CONTENIDO ");
		 if (pg_num_rows($result6)<>0){
					 
					 while ($row4 = pg_fetch_row($result6)){          
						 
					  if(in_array($row4[0],$lista2)){
						
					  if ($row4[1]!=NULL){ 
					  $result4=pg_query($conexion,"select valor_promocion  from PROMOCION where id_promocion=$row4[1] ");
					  $row5=pg_fetch_row($result4);
		     $result12=pg_query($conexion,"INSERT INTO FACTURA (id_factura,fecha_emision_factura,subtotal_factura,total_factura,fecha_pago_factura,FK_TARJETA,FK_CLIENTE) values($id,$date,$subtotal,$total,$datepay,$row3[0],$row2[0])"); 
			 $result11=pg_query($conexion,"INSERT INTO FACTURA_CONTENIDO (FK_FACTURA,FK_CONTENIDO,FK_PROMOCION) values ($id,$row4[0],$row5[0])");
			 if ((!$result12) || (!$result11)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
					  }
			 else{
				 $result12=pg_query($conexion,"INSERT INTO FACTURA (id_factura,fecha_emision_factura,subtotal_factura,total_factura,fecha_pago_factura,FK_TARJETA,FK_CLIENTE) values($id,$date,$subtotal,$total,$datepay,$row3[0],$row2[0]"); 
			 $result11=pg_query($conexion,"INSERT INTO FACTURA_CONTENIDO (FK_FACTURA,FK_CONTENIDO,FK_PROMOCION) values ($id,$row4[0],NULL)");
				  if ((!$result12) || (!$result11)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
				  unset($lista2);
				  $_SESSION['carrito']=$lista2;
				  header ('Location: indexuser.php');
			 }
					  }
					  }
					 }
		 }
	 }
}
					 }					}
else {
	$result=pg_query($conexion,"select id_persona,primer_nombre_persona,primer_apellido_persona from PERSONA where usuario_persona='$username'");	
					
					if (pg_num_rows($result)<>0){
					 
					 while ($row2 = pg_fetch_row($result)){
						 $result1=pg_query($conexion,"select id_tarjeta from TARJETA  where fk_cliente=$row2[0] and status_tarjeta=FALSE");
	if(pg_num_rows($result1)<>0){
	 echo  "<script type=\"text/javascript\">alert('NOT ACTIVE CARD!');window.history.back();</script>"; }
else{
 $result10=pg_query($conexion,"select id_tarjeta from TARJETA  where fk_cliente=$row2[0] and status_tarjeta=TRUE");
	 if(pg_num_rows($result10)<>0){
		 $row3=pg_fetch_row($result10);
		 $result12=pg_query($conexion,"INSERT INTO FACTURA (id_factura,fecha_emision_factura,subtotal_factura,total_factura,fecha_pago_factura,FK_TARJETA,FK_CLIENTE) values($id,$date,$subtotal,$total,$datepay,$row3[0],$row2[0]"); 
			 $result11=pg_query($conexion,"INSERT INTO FACTURA_CONTENIDO (FK_FACTURA,FK_CONTENIDO,FK_PROMOCION) values ($id,$row4[0],NULL)");
			  if ((!$result12) || (!$result11)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; }
			  unset($lista2);
			  $_SESSION['carrito']=$lista2;
			  header ('Location: indexuser.php');
	 }
					 }
					}
}
}


			 
		  

?>