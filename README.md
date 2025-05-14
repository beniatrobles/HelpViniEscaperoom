# Help Vini EscapeRoom

## Índice
- [📝 Descripción](#-descripción)
- [💎 Características](#-características)
- [💻 Lenguajes y tecnologías](#-lenguajes-y-tecnologías)
- [⌨️ Workspace](#-workspace)
- [🔧 Instalación del proyecto](#-instalación-del-proyecto)
- [📕 Como jugar](#-como-jugar)
- [👨🏽‍💻 Desarrolladores](#-desarrolladores)

---

## Descripción  
**Help Vini EscapeRoom** es un Escape Room interáctivo cuyo objetivo es concienciar a los jóvenes, especialmente a los de 1º y 2º de la ESO, sobre los peligros reales que a día de hoy acechan en internet, especialmente los relacionados con las redes sociales, y los cuales están a la orden del día.

El usuario se enfrentará a una prueba contrareloj, en la que, a través de pistas, deberá devolver la identidad digital del jugador de fútbol Vinicius, tratando de no cometer los mismos errores que cometió el jugador y que le llevó a esa situación.

Entre las amenazas que se exponen se encuentran algunas como:
- Phising
- Correos fraudulentos
- Cífrados de datos
- Suplantación de identidad

Y muchas más que tendrá que detectar y evitar.

---

## Características  
- Accesible desde cualquier navegador web.
  
- Enfoque educativo. Se exponen las diferentes y más comunes amenazas y errores que cometemos en internet.
  
- Tiempo limitado. La prueba se deberá realizar en un periodo de tiempo inferior a 60 minutos.
  
- Competitivo. EL juego dispone de un Ranking donde se muestran las mejores partidas de los distintos usuarios.
  

---

## Lenguajes y tecnologías  
- Html
- CSS
- JavaScript
- VueJS
- Laravel 11
- Tailwind CSS

---

## Workspace  


---

## Instalación del proyecto

### Requisitos Previos

Antes de empezar, asegúrate de que tu sistema cumpla con los siguientes requisitos:

- **PHP**: Versión 8.0 o superior.
- **Composer**: Herramienta para manejar las dependencias de PHP.
- **Node.js**: Incluyendo npm o Yarn, para manejar las dependencias de frontend.
- **Git**: Para clonar el repositorio y manejar el control de versiones.
- **Base de datos**: MySQL o cualquier otra compatible con Laravel.

Opcionalmente, asegúrate de tener instalado un servidor local como Apache, Nginx o herramientas como Laravel Sail o Valet, si no usas el servidor embebido de Laravel.

### Instalación del proyecto
1. Primero clonamos el repositorio:
    - Clona el repositorio en tu máquina local con el comando `git clone https://github.com/2425-EscapeRoom-2DW3/G1_2DW3A_EscapeRoom`.
    - Cambia al directorio del proyecto con `cd G1_2DW3A_EscapeRoom`.

> [!WARNING]  
> Algunos archivos y carpetas no están incluidos en el repositorio, pero son esenciales para el correcto funcionamiento del proyecto, por lo que deberemos de crearlos nosotros.

2. A continuación configuraremos el proyecto para poder comenzar a trabajar en el
    
    - Instala las dependencias de PHP ejecutando `composer install`. Este comando creará la carpeta `/vendor` donde se guardarán todas esas dependencias.
    
    - Instala las dependencias de Node.js usando `npm install` o, si prefieres, `yarn install`. Esto creará la carpeta `node_modules`, también necesaria para el correcto funcionamiento.
    
    - Crea el archivo llamado `.env`. En este archivo se almacenan variables de entorno, como las credenciales y configuraciones necesarias para la conexión a la base de datos.
    
> [!NOTE]  
> Para ello puede utilizar el archivo `.env.example` que se encuentra entre los archivos del proyecto. Este proporciona una plantilla del archivo `.env` con las variables a modificar.
-
    - Accede a este archivo y configura las variables necesarias, como: `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` para la base de datos.
    - Claves API o configuraciones de servicios externos según sea necesario.
-
    - Configura la base de datos ejecutando las migraciones con `php artisan migrate`.
    - Genera la clave única de la aplicación ejecutando `php artisan key:generate`. Esta clave es necesaria, y se usará para proteger los datos almacenados en la aplicación.

---

### Archivos Adicionales Necesarios

Como ya mencionamos anteriormente, algunos archivos y carpetas no están incluidos en el repositorio, pero pueden llegar a ser esenciales para el correcto funcionamiento del proyecto. Aquí se explican cuáles son y cómo generarlos:

- **`/public/storage`**: Enlace simbólico que conecta los archivos públicos con el directorio `/storage/app/public`. Se genera ejecutando `php artisan storage:link`. Será necesario cuando queramos que los archivos del directorio `/storage/app/public` sean accesibles desde el navegador, como por ejemplo, archivos subidos por el usuario.

---

### Comandos Útiles

Durante el desarrollo y la administración del proyecto, estos son algunos comandos útiles:

- Para iniciar el servidor de desarrollo de Laravel, usa `php artisan serve`.
- Para iniciar el servidor de desarrollo del frontend con Vue.js, usa `npm run dev`.
- Para compilar los recursos del frontend para producción, usa `npm run build`.
- Para ejecutar las pruebas definidas en el proyecto, utiliza `php artisan test`.

---

### Notas Importantes

1. **Archivos sensibles**: El archivo `.env` contiene información confidencial y nunca debe ser incluido en el repositorio. Usa `.env.example` como referencia para configurarlo.

2. **Frontend compilado**: No edites directamente los archivos en `/public/build`. Estos se generan automáticamente a partir del código fuente ubicado en `resources/`.

---

### Migración BBDD 
1. Después de realizar los pasos para la instalación del proyecto deberemos realizar la migración de las tablas de la bbdd. Para ello usaremos el comando `php artisan migrate`.  
2. Luego tendremos que añadir un usuario administrador a la bbdd con el comando `php artisan db:seed --class=UsuarioSeeder`.

---

## Como Jugar  
Para poder jugar, el usuario deberá de estar registrado. Esta opción se encontrará en la parte superior derecha de la pantalla de inicio o al darle al botón de "Iniciar juego"

Una vez dentro del juego, primero se dará un pequeño contexto sobre los hechos acontecidos, y posteriormente se darán las respectivas instrucciones y recomendaciones para poder completar el juego.

Las instrucciones/recomendaciones son las siguientes:
- Juega en pantalla completa (F11) para una mejor experiencia de juego.
- Dispondrás de un total de 60 minutos para completar la partida.
- Interactúa e investiga todos los elementos posibles en busca de pistas para ir recuperando el acceso de sus redes.
- Todo lo necesario para completar este Escape Room lo encontrarás en el juego, por lo que no necesitarás utilizar ninguna herramienta externa al juego.
- Una vez recuperadas todas las redes sociales, te enfrentarás a una prueba final.

---

## Desarrolladores  
- Aitor López
- Imanol Gullón
- Beñat Robles
- Anurag Yadav
