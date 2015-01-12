
<?php
session_start();

  
$date=$_POST['date']; 
$version=$_POST['username']; 
$caracteristicas=$_POST['textarea'];

$fecha=date("Y-m-d");

$f1=rand(500,600);
$f2=rand(601,700);
$f3=rand(701,800);
$f4=rand(801,900);
$f5=rand(901,999);

include ("conexion.php");




if($_SESSION['sistema']){

$result0=pg_query($conexion,"select nombre_sistema,id_sistema from SISTEMA ");

while ($row = pg_fetch_row($result0)) {
	
  if (strcasecmp($row[0],$_SESSION['sistema'])==0){
     
	  
	  


$resultados=pg_query($conexion,"select nombre_version from VERSION ");
$flag=true;
while ($row2 = pg_fetch_row($resultados)) {

  if (strcasecmp($row2[0],$version)==0){
	  
      echo  "<script type=\"text/javascript\">alert('The version already exists!');window.history.back();</script>";
	  $flag=false;
	  break;}
	  
 
}
if ($flag){
echo"wolaa";
$result1=pg_query($conexion,"INSERT INTO VERSION (id_version,nombre_version,fecha_distribucion_version,FK_SISTEMA) values ($f1,'$version','$date',$row[1]);");

$result2=pg_query($conexion,"INSERT INTO CARACTERISTICA (id_caracteristica,descripcion_caracteristica) values ($f2,'$caracteristicas');");

$result3=pg_query($conexion,"INSERT INTO VERSION_CARACTERISTICA (FK_VERSION,FK_CARACTERISTICA) values ($f1,$f2);");

if ( (!$result1) || (!$result2) ||(!$result3)){ 
echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";
}
else
header('Location: indexadministradorsistema.php');
  }

  }
  }
}
else
echo "<script type=\"text/javascript\">alert('ERROR EN SESSION ');window.history.back();</script>"; 

?>
