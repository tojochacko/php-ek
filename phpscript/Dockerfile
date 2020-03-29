FROM php:7.4-cli
RUN date && apt-get update && apt-get -y install git
RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
COPY . /var/www/elk
WORKDIR /var/www/elk
RUN composer install --prefer-source --no-interaction
ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"