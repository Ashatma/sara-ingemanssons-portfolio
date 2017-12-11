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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'LtIPJuSrB0VL+3Gl0m62M47VMMS6IDf+UWWMHoXwX5TPMTTMLHpIZMx1vt7adxvavmQ8lXh0keBZy+2UmIF6EQ==');
define('SECURE_AUTH_KEY',  '1aT+XNV/PiwOM97ZnoKrg/FYV8jUVHPI32RyPlgOEUnjj9VmN0op6Rq/wqoFSPxx9yWmr4WOgB8O0ycacYCT1Q==');
define('LOGGED_IN_KEY',    'jobkjtlKfUplcM0SbIBi8aPrFGwba6meHDynX/54CgH07o1u4JooQJRQQpRLD4W5sI6F4/F3SqFHPyrR3MTzdA==');
define('NONCE_KEY',        'pFcv2EtUZJhoozKgKEWO+ZjoD6C6BPWrocZZIMnS+bmANRyuLDkELtA8sBan7aMtTZBEnRoodcV3E0RQD8Crqg==');
define('AUTH_SALT',        'jlGy1wokvY0cs+NiUPQivoVj/wIJGElgcwg0RgNz7kArCJ/rzWqxYZ1zYn3SYgesCD3hgpnULOufD/h9fHRfsg==');
define('SECURE_AUTH_SALT', 'EBU9aa2r0Q1nsUwEXX4UKNYqIfsjNSDP2uVN1ws7WE7WCa3zE9qiqMo2TAdDjJa5ZBv6LlAIZjtFn+pb9RUvJA==');
define('LOGGED_IN_SALT',   'JhxifAIIfYVULfJ8dgyq7LOitsSMTd0j4TWLF6chyKXy2SCEFiKWgMw1wuJtB6upLlSeWyuyETHF1wl6RvdQhg==');
define('NONCE_SALT',       'AuAkTy5KD+iilc0ZLKDGRlFvoCkVtcH0SdPNyz8ua2BP5Ut4DNcaAFs3MxWqHLgSfb4mlaFzVtCzEN4wvH9W7Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
