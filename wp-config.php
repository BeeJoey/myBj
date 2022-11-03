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
define( 'DB_NAME', 'myBj' );

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
define( 'AUTH_KEY',         'MB}U..&xPm?UOUh RmD=FX8|#xZwp;p6}0/*(>, POZi||rp@2H&l[ae>IlC=Jna' );
define( 'SECURE_AUTH_KEY',  'TSdUDM!$L*sST8xLLdB#deJYvT<h;gepRvbtgufIk?yhiSpdDwb*fWBl@TezU|FI' );
define( 'LOGGED_IN_KEY',    'U5Z5=TN+z$3*BH(}urLz)8:Ua|)Tyc[EL^c1{<eBy0VN!@w`-vwUxu[9Be(4OF9X' );
define( 'NONCE_KEY',        ')>4$/3sh+Ms)$9+,to7k+:h7S*]u?njqNog$Qn?,%5rrznyp^2w[o5ub;OQ?V@9F' );
define( 'AUTH_SALT',        'wXn`9M&Sl&^-r39e=~d4v2j~[Evr71_hoO*.;jq/=LF(D&Mqkz_kxEbK<=8(e79[' );
define( 'SECURE_AUTH_SALT', '7;LR5}k=Gmg:q(U|IurG6R_N}:&E@_xy5d:!?@PQ+TAG!~A@NR`QKf>*jAosKhg7' );
define( 'LOGGED_IN_SALT',   'z4Y]%0EnWUOSXv]_*.x$y*IdI-)PUzm*Rdp|S),,yN {n_f+cgccgUr`XW.^sj~$' );
define( 'NONCE_SALT',       'Jk(qQ(tuN/j{J1{3i-n 2dv$wcSvqroZ5S i7q/2`BG3!:gr=|ckExmYwvv2bSO{' );

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
