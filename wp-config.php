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
define('DB_NAME', '[YOUR DATABASE NAME]');

/** MySQL database username */
define('DB_USER', '[YOUR DATABASE USER]');

/** MySQL database password */
define('DB_PASSWORD', '[YOUR DATABASE PASSWORD]');

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
define('AUTH_KEY',         'Ar0&>#J?_*GV!f`0pkbizQhvl`%]PEU$7p3}1a.V(Oi}/u{%TIgI[-llAH`YAd;K');
define('SECURE_AUTH_KEY',  '!UPT!E1Lf))O*MX?/2eP& cjT.tf9jLI%D<|QWqQ<wv9Dv#Mf5Y@lt]aR~zvcEOl');
define('LOGGED_IN_KEY',    ']{v@(y:(sH@QcZ{*RKiN9>k~^l4#5T9Oya1ffl=?I[/w18NT3lu$eH$V~z$(BD)[');
define('NONCE_KEY',        'D3F5nRGIK0}2I|~^(x2K)`)VlXtd{X5?PO;T-*!eo@0S:TIz|:YY}<#<9R8NYx_^');
define('AUTH_SALT',        'Yu,%#i(>5<uXRb.&j#dx:]FXq~/UY^QszoUV-hzp<ije]0S.DR=lTqOh;CP)oX&h');
define('SECURE_AUTH_SALT', 'PZQ4Ib~78tg;,$s=^OoFBA5O6^?&6bTrj=j^n/c|wLR^!SMnOJwC.1^M_.:N[rn@');
define('LOGGED_IN_SALT',   'zFt0}TF#-Mktx0b#jw(pmDBO9t/u~=qSnVqCNt^.)qEbe|}kE-=k[|35J`Y!W4x0');
define('NONCE_SALT',       '3pX)_(FXmAmA:E&bC&7S@7/H[Q`1)YR4@ZUYs_m;-EMiz$;AiD@]8e[]P*FPUNSv');

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
