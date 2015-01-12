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
<title>Global Store - Search</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">
<?php session_start();
?>
/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

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
    	<div id="site_title">
    	  <h1><a href="index.html"></a></h1></div>
        <div id="header_right">
        	<p>
	        <a href="#">My Account</a>| <a href="#">My Cart</a> | <a href="index.php">Log Out</a></p>
            <p>&nbsp;</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.php">Products</a>
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


        	<input type="hidden" name="task" value="user.login" />
                <input type="hidden" name="option" value="com_users" />
        <input type="hidden" name="return" value="L2ZyZWVfMjAxM192aXJ0dWVtYXJ0XzJfMF8yMl9hL2luZGV4LnBocC9vbmxpbmUtc3RvcmUvdXNlci1lZGl0LWFkZHJlc3MvZWRpdGFkZHJlc3M=" />
        <input type="hidden" name="9ce09d49c98474ec96ad0d54ade14f82" value="1" />    </form>


<br />
<h2>Content Information</h2>
<form method="post" id="adminForm" name="userForm" action="Comentario.php" class="form-validate">


			<div align="center">
		
              
              <table  class="adminForm user-details">

					<?php
					include ('conexion.php');
					$name=$_GET['keyword'];
					$_SESSION['contentname']=$name;
					$result=pg_query($conexion,"select id_contenido,nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,tipo_contenido from CONTENIDO where nombre_contenido='$name'");
		
					if (pg_num_rows($result)<>0){
				
					 while ($row2 = pg_fetch_row($result)){
						  $result10=pg_query($conexion,"select ruta_video_imagen  from VIDEO_IMAGEN where fk_contenido=$row2[0] and tipo_video_imagen='Imagen' Limit 1");              
						  $row3 = pg_fetch_row($result10) 	;
						 
						  
					?>
                    <tr>
                    <td align="center"><img src="<?php echo$row3[0];?>" width="200" height="200" /></td> 
                    </tr>
                      <tr>
            <td  align="center"><?php echo 'Name: '. $row2[1]?></td> </tr>
                        	 <tr>
                            <td align="center"><?php echo 'Cost: '.$row2[2]?>
                            </td>
                            </tr>
                             <tr>
                             <td align="center"><?php echo 'Rate Time: '.$row2[3]?>
                            </td>
                            </tr>
                             <tr>
                             <td align="center"><?php echo 'Rate Downloads: '.$row2[4]?>
                            </td>
                            </tr>
                             <tr>
                             <td align="center"><?php echo 'Type : '.$row2[5]?>
                            </tr>
                            <?php
			if (strcasecmp($row2[5],'Aplicacion')==0){
				$result11=pg_query($conexion,"select descripcion_aplicacion,tamaño_aplicacion,version_actual_aplicacion,version_minima_SO_aplicacion,tipo_calificacion_aplicacion from APLICACION where fk_contenido=$row2[0]");        
				 
				while ($row3 = pg_fetch_row($result11)){ 
							?>
                             <tr>
                              <td align="center"><?php echo 'Description: '.$row3[0]?></tr>
                              <tr>
                             <td align="center"><?php echo 'Size: '.$row3[1]?>
                            </td>
                            </tr>
                            <tr>
                             <td align="center"><?php echo 'Version : '.$row3[2]?>
                            </td>
                            </tr>
                            <tr>
                             <td align="center"><?php echo 'Version Operating System : '.$row3[3]?>
                            </td>
                            </tr>
                            <tr>
                             <td align="center"><?php echo 'Type Califacion: '.$row3[4]?>
                            </td>
                            </tr>
                           
                            <?php
				}
			}
				else
				if (strcasecmp($row2[5],'Pelicula')==0){               $result11=pg_query($conexion,"select descripcion_pelicula,duracion_pelicula  from PELICULA where fk_contenido=$row2[0]"); 
				while ($row3 = pg_fetch_row($result11)){ 
					?>
                     <tr>
                              <td align="center"><?php echo 'Description: '.$row3[0]?></tr>
                              <tr>
                             <td align="center"><?php echo 'Duration: '.$row3[1]?>
                            </td>
                            </tr>

		<?php
			}
			}
			else 
			if (strcasecmp($row2[5],'Musica')==0){               $result11=pg_query($conexion,"select numero_canciones_musica,tipo_formato_musica from MUSICA where fk_contenido=$row2[0]");
			
			while ($row3 = pg_fetch_row($result11)){
					?>
                     <tr>
                              <td align="center"><?php echo 'Number of Songs: '.$row3[0]?></tr>
                              <tr>
                             <td align="center"><?php echo 'Format: '.$row3[1]?>
                            </td>
                            </tr> 
		
        <?php 
			}
			}
			else
			if (strcasecmp($row2[5],'Libro')==0){               $result11=pg_query($conexion,"select
			descripcion_libro,numero_paginas_libro  from LIBRO where fk_contenido=$row2[0]");
		while ($row3 = pg_fetch_row($result11)){
					
		?>
            <tr>
                              <td align="center"><?php echo 'Description : '.$row3[0]?></tr>
                              <tr>
                             <td align="center"><?php echo 'Number of Pages: '.$row3[1]?>
                            </td>
                            </tr> 
                            <?php 
			}
			}
			$result14=pg_query($conexion,"select ruta_video_imagen  from VIDEO_IMAGEN where fk_contenido=$row2[0] and tipo_video_imagen='Video' Limit 1");  
					
					$row4=pg_fetch_row($result14) ;
			?>
                            
      <tr>
                              <td align="center">     <iframe width="560" height="315" src="<?php echo $row4[0]?>" frameborder="0" allowfullscreen></iframe> </td>
                            </tr> 
<?php
$_SESSION['username2']='Alf24';
$username=$_SESSION['username2'];
if (!(empty($_SESSION['username2']))){
	?>
 <form action="Comentario.php" method="post"  >
     <tr>
       <td align="center" >
      
		<label  >Comment:</label>
        
        
                          
                            <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                        
                        </td>
					
					
	</tr>
<tr>
       <td align="center" >
      
		<label >Rate </label> 
        
        <select name="title"  class="vm-chzn-select" id="title">
    <option value="">-Select-</option>
	<option value="1">1</option>
	<option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
     <option value="5">5</option>
</select>
 </td>
 </tr>
 <tr>
  <td align="center">
 <input type="submit" name="submit" id="submit" value="Enviar" />
  </td>
 </tr>
  </form>
    <tr>
<td align="center"> <a href="shoppingcart.php?id=<?php array_push($carrito,$row2[0]);$_SESSION['carrito']=$carrito;?>">Añadir al carrito</a></td></tr>


<?php
}
					 }
					}
?>
                    
	</table>
    
	
           
             

</div> 
    	</div>
   <!-- END of templatemo_main -->
    
<div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Contact Us</a>
		</p>

		Copyright © 2072 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->
    	
</div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>