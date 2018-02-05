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
define('DB_NAME', 'bigfoto_db');

/** MySQL database username */
define('DB_USER', 'bigfoto_db');

/** MySQL database password */
define('DB_PASSWORD', 'UVManHZr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's*gnMsDE}LI>r!Qo&,Nf:QV7+TpvS552b,B;.Do2MBPeN8&V~rr8fI?zP>sYSr4r');
define('SECURE_AUTH_KEY',  'pVU-fvqSG<-/Dr$yT|1{l|%$wP%y+N(JW&W;$<K^gnev8MSlAWgaP]GF*a(z:$Bv');
define('LOGGED_IN_KEY',    ';]5mr{70 0,N{b0w60^:<ZI`aYu9LX[X|8#G6]vbVR{Y{}ss?.Y+rByj7PXV4<`j');
define('NONCE_KEY',        'YC#J]%A4t)Y;ZpDrJ23-xYj5X~`zlT4vVIP$A8+z57j[ssC=lwnKJbi0whs@E eT');
define('AUTH_SALT',        'idA(Lb`0_=~g 1#ck0v=3QZq:Oxq[  ;#]X /n#DLoS*d^_k0Y8Z}BkDRLIgI|rf');
define('SECURE_AUTH_SALT', 'Qba]yyiHZ`0=yp=I8g{kEC%XIEozx}y}(V/:<SP[RjPz2l-X[t=6[>cZh9 uNFdn');
define('LOGGED_IN_SALT',   '6tMoAwJG*$kJ?;kQ,G5}qJORBc8:/W2UZ+zLPLW1cvL:9B=E?#Uo_i~%=|c8S}6F');
define('NONCE_SALT',       'y{r&*9Q<Od{o[@-JmiY&>R~E2*&VN}jb v]b>tQxbxYr2R`q3uzg2,h1dX5mBu^]');

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
