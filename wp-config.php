<?php
if(!defined('DISALLOW_FILE_EDIT')){define('DISALLOW_FILE_EDIT', true);}
?><?php
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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', '<lK.c;Q(N)z72DG[5:<8NbzMU:%SPL<nGhM#7ofVaKS=!T*61Llks?DT!X(`G/uX');
define('SECURE_AUTH_KEY', '%$_5k>pT%u73ycDg%>),:/vg)n2Fx[3eM)$JIP3L:Dt4yH.vfe9,vD]%eOJFB/gn');
define('LOGGED_IN_KEY', '$:y[l@DpMsIN?R`d7#]U/23R6Ssmv37sL9x#o~iZen5~4kfl81rvGu>Yvaa2*r&k');
define('NONCE_KEY', '?Efd6`,Bv5Q<JA/v;e[U C]t[2SMzr*Ll ~)x1ygCA*p%KQLa1CFQr6xUu1EjHT`');
define('AUTH_SALT', '3%][0j-K0lA]9g6KL0<:tE<5/_aQeRU>>H6f+m1>Tb;O0/7$$^xQ~r]sRu+~JfuO');
define('SECURE_AUTH_SALT', 'lgv[H~3DKt(((^ykl.Pb7McZYW|~ufR<sPDGVBT#|t2L(:zIC/]_b~0#x^RH:%VD');
define('LOGGED_IN_SALT', '&aLfh]EN12svYjDWy^R:$#F>W_E5x-[5%-ir$(X~/KHA8AZtl0R> YmU1n*$j;^3');
define('NONCE_SALT', 'Y6YGZlg#D)uOwx)PB+4LLo*tg|T#-0S2Gvtb/e87xwB~!*%qdU!kUg/_hs~/%4u%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'trf_';

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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	{define('ABSPATH', dirname(__FILE__) . '/');}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');