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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'b<u+Jc[mp~|;aZZysKf(oFvA^rJG`]kvw,*0vHt`1;{wG H M86P8Bftpkp|p;M/' );
define( 'SECURE_AUTH_KEY',  'Q%uA)NTwm^Qe|znyp(?mD^zK0M n+7_6 qi[NOa3ZOP!18Df7fLar#)Ln5q#3UEJ' );
define( 'LOGGED_IN_KEY',    ';%FSBT5xZ|NM~$?x*w|U,/W2:#zw!+_kk ^L,b-+r$}qc#dO@HB*S}gUYa @v1kC' );
define( 'NONCE_KEY',        'pZqLysxrt98+ns{Uj.*2RMVNLA3~$GEtd>I%q=8AdqQ!KrH&9RCZAPRgJdr[4SOr' );
define( 'AUTH_SALT',        'Iytcj%5@%r!*Bzw8dR}$Qz7L+NF#l*Mhtt?TfF+aYkP^H%Cc(rAzET*)I8V:4nJ_' );
define( 'SECURE_AUTH_SALT', 'fF CVh|5|0a<<YuOObln<0/B[;]sx+}`L+GuN0Hax-P/jJz2!ieco%OJ^w;zXlbW' );
define( 'LOGGED_IN_SALT',   '2i 5z?8&Kyv!;;Q~`[:JR-xTx.{meFpQG^Z.f@$;n_0Rg[EYAe@{4BCC SjdaL-q' );
define( 'NONCE_SALT',       '`,@Y>T/2lZ0-%bVt++f<B>uvRjkG+2^lxtly>![n&M.<L O}pDd:Y%/ vMtbqa,?' );

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
