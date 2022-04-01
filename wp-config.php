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
define( 'DB_NAME', 'foret' );

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
define( 'AUTH_KEY',         ')oh%H]o)<*9!I3Y>/Za9pN5`(`/Nu]`.[(a]:`V]$R[ii5<Ewr8h*u@t]2X1Z%v<' );
define( 'SECURE_AUTH_KEY',  'Aer;3$&Uk0YId5~1nq8Yqmv]RSZzAqcc33Oc8_9P*@.e;u`*TjtTxFu.Hd%To8PK' );
define( 'LOGGED_IN_KEY',    'M4SD$>C&c=Wr?P?3#50kex5MyKeuNO>Y)%VnF`ywy#D[+(G+(A2h*f8M*% *_HLm' );
define( 'NONCE_KEY',        '7w6mzn.Ba9<=c36UZ}{<&Nqw*so<@TWEfR4^$oh73CE c^YMj1t#.HLH?K!UmT(j' );
define( 'AUTH_SALT',        '+Yfq+:ZAQ1B2n7S&HK}?6g#k epBe*#f&LSjR2^1QshO3rkk$h1Wb&OK?<hif^PW' );
define( 'SECURE_AUTH_SALT', '~uCl6(E?WF<Vnvd,qL7pEKt|DZsSG,W`SUr+x~KmQO1-!|u]`!&q&d1n~Nf{H-LI' );
define( 'LOGGED_IN_SALT',   'W&;k-NDs-@f(cQ3kz@M}SHMD4wdS@]J,[5X;,E}asFgInqxdJsFUSUnR0Z1kkW`5' );
define( 'NONCE_SALT',       'Yl@$2R&U2`ftH^,Y/gPm]xBs+].SC*Q$}J}Q5q^8;%0kN.,I-8p;ZyM~?1xKi3I]' );

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
