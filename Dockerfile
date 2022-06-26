from jenkins/jenkins:lts
user root
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
user jenkins