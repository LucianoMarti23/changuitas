## Desarrollo del Sistema

### Planificación

La planificación del sistema incluyó la definición de los objetivos, el análisis de los requerimientos y la identificación de los usuarios principales: administradores, usuarios y staff de marketing.

### Diseño

El diseño del sistema se centró en la usabilidad y accesibilidad, asegurando que los usuarios puedan navegar y utilizar la plataforma de manera intuitiva. Se establecieron las siguientes funcionalidades clave:
- **Registro y autenticación de usuarios**: Permite a los usuarios crear perfiles y acceder a la plataforma.
- **Publicación de servicios**: Los usuarios pueden publicar sus servicios, especificando habilidades, disponibilidad y tarifas.
- **Búsqueda y filtrado de servicios**: Facilita la búsqueda de servicios específicos según las necesidades del usuario.
- **Sistema de reputación y comentarios**: Permite a los usuarios evaluar y comentar sobre los servicios recibidos, fomentando la confianza y seguridad.

### Implementación

#### Tecnologías Utilizadas

- **Frontend**: HTML, CSS, JS.
- **Backend**: PHP, Laravel.
- **Base de Datos**: MySQL.
- **API**: Mercado Pago, google autenticación.
- **Control de versiones**: Github, Git.

#### Arquitectura del Sistema

**Cliente-Servidor** con Laravel como framework **monolítico** que sigue el patrón **Modelo-Vista-Controlador (MVC)**. 

- En este modelo, el **cliente** envía solicitudes al **servidor**, que responde ejecutando la lógica de negocio y enviando vistas procesadas.
- Laravel, al ser monolítico, centraliza toda la lógica y presentación en una misma aplicación, facilitando el desarrollo y despliegue.
- El patrón **MVC** organiza el código en tres componentes: **Modelo** (interacción con la base de datos), **Vista** (presentación de datos) y **Controlador** (lógica de negocio y flujo de datos).

El sistema está diseñado con una arquitectura de tres capas:
- **Capa de Presentación**: Interfaz de usuario desarrollada con HTML, CSS JS.
- **Capa de Lógica de Negocio**: Implementada en PHP, Laravel, manejando la lógica y las reglas del negocio.
- **Capa de Datos**: Base de datos MySQL para almacenamiento de datos persistentes.
---


*[Volver al índice](../../README.md#documentación)*