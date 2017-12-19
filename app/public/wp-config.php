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
define('AUTH_KEY',         'mqMF3uMt3w+G8rhpzPQcjJFVBOtGTA9f6jzGQopPSdVy8ixxFJM3ap3nu/m71+hqxDhJBCgLoP4pBGRVhdV3Ew==');
define('SECURE_AUTH_KEY',  'DAMSrDXduagiqI8FtaSxi7rv3tNFBWDW1wsbrHKY2cEin1VXxg5MCIcuAy+jyBcEMt4Y9wr7uj9IVZmuuVpsWw==');
define('LOGGED_IN_KEY',    '65f1qyedAYVw340H1cZBxde2Ip9AuneOPSisoypwIdE0DRKwn2QvmDziEhLUND6UomryUg8StzA/13pubpimiA==');
define('NONCE_KEY',        'FDld3a/Xzg1DXQCDYi1lq82+FWo7cBuXxdEARMTGTb3KtaeLAn0PgvCxeQKRE4lS0uOi03Xxvhkk/Xi62lsnNg==');
define('AUTH_SALT',        'yYuoY002UpXA8DemNyH5rzn/jtTy6omqDDEPc9sMgUEPlSyG5PyFhc7urCYHy9kldpl1vtTZAI7QmVVYDY7Ktw==');
define('SECURE_AUTH_SALT', 'zPmFIksjgGFauSsm2W2hio1fsmI1giX5ycMewS6DMmLkF/IlzJZ6dMkN4hq06C+v1OaUW0hMfjRiAKneR8kIdA==');
define('LOGGED_IN_SALT',   'FkWESPRi2zScGUDdGNtD8EbfGUsg7t+KNLbXGFeVZw4zY85kQ3phgSDi1CnMPMjshNtXi+S0QtlPI+TQpUbjQA==');
define('NONCE_SALT',       'hB0Llnt03MXiiAy1o9FP1tiZ5BbYSOki1sSni4oSMKi/kYeL0C90R2lTktvkLvUh5vDLDe/Wbo/c0rfXpsupOw==');

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
