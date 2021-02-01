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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hoaphat' );

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
define( 'AUTH_KEY',         'OSyc/,XfJHP/jn&C#4+DuSfx4s <Lhil]_mviUn,*$qd_oJxmy`KQkuk`za_f6t;' );
define( 'SECURE_AUTH_KEY',  '[`m9i!R?1T.o?tKB#3vzCO]!d(_(GeIleXi0xx0-L7?m/f;* =,<14Pu:i33xB+C' );
define( 'LOGGED_IN_KEY',    '~P#mmkjZ*}9UE S)WLTtNid]>{N z^hRq&*ZJBMC>sfxAzrQu9 40U%e5v9GKD%:' );
define( 'NONCE_KEY',        '.J|Kf?<?|n+Muv$ R6V&bv?[BT,R)&~OK7=)]9Li/7:<!]bIv=iUg@Zd|C:C[;,l' );
define( 'AUTH_SALT',        'Jl|t,O ~y2Kq6b+jeg9!x)LQm=}/Y5-t Fdjb$C+e:6%*s1s]}OQlw]9KEE>u/K#' );
define( 'SECURE_AUTH_SALT', '}oJ%5t<{uNAN%xnCqV03gpRMX5oRt}@2JN=w[oO  <,5,{xMY^m*HI-_YCQxLLHZ' );
define( 'LOGGED_IN_SALT',   'LqIs>lFL*+<GE7fcKG9(Q9/(4IOr^f`.^I)rQaJ>XFqC*MPP`^C4yfs{M(ZjC2iY' );
define( 'NONCE_SALT',       'BD~/IPLyKYc0!Hu!Ccz`y#nydX_EX28m2iQB`:E?saDjlbA9?9:Nl]pGl_qg9q$J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hoaphatcomvn_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';