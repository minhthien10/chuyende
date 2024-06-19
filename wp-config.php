<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chuyende' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-NuBhC$N1flH1Ry|_+f}/IP.Jr>GPt`?y4rszT/E|?~gwDknzp!=cw d^4V??cQX' );
define( 'SECURE_AUTH_KEY',  'M:a[7@[p=?4a]N9fyCsXx%>cyU{kFClv4sj|[5fIX+~}zURK80U&1%J2b J9WoT%' );
define( 'LOGGED_IN_KEY',    'L,rW(pr9|*,U8u>7cUg8:7j=7|4A|k4&abY.W&b}X d@c bCLm7%DUqB8Xm4B4t&' );
define( 'NONCE_KEY',        'Ah/,|oa=pa6UJt;,=jZ4)!3L> :f$/9;rz ^U5OHhCZ+Ts2*q-Ko`m,dy+4w%o%P' );
define( 'AUTH_SALT',        'A-XY6GoC$5M5uOH<by4BhLV5{#AX[pVe}JI>S@6hv^q`f6-T9oiN;~?P`~G~UpRh' );
define( 'SECURE_AUTH_SALT', 'RU$M.z~FhZF4[6 H{f{X{V$a)W;{^*^QOr]D99|#b{j>7l2_/Lt[5vJMmT?{FB;G' );
define( 'LOGGED_IN_SALT',   'r>37$(jDn{adh%Ru1HOE8)E)X8u9O`}c=VU`XWo8L<~%a)R240K0 !AC}RH(sz~&' );
define( 'NONCE_SALT',       'TKJ>@p%`dxzoUGym8fA3lNoO0yp.sD!#0Z>lMnQ55<lGG)5kjh`.*dt Mc&.&ofT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
