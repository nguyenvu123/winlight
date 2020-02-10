<?php
define('WP_CACHE', true); // Added by WP Rocket
define('WP_AUTO_UPDATE_CORE', 'minor');// Ce paramètre est requis pour garantir le bon traitement des mises à jour WordPress dans WordPress Toolkit. Supprimez cette ligne si l'instance WordPress n'est plus gérée par WordPress Toolkit.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'winlight' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'kjz0P6@sE)_1I]1!F!Mv5C36rK|4[E3ysW76](!(B983qu98d:(+oa5V!5c]mccv');
define('SECURE_AUTH_KEY', 'pm*4G9P]#iPT-#*#BRd4Y17!;[M+(&C_%~[1vJmSwFoZ&U%t580!q9(:Gmc|4PZ|');
define('LOGGED_IN_KEY', 'UW3y;%#64Xa|/q8K6;6-IV259~9@VNKji9L;5GDMY/pn7nqKR4z7c%|CzaV+3:4D');
define('NONCE_KEY', 'LTUW*E#0no7&Z(1:XUo!7jr1]J242SuQ!i~63pD471ol;9lHwK&x5/R1IV*za+zh');
define('AUTH_SALT', '&(_039qbg39rkWq6-jsdU91c3L7k089::BE9&Cc2BqC)P&T7#s9RQ#Yo4Lk~+:7|');
define('SECURE_AUTH_SALT', 'zs[%X#&O%_]41L!T(vt0o9l0Hp2YqT:10JBK(Z!;&OnCI9tB8Mcu3s*h8sAI2S-2');
define('LOGGED_IN_SALT', 'bC0_MOm(Zkqe+wm93Xt&469u2k(GO4!Rvly~enAw9Y8gc&w#K!Z;3D;0Nh*z]S2|');
define('NONCE_SALT', '&S:9y&@3SX5y|Bm3nw~6Q|1#!3(Vl/deS/c1X*6Ryfc_a0hn~]s)3KF8Fs8U_7K3');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'A4kmPmYw_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
