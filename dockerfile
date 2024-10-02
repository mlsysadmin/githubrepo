FROM php:7.4-cli
WORKDIR /var/www/html
COPY . /var/www/html
EXPOSE 9000
CMD ["php", "-S", "0.0.0.0:9000", "-t", "hello.php"]
