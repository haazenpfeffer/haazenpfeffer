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
define('DB_NAME', 'haazaxhy_wp634');

/** MySQL database username */
define('DB_USER', 'haazaxhy_wp634');

/** MySQL database password */
define('DB_PASSWORD', 'OP@S5p45(2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g63gjqbk7ijjhxdeqaxikcdlpztnmvf9z3fgfsrf4zvpubcowiympkwx7dyhkgbq');
define('SECURE_AUTH_KEY',  '2drjbawwyxufl2ocd4kg08z1crpmtrlnux5ljkm3fypjwnlc6i6vutdgui4v8u8a');
define('LOGGED_IN_KEY',    'dfh5lnbh0aytgmqs0rifzkdr9igrj3rp6kvrxonq96vzodnj0q0hsnnxnfmmbqwz');
define('NONCE_KEY',        '8thaiaqpcty790vfro5pbo3nnrzw3naddkqa5xx6j25prpqcqm47awzfoudrf8s5');
define('AUTH_SALT',        '9az7roirkkgv5up7cwfeptembtuwyxqop0xzmp6sz3koupgmhyi6h2uj4xf0ermb');
define('SECURE_AUTH_SALT', 'jbvthdvp7a1uz6rnrlsaq2o4qrwxvafytswogkdz7due89b57fm1f3kfhbspisy8');
define('LOGGED_IN_SALT',   'd3z2ky8gf4v1ybbm7abg5xca0gpygqlmzxljcbcfbjwnwccqdx7e8zv7efibc21y');
define('NONCE_SALT',       'hvkkoi42avptnvgbqdxvofxrcwdmtbmgea4wtr5csnf7wfcq9bl0qerjx4jyeyey');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
