CREATE TABLE persona (
  cedula varchar(10) PRIMARY KEY,
  nonbre varchar(50),
  correo varhar(50),
  telefono varchar(50)
);

CREATE TABLE odontologo (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cedula varchar(10),
  INDEX (cedula),
  FOREIGN KEY (cedula) REFERENCES persona(cedula)
);

CREATE TABLE paciente (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cedula varchar(10),
  INDEX (cedula),
  FOREIGN KEY (cedula) REFERENCES persona(cedula)
);

CREATE TABLE auxiliar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cedula varchar(10),
  INDEX (cedula),
  FOREIGN KEY (cedula) REFERENCES persona(cedula)
);

CREATE TABLE administrador (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  cedula varchar(10),
  INDEX (cedula),
  FOREIGN KEY (cedula) REFERENCES persona(cedula)
);

CREATE TABLE colsultorio (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nombre varchar(50),
  direccion varchar(50),
  correo varhar(30),
  telefono varhar(10)
);

CREATE TABLE consultorio_persona (
  id_consiltorio INT NOT NULL,
  cedula_p varchar(10),
  INDEX (id_consiltorio),
  INDEX (cedula_p),
  FOREIGN KEY (id_consiltorio) REFERENCES cosnultorio(id),
  FOREIGN KEY (cedula_p) REFERENCES persona(cedula)
);

CREATE TABLE consultorio_auxialiar (
  cedula_a varhar(50),
  id_consiltorio INT NOT NULL,
  CONSTRAINT consul_auxi PRIMARY KEY (cedula_a, id_consiltorio)
);

CREATE TABLE especialidad (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nombre varhar(50)
);

CREATE TABLE odontologo_especialidad (
  id_especialidad INT NOT NULL,
  cedula_o INT NOT NULL,
  CONSTRAINT odont_espec PRIMARY KEY (id_especialidad, cedula_o),
  INDEX (id_especialidad),
  INDEX (cedula_o),
  FOREIGN KEY (id_especialidad) REFERENCES especialidad(id),
  FOREIGN KEY (cedula_o) REFERENCES odontologo(id),
);

CREATE TABLE cita (
  numero_cita INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  fecha_solicitud date NOT NULL,
  cedula_p INT NOT NULL,
  id_consultorio INT NOT NULL,
  fecha_asignada date NOT NULL,
  cedula_o INT NOT NULL,
  INDEX (cedula_p),
  INDEX (cedula_o),
  INDEX (id_consultorio)
  FOREIGN KEY (id_consultorio) REFERENCES consultorio(id),
  FOREIGN KEY (cedula_o) REFERENCES odontologo(id),
  FOREIGN KEY (cedula_p) REFERENCES paciente(id),
);

CREATE TABLE atencion_cita (
  numero_cita INT NOT NULL PRIMARY KEY,
  fecha_asignada date NOT NULL
);

CREATE TABLE procedimiento_paciente (
  id_procedimiento INT NOT NULL,
  cecula_p INT not NULL,
  INDEX (cedula_p),
  INDEX (id_procedimiento),
  CONSTRAINT proce_paci PRIMARY KEY (cedula_p, id_procedimiento),
  FOREIGN KEY (cedula_p) REFERENCES paciente(id),
  FOREIGN KEY (id_procedimiento) REFERENCES procedimiento(id),
);

CREATE TABLE procedimiento (
  id INT AUTO_INCREMENT PRIMARY KEY NOT null,
  nombre varhar(50)
);

CREATE TABLE factura_paciente (
  id_factura INT,
  cedula_p INT,
  INDEX (cedula_p),
  INDEX (id_factura),
  CONSTRAINT fact_paci PRIMARY KEY (cedula_p, id_factura),
  FOREIGN KEY (id_factura) REFERENCES factura(id),
  FOREIGN KEY (cedula_p) REFERENCES paciente(id),
);

CREATE TABLE factura (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  fecha date,
  valor INT,
  pago varchar (20)
);
