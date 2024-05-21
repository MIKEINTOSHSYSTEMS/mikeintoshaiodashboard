################################################################################
# Base image
################################################################################

# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the image name and tag as labels
LABEL maintainer="MIKEINTOSH SYSTEMS <mikeintoshsys@gmail.com>"
LABEL image.name="mikeintosh-phpdashboard-app"
LABEL image.tag="latest"

# Set the working directory in the container
WORKDIR /var/www/html

# Copy application source code to the container
COPY analytics/ /var/www/html/analytics/
COPY app/ /var/www/html/app/
COPY assets/ /var/www/html/assets/
COPY backend/ /var/www/html/backend/
COPY dist/ /var/www/html/dist/
#COPY docker/ /var/www/html/docker/
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

# Copy custom php.ini configuration
COPY config/php.ini /usr/local/etc/php/php.ini

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
