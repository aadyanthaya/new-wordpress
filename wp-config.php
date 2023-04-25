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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'j?bWN#)`.__.-7|PeOR,fcbo=+j0`C6P$izv2^sj/a ;V3&g[/Y doq-Uk.P$KWP' );
define( 'SECURE_AUTH_KEY',  'y7ad:=SY9Ot9etqLoVKG$Vh:XJmZZos#d0E:}VWm5J7pMAjecbR#A.|`3nAm%!8P' );
define( 'LOGGED_IN_KEY',    'Z1sCkrj_`,2<DeXt(4L2De4hB8#wWqTxwk~uptso!UW}$DA_g@U[4*mE*P;O wmh' );
define( 'NONCE_KEY',        '~nv5{Us;^FYGCt){Y|{.<Kk$2*su^leX<Q4bD0D:;|!+4A*VyI/_V-xxPQ`?D<+G' );
define( 'AUTH_SALT',        '7,wbx|5rEESYKTn9h9)wdm4ws]k?|d<5>|x%$WD0PUM,|ihTda_3H7rdn!ywwH<T' );
define( 'SECURE_AUTH_SALT', 'WQWsfbgV&r,RO=Q34HvMR`}pf0qv@6c^Q^b2T+Q]Kv89d7.{]Ad6SobpT.`l>|ds' );
define( 'LOGGED_IN_SALT',   'la,:kNI&nFhW=R8_:nAxa&O>_eU:o.(Io.%5*Oig.$78iRjb]H#)EH>4A}N>KU~p' );
define( 'NONCE_SALT',       '3fnOUn/PGgZwFEA_Km?=zlvb,3V1[4@%H}E4TeQWpf95x#cAp2Z`q&xTr:7KR!oi' );

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
