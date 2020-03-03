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
define('AUTH_KEY',         'cZPr5U39Ze/WqDyBgOeos1+CoB6Qi2j+V8J/Ozg5q8vjZJBIN6+KAyXMkJ3JlTu3bUp2l4hsh/F0/IdkxYxNbw==');
define('SECURE_AUTH_KEY',  'Z6dHhKkHpB8/TGyWsdmm9vY8VP4gd3ONzjh8lgjlsZsAZbIvRJcIVfFXy3Ry9CFuUoaUkzdRIgNYuKB7a3rhog==');
define('LOGGED_IN_KEY',    'Kga98xqWaF4tUhptReboJrWOzxqtZqTM0JnmhdD58ijbqAqKj0g2LCR4B27F4rydIVqfLaLjxWysiu5N2oIsNQ==');
define('NONCE_KEY',        'QwO8SPwjyjn66D0wRHqrbdXs4BeNhP6TXQXocvrgvQPmKTyHgoF1yjYkMJKzc+SzVUVSonflNrTO8PO+i8lZyQ==');
define('AUTH_SALT',        'gkLS+uly0qE8cpzUKriClMkJX1A1Zb6VK4n5o4oCb8xwx8dqdUtATsM95YI8Uux3A1ph6sPrlucBQO38sIvLGQ==');
define('SECURE_AUTH_SALT', 'NdwOAXzAhazyF5ohcF5Oq3x+Tdx+ZIYNK8cgS4/cUuMlpc03JtQq5zKxlE+egLqwT3HrTTgvSaklTocnOOLF/w==');
define('LOGGED_IN_SALT',   '8MDUTJVQ5csjngpN5h37FtGL3XYEE3PWeXhBCHQhaqMUhxC4iRfFOeLo9rJPWch2Jr2K4/GMz0lJvejTrN9FyA==');
define('NONCE_SALT',       'joxjFB6J5FIRjR5NBpuN0saE0ZuEs+BgUxSIE+k5m+G03bxEdZ2wKL9YA2a+nqFvEb0wjxPlvmGKPeUpNRUmiA==');

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
