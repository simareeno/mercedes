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
define('DB_NAME', 'this1car2is3my4dream5');

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
define('AUTH_KEY',         ';{8Th7tmCDLw{uy,vXHW`*Lj hh/gq.0Lmer|Te)luC.Co0@:EDeCSp !O)vNu>P');
define('SECURE_AUTH_KEY',  'dqA/hkK>eJ,`4{cLC}|2RI63.o<$eBXQR>zX]meQ}St[hE[{_K>##W@x!B)ZOLRg');
define('LOGGED_IN_KEY',    '>2B4e1cd%4dmQa{}igk8 l[u4l@UL*0^6S{V@]~/<b?Vv7^9R0!.Nbk2P@NhA6?(');
define('NONCE_KEY',        '|3SfyEumJ:+}N^#D8*VUD+_,fg>Oo;kM5P._&u.{q{}Otf(wIls2`8%Nt<-AezZj');
define('AUTH_SALT',        'G`e,t>T&{0isv&*}SdO3Y}os(nZUf/K}:v^Te&_VA Zsi(.zGNmID1$+G#jJkRtO');
define('SECURE_AUTH_SALT', 'Y@jUXmUQGk=>ltUA,NhNh9DVSYg!uE-t1WyKTj3eH;B&C3pQ7ftad6>3?R%mb%.V');
define('LOGGED_IN_SALT',   'm1zG;:YV)l!OGo#*Xpws(yN%ZJp/{@lvsC`=yC|Qom/J.;dWm1:VlA6Cntg.qVF7');
define('NONCE_SALT',       'Q5-,(mpf/CcOJWj`9hj6#:+G^]`Ok]E:kc&o?iIv`;|=4dY{]3rI6&7q!gG!_:NX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tcimd_';


define('WP_HOME','http://localhost:8888/mercedes');
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');
define('WP_SITEURL','http://localhost:8888/mercedes');


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
