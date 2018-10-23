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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', '636363');

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
define('AUTH_KEY',         '0+>@Y?Fo9.G&~vjP%m#_WtK6k|Q0gd@V8N(8_`-qr!X5N8>UT#3d69|4Jsz@y=:p');
define('SECURE_AUTH_KEY',  '|fY-#uYl|vKc@dHN+:wn<[xP#A4xq]3Y$:Zc`af3}#d*b);*HqI(K(1_r)t9cI;A');
define('LOGGED_IN_KEY',    'S98-bK:+f++{+47NVwKv@{]L+X)f lI;/+5,%zVG-ddnsXyeuZ=gk),~+M3J=r;F');
define('NONCE_KEY',        '-PmSc:p|@cq;lTFtC~ZcN^{fM4gr4&tj9@1=49i=t0Y2D7RZi5G$p5-k]5M8m,@z');
define('AUTH_SALT',        'aDQ*|NK}q7@BTirG{fG7fmP1,1Hg>{z6TJ3u{R;!z`APy{}+uCmPT{U7M-1IQ(-W');
define('SECURE_AUTH_SALT', 'ev3`9v#{5Puo9-Kz7?|EJjS3C> |(=-en8l{nYWK4sX!4b-?[K-fnEsiiRGng:W?');
define('LOGGED_IN_SALT',   '){ZQu]X<}@VMA|:^!z%&+TXF7504|GA{kV|.WX:8vHS/6BSEh-.9M$1OJq@%}a,+');
define('NONCE_SALT',       '}rvuVyj@oGlY~bR4d&a1[jqc|Mw=8(jtPtD%wxp){||I,D8xLt;C8gB+V/nVb5!L');
define('FS_METHOD','direct');
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
