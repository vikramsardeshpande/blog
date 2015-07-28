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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress-pass');

/** MySQL hostname */
define('DB_HOST', '10.0.1.209:3306');

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
define('AUTH_KEY',         '*-G/8?`5Py%(UgFq?c}YVX48237K}[556H--8KXotaF/uAV+-Qa}d^!,0{M[A7|S');
define('SECURE_AUTH_KEY',  'J3H;?#}Cd&B}qV2>gn:B<Z8,s4<-(h8EAL8jGES&n}U-F&Ca6#)&|AW0_56B<96M');
define('LOGGED_IN_KEY',    'u(<;k,GF>uWJA|0o;1{!|qv/7/xW{VyN|Utbf2k16R0/85(PZ7bkq8}Pb%DfUH$P');
define('NONCE_KEY',        'Rkxw/A9hGw!ZLVgB+6juxufzK-q`wZ1j#*k+>1:a$FJI].LL3Ei<rDy^^Z>|a:Jv');
define('AUTH_SALT',        'r=0mIFa7_mXO)d5F-^|2||vX+ibB{&L(*T{::&(R*[Tl%~AU(]S+U!X#)8HObRs+');
define('SECURE_AUTH_SALT', '1>Uk(vGS^Esk[g9nqnM8`-++%bvE|8s+q4~JH>C^8[V*%}lI|RosAiR{lEmChz[+');
define('LOGGED_IN_SALT',   'KJs?$yhihRK3q@jZ1b6L|.fWp}Z8Xfca6{lsvrf&Y,;^oM<ugulm<.?I &L>Y+F`');
define('NONCE_SALT',       'wjspb#qsoEk5PP]eTr*-q(vJQ}ZjuGrtd@9>x=:RmLcr`PKr:`iy>Lf hMHqL_]*');
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
