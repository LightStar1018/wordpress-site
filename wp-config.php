<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'saydekang' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'uOd;zcj{h>;GV/L_NSwTITbHg0*lzx1qf@7*`e7iOtO0s~uE^-B;uS5K|6Gzqfi1' );
define( 'SECURE_AUTH_KEY',  ':~K9Hvoh50h@:G;,/@rlU ZH uoV{HeI8V7}|wcg^:t;^8IsEeI|{bWXx` @^w`)' );
define( 'LOGGED_IN_KEY',    'SzAy:Vid?1fIoE;KHR,ak%cp`sJggEE1;$/0TL`-YGX(d)LeQjE!Q8Tr/ eqU5)r' );
define( 'NONCE_KEY',        '@b!6|X{srqxK,B|9/YK8$O]A*+USXlN?@g]7SWFUBf4@X>^dPj$9:WhPr[pEtiVG' );
define( 'AUTH_SALT',        'Ezn;=L(:@S^3NaYS5xO;{/WC{K.nb1W<_.*K8_a@97<4H:SahBnm@~uq.V:?kPk%' );
define( 'SECURE_AUTH_SALT', '3U?zb*CHojqfzUY7oPHBQ2aygP7#)!w,PZ9PD-pw]ckl[)k1K3XDL,Liok4UD+y$' );
define( 'LOGGED_IN_SALT',   'UjlX9Ke9Q!G#`}q=xz_`LzZ(H(>S<fQ+nmIPR[r>SNK-(waH]%qzT5jmqx@QTrAM' );
define( 'NONCE_SALT',       'nYJb5j~Z!&:Wupc9S(rZ+zwBJ}-*vThmQl!slx$75Uu/RXA+hIW^*ohj:|g)vb%a' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
