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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nbcc' );

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
define( 'AUTH_KEY',         'g~U_*KbhX,%BJ^Xh%L)7BXwWLu~9cr:%(k%)8pw).17FEk%;6(0^cT!I0fD<n?Gs' );
define( 'SECURE_AUTH_KEY',  ':;!Fa,j.G$:U}Dqxe}d~DoHMk)|&Ed!:V-U(?Ov)*4?*LdEbx-X-:w$Iz-&$wAub' );
define( 'LOGGED_IN_KEY',    'G! Akj##LkMV2G,#vJy;A#YVEzGI%OyjC#42z4WzsLa3jY2h7e=C,qIn_N*eYOH]' );
define( 'NONCE_KEY',        'uqymC(sN-tkh,Rk)t<ErAZj?v/!qJe/[k87nXxvNC6TLY{A3N^vjIm+*PlM_0gm2' );
define( 'AUTH_SALT',        'fC|I7hp9}_ZqkdVeQ|x/M(B_RBeB4>Lj`  &d:TG[8LN`4z2.WAF`;LIT<U;(ssC' );
define( 'SECURE_AUTH_SALT', 'hx{IzY=z(Fp3te-TBSP3!_D{c_ysiR}1+wN7aDy?+GuW31^U-UR#<r :4jG;DB%h' );
define( 'LOGGED_IN_SALT',   '57Xd-P:~[WcOo}:bMo#_#pj[FYUZgf_qj@z-}@o[fskdW-62e]*r$J7ap(${Ag]x' );
define( 'NONCE_SALT',       'HDn%edrG7}m;(T;33?(`kXSeQN(N^+$#(D{=k;*q@[qP60+v;:&/X4.A5p ~t,{x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nbi_';

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
