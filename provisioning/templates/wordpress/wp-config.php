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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         'f.Zj[!9<jfg>;Uf!Qhr$_p;6^hOcg,rB( $@<#&M$nk+?9+n/u!`tR)g]5i~FPj)');
define('SECURE_AUTH_KEY',  'VLvD_~y{YP;#B&htB-_Nm]3!B:[r W~?vBD#zAr-|g/Y[#^fo<t_km4aKfVP]f^p');
define('LOGGED_IN_KEY',    '|=SY$Egs_lq2p!b)HCyiz9/xAI4L;Zxb#Zo=HT;[(??O+_&i@Nx_C4_J+1`ETbOM');
define('NONCE_KEY',        'G;;3%Ks?:tV1ojzpN#._<^qXd]s_?Xihx;F}z`?,0pI($?JR}x}xUPmVD&If^P^O');
define('AUTH_SALT',        'Q.s^vW#CE_K%rV<jZt4dXwXq82WouC6MKu%l<&~vz_fVo_q!0$<3O~-W#1lVmLbe');
define('SECURE_AUTH_SALT', ':vS*)W_&i`pN&PR>z,VQvXP%@]?&>F}@/6]5GFt{7SmLIszHAOA4&j{jRuc+&Qp;');
define('LOGGED_IN_SALT',   '6oW0 `7WHC8nt49dB,Xl.}[lt_kcbYLXpODbixNB1C@8rgQG@qy FgGO=l*dWg(0');
define('NONCE_SALT',       '^JI9i|D&^/:?OQ+H*AjQn_j>Vl;{zx3EM^V#4uRc* z53ZXeq%l[ku/<X WmR9ud');

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
