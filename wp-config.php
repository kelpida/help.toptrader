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
define( 'DB_NAME', 'helpdesk_db_prod' );

/** Database username */
define( 'DB_USER', 'helpdesk_db_prod_usr' );

/** Database password */
define( 'DB_PASSWORD', 'RUgL8XihadwK6JhYhrwu' );

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
define( 'AUTH_KEY',         'mNZxH}s|:DVwK68yG0@4DzU^QcM9Z~ _yQT,fuX~=EmDq$cxI)g()qo9(S%fJ6E^' );
define( 'SECURE_AUTH_KEY',  'jttK);uY*Tqf7cAi=7<fo:#QEfPH1a$Ur9`(AkSd>S}r2)cvB`OWBIw-m%;wqGmZ' );
define( 'LOGGED_IN_KEY',    '~%PJLSp67S6?c)-R&r7nnJ%n$Nd&S4klY,TV/By>eSPh6?@O#!2mE3&!S+<Z49&^' );
define( 'NONCE_KEY',        '2n0F0[~}f%3<y;U@)>bi6Y|IO9v19rBVj)-G6T@Bv *78SrH_&~^:_{0GdG^QizT' );
define( 'AUTH_SALT',        '/*KYiLHiL#yr?WSg7ajn|k$u^tzk%BK`yZTt6D5TZ>1&kQ)]GILD~1vVi.HM:BAj' );
define( 'SECURE_AUTH_SALT', '8rC|GJoDn[|`ng]DBbM.^4}2Nl}Hdo.MXQTrH_<3/m~j9<zI/U-k&yoZGI#}`P@#' );
define( 'LOGGED_IN_SALT',   '_>W7E`H{ZeaKSs<4dJ:`9^ ._pWfOHJj&$JjZo$@@;,HEwmewCqDU 4|7=miUC<_' );
define( 'NONCE_SALT',       'j@OU>]AKv00(LB*#p>lO9O}&=F^ #h9zzy5lW6eZX:r+2)r[*4&QhrBX]:( 3_$2' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
