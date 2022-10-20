-- creamos base de datos, encontramos los datos del usuario y contraseña en .ENV
mysql -u sail -p password

-- para crear la migracion a BD
php artisan make:migration create_tareas_table
./vendor/bin/sail php artisan make:migration create_tareas_table

php artisan migrate
./vendor/bin/sail php artisan migrate

php artisan migrate:rollback
./vendor/bin/sail php artisan migrate:rollback

-- Creamos el modelo

php artisan make:model Tarea
./vendor/bin/sail php artisan make:model Tarea

-- CReamos el controlador
php artisan make:controller TareaController
./vendor/bin/sail php artisan make:controller TareaController

-- Pero creamos controlador con una bandera
php artisan make:controller TareaController -r
./vendor/bin/sail php artisan make:controller TareaController -r

-- Pero si queremos agregar el modelo
php artisan make:controller TareaController -r --model=Tarea
./vendor/bin/sail php artisan make:controller TareaController -r --model=Tarea


-- para reutilizar edit y create , creamos un componente
php artisan make:component TareaFormBody
./vendor/bin/sail php artisan make:component TareaFormBody

-- creamos una request para validation en store y update (TareaController)
php artisan make:request TareaRequest
./vendor/bin/sail php artisan make:request TareaRequest


-- INSTALAMOS LIVEWIRED
composer require livewire/livewire
./vendor/bin/sail composer require livewire/livewire

-- creamos un componente para livewire
php artisan make:livewire TareaIndex
./vendor/bin/sail php artisan make:livewire TareaIndex
