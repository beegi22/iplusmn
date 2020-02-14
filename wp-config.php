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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '/(CO]9 kb6hx:YN4HvQb/YA}hG||s7lITYqym0l{8kE!1}VF^wfvW?p3*Q9)~bUR' );
define( 'SECURE_AUTH_KEY',  '4|ZWP+Toozmsv4``[4o!e6X#<OO0lBL. )vAyAlM3l@;mmCT-&mWn/nnEQ9AHFHB' );
define( 'LOGGED_IN_KEY',    'GWZ#LGCnr|LKq=Qa$>yuy##~yZa{Um!Y%OUMo].E+L4zxW=|}SA]k[o:kT@YzODE' );
define( 'NONCE_KEY',        'QuBroriK,kMgi(IO$=|ND9-3-(NK}$9]n:A @=^p3/(k3ysyV9Rd:da^U<XrvQ/[' );
define( 'AUTH_SALT',        '{V[;2sm9~lLhBAtN&3&v9@]a38qZY733#X7l2u$1@W9Us~f$qH8~CC=(G>@Dj:k4' );
define( 'SECURE_AUTH_SALT', 'vPt8{/B:Wg&JRWDb_98CASn3pMF*:EXzrYB!U=hDuzDBp`H.3ba<,,x<zC!sW!;p' );
define( 'LOGGED_IN_SALT',   'a .4H[O6]gSYk$%.B(@<:s0O_=}B}31fbch(%5eM3~rdjHdvVXn=rbJ?LD(U:34<' );
define( 'NONCE_SALT',       'spu]lp$BZ`07)|Qm0jTbGMXGxL%r)3<g{ Q@305q(yoC``qFtY_~4$eF|DPy<:A;' );

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
