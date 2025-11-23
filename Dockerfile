# Imagen base con PHP 8.2 + Apache
FROM php:8.2-apache

# Instalar extensiones necesarias de Laravel
RUN apt-get update && apt-get install -y \
    zip unzip sqlite3 libsqlite3-dev libonig-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite zip

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Configuración de Apache para permitir .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copiar archivos del proyecto
COPY . /var/www/html/

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Instalar Composer dentro del contenedor
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Crear BD SQLite
RUN touch database/database.sqlite

# Dar permisos a storage y bootstrap
RUN chmod -R 777 storage bootstrap/cache database

# Generar key si no existe
RUN php artisan key:generate --force

# Correr migraciones y seeders
RUN php artisan migrate --force --seed

# Exponer puerto
EXPOSE 80

CMD ["apache2-foreground"]
