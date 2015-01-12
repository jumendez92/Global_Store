<!-- templatemo 367 shoes -->
<!-- 
Shoes Template 
http://www.templatemo.com/preview/templatemo_367_shoes 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<title>Global Store- Shopping Cart</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

<?php session_start() 
?>

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript" src="agregar.js"></script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="indexuser.php"></a></h1></div>
        <div id="header_right">
          <p><a href="#">My Cart</a>| <a href="#">Log Out</a></p>
            <p>
            	Shopping Cart: <strong><?php $listac=$_SESSION['carrito']; $ide=sizeof($listac); echo $ide ;?> items</strong> ( <a href="shoppingcart.php">Show Cart</a> )
			</p>
	  </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="indexuser.php">Home</a></li>
                <li><a>Products</a>
                    <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                        <li><a href="#submenu4">Sub menu 4</a></li>
                        <li><a href="#submenu5">Sub menu 5</a></li>
                  </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="buscar.php" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
 
        <div id="content" class="float_r" >
        
 
       	  <h1>Shopping Cart <?php ?> </h1>
            <div class="producto">
			<center>
              <p>
              <?php 
			  
					include ('conexion.php');
					//$name=$_SESSION['username2'];
					$name='Alf24';
					$result=pg_query($conexion,"select id_persona,primer_nombre_persona,primer_apellido_persona from PERSONA where usuario_persona='$name'");	
					
					if (pg_num_rows($result)<>0){
					 
					 while ($row2 = pg_fetch_row($result)){    $result1=pg_query($conexion,"select digitos_tarjeta,fk_banco,fk_tipo_tarjeta from TARJETA  where fk_cliente=$row2[0] and status_tarjeta=TRUE");
		if(pg_num_rows($result1)<>0){
					  while ($row3 = pg_fetch_row($result1)){	   $result2=pg_query($conexion,"select nombre_banco from BANCO  where id_banco=$row3[1]");
					   $result3=pg_query($conexion,"select nombre_tipo_tarjeta from TIPO_TARJETA  where id_tipo_tarjeta=$row3[2]");
			$row4 = pg_fetch_row($result2);
			$row5 = pg_fetch_row($result3);
			  ?>
              
              <p>
              <label> USER INFORMATION </label>
              </p>
              <p>
			  <label>Id: <?php echo $row2[0] ?></label></p>
              <p>
               <label>Name: <?php echo $row2[1] ?></label>
               </p>
               <p>
               <label>Last Name: <?php echo $row2[2] ?></label>
               </p>
               <p>
               <label>Bank on Card: <?php echo $row4[0] ?></label>
               </p>
               <p>
               <label>Type Card: <?php echo $row5[0] ?></label>
               </p>
               <p>
               <label>Digist : <?php echo $row2[0] ?></label>
               </p>
              
                <?php 
					  }
					  
		}
			   else { ?>
				    <p>
              <label> USER INFORMATION </label>
              </p>
              <p>
			  <label>Id: <?php echo $row2[0] ?></label></p>
              <p>
               <label>Name: <?php echo $row2[1] ?></label>
               </p>
                <?php 
			   }
					 }
					}
				?>
			   
              </p>
              <p>&nbsp;</p>
               <p> <label>BILL ID: <?php $f1=rand(989898888,100000000000000);
			   echo $f1;
			   $_SESSION['idfa']=$f1; ?></label><label>  Date Bill: <?php $dia=date("Y-m-d");
			   echo $dia; 
			   $_SESSION['dia']=$dia; ?> </label></p>
               
			</center>
		</div>
         <?php
		 $lista=$_SESSION['carrito'];
		 if (!(empty($lista))){
		 ?>
        <table width="680px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#ddd">
                      <th width="100" height="36" align="Center">Name Content</th> 
                        	<th width="220" align="Center">Image </th>  
                        	<th width="60" align="Center">Price </th> 
                        	<th width="60" align="Center">Promotion </th> 
                       	<th width="90"> Subtotal </th>
                            
                      </tr>
         <?php
					include ('conexion.php');
					$lista=$_SESSION['carrito'];
					print_r($lista);
					$subtotal=0;
					$promotion=0;
					$promovalor=0;
					$status='Inactiva';
					$result=pg_query($conexion,"select nombre_contenido,costo_contenido,id_contenido,fk_promocion from CONTENIDO ");					
			
					if (pg_num_rows($result)<>0){
					 
					 while ($row2 = pg_fetch_row($result)){          
						 
					  if(in_array($row2[2],$lista)){
						
					  if ($row2[3]!=NULL){ 
					  $result4=pg_query($conexion,"select valor_promocion  from PROMOCION where id_promocion=$row2[3] ");
					  
		               if (pg_num_rows($result4)<> 0){
					    $row0=pg_fetch_row($result4);
						$promotion=$row0[0];
						$promovalor=$row0[0];
						$status='Activa';
						}
					  }
					  
						  $result10=pg_query($conexion,"select ruta_video_imagen  from VIDEO_IMAGEN where fk_contenido=$row2[2] and tipo_video_imagen='Imagen' Limit 1");                $promotion=$row2[1]*$promotion;
						  
						  $subtotal=$subtotal+($row2[1]-$promotion);
						  while ($row3 = pg_fetch_row($result10)){ 
						  echo $row2[0];
						?>
                        <tr>
                    <td><?php echo $row2[0]?></td> 
                        	<td><img src="<?php echo$row3[0];?>" width="150" height="150" /></td> 
                            <td align="center"><?php echo $row2[1]?></td>
                          <td align="center"><?php echo $promovalor ?></td> 
                          <td align="center"><?php echo $subtotal ?></td>  
			            </tr>
                        	
                        
		 
          <?php 
						break;  }
						$promotion=0;
                         $status='Inactiva';
						  }
						  
					 }	
					 		
					 }
					$total=$subtotal;
		 }
		 else
		    echo 'NO POSEE NINGUN ARTICULO EN EL CARRITO';
				?>
          </table>
          <?php
		 $lista=$_SESSION['carrito'];
		 if (!(empty($lista))){
		 ?>
          <form action="borrarcarrito.php" method="post">
                   <select name="ciudad" >

                	  <option value="">Select elemento a Eliminar Del Carrito</option>
            			
                        <?php
						
						$lista2=$_SESSION['carrito'];

						include ('conexion.php');
					$result2=pg_query($conexion,"select nombre_contenido,id_contenido from CONTENIDO ");	
					if (pg_num_rows($result2)<>0){
					
					 while ( $i <= sizeof($lista2)){          				
						$i=0;
						echo sizeof($lista2);
                			while ($row2 = pg_fetch_row($result2) ) {                     if(in_array($row2[1],$lista2)){
                    	?>
                        
                        <option value="<?php echo $row2[1];?>"><?php echo $row2[0];?></option>
                    	<?php
							}
						$i++;
							}
					 }
                		}
                		?>
        			</select>
                    
            <input type="submit" name="submit" id="submit" value="Eliminar" />
            <?php
		 }
		 ?>
          </form>
                
                	
                    <div style="float:right; width: 215px; margin-top: 20px;">
                     <?php
                   if (!(empty($lista))){ ?>
                    <p>Total: <?php echo $total;$_SESSION['total']=$total;
					$_SESSION['subtotal']=$total;?></p>
					<p><a href="pago.php">Proceed to pay</a></p>
                    </form>
                    <p><a href="indexuser.php">Continue shopping</a></p>
                    	 <?php
		 }
		 ?>
                    </div>
	  </div>
        <div class="cleaner"></div>
        <div>
   
                    </div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p><a href="index.php">Home</a> | <a href="#">Contact Us</a>
		</p>

		Copyright © 2015 <a href="#">GlobalStore</a> <!-- Credit: www.templatemo.com -->
    	
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>