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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' jI_Z_7ioaku24b:6-BxS_EG4w%DzlMeobrk~7SzB=OY]004[!Ggfpsx}FSJ_d)&' );
define( 'SECURE_AUTH_KEY',  'Z</$gsk`.,yIpz:? g7w#f>Ob RFQ64trI(Eh89VH*$9Q)R3r,ff#cLJT%1L0kRd' );
define( 'LOGGED_IN_KEY',    'n/o,LsCYqK*`]L+5}l=:/pBP!p,GT}C&~AQP> ^&}_NfG8<y` 2Eu,fZ)(1;*ZqR' );
define( 'NONCE_KEY',        '}En#V;s(nE_,u&tPD4@[w%eB8D2U[GiA2+VKf}BuASL7@LiW5T[Z* @hDpG79kSA' );
define( 'AUTH_SALT',        'X_t1P2#DyLc?sJqvpun815<~b:o7CnX56zm^BE-R^V*&gF-ox(P`|v#A]SO;L-0j' );
define( 'SECURE_AUTH_SALT', ']@=Kw4cgg^H/G@M5*97]@j([c*@5o@SXPwAf+]FSjiCh3j8,Zn0Zt83=]l3ch2^a' );
define( 'LOGGED_IN_SALT',   'N{Nlf^S?s7_%qx$[YsO.Vs.{97&:VZLx4DR8DS(njU:M`18_cl(1z`pfj+cq92Hg' );
define( 'NONCE_SALT',       '#WpqEfHrD?E<0+XPjm&ZGguE%XjaXpD?]/#! sDAqj_`{fC?OS=iAMs.gxkCsgIA' );

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
