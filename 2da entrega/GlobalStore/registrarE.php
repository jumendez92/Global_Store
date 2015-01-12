
<?php


$name=$_POST['first_name']; 
$middlename=$_POST['middle_name'];
$lastname=$_POST['last_name'];
$secondlastname=$_POST['second_last_name']; 
$date=$_POST['date']; 
$username=$_POST['username']; 
$password=$_POST['password'];
$password2=$_POST['password2'];
$titler=$_POST['title'];
$titlen=$_POST['title_1'];
$titleb=$_POST['title_2'];
$correo=$_POST['email'];
$telefono=$_POST['phone_1'];
$id=$_POST['id'];
$cargo=$_POST['cargo'];
$fecha=date("Y-m-d");
$f1=rand(1000,2000);
$f2=rand(2001,3000);

$f3=rand(3001,4000);

$f4=rand(4001,5000);
$f5=rand(5001,6000);
$f6=rand(6001,7000);
$f7=rand(7001,8000);
$f8=rand(8001,9000);
$F9=rand(900000,1000000);



if (strcasecmp ($password,$password2)==0){


include ("conexion.php");

$result0=pg_query($conexion,"select usuario_persona from PERSONA ");


while ($row = pg_fetch_row($result0)) {
  if (strcasecmp($row[0],$username)==0){
      echo  "<script type=\"text/javascript\">alert('The username already exists!');window.history.back();</script>"; 
	  $flag1=false;
	  break;}//42
	  else
	  {
		  $flag1=true;
	  }//46
  
}//41
$result3=pg_query ($conexion,"select nombre_rol,id_rol from ROL");


while ($row = pg_fetch_row($result3)) {
  if (strcasecmp($row[0],$titler)==0){
    
  $result10=pg_query($conexion,"select id_persona from PERSONA ");

   while ($row2 = pg_fetch_row($result10)) {
      if (strcasecmp($row2[0],$id)==0){
      echo  "<script type=\"text/javascript\">alert('The id already exists!');window.history.back();</script>";
	  $flag2=false; 
	  break;}//66
	  else
	  {
		  $flag2=true;
	  }//70
  
}//65
if ($flag1 && $flag2){
$result = pg_query ($conexion, "INSERT INTO PERSONA (id_persona,primer_nombre_persona,segundo_nombre_persona,primer_apellido_persona,segundo_apellido_persona,fecha_nacimiento_persona,status_persona,tipo_persona,usuario_persona,clave_persona) VALUES ($id,'$name','$middlename','$lastname','$secondlastname','$date',TRUE,'Empleado','$username','$password');");

$result1= pg_query ($conexion, "INSERT INTO CORREO (id_correo,cuenta_correo,FK_PERSONA) values ($f1,'$correo',$id);");


$result2= pg_query ($conexion, "INSERT INTO TELEFONO(id_telefono,numero_telefono,FK_PERSONA) values ($f2,'$telefono',$id);");


$result9= pg_query ($conexion, "INSERT INTO EMPLEADO (nivel_educativo_empleado,fecha_ingreso_empleado,grupo_sanguineo_empleado,fecha_acceso_empleado,fecha_culminacion_empleado,motivo_empleado,FK_ROL,FK_PERSONA) values ('$titlen','$fecha','$titleb','$fecha',null,null,$row[1],$id)");
$result5 = pg_query ($conexion,"INSERT INTO EMPLEADO_CARGO (FK_EMPLEADO,FK_CARGO) VALUES ($id,$cargo)");
}//76

if ((!$result) || (!$result1) || (!$result2) ||(!$result9)||(!$result5)){ echo"<script type=\"text/javascript\">alert('ERROR AL INTRODUCIR LOS DATOS');window.history.back();</script>"; 
}//88
else
header('Location: indexadministradorsistema.php');
   
 break;}//62
}//61
}//60
else{ 
while ($row3 = pg_fetch_row($result4)){
	 if (strcasecmp($row3,$cargo)==0){
  $result10=pg_query($conexion,"select id_persona from PERSONA ");

   while ($row2 = pg_fetch_row($result10)) {
      if (strcasecmp($row2[0],$id)==0){
      echo  "<script type=\"text/javascript\">alert('The id already exists!');window.history.back();</script>";
	  $flag2=false; 
	  break;}//66
	  else
	  {
		  $flag2=true;
	  }//70
  
}//65
}//56





else
 echo "<script type=\"text/javascript\">alert('The passwords dont match');window.history.back();</script>"; 

}
}

?>
