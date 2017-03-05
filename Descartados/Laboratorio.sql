create database Laboratorio;
use Laboratorio;
-- / Registro del usuario /--
-- creamos la tabla usuario.
create table usuario(
	idusuario int not null auto_increment,
    nombre varchar(45) not null,
    appaterno varchar(45) not null,
    apmaterno varchar(45) not null,
    matricula varchar(45) not null,
    constraint pk_idusuario primary key(idusuario) 
) engine = InnoDB;
-- creamos la tabla registro de usuario.
create table registro(
    idregistro  int not null auto_increment,
	nombre varchar(45) not null,
    pass varchar(45) not null,
    rpass varchar(45) not null,
    alta datetime not null,
    correo varchar(45) not null,
    tel varchar(45) not null,
	idusuario int not null,
    constraint pk_idregistro primary key(idregistro),
    constraint fk_registro_usuario  foreign key(idusuario) references usuario(idusuario)
) engine =InnoDB;
-- / Historial medico del paciente. /--
-- creamos la tabla de médico.
create table medico(
    idmedico int not null auto_increment,
    nombreMD varchar(45) not null,
    appaternoMD varchar(45) not null,
    apmaternoMD varchar(45) not null,
    matricula varchar(45) not null,
    constraint pk_idmedico primary key(idmedico)
)engine =InnoDB;
-- creamos la tabla tiempo de vida del paciente.
create table tiempo(
	idtiempo int not null auto_increment,
    edad varchar(45) not null,
    tiempoV datetime not null,
    constraint pk_idtiempo primary key(idtiempo)
)engine = InnoDB;
-- creamos la tabal del paciente.
create table paciente(
	idpaciente int not null auto_increment,
    nombre varchar(45) not null,
    appaterno varchar(45) not null,
    apmaterno varchar(45) not null,
    nacimiento datetime not null,
    numero varchar(45) not null,
    sexo varchar(45) not null,
	idtiempo int not null,
	constraint pk_idpaciente primary key(idpaciente),
    constraint fk_paciente_tiempo foreign key(idtiempo) references tiempo(idtiempo)
)engine = InnoDB;
-- creamos la tabla de achivo clinico del paciente.
create table archivos(
    idarchivos int not null auto_increment,
    titulo varchar(45),
    descripcion longtext,
    binario_archivo longblob,
    binario_nombre varchar(45),
    binario_peso varchar(15),
    binario_tipo varchar(25),
    constraint pk_idarchivos primary key(idarchivos)
)engine = InnoDB;
-- creamos la tabla de historia clinica
create table Hclinica(
    idHclinica int not null auto_increment,
	idmedico int not null,
	idpaciente int not null,
	idarchivos int not null,
	constraint pk_idHclinica primary key(idHclinica),
	constraint fk_Hclinica_medico foreign key(idmedico) references medico(idmedico),
	constraint fk_Hclinica_paciente foreign key(idpaciente) references paciente(idpaciente),
	constraint fk_Hclinica_archivos foreign key(idarchivos) references archivos(idarchivos)
)engine = InnoDB;
-- / Procesamiento de la muestra. /--
-- creamos la tabla de quimico analista.
create table quimico(
    idquimico int not null auto_increment,
    nombre varchar(45),
	appaterno varchar(45),
	apmaterno varchar(45),
	constraint pk_idquimico primary key(idquimico)
)engine = InnoDB;
-- cremos la tabla analisis de muestra procesada.
create table analisis(
    idanalisis int not null auto_increment,
	ensayo varchar(45),
	resultado varchar(45),
	observ text(45),
	fechaP datetime,
	constraint pk_idanalisis primary key(idanalisis)
)engine = InnoDB;
-- cremos la tabla de proceso de la muestra medica.
create table proceso(
    idproceso int not null auto_increment,
	folio varchar(45),
	protocolo varchar(45),
	tipomuestra varchar(45),
	fechaI timestamp,
	idquimico int not null,
	idanalisis int not null,
	constraint pk_proceso primary key(idproceso),
	constraint fk_proceso_quimico foreign key(idquimico) references quimico(idquimico),
	constraint fk_proceso_analisis foreign key(idanalisis) references analisis(idanalisis)
)engine = InnoDB;
-- / Registro del responsable  y captura de las muestras a analizar / --
-- caracteristicas de la mustra.
create table caracteristicas(
    idcaracteristicas int not null auto_increment,
	fechaR datetime,
	observ text(45),
	resguardo varchar(45),
	protocolo varchar(45),
	almacen varchar(45),
	constraint pk_caracteristicas primary key(idcaracteristicas)
)engine = InnoDB;
-- creamos la tabla muestra a capturar.
create table muestra(
    idmuestra int not null auto_increment,
	muestra varchar(45),
	contenedor varchar(45),
	umedida float,
	sufijo varchar(10),
	total decimal,
	idcaracteristicas int not null,
	constraint pk_muestra primary key(idmuestra),
	constraint fk_mustra_caracteristicas foreign key(idcaracteristicas) references caracteristicas(idcaracteristicas)
) engine = InnoDB;
-- creamos la tabla del responsable de la captura.
create table responsable(
    idresponsable int not null auto_increment,
    nombre varchar(45),
    appaternoMD varchar(45),
    apmaterno varchar(45),
	fecha time,
	hora date,
	constraint pk_responsable primary key(idresponsable)
)engine = InnoDB;
