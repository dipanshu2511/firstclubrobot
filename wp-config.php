<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9735683_bbom1' );

/** Database username */
define( 'DB_USER', 'i9735683_bbom1' );

/** Database password */
define( 'DB_PASSWORD', 'Y.un5x8O9z1VQ188iz249' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         '7MPUlTgVzspAMMUMlmeIBS7v54AngKXwGtjdgFY6d0nse09z2rzWFImHcW3Sy6XX');
define('SECURE_AUTH_KEY',  'UNRWPeFmKhDQ0kNEzMwyXO0XJoQ5iAAkQycIrSG9yoguhfg9FhcQSdywRZKdYCK5');
define('LOGGED_IN_KEY',    'qJquKBAmtgDboaEUZj9iYpuc82l5cN5QEm6DQ6mUPx49xrvnTmqI2d43rxBpwvnl');
define('NONCE_KEY',        'ViedrOMWCFQoPiwXKmu3gBpMlPlqnBqXp91yDKRT6htd3V1fUq92yKJLBI4lH9K4');
define('AUTH_SALT',        'OBGopZDFgEG6QG4pMeP0dFxice0U275D8usvKqEQYBeCmaK50wGnTUBp6GhjMriU');
define('SECURE_AUTH_SALT', 'gMf0jY9jUHDLXejg9cKCBF5Nun08VzrD291qVqryYitKn3qnFff6CFkAetYdyivN');
define('LOGGED_IN_SALT',   'j5yo8d6ZpMsUUGGgyDP903G02kSa48WXcbBPbcbCYhTxq1xvM0GFXei2RlbBqxEV');
define('NONCE_SALT',       'OFeXaMd3a6ShEwHQl4i6kF45swcx8aQisdmAvVcwlJHfMT49ZGWhstR6c0NSg9P3');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'm5tg_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
