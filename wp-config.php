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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'laundry');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';c,DcJ=&!RzYD{Fy! {>rRqEfK]EF3fvl)_MbO;)$R1XRx:A0(j0H?8 pDHWrc.:');
define('SECURE_AUTH_KEY',  'd I.I~$dSEA+-}kPvG{yP?l;oUI:qI/1AHE[K]uW=p!S=&+Q1?maV,=ZRhDH/Cq1');
define('LOGGED_IN_KEY',    '?,l,*vpr&.gBE#a`n(Oh_^RtI%e,e-1 Y<3Hio09kl&R4~Cd&wIJ_!^=9=DY[i(f');
define('NONCE_KEY',        '3HmYlAb5E0P1/nWG:zrmC-nMVsvrYx/_`!Dal@%-o]QozY..?ZDK|)r~Jp{Q$Y,p');
define('AUTH_SALT',        ' +#ZQJ8Tzzo*E^arfdHypt8KGIn$sB+YO[9,Plw7gF_*7Q:)p ojvOJz]7)+ZN%(');
define('SECURE_AUTH_SALT', '(Z.D)Z4Hbb6d|$nug!t|sj{XUj&Thm0OW=rE;7D+An`SF=Yjyh{%}/t;HZPhSk>Y');
define('LOGGED_IN_SALT',   '5 )^EtDe637Q: DX(eiM`#LL+:BZ0%JJk!{)Ia~B^.q5n#+Df`2T@ShU>AA:Q^0~');
define('NONCE_SALT',       'LsMINs,x?z??h#7ZLVSyT7M c1FGcH.YrqA%RrDrY^eU9Di[-7hzis*C3+QyrA4m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
