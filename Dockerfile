# Use the official PHP image with Apache for PHP 7.4
FROM php:7.4.33-apache

# Install required PHP extensions
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
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install zip gd xml curl mysqli mbstring exif intl ldap openssl pdo_mysql pdo_pgsql pdo_sqlite bcmath

# Install OCI8 extensions (requires Oracle Instant Client)
RUN apt-get update && apt-get install -y libaio1 wget \
    && mkdir -p /opt/oracle \
    && cd /opt/oracle \
    && wget https://download.oracle.com/otn_software/linux/instantclient/instantclient-basic-linux.x64-21.1.0.0.0.zip \
    && unzip instantclient-basic-linux.x64-21.1.0.0.0.zip \
    && rm -f instantclient-basic-linux.x64-21.1.0.0.0.zip \
    && docker-php-ext-configure oci8 --with-oci8=instantclient,/opt/oracle/instantclient_21_1 \
    && docker-php-ext-install oci8

# Install COM and IMAP extensions
RUN apt-get install -y libgmp-dev libc-client-dev libkrb5-dev \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap \
    && docker-php-ext-install gmp

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
