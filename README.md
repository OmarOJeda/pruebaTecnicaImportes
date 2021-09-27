INSTRUCCIONES PARA LA EJECUCIÓN DEL PROYECTO:
1.-'npm install' comando para instalar dependencias de compilacion como lo es Laravel mix
2.-'composer install' comando para instalar composer y poder ejecutar el 
3.-'npm i vue-loader'
4.-Configurar archivo .env del proyecto para la conexion a la base de datos
5.-crear base de datos "pruebaTecnicaImportes"
6.-'php artisan migrate' commando para crear las tablas dentro de la base de datos
7.-'npm run watch'
8.-'php artisan serve' para ver ejecutar y ver el proyecto
9.-ejecutar comandos en carpeta del proyecto
10.-si el archivo .env no se encuentra crear uno en la raiz del proyecto y copiar el siguiente codigo no olvides modificar los datos de la BD para la conexion:
//////////////////////////////////////////////////////////////////////////////

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:RJsdzhBE9K2g27tZuWXnLlY2jOLURW9AuMZTchYIkr4=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pruebaTecnicaImportes
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
