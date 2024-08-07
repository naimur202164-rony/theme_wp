<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme' );

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
define( 'AUTH_KEY',         'j=[h|V?BqURCZnLzW2&V,zl6e^NP(DqLNmJ:D^TOg#L wC^=u;haY/Ro=n9x.!B|' );
define( 'SECURE_AUTH_KEY',  '^<<bH3)LKM&5&`Y^FXPB.1!Agb2JFu-t+z+XO|8CiNW&(ak[6@:U,R:X6 9ujA{<' );
define( 'LOGGED_IN_KEY',    '<!,bQrD/3%]@(m*LD%N?klo rRMG4qJX*H7Cfz)t5&c?O4f1U0I$4EmbF-_J=i77' );
define( 'NONCE_KEY',        'B~4-DJI&8yY(:.$NBjT=k$@~-]a]q,*bq5)Bwt;o{6.yoK!8T1+;H-G$4t0(~v;M' );
define( 'AUTH_SALT',        '.4=E9w]tP9DP%B@.WmVTm]3wzLH)p8k^j%gOiNubII ,j4ttr{0%yXuGD9_{/>b?' );
define( 'SECURE_AUTH_SALT', '+2bI&/7z:LE/g`PGm%Wnk,m<kL[x/8=#FD&yhM(RD|o6%?izcD2A,+`%3J}#%S(~' );
define( 'LOGGED_IN_SALT',   'Wk~zMxiZZIEA7[?(hW^oAS]?K5F.Y:U4y1.W_#)K3t!4rt7RJL}tY,O1!cph5zj`' );
define( 'NONCE_SALT',       'x=8Ol~iVQa6SvXrWATd/H#{^fXfG%i:c{(}T4*U%HZ@CbZ*jN7{KI#z(@/5uioqR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
