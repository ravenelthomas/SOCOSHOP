<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs12489402' );

/** Database username */
define( 'DB_USER', 'dbu1018668' );

/** Database password */
define( 'DB_PASSWORD', 'ulMPDXrz3UTbwCz' );

/** Database hostname */
define( 'DB_HOST', 'db5015032283.hosting-data.io' );

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
define( 'AUTH_KEY',          'ps)AS11=UR.FO>[)3N}nMxu%0zAaa)|X:ocISGnS[3SSX*i&1oVYly]W#<S{<:Dx' );
define( 'SECURE_AUTH_KEY',   'M4GscOlWj0; &Z.C#O<)Xw`KtpN^tWB(.~>H.E$Y8vm^D:B>**&N9=u1=MY<aSt_' );
define( 'LOGGED_IN_KEY',     '%K9@-R<5=x1[gc2Ut9iJkqkvw7W!mv!k|$>N=YrhWn<d02X@!~n4G2S!av.vSB%n' );
define( 'NONCE_KEY',         'w_S-`fL0P_1eRS%(QJS%]O#1vIBwfQ~[r12_MqSn47k<Gn!~6{?.3R|W57emL0-U' );
define( 'AUTH_SALT',         '{{B^I.pik(A0,>M<|`yBudjWO{!vCu+5<7D?L|vF5!&P>L&8{>UCQZjP ek7AZqa' );
define( 'SECURE_AUTH_SALT',  '21]tsV)!wr{k$C{M0hW E!~-s:(ctR=|UrZ0~f5Rxy!HGg>/;74bn8wl {*W u~Z' );
define( 'LOGGED_IN_SALT',    ',oWr6/aJx`bqs6s5hN);* dYoq*mz,>i-4/mc6+lP_Kb$[ !NjtvNL|tVm^%oE`^' );
define( 'NONCE_SALT',        'Ztk(7cq9H.%g%Qbg;RD!)MAMX+GAlnAAwo`sw*HS?`/L1oy=Y/*(UT:@SkU{O${>' );
define( 'WP_CACHE_KEY_SALT', ']=0fFdT681Au!M v^vr&g/AZ/XcE{R*NYZ&_uT!m@YW&owoM{?gf!+hyE_>c;^tt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
