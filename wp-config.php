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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stateline1');

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
define('AUTH_KEY',         '[fK9D_-b@@!%vEo;5!SBO;`%q1]iR3f9[]A?%)%&AUo<V1@=x@7=$~~^Z0fmvaq~');
define('SECURE_AUTH_KEY',  'U*|IN@;YogA8}o>1.P9-.([N;2/?^TJ^yc-Q7]-E3M[M^F!SwM>-AC33x1d1s+W{');
define('LOGGED_IN_KEY',    ']>cU|u&nlD!9~x>###GC`In!vrF#U=IG+n2{So5>;~8|K:&]/y=,V5]7ytW?g]mi');
define('NONCE_KEY',        'A/r#xq)cn]Y|rLUVedC|Y++h=cs[-M)!eb`b!?o_et gt|L6;]mGnB*>!v%m^GYe');
define('AUTH_SALT',        ';BC+www _SYP8qeE4|rdbOKnELo_2VnS?hD~CgC|3TC!y0Vb6[1@#ZA23lT;^#i)');
define('SECURE_AUTH_SALT', 'd-)>p+/cV(QoOOIbAVHmpbli6h#Q|Me}I}+,kq[x:;.GsT${v+@U:%2Vi#z6Yv])');
define('LOGGED_IN_SALT',   'sRN=D2;l%:*Ql8<bQTWc|& 2^pVPijUpC2l-mXgj)tFK}OTbw)v;vhWbd7iSq&/,');
define('NONCE_SALT',       ')`7r3VwgGHEM=-4}H;{?32D.:?g yOn4GVazs8yAcPzK,!9^_o6]|K1wCq4${U% ');

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
