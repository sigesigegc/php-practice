# FROMにimage名を指定。ここではDockerHub上のnginxイメージを指定している。apacheのWebコンテナ付きなのでそのまますぐに環境ができる。
FROM php:8.0.3-apache
RUN docker-php-ext-install pdo_mysql mysqli
