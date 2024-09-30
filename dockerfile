# Dockerfile
FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
# Run the PHP code
CMD [ "php", "./hello.php"]
