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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'fWTOFV?/SJVDl%Iz=3.m1>^iag<J(gpI/nkHlMVbel4*=Z^:Tt>~*v%EW-s7j(Iy' );
define( 'SECURE_AUTH_KEY',  'WcCmQr@A9*+we4F-}[uPn:Uoa7(1d#`YuEvM_zoCtE L](g?]u-B_[i8._?s|xjk' );
define( 'LOGGED_IN_KEY',    '^l%gIA,|8s4p}p odR_CXc/xtoRKk__,>!gp90_OUk#gt;Z>SF&k1kWJ|K-<8LHo' );
define( 'NONCE_KEY',        'JO=Rd`|^!#xl>[%3~385c<@gg*)iW%r: b&j]-r}vOl(w|YYC%SCfL$3zMW<0cM=' );
define( 'AUTH_SALT',        'l/#tep[L<cX_l4oxts#!-bS[2A-US4813o@,K/<HM1XmdeYv?w6:K@_L3jwX>yn!' );
define( 'SECURE_AUTH_SALT', '4mt?z[kP$9DtJF,.0[9]Gz$>HZeQXNaSGR~L(p;{537CELuLVq{dXHF!MK%ey1c?' );
define( 'LOGGED_IN_SALT',   'dI&yH?tvT4*>N>zvoDl*:PT[v]<6(CrEm*{@-.GrwBoiW1n;!YTMTorIUngx]4X/' );
define( 'NONCE_SALT',       '6O.M#(Z)UJp O?,{eAr>/S?&q%:&C7Q /f9pD0;%<<w(3IFTyw^%}Q]z!9&<V5gH' );

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
