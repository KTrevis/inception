set -e

export WP_PATH=/var/www/html


if [ -f $WP_PATH/wp-config.php ]; then
	echo "Wordpress already installed"
else
	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
	chmod +x wp-cli.phar
	mv wp-cli.phar /bin/wp

	mkdir -p $WP_PATH
	wp core download --allow-root --path=$WP_PATH
	mv ./wp-config.php $WP_PATH

	wp core install \
		--url=$DOMAIN_NAME \
		--title=inception \
		--admin_user=$WP_DB_USER \
		--admin_password=$WP_DB_PASSWORD \
		--path=$WP_PATH \
		--skip-email --allow-root
fi

sed -i 's|listen = /run/php/php7.4-fpm.sock|listen = 9000|' /etc/php/7.4/fpm/pool.d/www.conf
echo "Wordpress launched."
php-fpm -F
