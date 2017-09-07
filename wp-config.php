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
define('DB_NAME', 'siddhartha_group');

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
define('AUTH_KEY',         'H4/8SvwR{5?%1k3IF]rG}3_=9|x#V&T3Mzg7Z-S!V_Rkr^5 OLJPUGK3^OP.z/Ne');
define('SECURE_AUTH_KEY',  ',~ZY|[S:%QY`bU&XrUO?OE}asG8a!%,0KR+2gNcuuG._YIoL8XhNh6pb9k%R<]a<');
define('LOGGED_IN_KEY',    'pa!(}j_(XM{ojg2pCTLQ*nec`_E,|/*d>Xk<H}g@:|w_udVDG m0ds:ijVdtu.tY');
define('NONCE_KEY',        'saI,qzsHYA&ED^2%yfyv4S>fGH|k)b=^#kA}@Ws,~|_~M+&pl{5~=_^e!8!H-S7f');
define('AUTH_SALT',        '?q;3JY}_)UJ)knC.gvG6e}i|e+lP-i?W_I}r1Iup0h3c]ZDh%_GzZK~Y[EmWk>ne');
define('SECURE_AUTH_SALT', 'LsqvMd_CDk*);E>|4QXcwyM1h]%Ya>P|]3j%|iO_rziUZD$fQkE^R7EqaS=f)?w7');
define('LOGGED_IN_SALT',   'JY]kHiL6(1u^OD<wygqzI[fcm+cPFK!7Q6f5mD<9+FKECr[3]yqChyRp/}u NwP7');
define('NONCE_SALT',       '>Jc%Ib~O8d#pAo< Y`NHW8U]swf7Fo73_ByGfaN2TE+/_gW?zc)AyRWjV}p3f)<R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_365';

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
