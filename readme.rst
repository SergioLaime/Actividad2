Parte 1 Requerimiento Crear un API
Se tiene que crear un API que cree, actualice, eliminé y obtenga uno o más registros
Crear usuario, nombre completo, fecha de nacimiento, orientación sexual, email, teléfono, contraseña, validar el email, fecha mayor a 18 años y 
todos los campos son necesarios. El email debe ser único. El teléfono debe ser único.

Actualización de usuario, recibe como parámetro el ID del usuario, solo puede actualizar su nombre, fecha nacimiento, sexo, teléfono.
Haciendo las validaciones necesarias.

Actualización de contraseña recibe como parámetro el email del usuario, se debe utilizar un método nuevo de actualización, sin embargo, 
la contraseña se debe generar y enviar por correo.

Obtener usuario, recibe como parámetro el correo electrónico para obtener el usuario en caso de que esté parámetro no se envié regresara toda la lista de usuarios.
Eliminar usuario, recibe como parámetro el id del usuario y elimina dicho registro.


Parte 2 En caso que usen SQL el ID debe ser auto-incrementable, sin signo y único
En caso que usen nosql ya genera un ir
Será necesario implementar jwt(json web token) para la identificación del usuario
Se creará un método para validar el usuario con jwt en caso de que el usuario sea válido regresar un token con la siguiente información, ID, nombre, fecha, email. Recibe como parámetro el email y la contraseña enviada por email.
Los métodos de actualización, eliminar y obtener no podrán ser usados si no está el usuario identificado.
La contraseña que se creará automáticamente con mínimo una minúscula, mayúscula, número de 8 dígitos y está contraseña se envía al usuario por email antes de ser encriptada y guardada en la db.
Todos los métodos deben regresar un json con 3 respuestas 
•    Result tiene la respuesta de información del servidor o el nombre del error
•    Error tiene 1 si se encontró un error o 0 si no existe error
•    Status tiene 200, 400, etc dependiendo del la respuesta
Todos los métodos regresan un resultado sea o no sea un error.
Todos deben conectar el proyecto 1 con el 2.
Todos deben hacer un pequeño video de cómo funciona su API.
Todos deben subir por equipo a github
Ayudarse entre equipos
Agregar los usuarios que colaboraron y equipos que apoyaron.