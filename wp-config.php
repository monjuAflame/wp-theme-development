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
define( 'DB_NAME', 'wp_theme_dev' );

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
define( 'AUTH_KEY',         'tN:wd@|ru6F040N:i~Dy K5tQRwf{>dx<[2>epbh?j^iH&K9&=^iI%.P3T:|_ du' );
define( 'SECURE_AUTH_KEY',  'zP@v7Y.oS,Z:R[{ig0 MB}i~V(,?[]-=*,CaO7c}9KEMhM=s9>Msop,2gid99Uw5' );
define( 'LOGGED_IN_KEY',    'Tc+d)_g{;#g2t+UCd&wg/11S~3+pTCs]VoAz8ou:>--#%h7zai)%0b*)14+^3R5_' );
define( 'NONCE_KEY',        '5#koF(mm9V&I!IOy#i@/Ig}[r~-ri,4kCY{F4Keg|:2Wq*qV!NZC8ZNU~.H<k* K' );
define( 'AUTH_SALT',        'T6(9N}{Xw{(zztmBeri-yzN3Zv>f#ySRbLmV<#[WUq_77R)%qb )imsM>E/:jClC' );
define( 'SECURE_AUTH_SALT', 'n]S#R~ARWIJM0_{yK#`2>L{|[(|XK>];pV#5n,,|KUk5h9 4RQ(<SBo)[qgwAB=D' );
define( 'LOGGED_IN_SALT',   'x2`Pc!daJ_<RKXk.9GaPpu>~Zg~9*M%I_{KzIj/o!=84@$*7mA*3,H9B+uK,aLBb' );
define( 'NONCE_SALT',       '~XhDK]K$l!ZR&81+3_Ll(W/-.bAbJE-z~&IeDX(aII$y2FKO{HnEjx<P iS7ur< ' );

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
