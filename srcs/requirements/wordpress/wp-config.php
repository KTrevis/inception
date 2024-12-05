<?php
define('AUTH_KEY', 'put your unique phrase here' );
define('SECURE_AUTH_KEY', 'put your unique phrase here' );
define('LOGGED_IN_KEY', 'put your unique phrase here' );
define('NONCE_KEY', 'put your unique phrase here' );
define('AUTH_SALT', 'put your unique phrase here' );
define('SECURE_AUTH_SALT', 'put your unique phrase here' );
define('LOGGED_IN_SALT', 'put your unique phrase here' );
define('NONCE_SALT', 'put your unique phrase here' );

define('DB_HOST', getenv("WP_DB_HOST"));
define('DB_NAME', getenv("WP_DB_NAME"));
define('DB_USER', getenv("WP_DB_USER"));
define('DB_PASSWORD', getenv("WP_DB_PASSWORD"));
define('WP_HOME', 'https://' . getenv('DOMAIN_NAME'));
define('WP_SITEURL', 'https://' . getenv('DOMAIN_NAME'));

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

$table_prefix = "wp_";

if (!defined('ABSPATH'))
	define('ABSPATH', __DIR__ . '/');

require_once ABSPATH . 'wp-settings.php';
