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
define('AUTH_KEY',         'NaDEQynb8JaLbBKxhu346wSX58g7L05TcViW4ospGPjjff+mVFD1uCa39Av2RcHi31nUH68nXdrueKFyQdsqXw==');
define('SECURE_AUTH_KEY',  'aRbigP7wXPjnjY1QHxWOvO/uQXdmHU1zRyrpTvMUBdPY0feOxrbGRZAkIAINu+o47Hvv3lJykp4QNi9p9HlICg==');
define('LOGGED_IN_KEY',    '/YqAOxjOPEje3XSurfTK/VhnAxF1DfZQ71mzRgQnXtTTs8ZObkS0evojL1fsGt3CQTwVLbTnklwNQ3P32Vb2UQ==');
define('NONCE_KEY',        'xddKNPy1rhNHjKLD49/d/6ZoO76QsgO3P8W/p4O+MOTkYI8Mxz77emcuSizOzvjl/0eS7HvIJL7x7fr/JaXcZA==');
define('AUTH_SALT',        'a2p0LdjTQJuWeE4dDQ9RttSKr1HC18MpEwwOi7oYSj40tx6gJU3M2hTZFGO85agdVi7V9SA5f2iWfd1f5XMHCA==');
define('SECURE_AUTH_SALT', 'MtzHFDonAtx0jYAnNvHUgSEBM8ToWiJHj+zeUQKyeXrZUbyWDpT2NzKRTarzoAaZOI3VvxNKzGCyi3EbfRW4Vg==');
define('LOGGED_IN_SALT',   'MECLtt0akvtyVVU8Qr9pyIaYlM+rJtYdc7qAibMrtHMq4wKNhhgMfYh6CHORO2gVYS9gue4g3XQFbQbqKB3kjw==');
define('NONCE_SALT',       'z6wPHPBxgZ7LvcWvrQlKm2jIUBop+9xqwYIyNrkFUFpBt9VAENk6FCCgUrteaes09s08dr/pQ3vLPzBX35kA/A==');

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
