<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-ccur');

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
define('AUTH_KEY',         '<1%+kNZnSMscN{<4pR$:MCT+qgI.}AV!c`tz;.u(yD*b S:|xU/zS_,v85oU9SkI');
define('SECURE_AUTH_KEY',  '|I~(;vc$+1<KUTV!v(gidtYdVm?N}ratvu-WJzkbxgo^sMJ,7n4xz@QVkyqNRGc#');
define('LOGGED_IN_KEY',    'WDiM_~}*BV}D.h.|!?vv&Yz6w3@ bji2Ek<9( abD)n.^a[s5N-hSi[*;tb #{6O');
define('NONCE_KEY',        '3eVs#T]ea4I@Lm3IP~u!THZB.V(kW)mJ8Nv1HPw,>T6DRm{Ou#YDNM@6ia6GHg|m');
define('AUTH_SALT',        'z.ot4/Xw_*QmzPfG87u` -Yny|u+cF*9)NdZ78;+fV+(b%h~g8x*fJM:u0|48e7+');
define('SECURE_AUTH_SALT', '=8$<Me1{En(CbKDy*MjA4W1NP_dGi+(7n<qN.&5m$jWJ!Y4>(Rj|ld47+)FbZ&c$');
define('LOGGED_IN_SALT',   'O2InM=vl7Z@t)-(96+q`8=.c<>i _!hcH4|Np+8aJT*i+?D]M1oSgYCI8!f=|+7Q');
define('NONCE_SALT',       'KvCcG73htGfH[?)|4+_f;X}^e~hWZ_#${`%eCQap|8=|&}CWA{-xl@+}[P$c]!h`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
