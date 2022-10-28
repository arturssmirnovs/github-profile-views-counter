FROM webdevops/php-nginx:8.1-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV WEB_DOCUMENT_ROOT /app/web
ENV APP_ENV production

WORKDIR /app

COPY . .

RUN rm -rf vendor/

RUN rm -rf data/

RUN rm -rf .git/

RUN apk add nano

RUN composer install --no-interaction --optimize-autoloader --no-dev

RUN chown -R application:application .
