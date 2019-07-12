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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qj8]KZ`}Nl`&#k8-TbPQFBFtV}>L&1`o%|ovhH(C+-IW3[P7oq]?|N!@a-!~j?`<');
define('SECURE_AUTH_KEY',  'S1@|O$A>)HoEgHr:d.4yOU@{BWx#vO~/E!a4g?GNlLxxfa2/JzR^)YsL?[E=:yw/');
define('LOGGED_IN_KEY',    'G7hH`8<t:wlTu~-<;LF*{jeNcK39Qr0KIeNCS-.)X);5lH:Pv{3?q?bN%:;B@uxc');
define('NONCE_KEY',        'cCyZa0mRwiJeb[:f-/.G]SbMuwf,Mo.dU_$eiSP=Bh6aW0%DGe;<V<8h?[(!h+.*');
define('AUTH_SALT',        'pGc/oVh6-y4pso#&8V/Y6S%(-^}egDu{Whp)Xu}NWJ}!IG9-8Okwf,xcyBmn%i>h');
define('SECURE_AUTH_SALT', '$e=iU~MC8`/;NwGse6o6=}n41}y}wa3v2UCH`Yc [)d-tKh}Fep5}H45 7S2qFs9');
define('LOGGED_IN_SALT',   'H6Hto<-DS%khQ]=$>^g#DTIva7]_s(-gDm7kB6,*dm+{-,tF[@wluCm#?oxoWD$R');
define('NONCE_SALT',       'z/$*tN!pjD_`569$P.|(XEvcq*a#1TL)2U&<][V8kyQ|_{`Zee9M(:aWWX[lXr#q');

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
