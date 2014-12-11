--Creates--

create table LUGAR(
id_lugar			integer			not null	unique,
nombre_lugar		varchar(100)	not null,
tipo_lugar			varchar(100)	not null,
FK_LUGAR			integer,
constraint pk_lugar primary key (id_lugar));

create table COMPAÑIA(
id_compañia			integer			not null	unique,
nombre_compañia		varchar(100)	not null,
constraint pk_compañia primary key (id_compañia));

create table SISTEMA(
id_sistema					integer			not null	unique,
nombre_sistema				varchar(100)	not null,
fecha_lanzamiento_sistema	date			not null,
tipo_SO_sistema				varchar(100)	not null,
FK_COMPAÑIA					integer			not null,---ojo---
constraint pk_sistema primary key (id_sistema));

create table VERSION(
id_version					integer			not null	unique,
nombre_version				varchar(100)	not null,
fecha_distribucion_version	date			not null,
FK_SISTEMA					integer			not null,---ojo---
constraint pk_version primary key (id_version));

create table CARACTERISTICA(
id_caracteristica				integer			not null	unique,
descripcion_caracteristica		varchar(3000)	not null,
constraint pk_caracteristica primary key (id_caracteristica));

create table SISTEMA_CARACTERISTICA(
FK_SISTEMA						integer		not null	unique,---ojo---
FK_CARACTERISTICA				integer		not null	unique,---ojo---
constraint pk_sistema_caracteristica primary key (FK_SISTEMA,FK_CARACTERISTICA));

create table VERSION_CARACTERISTICA(
FK_VERSION						integer		not null	unique,---ojo---
FK_CARACTERISTICA				integer		not null	unique,---ojo---
constraint pk_version_caracteristica primary key (FK_VERSION,FK_CARACTERISTICA));

create table PROMOCION(
id_promocion					integer			not null	unique,
nombre_promocion				varchar(100)	not null,
status_promocion				boolean			not null,
valor_promocion					float			not null,
descripcion_promocion			varchar(3000)	not null,
fecha_inicio_promocion			date			not null,
fecha_culminacion_promocion		date			not null,
constraint pk_promocion primary key (id_promocion));

create table AUTOR(
id_autor		integer			not null	unique,
nombre_autor	varchar(100)	not null,
reseña_autor	varchar(900)	not null,
constraint pk_autor primary key (id_autor));

create table IDIOMA(
id_idioma			integer			not null	unique,
lenguaje_idioma		varchar(100)	not null,
constraint pk_idioma primary key (id_idioma));

create table EMPRESA_PERSONA(
id_empresa_persona			integer			not null	unique,
nombre_empresa_persona		varchar(100)	not null,
sitio_web_empresa_persona	varchar(100)	not null,
tipo_empresa_persona		varchar(100)	not null,
FK_LUGAR					integer			not null,---ojo---
constraint pk_empresa_persona primary key (id_empresa_persona));

create table CARGO(
id_cargo		integer			not null	unique,
nombre_cargo	varchar(100)	not null,
salario_cargo	float			not null,
constraint pk_cargo primary key (id_cargo));

create table ROL(
id_rol			integer			not null	unique,
nombre_rol		varchar(100)	not null,
constraint pk_rol primary key (id_rol));

create table ACCION(
id_accion		integer			not null,
nombre_accion	varchar(256)	not null,
constraint pk_accion primary key (id_accion));

create table ACCION_ROL(
FK_ACCION	integer		not null		unique,---ojo---
FK_ROL		integer		not null		unique,---ojo---
constraint pk_accion_rol primary key (FK_ACCION,FK_ROL));

create table BANCO(
id_banco		integer			not null	unique,
nombre_banco	varchar(100)	not null,
constraint pk_banco primary key (id_banco));

create table TARJETA(
id_tarjeta					integer			not null	unique,
status_tarjeta				boolean			not null,
nombre_tarjeta				varchar(100)	not null,
fecha_vencimiento_tarjeta	varchar(100)	not null,
digitos_tarjeta				varchar(100)	not null,
FK_BANCO					integer			not null,---OJO---
FK_CLIENTE					integer			not null,---ojo---
FK_TIPO_TARJETA				integer			not null,---OJO---
constraint pk_tarjeta primary key (id_tarjeta));

create table TIPO_TARJETA(
id_tipo_tarjeta			integer			not null	unique,
nombre_tipo_tarjeta		varchar(100)	not null,
constraint pk_tipo_tarjeta primary key (id_tipo_tarjeta));

create table FACTURA(
id_factura				integer		not null	unique,
fecha_emision_factura	date		not null,	
subTotal_factura		float		not null,
total_factura			float		not null,
fecha_pago_factura		date,
FK_TARJETA				integer,
constraint pk_factura primary key (id_factura));

create table ACTOR_DIRECTOR_CANTANTE(
id_actor_director_cantante			integer			not null	unique,
tipo_actor_director_cantante		varchar(100)	not null,
nombre_actor_director_cantante		varchar(100)	not null,
apellido_actor_director_cantante	varchar(100)	not null,
constraint pk_actor_director_cantante primary key (id_actor_director_cantante));

create table GENERO_CATEGORIA(
id_genero_categoria			integer			not null	unique,
tipo_genero_categoria		varchar(100)	not null,
nombre_genero_categoria		varchar(100)	not null,
constraint pk_genero_categoria primary key (id_genero_categoria));

create table DISQUERA_EDITORIAL(
id_disquera_editorial		integer			not null	unique,
tipo_disquera_editorial		varchar(100)	not null,
nombre_disquera_editorial	varchar(100)	not null,
constraint pk_disquera_editorial primary key (id_disquera_editorial));

create table PELICULA_ACTOR_DIRECTOR_CANTANTE(
FK_PELICULA						integer		not null	unique,---ojo---
FK_ACTOR_DIRECTOR_CANTANTE		integer		not null	unique,---ojo---
constraint pk_pelicula_actor_director_cantante primary key (FK_PELICULA,FK_ACTOR_DIRECTOR_CANTANTE));

create table PELICULA_GENERO_CATEGORIA(
FK_PELICULA				integer		not null	unique,---ojo---
FK_GENERO_CATEGORIA		integer		not null	unique,---ojo---
constraint pk_pelicula_genero_categoria primary key (FK_PELICULA,FK_GENERO_CATEGORIA));

create table MUSICA_ACTOR_DIRECTOR_CANTANTE(
FK_MUSICA						integer		not null	unique,---ojo---
FK_ACTOR_DIRECTOR_CANTANTE		integer		not null	unique,---ojo---
constraint pk_musica_actor_director_cantante primary key (FK_MUSICA,FK_ACTOR_DIRECTOR_CANTANTE));

create table MUSICA_GENERO_CATEGORIA(
FK_MUSICA				integer		not null	unique,---ojo---
FK_GENERO_CATEGORIA		integer		not null	unique,---ojo---
constraint pk_musica_genero_categoria primary key (FK_MUSICA,FK_GENERO_CATEGORIA));

create table LIBRO_GENERO_CATEGORIA(
FK_LIBRO				integer		not null	unique,---ojo---
FK_GENERO_CATEGORIA		integer		not null	unique,---ojo---
constraint pk_libro_genero_categoria primary key (FK_LIBRO,FK_GENERO_CATEGORIA));

create table PERSONA(
id_persona					integer			not null	unique,
primer_nombre_persona		varchar(100)	not null,
segundo_nombre_persona		varchar(100),
primer_apellido_persona		varchar(100)	not null,
segundo_apellido_persona	varchar(100),
fecha_nacimiento_persona	date			not null,
status_persona				boolean			not null,
tipo_persona				varchar(100)	not null,
usuario_persona				varchar(100)	not null,
clave_persona				varchar(100)	not null,
constraint pk_persona primary key (id_persona));

create table EMPLEADO(
nivel_educativo_empleado		varchar(100)	not null,
fecha_ingreso_empleado			date			not null,
grupo_sanguineo_empleado		varchar(100)	not null,
fecha_acceso_empleado			date			not null,
fecha_culminacion_empleado		date,
motivo_empleado					varchar(100),
FK_ROL							integer			not null,---ojo---
FK_PERSONA						integer			not null,---ojo---
constraint pk_empleado primary key (FK_PERSONA));

create table CLIENTE(
estado_civil_cliente		varchar(100)	not null,
fecha_registro_cliente		date			not null,
FK_PERSONA					integer			not null,---ojo---
FK_LUGAR					integer			not null,---ojo---
constraint pk_cliente primary key (FK_PERSONA));

create table TELEFONO(
id_telefono			integer			not null	unique,
numero_telefono		varchar(100)	not null,
FK_PERSONA			integer,
constraint pk_telefono primary key (id_telefono));

create table CORREO(
id_correo				integer			not null	unique,
cuenta_correo			varchar(100)	not null,
FK_PERSONA				integer,
FK_EMPRESA_PERSONA		integer,
constraint pk_correo primary key (id_correo));

create table HISTORIAL(
id_historial				integer			not null	unique,
fecha_inicio_historial		date			not null,
fecha_fin_historial			date,
ip_historial				varchar(100),
FK_PERSONA					integer			not null,---ojo---
FK_ACCION				    integer			not null,---ojo---
FK_ROL                      integer			not null,---ojo---
FK_PROMOCION				integer,
FK_CONTENIDO				integer,
constraint pk_historial primary key (id_historial));

create table EMPLEADO_CARGO(
FK_EMPLEADO		integer		not null	unique,---ojo---
FK_CARGO		integer		not null	unique,---ojo---
constraint pk_empleado_cargo primary key (FK_EMPLEADO,FK_CARGO));

create table CONDICION(
id_condicion				integer			not null	unique,
descripcion_condicion		varchar(3000)	not null,
FK_PROMOCION				integer,
constraint pk_condicion primary key (id_condicion));

create table CALIFICACION(
id_calificacion			integer		not null	unique,
hora_calificacion		time		not null,
fecha_calificacion		date		not null,
valor_calificacion		integer		not null,
FK_CLIENTE				integer		not null,---ojo---
FK_CONTENIDO			integer,
constraint pk_calificacion primary key (id_calificacion));

create table COMENTARIO(
id_comentario				integer			not null	unique,
hora_comentario				time			not null,
fecha_comentario			date			not null,
contenido_comentario		varchar(3000)	not null,
FK_CLIENTE					integer			not null,---ojo---
FK_CONTENIDO				integer,
constraint pk_comentario primary key (id_comentario));

create table FACTURA_CONTENIDO(
FK_FACTURA			integer		not null	unique,---ojo---
FK_CONTENIDO		integer		not null	unique,---ojo---
FK_PROMOCION		integer,
constraint pk_factura_contenido primary key (FK_FACTURA,FK_CONTENIDO));

create table SISTEMA_CONTENIDO(
FK_SISTEMA			integer		not null	unique,---ojo---
FK_CONTENIDO		integer		not null	unique,---ojo---
constraint pk_sistema_contenido primary key (FK_SISTEMA,FK_CONTENIDO));

create table VIDEO_IMAGEN(
id_video_imagen			integer			not null	unique,
tipo_video_imagen		varchar(100)	not null,
ruta_video_imagen		varchar(200)	not null,
FK_CONTENIDO			integer,
constraint pk_video_imagen primary key (id_video_imagen));

create table PELICULA_IDIOMA(
tipo_pelicula_idioma		varchar(100)	not null,
FK_PELICULA					integer		not null	unique,---ojo---
FK_IDIOMA					integer		not null	unique,---ojo---
constraint pk_pelicula_idioma primary key (FK_PELICULA,FK_IDIOMA));

create table AUTOR_LIBRO(
FK_AUTOR		integer		not null	unique,---ojo---
FK_LIBRO		integer		not null	unique,---ojo---
constraint pk_autor_libro primary key (FK_AUTOR,FK_LIBRO));

create table CONTENIDO(
id_contenido					integer			not null	unique,
nombre_contenido				varchar(100)	not null,
costo_contenido					float			not null,
veces_valorada_contenido		integer			not null,
veces_descargada_contenido		integer			not null,
fecha_contenido					date			not null,
tipo_contenido					varchar(100)	not null,
FK_PROMOCION					integer,
constraint pk_contenido primary key (id_contenido));

create table APLICACION(
descripcion_aplicacion				varchar(500)	not null,
tamaño_aplicacion					varchar(100)	not null,
version_actual_aplicacion			varchar(100)	not null,
version_minima_SO_aplicacion		varchar(100)	not null,
tipo_calificacion_aplicacion		varchar(100)	not null,
FK_EMPRESA_PERSONA					integer			not null,---ojo---
FK_CONTENIDO						integer			not null,---ojo---
constraint pk_aplicacion primary key (FK_CONTENIDO));

create table PELICULA(
descripcion_pelicula		varchar(1000)	not null,
duracion_pelicula			varchar(100)	not null,
FK_CONTENIDO				integer			not null,---ojo---
constraint pk_pelicula primary key (FK_CONTENIDO));

create table MUSICA(
numero_canciones_musica		integer			not null,
tipo_formato_musica			varchar(100)	not null,
FK_DISQUERA_EDITORIAL		integer			not null,---ojo---
FK_CONTENIDO				integer			not null,---ojo---
constraint pk_musica primary key (FK_CONTENIDO));

create table LIBRO(
descripcion_libro			varchar(1000)	not null,
numero_paginas_libro		integer			not null,
codigo_ISBN_libro			varchar(100)	not null	unique,---ojo---
FK_DISQUERA_EDITORIAL		integer			not null,---ojo---
FK_CONTENIDO				integer			not null,---ojo---
constraint pk_libro primary key (FK_CONTENIDO));


