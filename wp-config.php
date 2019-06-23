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
define( 'DB_NAME', 'testingwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '9164@Dke' );

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
define( 'AUTH_KEY',         'JZ&BLmy+.X.x9P?S{%W4f56hG6s`:Q.MVY_{^75NAOAx@oDE@r%%=F:ru@qMfk_~' );
define( 'SECURE_AUTH_KEY',  'p14o9t;.FF]^D)tb}lRW_13X=wV{lXN4l=5!mMAq4?-5GCg:?iD|#RXiS^:bK.`x' );
define( 'LOGGED_IN_KEY',    ',l)<z-=BY}LY{e;ovR07N/+([#m8sf/^`uE$|-F;C6BH pKLIZ&{;YyH|(!Is[d`' );
define( 'NONCE_KEY',        'hI,SdV0!3Y:0E./wR{(pjXiM+`a:JFVZR`|&~OcR>7!r/Om2XZZ]*I] S$WC<Gg7' );
define( 'AUTH_SALT',        'YRs9Du*EqS0Fx$c]ErF@KSf!7p_f`eJ5@G[ejll`0,##;*c6c.HLR6axEKP|U#:R' );
define( 'SECURE_AUTH_SALT', 'TTiL1[%3o{nrL~=YnAwxfr80w.Qv.H5p>SQ{>yFycOu)uYu.ah:4|P%wQDz!&pC~' );
define( 'LOGGED_IN_SALT',   'S~$-n1oX$3z,`BG5icHUmmtC9MDfu)mX*+;g4cCE{o)6B4zz +@lZt4XW5!,Pg5x' );
define( 'NONCE_SALT',       '5@Z5Nr/8|+~A^b|5D8 SxtQ|oO~2k7;]Ys;42,#!=yMD}5Dcmzh-[p>b }`s(&Ls' );

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
