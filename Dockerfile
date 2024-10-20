################################################################################
# Base image for PHP application
################################################################################

# Use an official PHP runtime as a parent image
#FROM php:7.4-apache

# Use an official PHP-FPM runtime as a parent image
FROM php:7.4-fpm AS php_app

# Set the image name and tag as labels
LABEL maintainer="MIKEINTOSH SYSTEMS <mikeintoshsys@gmail.com>"
LABEL image.name="mikeintosh-phpdashboard-app"
LABEL image.tag="latest"

# Set the working directory in the container
WORKDIR /var/www/html

# Copy application source code to the container
COPY analytics/ /var/www/html/analytics/
COPY app/ /var/www/html/app/
COPY api/ /var/www/html/api/
COPY assets/ /var/www/html/assets/
COPY backend/ /var/www/html/backend/
COPY dist/ /var/www/html/dist/
#COPY docker/ /var/www/html/docker/
COPY help/ /var/www/html/help/
COPY map_files/ /var/www/html/map_files/
COPY src/ /var/www/html/src/
COPY styles/ /var/www/html/styles/
COPY test/ /var/www/html/test/
COPY mysql-init/ /var/www/html/mysql-init/
COPY derejaviz/ /var/www/html/derejaviz/

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
COPY pwabuilder-sw.js /var/www/html/
COPY manifest.json /var/www/html/
COPY 404.php /var/www/html/
COPY server.html /var/www/html/
COPY start.php /var/www/html/

# Copy AI chat files to the container
COPY ai/ /var/www/html/ai/

# Copy custom nginx configurations
COPY config/nginx.conf /etc/nginx/conf.d/default.conf

# Copy custom php.ini configuration
COPY config/php.ini /usr/local/etc/php/php.ini

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd

# Copy custom php.ini configuration
#COPY config/php.ini /usr/local/etc/php/php.ini

# Install system dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libmagickwand-dev \
    libcurl4-openssl-dev \
    libonig-dev \
    supervisor \
    libldap2-dev \
    libicu-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libxml2-dev \
    libpq-dev \
    libsqlite3-dev \
    libgmp-dev \
    libssl-dev \
    libsodium-dev \
    zip \
    unzip \
    git \
    curl \
    nginx \
    --no-install-recommends && \
    # Install PHP extensions
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) \
    gd \
    mysqli \
    ldap \
    intl \
    pdo_mysql \
    pdo_pgsql \
    pgsql \
    pdo_sqlite \
    soap \
    zip \
    curl \
    mbstring \
    opcache \
    bcmath \
    gmp \
    sodium \
    # imap \
    xml \
    gettext \
    && \
    # Enable additional PHP modules as needed
    docker-php-ext-enable \
    opcache \
    bcmath \
    gmp \
    sodium \
    # imap \
    xml \
    gettext \
    # Set permissions after copying files
    && chmod 644 /etc/nginx/conf.d/default.conf \
    && \
    # Clean up unnecessary packages and files
    apt-get autoremove -y \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set permissions for specific folders
RUN chown -R www-data:www-data /var/www/html/app/templates_c

# Expose the port PHP-FPM listens on
EXPOSE 9009

# Expose the port Apache listens on
EXPOSE 80

# Start PHP-FPM when the container runs
#CMD ["php-fpm"]

################################################################################
# Base image for AI Chatbot Service
################################################################################

# Use an official Python runtime as a parent image
FROM python:3.9-slim AS ai_chatbot

WORKDIR /ai/chat

RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    software-properties-common \
    git \
    && rm -rf /var/lib/apt/lists/*

# Copy requirements.txt first to leverage Docker cache
COPY ai/chat/requirements.txt /ai/chat/

# Install dependencies
RUN pip install -r requirements.txt

# Copy the rest of the AI application
COPY ai/chat/ /ai/chat/

# Expose the port Streamlit listens on
EXPOSE 8502

# Healthcheck for the Streamlit service
HEALTHCHECK CMD curl --fail http://localhost:8502/_stcore/health

# Start Streamlit when the container runs
ENTRYPOINT ["streamlit", "run", "app.py", "--server.port=8502", "--server.address=192.168.160.10"]


################################################################################
# Setup for Supervisor
################################################################################

# Use the final PHP application stage as base
FROM php_app AS final_stage

# Copy supervisord configuration
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Install Python and Streamlit in the final stage
#RUN apt-get update && apt-get install -y python3 python3-pip && pip3 install streamlit sshtunnel
RUN apt-get update && apt-get install -y python3 python3-pip && pip3 install -r requirements.txt

# Copy the chatbot application files
COPY ai/chat /ai/chat

# Set permissions for supervisord.conf (if exists)
RUN if [ -f /etc/supervisor/conf.d/supervisord.conf ]; then \
    chown root:root /etc/supervisor/conf.d/supervisord.conf && \
    chmod 644 /etc/supervisor/conf.d/supervisord.conf; \
    else \
    echo "supervisord.conf not found"; \
    fi

# Set the working directory back to PHP application's directory
WORKDIR /var/www/html

# Start both PHP-FPM and Nginx using supervisord
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
