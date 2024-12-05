FROM debian:bullseye

RUN apt-get update && \
    apt-get install -y php-fpm php-mysqli curl && \
    apt-get clean

RUN PHP_FPM_PATH=$(command -v /usr/sbin/php-fpm*) && \
	ln -s $PHP_FPM_PATH /usr/bin/php-fpm

RUN mkdir -p /run/php

COPY wp-config.php .
COPY ./install.sh .
COPY ./www.conf /etc/php/7.4/fpm/pool.d/www.conf

CMD ["bash", "./install.sh"]
