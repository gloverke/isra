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

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

	/**
	 * Settings for local environment loaded if available from wp-config-local.php
	 */

	include dirname( __FILE__ ) . '/wp-config-local.php';

} else {

	/**
	 * Settings for non-local environments, used when wp-config-local.php not available
	 */

	/** MySQL settings - You can get this info from your web host */

	/** The name of the database for WordPress */
	define( 'DB_NAME', $_SERVER['DB_NAME'] );

	/** MySQL database username */
	define( 'DB_USER', $_SERVER['DB_USER'] );

	/** MySQL database password */
	define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD'] );

	/** MySQL hostname */
	define( 'DB_HOST', $_SERVER['DB_HOST'] );

	/**
	 * WordPress Database Table prefix.
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
	 * visit the Codex.
	 *
	 * @link https://codex.wordpress.org/Debugging_in_WordPress
	 */
	define( 'WP_DEBUG', false );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

	/** Disable the Plugin and Theme Editor */
	define( 'DISALLOW_FILE_EDIT', true );
}

/**
 * Configuration for all available environments
 */

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'isnPwJTgS/bZ350tu3XZJZ6AYc5BHGZpmcHQehTm');
define('SECURE_AUTH_KEY',  'VRRiYB9A8EM1/TBRvVbwZV03H5lOYTIx5cNpeoKM');
define('LOGGED_IN_KEY',    'Sas118YePsPc9XRSLNJ/POTLfKlWf0nZ7T+zZ0yJ');
define('NONCE_KEY',        'NuFVg3V+oSEKxQf9FFrcNqsRcP3uHADNjq+rp+4g');
define('AUTH_SALT',        '6tJ989/q/W8N8kdPL8b5I/qWLVd8+44kYzreYety');
define('SECURE_AUTH_SALT', 'HKZ/H2kJxOo809aRKQJL2tCEzoh9oNkXf7faYtFJ');
define('LOGGED_IN_SALT',   'oclPOyKWqmXZINYBltZ/JiJSUIbSfADt9cv6qO+X');
define('NONCE_SALT',       'qm5KOiYOypt3jdelMYePs+Oh1IQfBCkU+aAguFOW');

/**#@-*/

/* That's all, stop editing! Happy blogging. */

/** Hide PHP errors */
if ( !WP_DEBUG ) {
	ini_set( 'display_errors', 0 );
}

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define( 'ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
