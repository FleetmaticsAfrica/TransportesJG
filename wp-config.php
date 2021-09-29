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
define( 'DB_NAME', 'transportjg_web' );

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
define( 'AUTH_KEY',         '*[y4|^wW #=$D(Z?[T{$w/%]E@]d]w|Or#P`bT<x@JgLb~,,4sbN~b~rE#*%4{TM' );
define( 'SECURE_AUTH_KEY',  '33alWTHD-z~#450K_)];[[><mSnaMZeB;r4uQ.Z7-+4~z#U:rIk!1%NyNLSoyHE:' );
define( 'LOGGED_IN_KEY',    'yv=v@2m#[tx|?z6|5Wx0ewu,s3#,x.UEH&l;jf .m{>g.7}bWg.[@#W]BxC*z~z_' );
define( 'NONCE_KEY',        '$#iwV^ zqN$kgFtJ|C*v;+:l/!Fb}Jq}2Eh_$Olj(D1VWD1F,40Si9&.l|1@wAO#' );
define( 'AUTH_SALT',        'pC~Gx91k+Ju+bSGTY Y+K+G[x]~Z$L***m~A&Y)>|+jKX9I346NyMb0< WB3![WR' );
define( 'SECURE_AUTH_SALT', 'r@B9z^<3Uk~=-/FYB|d{X#a]b&!U;@-?7hW,%z@mu57XBZG&CNm &gA 4;j(S{L%' );
define( 'LOGGED_IN_SALT',   '@%w#SxlY 9kENwdFf<l^x}rzfh3g$$KV}95@Zi?9j8]&N6<&0[.1}Arr?q0TAWYT' );
define( 'NONCE_SALT',       '.A2.5mF.4HOmq/gXqG&jVFxdSJN_<Yb*RQ-Nua`xwq6Ul^dA7A:<<K=NfO/IY2+>' );

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
