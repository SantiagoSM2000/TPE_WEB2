# TPE_WEB2
Trabajo práctico especial de WEB 2

##Nombre integrantes:
Santiago Lopez Osornio - osorniosanty@gmail.com
Santiago San Martín - santisanmax@gmail.com

## Temática y breve descripción:

SISTEMA DE VENTA DE BIENES INMUEBLES

En esta base de datos, se establece una relación entre la tabla "Cliente" y la tabla "Inmueble" para gestionar y mantener registros de los clientes y las propiedades inmobiliarias asociadas a ellos. Cada entrada en la tabla "Cliente" representa un cliente que puede estar interesado en comprar, alquilar o vender propiedades. Por otro lado, la tabla "Inmueble" contiene información detallada sobre cada propiedad, como dirección, características, precio, estado, etc.


## Diagrama de entidad relación (DER) 

Cliente (uno) - Inmueble (muchos): Esto significa que un cliente puede estar asociado con varios inmuebles, pero un inmueble está asociado a un único cliente. La clave foránea "cliente_id" en la tabla "Inmueble" se utiliza para establecer esta relación. Cada registro en la tabla "Inmueble" hace referencia a un único cliente mediante su "cliente_id", lo que indica la propiedad del cliente sobre ese inmueble.

Esta tabla muestra la estructura de las tablas "Cliente" e "Inmueble", incluyendo los campos, los tipos de datos y los tipos de clave (clave primaria y clave foránea) que se utilizan en cada una de ellas.

* Tabla Cliente:
  * Cliente_ID: INT (entero) - Clave primaria, autoincremental
  * Nombre: VARCHAR (cadena de caracteres de longitud variable) - Para almacenar el nombre del cliente.
  * Apellido: VARCHAR - Para almacenar el apellido del cliente.
  * Correo electrónico: VARCHAR - Para almacenar la dirección de correo electrónico del cliente.
  * Teléfono: VARCHAR - Para almacenar el número de teléfono del cliente.
  * Estado: VARCHAR - Para almacenar el estado del cliente (Inquilino, comprador).

* Tabla Inmueble:
  * Inmueble_ID: INT - Clave primaria, autoincremental
  * Dirección: VARCHAR - Para almacenar la dirección del inmueble.
  * Tipo de propiedad: VARCHAR - Para almacenar el tipo de propiedad (casa, apartamento, terreno, etc.).
  * Precio: DECIMAL (o FLOAT) - Para almacenar el precio del inmueble.
  * Estado: VARCHAR - Para almacenar el estado del inmueble (disponible, vendido, alquilado, etc.).
  * Cliente_ID: INT - Clave foránea que hace referencia al Cliente_ID en la tabla Cliente, para establecer la relación entre clientes e inmuebles.
