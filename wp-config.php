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
define( 'DB_NAME', 'wpblog' );

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
define( 'AUTH_KEY',         'f[Z+`?)Q$|b& , G1ifRz!`E=e)ML(8ZNe6o%7}IEEjY2bBbK?D#-8duK/^pn0pE' );
define( 'SECURE_AUTH_KEY',  'Iq}eQT>?F5pYe_nhAnOXTRkH3(h<UO/iZ7~qs^2|S@{jZeXorR?~K`a_]fGfN`Su' );
define( 'LOGGED_IN_KEY',    '9;-p3>0 6GYA{*/1{Lqc5)v%@1fh3#.a<;6&eij!%^J@0N:=t[8kHCY;] {gyr6>' );
define( 'NONCE_KEY',        '`s<VUWob(W7ZY`C.5 eYaVt=OUzlNZ@:/Brs;tb< KQlU}vYB,>u~!#?uMb.{quV' );
define( 'AUTH_SALT',        ',u{qE$.`~:QJ~x.,yPU %~2f,u$s#%&4KvElC6^|W`N[s]%ixk(Z)EhNBxnNt3U$' );
define( 'SECURE_AUTH_SALT', '+q?}/@F-10.DA;AK7WPG}e4dW~EZ>ucK%.0)1`u$[EaYlIet918RCQRt+4?Q)uD8' );
define( 'LOGGED_IN_SALT',   'W0[CWo88Fry_ihv|@Fw2C_i;3}k~>l/Wvlduaa7[KaD+0_r(f~ AuzfRLBH xVHv' );
define( 'NONCE_SALT',       'f2<Sy=wJEKj9xGbBZ8&[Cuyl[=`jl=vfU{%A|8;1Jv,L+^=hl^Kn+Zz*.)r,<gf}' );

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
