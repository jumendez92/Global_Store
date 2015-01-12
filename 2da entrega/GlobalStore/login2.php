
<?php
session_start();

$name=$_POST['username']; 
$pass=$_POST['password'];
$fecha=date("Y-m-d");

$admin='Administrador del Sistema';
$admin1='Administrador de Contenidos';
$admin2='Revisor de Contenidos';
$f1=rand(5500,8900);
$ip= $_SERVER['REMOTE_ADDR'];
$conexion = pg_connect ("user=postgres password=12345 port=5432 dbname=postgres host=localhost")or die("problemas al conectar el host");


$result0=pg_query($conexion,"select usuario_persona,clave_persona,tipo_persona,status_persona,id_persona from PERSONA where usuario_persona='$name' ");

if (pg_num_rows($result0)<>0){
	
while ($row = pg_fetch_row($result0)) {

	echo'1';
 if (strcasecmp('t',$row[3])==0){
echo'2';
	       if(strcasecmp($row[1],$pass)==0){
			   echo'3';
			     if(strcasecmp($row[2],'Empleado')==0){
					 echo'4';
					 $result1=pg_query($conexion,"select FK_ROL from EMPLEADO where FK_PERSONA=$row[4] ");
                       while ($row2 = pg_fetch_row($result1)){
						   $result2=pg_query($conexion,"select nombre_rol from ROL where id_rol=$row2[0] ");
						   while($row3= pg_fetch_row($result2)){
				            if((strcasecmp($row3[0],$admin)==0)) {header('Location: indexadministradorsistema.php');break;}
				            if((strcasecmp($row3[0],$admin1)==0) ){header ('Location: indexuseradministradorcontenido.php');break;}
				            if((strcasecmp($row3[0],$admin2)==0) ){header ('Location: indexuserrevisorcontenido.php');break;}
						   }
					   }
				 }
				 if (strcasecmp($row[2],'Cliente')==0) {$_SESSION['username2']=$name; header('Location: indexuser.php');}break;}
  else {
	 echo"<script type=\"text/javascript\">alert('ERROR PASSWORD O USER INCORRECT ');window.history.back();</script>"; break;}
}

if (strcasecmp('f',$row[3])==0) {
	echo"<script type=\"text/javascript\">alert('USER or EMPLOYEE INACTIVE');window.history.back();</script>"; break;}
				      
}}

 
 


?>
