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
define('DB_NAME', 'ttotalne_iiaw');

/** MySQL database username */
define('DB_USER', 'ttotalne_iiaw');

/** MySQL database password */
define('DB_PASSWORD', 'gaahfvc8t6af6qef');

/** MySQL hostname */
define('DB_HOST', '10.169.0.121');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '128MB'); 

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ayLxY1xqvAcXVeeiQcRybN4NgvFRGi17YarqViI2hqYEixLgBzeRLtVkxbwjtT3h');
define('SECURE_AUTH_KEY',  'qHtRxPTkcIJ7HlWPqZNbpBHM8CvVHDNaIywIHXHRlK1F9kdhbXoNN7LKZuMosyju');
define('LOGGED_IN_KEY',    'T59j7OOlcZblJrdKeZcxZnHPkSXntZTPC0MRnvSyO7tIrkCkZ4ALwmPXMnwqjA7P');
define('NONCE_KEY',        'G0DSurVi7CfdT0FP5kaqWYFjha5kQ0XfuVFFTzHPmvymTPoi8jcWfz7jLwf7od7t');
define('AUTH_SALT',        '60I1OzBHifFBun8CdqhoUF4QBLAofBB7Z3Gwo9ZS78JkbdTyAobPdh9puAhvKUdB');
define('SECURE_AUTH_SALT', 'ezz0rC5S393SdDchwbFKKpMmv4v8Ns5WsZ3e1iAfLP92oggxskyq4KIuApCdTM0V');
define('LOGGED_IN_SALT',   'osDVWUNbzapNLKAEd5X5cT2xrF7mh3IjpvLjeD2kWTxfYnKWDp7BBntXmB9YNvXk');
define('NONCE_SALT',       'bu2KcvTqN7iJeUOWMh3liw1Xf11T7LNTn3ivSisRAx9PFjhJSfCHQd7SN02D19Ur');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cwxq_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');