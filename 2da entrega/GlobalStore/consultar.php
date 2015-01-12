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
print "</table>"; 

}
/* 
				//	SISTEMA OPERATIVO con COMPAÑIA
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
*/

					// SISTEMA con CARACTERISTICA
/*
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
*/


/*
					CARGAR COMBO BOX DE COMPAÑIA EN SISTEMA
					//include ("conexion.php");
					$result = pg_query($conexion , "select nombre_compañia,id_compañia from COMPAÑIA" );
			?>
                	<select name="compañia" class="re" >
                	  <!--<option value="null">Todas las Ciudades</option>-->
                        <?php
                			while ($fila = pg_fetch_row($result)) {
                    	?>
                        <option value="<?php echo $fila[1];?>"><?php echo $fila[0];?></option>
                    	<?php
                		}
                		?>
        			</select>
            */
			
/*
				//VERSION con CARACTERISTICA			
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
*/

/*
				//VERSION con SO
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
*/

/*
				//AUTOR
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
*/

/*
				//SISTEMA_CONTENIDO
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
*/

/*
				//AUTOR_LIBRO
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
*/

/*
				//LIBRO_GENERO_CATEGORIA
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
*/

/*
				//LIBRO
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
*/

/*
			//DISQUERA_EDITORIAL
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
*/

/*
				//MUSICA
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
*/

/*
				//PELICULA
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
*/

/*
				//APLICACION
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
*/

/*
				//CONTENIDO
if (strcasecmp($valor,'Content')==0){
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
*/

/*
				//VIDEO_IMAGEN
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
*/

/*
				//GENERO_CATEGORIA
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
*/

/*
				//MUSICA_GENERO_CATEGORIA
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
*/

/*
				//MUSICA_ACTOR_DIRECTOR_CANTANTE
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
*/

/*
				//PELICULA_IDIOMA
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
*/

/*
				//IDIOMA
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
*/

/*
				//PELICULA_ACTOR_DIRECTOR_CANTANTE
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
*/

/*
				//ACTOR_DIRECTOR_CANTANTE
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
*/

/*
				//PELICULA_GENERO_CATEGORIA
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
*/

/*
				//PROMOCION
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
*/

/*
				//FACTURA_CONTENIDO
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
*/

/*
				//CONDICION
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
*/

/*
				//BANCO
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
*/

/*
				//TIPO_TARJETA
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
*/

/*
				//ACCION
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
*/

/*
				//ROL
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
*/

/*
				//ACCION_ROL
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
*/

/*
				//PERSONA
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
*/

/*
				//TELEFONO
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
*/

/*
				//CORREO
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
*/

/*
				//EMPLEADO    ojo con el motivo revisar inserts
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
*/

/*
					//CARGO
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
*/

/*
					//EMPLEADO_CARGO
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
*/

/*
					//CLIENTE
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
*/

/*
					//EMPRESA_PERSONA
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
*/

/*
				//FACTURA    ---ojo probar agragando la foranea de cliente q falta
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
*/

/*
				//TARJETA    --faltan inserst de tipo tarjeta
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
*/

/*
				//CALIFICACION
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
*/

/*
				//COMENTARIO
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
*/

/*
				//HISTORIAL
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
*/


				//LUGAR --ojo acomodar de los de fifi
/*$result=pg_query($conexion,"select tipo_lugar,nombre_lugar,(select nombre_lugar from LUGAR where FK_LUGAR=id_lugar) from LUGAR");
print "<table BORDER=1 WIDTH=300>";
 print "<tr>";
 print " <td> Tipo</td>";
 print " <td> Nombre</td>";
 print " <td> Lugar</td>";
 print "</tr>";
while ($row = pg_fetch_row($result)) {
 print "<tr>";
 print " <td> $row[0]</td>";
 print " <td> $row[1]</td>";
 print " <td> $row[2]</td>";
 print "</tr>";
}
print "</table>";
*/
?>
