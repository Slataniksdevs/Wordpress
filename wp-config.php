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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstest' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '?$(J,:c9l>}gTJB>9d gvQ$|>|wzcI}Xm]=QB`<e<sP-;|-pG,8YR :ji,RHN-iI' );
define( 'SECURE_AUTH_KEY',  '9S=Cpp91pkS<g?oEPf(w?pmB?m40A9)GJ8T^9-5s7N_PGz8])n}P ^{hRh?FZ kN' );
define( 'LOGGED_IN_KEY',    'sL:/iP&D*nh<Lr]<g*` YLW~X)C{?K(6X;n8*J6a;wZZJp&kwfnKCFv,zNdcf)OH' );
define( 'NONCE_KEY',        '^r,@(A=.M#v4+K)N)TZ,Bk!Zyat{u_+i}OT|zRpnPQxGc^?MU2p52dYgG@Jxp(;]' );
define( 'AUTH_SALT',        'O!bsmWomt](]S6Dw}}C!?19GxycrlbuPG_$UI2]7P$z!(vb+g@q>iMV>aqY]p/@5' );
define( 'SECURE_AUTH_SALT', 'B<c ^un7|jX`c8)n:9s=V-b48JW$IV)|X6Pd7C~8yz/=<b^*.L`*Os,n!AGF,C%P' );
define( 'LOGGED_IN_SALT',   'Ki;.P9SSQ~9/^@T,.:0A?|YuXFgLyuN??n#^0ke#4yLQ]9)w`O/Q%cE69AqZTKkw' );
define( 'NONCE_SALT',       'Yp261s,TFC7OjG;FcDQr9I>xjVQ5lcInJSk22!tIpGb|J54yaY8r8FrwH1SPW,CO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
