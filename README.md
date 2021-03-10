# Vuejs_Laravel_test_app

Pour la partie Client

cd ./client

npm install

npm run serve 


////////////////////////////////////////

Pour la partie server:

cd ./server

il faut changer les parametres de la BD dans le fichier  .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="nom de la BD "
DB_USERNAME=root
DB_PASSWORD=root

OU creer une BD avec les memes parametres ci-dessous dans mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aerialgroup_test_db
DB_USERNAME=root
DB_PASSWORD=root


php artisan migrate

php artisan serve 

