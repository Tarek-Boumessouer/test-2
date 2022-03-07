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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S4bX8ryNeFRWY1hQKzhhU/khnGifOf8E9soAiJRJJLFk2sirhtCAqqjaCwIVNXhePcpB1trvAezUu8BtD1tH4g==');
define('SECURE_AUTH_KEY',  'JqqB/aaG+9AT9lWgY7/B7OX0VVSOrQ999xcpXKKTY8SbJOZSFHv7h75iv+J2fYjU7bLDz63Lr+dhKJljpnOa5A==');
define('LOGGED_IN_KEY',    'zTI11xrAVKNinjtgB7cELXtj81MMPeYOj2mmd+z7/SAGOFsJytAeelVr9YEWEp3f6RP//KsPkV9XSqgupoupPA==');
define('NONCE_KEY',        'iEaQ7vvfQtY8sS7NHdyE03/wnZVmYaBciX+nop/j4TI1jA2QEDz86xU1V+S1lH3tYB8cPQUR7gbNtvoKv0/Esg==');
define('AUTH_SALT',        'bfmDViFxMInSj0nVghtcUrNGSxfs827rInr2gxBxq6oT+mI3/KE+HkfAJ0QmFlntpPpzWURk50gR/IKAYOO6Bg==');
define('SECURE_AUTH_SALT', 'lOQzdo8ZQ3Lart68xjUSks3mwSkPJZ76ietIP4Gggk4W6LkqpdJwf3YcshYJowM1Y0Wvuo/EU6d7rclmxXYOoQ==');
define('LOGGED_IN_SALT',   'VtMplq76G4nsPDpyElChDpARxy74Ko31pPWCXCbGaH0vYo+VLFay8SvfZjNzpby5JlTRemWWLwoYScYUGh/R0A==');
define('NONCE_SALT',       'Stj0iNc4bag1+yqP2SDIhGqQNMUw+kw/b59yFtUpwQCVKDLHP0RPoNdn3uLQ8/1lxv0NBDTQy8H4BNoknBSMjg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
