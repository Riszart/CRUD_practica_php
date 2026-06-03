# crear base de datos academico
  CREATE DATABASE academico;
  
# crear tabla estudiantes con 4 atributos
  CREATE TABLE estudiantes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCAHR(100),
    carrera VARCAHR(100),
    ciclo INT
  )

- id int
- nombre varchar
- carrera varchar
- ciclo int
