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
define('DB_NAME', 'blt');

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
define('AUTH_KEY',         '9c@Xdv[0+ c%TZli4bd}77#!vrp6tM;xV5sp<5c5.`(3hd8+|||fd%OV$[~cT4h<');
define('SECURE_AUTH_KEY',  'q3{(^98H8F{Tp:#&8K5#H)c:Rf`E9g39j+f?cc1ptK.e$R;<TKm=];|~8sw?mbYr');
define('LOGGED_IN_KEY',    'Vg5u)JUHog]BxTcrJ`]0Im}f6Z4@8RZ 585R?/WH,[;6o|nJ[8}RwyP^fFv4jP$#');
define('NONCE_KEY',        'cSF1(tKmscPS{OeK?C|->EoPrx-90a`lCAQTk@DP6RtR1|;Gj&;/-]H+ep`V[_|/');
define('AUTH_SALT',        'qR}vOB@`VnSaQm-u[R uURM LR%cvZT:<Zl$~2kPb)|(R~ F/hr5r;vY,a B{lrF');
define('SECURE_AUTH_SALT', 'ZAEC^q_`^K-r`~nzYEfbyZx;g3@_V+u?o7UMKD=A-M5kZr^&o#wUJx_yyn.0XC^5');
define('LOGGED_IN_SALT',   'qF;[FU-+B<^vtrOGuolS|P]L|oONt&@83:=$-_-Sx}K)jB0}&sT8@.#ZV1i(<ETK');
define('NONCE_SALT',       'o5zB>#.!C3H~-r1FBAP/8Eosr7~XpGSf?:UcW2z|-`Z<]F/0KZqks>.Yk]lik$KC');

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
