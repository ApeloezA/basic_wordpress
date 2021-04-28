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
define( 'DB_NAME', 'db_wordpress_1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yyKJHHw!*:yf~,mJ79C&8g~D{^[%xZZ1W$kaTlQsbTo_vYhqVD*;64pRk`VUx?Z(' );
define( 'SECURE_AUTH_KEY',  'v=v}B_{J4(fg3)`EJpnS=Tj;]Y`cOz~vcY=@K/=s;:nb9~/{PkjgeH6`cf4Tg?*,' );
define( 'LOGGED_IN_KEY',    '2x3J8#OQq=ILkA<Y<iS^ F#_F25;p[Gz@_&^lUr[6mpg:*4m[p5{xgaCULCKP F`' );
define( 'NONCE_KEY',        'aLYMw}`*2~mC.ZYO={7Um)rD`]8cwgMzmX1kUn^s3%!aXwb1qy?_6A)zlCP_[j:*' );
define( 'AUTH_SALT',        'j;2rI|.(Gq=*Ax/z+MUNX(oN3#0ASHwQ42 A8<S.Q-(ctB@a&bn`F}YZ`gK`4HK}' );
define( 'SECURE_AUTH_SALT', 'fgRs#0!F:BFDgRXuOVuLt&eP!Us#HWD/Jc&0.yL(?:%[(?S[+Jt*rBs~Va3Zme{+' );
define( 'LOGGED_IN_SALT',   '{BPoNF/@*Xa0KnCv<pP;H~y4tmQ>q98T6$aFsho/aM~F<5%+G|4f_D8U5_RfkpHL' );
define( 'NONCE_SALT',       '1[ZMH5XVEZ+reaR$7Q$yle_m03QbA1k2{nR8Y))|n;~O8TS=B5M>_b|e|d:6>9,!' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
