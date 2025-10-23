# =============================================================================
# Dockerfile pour la production - La Boutique Française (PostgreSQL)
# =============================================================================

FROM php:8.1-fpm-alpine

# Installation des dépendances système pour PostgreSQL et autres outils
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    postgresql-dev \
    postgresql-client \
    icu-dev \
    oniguruma-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    nginx \
    linux-headers

# Configuration et installation des extensions PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_pgsql \
        pgsql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        intl \
        xml

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration du répertoire de travail
WORKDIR /app

# Copie du code source
COPY . .

# Nettoyage et installation des dépendances
RUN rm -rf vendor/ \
    && composer config --global --no-plugins allow-plugins.symfony/flex true \
    && composer install --no-dev --no-interaction --prefer-dist --no-scripts

# Configuration de l'environnement de production
ENV APP_ENV=prod
ENV APP_DEBUG=0

# Création des dossiers nécessaires et configuration des permissions
RUN mkdir -p /app/var /app/public/uploads \
    && chown -R www-data:www-data /app/var /app/public/uploads \
    && chmod -R 755 /app/public/uploads /app/var \
    && touch /app/.env \
    && chown www-data:www-data /app/.env \
    && chmod 644 /app/.env

# Configuration Nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Exposé du port
EXPOSE 8000

# Script de démarrage
COPY docker/start.sh /start.sh
RUN chmod +x /start.sh

# Commande par défaut
CMD ["/start.sh"]
