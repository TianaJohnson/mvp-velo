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
define('AUTH_KEY',         'NnFVEtZOgZd66ICzCBtFUf2S1MZYhlKrLOJG0Atkz1e1+06fcnQbojIXsaGdHigAQXOIRxQ6eSIg3DQb1aqyZA==');
define('SECURE_AUTH_KEY',  'oN/VIgRPBsf6lV7/7A2EYHxOLz1QGOlbsJMdcSt6ezQlpvfsLvIIbLecm1LB81Uc3U6qnyj+ZJKhRGwaILG6wg==');
define('LOGGED_IN_KEY',    'QZVyy6WuUy7pY3wPomxsFJJM/PRI+zj2ETYCNp1n4+LNfx/fLt1xKTSI8U977cwpetGWMZ4gor0yQXB1T/hbwg==');
define('NONCE_KEY',        'BjDo7Lq6sJok/wxKuaKc+Ye5KZzwOODcFUNg01LRNabK6Um3rqhEmxAR3VNKhWhFA89K1pCmiupeIUQXpwGQ2Q==');
define('AUTH_SALT',        'ZeRcEV2CKNHEH0GxSm0KPDaxJdcZ66BXXaB4zGQ6B7jybiBCuusLCschx+lp9J/M4S695BuCwwjqJ3cg2Bechw==');
define('SECURE_AUTH_SALT', 'sk9ghBzfss8ct4hHu7JT27rHZLw2ulNHIs5xdqEAlalETojoG/CbY4T87f2ANvSYJ7SVygyiZfCJ8HaW9Seo5A==');
define('LOGGED_IN_SALT',   'L6nwAGLFv91Pnu7X9P1Mb02sPk8LAv13oLAwYkp2GUTACffrFGHfhT12ITujdLLq2+unnyuIEpJ6Rtpd86TzJA==');
define('NONCE_SALT',       'H/unK+ltdgKsSdUP3e2CRTkiViu3ZMWKYRiiDNr6mHo3HtguvCwmJAhFYreQ0zjAqCvsp4ibL4df1VBEMZO4Kw==');

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
