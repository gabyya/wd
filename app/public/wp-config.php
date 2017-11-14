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
define('AUTH_KEY',         'DKq52g2Kk2aELV4p3yyWQ2vzdtAJOl6EyUP5BBBmFeDUhUJsdjxwtPT8VKlAxg2HjkFw1oGqRLsV41Tdxdshjw==');
define('SECURE_AUTH_KEY',  'TUDCw1mKUZVUFMFX1uxdy42MoQ98ucDui+KfD5Ji6uLyyyvxZFPLweq48NZ4cLaA52JPohAKRSO4u4hf0fTxGw==');
define('LOGGED_IN_KEY',    't9WGRDdJkstCUrxZKZHLXAUSVPnve0MEFAeRew9LiJJZ/ih52JIEBjpLvo4jlPxQcSDlcmIUsGWO8NcmaqBEhA==');
define('NONCE_KEY',        'z8RsxH/jAt4FGfLBkl1upoEFQBYnSVMZFacumq1EntaMcMpEJOF9N2IEUYR9toHeZ4RQvi8XvXTXFJMEi5Bq4w==');
define('AUTH_SALT',        'KaB919QFvTwoSLxzLtZ9LYxlqOGPCojaCcRsvPFcWW6/DeoJFtgauxk9eVNXyiLTkQGl3noPg0kpFyQpOw5P8w==');
define('SECURE_AUTH_SALT', 'zWpf4oZC1cPU6WDwLn+0WDfg0vqQ4RQeggf3XS5wGS1ccXaSEp9CW9r+kPgkozI68tzmokcD8wd3GU5YSgOOZA==');
define('LOGGED_IN_SALT',   'xeAHeaF+HoUqo241VCCqaPwoUaL0h1RVhZ6K7C6qA7ZNmeF8ITTFvoXmJOyq26I3AGmomS3r0CsDiKvbxK0iFQ==');
define('NONCE_SALT',       'UHuHX8ROIReZ2DkvWpz68CIrlewz4NXAfUuSpk871FPuAnSvmolLDuzZ4uRpVdhxyVLxiKe1ULOqk6HiQ38CyA==');

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
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
