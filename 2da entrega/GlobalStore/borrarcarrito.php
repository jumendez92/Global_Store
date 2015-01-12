<?php session_start();
$lista2=$_SESSION['carrito'];
$name=$_POST['ciudad'];
print_r($lista2);
$i=0;

if(in_array($name,$lista2)){
 while ( $i <= sizeof($lista2)){

	  if($lista2[$i]==$name){
		  unset($lista2[$i]);
		  break;
	  }
	  $i++;
 }
}
$_SESSION['carrito']=$lista2;
header ('Location: shoppingcart.php');
?>