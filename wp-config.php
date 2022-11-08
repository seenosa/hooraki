<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hooraki.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'XxwxEUGuCDPyYgm6' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iqtZwnns0TvWPdYq06Yfhz7v9L05z2eaKn0fpfovSQUhQEO5lLIgEs1nzKuCP2od' );
define( 'SECURE_AUTH_KEY',  'bq1AjAUT31wFbY42QYJF0zjcVk5bZynUz0jq7ML5qn9s3yj4NiSsHlz1aSgB2nnx' );
define( 'LOGGED_IN_KEY',    'TUywXeojSbDKhqgVpou3sm0noGkhco07GuI1LDO3TkzVoovtCxpA8sYbqAvy9gG1' );
define( 'NONCE_KEY',        'OcvVooNc7Xt1Kp7b9G71Ng8x124qzDBmHdycc4cRmMEoGzQJ1Is3U8cQpj634dGR' );
define( 'AUTH_SALT',        'a8ekpCZ45VPB2rdbaEs9bpjFYfIGhJpMuKeCaCimSf2RNtsFwNB0tQ5sP7kAAh6v' );
define( 'SECURE_AUTH_SALT', '58LVdPwtX3QjndiNRxey5pwmLODMIgywjwoNQaFVqMg3ZnXDYkLlwJD6pe8zMC5P' );
define( 'LOGGED_IN_SALT',   'aj4WrL26Z7vSXiG2WV9wzuCLVE0tTY9rtmP9wAUFjbhL2LRF4FPbLducTiUrXRPm' );
define( 'NONCE_SALT',       'bDXPPzVm6Q7YpWH9rq8q3ZbSnLcT8jW6W6NoNS4IS9BeTJR8gAAgtyOfsaaAU7mc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
