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
define( 'DB_NAME', 'rentalsmarketplace' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'r|WX;]RjW_KcADaFah~]`/5$T3-[as,2{Yz7;itdlf}1;I1:<K3~#;x^XHj]AJJ+' );
define( 'SECURE_AUTH_KEY',  'VNSi*M,iX=!dL{{m({Uf9Z13!3a}a|*3i7$8x?)5YBipx6}AzMfR,S0(lXKrk}B;' );
define( 'LOGGED_IN_KEY',    'iaq`jroGzT??SCra%dy~}})S<tL;J,7q{_]eG1%F25CrcDz;i-2W4r!z~W )lQ:i' );
define( 'NONCE_KEY',        '{7zNLa`Wm?*A_|y#zeBol[`>f@%Gx}F7X&[@8HEH!&9%MJpWQ:f*8~>]pmEK<s#-' );
define( 'AUTH_SALT',        '3;&*1$j^1UdtRBX?lf/l&1CEeSF(,<`F~0sqRnY(sFH!%IhAF)UJpX*Pxx]P$3z!' );
define( 'SECURE_AUTH_SALT', 'u:7&}bLj b`?G|pC%sM$Yyh[R#Zkn76:c$[G@kEgPF#;dK<w_O:HlJY+6R61?I%8' );
define( 'LOGGED_IN_SALT',   '5%{=kz sG=)-7[:9(D%80DC{=8_q1]W&?O~=I8xWb4W%vds!+@i47,(#4Qa[[R>)' );
define( 'NONCE_SALT',       'tZY CElp*wog4sYTUO$PR4O bS5<US2YjJ#~}ix.rPwHI=5mmH}Ki(p7kJ-vU&*l' );

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
