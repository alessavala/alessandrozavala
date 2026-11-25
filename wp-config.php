<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u988032058_380IL' );

/** Database username */
define( 'DB_USER', 'u988032058_AVfux' );

/** Database password */
define( 'DB_PASSWORD', 'XJle1RjGbt' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'QW^3.:)lyD8h!Ye]s;-<j4M(9]h]$Ui>G,9H~pTJD@xjyjjcB:9M=-#}uHY!:IJk' );
define( 'SECURE_AUTH_KEY',   ' l{JNBUZa2QZA9N0+/63L`-:JJEgK+t7Au*q Ci/#T=QPs;^l:F~t<W$*SR[soTU' );
define( 'LOGGED_IN_KEY',     'EPAsZ<uAY8|T$I}0<o@6#ZV/<SG-@eE4&g(=+j%;2G#QTvW&_nt;StQ1jyR7Xob7' );
define( 'NONCE_KEY',         'u!)e56<&4:s%LbPVwarFz0*4c&!3F5#m]ooKOPG~,[JwGI<62Iff*8BC/;M]Z(?.' );
define( 'AUTH_SALT',         'zj^F;)1`q8V!FK}3BM2V+*4@+>[Ay-d7&f00H$vh|pK):Xj w:aQcmP9swkd5WP.' );
define( 'SECURE_AUTH_SALT',  'yX9WrP]*D-n.>XZWsTw]Ub6!ZHrf<wCF?kFK%6@D@M!B?~!T#`3g!umY/kTjvy_.' );
define( 'LOGGED_IN_SALT',    'nO1oH)oAR_1Acj7$Xm`^_&8[Nyw#KNJ|=|G8y?>cQ^%C!a(~dVw+(g~HxQI:W*3u' );
define( 'NONCE_SALT',        '&95QSs4l@Wy9~UPn]?u+,/L*=G^<wVs K(9SYoC.+yZf5h-&1(qJGDf|<)&C?y*w' );
define( 'WP_CACHE_KEY_SALT', 'R>%IB.M=MD@5Ec3oTym4^DS,/V~8elqW-(*fRzzSroAAf=EVa#@8S6L~o09g9)A@' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '7c8481101d0c1e08c2d82840eccda8f2' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
