<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rabby2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[Va!F@vg=tg]:!do7-e[[Q5NDL8c?u(2MIs1@8o8.990h<CYP@lU`<,D8xem:n1s' );
define( 'SECURE_AUTH_KEY',  'n#7V]&nUS~PB#0){c.*{7UYLBUB`9j_wbH<&J/FwJ2|4OMi4NoOljz.J8|4K$pwl' );
define( 'LOGGED_IN_KEY',    'ek@6lDYGXFsA OeS!,6Nz|c$@K#+HS-DM+G]2|IJg1LlktPUjE`:^]UNq3ZX*B{3' );
define( 'NONCE_KEY',        '+4hDs!$>0aqfZa^aRJIUb;]}nPR)+Eg+>/fEq9#`1AxaIOL-=d0PniC;TgG_fN5P' );
define( 'AUTH_SALT',        '=}q>e4eN+__hfdlw~{1vOy}^q?L{c>o^D@95={@K[.  l``9GM;Nz9I??u]W?cmf' );
define( 'SECURE_AUTH_SALT', '(]UREbrQH*ls~,>zjpaMk;(SJoUVUbrK6!Os}AO[$SNl>&z4x%:6;hDoH@}mr!IV' );
define( 'LOGGED_IN_SALT',   'ip>>dW-1DQVg^fM2u+Rh/%KkgdYvG@z<V~aSEx%h!iPM_?s&-/Jwjei=,yA2c#=:' );
define( 'NONCE_SALT',       'Vv-;ZMr{JC#91nyJI;o#EIWBfhl~H1xjjd36!;X_j7+wHV[`W`q{wO1hFw@}@;Wv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
