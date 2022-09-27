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
define( 'DB_NAME', 'seva_foundation' );

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
define( 'AUTH_KEY',         ',(Al}iUW0amd~>Oy=-y/IjI5sYw&.e)tK=hGM.G|&aB]Gi=3TJ*hNiQKW]PnLTHa' );
define( 'SECURE_AUTH_KEY',  'RQOq,@v#f(w<)n@dV~f.8*L?]:Gz}&WCdE(~lQ +DOw6Ua;alR47iz]VB2_ {mFP' );
define( 'LOGGED_IN_KEY',    'w,>b)d<AE(vic[&mqH[bHb^ :)zl{?kuXs<Pt6o%KR_xy(bJFy[v&4G[Yp6KIjEh' );
define( 'NONCE_KEY',        'o|3*;{;S^}vk^gYr&3OYX|b|9wv+C^9cZO rM%R6Ge2Z3E5EO/Dj[$HD8:wX]x<e' );
define( 'AUTH_SALT',        'aZ<(k&DM7;gD7>xwQFPL#R?9= A6?Aq115&[7(}fHUw0HEQA[b[mA4`X^bFq5k{f' );
define( 'SECURE_AUTH_SALT', 'cO$|[D$={-lUh@&FdlFg5hy?Te=#<KPBTLo:HDiD<O)gp@p/JyuYH/1J&->SY,6@' );
define( 'LOGGED_IN_SALT',   '!-8?=C>>W2MXzdi;x~qhKAY=)f<{[)_||>wl_w7@Onx$Y@@Nsz)X_>dpEi3za{;l' );
define( 'NONCE_SALT',       '4HuJ|?=kwfh&KZ=%8x^bR)jxq@)g`Q|X |O9rHx|puyML`}=L`!>!jE-dvd.Q8i:' );

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
