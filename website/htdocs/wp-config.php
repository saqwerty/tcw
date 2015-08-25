<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bafc9a7b59');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4bb0ba93ae82df5ae9888ab18c055a4e49e43d29e58dab973b950d67f5f75a1c');
define('SECURE_AUTH_KEY',  'ba9d8e977d00a787c2e9a1a49c971f014031709cb4ed6f615a780908f618e9f8');
define('LOGGED_IN_KEY',    '9a8005a734531438c1ae0c5496a788346981089301a8c26ef06bab7f85953975');
define('NONCE_KEY',        '4b19afe95a2f5b23b461780eb634e8d7430d7213363e327646a4d96dab204823');
define('AUTH_SALT',        '20aaec862a6f0c320fee7d19a6415c818bbfc4c87652ede98403cad244280afa');
define('SECURE_AUTH_SALT', 'e7001539019e8efe06f2874420de17a888f217485076a6c6b2feb708aca60982');
define('LOGGED_IN_SALT',   '6a59a23c5889323fcac549e96d5569aba5175db84c53666dd47cbdb7d8b46f41');
define('NONCE_SALT',       '80ff7f68b26280e8e1a719d232c1b5e048962a881ee1a693baf92d50bb25128d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/xd1/btn/apps/wordpress/tmp');

