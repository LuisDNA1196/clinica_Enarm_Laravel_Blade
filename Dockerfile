FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    zip unzip sqlite3 libsqlite3-dev libzip-dev \
    && docker-php-ext-install pdo pdo_sqlite mysqli zip

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar archivos del proyecto
COPY . /var/www/html/

# Copiar config de Apache que apunta a /public
COPY docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Crear archivo .env dentro del contenedor
RUN cp .env.example .env

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar dependencias Laravel
RUN composer install --no-dev --optimize-autoloader

# Crear BD SQLite
RUN mkdir -p database && touch database/database.sqlite

# Permisos necesarios
RUN chmod -R 777 storage bootstrap/cache database

# Generar APP_KEY
RUN php artisan key:generate --force

# Migraciones y seeders
RUN php artisan migrate --force --seed

# Exponer puerto 80
EXPOSE 80

CMD ["apache2-foreground"]
