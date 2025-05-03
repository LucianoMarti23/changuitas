FROM php:8.2.28-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /var/www

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install

# Crear el enlace simbólico para el almacenamiento
RUN php artisan storage:link

# Dar permisos a storage y bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Exponer el puerto usado por `php artisan serve`
EXPOSE 8000

# Comando por defecto
CMD php artisan serve --host=0.0.0.0 --port=8000

