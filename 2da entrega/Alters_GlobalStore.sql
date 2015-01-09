--Alters--

alter table LUGAR add constraint LUGAR_LUGAR foreign key (FK_LUGAR) references LUGAR (id_lugar) on delete cascade;

alter table SISTEMA add constraint SISTEMA_COMPAÑIA foreign key (FK_COMPAÑIA) references COMPAÑIA (id_compañia) on delete cascade;

alter table VERSION add constraint VERSION_SISTEMA foreign key (FK_SISTEMA) references SISTEMA (id_sistema) on delete cascade;

alter table SISTEMA_CARACTERISTICA add constraint SISTEMA_CARACTERISTICA_SISTEMA foreign key (FK_SISTEMA) references SISTEMA (id_sistema) on delete cascade;
alter table SISTEMA_CARACTERISTICA add constraint SISTEMA_CARACTERISTICA_CARACTERISTICA foreign key (FK_CARACTERISTICA) references CARACTERISTICA (id_caracteristica) on delete cascade;

alter table VERSION_CARACTERISTICA add constraint VERSION_CARACTERISTICA_VERSION foreign key (FK_VERSION) references VERSION (id_version) on delete cascade;
alter table VERSION_CARACTERISTICA add constraint VERSION_CARACTERISTICA_CARACTERISTICA foreign key (FK_CARACTERISTICA) references CARACTERISTICA (id_caracteristica) on delete cascade;

alter table EMPRESA_PERSONA add constraint EMPRESA_PERSONA_LUGAR foreign key (FK_LUGAR) references LUGAR (id_lugar) on delete cascade;

alter table ACCION_ROL add constraint ACCION_ROL_ACCION foreign key (FK_ACCION) references ACCION (id_accion) on delete cascade;
alter table ACCION_ROL add constraint ACCION_ROL_ROL foreign key (FK_ROL) references ROL (id_rol) on delete cascade;

alter table TARJETA add constraint TARJETA_BANCO foreign key (FK_BANCO) references BANCO (id_banco) on delete cascade;
alter table TARJETA add constraint TARJETA_CLIENTE foreign key (FK_CLIENTE) references CLIENTE (FK_PERSONA) on delete cascade;
alter table TARJETA add constraint TARJETA_TIPO_TARJETA foreign key (FK_TIPO_TARJETA) references TIPO_TARJETA (id_tipo_tarjeta) on delete cascade;

alter table FACTURA add constraint FK_FACTURA_TARJETA foreign key (FK_TARJETA) references TARJETA (id_tarjeta) on delete cascade;

alter table PELICULA_ACTOR_DIRECTOR_CANTANTE add constraint PELICULA_ACTOR_DIRECTOR_CANTANTE_PELICULA foreign key (FK_PELICULA) references PELICULA (FK_CONTENIDO) on delete cascade;
alter table PELICULA_ACTOR_DIRECTOR_CANTANTE add constraint PELICULA_ACTOR_DIRECTOR_CANTANTE_ACTOR_DIRECTOR_CANTANTE foreign key (FK_ACTOR_DIRECTOR_CANTANTE) references ACTOR_DIRECTOR_CANTANTE (id_actor_director_cantante) on delete cascade;

alter table PELICULA_GENERO_CATEGORIA add constraint PELICULA_GENERO_CATEGORIA_PELICULA foreign key (FK_PELICULA) references PELICULA (FK_CONTENIDO) on delete cascade;
alter table PELICULA_GENERO_CATEGORIA add constraint PELICULA_GENERO_CATEGORIA_GENERO_CATEGORIA foreign key (FK_GENERO_CATEGORIA) references GENERO_CATEGORIA (id_genero_categoria) on delete cascade;

alter table MUSICA_ACTOR_DIRECTOR_CANTANTE add constraint MUSICA_ACTOR_DIRECTOR_CANTANTE_MUSICA foreign key (FK_MUSICA) references MUSICA (FK_CONTENIDO) on delete cascade;
alter table MUSICA_ACTOR_DIRECTOR_CANTANTE add constraint MUSICA_ACTOR_DIRECTOR_CANTANTE_ACTOR_DIRECTOR_CANTANTE foreign key (FK_ACTOR_DIRECTOR_CANTANTE) references ACTOR_DIRECTOR_CANTANTE (id_actor_director_cantante) on delete cascade;

alter table MUSICA_GENERO_CATEGORIA add constraint MUSICA_GENERO_CATEGORIA_GENERO_CATEGORIA foreign key (FK_GENERO_CATEGORIA) references GENERO_CATEGORIA (id_genero_categoria) on delete cascade;
alter table MUSICA_GENERO_CATEGORIA add constraint MUSICA_GENERO_CATEGORIA_MUSICA foreign key (FK_MUSICA) references MUSICA (FK_CONTENIDO) on delete cascade;

alter table LIBRO_GENERO_CATEGORIA add constraint LIBRO_GENERO_CATEGORIA_LIBRO foreign key (FK_LIBRO) references LIBRO (FK_CONTENIDO) on delete cascade;
alter table LIBRO_GENERO_CATEGORIA add constraint LIBRO_GENERO_CATEGORIA_GENERO_CATEGORIA foreign key (FK_GENERO_CATEGORIA) references GENERO_CATEGORIA (id_genero_categoria) on delete cascade;

alter table EMPLEADO add constraint EMPLEADO_PERSONA foreign key (FK_PERSONA) references PERSONA (id_persona) on delete cascade;
alter table EMPLEADO add constraint EMPLEADO_ROL foreign key (FK_ROL) references ROL (id_rol) on delete cascade;

alter table CLIENTE add constraint CLIENTE_PERSONA foreign key (FK_PERSONA) references PERSONA (id_persona) on delete cascade;
alter table CLIENTE add constraint CLIENTE_LUGAR foreign key (FK_LUGAR) references LUGAR (id_lugar) on delete cascade;

alter table TELEFONO add constraint TELEFONO_PERSONA foreign key (FK_PERSONA) references PERSONA (id_persona) on delete cascade;

alter table CORREO add constraint FK_CORREO_PERSONA  foreign key (FK_PERSONA) references PERSONA (id_persona) on delete cascade;
alter table CORREO add constraint CORREO_EMPRESA_PERSONA foreign key (FK_EMPRESA_PERSONA) references EMPRESA_PERSONA (id_empresa_persona) on delete cascade;

alter table HISTORIAL add constraint HISTORIAL_PERSONA foreign key (FK_PERSONA) references PERSONA (id_persona) on delete cascade;
alter table HISTORIAL add constraint HISTORIAL_ACCION foreign key (FK_ACCION) references ACCION (id_accion) on delete cascade;
alter table HISTORIAL add constraint HISTORIAL_ROL foreign key (FK_ROL) references ROL (id_rol) on delete cascade;
alter table HISTORIAL add constraint HISTORIAL_PROMOCION foreign key (FK_PROMOCION) references PROMOCION (id_promocion) on delete cascade;
alter table HISTORIAL add constraint HISTORIAL_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;

alter table EMPLEADO_CARGO add constraint EMPLEADO_CARGO_EMPLEADO foreign key (FK_EMPLEADO) references EMPLEADO (FK_PERSONA) on delete cascade;
alter table EMPLEADO_CARGO add constraint EMPLEADO_CARGO_CARGO foreign key (FK_CARGO) references CARGO (id_cargo) on delete cascade;

alter table CONDICION add constraint CONDICION_PROMOCION foreign key (FK_PROMOCION) references PROMOCION (id_promocion) on delete cascade;

alter table CALIFICACION add constraint CALIFICACION_CLIENTE foreign key (FK_CLIENTE) references CLIENTE (FK_PERSONA) on delete cascade;
alter table CALIFICACION add constraint CALIFICACION_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;

alter table COMENTARIO add constraint COMENTARIO_CLIENTE foreign key (FK_CLIENTE) references CLIENTE (FK_PERSONA) on delete cascade;
alter table COMENTARIO add constraint COMENTARIO_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;

alter table FACTURA_CONTENIDO add constraint FACTURA_CONTENIDO_FACTURA foreign key (FK_FACTURA) references FACTURA (id_factura) on delete cascade;
alter table FACTURA_CONTENIDO add constraint FACTURA_CONTENIDO_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;
alter table FACTURA_CONTENIDO add constraint FACTURA_CONTENIDO_PROMOCION foreign key (FK_PROMOCION) references PROMOCION (id_promocion) on delete cascade;

alter table SISTEMA_CONTENIDO add constraint SISTEMA_CONTENIDO_SISTEMA foreign key (FK_SISTEMA) references SISTEMA (id_sistema) on delete cascade;
alter table SISTEMA_CONTENIDO add constraint SISTEMA_CONTENIDO_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;

alter table VIDEO_IMAGEN add constraint VIDEO_IMAGEN_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;

alter table PELICULA_IDIOMA add constraint PELICULA_IDIOMA_PELICULA foreign key (FK_PELICULA) references PELICULA (FK_CONTENIDO) on delete cascade;
alter table PELICULA_IDIOMA add constraint PELICULA_IDIOMA_IDIOMA foreign key (FK_IDIOMA) references IDIOMA (id_idioma) on delete cascade;

alter table AUTOR_LIBRO add constraint AUTOR_LIBRO_AUTOR foreign key (FK_AUTOR) references AUTOR (id_autor) on delete cascade;
alter table AUTOR_LIBRO add constraint AUTOR_LIBRO_LIBRO foreign key (FK_LIBRO) references LIBRO (FK_CONTENIDO) on delete cascade;

alter table CONTENIDO add constraint CONTENIDO_PROMOCION foreign key (FK_PROMOCION) references PROMOCION (id_promocion) on delete cascade;

alter table APLICACION add constraint APLICACION_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;
alter table APLICACION add constraint APLICACION_EMPRESA_PERSONA foreign key (FK_EMPRESA_PERSONA) references EMPRESA_PERSONA (id_empresa_persona) on delete cascade;

alter table PELICULA add constraint PELICULA_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;

alter table MUSICA add constraint MUSICA_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;
alter table MUSICA add constraint MUSICA_DISQUERA_EDITORIAL foreign key (FK_DISQUERA_EDITORIAL) references DISQUERA_EDITORIAL (id_disquera_editorial) on delete cascade;

alter table LIBRO add constraint LIBRO_CONTENIDO foreign key (FK_CONTENIDO) references CONTENIDO (id_contenido) on delete cascade;
alter table LIBRO add constraint LIBRO_DISQUERA_EDITORIAL foreign key (FK_DISQUERA_EDITORIAL) references DISQUERA_EDITORIAL (id_disquera_editorial) on delete cascade;

--CHECKS--

alter table PERSONA add constraint CK_TIPO_PERSONA check (tipo_persona in ('Empleado', 'Cliente'));

alter table EMPLEADO add constraint CK_GRUPO_SANGUINEO_EMPLEADO check (grupo_sanguineo_empleado in ('O-','O+','A-','A+','B-','B+','AB-','AB+'));
alter table EMPLEADO add constraint CK_NIVEL_EDUCATIVO_EMPLEADO check (nivel_educativo_empleado in ('Bachiller','Tecnico','Superior','Licenciado'));
alter table EMPLEADO add constraint CK_MOTIVO_EMPLEADO check (motivo_empleado in ('Renuncia','Despido'));

alter table CLIENTE add constraint CK_ESTADO_CIVIL_CLIENTE check (estado_civil_cliente in ('Soltero','Casado','Divorciado','Viudo'));

alter table CALIFICACION add constraint CK_VALOR_CALIFICACION check (valor_calificacion in (1,2,3,4,5));

alter table LUGAR add constraint CK_TIPO_LUGAR check (tipo_lugar in ('Pais','Estado','Ciudad','Urbanizacion','Calle','CodigoPostal','Apartamento'));

alter table EMPRESA_PERSONA add constraint CK_TIPO_EMPRESA_PERSONA check (tipo_empresa_persona in ('Empresa','Persona'));

alter table PELICULA_IDIOMA add constraint CK_TIPO_PELICULA_IDIOMA check (tipo_pelicula_idioma in ('Audio','Subtitulo'));

alter table APLICACION add constraint CK_TIPO_CALIFICACION_APLICACION check (tipo_calificacion_aplicacion in ('Para Niños','Para Todos','Para Adultos','Para Adolescentes'));

alter table ACTOR_DIRECTOR_CANTANTE add constraint CK_TIPO_ACTOR_DIRECTOR_CANTANTE check (tipo_actor_director_cantante in ('Actor','Director','Cantante'));

alter table VIDEO_IMAGEN add constraint CK_TIPO_VIDEO_IMAGEN check (tipo_video_imagen in ('Video','Imagen'));

alter table MUSICA add constraint CK_TIPO_FORMATO_MUSICA check (tipo_formato_musica in ('mp3','mp4','aac','wma','wav','atrac','m4p'));

alter table CONTENIDO add constraint CK_TIPO_CONTENIDO check (tipo_contenido in ('Aplicacion','Pelicula','Musica','Libro'));

alter table DISQUERA_EDITORIAL add constraint CK_TIPO_DISQUERA_EDITORIAL check (tipo_disquera_editorial in ('Disquera','Editorial'));

alter table GENERO_CATEGORIA add constraint CK_TIPO_GENERO_CATEGORIA check (tipo_genero_categoria in ('Genero','Categoria'));

alter table SISTEMA add constraint CK_TIPO_SISTEMA check (tipo_SO_sistema in ('Propietario','Codigo Abierto'));

alter table ROL add constraint CK_NOMBRE_ROL check (nombre_rol in ('Administrador del Sistema','Administrador de Contenidos','Revisor de Contenidos'));

--UNIQUES--

alter table ACCION_ROL add constraint UQ_ACCION_ROL unique (FK_ACCION,FK_ROL);
