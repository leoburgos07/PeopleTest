
<h1>TEST PEOPLE AWARDS - LEONARDO DANIEL BURGOS HERNÁNDEZ</h1>

## Funcionamiento

El proyecto consta de asignar unos premios predeterminados a nuevas personas, una vez asignado el premio a una persona esa persona se guarda en la base de datos y se disminuye la cantidad del premio.

## Paginación y ordenamiento

La paginación y el ordenamiento se hizo a nivel de backend desde la consulta, se puede consultar en "AwardController::index" y "BenefitController::index"

## Middlewares

Con respecto a los middlewares, se creó uno donde solo el administrador puede listar los premios disponibles y a su vez puede asignarlos a una persona.

## Comandos

Para correr el proyecto satisfactoriamente debe correr los siguientes comandos en la carpeta raiz del proyecto:

composer install 

php artisan migrate

php artisan db:seed 

php artisan serve

## BASE DE DATOS

Dentro del .env.example ya está configurado el nombre de la db en este caso "premios", asi se debe crear la db en local para que funcionen las migraciones y los seeders correctamente.

## Usuarios

Al correr los seeders se cargan tanto los premios por defectos (se pueden agregar más en el funcionamiento) y también se cargan dos usuarios con distintos roles:
1. Administrador
2. User

## Credenciales

superAdmin@gmail.com
Admin1234

user@gmail.com
User12345

Se pueden registrar más usuarios pero predeterminadamente se crearan con el rol de usuario, solo puede haber un administrador.
