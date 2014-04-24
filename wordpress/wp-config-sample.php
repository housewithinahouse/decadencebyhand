<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_housewithin');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'knucklesx99');

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
define('AUTH_KEY',         'zx{h*V::ZKn?.(Tiywu-UOL64rwBn)ynkGM2-9FA.xgFr>pA6~BlgGL{e4qv+o =');
define('SECURE_AUTH_KEY',  '3=$o!`NNsYd,|G=X0o4ERXP 6H?DWsn_SOj&YANJw%FY#0jP}9C+_0v03ygJw&M9');
define('LOGGED_IN_KEY',    'ER.}V@;yO9%mFbW<YsD2ZA-UxukADv[&8i0K2-w5+?E^+X%_zIc^O*K)TLOk2n)Z');
define('NONCE_KEY',        '4|}E`&|8}3.vb-PmDIN>g;TM|;TvIoVhl&1tI {O0GWD)`_[^Rj-{krt nOifa31');
define('AUTH_SALT',        'c-){TI]*[PaGLNXjt-ANii~>|$Bq| Zy$$ZE_EGg$D(S8@}i[^qTt*`sJeMJ8!)P');
define('SECURE_AUTH_SALT', 'egbG%`Xyj~fo4745~E>B2?-=XI@x&3`V# G3$+]WXc{k%gt`L!oqz$e*#wPS02~V');
define('LOGGED_IN_SALT',   'a_x5c<@<_zsL=_0[{r8xn 7w#XX3MWi51Er`Fxb=RH}Fl!=U~_v}%J>*3uW7|:!-');
define('NONCE_SALT',       'j*+%6gmbA8/4iV6$O5_#gMC2c&I$o;yF-^IhGK xT_#DUdn+ec<&+,NUZ!XIf<#)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
