# Start from the PHP base image
FROM php:latest

# Update and install required dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libldb-dev \
    libldap2-dev \
    libsqlite3-dev \
    libssl-dev \
    libgmp-dev \
    libpq-dev \
    unzip \
    libonig-dev \
    zlib1g-dev \
    libicu-dev \
    g++ \
    libbz2-dev \
    libxpm-dev \
    libmcrypt-dev \
    libxslt1-dev \
    libkrb5-dev \
    && rm -rf /var/lib/apt/lists/*

# Install required PHP extensions
RUN docker-php-ext-install zip gd xml curl mysqli mbstring exif intl ldap openssl pdo_mysql pdo_pgsql pdo_sqlite bcmath gmp

# Set the working directory
WORKDIR /var/www/html

# Copy application source code to the container
COPY analytics/ /var/www/html/analytics/
COPY app/ /var/www/html/app/
COPY assets/ /var/www/html/assets/
COPY backend/ /var/www/html/backend/
COPY dist/ /var/www/html/dist/
COPY docker/ /var/www/html/docker/
COPY help/ /var/www/html/help/
COPY map_files/ /var/www/html/map_files/
COPY src/ /var/www/html/src/
COPY styles/ /var/www/html/styles/
COPY test/ /var/www/html/test/

# Copy additional files to the container
COPY _config.yml /var/www/html/
COPY compareData.html /var/www/html/
COPY demo.php /var/www/html/
COPY guide.html /var/www/html/
COPY index.php /var/www/html/
COPY main.php /var/www/html/
COPY postgre.php /var/www/html/
COPY script.js /var/www/html/
COPY style.css /var/www/html/
COPY test.html /var/www/html/
COPY test.php /var/www/html/

# Set permissions (optional, depending on your app's needs)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 (the default port for Apache)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
