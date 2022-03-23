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
define( 'DB_NAME', 'stage' );

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
define( 'AUTH_KEY',         '^ka@%U/5-!_mwADfgEn5!^r<5!%~yjQnz]+@gE-*:eF{vV=Lf$a$XvX!oaN%drpH' );
define( 'SECURE_AUTH_KEY',  '2J}~n=_A|SfU4Z873{]yID1nqqk$@ id7e1C$H~87ww/oX@rr-W _$fIl$Ji_p^E' );
define( 'LOGGED_IN_KEY',    'D@+a+_N}`I{bQo{Q>WaY(X<y36YDMaGvyp#>Z-Y[-BY5qrfid-mn$*IbxM8/%K~`' );
define( 'NONCE_KEY',        'TZvHRRZ%]|w!fyXbChxix.!ktb3s.ciVJBeoyh=UgHT9+,o7ND^ . :15m$Jq:@X' );
define( 'AUTH_SALT',        '=<oBCo$?uj=KUA>-weaxcM{B5o2<TpAQN4yX-D+V3T<se%#cAu.wg&mpKv9WJ:Tf' );
define( 'SECURE_AUTH_SALT', '2Zke1?~vD 3;#%^#_eznw.3Q|Be +$ZIZ^ht0UQ.9:5 xvkoyD5w}AWEM[WF }R-' );
define( 'LOGGED_IN_SALT',   '(Nx,:2b^YP8w_EdE70;()oQB>_!F1QO[Z3mXTAr4.,Ub R;NN65US1%xSX:z=-o/' );
define( 'NONCE_SALT',       '*/DT^SLo ku`Jia5|`pLIvR/U(Yn!:EgvXA)MVvUB$57-j##wZpI.`z*QuMMNx7t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstage_';

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
