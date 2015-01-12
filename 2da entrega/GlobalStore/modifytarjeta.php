<?php

include ("conexion.php");


$status=$_POST['title'];
$fecha=$_POST['date2'];





if ((!$result0) || (!$result01) || (!$result02)){ echo"<script type=\"text/javascript\">alert('ERROR AL ACTUALIZAR LOS DATOS');window.history.back());</script>"; 
}
else
 header('Location: indexuser.php');

?>
