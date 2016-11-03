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
define('DB_USER', 'site');

/** MySQL database password */
define('DB_PASSWORD', 'site');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'MS5,>SUgGaS(p[7>ofr)HPm=/wI|laIi50^jvcz L6<}D#<iad`JI>o-}UAX]ecK');
define('SECURE_AUTH_KEY',  'N-LFLBE]<2w>&lV3~TQJ *(KvIzE[<Nq/SMdiJU%Y`ui>}<r8-9aW-o;61EvJAPq');
define('LOGGED_IN_KEY',    'j**zmZW$gSw+H{(<yN.Z+(mBqlg4i#E@ZJB(W3s9%MrYi~jx*FDBBnyinCNXRN)?');
define('NONCE_KEY',        '7ZRh~/sT4?Y/!P(ghT_Ms}<% %m5eH+7y9E3LBd5@84ml)Gg>)BY7D/E8N$/@QMq');
define('AUTH_SALT',        'uDl$N5y2,Xg0z3:UR`{]]kS)X4kFvn^iM>^u,Vr74`d_m%{mdTU3O:V0[@h7+O!h');
define('SECURE_AUTH_SALT', 'l>Gd|1.9gl7SPSoVPd)c)FHWS` SlLdf)M)N+Z:zuMZxW[He4oW{VFPzjOGmqE;e');
define('LOGGED_IN_SALT',   'nCLvS]#{zVr/`:K6hhvsB6mWj,qC*)RB/E1f%zw,L.L&dQH7G&f0,Z97^>@O8b=m');
define('NONCE_SALT',       ' cn*]F ozcIRjh7pEF?3Eg(1ur/89x^^_c@o+*.np4c!fE/c4w(_>8~53S3,/mwk');

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
