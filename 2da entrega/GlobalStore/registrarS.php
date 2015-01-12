
<?php
session_start();

$company=$_POST['first_name'];  
$date=$_POST['date']; 
$sistema=$_POST['username']; 
$tiposo=$_POST['title'];
$caracteristicas=$_POST['textarea'];

$fecha=date("Y-m-d");
$f1=rand(100,200);
$f2=rand(201,300);
$f3=rand(301,400);
$f4=rand(401,500);



$_SESSION['sistema'] = $sistema; 


include ("conexion.php");

$result0=pg_query($conexion,"select nombre_sistema from SISTEMA ");


while ($row = pg_fetch_row($result0)) {
  if (strcasecmp($row[0],$sistema)==0){
      echo  "<script type=\"text/javascript\">alert('The operating sistem name already exists!');window.history.back();</script>"; 
	  $flag1=false;
	  break;}
	  else
	  {
		  $flag1=true;
	  }
  
}

$result10=pg_query($conexion,"select nombre_compañia,id_compañia from COMPAÑIA ");
$flag2=true;
while ($row = pg_fetch_row($result10)) {
  if (strcasecmp($row[0],$company)==0){
      
	  $flag2=false; 
	  
	  
$result2=pg_query($conexion,"INSERT INTO SISTEMA (id_sistema,nombre_sistema,fecha_lanzamiento_sistema,tipo_SO_sistema,FK_COMPAÑIA) values ($f2,'$sistema','$fecha','$tiposo',$row[1]);");	  
	  }
	 
  
}
if ($flag1){
if ($flag2){
$result1=pg_query($conexion,"INSERT INTO COMPAÑIA (id_compañia,nombre_compañia) values ($f1,'$company'); ");

$result2=pg_query($conexion,"INSERT INTO SISTEMA (id_sistema,nombre_sistema,fecha_lanzamiento_sistema,tipo_SO_sistema,FK_COMPAÑIA) values ($f2,'$sistema','$fecha','$tiposo',$f1);");

if ( (!$result1) || (!$result2) ){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back());</script>"; }
}
$result3=pg_query($conexion,"INSERT INTO CARACTERISTICA (id_caracteristica,descripcion_caracteristica) values ($f3,'$caracteristicas');");

$result4=pg_query($conexion,"INSERT INTO SISTEMA_CARACTERISTICA (FK_SISTEMA,FK_CARACTERISTICA) values ($f2,$f3);");

if ((!$result3) ||(!$result4)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; 
}
else
header('Location: registroversion.php');

}



?>
