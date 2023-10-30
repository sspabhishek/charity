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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'i2n1n8M !SE:/Bt;{JYTs+e0iiE@jJN~vuvAh0Gd;,bOq0?dO,$`yFd3bYgdb_`f' );
define( 'SECURE_AUTH_KEY',  '`qw1`:)?;t[sb]S%Z]j$ULx!PF;?KLRfLZwC|@JkY)|zO)~4o/o-qE;L?2+C5LIM' );
define( 'LOGGED_IN_KEY',    '{t[nr|pmnnFNmGW93YtL)U0>pXll&xcPXeX_&h23{]$-:zv./R:yp^`!s])Y$0In' );
define( 'NONCE_KEY',        'H7/Yb,ETiO06Ee4[C5W@!xD6a!]xwcEYKVZY(qH/[$GCupbd1%<AaYzRiQWk8BFk' );
define( 'AUTH_SALT',        '[_GzCwy+`XAywwJK(6-CPzT~*1sGHqprP@dp<y|,q&o4Fux:t+SCVj<2BvgxWgL-' );
define( 'SECURE_AUTH_SALT', 'g(4K#cFDr!-t0!H[-mqb(gZ z!u0ORKt~YzZ,7==[p>QEEHO|VXgoZ>FHm2ro_P]' );
define( 'LOGGED_IN_SALT',   '>kVs`=F1$ NR vHOLIlL$D}Eh-#v`<^4vlggT7VP-!AG!v%H3>^GoTS*Gxs^o*c<' );
define( 'NONCE_SALT',       '/ m5LrJuP`kJr>bo`p4buq1%u%cDav!v}d}&-(It6v#sM>Pr 06i{f9Fa1^aUdEs' );

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
