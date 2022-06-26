from jenkins/jenkins:lts
user root
COPY --from=php:8.0.21RC1-zts-alpine3.16 /usr/local/etc/php /usr/local/etc/php
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
user jenkins