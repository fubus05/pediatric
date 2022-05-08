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
define( 'DB_NAME', 'test task' );

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
define( 'AUTH_KEY',         '|ZJl06fsxd4wlzHh%rh2L%Yq]3!%NK0.$}2Wo[>OH]5|@c-Xh#.jDmXd.~bc+SdE' );
define( 'SECURE_AUTH_KEY',  ',n<j3z$.u~&[O~X@d>K8QY7q_g7qY99DuU:w&x/]^0zA/I<8n6T$_bQqg[nRx3J^' );
define( 'LOGGED_IN_KEY',    '^2vwW$sBl{ljNzB54]6yQ0Oo6V}0)eRvhEc8%?M$[#c3F7k2cQOu4wg7u_6+qAAW' );
define( 'NONCE_KEY',        'XB[7.DKMWA0^[N<E|cC|}wSScl8SJN5Xdpq,g*&8#&qQSSfF[<d9ue#;{8nAYNjv' );
define( 'AUTH_SALT',        '2)^}IEEskK7s*^~T7%E+6.DKTE71TaU|JASqoW+&[yK1<4#g`arqnKK:dqi:$ha>' );
define( 'SECURE_AUTH_SALT', 'JQCr?e0EX>(]N(>YN;-P19Vn9g4zrDyM1puWy]A+Uj_O;cB4q:X/d`}*!VtnaiKF' );
define( 'LOGGED_IN_SALT',   '|juhQXz>sr2S2NZ,e(3.wfX=+T%i/&D,Tc):lJ0(nulQu22&5rowWbl:t[GS]AP;' );
define( 'NONCE_SALT',       'um!B0l8-yj>onu;9CVy@l;Dm9$_9{%80~SdwKb=-AUaF?7Vm#iNZwkOnE=$[p#/g' );

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
