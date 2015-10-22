<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-cortex');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         'Y`(qs=t[j,V_T!W])#?U60<233<~&I|ID/deDW<`c/)~6]%VI<$dKW,14kMTacMW');
define('SECURE_AUTH_KEY',  'butl6H~O>W$!{ a9<}} >a<F~8Xv^?ZPE3GVVUYExaKhJRMC~]E$R<;~;,x5%,zE');
define('LOGGED_IN_KEY',    '5felOyL7LDv$SE]G}[CPcK8w=_n jU=_8mR>K`)W5E+O^b/jc^YT(?&^#O/J!3qy');
define('NONCE_KEY',        'da$PGj$+!k0!yPgvUbe<rvbr[!3^v&8 AM:q9_9x*_5y}!M:Pr_?%]Zxc=>XW@Aw');
define('AUTH_SALT',        'IWTQs/?dW ?q&A;lfZhcJyW<wzybnSu?c/c?~=RuC$;cKPmqDC|95eUWIjzb~PzZ');
define('SECURE_AUTH_SALT', ')Ax!xv @#NAsogu=?k>0)U<b|S:f-?R),Rn]AqD}S7+`QY,X~EWS9qemvcTF?g~|');
define('LOGGED_IN_SALT',   'Sht_w]CZq_Y~8.LM[)`X^4@2!rg#8h.~^_VKj`q)v!_Nn%J6~W`m9pPJ3X/@A07]');
define('NONCE_SALT',       'v(o^Pm@67#g*AxC>~c6!L]~D|p,<4Q?~}N*5H:/FL-noO/u%Q,.Yp3OJ^jjUg:2y');

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
