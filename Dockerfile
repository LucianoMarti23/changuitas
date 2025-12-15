# Dockerfile
FROM php:8.2-fpm

# Instalar extensiones y herramientas necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    libonig-dev \
    sqlite3 \
    libsqlite3-dev \
    curl \
    npm \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias PHP
RUN composer install --no-interaction --optimize-autoloader

# Instalar dependencias Node
RUN npm install

# No compilar assets aquí (lo haremos en desarrollo)


# RUN npm run build

#en desarrollo comentar  #en produccion usar descomentado


#NOTA: Dentro del contenedor (opcional)
#docker compose run --rm app npm install
# docker compose run --rm app npm run dev


# Exponer puerto 8000
EXPOSE 8000

# Comando para levantar el servidor
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
