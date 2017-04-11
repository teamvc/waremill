<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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

define('WPCF7_AUTOP',false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd57111sd118748');

/** MySQL database username */
define('DB_USER', 'd57111sa112430');

/** MySQL database password */
define('DB_PASSWORD', 'RUwozAl3FWRj!svA8jlh)6zn');

/** MySQL hostname */
define('DB_HOST', 'd57111.mysql.zone.ee');

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
define('AUTH_KEY',         '7[e0F[2g|;JnAC*M4/@]>j^T|lkOUCIt+}mqzbQS~y+N0>TUU~:,pP1Z#ns9MnQt');
define('SECURE_AUTH_KEY',  '}IH/6gZ6-!AF%l,0nu4As= %bl+1%OnZ%D;cLVB`gri:|Bs(xPr9FX?rKI!WTll>');
define('LOGGED_IN_KEY',    'rPY4iJ=jr3.#%X/8Zm[i*5A^PrgR=uBD<_d*-KH<}Pt.mF1EzuEcE+3cNN!@ j~s');
define('NONCE_KEY',        'ElQ6p;.L,;:+<JC++^${2;c?T{OK0p8{Ki1+i*nSp_~3zhMt/LQgn4au!eD]i}>B');
define('AUTH_SALT',        '<Yptxx;k@[a$3DyFx^gglPj0sj5g>eaNbrmt>Zm>zWeM{[`6>{24[}{#*Y4QVn~~');
define('SECURE_AUTH_SALT', 's;2l}`ls}5qKhD7mTJ0w9 $?b}t&[9o~:v7+cT8SohOQ_[ -+-,KcJ-_oLVk)c0*');
define('LOGGED_IN_SALT',   'z[_N<mrnChLdhcwd@vT9!~{:!ewRLgSZb5nXVZ IDBac:n@Urdb{?{(0>x^_Bf`T');
define('NONCE_SALT',       '.T;+(JF^?HaLbf@kV`4~ {~dF-rC~t/NP6,7yV^kyvGe6)4gZoKprIuCZ#+m+[rf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'waremill_';

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

define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
