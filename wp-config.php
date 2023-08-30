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
define( 'DB_NAME', 'banco1_lojadecabelos' );

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
define( 'AUTH_KEY',         'X2Eq7Mjyon%J&wBBYwV51mxWZ}Z/~l}-3@).cr2h(pubN^Oei?OBRw.szB`IxEc6' );
define( 'SECURE_AUTH_KEY',  't^$z L<hMsF;gw%!]dhEc-B0>$dw~b3Z1%+,DlU7xt sq]N%S/)V+4XQ5TN{:mV$' );
define( 'LOGGED_IN_KEY',    'R2)|rHo-/B*yUQ^04<h21X0E^YP;>J(|W!L+F_=O~U5 X@8%ovYI&q%CjlNnJWyz' );
define( 'NONCE_KEY',        ';HS2`yzN[$H[ 5g-zU)34R9_$fF|].56/fJ_-2#hWwmK9=UUcAXupS#2m=H0iDT=' );
define( 'AUTH_SALT',        ' =&OY|;)X_+YZela@pcNs^d{dHU85bgoVf_%sT;ujbt1|bvk;.7 O.XztM0JD!#B' );
define( 'SECURE_AUTH_SALT', 'Hk:1|r`L+kQh eY=g44qn#>Z0l(Q[RDfY5 <LMe1xi8ZnoR>vYZ<Sf0in5(m.e1v' );
define( 'LOGGED_IN_SALT',   ':/F!Ti5Kf=%Vvr%C0^h_wAJ`S=Jh>b+_WgIq2,d3YO4sveq Ge.I-h3-5GfwMH8F' );
define( 'NONCE_SALT',       'JL~q!3&v)VXJSs,roU_%=,Ks$LA{AGaTemp1i!RT7,uG>B)lk[@q%iZ-m^oFW{.(' );

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
