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
<title>Global Store - Register Genre</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>
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
    	  <h1><a href="index.php"></a></h1></div>
        <div id="header_right">
        	<p>&nbsp;</p>
            <p>&nbsp;</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a>Products</a>
                    <ul>
                         <li><a href="#submenu1">Applications</a></li>
                        <li><a href="#submenu2">Movies</a></li>
                        <li><a href="#submenu3">Musics</a></li>
                        <li><a href="#submenu4">Books</a></li>
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
<h2>Delete Genre</h2>
<form method="post" id="adminForm" name="userForm"  class="form-validate" action="registrogen.php">


			<div align="center">
		
              
              <table  class="adminForm user-details">

						<tr>
                    <td><select name="content" required="required" class="vm-chzn-select required" id="virtuemart_country_id">
	<option value="" selected="selected">-- Select --</option>
	<option value="Cliente">Client</option>
	<option value="Contenido">Content</option>
	<option value="Aplicacion">App</option>
	<option value="Pelicula">Movie</option>
	<option value="Musica">Music</option>
	<option value="Libro">Book</option>
	<option value="Compañia">Company</option>
    <option value="Autor">Autor</option>
    <option value="Actor">Actor</option>
    <option value="Caracteristica">Caracteristic</option>
    <option value="Sistema_Caracteristica">System Caracteristic</option>
    <option value="Version">Version</option>
    <option value="Version_Caracteristica">Version Caracteristica</option>
    <option value="Sistema">System</option>
    <option value="Sistema_Contenido">System Content</option>
    <option value="Autor_Libro">Autor_Book</option>
    <option value="Video_Imagen">Video_Image</option>
    <option value="Pelicula_Idioma">Movie_Language</option>
    <option value="Idioma">Language</option>
    <option value="Genero_Categoria">Genre_Category</option>
    <option value="Libro_Genero_Categoria">Book_Genre_Category</option>
    <option value="Disquera_Editorial">Label_Editorial</option>
    <option value="Musica_Genero_Categoria">Music_Genre_Category</option>
    <option value="Musica_Actor_Director_Cantante">Music_Actor_Director_Singer</option>
    <option value="Pelicula_Actor_Director_Cantante">Movie_Actor_Director_Singer</option>
    <option value="Actor_Director_Cantante">Actor_Director_Singer</option>
    <option value="Empresa_Persona">Develover or Company</option>
    <option value="Lugar">Place</option>
    <option value="Comentario">Comentary</option>
    <option value="Calificacion">Rate</option>
    <option value="Factura">Bill</option>
    <option value="Factura_Contenido">Bill_Content</option>
    <option value="Tarjeta">Card</option>
    <option value="Tipo_Tarjeta">Type Tarjeta</option>
    <option value="Banco">Bank</option>
    <option value="Condicion">Condition</option>
    <option value="Promocion">Promotion</option>
    <option value="Empleado">Employee</option>
    <option value="Cargo">Office</option>
    <option value="Correo">Email</option>
    <option value="Telefono">Phone</option>
    <option value="Rol">Rol</option>
    <option value="Accion">Action</option>
    <option value="Historial">Historial</option>
    
   
    
	


</select></td
                    
					></tr>
                    <td class="key" title="" ><label for="name_field" class="name">ID*
                      <input name="name" type="text" required="required" id="textfield" />
                    </label></td>
					<td>&nbsp;</td>
					
	</table>
              
                <input name="submit" type="submit" id="submit"  value="Delete"  />
                 <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                <input type="button" name="button" id="button" value="Cancel" /></a>
              </p></td>
              <p>
              <label>*Field Required</label>
              </p>
               <?php
include ("conexion.php");

$valor=$_POST['content'];
$id=$_POST['name'];;
$result=pg_query($conexion,"delete from '$valor' where $id=id_");

?>
</div> 
    	</div>
   <!-- END of templatemo_main -->
    
<div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
		</p>

		Copyright © 2015 <a href="#">Global Store</a> <!-- Credit: www.templatemo.com -->
    	
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->
<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
</script>
</body>
</html>