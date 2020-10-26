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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'YnwcqthaMzcphXuh^zSJl2BB+3]#};,Q_jOhaU,uSx:D`7CZwx_zfln;?>l*f*Xt' );
define( 'SECURE_AUTH_KEY',  'SZrVr#e,$)<}CNyvYyC%,AUj wLnD7qCc~l!UmyxS*vapQ+)!4]=I*rqEzO3/(8>' );
define( 'LOGGED_IN_KEY',    'xQp}@Jm0<u#l2iUyWYkHR!.ZU5sgNJDvJyJH=-l~cC;, {P*(:SO@Ndhyrqh=CHQ' );
define( 'NONCE_KEY',        '$Ws`VdT&82[vbAU$UJqSJg 42dl+s#w)M,V{rf>1p9|=*:)XD1$@F1Iz^PQZb.Mw' );
define( 'AUTH_SALT',        '5@SUJQ7H%m{V<wp?Mt($16}eV]Y0i2> t]53b==-HO}D<{x4Cne#2%od4!L9`cqE' );
define( 'SECURE_AUTH_SALT', 'y$z0zd2(EzVo-B6Unh&$tk2V#Qw^]3@(z4GEnly=yx@qk1+/9Ej%5pxrNW!5#NHI' );
define( 'LOGGED_IN_SALT',   '`!N93-IBpf2[`zOtK0W1+l]$&PEbzh?18d r50&~!gbi(I#O}F-7|p)READ{*Si*' );
define( 'NONCE_SALT',       '#oR6Hq!vkQNPDn0fpmPdup}t%h!f`._+K;e1Bc~2%4#Pf^xK(Y;PV@#Hm/*`HH;R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
