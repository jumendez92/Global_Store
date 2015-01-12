<!-- templatemo 367 shoes -->
<!-- 
Shoes Template 
http://www.templatemo.com/preview/templatemo_367_shoes 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Global Store - Search</title>
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
<?php error_reporting (0);?>
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
<h2>Search</h2>
<form method="post" id="adminForm" name="userForm"  class="form-validate" action="eliminar.php">


			<div align="center">
		
              
              <table  class="adminForm user-details">

					<tr>
                    <td><select  id="title" name="title"  required class="vm-chzn-select">
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
					
	</table>
            <input name="submit" type="submit" id="submit"  value="Search"  />
              <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">  
              
              <?php
include ("conexion.php");

$valor=$_POST['content'];
							//COMPAÑIA
if (strcasecmp($valor,'Compañia')==0){
$result=pg_query($conexion,"select nombre_compañia from COMPAÑIA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) { 
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>"; }
//	SISTEMA OPERATIVO
if (strcasecmp($valor,'Sistema')==0){
$result=pg_query($conexion,"select nombre_sistema,tipo_SO_sistema,fecha_lanzamiento_sistema,(select nombre_compañia from COMPAÑIA where FK_COMPAÑIA=id_compañia) from SISTEMA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Tipo_SO</td>";
 print " <td> Fecha Lanzamiento</td>";
 print " <td> Compañia</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print "</tr>";
}
print "</table>";
}
// SISTEMA_CARACTERISTICA
if (strcasecmp($valor,'Sistema_Caracteristica')==0){
$result=pg_query($conexion,"select (select nombre_sistema from SISTEMA where FK_SISTEMA=id_sistema),(select descripcion_caracteristica from CARACTERISTICA where FK_CARACTERISTICA=id_caracteristica) from SISTEMA_CARACTERISTICA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre SO</td>";
 print " <td> Caracteristicas SO</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//VERSION con CARACTERISTICA
if (strcasecmp($valor,'Version_Caracteristica')==0){			
$result = pg_query($conexion , "select (select nombre_version from VERSION where FK_VERSION=id_version),(select descripcion_caracteristica from CARACTERISTICA where FK_CARACTERISTICA=id_caracteristica) from VERSION_CARACTERISTICA" );		
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre Version</td>";
 print " <td> Caracteristicas SO</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
			//VERSION
if (strcasecmp($valor,'Version')==0){
$result=pg_query($conexion,"select nombre_version,fecha_distribucion_version,(select nombre_sistema from SISTEMA where FK_SISTEMA=id_sistema) from VERSION");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre SO</td>";
 print " <td> Nombre Version</td>";
 print " <td> Fecha Distribucion SO</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[2]</td>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//AUTOR
if (strcasecmp($valor,'Autor')==0){
$result=pg_query($conexion,"select nombre_autor,reseña_autor from AUTOR");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Reseña</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//SISTEMA_CONTENIDO
if (strcasecmp($valor,'Sistema_Contenido')==0){
$result=pg_query($conexion,"select (select nombre_sistema from SISTEMA where FK_SISTEMA=id_sistema),(select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido) from SISTEMA_CONTENIDO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre SO</td>";
 print " <td> Nombre Contenido</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//AUTOR_LIBRO
if (strcasecmp($valor,'Autor_Libro')==0){
$result=pg_query($conexion,"select (select nombre_autor from AUTOR where FK_AUTOR=id_autor),(select nombre_contenido from CONTENIDO where FK_LIBRO=id_contenido) from AUTOR_LIBRO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Autor</td>";
 print " <td> Nombre Libro</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//LIBRO_GENERO_CATEGORIA
if (strcasecmp($valor,'Libro_Genero_Categoria')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_LIBRO=id_contenido),(select nombre_genero_categoria from GENERO_CATEGORIA where FK_GENERO_CATEGORIA=id_genero_categoria) from LIBRO_GENERO_CATEGORIA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Libro</td>";
 print " <td> Genero</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//LIBRO
if (strcasecmp($valor,'Libro')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),descripcion_libro,numero_paginas_libro,codigo_ISBN_libro,(select nombre_disquera_editorial from DISQUERA_EDITORIAL where FK_DISQUERA_EDITORIAL=id_disquera_editorial) from LIBRO");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre Libro</td>";
 print " <td> Descripcion</td>";
 print " <td> Numero Paginas</td>";
 print " <td> Codigo ISBN</td>";
 print " <td> Editorial</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print "</tr>";
}
print "</table>";
}
//DISQUERA_EDITORIAL
if (strcasecmp($valor,'Disquera_Editorial')==0){
$result=pg_query($conexion,"select tipo_disquera_editorial,nombre_disquera_editorial from DISQUERA_EDITORIAL");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Tipo</td>";
 print " <td> Nombre</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//MUSICA
if (strcasecmp($valor,'Musica')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),numero_canciones_musica,tipo_formato_musica from MUSICA");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Numero Canciones</td>";
 print " <td> Tipo Formato</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
}
//PELICULA
if (strcasecmp($valor,'Pelicula')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),descripcion_pelicula,duracion_pelicula from PELICULA");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Descripcion</td>";
 print " <td> Duracion</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
}
	//APLICACION
if (strcasecmp($valor,'Aplicacion')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),descripcion_aplicacion,tamaño_aplicacion,version_actual_aplicacion,version_minima_SO_aplicacion,tipo_calificacion_aplicacion,(select nombre_empresa_persona from EMPRESA_PERSONA where FK_EMPRESA_PERSONA=id_empresa_persona) from APLICACION");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Descripcion</td>";
 print " <td> Tamaño</td>";
 print " <td> Version Actual</td>";
 print " <td> Version Minima</td>";
 print " <td> Calificacion</td>";
 print " <td> Empresa o Persona</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print " <td> $row[6]</td>";
 print "</tr>";
}
print "</table>";
}
//CONTENIDO
if (strcasecmp($valor,'Contenido')==0){
$result=pg_query($conexion,"select nombre_contenido,costo_contenido,veces_valorada_contenido,veces_descargada_contenido,fecha_contenido,tipo_contenido,(select nombre_promocion from PROMOCION where FK_PROMOCION=id_promocion) from CONTENIDO");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Costo</td>";
 print " <td> Veces Valorada</td>";
 print " <td> Veces Descargada</td>";
 print " <td> Fecha</td>";
 print " <td> Tipo</td>";
 print " <td> Promocion</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print " <td> $row[6]</td>";
 print "</tr>";
}
print "</table>";
}
//VIDEO_IMAGEN
if (strcasecmp($valor,'Video_Imagen')==0){
$result=pg_query($conexion,"select tipo_video_imagen,ruta_video_imagen,(select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido) from VIDEO_IMAGEN");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Tipo</td>";
 print " <td> Ruta</td>";
 print " <td> Contenido</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
}
//GENERO_CATEGORIA
if (strcasecmp($valor,'Genero_Categoria')==0){
$result=pg_query($conexion,"select tipo_genero_categoria,nombre_genero_categoria from GENERO_CATEGORIA");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Tipo</td>";
 print " <td> Nombre</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//MUSICA_GENERO_CATEGORIA
if (strcasecmp($valor,'Musica_Genero_Categoria')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_MUSICA=id_contenido),(select nombre_genero_categoria from GENERO_CATEGORIA where FK_GENERO_CATEGORIA=id_genero_categoria) from MUSICA_GENERO_CATEGORIA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Musica</td>";
 print " <td> Genero</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//MUSICA_ACTOR_DIRECTOR_CANTANTE
if (strcasecmp($valor,'Musica_Actor_Director_Cantante')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_MUSICA=id_contenido),(select nombre_actor_director_cantante from ACTOR_DIRECTOR_CANTANTE where FK_ACTOR_DIRECTOR_CANTANTE=id_actor_director_cantante) from MUSICA_ACTOR_DIRECTOR_CANTANTE");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Musica</td>";
 print " <td> Cantante</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//PELICULA_IDIOMA
if (strcasecmp($valor,'Pelicula_Idioma')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_PELICULA=id_contenido),(select lenguaje_idioma from IDIOMA where FK_IDIOMA=id_idioma),tipo_pelicula_idioma from PELICULA_IDIOMA");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Pelicula</td>";
 print " <td> Idioma</td>";
 print " <td> Tipo</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
}
//IDIOMA
if (strcasecmp($valor,'Idioma')==0){
$result=pg_query($conexion,"select lenguaje_idioma from IDIOMA");
print "<table BORDER=1 WIDTH=1000>";
 print "<tr>";
 print " <td> Lenguaje</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
//PELICULA_ACTOR_DIRECTOR_CANTANTE
if (strcasecmp($valor,'Pelicula_Actor_Director_Cantante')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_PELICULA=id_contenido),(select tipo_actor_director_cantante from ACTOR_DIRECTOR_CANTANTE where FK_ACTOR_DIRECTOR_CANTANTE=id_actor_director_cantante),(select nombre_actor_director_cantante from ACTOR_DIRECTOR_CANTANTE where FK_ACTOR_DIRECTOR_CANTANTE=id_actor_director_cantante) from PELICULA_ACTOR_DIRECTOR_CANTANTE");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Pelicula</td>";
 print " <td> Tipo</td>";
 print " <td> Nombre del Tipo</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
}
//ACTOR_DIRECTOR_CANTANTE
if (strcasecmp($valor,'Actor_Director_Cantante')==0){
$result=pg_query($conexion,"select tipo_actor_director_cantante,nombre_actor_director_cantante,apellido_actor_director_cantante from ACTOR_DIRECTOR_CANTANTE");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Tipo</td>";
 print " <td> Nombre</td>";
 print " <td> Apellido</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
}
//PELICULA_GENERO_CATEGORIA
if (strcasecmp($valor,'Pelicula_Genero_Categoria')==0){
$result=pg_query($conexion,"select (select nombre_contenido from CONTENIDO where FK_PELICULA=id_contenido),(select nombre_genero_categoria from GENERO_CATEGORIA where FK_GENERO_CATEGORIA=id_genero_categoria) from PELICULA_GENERO_CATEGORIA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Pelicula</td>";
 print " <td> Categoria</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//PROMOCION
if (strcasecmp($valor,'Promocion')==0){
$result=pg_query($conexion,"select nombre_promocion,status_promocion,valor_promocion,descripcion_promocion,fecha_inicio_promocion,fecha_culminacion_promocion from PROMOCION");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre</td>";
 print " <td> Status</td>";
 print " <td> Valor</td>";
 print " <td> Descripcion</td>";
 print " <td> Fecha_inicio</td>";
 print " <td> Fecha Culminacion</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print "</tr>";
}
print "</table>";
}
//FACTURA_CONTENIDO
if (strcasecmp($valor,'Factura_Contenido')==0){
$result=pg_query($conexion,"select (select fecha_emision_factura from FACTURA where FK_FACTURA=id_factura),(select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido) from FACTURA_CONTENIDO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Fecha Emision</td>";
 print " <td> Nombre Contenido</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//CONDICION
if (strcasecmp($valor,'Condicion')==0){
$result=pg_query($conexion,"select descripcion_condicion,(select nombre_promocion from PROMOCION where FK_PROMOCION=id_promocion) from CONDICION");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Promocion</td>";
 print " <td> Condicion Promocion</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[1]</td>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
//BANCO
if (strcasecmp($valor,'Banco')==0){
$result=pg_query($conexion,"select nombre_banco from BANCO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Banco</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
//TIPO_TARJETA
if (strcasecmp($valor,'Tipo_Tarjeta')==0){
$result=pg_query($conexion,"select nombre_tipo_tarjeta from TIPO_TARJETA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Tipo Tarjeta</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
//ACCION
if (strcasecmp($valor,'Accion')==0){
$result=pg_query($conexion,"select nombre_accion from ACCION");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Accion</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
	//ROL
if (strcasecmp($valor,'Rol')==0){
$result=pg_query($conexion,"select nombre_rol from ROL");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Rol</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";	
	}
	//ACCION_ROL
if (strcasecmp($valor,'Accion_Rol')==0){
$result=pg_query($conexion,"select (select nombre_rol from ROL where FK_ROL=id_rol),(select nombre_accion from ACCION where FK_ACCION=id_accion) from ACCION_ROL");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Accion</td>";
 print " <td> Nombre Rol</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//PERSONA
if (strcasecmp($valor,'Persona')==0){
$result=pg_query($conexion,"select primer_nombre_persona,segundo_nombre_persona,primer_apellido_persona,segundo_apellido_persona,fecha_nacimiento_persona,status_persona,tipo_persona,usuario_persona,clave_persona from Persona");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Primer Nombre</td>";
 print " <td> Segundo Nombre</td>";
 print " <td> Primer Apellido</td>";
 print " <td> Segundo Apellido</td>";
 print " <td> Fecha Nacimiento</td>";
 print " <td> Status</td>";
 print " <td> Tipo</td>";
 print " <td> Usuario</td>";
 print " <td> Clave</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print " <td> $row[6]</td>";
 print " <td> $row[7]</td>";
 print " <td> $row[8]</td>";
 print "</tr>";
}
print "</table>";
}
//TELEFONO
if (strcasecmp($valor,'Telefono')==0){
$result=pg_query($conexion,"select numero_telefono from TELEFONO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Telefono</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
//CORREO
if (strcasecmp($valor,'Correo')==0){
$result=pg_query($conexion,"select cuenta_correo from CORREO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Correo</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print "</tr>";
}
print "</table>";
}
//EMPLEADO
if (strcasecmp($valor,'Empleado')==0){
$result=pg_query($conexion,"select (select usuario_persona from PERSONA where FK_PERSONA=id_persona),(select nombre_rol from ROL where FK_ROL=id_rol),nivel_educativo_empleado,fecha_ingreso_empleado,grupo_sanguineo_empleado,fecha_acceso_empleado,fecha_culminacion_empleado,motivo_empleado from EMPLEADO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Usuario</td>";
 print " <td> Nivel Educativo</td>";
 print " <td> Fecha Ingreso</td>";
 print " <td> Grupo Sanguineo</td>";
 print " <td> Fecha Acceso</td>";
 print " <td> Fecha Culminacion</td>";
 print " <td> Motivo</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print " <td> $row[6]</td>";
 print "</tr>";
}
print "</table>";
}
//CARGO
if (strcasecmp($valor,'Cargo')==0){
$result=pg_query($conexion,"select nombre_cargo,salario_cargo from CARGO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Nombre Cargo</td>";
 print " <td> Salario</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
//EMPLEADO_CARGO
if (strcasecmp($valor,'Empleado_Cargo')==0){
$result=pg_query($conexion,"select (select usuario_persona from PERSONA where FK_EMPLEADO=id_persona),(select nombre_cargo from CARGO where FK_CARGO=id_cargo) from EMPLEADO_CARGO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Empleado</td>";
 print " <td> Cargo</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print "</tr>";
}
print "</table>";
}
	//CLIENTE
if (strcasecmp($valor,'Cliente')==0){
$result=pg_query($conexion,"select (select usuario_persona from PERSONA where FK_PERSONA=id_persona),estado_civil_cliente,fecha_registro_cliente,(select nombre_lugar from LUGAR where FK_LUGAR=id_lugar) from CLIENTE");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Usuario</td>";
 print " <td> Estado Civil</td>";
 print " <td> Fecha Registro</td>";
 print " <td> Lugar</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print "</tr>";
}
print "</table>";
}
//EMPRESA_PERSONA
if (strcasecmp($valor,'Empresa_Persona')==0){
$result=pg_query($conexion,"select tipo_empresa_persona,nombre_empresa_persona,sitio_web_empresa_persona,(select nombre_lugar from LUGAR where FK_LUGAR=id_lugar) from EMPRESA_PERSONA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Tipo</td>";
 print " <td> Nombre</td>";
 print " <td> Sitio Web</td>";
 print " <td> Lugar</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print "</tr>";
}
print "</table>";
}
//FACTURA
if (strcasecmp($valor,'Factura')==0){
$result=pg_query($conexion,"select fecha_emision_factura,subTotal_factura,total_factura,fecha_pago_factura,(select digitos_tarjeta from TARJETA where FK_TARJETA=id_tarjeta),(select usuario_persona from PERSONA where FK_CLIENTE=id_persona) from FACTURA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Fecha Emision</td>";
 print " <td> subTotal</td>";
 print " <td> Total</td>";
 print " <td> Fecha Pago</td>";
 print " <td> Digitos Tarjeta</td>";
 print " <td> Usuario</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print "</tr>";
}
print "</table>";
}
				//TARJETA
if (strcasecmp($valor,'Tarjeta')==0){
$result=pg_query($conexion,"select status_tarjeta,nombre_tarjeta,fecha_vencimiento_tarjeta,digitos_tarjeta,(select nombre_tipo_tarjeta from TIPO_TARJETA where FK_TIPO_TARJETA=id_tarjeta),(select usuario_persona from PERSONA where FK_CLIENTE=id_persona),(select nombre_banco from BANCO where FK_BANCO=id_banco) from TARJETA");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Status</td>";
 print " <td> Nombre</td>";
 print " <td> Fecha_Venc</td>";
 print " <td> Digitos</td>";
 print " <td> Tipo Tarjeta</td>";
 print " <td> Usuario</td>";
 print " <td> Banco</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print " <td> $row[6]</td>";
 print "</tr>";
}
print "</table>";
}
//CALIFICACION
if (strcasecmp($valor,'Calificacion')==0){
$result=pg_query($conexion,"select hora_calificacion,fecha_calificacion,valor_calificacion,(select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),(select usuario_persona from PERSONA where FK_CLIENTE=id_persona) from CALIFICACION");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Hora</td>";
 print " <td> Fecha</td>";
 print " <td> Valor</td>";
 print " <td> Nombre Contenido</td>";
 print " <td> Usuario</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print "</tr>";
}
print "</table>";
}
//COMENTARIO
if (strcasecmp($valor,'Comentario')==0){
$result=pg_query($conexion,"select hora_comentario,fecha_comentario,contenido_comentario,(select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),(select usuario_persona from PERSONA where FK_CLIENTE=id_persona) from COMENTARIO");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Hora</td>";
 print " <td> Fecha</td>";
 print " <td> Contenido</td>";
 print " <td> Nombre Contenido</td>";
 print " <td> Usuario</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print "</tr>";
}
print "</table>";
}
//HISTORIAL
if (strcasecmp($valor,'Historial')==0){
$result=pg_query($conexion,"select fecha_inicio_historial,fecha_fin_historial,ip_historial,(select nombre_contenido from CONTENIDO where FK_CONTENIDO=id_contenido),(select usuario_persona from PERSONA where FK_PERSONA=id_persona),(select nombre_promocion from PROMOCION where FK_PROMOCION=id_promocion),(select nombre_accion from ACCION where FK_ACCION=id_accion),(select nombre_rol from ROL where FK_ROL=id_rol) from HISTORIAL");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Fecha Inicio</td>";
 print " <td> Fecha Fin</td>";
 print " <td> Ip</td>";
 print " <td> Nombre Contenido</td>";
 print " <td> Usuario</td>";
 print " <td> Promocion</td>";
 print " <td> Accion</td>";
 print " <td> Rol</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print " <td> $row[3]</td>";
 print " <td> $row[4]</td>";
 print " <td> $row[5]</td>";
 print " <td> $row[6]</td>";
 print " <td> $row[7]</td>";
 print "</tr>";
}
print "</table>";
}
//falta lugar
?>
<td class="key" title="" >
						<label class="username" for="username_field">
					  Row to delete*						</label>
					</td>
                    <td>
						<input name="username" type="text" required="required" id="username_field" title="Username" value="" size="30"  maxlength="25" /> 					</td>
<p><td>
 <input name="submit" type="submit" id="submit"  value="Delete"  />
              <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                <input type="button" name="button" id="button" value="Cancel" /></a>
              </p></td>
             
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