# # # start with the official Composer image and name it
# # FROM composer:latest

# # # continue with the official PHP image
# # FROM php:7.4.2

# # # copy the Composer PHAR from the Composer image into the PHP image

# # # COPY --from=composer /usr/bin/composer /usr/bin/composer

# # # show that both Composer and PHP run as expected
# # RUN composer --version
# # FROM composer:latest AS composer
# FROM php:8
# COPY --from=composer /usr/bin/composer /usr/bin/composer
# COPY composer*.json ./
# COPY composer*.lock ./
# COPY ./vendor/composer ./vendor
# RUN mkdir -p /vendor/roots
# RUN adduser phpcomposeruser
# USER phpcomposeruser
# RUN whoami

# RUN composer install