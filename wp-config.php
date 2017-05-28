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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'F${M_n1Bg:jyO|4$4@f@IcE6L)K:-tzz)/4mM3!OX~[2avFCKJrQeg8RP/ul~(Uj');
define('SECURE_AUTH_KEY',  'C)[)j~g+QoyaD:;{x3zMzqt?aT=  D9IIy_`ge>=~_HDiQ383gJiA:l,yh:KX[]a');
define('LOGGED_IN_KEY',    '1~H-Nxy<Dn/R@6&z`jnlI6jGV0D5v$@P-Ne@m)Ox&`U3Z>ejv1o%Lw{Engx+@tZA');
define('NONCE_KEY',        'jX~.oT}]Gwi;07SH==,/ ,/-Hg1Ket`RYTa4x6@6yOJO%QRe+J2>t>VHA[A*{Hrn');
define('AUTH_SALT',        'Zu,yo+ol>1Qm[#~! p3:ne@Or#bmeA!OQ1OXCTL;j?%!LuGR>,Y[brW-@5*o{Ali');
define('SECURE_AUTH_SALT', '@~Kz4F[n8]v.J$kYtL-Y~qkLe_JG]B7[jpJe7v<?CE$7Ev958H.;T>tH/#iGe cX');
define('LOGGED_IN_SALT',   'Jj)}||?l]x.dA9YcRC2XT>7tgp*PaE0.HPW<6GV k,CdQ4nCK&^{zeHcWr1Xa5{P');
define('NONCE_SALT',       '^=!j_%2TSG~5_:,>^Fr=O?Pu-(rag(_c>`;0t*Pf7rWz!poEnR6fS(Vt}_&k9/i ');

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
