
<?php


$sistema=$_POST['name'];  
$date=$_POST['date']; 
$version=$_POST['username']; 
$caracteristicas=$_POST['textarea'];

$fecha=date("Y-m-d");

$f1=rand(801,900);
$f2=rand(901,999);




include ("conexion.php");



$resultar=pg_query($conexion,"select nombre_sistema,id_sistema from SISTEMA ");

$flag2=false;
while ($row = pg_fetch_row($resultar)) {

  if (strcasecmp($row[0],$sistema)==0){

$resultados=pg_query($conexion,"select nombre_version from VERSION ");
$flag=true;
$flag2=true;
while ($row2 = pg_fetch_row($resultados)) {
     
  if (strcasecmp($row2[0],$version)==0){
	  
      echo  "<script type=\"text/javascript\">alert('The version already exists!');window.history.back();</script>";
	  $flag=false;
	  break;}
	  
 
}
if ($flag){

$result1=pg_query($conexion,"INSERT INTO VERSION (id_version,nombre_version,fecha_distribucion_version,FK_SISTEMA) values ($f1,'$version','$date',$row[1]);");

$result2=pg_query($conexion,"INSERT INTO CARACTERISTICA (id_caracteristica,descripcion_caracteristica) values ($f2,'$caracteristicas');");

$result3=pg_query($conexion,"INSERT INTO VERSION_CARACTERISTICA (FK_VERSION,FK_CARACTERISTICA) values ($f1,$f2);");

if ( (!$result1) || (!$result2) ||(!$result3)){ 
echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>";
}
else
{header('Location: indexadministradorsistema.php');}
  break;}
   break;
}


}
if(!$flag2){
	
echo  "<script type=\"text/javascript\">alert('The operating sistem not exists!');window.history.back();</script>";}

?>
