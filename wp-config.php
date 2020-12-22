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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cmfr' );

/** MySQL database username */
define( 'DB_USER', 'cmfr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cmfr' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't bFZg~))So*uOKHC9,UW.`uE+/U4QJ.wOhwsF0?f7*aAonz{cCwjPkYD3n8(&q,' );
define( 'SECURE_AUTH_KEY',  'uV*,)SSF*g?1JuV4Hh|kuiaRT%=juDWyo:lNn=-7&prA4%8+Jg7eyBemanfi3P#:' );
define( 'LOGGED_IN_KEY',    'Rtf`:haJKV`!C1[PTxK`%`*Gxg|jku^canm1KdX4U+Wjd:exMe-<w9N}DCKe|h%z' );
define( 'NONCE_KEY',        'lmTK5;DMF;w;:)Z$;IuR/LT{F0.$>O[,{Z(#&mVzBw;@vkD}caRF eecI8o$kY%i' );
define( 'AUTH_SALT',        'lG?k~D(h87`FshR+P!nGSvJjVJ<N4&H@qm@h_+d%cTwf7J-2*N^?`bAVlH`[E^Zf' );
define( 'SECURE_AUTH_SALT', 'ZhD(B*Qj<fexwZE`kD,wX*llna~lg=/9d)cO4sdu;1NplhjB!zTm!nK]E{qH0#+*' );
define( 'LOGGED_IN_SALT',   '9.c^Ld`}ev;:sIlC<_SO.JPnIlZE%~Y|UHEpb_RjtHtA,PU>v/t[SjJ#}VC%UHMB' );
define( 'NONCE_SALT',       '-%v2?PoiZ$cEF q>I5bMQj>*G>zJO7=+ls`7DyqcW8%StP)yJ;B0CTccqk_`/{UD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cmfr_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
