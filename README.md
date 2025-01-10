
# Proyecto Laravel + Vue.js

Este proyecto utiliza **Laravel** como framework para el backend y **Vue.js** para el frontend. Laravel proporciona una base robusta y escalable para manejar la lógica del servidor, mientras que Vue.js permite una experiencia de usuario interactiva y dinámica en el navegador.

---

## Requisitos Previos

Antes de empezar, asegúrate de que tu sistema cumpla con los siguientes requisitos:

- **PHP**: Versión 8.0 o superior.
- **Composer**: Herramienta para manejar las dependencias de PHP.
- **Node.js**: Incluyendo npm o Yarn, para manejar las dependencias de frontend.
- **Git**: Para clonar el repositorio y manejar el control de versiones.
- **Base de datos**: MySQL o cualquier otra compatible con Laravel.

Opcionalmente, asegúrate de tener instalado un servidor local como Apache, Nginx o herramientas como Laravel Sail o Valet, si no usas el servidor embebido de Laravel.



## Instalación del proyecto
1. Primero clonamos el repositorio:
    - Clona el repositorio en tu máquina local con el comando `git clone https://github.com/2425-EscapeRoom-2DW3/G1_2DW3A_EscapeRoom`.
    - Cambia al directorio del proyecto con `cd G1_2DW3A_EscapeRoom`.

> [!WARNING]
>Algunos archivos y carpetas no están incluidos en el repositorio, pero son esenciales para el correcto funcionamiento del proyecto, por lo que deberemos de crearlos nosotros.
2. A continuación configuraremos el proyecto para poder comenzar a trabajar en el
    
    - Instala las dependencias de PHP ejecutando `composer install`. Este comando creará la carpeta `/vendor` donde se guardarán todas esas dependencias
    
    - Instala las dependencias de Node.js usando `npm install` o, si prefieres, `yarn install`. Esto creará la carpeta `node_modules`, también necesaria para el correcto funcionamiento.
    
    - crea el archivo llamado `.env`. En este archivo se almacenan variables de entorno, como las credenciales y configuraciones necesarias para la conexión a la base de datos.
        > [!NOTE]
        > Para ello puede utilizar el archivo `.env.example` que se encuentra entre los archivos del proyecto. Este proporciona una plantilla del archivo `.env` con las variables a modificar.
    
        - accede a este archivo y configura las variables necesarias, como: `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` para la base de datos.
       - Claves API o configuraciones de servicios externos según sea necesario.
      
    - Configura la base de datos ejecutando las migraciones con `php artisan migrate`.
    - Genera la clave única de la aplicación ejecutando `php artisan key:generate`. Esta clave es necesaria, y se usará para proteger los datos almacenados en la aplicación.
    - Compila los recursos del frontend. Para producción, ejecuta `npm run build`. Si estás desarrollando, usa `npm run dev`.

---

## Archivos Adicionales Necesarios

Como ya mencionamos anteriormente, algunos archivos y carpetas no están incluidos en el repositorio, pero pueden llegar a ser esenciales para el correcto funcionamiento del proyecto. Aquí se explican cuáles son y cómo generarlos:

- **`/public/storage`**: Enlace simbólico que conecta los archivos públicos con el directorio `/storage/app/public`. Se genera ejecutando `php artisan storage:link`. Será necesario cuando queramos que los archivos del directorio `/storage/app/public` sean accesibles desde el navegador, como por ejemplo, archivos subidos por el usuario
  
- **Archivos de frontend compilados**: Archivos CSS, JS y otros recursos necesarios para el navegador. Se generan automáticamente ejecutando `npm run build` o `npm run dev`.

---

## Comandos Útiles

Durante el desarrollo y la administración del proyecto, estos son algunos comandos útiles:

- Para iniciar el servidor de desarrollo de Laravel, usa `php artisan serve`.
- Para iniciar el servidor de desarrollo del frontend con Vue.js, usa `npm run dev`.
- Para compilar los recursos del frontend para producción, usa `npm run build`.
- Para ejecutar las pruebas definidas en el proyecto, utiliza `php artisan test`.

---

## Notas Importantes

1. **Archivos sensibles**: El archivo `.env` contiene información confidencial y nunca debe ser incluido en el repositorio. Usa `.env.example` como referencia para configurarlo.

3. **Frontend compilado**: No edites directamente los archivos en `/public/build`. Estos se generan automáticamente a partir del código fuente ubicado en `resources/`.

   ---

## Migracion BBDD 
1. Despues de realizar los pasos para la instalacion del proyecto deberemos realizar la migracion de las tablas de la bbdd. Para ello usaremos el comando `php artisan migrate`.
2. Luego tendremos que añadir un usuario administrador a la bbdd con el comando `php artisan db:seed --class=UsuarioSeeder`. 

