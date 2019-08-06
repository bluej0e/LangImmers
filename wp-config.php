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
define( 'DB_NAME', 'languageDBolzd7' );

/** MySQL database username */
define( 'DB_USER', 'languageDBolzd7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WqznL6CzWf' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ']D9mSWDtxe;1~O59tadK-~l11~OS8osZ[ww48kVVGwzg0@!R8B}cgN!nrF}0^QBFv' );
define( 'SECURE_AUTH_KEY',  '#xL#Wp9KZ[DsCS_5h1K-:d[Cs|R!4kzJz[ZsCr!Rk4JzJY>Bn7Q$0gFv,Un3jyIb' );
define( 'LOGGED_IN_KEY',    '*qE+Pi;IxHX<Am6L+;e;Ht#WlxHW#9l5K-[ZtCp_Sh1GwCV|4k-K-:ZsCo!Rg0FvB' );
define( 'NONCE_KEY',        '7>j3M$Mf{Eu,T.7j$Iy{buEq.TiX<6m*Pe;exEX<Tm6L+]a]9p_S~2i+Hx]ap9O~O' );
define( 'AUTH_SALT',        'D[d5O~Ol1K-GZ[Co8R@0g0Jw[Z[8o!R!4gzJ8R@0g0Fv>Y>Bn^Q^3fzIy>YrBr,Un' );
define( 'SECURE_AUTH_SALT', 'Zk8-|doGs@Vk}kvBc|4r4U@}k}Nz,c>3r^I^}jyBy>Qr7IuMX.Em$T$6iuMy.bq2q' );
define( 'LOGGED_IN_SALT',   'kv>oBkzRc>grJY^YnF$>f>7v,MIY^BnyE$<Uu7u,Mb3IqIX*AmyE+<eu6u.Lm2Dq' );
define( 'NONCE_SALT',       '}rM,byQ$>fr7u,Mn3E$ET{6uAL.2b2Iq{XiAmxPe#et6W_;l2Dp]S]5t_K_1a-GS' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
