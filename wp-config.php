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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_crafterstree' );

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
define( 'AUTH_KEY',         '%vD_+B3UQ%@:;UJJs6}~<b}lwN|kw0@OKtqCbV_vt2} Ru|Y6%XfiH^pb_[<)b{Y' );
define( 'SECURE_AUTH_KEY',  'QBqa-YsK[Z=Q>7*Gz4(/BAH|0zN6R xORAWvM[)&N@FgNST]T0##aK##.$thi?j;' );
define( 'LOGGED_IN_KEY',    '-@^*9vt1~,6@<Ayl+q(i [?4>8gX/* >,sF<>f#(YmIAGlk {ThhGDl_L.)}f5Y-' );
define( 'NONCE_KEY',        'jhYTW%/[Ij*x[c_P,l$|ee+/ufy&6-rq,/{z*H8e+b;=hq Y EdBSKIs]#=$Ke8@' );
define( 'AUTH_SALT',        '=,(,-zyunhKfX:5c)aGc{[s9!p0BJR,#[Kd&<0Pz0@ERt,[ML3BaN!djyK]3nJiW' );
define( 'SECURE_AUTH_SALT', '<m[/|CQ!%@&Q/0kJY<LT3X~l:qFy_/#=SJ@Z`4Y{6jo>`#`@O[@4fP([a1vHLMnQ' );
define( 'LOGGED_IN_SALT',   '{/-R@=JwY7*|QB9wh_M?S(~J4vQG0Y ES,6b1}|$=C`,p0#Ig(G7ND#*;;0erWDC' );
define( 'NONCE_SALT',       '1=bF+Mf4mdX(M_C@=Q)$DoOM>.j9+0@={c>vVB]>8Y>oeP6+,dtNu$j?;mu[%hYl' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
