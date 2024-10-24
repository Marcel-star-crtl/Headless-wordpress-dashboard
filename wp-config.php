<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gassystems' );

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
define( 'AUTH_KEY',         'vD|ma9p677m#&Khg7tsg-z^?ss9NUTLOA;Tc q+*&M47q2f}xi$5Ar#4s*,Jq6U-' );
define( 'SECURE_AUTH_KEY',  '5Y=u^pkHDuxLQLv~o3<I::)mDD]+Eoos6e+1KL-ixRFc?g16]z;?#_JlE{>fKb//' );
define( 'LOGGED_IN_KEY',    's4`u``Bh0*|V7.[+:@,d.z9H>@~sT@ug1n|?L{y+ r%R~lX,pT+4wd}|5sE$~JY3' );
define( 'NONCE_KEY',        'OCD56bL{u#()%V@g|)IA+Ncz@[dtJt ~@eY),@m7_fYkByD&g5[ZfbVe!RyyNa{d' );
define( 'AUTH_SALT',        'i;NXz^.K@/DYpa%a)Ua+dCz|=BLw<]KX@!7^mI8}?:]7Ux_@5 5i>3Uz{gpzZvl|' );
define( 'SECURE_AUTH_SALT', 'CY#=otCs1x.mYRjm]_ SZ)p>M/X%-5{RHo2*hZ@[o+fji},94i|`&Ia#Fc*nb5ZQ' );
define( 'LOGGED_IN_SALT',   'qTI!TKn2^_@vNBZ9/[y?@=V|!w).w]pfnN;&ff7J)W@UWgds#J=E5#5B@]cEiIY8' );
define( 'NONCE_SALT',       'D3C_rrm+Z,u//P87{Rsl-R:)92 chpV$~wpkEsA9ogC%a<nTlqfMz}$ek;f_8/_K' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
