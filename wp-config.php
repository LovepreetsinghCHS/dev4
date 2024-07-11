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
define( 'DB_NAME', 'localhost' );

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
define( 'AUTH_KEY',         '!)f972*s<WSBRAYIfuZ^5 J^+02?`5-CJ?Vt#z/A@n~$aB>:p}Jih=X&gjvB`qIl' );
define( 'SECURE_AUTH_KEY',  '!Y{$6pYROqB{04NT)ulpluY (sObpJ6~Z]*u(Do<</RL.T_:/D9SeKWpr]&Gn7vU' );
define( 'LOGGED_IN_KEY',    'onnS~5z*],DmR0EOO(~kA&QMo 6t@`58{)N#*~OJ_kNP!isfN:s6[j,1d*f|;$v>' );
define( 'NONCE_KEY',        '@.$DusDufU`g;*O5J9SZfqwaZcUsP2JA5E5FMlWh6L.LA39oa#Tf*SA]g>98[U_o' );
define( 'AUTH_SALT',        'zu[#&0iF4vPk:NbL}bO]{+]qp1$llh+AbFZJQ/ge8A[4?z-:U1qVco)7MPVgGH_J' );
define( 'SECURE_AUTH_SALT', 'z*-MD1Zy`{7t2Wzqw?bbsnJ12GyoO(uq:CKm!S4=L*[WRIj&_Y>QF>(j_]%*q#5P' );
define( 'LOGGED_IN_SALT',   '83(hFU&+EWwLM@<od)O/UwHAsg/el*=jw.?t[-z>6k.iBq/ _;:&U%TI`kYG7XpE' );
define( 'NONCE_SALT',       ':+NiRoKaMW+06 )%Sz7X)F~qOVaJ%8o@LMU1]DC$qX2M3:ujO.@N~W=p<D}`2zj]' );

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
