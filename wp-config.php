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
define( 'DB_NAME', 'supermax' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '.iaO6pNvq22mP5@wvMcW8hkokY7oRO5A:6+J4tj: 6{(u/a:xR>M%yiG.~m*r}pw' );
define( 'SECURE_AUTH_KEY',  'zzK%q|,FVI[lI:O0ZfB^Pl9aUzU.Zu<SigF{D}$S$sgE;A(Rm7J{5OuH}V4nLR8z' );
define( 'LOGGED_IN_KEY',    '6yNh4Qm!SKjm$O6p(rK31.pE&Le5Ym_]u:CPJl]#9RRhRqYgWd.87p56&i=DDe{P' );
define( 'NONCE_KEY',        'F=^b=Oc^0[a/,;h5Y(F*S)EYD;t[[ch58@F9}UrZc{d;yDCSB{QOC/K?J[A }I!w' );
define( 'AUTH_SALT',        'k6]rIJIMVi4+Ea,P)^x_)hLU4qr7X%HArqxhop2jj%,hTUMrl%0A5$sDm}CX<9+&' );
define( 'SECURE_AUTH_SALT', 'EI;ROVmi|_}/B&hmK{nEH DNZh,U{9[`q|e-L(0u:Q|}UrgqMYZqkw~XmHIamzfM' );
define( 'LOGGED_IN_SALT',   'M$XHEyWybcy~SgYkhgDP^vHtr9#u8ot_RPd}^6s`Tg+v4PDnxZ-.g1:L<i0;F&a|' );
define( 'NONCE_SALT',       'LE/UclQ(Li%qRZU-zF,lApi$hs}Mqb14g[7C%Y%^x|+&b34AE:}=zm-iWDVPj0?7' );

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
