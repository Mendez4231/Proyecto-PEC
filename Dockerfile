# Usar imagen oficial de PHP 8.2 con Apache
FROM php:8.2-apache

# Instalar dependencias del sistema, Node.js y extensiones de PHP para Laravel
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev zip libpq-dev nodejs npm \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite de Apache para las rutas de Laravel
RUN a2enmod rewrite

# Apuntar la carpeta raíz de Apache a /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar los archivos del proyecto
WORKDIR /var/www/html
COPY . .

# Instalar dependencias de PHP y compilar assets de Vite
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Dar permisos de escritura a storage y bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Adaptar Apache al puerto dinámico que asigna Render ($PORT) y arrancar
CMD sed -i "s/80/${PORT:-80}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && apache2-foreground
