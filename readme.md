<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
BACKEND PARA A GESTION DE TAREAS
</p>

## Acerca del proyecto

Backend desarrollado en laravel para la gestión de tareas.

Este proyecto incluye los siguientes servicios:

Descripción Métodos del Servicios Web
Nombre: Consultar Tareas
Método HTTP: GET
Path: /tareas/consultar
Parámetros: Los necesarios para que el usuario pueda consultar las tareas
programadas por diversos criterios:
Consultar todas las tareas (incluidas las de otros usuarios) Consultar solo mis
tareas (las de usuario autenticado)

Consultar solo tareas finalizadas, solo las que están pendientes o todas sin
importar su estado de finalización.
Ordenar la consulta por fecha de vencimiento.
Respuesta: Listado de tareas que satisfagan las condiciones establecidas en
los parámetros.
Prerrequisito: usuario autenticado

Nombre: Crear de Tarea
Método: POST
URL_API: /tareas/crear
Parámetros: debe pedir los parámetros necesarios para almacenar la
información sobre la tarea que el usuario está creando.
Respuesta: se devuelve la tarea creada.
Prerrequisito: usuario autenticado

Nombre: Actualizar de Tarea
Método: POST
URL_API: /tareas/actualizar
Parámetros: debe ser capaz de recibir un objeto con la información que el
usuario desea actualizar en una tarea:
Identificador de la tarea // obligatorio
Descripción
fecha de vencimiento
Finalizada (si/no)
Respuesta: se devuelve la tarea actualizada
Prerrequisito: usuario autenticado, usuario autorizado (solo el usuario que ha
creado la tarea la puede actualizar)

Nombre: Borrar de Tarea
Método: POST
URL_API: /tareas/borrar

Parámetros: debe recibir información que le permita identificar de manera única
la tarea que el usuario desea borrar.
Respuesta: El servicio no devuelve respuesta.
Prerrequisito: usuario autenticado, usuario autorizado (solo el usuario que ha
creado la tarea la puede actualizar)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
